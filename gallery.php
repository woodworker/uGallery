<?php

echo '<ul>';
foreach((new DirectoryIterator(__DIR__.'/img')) as $i) {
    if ($img->isFile()) {
        echo '<li><img src="img/'.$i->getBasename().'"></li>';
    }
}
echo '</ul>';
