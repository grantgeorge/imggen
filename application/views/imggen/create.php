<h2>Create an image</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('imggen/create') ?>

	<label for="title">Title</label>
	<input type="input" name="title" /><br />

	<label for="text">Text</label>
	<textarea name="text"></textarea><br />

	<input type="submit" name="submit" value="Create image" />

	<h1><a href="http://192.241.148.248/imggen/index.php/imggen">Index</a></h1>

</form>