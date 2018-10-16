<?php include_once('header.php'); ?>

    	<div class="container">
          <?php echo form_open("welcome/change/{$post->id}"); ?>
          
      <fieldset>
        <legend>Update Post</legend>
        <div class="form-group">
          <label>Title</label>
          <?php echo form_input(['name'=>'title', 'placeholder'=>'Title', 'class'=>'form-control', 'value'=>set_value('title', $post->title)]); ?>
          <?php echo form_error('title', '<div class="text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label>Description</label>
          <?php echo form_textarea(['name'=>'description', 'placeholder'=>'Description', 'class'=>'form-control', 'value'=>set_value('description', $post->description)]); ?>
          <?php echo form_error('description', '<div class="text-danger">', '</div>'); ?>
        </div>
        <fieldset class="form-group">
        <?php  echo form_submit(['name'=>'submit', 'value'=>'Update', 'class'=>'btn btn-primary']); ?>
        <?php echo anchor('Welcome', 'Back', ['class'=>'btn btn-primary']) ?>
      </fieldset>

<?php echo form_close(); ?>
	</div>
