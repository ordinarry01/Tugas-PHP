<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<h1 align="center">Form Input Nilai</h1>
<form action="#" method="POST" style="margin-top: 10px; margin-right: 80px; margin-left: 80px;">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="text" name="NIM" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="univ" class="custom-select">
        <option value="">--PILIHAN ASAL UNIVERSITAS--</option>
        <option value="Universitas Penikmat Kopi">Universitas Penikmat Kopi</option>
        <option value="Universitas Barudak LA">Universitas Barudak LA</option>
        <option value="Universitas Kang Slepet">Universitas Kang Slepet</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="">--PILIHAN MATA KULIAH--</option>
        <option value="HTML">HTML & CSS</option>
        <option value="PHP">PHP</option>
        <option value="UI/UX">UI/UX</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary" value="submit">Submit</button>
    </div>
  </div>
</form>
</html>

<?php

    require_once 'classmahasiswa.php';
    $NIM = $_POST['NIM'];
    $nama = $_POST['nama'];
    $univ = $_POST['univ'];
    $matkul = $_POST['matkul'];
    $nilai = $_POST['nilai'];
    $submit = $_POST['submit'];

    $ns1 = new Mahasiswa($NIM, $nama, $univ, $matkul, $nilai);
    $ns2 = new Mahasiswa($NIM, $nama, $univ, $matkul, $nilai);
    $ns3 = new Mahasiswa($NIM, $nama, $univ, $matkul, $nilai);
    $ar_mahasiswa = [$ns1];

    $ar_header = ['NIM', 'Nama', 'Universitas', 'Mata Kuliah', 'Nilai', 'Grade', 'Predikat', 'Status'];

    if(isset($_POST['submit'])){
    ?>

    <table class="table table-dark" style=" margin-right: 80px; margin-left: 80px; width: 87%">
        <thead>
            <tr>
                <?php foreach ($ar_header as $judul){
                ?>
                <th><?=$judul?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ar_mahasiswa as $sis){
                ?>
                <tr>
                    <td><?=$sis->NIM?></td>
                    <td><?=$sis->nama?></td>
                    <td><?=$sis->univ?></td>
                    <td><?=$sis->matkul?></td>
                    <td><?=$sis->nilai?></td>
                    <td><?=$sis->grade()?></td>
                    <td><?=$sis->keterangan()?></td>
                </tr>
            <?php } ?>
        </tbody> 
    </table>
<?php
}    
?>