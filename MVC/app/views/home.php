<h1>Welcome to Home Page</h1> 
<h2>User : </h2>
<ul>
    <?php foreach ($users as $user): ?>
        <li><?php echo $user['name']; ?></li>
    <?php endforeach ?>
</ul>