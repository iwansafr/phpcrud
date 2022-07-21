<table border="1">
    <tr>
        <td>NO</td>
        <td>JUDUL</td>
        <td>DESKRIPSI</td>
    </tr>
    <?php
    if (!empty($data)) {
        $i = 1;
        foreach ($data as $key => $value) {
            ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $value['judul'];?></td>
                <td><?php echo $value['deskripsi'];?></td>
            </tr>
            <?php
            $i++;
        }
    }
    ?>
</table>