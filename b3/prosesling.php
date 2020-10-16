<?php
    if(isset($_POST['submit'])){
        $jari =$_POST['jari']; 
        $tanggal=date("d-m-Y H:i:s");   
        $p=3.14;
        // menghitung luas lingkaran
        $luas_ling = $p * ($jari*$jari);
   
        echo "Luas lingkaran berjari-jari $jari = $luas_ling<br />"; // menampilkan hasil perhitungan
        
        // memasukkan ke file txt
        $buka=fopen("hasilling.txt",'a');
        fwrite($buka,"jari-jari : ${jari} <br> ");
        fwrite($buka," luas lingkaran : ${luas_ling} <br> ");
        fwrite($buka,"dibuat : ${tanggal} <br> ");
        fwrite($buka,"<hr>");
        fclose($buka);
        print "data berhasil disimpan";
    }
?>