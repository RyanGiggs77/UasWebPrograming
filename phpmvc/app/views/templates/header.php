<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
         .banner-container {
            background-image: url("../badminton.jpg");
            background-size: cover;
            background-position: center;
            text-align: center;
            padding: 200px 0; /* Increase the top and bottom padding to make it taller on larger screens */
            color: white;
        }

        .banner-container h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: black;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add text shadow for better visibility on the image */
        }

        .banner-container button {
            width: 170px;
            height: 40px;
            background-color: red;
            color: black;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            border-radius: 10px;
            border: none;
            white-space: nowrap;
        }   

    </style>
</head>
<body>