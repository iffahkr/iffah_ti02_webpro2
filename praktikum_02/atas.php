<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #navbar {
            background-color: black;
            font-size: 15px;
            color: antiquewhite;
        }

        .nav-link {
            display: inline-block;
            width: 100px;
            height: 50px;
            text-align: top;
            line-height: 30px;
        }

        .selected {
            background-color: gray;
        }

        footer {
            background-color: black;
            color: white;
            height: 30vh;
        }
    </style>
</head>
<body>
    <nav id="navbar">
        <a href="artikel1.php" class="nav-link <?php echo $artikel1; ?>">Artikel 1</a>
        <a href="artikel2.php" class="nav-link <?php echo $artikel2; ?>">Artikel 2</a>
        <a href="artikel3.php" class="nav-link <?php echo $artikel3; ?>">Artikel 3</a>
        <a href="artikel4.php" class="nav-link <?php echo $artikel4; ?>">Artikel 4</a>
        <a href="artikel5.php" class="nav-link <?php echo $artikel5; ?>">Artikel 5</a>
    </nav>