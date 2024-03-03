<?php
require_once "database.php";
$read = new readData();
$row = $read->read($mysqli);
$column = $read->getColumn($mysqli);
$no = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <section class="crud">
    <h1>CRUD</h1>
    <a href="create.php">Tambah User</a>
    <table class="table">
      <thead>
        <tr>
          <td>Nomor</td>
          <td>Nama</td>
          <td>Alamat</td>
          <td>No Whatsapp</td>
          <td>Aksi</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($row as $rows) { ?>
          <tr>
            <td>
              <?php echo $no ?>
            </td>
            <td>
              <?php echo $rows["nama"] ?>
            </td>
            <td>
              <?php echo $rows["alamat"] ?>
            </td>
            <td>
              <?php echo $rows["whatsapp"] ?>
            </td>

            <td>
              <form action="edit.php" method="post">
                <input type="text" name="edit" id="edit" value="<?php echo $rows["user_id"] ?>" hidden>
                <button type="submit" class="btn edit">Edit</button>
              </form>
              <form action="database.php" method="post">
                <input type="text" name="delete" id="delete" value="<?php echo $rows["user_id"] ?>" hidden>
                <button type="submit" class="btn delete">Delete</button>
              </form>
            </td>
          </tr>

        <?php $no++;
        } ?>

      </tbody>
    </table>
  </section>

  <script src="js/script.js"></script>
</body>

</html>