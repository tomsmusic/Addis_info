
</br>
<div class="container">
<div class="row">
<div class="col">
</div>

<div class="col-6">
   <div class="card">
       <div class="card-header">Post</div>
      <div class="card-body">

      <!--image upload-->
  <div class="image_up">   
      <?php //echo $error; ?>
<?php echo form_open_multipart('upload/do_upload'); ?>
<?php
      $data_form=array(
          'name'=>'userfile'
      );

      echo form_upload($data_form);
?><br/><br/>
<?php echo form_submit('','upload') ?>
<?php form_close(); ?>
</div>
          <!--post upload-->
    <form class="form-group" action="new_post" method="POST">
        <label>Title</label>
        <input class="form-control" type="text" name="title"></br>
        </br>
        <label>post</label>
        <textarea id="exampleFormControlTextarea1" rows="5" class="form-control" name="postt"></textarea></br>
        </br>

        <button name="submit" type="submit" class="btn btn-primary">Post</button>
    </form>

    </div>
        </div>

      </div>
  
  <div class="col">
       


</div>
</div>
</div>       