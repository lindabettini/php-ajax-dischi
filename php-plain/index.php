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
      <img src="<?= $data['poster'] ?>" alt="<?= $data['title'] ?>">
      <h5><?= $data['title'] ?></h5>
      <div><?= $data['author'] ?></div>
      <time><?= $data['year'] ?></time>
    <?php endforeach; ?>
  </main>
</body>
</html>