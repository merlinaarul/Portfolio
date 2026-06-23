<?php
/*
  Le rendu principal du portfolio utilise trois pages HTML separees :
  index.html, en.html et ta.html.

  Ce fichier montre seulement comment un controleur PHP pourrait lire le XML.
  Il ne choisit pas automatiquement la langue du navigateur.
*/

$langues = ['fr', 'en', 'ta'];
$langueParDefaut = 'fr';

function langueAcceptee($langue, $langues) {
    return in_array($langue, $langues, true);
}

$langue = $langueParDefaut;

if (isset($_GET['lang']) && langueAcceptee($_GET['lang'], $langues)) {
    $langue = $_GET['lang'];
}

$xml = simplexml_load_file('../data/content.xml');

function t($xml, $id, $langue) {
    foreach ($xml->blocks->block as $block) {
        if ((string) $block['id'] === $id) {
            foreach ($block->text as $text) {
                if ((string) $text['lang'] === $langue) {
                    return htmlspecialchars((string) $text, ENT_QUOTES, 'UTF-8');
                }
            }
        }
    }
    return '';
}
?>
<!DOCTYPE html>
<html lang="<?= $langue ?>" prefix="dc: http://purl.org/dc/terms/ foaf: http://xmlns.com/foaf/0.1/">
<head>
  <meta charset="utf-8" />
  <title>Version PHP bonus - Merlina ARUL</title>
  <meta property="dc:creator" content="Merlina ARUL" />
  <meta property="dc:language" content="<?= $langue ?>" />
</head>
<body about="./" typeof="foaf:Document">
  <main typeof="foaf:Person" about="#merlina-arul">
    <h1 property="foaf:name">Merlina ARUL</h1>
    <p><?= t($xml, 'hero_intro', $langue) ?></p>
    <p><a href="mailto:merlinaarul26@gmail.com" property="foaf:mbox">merlinaarul26@gmail.com</a></p>
    <p>
      <a href="?lang=fr">FR</a>
      <a href="?lang=en">EN</a>
      <a href="?lang=ta">தமிழ்</a>
    </p>
  </main>
</body>
</html>
