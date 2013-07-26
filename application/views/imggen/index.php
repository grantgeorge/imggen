<h1><a href="http://192.241.148.248/imggen/application/image_captures/">Image Directory</a></h1>
<?php foreach ($imggen as $imggen_item): ?>

    <h2><?php echo $imggen_item['title'] ?></h2>
    <div id="main">
        <?php echo $imggen_item['text'] ?>
    </div>
    <p><a href="imggen/<?php echo $imggen_item['title'] ?>">View image</a></p>

<?php endforeach ?>