<?php include_once('header.php'); ?>

<div class="container">
	<h3>View All Posts</h3>
  <?php if($msg = $this->session->flashdata('msg')): ?>
    <?php echo $msg; ?>
<?php endif; ?>
	<?php echo anchor('welcome/create', 'Add Post', ['class'=>'btn btn-primary']);?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Date Created</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php if(count($posts)):?>
  		<?php foreach($posts as $post): ?>
    <tr class="table-active">
      <td><?php echo $post->title; ?></td>
      <td><?php echo $post->description; ?></td>
      <td><?php echo $post->date; ?></td>
      <td>
      	<?php echo anchor("welcome/view/{$post->id}", 'View', ['class'=>'badge badge-info']);?>
      	<?php echo anchor("welcome/update/{$post->id}", 'Update', ['class'=>'badge badge-success']);?>
      	<?php echo anchor("welcome/delete/{$post->id}", 'Delete', ['class'=>'badge badge-danger']);?>
      </td>
    </tr>
<?php endforeach; ?>
<?php else: ?>
	<tr>
		<td>No Records Found!</td>
	</tr>
<?php endif; ?>
  </tbody>
</table> 
</div>

</body>
</html>
