<?php

$pesan;

if (!empty($_POST)) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    if(empty($_GET['id'])){
        if($db->query("INSERT INTO buku(`judul`,`deskripsi`) VALUES ('{$judul}','{$deskripsi}')")){
            $pesan = 'data buku berhasil disimpan';
        }else{
            $pesan = 'data buku gagal disimpan';
        }
    }else{
        if ($db->query("UPDATE buku set judul = '{$judul}', deskripsi = '{$deskripsi}' WHERE id = {$_GET['id']}")) {
            $pesan = 'data buku berhasil disimpan';
        } else {
            $pesan = 'data buku gagal disimpan';
        }
    }
}

$data = [];
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $data = $db->query('SELECT * FROM buku WHERE id = ' . $id);
    $data = $data->fetch_assoc();
}

include 'add.html.php';