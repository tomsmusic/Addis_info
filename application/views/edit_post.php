
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



<div class="container">
<div class="row">

<div class="col">
</div>

<div class="col-6">
<div class="card">
<div class="card-header">Edit</div>
<div class="card-body">






        

  <?php  if($success==1){?>
           <p style="color: green;" >edited</p>
  <?php         
    }
  ?>  
    <form class="form-group" action="../editpost/<?= $post['postID']?>" method="POST">
        <label>Title</label>
        <input type="text" class="form-control" name="title" value="<?= $post['title']?>" ></br>
        </br>
        <label>post</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="postt"><?= $post['post']?></textarea></br>
        </br>
        <div class="card" style="width: 30rem;"> 
        <img class="card-img-top" src="<?=base_url()?>uploads/<?=$post['image']?>" alt="">
        </div>
        <button name="submit" type="submit" class="btn btn-primary" >submit</button>
    </form>

    </div>
</div>
</div>

<div class="col">
</div>
</div>
</div>
           