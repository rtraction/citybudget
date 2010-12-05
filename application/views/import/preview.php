<style>
.error{
	color:red;
	border:thin red solid;
}
</style>

<p>Does this look right?</p>
<form method="post" action="<?php echo site_url('/import'); ?>">
	<table>
		<tr>
		<?php
		$error = array();
		
		
		$row_count=0;
		foreach($table as $row){
			if($row != null){
				print '<tr>';
				
				$cell_count=0;
				if($row_count == 0){
					print '<th><p>Count</p></th>';
				}else{
					print '<th><p>'.$row_count.'</p></th>';
				}
				foreach($row as $cell){
					
					//header row
					if($row_count == 0){
						print '<th><p>'.$cell.'</p>';
						
						//errors?
						if(isset($th[$cell_count]) && $cell != $th[$cell_count]){
							print '<p class="error">Expected "'.$th[$cell_count].'"</p>';
							$error['col_names'] = true;
						}else if(!isset($th[$cell_count])){
							print '<p class="error">Unexpected column</p>';
							$error['col_num'] = true;
						}						
						print '</th>';

					//content rows
					}else{
						if($cell == ''){
							print '<td class="error">&nbsp;</td>';
						}else{
							print '<td>'.$cell.'</td>';
						}
						
						//if it's an expected row, make a hidden field for processing
						if(isset($th[$cell_count])){
							print '<input type="hidden" name="budget['.$cell_count.'][]" value="'.$cell.'" />';
						}
					}
					$cell_count++;
				}
				print '</tr>';
				$row_count++;
			}
		}
		
		?>
		</tr>
	</table>
	<br />
	<input name="approve" type="submit" value="Yep, that looks right!">
</form>