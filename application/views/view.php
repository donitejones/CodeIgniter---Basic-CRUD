<?php include_once('header.php'); ?>
    	<div class="container">
    		<h1>View Post</h1>
    		<h4><?php echo $post->title; ?></h4>
    		<p><?php echo $post->description; ?></p>
    		<p><?php echo $post->date; ?></p>
    		<?php echo anchor('Welcome', 'Back', ['class'=>'btn btn-primary']) ?>
    	</div>