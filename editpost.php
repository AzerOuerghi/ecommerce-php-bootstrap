<?php
require('actions/securityaction.php');
require('actions/post/infopostaction.php');
require('actions/post/editpostaction.php');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php  include'includes/head.php' ?>
</head>
<body class="blog-author bg-gray-200">


<div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');" loading="lazy">

    <div class="container mt-6">
      <div class="row">
        <div class="col">
          <div class="card box-shadow-xl overflow-hidden mb-5">
            <div class="row">
              <div class="col-lg-5 position-relative bg-cover " style="background-image: url('assets/img/shapes/waves-white.svg')" loading="lazy">
                <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                <div class=" text-center my-auto">
              <img class="img-fluid border-radius-lg" src="<?= $postinfo['photo'] ?>" alt="bruce" loading="lazy">
              
            </div> 
           
                </div>
              </div>
              
              <div class="col-lg-7">
                <form class="p-3" id="contact-form" method="post">
                  <div class="card-header px-4 py-sm-5 py-3">
                    <p class="lead"> Your last change will not be saved.</p>
                  </div>
                  <div class="card-body pt-1">
                    <div class="row">
       
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <input type="text" class="form-control" name="subject" placeholder="<?= $postinfo['subject'] ?>">
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label>Your message</label>
                          <textarea name="message" class="form-control" name"message" id="message" rows="6" ><?= $postmessage ; ?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 text-end ms-auto">
                      <button type="submit" class="btn bg-gradient-primary w-60   mb-0"  name="valide">Edit Post</button>
    <a  href="myposts.php" class="btn btn-outline-primary mb-0">Cancel</a>
    <div />
              
                <?php if(isset($errorMsg)){echo '<p>' .$errorMsg.' </p>';}?>     
                               </div>
</form>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
</body>
</html>