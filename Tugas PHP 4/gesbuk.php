<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <form action="#" method="POST">
        <table align="center" style="border-style: solid; width:90%" cellspacing="1" cellpading="10">
            <thead>
                <tr>
                    <th colspan="2" align="center">FORM GUEST BOOK</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><label for="">Nama: </label></td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td><label for="">Email: </label></td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td><label for="">Tanggal Lahir: </label></td>
                    <td><input type="date" name="tgl"></td>
                </tr>
                <tr>
                    <td><label for="">Jenis Kelamin: </label></td>
                    <td>
                        <input type="radio" name="jeniskelamin" value="Laki-laki"> Laki-laki
                        <input type="radio" name="jeniskelamin" value="Perempuan"> Perempuan
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="simpan"></td>
                </tr>
            </tbody>
        </table>
    </form>

</body>

</html>