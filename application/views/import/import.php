<p>Don't show this page to the general public!</p>
<form enctype="multipart/form-data" action="<?php echo site_url('/import'); ?>" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
Choose a CSV to upload: <br /><input name="csv_file" type="file" /><br />
<input name="upload" type="submit" value="Upload File" />
</form>

<p>We're assuming that you aren't going to upload anything dangerous here, so don't mess up.</p>
<p>Your CSV file should have the columns structured as <br /><?php print implode(',', $th); ?></p>