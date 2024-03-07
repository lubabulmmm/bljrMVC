<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman
        <?= $data['judul']; ?>
    </title>
</head>

<body>
    <div class="container text-center mt-4">
        <h1>Halaman User</h1>
        <img src="<?= BASE_URL; ?>/img/ub.png" class="rounded-circle shadow">
        <p>Halo, nama saya
            <?= $data['nama']; ?>, saya seorang
            <?= $data['pekerjaan']; ?>
        </p>
    </div>
</body>

</html>