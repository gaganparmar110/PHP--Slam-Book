 <?php include "database.php"; ?>

<?php
	
  $query="select * from box order by time desc limit 100";
  $box = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Slam Book</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <h1>Slam Book</h1>
      </header>
      <div id="shouts">
      	<ul>
	  <?php while ($row=mysqli_fetch_assoc($box)): ?>
      	    <li class="shout">
	      <span><?php echo $row['time'];  ?> - </span><strong><?php echo $row['user'];  ?>:</strong> <?php echo $row['message'];  ?>
	    </li>
	  <?php endwhile; ?>
      	</ul>
      </div>
      <div id="input">
      	<?php if (isset($_GET['error'])) : ?>
	      <div class="error"><?php echo $_GET['error'];  ?></div>
	<?php endif; ?>
        <form method="post" action="process.php">
          <input type='text'  name="user" placeholder="Enter your name" />
          <input type='text' name="message" placeholder="Enter message" />
          <br />
          <input class="shout-btn"type="submit" name="submit" value="Submit" />
        </form>
      </div>
    </div>
  </body>
</html>