<?php include_once('header.php'); ?>

    	<div class="container">
          <?php echo form_open('welcome/save'); ?>
      <fieldset>
        <legend>Application Form</legend>

        <div class="form-group">
          <label>Title</label>
          <?php echo form_input(['name'=>'title', 'placeholder'=>'Title', 'class'=>'form-control']); ?>
          <?php echo form_error('title', '<div class="text-danger">', '</div>'); ?>
        </div>

        <div class="form-group">
          <label>Description</label>
          <?php echo form_textarea(['name'=>'description', 'placeholder'=>'Description', 'class'=>'form-control']); ?>
          <?php echo form_error('description', '<div class="text-danger">', '</div>'); ?>
        </div>

        <fieldset class="form-group">
        <?php  echo form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-primary']); ?>
        <?php echo anchor('Welcome', 'Back', ['class'=>'btn btn-primary']) ?>
      </fieldset>

<?php echo form_close(); ?>
	</div>