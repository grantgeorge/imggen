<?php foreach ($imggen as $imggen_item): ?>

    <h2><?php echo $imggen_item['title'] ?></h2>
    <div id="main">
        <?php echo $imggen_item['text'] ?>
    </div>
    <p><a href="imggen/<?php echo $imggen_item['title'] ?>">View article</a></p>

<?php endforeach ?>