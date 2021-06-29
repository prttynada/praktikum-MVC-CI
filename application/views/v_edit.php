<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambahkan Data</title>    
</head>
<body>
    <h1>Mengedit Data</h1>
    <?php foreach($user as $u) { ?>
        <form action="<?php echo base_url().'crud/tambah_aksi';?>"method="post">
        <table>
            <tr>
                <td>id</td>
                <td>
                    <input type="text" name="id" value="<?php echo $u->id?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="name" value="<?php echo $u->nama?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $u->alamat?>"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
        </form>
    <?php } ?>
     
</body>