<h2> <?php echo $simplepoll_question; ?></h2>
<form>
	<?php 
		
		if($simplepoll_option_1) { echo '<input type="radio" name="simplepoll_options" value="'.$simplepoll_option_1.'"> '.$simplepoll_option_1.'<br/>';} 
		if($simplepoll_option_2) { echo '<input type="radio" name="simplepoll_options" value="'.$simplepoll_option_2.'"> '.$simplepoll_option_2.'<br/>';}
		if($simplepoll_option_3) { echo '<input type="radio" name="simplepoll_options" value="'.$simplepoll_option_2.'"> '.$simplepoll_option_3.'<br/>';}
		if($simplepoll_option_4) { echo '<input type="radio" name="simplepoll_options" value="'.$simplepoll_option_2.'"> '.$simplepoll_option_4.'<br/>';}
		if($simplepoll_option_5) { echo '<input type="radio" name="simplepoll_options" value="'.$simplepoll_option_2.'"> '.$simplepoll_option_5.'<br/>';} 


	?>
	<input type="submit" value="Enviar">
</form>
