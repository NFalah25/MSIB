<?php
require_once "database.php";
$read = new updateData();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['edit'];
}
$row = $read->getData($mysqli, $id);
var_dump($id);
?>


<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Data</title>
        <link rel="stylesheet" href="css/style.css">
</head>

<body>
        <section class="hero">
                <div class="card">
                        <h1>Edit Userr</h1>
                        <form action="database.php" method="POST">
                                <?php foreach ($row as $rows) { ?>

                                        <div class="form-control">
                                                <label for="nama">Nama</label>
                                                <input type="text" id="nama" name="nama" value="<?php echo $rows["nama"] ?>">
                                        </div>
                                        <div class="form-control">
                                                <label for="nama">Alamat</label>
                                                <input type="text" id="alamat" name="alamat" value="<?php echo $rows["alamat"] ?>">
                                        </div>
                                        <div class="form-control">
                                                <label for="nama">Whatsapp</label>
                                                <input type="text" id="whatsapp" name="whatsapp" value="<?php echo $rows["whatsapp"] ?>">
                                        </div>
                                        <input type="text" name="update" id="update" hidden>
                                        <input type="text" id="id" name="id" value="<?php echo $rows["user_id"] ?>" hidden>
                                        <button type="submit">Upload</button>
                                <?php } ?>
                        </form>
                </div>
        </section>
</body>

</html>