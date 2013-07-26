<?php
#echo '<h2>Render page</h2>';
echo '<h2>'.$imggen_item['title'].'</h2>';
shell_exec('cd /var/www/imggen/application/static/js/ && phantomjs image_capture.js '.$imggen_item['title']);
echo '<img src="http://192.241.148.248/imggen/application/image_captures/'.$imggen_item['title'].'.png" alt="Failed to load">';
echo '<h1><a href="http://192.241.148.248/imggen/index.php/imggen">Index</a></h1>';

#echo '<h2>'.$imggen_item['title'].'</h2>';
#echo $imggen_item['text'];