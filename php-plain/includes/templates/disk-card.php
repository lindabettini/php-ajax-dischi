<?php foreach ($database as $data) : ?> 
  <div class="col text-center">    
    <div class="disk-card">
      <img class="img-fluid mb-3" src="<?= $data['poster'] ?>" alt="<?= $data['title'] ?>">
      <h5><?= $data['title'] ?></h5>
      <div><?= $data['author'] ?></div>
      <time><?= $data['year'] ?></time>
    </div>
  </div>
<?php endforeach; ?> 