<?php 
    $ar_data=[
        ['nama'=>'Humam Rafi Rachmad', 'NIM'=>'210801005', 'Nilai'=>90],
        ['nama'=>'Misuki Awanda', 'NIM'=>'210801006', 'Nilai'=>75],
        ['nama'=>'Rayqal Aulia', 'NIM'=>'210801009', 'Nilai'=>50],
        ['nama'=>'Maria Derani', 'NIM'=>'210801010', 'Nilai'=>80],
        ['nama'=>'Christiana Lovelyn', 'NIM'=>'210801011', 'Nilai'=>70],
        ['nama'=>'Satria Wicaksana', 'NIM'=>'210801012', 'Nilai'=>65],
        ['nama'=>'Nadia Sawitri', 'NIM'=>'210801013', 'Nilai'=>60],
        ['nama'=>'Ivo Yolanda', 'NIM'=>'210801014', 'Nilai'=>70],
        ['nama'=>'Rivaldo Sianturi', 'NIM'=>'210801015', 'Nilai'=>45],
        ['nama'=>'Heldi Atdriyadi', 'NIM'=>'210801016', 'Nilai'=>40]
    ];

    $ar_thead = ['Nama','NIM','Nilai', 'Keterangan', 'Grade', 'Predikat' ];

    $nilai = array_column($ar_data,'Nilai');

    $maks = max($nilai);
    $min = min($nilai);
    $total_mahasiswa = count($ar_data);
    $total_nilai = array_sum($nilai);
    $rata2= $total_nilai / $total_mahasiswa;

    $ar_footer=[
        'Nilai Tertinggi'=>$maks,
        'Nilai Terendah'=>$min,
        'Nilai Rata-rata'=>$rata2,
        'Jumlah Mahasiswa'=>$total_mahasiswa,
        'Jumlah Keseluruhan Nilai'=>$total_nilai
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table Mahasiswa by Humam Rafi &copy</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.dataTables.css">
</head>
<body>
    <table id="example" class="display" style="width:100%" border="0">
        <thead  align="center">
            <tr>
                <?php
                    foreach($ar_thead as $thead){
                ?>
                <th><?=$thead ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($ar_data as $data){

                    $keterangan = ($data['Nilai']>= 65)? 'Lulus' : 'Gagal';
    
                    if ($data['Nilai'] >=85 && $data['Nilai'] <100 ) $grade = 'A';
                    else if ($data['Nilai'] >=75 && $data['Nilai'] <85 ) $grade = 'B';
                    else if ($data['Nilai'] >=65 && $data['Nilai'] <75 ) $grade = 'C';
                    else if ($data['Nilai'] >=55 && $data['Nilai'] ) $grade = 'D';
                    else if ($data['Nilai'] >=0 && $data['Nilai'] ) $grade = 'E';
                    else $grade = '';
                
                    switch($grade){
                        case 'A' : 
                            $predikat = "Memuaskan";
                        break;
                        case 'B' : 
                            $predikat = "Bagus";
                        case 'C' : 
                            $predikat = "Cukup";
                        case 'D' : 
                            $predikat = "Kurang";
                        case 'E' : 
                            $predikat = "Buruk";
                        break;
                        default:
                            $predikat="";
                    }

            ?>
            <tr>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['NIM'] ?></td>
                <td><?= $data['Nilai'] ?></td>
                <td><?= $keterangan ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot style="background-color: #FAFAFA;">
            <?php
                foreach($ar_footer as $ket=> $hasil){
            ?>
            <tr>
                <th colspan="3"><?= $ket ?></th>
                <th colspan="3"><?= $hasil ?></th>
            </tr>
            <?php } ?>
        </tfoot>
    </table>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js"></script>
    <script>
        new DataTable('#example', {
    layout: {
        topStart: {
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        }
    }
});
    </script>
</body>
</html>