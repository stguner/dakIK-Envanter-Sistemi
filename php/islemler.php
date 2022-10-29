<?php 
include 'config.php';

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
        
            $kontrol = $conn->query("SELECT * FROM `cevaplar` WHERE tckn=$tckn");
            $count = $kontrol->rowCount();
            if($count == 0){
                $formKontrol = $conn->query("INSERT INTO cevaplar (tckn,telNo,ad,soyad,cinsiyet,dogumTarihi,email,burc,baslangic) VALUES ('$tckn','$telNo','$kullaniciAdi','$kullaniciSoyadi','$cinsiyet','$dogumTarihi','$email','$burc','$baslangic')");
                echo true;
            }else{
                echo false;
            }
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

        
    
    }

    



?>