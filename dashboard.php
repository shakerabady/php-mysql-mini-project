<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h1>
        <?php 
            session_start();

            echo $_SESSION['logged-user']; 
        ?>
    </h1>
</body>
</html>