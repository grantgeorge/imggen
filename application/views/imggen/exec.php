<h2>exec</h2>
<?php
shell_exec('cd /var/www/imggen/application/static/js/ && phantomjs image_capture.js');
$result = shell_exec('phantomjs --version');
echo $result;
?>