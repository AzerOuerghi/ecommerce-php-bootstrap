<?php require'actions/user/signupaction.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
<?php include'includes/head.php'; ?>

</head>
<body>
    <?php include'includes/navbar.php'; ?>
    <?php if(isset($_SESSION['auth'])){
             header ('location: myposts.php ');
           }else{       ?>

<div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');" loading="lazy">
   
<span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
        
              </div>
            </div>
            <div class="card-body">
              <form class="text-start" method="POST" action="" enctype="multipart/form-data">
              <div class="row mb-4">
    <div class="col">
      <div class="form-outline input-group-outline input-group mb-3">
                  <label class="form-label"> Name</label>
                  <input type="text" class="form-control" name="namee">
                  </div>
    </div>
    <div class="col">
      <div class="form-outline input-group-outline input-group mb-3  ">
                  <label class="form-label">Last Name</label>
                  <input type="text" class="form-control" name="last">
                </div>  
           </div>
             
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" name="email">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <div class="col">
      <div class="form-outline input-group-outline input-group mb-3">
                  <input type="file" class="form-control" name="photo">
                  </div>
    </div>
    <div class="col">
      <div class="form-outline input-group-outline input-group mb-3  ">
                  <label class="form-label">phone</label>
                  <input type="text" class="form-control" name="phone" accept="image/*">
                </div>  
           </div>
        
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2" name="valide">Sign in</button>
                </div>
                <a href="login.php"><p class="mt-4 text-sm text-center">
                  Already have an account?
                </p> </a>
                <?php if(isset($errorMsg)){echo '<p>' .$errorMsg.' </p>';} ?>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   
<?php } ?>
</body>
</html>