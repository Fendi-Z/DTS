
<?php
    require '../controllers/homeController.php';
    require '../models/user.php';

    $controller = new HomeController();
    $controller->index();
?>