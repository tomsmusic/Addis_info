


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">


                <?php
             if (!isset($posts)) {?>
                    <P>there is no blog</p>
                    <?php              
             }else{

             foreach($posts as $row) { 
    ?>
                    <!-- Title -->
                    <h2  class="post-title">
                        <a style="color:black;" href="<?=base_url()?>posts/post/<?=$row['postID']?>">
                            <?= ucfirst($row['title'])?>
                        </a>
<?php if ($this->session->userdata('id')){ ?><a class="btn btn-primary" href="<?=base_url()?>posts/editpost/<?=$row['postID']?>">Edit</a> <?php }?>
<?php if ($this->session->userdata('id')){?><a class="btn btn-danger" href="posts/deletepost/<?=$row['postID']?>"> Delete</a> <?php }?>
                    </h2>

                    <p>
                        <?=substr(strip_tags($row['post']),0,300)."..." ?>
                    </p>

                    <p><a href="<?=base_url()?>posts/post/<?=$row['postID']?>">read more</a></p>
                    <p class="lead">
                  <!--      by  <a href="#">Start Bootstrap</a>   -->
                       
                    </p>
                    <p>Posted on
                        <?=$row['date_added']?>
                    </p>
                    <img src="<?=base_url('images/m0.jpg')?>">
                    <hr>

                    <?php            
             } 
        }   
     ?>

                    <!-- Pager -->
                    <?=$pages?>
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
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">ACCESS</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="<?=base_url()?>users/register">+ADD User</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>posts/new_post">+ADD Post</a>
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
                </div>

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