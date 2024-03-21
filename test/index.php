<?php require __DIR__ . "/header.php" ?>

<?php

$text = "Google検索はこちら https://www.google.co.jp/ Yahoo検索はこちら https://www.yahoo.co.jp/";

$list = \Ponponumi\UrlSearch\UrlSearch::search($text);

?>

<p><?= $text ?></p>

<pre><?php var_dump($list) ?></pre>

<?php require __DIR__ . "/footer.php" ?>
