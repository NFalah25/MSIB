<?php

class mahasiswa
{
        public $nim;
        public $nama;
        public $prodi;
        public $angkatan;
        public $ipk;

        public function __construct($nim, $nama, $prodi, $angkatan, $ipk)
        {
                $this->nim = $nim;
                $this->nama = $nama;
                $this->prodi = $prodi;
                $this->angkatan = $angkatan;
                $this->ipk = $ipk;
        }

        public function getNim()
        {
                return $this->nim;
        }

        public function getNama()
        {
                return $this->nama;
        }

        public function getProdi()
        {
                return $this->prodi;
        }

        public function getAngkatan()
        {
                return $this->angkatan;
        }

        public function getIpk()
        {
                return $this->ipk;
        }
}

class dosen
{
        public $nidn;
        public $nama;
        public $prodi;
        public $pendidikan;
        public $jabatan;

        public function __construct($nidn, $nama, $prodi, $pendidikan, $jabatan)
        {
                $this->nidn = $nidn;
                $this->nama = $nama;
                $this->prodi = $prodi;
                $this->pendidikan = $pendidikan;
                $this->jabatan = $jabatan;
        }

        public function getNidn()
        {
                return $this->nidn;
        }

        public function getNama()
        {
                return $this->nama;
        }

        public function getProdi()
        {
                return $this->prodi;
        }

        public function getPendidikan()
        {
                return $this->pendidikan;
        }

        public function getJabatan()
        {
                return $this->jabatan;
        }
}

class dataMahasiswa extends mahasiswa
{
        public $status;

        public function __construct($nim, $nama, $prodi, $angkatan, $ipk, $status)
        {
                parent::__construct($nim, $nama, $prodi, $angkatan, $ipk);
                $this->status = $status;
        }

        public function getStatus()
        {
                return $this->status;
        }
}

class dataDosen extends dosen
{
        public $status;

        public function __construct($nidn, $nama, $prodi, $pendidikan, $jabatan, $status)
        {
                parent::__construct($nidn, $nama, $prodi, $pendidikan, $jabatan);
                $this->status = $status;
        }

        public function getStatus()
        {
                return $this->status;
        }
}

// class printData
// {
//         public function printMahasiswa(dataMahasiswa $mahasiswa)
//         {
//                 echo 'NIM : ' . $mahasiswa->getNim() . '<br>';
//                 echo 'Nama : ' . $mahasiswa->getNama() . '<br>';
//                 echo 'Prodi : ' . $mahasiswa->getProdi() . '<br>';
//                 echo 'Angkatan : ' . $mahasiswa->getAngkatan() . '<br>';
//                 echo 'IPK : ' . $mahasiswa->getIpk() . '<br>';
//                 echo 'Status : ' . $mahasiswa->getStatus() . '<br>';
//         }

//         public function printDosen(dataDosen $dosen)
//         {
//                 echo 'NIDN : ' . $dosen->getNidn() . '<br>';
//                 echo 'Nama : ' . $dosen->getNama() . '<br>';
//                 echo 'Prodi : ' . $dosen->getProdi() . '<br>';
//                 echo 'Pendidikan : ' . $dosen->getPendidikan() . '<br>';
//                 echo 'Jabatan : ' . $dosen->getJabatan() . '<br>';
//                 echo 'Status : ' . $dosen->getStatus() . '<br>';
//         }
// }

interface dataPrint
{
        public function printMahasiswa(dataMahasiswa $mahasiswa);
        public function printDosen(dataDosen $dosen);
}

class printData implements dataPrint
{
        public function printMahasiswa(dataMahasiswa $mahasiswa)
        {
                echo 'NIM : ' . $mahasiswa->getNim() . '<br>';
                echo 'Nama : ' . $mahasiswa->getNama() . '<br>';
                echo 'Prodi : ' . $mahasiswa->getProdi() . '<br>';
                echo 'Angkatan : ' . $mahasiswa->getAngkatan() . '<br>';
                echo 'IPK : ' . $mahasiswa->getIpk() . '<br>';
                echo 'Status : ' . $mahasiswa->getStatus() . '<br>';
        }

        public function printDosen(dataDosen $dosen)
        {
                echo 'NIDN : ' . $dosen->getNidn() . '<br>';
                echo 'Nama : ' . $dosen->getNama() . '<br>';
                echo 'Prodi : ' . $dosen->getProdi() . '<br>';
                echo 'Pendidikan : ' . $dosen->getPendidikan() . '<br>';
                echo 'Jabatan : ' . $dosen->getJabatan() . '<br>';
                echo 'Status : ' . $dosen->getStatus() . '<br>';
        }
}



$mahasiswa = new dataMahasiswa('0110217001', 'Muhammad Fauzan', 'Teknik Informatika', 2017, 3.5, 'Aktif');

$dosen = new dataDosen('1234567890', 'Dr. Muhammad Fauzan', 'Teknik Informatika', 'S3', 'Lektor', 'Aktif');


$print = new printData();
$print->printMahasiswa($mahasiswa);
echo '<br>';
$print->printDosen($dosen);

?>