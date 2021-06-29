<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambahkan Data</title>    
</head>
<body>
    <h1>Menambahkan Data</h1>
    <form action="<?php echo base_url().'crud/tambah_aksi';?>"method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="tambah"></td>
            </tr>
        </table>
</body>