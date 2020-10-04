<?php echo $error; ?>
<?php echo form_open_multipart('upload/do_upload'); ?>
<?php
      $data_form=array(
          'name'=>'userfile'
      );

      echo form_upload($data_form);
?><br/>
<?php echo form_submit('','upload') ?>
<?php form_close(); ?>
