<?php
    // 1. Membuat Code Aritmatika ('+','-','*','/')

    $a = 5;
    $b = 2;
    
    // Operator Aritmatika
    $sum = $a + $b;
    $min = $a - $b;
    $times = $a * $b;
    $div = $a / $b;

    echo "1. ";
    echo "<p> Hasil dari 5 + 2 adalah : " . $sum;
    echo "<br>";
    echo "<p> Hasil dari 5 - 2 adalah : " . $min;
    echo "<br>";
    echo "<p> Hasil dari 5 x 2 adalah : " . $times;
    echo "<br>";
    echo "<p> Hasil dari 5 : 2 adalah : " . $div;

    echo " ";
    echo " ";

    //2. Buat 2 buah variable dan jalankan operator pembanding ('>','<','==','>=','<=') untuk kedua variable tersebut.

    $t = 8;
    $f = 5;

    echo "<p> 2. ";
    echo "<br>";
    var_dump($t > $f);
    echo "<br>";
    var_dump($t < $f);
    echo "<br>";
    var_dump($t == $f);
    echo "<br>";
    var_dump($t >= $f);
    echo "<br>";
    var_dump($t <= $f);
    echo "<br>";

    //3. Buatkan Program dengan looping "for"

    echo "<p> 3. ";
    for ($i = 0; $i <= 10; $i++) {
        echo "Ini adalah nomor ke : " . $i . "<br>";
    }

    echo "<br>";

    //4. Buatkan program dengan looping "for"

    echo "4. ";
    echo "<br>";
    $bintang = 5;

    for ($k = $bintang; $k > 0; $k--) {
        for ($l = $bintang; $l >= $k; $l--) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<br>";

    // 5. Buat program dengan nilai lulus dan tidak lulus menggunakan pengkondisian "if" dengan minimal terdapat 2 kondisi

    // Nilai
    $nil1 = 89;
    $nil2 = 95;
    $nil3 = 87;
    $nil4 = 95;
    $nil5 = 92;

    $total = $nil1 + $nil2 + $nil3 + $nil4 + $nil5;
    $rata2 = $total / 5;

    echo "5. ";
    echo "<br>";

    // Pengkondisian
    if ($rata2 >= 90) {
        echo "Nilai Anda Lulus!";
    } else {
    echo "<br>";
        echo "Nilai Anda Tidak Lulus!";

    }

    echo "<br>";
    echo "<br>";

    //6. Buatlah program diskon

    echo " ";
    echo "6. ";
    echo "<br>";

    // Harga Produk
    $baju = 80000;
    $celana = 185000;
    $tas = 113000;
    $sepatu = 225000;

    // Produk yang ingin dibeli
    $jumlah_baju = 2;
    $jumlah_celana = 1;
    $jumlah_tas = 1;
    $jumlah_sepatu = 3;

    // Total belanjaan
    $total_harga = ($baju * $jumlah_baju) + ($baju * $jumlah_celana) + ($baju * $jumlah_tas) + ($baju * $jumlah_sepatu);

    // Potongan Diskon 3%
    $diskon = 0.3;
    if($jumlah_baju > 1) {
        $total_harga -= $baju * $jumlah_baju * $diskon;
    }
    if($jumlah_celana > 1) {
        $total_harga -= $celana * $jumlah_celana * $diskon;
    }
    if($jumlah_tas > 1) {
        $total_harga -= $tas * $jumlah_tas * $diskon;
    }
    if($jumlah_sepatu > 1) {
        $total_harga -= $sepatu * $jumlah_sepatu * $diskon;
    }

    // Diskon 5%

    $diskon_5= 0.5;
    if($total_harga > 100000) {
        $kelipatan = floor($total_harga / 100000);
        $total_harga -= ($kelipatan * 100000 * $diskon_5);
    }

    echo "Total belanjaan mu adalah : " . $total_harga;

?>