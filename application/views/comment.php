

  

        <!-- Comments Form -->
        <form class="form-group" action="<?=base_url();?>comments/new_comment?id=<?= $post['postID']?>" method="POST">    
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
           <div class="form-group">
                <input class="form-control" name="commenter" placeholder="name">
                
              </div>
              <div class="form-group">
                <textarea class="form-control" name="comment_text" rows="3" placeholder="comment"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Post</button>
            </form>
          </div>
        </div>
        </form>

        <!-- Single Comment -->
        <?php foreach ($comments as $row) {?>
            <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0"><?= $row['commenter']?></h5>
            <?= $row['comment_text']?>
         <!-- replays
                
            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
              <h5 class="mt-0"><?= $row['replay_name']?></h5>
                 sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>
                 
           -->
          </div>
        </div>
      <?php } ?>
        

        <!-- Comment with nested comments -->
        

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

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

        <!-- Categories Widget 
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
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
        </div>   -->

        <!-- Side Widget 
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>  -->

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  