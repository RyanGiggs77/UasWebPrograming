<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="nav">
        <div class="logo">
            Badminton
        </div>
        <!--NAVBAR-->
        <div class="menu">
            <ul>
                <li><a href="<?= BASEURL; ?>/home" class="<?= $data['active1']; ?>">Home</a></li>
                <li><a href="#" class="<?= $data['active2']; ?>">Match</a></li>
                <li><a href="<?= BASEURL; ?>/pemain" class="<?= $data['active3']; ?>">Player</a></li>
                <li><a href="<?= BASEURL; ?>/keanggotaan" class="<?= $data['active4']; ?>">Informasi</a></li>
                <li><a href="<?= BASEURL; ?>/login" class="<?= $data['active5']; ?>">Login</a></li>
            </ul>
        </div>
    </div>