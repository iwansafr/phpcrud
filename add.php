<?php

$pesan;
if (!empty($_POST)) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    if($db->query("INSERT INTO buku(`judul`,`deskripsi`) VALUES ('{$judul}','{$deskripsi}')")){
        $pesan = 'data buku berhasil disimpan';
    }else{
        $pesan = 'data buku gagal disimpan';
    }
}

include 'add.html.php';