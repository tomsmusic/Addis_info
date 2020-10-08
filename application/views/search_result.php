
<header class="masthead"style="background-image: url(<?php echo base_url();?>images/home-bg.jpg);" >
  
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Addis life</h1>
          <span class="subheading">Leave your dream</span>
          
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


                <?php
                //var_dump($results);
             if (!isset($results)) {?>
                    <P>there is no blog</p>
                    <?php              
             }else{

             foreach($results as $val) { 
    ?>
                    <!-- Title -->
                    <h2  class="post-title">
                        <a style="color:black;" href="<?=base_url()?>posts/post/<?=$val['postID']?>">
                            <?php echo ucfirst($val['title'])?>
                        </a>
<?php if ($this->session->userdata('id')){ ?><a class="btn btn-primary" href="<?=base_url()?>posts/editpost/<?=$val['postID']?>">Edit</a> <?php }?>
<?php if ($this->session->userdata('id')){?><a class="btn btn-danger" href="<?=base_url()?>posts/deletepost/<?=$val['postID']?>"> Delete</a> <?php }?>
                    </h2>
                    <a href="<?=base_url()?>posts/post/<?=$val['postID']?>">
                    <p class="post-subtitle">
                        <?=substr(strip_tags($val['post']),0,300)."..." ?>
             </p>
             </a>
                    <p><a href="<?=base_url()?>posts/post/<?=$val['postID']?>">read more</a></p>
                  
                    <span>Posted on
                        <?=$val['date_added']?>
             </span>
                    <div class="card" style="width: 24rem; ">    
                    ​<picture>
                    <img class="card-img-top"  src="<?=base_url()?>uploads/<?=$val['image']?>">
                    ​</picture>
                    <hr>
             </div>
                    <?php            
             } 
        }   
     ?>

                    <!-- Pager -->
                    
                        <hr>


                        <!-- Comments Form -->


                        <!-- Single Comment -->


                        <!-- Comment with nested comments -->


            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">
          <?php  if ($this->session->userdata('id')) {?>
    <p >you are logged in!</p>
    <p >User Type:
        <?=$this->session->userdata('user_type') ?>
    </p>
    <?php   }?>
                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
            <?php   echo form_open('posts/execute_search');  ?>
                        <div class="input-group">
            <?php   echo form_input(array('name'=>'search'));  ?>
                            <span class="input-group-append">
                <div class="btn btn-secondary">
            <?php   echo form_submit('search_submit','Submit'); ?>
                </div>
              </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
            <!--    <div class="card my-4">
                    <h5 class="card-header">ACCESS</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="users/register">+ADD User</a>
                                    </li>
                                    <li>
                                        <a href="posts/new_post">+ADD Post</a>
                                    </li>
                                    <li>
                                        <a href="#">#</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">#</a>
                                    </li>
                                    <li>
                                        <a href="#">#</a>
                                    </li>
                                    <li>
                                        <a href="#">#</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>-->

                <!-- Side Widget -->
                <!-- <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>-->

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->