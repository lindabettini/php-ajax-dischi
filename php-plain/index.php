<?php

include 'includes/data/data.php';

?>


<!DOCTYPE html>

<html lang="en">

<?php include 'includes/templates/head.php' ?>

<body>
  <header></header>
  <main class="container"> 
    <?php foreach ($database as $data) : ?> 
      <h2><?= $data['title'] ?></h2>
    <?php endforeach; ?>
  </main>
</body>
</html>