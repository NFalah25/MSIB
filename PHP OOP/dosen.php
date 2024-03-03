<?php 
include 'mahasiswa.php';

class dosen extends identitas{
        public $nidn;
        public $prodi;
        public $pendidikan;
        public $jabatan;

        public function __construct($nidn, $nama, $prodi, $pendidikan, $jabatan)
        {
                $this->nidn = $nidn;
                $this->prodi = $prodi;
                $this->pendidikan = $pendidikan;
                $this->jabatan = $jabatan;
                parent::__construct($nama);
        }

        public function getNidn()
        {
                return $this->nidn;
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

?>