<?php

include 'dosen.php';

class printData
{
        public function printMahasiswa(mahasiswa $mahasiswa)
        {
                return array(
                        'NIM' => $mahasiswa->getNim(),
                        'Nama' => $mahasiswa->getNama(),
                        'Prodi' => $mahasiswa->getProdi(),
                        'Angkatan' => $mahasiswa->getAngkatan(),
                        'IPK' => $mahasiswa->getIpk(),
                        
                );
        }

        public function printDosen(dosen $dosen)
        {
                return array(
                        'NIDN' => $dosen->getNidn(),
                        'Nama' => $dosen->getNama(),
                        'Prodi' => $dosen->getProdi(),
                        'Pendidikan' => $dosen->getPendidikan(),
                        'Jabatan' => $dosen->getJabatan(),
                        
                );
        }
}
