<?php
function tampilkanMenu() {
    echo "Materi Pemrograman PHP\n\n";
    echo "[1] Penggunaan if\n";
    echo "[2] Penggunaan switch ... case\n";
    echo "[3] Penggunaan looping\n";
    echo "[4] Penggunaan array\n";
}

tampilkanMenu();

echo "\nPilih menu (1-4): ";
$menu = trim(fgets(STDIN));

switch ($menu) {
    case '1':
        echo "Anda memilih Penggunaan if\n";
        break;
    case '2':
        echo "Anda memilih Penggunaan switch ... case\n";
        break;
    case '3':
        echo "Anda memilih Penggunaan looping\n";
        break;
    case '4':
        echo "Anda memilih Penggunaan array\n";
        break;
    default:
        echo "Pilihan tidak valid\n";
        break;
}
?>
