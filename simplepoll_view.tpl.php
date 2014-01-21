<h2> <?php echo $simplepoll_question; ?></h2>

	<?php 

if($fieldDelta ==0 ){
	print '<form action="'.base_path().'simplepoll" method="POST">';
}		
		if($simplepoll_option_1) { echo '<input type="radio" name="simplepoll_question_'.$fieldDelta.'_value" value="'.$simplepoll_option_1.'"> '.$simplepoll_option_1.'<br/>';} 
		if($simplepoll_option_2) { echo '<input type="radio" name="simplepoll_question_'.$fieldDelta.'_value" value="'.$simplepoll_option_2.'"> '.$simplepoll_option_2.'<br/>';}
		if($simplepoll_option_3) { echo '<input type="radio" name="simplepoll_question_'.$fieldDelta.'_value" value="'.$simplepoll_option_3.'"> '.$simplepoll_option_3.'<br/>';}
		if($simplepoll_option_4) { echo '<input type="radio" name="simplepoll_question_'.$fieldDelta.'_value" value="'.$simplepoll_option_4.'"> '.$simplepoll_option_4.'<br/>';}
		if($simplepoll_option_5) { echo '<input type="radio" name="simplepoll_question_'.$fieldDelta.'_value" value="'.$simplepoll_option_5.'"> '.$simplepoll_option_5.'<br/>';} 


	?>
		<input type="hidden" name="simplepoll_NID" value="<?php echo $entityID?>">
		<input type="hidden" name="simplepoll_question<?php echo $fieldDelta;?>_ID" value="<?php echo $simplepoll_question ; ?>">
	<pre><?php 

			print 'Entidad:'.$entityID.'<br>';
			print 'Campo:'.$fieldName.'<br>';
			print 'Delta:'.($fieldDelta +1).'/ '.$totalPolls; ?>
	</pre>
<?php 

	if(($fieldDelta +1)==$totalPolls){
		print '<input type="hidden" name="simplepoll_NID" value="'.$entityID.'">';
		print '<input type="hidden" name="totalPolls" value="'.$totalPolls.'">';
		print '<input type="submit" value="Enviar">';
		print '<form>';
	}	


	$arrForm = drupal_get_form('simplepoll_votingform');
	 print drupal_render($arrForm);
 ?>


