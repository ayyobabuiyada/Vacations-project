<!--  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        form a {
            display: block;
            text-decoration: none;
            color: #636e72;
            font-size: 14px;
        }
        form a:hover {
            color: #c0392b;
        }
    </style>
</head>

<body>

    <hgroup>
        <h1>Admin Login</h1>


    </hgroup>
    <form action="controller/validation.php" method="POST">
        <h2>Admin Login</h2>

        <?php
        if (@$_GET["Error"] == true) {
        ?>
            <div>
                <p style="color:red"> <?php echo $_GET['Error'] ?></p>
            </div>
        <?php

        }
        ?>

        <div class="group">
            <input type="text" name="username" placeholder="Enter Username">

        </div>
        <div class="group">
            <input type="password" name="password" placeholder="Enter Password">
        </div>
        <button type="submit" class="button buttonBlue" name="login">Login
        </button>
        <a href="../index.php">Back</a>
    </form>

</body>

<script>
</script>

</html>