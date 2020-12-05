<?php
$url = "https://note.com/hoshirou/rss";
$path= dirname(__FILE__) . "/rss/hoshirou.xml";
file_put_contents($path, file_get_contents($url));
