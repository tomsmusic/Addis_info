
<header class="masthead"style="background-image: url(<?php echo base_url();?>images/home-bg.jpg);" >
  
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Addis info</h1>
          <span class="subheading">+Add user</span>
          
        </div>
      </div>
    </div>
  </div>
</header>


</br>
<div class="container">
<div class="row">
<div class="col">
</div>

<div class="col-6">
<div class="card">
<div class="card-header">Register</div>
<div class="card-body">
<?php if($errors) {
              
              echo $errors;
            }?>
<?php echo form_open(base_url().'users/register'); ?>

  <div class="form-row align-items-center">

  <?php
            
  ?>

    <div class="card-body text-primary">
     
    <p><?=form_label('Username','username')?></p>       
                <div class="input-group mb-2">
            
        <?php
              
              $data_form = array(
                'name'=>'username',
                'class'=>'form-control',
                'id'=>'inlineFormInputGroup'
              );
              echo form_input($data_form);
        
        ?>
                </div>
    </div>
    
    <div class="card-body text-primary">
    
    <p><?=form_label('Email','email')?></p>
                <div class="input-group mb-2">
            
        <?php
              $data_form = array(
                'name'=>'email',
                'type'=>'email',
                'class'=>'form-control',
                'id'=>'inlineFormInputGroup'
              );
              echo form_input($data_form);
        
        ?>
                </div>
    </div>
       </br>
    <div class="card-body text-primary">
    <p><?=form_label('Password','password')?></p>
      <?php
             $data_form = array(
               'name'=>'password',
               'class'=>'form-control',
               'id'=>'inputPassword',
               'type'=>'password'
             );

             echo form_input($data_form);
      ?>
      
    
    </div>
    
    <div class="card-body text-primary">
    <p><?=form_label('Password Confirmed','password2')?></p>
      <?php
             $data_form = array(
               'name'=>'password2',
               'class'=>'form-control',
               'id'=>'inputPassword',
               'type'=>'password'
             );

             echo form_input($data_form);
      ?>
      
    
    </div>
    <div class="card-body text-primary">
                
    <p><?=form_label('User Type','user_type')?></p>
    
      <?php
            $options =array(
              ''=>'--',
              'admin'=>'Admin',
              'author'=>'Author',
              'user'=>'User'
              
            );
            
            echo form_dropdown('user_type',$options,'');
      ?>      
   </div>              
 <div class="card-body text-primary">    
     <div class="btn btn-primary mb-2" >
      <?php echo form_submit('','Register'); ?>
    </div>
    
</div>
</div>

  
<?php echo form_close(); ?>
</div>
</div>
</div>

<div class="col">
</div>
</div>