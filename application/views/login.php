
</br>
<div class="container">
<div class="row">
<div class="col-6 col-sm-4">


</div>
<div class="col-6 col-sm-4">

<div class="card border-primary mb-3" style="max-width: 18rem;">
<?phpif($error==1) {
    echo "usere name  password did not math.";
}?>

<div class="card-header">Login</div>
<form action="<?=base_url()?>users/login" method="post">
  <div class="form-row align-items-center">
               
               <div class="card-body text-primary">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Username</label>
      <div class="input-group mb-2">
        
        <input type="text" class="form-control" id="inlineFormInputGroup" name="username">
      </div>
    </div>
                </div>

                <div class="card-body text-primary">
  <div class="col-auto">
      
      <input type="password" class="form-control"  name="password">
    </div>
               </div>
                <div class="card-body text-primary">
                <div class="form-group">
    <label for="exampleFormControlSelect1">User Type</label>
    <select name="user_type" class="form-control" id="exampleFormControlSelect1">
      <option value="" >--</option>
      <option value="Admin" >Admin</option>
      <option value="Author">Author</option>
      <option value="user">user</option>
      
    </select>
  </div>              
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