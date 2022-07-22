<table border="1">
    <tr>
        <td>NO</td>
        <td>JUDUL</td>
        <td>DESKRIPSI</td>
        <td>ACTION</td>
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
                <td>
                    <a href="?page=add&id=<?php echo $value['id'];?>">
                        <button style="width: 100%;">edit</button>
                    </a>
                    <hr>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $value['id'];?>">
                        <button type="submit" style="width: 100%;">hapus</button>
                    </form>
                </td>
            </tr>
            <?php
            $i++;
        }
    }
    ?>
</table>