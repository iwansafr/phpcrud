<?php
if(!empty($_POST['id']))
{
  $db->query('DELETE FROM buku WHERE id = '.$_POST['id']);
}

if(!empty($_GET['judul'])){
  $data = $db->query('SELECT * FROM buku WHERE judul = "'.$_GET['judul'].'"');
}else{
  $data = $db->getData('buku');
}
include 'list.html.php';