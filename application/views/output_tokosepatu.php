<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>output</title>
</head>
<style>
fieldset {
        width:30%;
        margin:20px auto;
        border-radius: 8px;
        align:center;
        background-color:pink;
}

select { 
    width:50%;
}
</style>
<body>
    <h3><center>TOKO SEPATU NRM</center></h3>
    <fieldset>
        <legend>Rekap Transaksi</legend>
                <table>
                    <tr>
                        <th>Nama Pembeli</th>
                        <td>:</td>
                        <td>
                            <?= $nama; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Nomor HP</th>
                        <td>:</td>
                        <td>
                           <?= $nhp; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Merk Sepatu</th>
                        <td>:</td>
                        <td>
                            <?= $merk; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Ukuran Sepatu</th>
                        <td>:</td>
                        <td>
                            <?= $ukuran ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td>:</td>
                        <td>
                            <?= $harga ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan = "5" align = "center">
                            <hr>
                            <a href="<? base_url('tokosepatu/input_tokosepatu') ?>">kembali</a>
                        </td>
                    </tr>
                </table>
         

</fieldset>
</body>
</html>