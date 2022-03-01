<?php

include 'includes/data/data.php';

?>


<!DOCTYPE html>

<html lang="en">

<?php include 'includes/templates/head.php' ?>

<body>

  <header>   
      <img class="logo" src="../logo.png" alt="Spotify Logo">
  </header>
  
  <main class="container">
    <div class="cards-container row pt-5">       
      <?php include 'includes/templates/disk-card.php' ?>             
    </div> 
  </main>

</body>
</html>