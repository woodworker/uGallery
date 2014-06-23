<?php

echo '<ul>';
foreach((new DirectoryIterator(__DIR__.'/img/')) as $img) {
    if ($img->isFile()) {
        echo '<li><img src="img/'.$img->getBasename().'"></li>';
    }
}
echo '</ul>';
