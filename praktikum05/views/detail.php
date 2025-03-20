<?php
require_once("controllers/prodi.php");

if (isset($GET['id'])) {
    $id = $_GET['id'];
    $data = $prodi->show($id);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Prodi</title>
</head>
<body>
    <h1>Detail Prodi</h1>
    <?php if($data) :?>
    <p>kode: <?= $data['kode'] ?></p>
    <p>kode: <?= $data['nama'] ?></p>
    <p>kode: <?= $data['kaprodi'] ?></p>
<?php else: ?>
    <p>Data tidak di temukan</p>
 <?php endif; ?>
 <a href="?url=prodi">kembali</a>
</body>

</html>