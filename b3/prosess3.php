<?php
    if(isset($_POST['submit'])){
        $alas =$_POST['alas'];
        $tinggi =$_POST['tinggi'];
        $tanggal=date("d-m-Y H:i:s");       
        // menghitung luas segitiga
        $luas_s3 = $alas*$tinggi / 2;
   
        echo "Luas Segitiga [ $alas x $tinggi / 2 ] = $luas_s3<br />"; // menampilkan hasil perhitungan
        
        // memasukkan ke file txt
        $buka=fopen("hasils3.txt",'a');
        fwrite($buka,"alas : ${alas} <br> ");
        fwrite($buka,"tinggi : ${tinggi} <br> ");
        fwrite($buka," luas segitiga : ${luas_s3} <br> ");
        fwrite($buka,"dibuat : ${tanggal} <br> ");
        fwrite($buka,"<hr>");
        fclose($buka);
        print "data berhasil disimpan";
    }
?>