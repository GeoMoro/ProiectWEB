<?php
	$basket = KITE::getInstance('basket');

?>
<style>
h1{
background:pink;
}
p{
background:green;
}
</style>

<h1> This is Addition page</h1>
<p> you have given the numbers <?php echo $basket->get('a'); ?> and <?php echo $basket->get('b'); ?> </p>
<p> <b> The Sum is <?php echo $basket->get('c'); ?> </b></p>