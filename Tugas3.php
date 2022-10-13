<?php
do {
    echo"============ CETAK BILANGAN GANJIL GENAP 1-100
    ============ <br>";
   for ($num=1; $num <= 100 ; $num++) { 
    //Melakukan pengecekan jika $num habis di bagi 2 maka genap
    //jika tidak habis dibagi 2 maka ganjil
    if ($num % 2 == 0) {
                echo"$num ini adalah bilangan genap.<br>";
            }
                else {
                echo"$num adalah bilangan ganjil.<br>";
            }
   }
} while ($num == 3); //Memenuhi syarat 1-100 maka akan melakukan 
                     //perintah yang ada didalam line 2 do{..}
?>
