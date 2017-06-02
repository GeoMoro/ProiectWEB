<h1>wall</h1>
<form class="form-horizontal" role="form" action="wall" method="post">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Name</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="name" id="inputEmail1" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword1" class="col-lg-2 control-label">Message</label>
    <div class="col-lg-10">
      <textarea class="form-control" rows="3" name ="message" placeholder="Please Type some message..."></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">post</button>
    </div>
  </div>
</form>

<?php $basket= KITE::getInstance('basket'); ?>

<?php foreach($basket as $key =>$value)
			{
				echo "<div><b>".$value['name']."</b></div>";
				echo "<div>".$value['message']."</div><br>";
			}
		?>