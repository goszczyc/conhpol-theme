<?php

/* Template Name: Error 500 */

get_header('sub');

?>
<main class="main">
<div class="text-center container">
  <div class="row">
    <div class="col-12" >
      <?php
      $heading = (language_code() == 'pl')? 'Błąd 500' : 'Error 500'; 
      $text = (language_code() == 'pl')? 'Serwer napotkał problem.' : 'Internal Server Error';
      ?>
      <h1><?= $heading; ?></h1>
      <p><?= $text; ?></p>
    </div>
  </div>
</div>
</main>
<?php get_footer(); ?>