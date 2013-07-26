<h2>exec</h2>
<?php
shell_exec('cd /var/www/imggen/application/static/js/ && phantomjs image_capture.js');
$result = shell_exec('phantomjs --version');
echo $result;
?>
<img src="http://192.241.148.248/imggen/application/image_captures/TestScript.png" alt="Failed to load">
<h1><a href="http://192.241.148.248/imggen/index.php/imggen">Index</a></h1>