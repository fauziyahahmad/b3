<?php
    if(isset($_POST['submit'])){
        $sisi =$_POST['sisi'];
        $tanggal=date("d-m-Y H:i:s");       
        // menghitung luas persegi panjang
        $luas_persegi = $sisi*$sisi;
   
        echo "Luas persegi [ $sisi x $sisi ] = $luas_persegi<br />"; // menampilkan hasil perhitungan
        
        // memasukkan ke file txt
        $buka=fopen("hasilpersegi.txt",'a');
        fwrite($buka,"sisi : ${sisi} <br> ");
        fwrite($buka," luas persegi : ${luas_persegi} <br> ");
        fwrite($buka,"dibuat : ${tanggal} <br> ");
        fwrite($buka,"<hr>");
        fclose($buka);
        print "data berhasil disimpan";
    }
?>