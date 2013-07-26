<h2>exec</h2>
<?php
echo 'executing image_capture.js'
shell_exec('cd /var/www/imggen/application/static/js/ && phantomjs image_capture.js');
echo 'execution complete'
?>
<img src="http://192.241.148.248/imggen/application/image_captures/TestScript.png" alt="Failed to load">
<h1><a href="http://192.241.148.248/imggen/index.php/imggen">Index</a></h1>