
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
        <img src="<?=base_url('images/m0.jpg')?>">
        <button name="submit" type="submit" class="btn btn-primary" >submit</button>
    </form>

    </div>
</div>
</div>

<div class="col">
</div>
</div>
</div>
           