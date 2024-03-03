<?php
include 'print.php';

if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $angkatan = $_POST['angkatan'];
        $ipk = $_POST['ipk'];
        $status = $_POST['status'];

        $mahasiswa = new mahasiswa($nim, $nama, $prodi, $angkatan, $ipk, $status);
        $print = new printData();
        $data = $print->printMahasiswa($mahasiswa);
        echo "NIM : " . $data['NIM'] . "<br>";
        echo "Nama : " . $data['Nama'] . "<br>";
        echo "Prodi : " . $data['Prodi'] . "<br>";
        echo "Angkatan : " . $data['Angkatan'] . "<br>";
        echo "IPK : " . $data['IPK'] . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
</head>

<body>
        <form action="" method="post">
                <div class="form-control">
                        <div class="form-label">
                                <label for="nim">NIM</label>
                                <input type="text" name="nim" id="nim">
                        </div>
                        <div class="form-label">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama">
                        </div>
                        <div class="form-label">
                                <label for="prodi">Prodi</label>
                                <input type="text" name="prodi" id="prodi">
                        </div>
                        <div class="form-label">
                                <label for="angkatan">Angkatan</label>
                                <input type="text" name="angkatan" id="angkatan">
                        </div>
                        <div class="form-label">
                                <label for="ipk">IPK</label>
                                <input type="text" name="ipk" id="ipk">
                        </div>
                        <button type="submit" name="submit">Submit</button>
                </div>
        </form>

</body>

</html>