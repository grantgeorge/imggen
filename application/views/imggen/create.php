<h2>Create an image</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('imggen/create') ?>

	<label for="title">Title</label>
	<input type="input" name="title" /><br />

	<label for="text">Text</label>
	<textarea name="text"></textarea><br />

	<input type="submit" name="submit" value="Create image" />

</form>