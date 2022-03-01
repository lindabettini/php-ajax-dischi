<?php

include 'includes/data/data.php';

?>


<!DOCTYPE html>

<html lang="en">

<?php include 'includes/templates/head.php' ?>

<body>
  <header></header>
  <main class="container">
    <div class="cards-container row">         
          <?php foreach ($database as $data) : ?> 
            <div class="col-3">    
              <div class="disk-card">
                <img class="img-fluid" src="<?= $data['poster'] ?>" alt="<?= $data['title'] ?>">
                <h5><?= $data['title'] ?></h5>
                <div><?= $data['author'] ?></div>
                <time><?= $data['year'] ?></time>
              </div>
            </div>
          <?php endforeach; ?>    
    </div> 
  </main>
</body>
</html>