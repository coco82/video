<?php
$dir = new DirectoryIterator('images');
foreach ($dir as $file) {
    echo $file . '<br>';
}
