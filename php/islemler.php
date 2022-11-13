<?php 
include 'config.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

switch($_GET['mode']){
    case 'baslangic':
        if($_POST){
            $kullaniciAdi = $_POST["kullaniciAdi"];
            $kullaniciSoyadi = $_POST["kullaniciSoyadi"];
            $tckn = $_POST["tckn"];
            $telNo = $_POST["telNo"];
            $cinsiyet = $_POST["cinsiyet"];
            $email = $_POST["email"];
            $dogumTarihi = $_POST["dogumTarihi"];
            $baslangic = $_POST["baslangic"];
            $burc = $_POST["burc"];

            $client = new SoapClient("https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL");
            $arr = []; // İlk index Mernis kontrolü dogru/yanlis, ikinci index kullanilmis tckn 
            try {
                $result = $client->TCKimlikNoDogrula([
                    'TCKimlikNo' => $tckn,
                    'Ad' => strtoupper($kullaniciAdi),
                    'Soyad' => $kullaniciSoyadi,
                    'DogumYili' => explode('.', $dogumTarihi)[0]
                ]);
                if ($result->TCKimlikNoDogrulaResult) {
                    $arr[0] = true;
                } else {
                    $arr[0] = false;
                }
            } catch (Exception $e) {
                echo $e->faultstring;
            }
        
            $kontrol = $conn->query("SELECT * FROM `cevaplar` WHERE tckn=$tckn");
            $count = $kontrol->rowCount();
            if($arr[0] && $count == 0){
                $formKontrol = $conn->query("INSERT INTO cevaplar (tckn,telNo,ad,soyad,cinsiyet,dogumTarihi,email,burc,baslangic) VALUES ('$tckn','$telNo','$kullaniciAdi','$kullaniciSoyadi','$cinsiyet','$dogumTarihi','$email','$burc','$baslangic')");
                $arr[1] = true;
            }
            echo json_encode($arr); // JS'e array göndermek için kullanırız

            }
        break;
    
    case 'bitis':
        if($_POST){
            $bitis = $_POST["bitis"];
            $tckn = $_POST["tckn"];
            $bitisKontrol = $conn->query("UPDATE cevaplar SET bitis='$bitis' WHERE tckn=$tckn");
        }
        break;

    case 'adminGiris':
        if($_POST){
            $adminKullaniciAdi = $_POST["adminKullaniciAdi"];
            $adminSifre = $_POST["adminSifre"];
            $bitisKontrol = $conn->query("SELECT kullaniciAdi,sifre FROM `admin` WHERE kullaniciAdi='$adminKullaniciAdi' AND sifre='$adminSifre' ");
            $count = $bitisKontrol->rowCount();
            if($count > 0){
                echo true;
            }else{
                echo false;
            }
        }
        break;


    case 'sonuclar':
        if(isset($_GET["tckn"])) {
            $formKontrol = $conn->query("SELECT * FROM cevaplar WHERE tckn=".$_GET["tckn"]);
            $result = $formKontrol->fetch(PDO::FETCH_ASSOC);
            $count = $formKontrol->rowCount();
            if ($count > 0) {
                $obj = new stdClass();
                // KT hesaplama

                $kisilik = array_slice($result, 11, 40);
                $kt = array_count_values($kisilik);
                $obj->kta = $kt['A'];
                $obj->ktb = $kt['B'];
                $obj->ktc = $kt['C'];
                $obj->ktd = $kt['D'];

                // DT hesaplama
                $davranis = array_slice($result, 51, 35);
                $gdp = [1, 3, 4, 6, 7, 10, 12, 14, 16, 18, 19, 22, 24, 25, 27, 28, 30, 35];
                $gdp_total = 0;
        
                $bdp = [8, 13, 20, 23, 26, 31, 32, 33, 34];
                $bdp_total = 0;
        
                $pdp = [2, 5, 9, 11, 15, 17, 21, 29];
                $pdp_total = 0;
        
                for ($i = 1; $i < 36; $i++) {
                    if (in_array($i, $gdp)) {
                        $gdp_total += $davranis['dt'.$i];
                    } else if (in_array($i, $bdp)) {
                        $bdp_total += $davranis['dt'.$i];
                    } else {
                        $pdp_total += $davranis['dt'.$i];
                    }
                }

                $obj-> gdp = $gdp_total;
                $obj-> bdp = $bdp_total;
                $obj-> pdp = $pdp_total;

                // ET hesaplama
                $envanter = array_slice($result, 86, 39);
                $disadonukluk = [1, 2, 8, 10, 11, 13, 39];
                $disadonukluk_total = 0;
        
                $duygusalDenge = [7, 15, 17, 20, 23, 30, 32, 35];
                $duygusalDenge_total = 0;

                $ozdenetim = [5, 6, 14, 16, 27, 29, 36, 38];
                $ozdenetim_total = 0;

                $uyumluluk = [3, 18, 21, 25, 28, 33, 34, 37];
                $uyumluluk_total = 0;

                $yeniligeAciklik = [4, 9, 12, 19, 22, 24, 26, 31];
                $yeniligeAciklik_total = 0;

                for ($i = 1; $i < 40; $i++) {
                    if (in_array($i, $disadonukluk)) {
                        $disadonukluk_total += $envanter['et'.$i];
                    } else if (in_array($i, $duygusalDenge)) {
                        $duygusalDenge_total += $envanter['et'.$i];
                    } else if (in_array($i, $ozdenetim)) {
                        $ozdenetim_total += $envanter['et'.$i];
                    } else if (in_array($i, $uyumluluk)) {
                        $uyumluluk_total += $envanter['et'.$i];
                    } else {
                        $yeniligeAciklik_total += $envanter['et'.$i];
                    }
                }

                $obj-> disadonukluk = $disadonukluk_total;
                $obj-> duygusalDenge = $duygusalDenge_total;
                $obj-> ozdenetim = $ozdenetim_total;
                $obj-> uyumluluk = $uyumluluk_total;
                $obj-> yeniligeAciklik = $yeniligeAciklik_total;

                echo json_encode($obj);
            }
        }
        break;
        

    case 'mailGonder':
        if($_POST){
    require 'vendor/autoload.php';

    $neseli = $_POST["neseli"];
    $pdp = $_POST["sakin"];
    $bdp = $_POST["titiz"];
    $otoriter = $_POST["otoriter"];

    $mail = new PHPMailer(true);
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'slymntrkr1905@gmail.com';                     //SMTP username
        $mail->Password   = 'mqrewfagumsihwtb';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('slymntrkr1905@gmail.com','Titiz Agro Grup Envanter Testi Cevapları');
        $mail->addAddress('gunersuleymanturker@gmail.com');
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'dakIK Envanter Testleri cevaplarınızın sonuçlarını görebilirsiniz.';
        $mail->Body    = 'Kişilik Testi: Neşeli ve Hayat Dolu:%'+$neseli+' <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
        if($mail->send()){
            echo true;
        }else{
            echo false;
        }
    }
    break;
        
    
    }

   

?>