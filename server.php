<?php
$nama = isset($_POST["nama"]) ? trim($_POST["nama"]) : "";

if ($nama == "") {
    echo "Input nama tidak boleh kosong!";
} else {
    echo "Halo, " . $nama . "! Selamat datang di AJAX!";
}
?>