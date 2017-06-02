<?php
	$basket = KITE::getInstance('basket');

?>

<h2> This is Addition page</h2>
<p> you have given the numbers <?php echo $basket->get('a'); ?> and <?php echo $basket->get('b'); ?> </p>
<p> <b> The Sum is <?php echo $basket->get('c'); ?> </b></p>