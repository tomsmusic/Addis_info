<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Addis info</title>
  
  <!-- Bootstrap core CSS -->
 
  
  <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet" >
  <link href="<?php echo base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  <link href="<?php echo base_url()?>css/clean-blog.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  
  <!-- Custom styles for this template -->
  
  
  
</head>

<body>
 
 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <a class="navbar-brand" > </a>
      <button style="color:black;" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i  class="fas fa-bars"></i>
      </button>
      <div  class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a  class="nav-link"   href="<?php echo base_url();?>posts/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>posts/about" >About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="<?php echo base_url();?>posts/contact">Contact</a>
          </li>
          
          <li class="nav-item">
            
            <?php if ($this->session->userdata('id')){ ?><a class="nav-link"  href="<?php echo base_url();?>users/register"> +Add user </a> <?php }?>
          </li>

          <li class="nav-item">
            
            <?php if ($this->session->userdata('id')){ ?><a class="nav-link"  href="<?php echo base_url();?>posts/new_post"> +Add post </a> <?php }?>
          </li>
          <li class="nav-item">
            
            <?php if ($this->session->userdata('id')){ ?><a class="nav-link"  href="<?php echo base_url();?>users/logout"> logout </a> <?php }?>
          </li>

          <li class="nav-item">
            
        <?php if (!$this->session->userdata('id')){ ?><a class="nav-link"  href="<?php echo base_url();?>users/login">login   </a> <?php }?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- Page Header -->



