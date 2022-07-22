<?php
if(!empty($_POST['id']))
{
  $db->query('DELETE FROM buku WHERE id = '.$_POST['id']);
}

$data = $db->getData('buku');
include 'list.html.php';