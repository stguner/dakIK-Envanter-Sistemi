<?php 
include 'config.php';

switch($_GET['mode']){
    case 'davranisTesti':
        if($_POST){
            $soruid = $_POST["soruid"];
        
            $formKontrol = $conn->query("SELECT * FROM davranistesti_sorular WHERE soru_id='$soruid'");
            $count = $formKontrol->rowCount();
            if($count > 0){
                foreach($formKontrol as $row){
                    echo $row["sorular"];
                }
            }else{
                echo 'Başarısız';
            }
        }
        break;
    case 'envanterTesti':
        if($_POST){
            $soruid = $_POST["soruid"];
            $formKontrol = $conn->query("SELECT * FROM envantertesti_sorulari WHERE soru_id='$soruid'");
            $count = $formKontrol->rowCount();
            if($count > 0){
                foreach($formKontrol as $row){
                    echo $row["sorular"];
                }
            }else{
                echo 'Başarısız';
            }
        }
        break;
    case 'kisilikTesti':
        if($_POST){
            $soruid = $_POST["soruid"];
            $formKontrol = $conn->prepare("SELECT * FROM kisiliktesti_secenekleri WHERE soru_no='$soruid'");
            $formKontrol->execute();
            foreach($formKontrol as $veri)
            {
                $hepsi[] = $veri;
            }   
            echo json_encode($hepsi);
        }
        break;
    
    case 'cevapYaz':
        if($_POST){
            $cevaplar = $_POST['cevaplar'];
            $tckn = $_POST['tckn'];
            $baslangic = $_POST['baslangic'];
            $parca = explode("-",$cevaplar);
            $soruid = $parca[0];
            $cevap = $parca[1];
            $sturu = $parca[2];

            if($sturu == 2){
                $formKontrol = $conn->query("UPDATE cevaplar SET dt$soruid = '$cevap' WHERE tckn=$tckn and baslangic='$baslangic'");
            }else if($sturu == 3){
                $formKontrol = $conn->query("UPDATE cevaplar SET et$soruid = '$cevap' WHERE tckn=$tckn and baslangic='$baslangic'");
            }else{
                $formKontrol = $conn->query("UPDATE cevaplar SET kt$soruid = '$cevap' WHERE tckn=$tckn and baslangic='$baslangic'");
            }
        }
        break;
    
    }

    
?>