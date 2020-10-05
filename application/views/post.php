
<header class="masthead"style="background-image: url(<?php echo base_url();?>images/home-bg.jpg);" >
  
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Addis info</h1>
          <span class="subheading"><?= $post['title']?></span>
          
        </div>
      </div>
    </div>
  </div>
</header>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"><?= $post['title']?></h1>

        <!-- Author -->
        <p class="lead">
          <!--by <a href="#">Start Bootstrap</a> -->
          
        </p>

        <hr>

        <!-- Date/Time -->
        <span><?= $post['date_added']?></span>

        

        <!-- Preview Image -->
   <div class="card" style="width: 30rem;"> 
        <img class="card-img-top" src="<?=base_url()?>uploads/<?=$post['image']?>" alt="">
</div>
        <hr>

        <!-- Post Content -->
        <p class="lead"></p>

        

        <p><?= $post['post']?></p>

        

        <p></p>

        <p></p>

        <hr>

        