<?php
require_once "../configuration.php";
require_once CHEMIN_ACCESSEUR . "BaseDeDonnees.php";
$MESSAGE_SQL_LISTE_FILM = "SELECT * FROM transformer";

$requeteListeFilms = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_LISTE_FILM);
$requeteListeFilms->execute();
$listeFilms = $requeteListeFilms->fetchAll();
//print_r($listeFilms);

// https://support.google.com/webmasters/answer/183668?hl=en
?>

<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"> 
  <url>
    <loc>http://localhost/test/</loc>
    <lastmod>2020-05-26</lastmod>
  </url>
  <url>
    <loc>http://localhost/test/liste-films.php</loc>
    <lastmod>2020-05-26</lastmod>
  </url>

  <?php 
  foreach($listeFilms as $film)
  {
  ?>
  <url>
    <loc>http://localhost/test/film.php?id=<?=$film['id']?></loc>
    <lastmod>2020-05-26</lastmod>
  </url>  
  <?php 
  }
  ?>
  
  
  
</urlset>