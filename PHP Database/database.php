<?php
include "connect.php";

class createData
{
        public function createUser($mysqli, $nama, $alamat, $whatsapp)
        {
                $mysqli->query("INSERT INTO `users` (`nama`, `alamat`, `whatsapp`) VALUES ('$nama', '$alamat', '$whatsapp')");
        }
}

class readData
{
        public function read($mysqli)
        {
                $rows = array();
                $data = $mysqli->query("SELECT * FROM `users`");
                if ($data->num_rows > 0) {
                        while ($rowss = $data->fetch_assoc()) {
                                $rows[] = $rowss;
                        };
                        return $rows;
                };
        }

        public function getColumn($mysqli)
        {
                $columns = array();
                $data = $mysqli->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'msib' AND TABLE_NAME = 'users'");
                while ($column = $data->fetch_assoc()) {
                        $columns[] = $column['COLUMN_NAME'];
                }
                return $columns;
        }
}

class updateData
{
        public function update($mysqli, $nama, $alamat, $whatsapp, $id)
        {
                // $query = "UPDATE 'users' SET 'nama' = $nama, 'alamat' = $alamat, 'whatsapp' = $whatsapp WHERE `user_id` = $id";
                $query = "UPDATE `users` SET `nama` = '$nama', `alamat` = '$alamat', `whatsapp` = '$whatsapp' WHERE `user_id` = $id";
                $mysqli->query($query);
        }
        public function getData($mysqli, $id)
        {
                $rows = array();
                $data = $mysqli->query("SELECT * FROM `users` WHERE `user_id` = $id");
                if ($data->num_rows > 0) {
                        while ($rowss = $data->fetch_assoc()) {
                                $rows[] = $rowss;
                        };
                        return $rows;
                };
        }
}

class deleteData
{
        public function delete($mysqli, $id)
        {
                $query = "DELETE FROM `users` WHERE `user_id` = $id";
                $mysqli->query($query);
                // return $data;
        }
}


$delete = new deleteData();
$create = new createData();
$edit = new updateData();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['delete'])) {
                $hapus = $_POST['delete'];
                $delete->delete($mysqli, $hapus);
                echo "<script> alert('Data telah berhasil di hapus'); window.location.href=('index.php'); </script>";
        } else if (isset($_POST['create'])) {
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];
                $whatsapp = $_POST['whatsapp'];
                $create->createUser($mysqli, $nama, $alamat, $whatsapp);
                echo "<script> alert('Data telah berhasil di Tambahkan'); window.location.href=('index.php'); </script>";
        } else if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $name = $_POST['nama'];
                $alamatt = $_POST['alamat'];
                $whatsappp = $_POST['whatsapp'];
                $edit->update($mysqli, $name, $alamatt, $whatsappp, $id);
                echo "<script> alert('Data telah berhasil di Update'); window.location.href=('index.php'); </script>";
        }
}
