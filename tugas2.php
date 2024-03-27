
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="tugas2.php" method="POST" style="margin-top: 100px">
    <table class="col-8" style="margin: auto; border-style: solid;">
        <thead align="center">
            <tr>
                <th colspan="2">Form Belanja</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <label for="text" class="col-4 col-form-label">Nama Pelanggan</label> 
                </td>
                <td>
                    <input id="nama" name="nama" type="text" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                        <label for="produk" class="col-4 col-form-label">Produk Pilihan</label> 
                </td>
                <td>
                        <select id="produk" name="produk" class="custom-select">
                            <option value=" ">---Silahkan Pilih Produk---</option>
                            <option value="tv">TV</option>
                            <option value="komputer">Komputer</option>
                            <option value="laptop">Laptop</option>
                            <option value="hp">Handphone</option>
                        </select>
                </td>
            </tr>
            <tr>
                <td>    
                        <label for="jumlah" class="col-4 col-form-label">Jumlah Produk</label> 
                </td>
                <td>
                        <input id="jumlah" name="jumlah" type="text" class="form-control">
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </td>
            </tr>
        </tbody>
        </table>
</form>


<?php 
    $nama = $_POST['nama'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah']; 
    $submit = $_POST['submit'];
    switch($produk){
        case 'tv' : 
            $harsat = 3000000;
        break;
        case 'komputer' : 
            $harsat = 5000000;
        break;
        case 'laptop' : 
            $harsat = 4500000;
        break;
        case 'hp' : 
            $harsat = 3500000;
        break;
    }
    $totalbelanja = $harsat * $jumlah;
    $diskon = 20 / 100 * $totalbelanja;
    $PPN = 10 /100 * ($totalbelanja - $diskon);
    $hargabersih = $totalbelanja - $diskon + $PPN;
    
    if(isset($submit)){
?>

<h5 align="center">Terimakasih <?= $nama ?> karena telah berbelanja dengan kami. Berikut rincian harganya: </h5>
<table  class="col-8" style="margin: auto; border-style: solid; width:70% ">
    <tr>
        <td>Harga Satuan</td>
        <td><?= $harsat ?></td>
    </tr>
    <tr>
        <td>Total Belanja</td>
        <td><?= $totalbelanja ?></td>
    </tr>
    <tr>
        <td>Diskon</td>
        <td><?= $diskon ?></td>
    </tr>
    <tr>
        <td>Harga Bersih</td>
        <td><?= $hargabersih ?></td>
    </tr>
</table>
<?php } ?>