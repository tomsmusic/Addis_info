<header class="masthead" style="background-image: url(<?php echo base_url();?>images/home-bg.jpg);">

    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Addis info</h1>
                    <span class="subheading">+Add post</span>

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
                <div class="card-header">Post</div>
                <div class="card-body">

                    <!--image upload-->
                    <div class="image_up">

                    </div>
                    <!--post upload-->
                    <form class="form-group" action="new_post" method="POST" enctype="multipart/form-data">
                        <label>Title</label>
                        <input class="form-control" type="text" name="title"></br>
                        </br>
                        <label>post</label>
                        <textarea id="exampleFormControlTextarea1" rows="5" class="form-control" name="postt"></textarea></br>
                        </br>
                        <input type="file" name="image">



                        <button name="submit" type="submit" class="btn btn-primary">Post</button>
                    </form>

                </div>
            </div>

        </div>

        <div class="col">



        </div>
    </div>
</div>