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
            }else{
                $arr[1] = false;
            }

            echo json_encode($arr); // JS'e array göndermek için kullanırız

            }
        break;
    
    case 'bitis':
        if($_POST){
            $bitis = $_POST["baslangic"];
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

    case 'tcknSil':
        if($_POST){
            $tckn = $_POST["tckn"];
            $bitisKontrol = $conn->query("DELETE FROM cevaplar WHERE tckn=$tckn");
            $count = $bitisKontrol->rowCount();
            if($count > 0){
                echo true;
            }else{
                echo false;
            }
        }
        break;
    
    case 'KTsonuclariGetir':
        if($_POST){
            $tckn = $_POST["tckn"];
            $soruid = $_POST["soruid"];
            $KTA = $_POST["KTA"];

            $formKontrol = $conn->query("SELECT kt$soruid FROM cevaplar WHERE tckn=$tckn");
            $count = $formKontrol->rowCount();
            if($count > 0){
                foreach($formKontrol as $row){
                    echo $row["kt$soruid"];
                }
            }else{
                echo 'Başarısız';
            }
        }
        break;

    case 'DTsonuclariGetir':
        if($_POST){
            $tckn = $_POST["tckn"];
            $soruid = $_POST["soruid"];

            $formKontrol = $conn->query("SELECT dt$soruid FROM cevaplar WHERE tckn=$tckn");
            $count = $formKontrol->rowCount();
            if($count > 0){
                foreach($formKontrol as $row){
                    echo $row["dt$soruid"];
                }
            }else{
                echo 'Başarısız';
            }
        }
        break;
    
    case 'ETsonuclariGetir':
        if($_POST){
            $tckn = $_POST["tckn"];
            $soruid = $_POST["soruid"];

            $formKontrol = $conn->query("SELECT et$soruid FROM cevaplar WHERE tckn=$tckn");
            $count = $formKontrol->rowCount();
            if($count > 0){
                foreach($formKontrol as $row){
                    echo $row["et$soruid"];
                }
            }else{
                echo 'Başarısız';
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