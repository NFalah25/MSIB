<?php 

require_once 'database.php';

$delete = new deleteData();
if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $delete->delete($mysqli, $id);
        echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php';</script>";
}

?>