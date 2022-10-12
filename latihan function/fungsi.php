<?php
    $a=2000;
    $b=3;
    function menghitung()
    {
        global $a,$b;
        $c=$a+$b;
        return $c;
    }
    echo menghitung();

    $variabel=function()
    {
        //baris kode;

    };
    $variabel;
    echo "<br>";

    //FUNGSI MATEMATIKA
    //fungsi pow = pangkat
    echo pow(3,2);
    echo "<br>";
    //fungsi round = membulatkan
    echo round(2.55);
    echo "<br>";
    //fungsi rand(min,max) = menghasilkan angka acak
    echo rand(2,10);
    echo "<br>";
    //fungsi max = mengembalikan nilai terbesar dari sekumpulan data
    echo max(2,3,4,1,5,6,7,8,9);
    echo "<br>";
    //fungsi min = mengembaliakn nilai terkecil dari sekumpulan data
    echo min(2,3,4,1,5,6,7,8,9);
    echo "<br>";
    //fungsi sqrt = mengembalikan hasil dari akar kuadrat suatu nilai
    echo sqrt(64);
    echo "<br>";
    //fungsi pi = mengembalikan nilai PI
    echo pi();
    echo "<br>";

    //FUNGSI STRING
    //fungsi strlen(string) = menghitung jumlah karakter
    echo strlen ("Pemrograman Web Dua");
    echo "<br>";
    //fungsi str_word_count(string) = menghitung jumlah kata
    echo str_word_count("Pemrograman Web");
    echo "<br>";
    //fungsi str_replace(find,replace,string) = mengganti kata yang terdapat pada kalimat
    echo str_replace("web","visual","pemograman web dua");
    //fungsi strrev =  membalikan string
    echo strrev("hellow world");
    echo "<br>";
    //fungsi str_repeat (string,time) = mengulangi kalimat atau kata
    echo str_repeat("Pemrograman Web Dua ",3);
    echo "<br>";
    //fungsi str_shuffle (string) = mengacak kata atau kalimat
    echo str_shuffle("Pemrograman Web Dua");
    echo "<br>";
    //fungsi strpos(string) =mencari teks dalam kalimat/String dan mengembalikan posisi dari teks tersebut dalam kalimat dalam bentuk angka, jika tidak ditemukan akan mengembalikan nilai false
    strpos("Hello world!", "world");
    echo "<br>";

    //FUNGSI ARRAY
    //array_unique = menghasilkan array yang datanya semua berbeda
    $angka = array(1,2,2,4,4,3,3);
    $hasil = array_unique($angka);
    print_r($hasil);
    echo "<br>";
    // Array_reverse = membalikkan urutan elemen/data array
    $angka = array(1,2,2,4,4,3,3);
    $hasil1= array_reverse($angka);
    print_r($hasil1);
    echo "<br>";
    // Shuffle = mengacak urutan data array
    $angka = array(1,2,2,4,4,3,3);
    shuffle($angka);
    echo "<br>";
    // Count = menghitung jumlah elemen array
    $angka = array(1,2,2,4,4,3,3);
    echo count($angka);
    echo "<br>";
    //  Sort -> mengurutkan elemen array
    $angka = array(1,2,2,4,4,3,3);
    sort($angka);

    //FUNGSI ARRAY ASSOCIATIVE
    // Array_values = Untuk mengambil semua value dari array
    $mobil = ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
    $values = array_values($mobil);
    echo '<pre>'; print_r($values);
    echo "<br>";
    //Array_keys = Untuk mengambil semua key dari suatu array
    $mobil = ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
    $keys = array_keys($mobil);
    echo "<pre>"; print_r($keys);
    echo "<br>";
    //Array_merge = menggabungkan array
    $kendaraan = ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus'];
    $mobil = ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
    $merge = array_merge ($kendaraan, $mobil);
    echo "<pre>"; print_r($merge);
    echo "<br>";
    
?>