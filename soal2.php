<?php
function cekBilangan($bilangan) {
    if ($bilangan % 2 == 0) {
        return "Bilangan Genap.";
    } else {
        return "Bilangan Ganjil.";
    }
}

$bilangan = 7;
echo cekBilangan($bilangan);
?>
