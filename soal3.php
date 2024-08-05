<?php
// Kamus substitusi
$substitusi = array(
    'ha' => 'pa', 'na' => 'dha', 'ca' => 'ja', 'ra' => 'ya', 'ka' => 'nya',
    'pa' => 'ha', 'dha' => 'na', 'ja' => 'ca', 'ya' => 'ra', 'nya' => 'ka',
    'da' => 'ma', 'ta' => 'ga', 'sa' => 'ba', 'wa' => 'tha', 'la' => 'nga',
    'ma' => 'da', 'ga' => 'ta', 'ba' => 'sa', 'tha' => 'wa', 'nga' => 'la'
);

function pecah_kata($kata) {
    // Memecah kata menjadi suku kata dengan panjang 2
    return str_split($kata, 2);
}

function terjemahkan_suku_kata($suku_kata, $substitusi) {
    // Menterjemahkan suku kata dengan menggunakan kamus substitusi
    if (array_key_exists($suku_kata, $substitusi)) {
        return $substitusi[$suku_kata];
    }
    return $suku_kata;
}

function terjemahkan_kata($kata, $substitusi) {
    $suku_kata = pecah_kata($kata);
    $suku_kata_terjemahan = array_map(function($suku) use ($substitusi) {
        return terjemahkan_suku_kata($suku, $substitusi);
    }, $suku_kata);
    return implode('', $suku_kata_terjemahan);
}

// Contoh penggunaan
$kata_asli = "matamu";
$kata_terjemahan = terjemahkan_kata($kata_asli, $substitusi);
echo "Kata asli: $kata_asli\n";
echo "Kata terjemahan: $kata_terjemahan\n";
?>
