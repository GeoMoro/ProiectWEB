
<h1>User List</h1>
<?php $basket = KITE::getInstance('basket'); ?>

<ul>
<?php foreach($basket as $key =>$value){ ?>
<li> <?php echo $value; }?></li>
</ul>

