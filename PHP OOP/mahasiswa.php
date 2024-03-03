<?php 

include 'identitas.php';

class mahasiswa extends identitas
{
        public $nim;
        public $prodi;
        public $angkatan;
        public $ipk;

        public function __construct($nim, $nama, $prodi, $angkatan, $ipk)
        {
                $this->nim = $nim;
                $this->prodi = $prodi;
                $this->angkatan = $angkatan;
                $this->ipk = $ipk;
                parent::__construct($nama);
        }

        public function getNim()
        {
                return $this->nim;
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

?>