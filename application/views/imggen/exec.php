<h2>exec</h2>
<?php
shell_exec('cd /var/www/imggen/application/static/js/');
shell_exec('phantomjs image_capture.js');
?>