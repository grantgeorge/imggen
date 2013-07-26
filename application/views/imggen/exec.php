<h2>exec</h2>
<?php
$result = shell_exec('phantomjs /var/www/imggen/application/static/js/image_capture.js');
echo $result;
?>