<link rel="stylesheet" href="http://192.241.148.248/imggen/application/static/css/image_view.css" type="text/css">
<script type="text/javascript" src="http://192.241.148.248/imggen/application/static/js/image_capture.js" ></script>
<h1><a href="http://192.241.148.248/imggen/application/image_captures/">Image Directory</a></h1>
<h1><a href="http://192.241.148.248/imggen/index.php/imggen/create">Create</a></h1>
<?php foreach ($imggen as $imggen_item): ?>

    <h2><?php echo $imggen_item['title'] ?></h2>
    <div id="main">
        <?php echo $imggen_item['text'] ?>
    </div>
    <p><a href="imggen/<?php echo $imggen_item['title'] ?>"><?php echo $imggen_item['title']?> view</a></p>

<?php endforeach ?>