<style>
.error{
	color:red;
}
</style>
<?php 
$error = 0;
foreach($messages as $message){
	
	if(isset($message['error'])){
		print '<p class="error">'.$message['error'].'</p>';
		$error ++;
	}else if(isset($message['message'])){
		print '<p>'.$message['message'].'</p>';	
	}
}
?>
<p class="error"><?php print $error; ?> errors.</p>