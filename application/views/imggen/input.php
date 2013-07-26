<?php echo validation_errors(); ?>

<?php echo form_open('imggen/input') ?>

	<label for="input">Input</label>
	<textarea name="text"></textarea><br />

	<input type="submit" name="submit" value="Create image" />

</form>