<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input</title>
</head>
<style>
fieldset {
        width:30%;
        margin:20px auto;
        border-radius: 8px;
        align:center;
        background-color:pink;
}
input[type=text] {
    background-color:lightgreen;
}
select { 
    width:50%;
    background-color:lightgreen;
}
button{
    background-color:red;
}
</style>

<body>
    <h3><center>TOKO SEPATU NRM</center></h3>
    <fieldset>
        <legend>Input Transaksi</legend>
            <form method ="POST">
                <table>
                    <tr>
                        <th>Nama Pembeli</th>
                        <td>:</td>
                        <td>
                            <input type ="text" name="nama" id="nama">
                            <?= form_error('nama', '<br><span style="color:red;">', '</span>'); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Nomor HP</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="nhp" id="nhp">
                            <?= form_error('nhp', '<br><span style="color:red;">', '</span>'); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Merk</th>
                        <td>:</td>
                        <td>
                            <inpput type="select" name="merk" id="merk">
                                <select name="merk" id="merk">
                                    <option>--PILIH--</option>
                                    <option value="Nike">Nike</option>
                                    <option value="Adidas">Adidas</option>
                                    <option value="Kickers">Kickers</option>
                                    <option value="Eiger">Eiger</option>
                                    <option value="Bucherri">Bucherri</option>
                                </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Ukuran Sepatu</th>
                        <td>:</td>
                        <td>
                            <inpput type="select" name="merk" id="merk">
                                <select name="ukuran" id="ukuran">
                                    <option>--PILIH--</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="37">36</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                            </select>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <hr>
                                <button type="submit">simpan</button>
                            </td>
                        </tr>
                </table>
         
</form>
</fieldset>
</body>
</html>