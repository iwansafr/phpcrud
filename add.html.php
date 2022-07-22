<h1>Form Tambah Buku</h1>
<?php
if (!empty($pesan)) {
    echo $pesan;
}
?>
<form action="" method="post">
    <label for="">judul</label><br>
    <input type="text" name="judul" value="<?php echo @$data['judul']; ?>" required><br>
    <label for="">deskripsi</label><br>
    <textarea name="deskripsi" cols="30" rows="10" required><?php echo @$data['deskripsi']; ?></textarea><br>
    <button type="submit">simpan</button>
</form>