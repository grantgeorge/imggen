<h2>exec</h2>
<?php
$result = shell_exec('phantomjs http://192.241.148.248/imggen/application/static/js/image_capture.js');
echo $result;
?>