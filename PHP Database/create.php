<?php


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
                        <h1>Create User</h1>
                        <form action="database.php" method="POST">
                                <div class="form-control">
                                        <label for="nama">Nama</label>
                                        <input type="text" id="nama" name="nama">
                                </div>
                                <div class="form-control">
                                        <label for="nama">Alamat</label>
                                        <input type="text" id="alamat" name="alamat">
                                </div>
                                <div class="form-control">
                                        <label for="nama">Whatsapp</label>
                                        <input type="text" id="whatsapp" name="whatsapp">
                                </div>
                                <input type="text" name="create" id="create" hidden>
                                <button type="submit">Upload</button>
                        </form>
                </div>
        </section>
</body>

</html>