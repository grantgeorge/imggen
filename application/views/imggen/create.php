<h2>Input HTML</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('imggen/create') ?>

	<label for="text">Text</label>
	<textarea name="text"></textarea><br />

	<input type="submit" name="submit" value="Create image" />

</form>