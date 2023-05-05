<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D</title>
    <style>
        /* body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        } */

        h1 {
            text-align: center;
            margin-top: 50px;
            color: #333;
        }

        p {
            font-size: 1.5rem;
            color: #666;
            margin-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="./style.css">
</head>

<body style="max-width: 600px; margin: 0 auto; padding: 20px;">
    <?php
    // mengambil nilai yang diinputkan melalui form
    $nama_lengkap = $_POST['nama_lengkap'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $alamat_email = $_POST['alamat_email'];
    $tanggal_janji = $_POST['tanggal_janji'];
    ?>
<section class="book" id="book">
    <h1 class="heading"><span>hasil input</span> janji temu</h1>

    <div class="row">
      <form action="proses_form.php" method="post">
        <h3>janji temu</h3>
        <p><strong>Nama Lengkap:</strong> <?php echo $nama_lengkap ?></p>
        <p><strong>Nomor Telepon:</strong> <?php echo $nomor_telepon ?></p>
        <p><strong>Alamat Email:</strong> <?php echo $alamat_email ?></p>
        <p><strong>Tanggal Janji:</strong> <?php echo $tanggal_janji ?></p>
        <a href="javascript:history.back()" class="btn">kembali</a>      </form>
    </div>
  </section>


</body>

</html>
