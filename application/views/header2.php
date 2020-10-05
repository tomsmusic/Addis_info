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
            <a  class="nav-link" style="color:black;"  href="<?php echo base_url();?>posts/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>posts/about" style="color:black;">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:black;" href="<?php echo base_url();?>posts/contact">Contact</a>
          </li>
          
          
          <li class="nav-item">
            <a class="nav-link" style="color:black;" href="<?php echo base_url();?>users/logout">
              <?php if ($this->session->userdata('id')){ echo "Logout"; }?></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" style="color:black;" href="<?php echo base_url();?>users/login">
              <?php if (!$this->session->userdata('id')){ echo "Login"; }?></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- Page Header -->

<header class="hea" >
<div style="background-image: url(<?php echo base_url();?>images/home-bg.jpg);
  padding: 30px;
  
  margin-top: -100px;
  background-size: cover;
  
 " >
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Addis info</h1>
            <span class="subheading">Your Number One Info</span>
            
          </div>
        </div>
      </div>
    </div>
  </header>
