<header class="masthead" style="background-image: url(<?php echo base_url();?>images/home-bg.jpg);">

    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Login</h1>
                    <span class="subheading"></span>



                    <div class="card-header">Login</div>
                    <form action="<?=base_url()?>users/login" method="post">
                        <div class="form-row align-items-center">

                            <div class="card-body text-primary">
                                <div class="col-auto">

                                    <div class="input-group mb-2">

                                        <input placeholder="user name" type="text" class="form-control" id="inlineFormInputGroup" name="username">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body text-primary">
                                <div class="col-auto">

                                    <input placeholder="password" type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="card-body text-primary">
                                <div class="form-group">
                                    <div class="col-auto">
                                        <select name="user_type" class="form-control" id="exampleFormControlSelect1">
                                                <option value="" >--</option>
                                                 <option value="Admin" >Admin</option>
                                                 <option value="Author">Author</option>
                                                 <option value="user">user</option>
      
                                                </select>
                                    </div>
                                    <div class="card-body text-primary">
                                        <div class="col-auto">
                                            <input type="submit" class="btn btn-primary mb-2" value="login">
                                        </div>
                                    </div>
                                </div>
                    </form>
                    </div>



                    </div>
                </div>
            </div>
        </div>
</header>