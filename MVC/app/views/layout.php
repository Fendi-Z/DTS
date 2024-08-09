<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My MVC Application</title>
    </head>
    <body>
        <?php require 'app/views/' . $view . '.php' ?>
    </body>
</html>

// app/views/home.php
<h1>Welcome to Home Page</h1> 
<h2>User : </h2>
<ul>
    <?php foreach ($users as $user): ?>
        <li><?php echo $user['name']; ?></li>
    <?php endforeach ?>
</ul>