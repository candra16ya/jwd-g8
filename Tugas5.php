<?php
//deklarasi variable bertipe data Int yang di inisialisi
$num1 = 6;
$num2 = 3;

//Menampilkan output nilai $num1 beserta String
echo "Bilangan 1 : $num1 <br>"; //Output Bilangan 1 : 6
echo "Bilangan 2 : $num2 <br>"; ////Output Bilangan 2 : 3
echo "========================= <br>";

//Function yang mengembalikan variable $num1 dan $num2 lalu di
//jumlahkan
function Penjumlahan($num1, $num2){
    echo "hasil penjumlahan adalah ";
    return $num1 + $num2; //output 9
    
}

//Function yang mengembalikan variable $num1 dan $num2 lalu
//dikurangi
function Pengurangan($num1, $num2){
    echo "<br>";
    echo "hasil pengurangan adalah ";
    return $num1 - $num2; //output 3
    
}

//Function yang mengembalikan variable $num1 dan $num2 lalu
//dikalikan
function Perkalian($num1, $num2){
    echo "<br>";
    echo "hasil perkalian adalah ";
    return $num1 * $num2; //output 18
    
}

//Function yang mengembalikan variable $num1 dan $num2
//lalu dibagikan 
function Pembagian($num1, $num2){
    echo "<br>";
    echo "hasil pembagian adalah ";
    return $num1 / $num2; //output 2
    
}

//Mendeklaarasikan variable dan menginialisasikan dengan Function
//dan memanggil default parameternya
$hasil_penjumlahan = Penjumlahan($num1, $num2);
echo $hasil_penjumlahan;
$hasil_pengurangan = Pengurangan($num1, $num2);
echo $hasil_pengurangan;
$hasil_perkalian = Perkalian($num1, $num2);
echo $hasil_perkalian;
$hasil_pembagian = Pembagian($num1, $num2);
echo $hasil_pembagian;


?>