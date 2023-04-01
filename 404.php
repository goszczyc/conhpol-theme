<?php
$title = "Błąd 404";
get_header('sub');

?>
<main class="main">
<div class="text-center container">
  <div class="row">
    <div class="col-12" >
      <?php
      $heading = (language_code() == 'pl')? 'Błąd 404' : 'Error 404'; 
      $text = (language_code() == 'pl')? 'Wygląda na to, że nie ma już strony której szukasz.' : 'It seems that the page you are looking for does not exist anymore.';
      ?>
      <h1><?= $heading; ?></h1>
      <p><?= $text; ?></p>
    </div>
  </div>
</div>
</main>
<?php get_footer(); ?>