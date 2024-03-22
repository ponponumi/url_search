<?php require __DIR__ . "/header.php" ?>

<?php

$text = "URLはありません";

$list = \Ponponumi\UrlSearch\UrlSearch::search($text);
$list_pos = \Ponponumi\UrlSearch\UrlSearch::searchPos($text);
$check = \Ponponumi\UrlSearch\UrlSearch::check($text);

?>

<p><?= $text ?></p>

<pre><?php var_dump($list) ?></pre>
<pre><?php var_dump($list_pos) ?></pre>
<pre><?php var_dump($check) ?></pre>

<?php require __DIR__ . "/footer.php" ?>
