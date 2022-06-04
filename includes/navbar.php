<body class="index-page bg-gray-200">
  
  
  <!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
<nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
  <div class="container-fluid px-0">
    <a class="navbar-brand font-weight-bolder ms-sm-3 animate__animated animate__heartBeat" href="index.php" rel="tooltip" title="Designed Azer and Aymen" data-placement="bottom" target="_blank">
    <img src="assets/img/logo.png" alt="Logo" style="width:90px;"> </a>
      <ul class="navbar-nav navbar-nav- ms-auto">

        <?php if(isset($_SESSION['auth'])){?>
   
        </li>
         <li class="nav-item my-auto  mx-3 ms-3 ms-lg-0">
        <a href="myposts.php" class=" text-end border-radius-md ms-auto "> Profile</a>
        </li><?php  } ?>
        <li class="nav-item my-auto  mx-3 ms-3 ms-lg-0">
        <a href="index.php" class=" text-end border-radius-md ms-auto "> Home</a>
        </li> 

          <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
            <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
          </a>
          <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
            <div class="d-none d-lg-block">
  <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
    Landing Pages
  </h6>
  <a href="./author.php" class="dropdown-item border-radius-md">
    <span>About Us</span>
  </a>
  <a href="./author.php" class="dropdown-item border-radius-md">
    <span>Contact Us</span>
  </a>
  <a href="./author.php" class="dropdown-item border-radius-md">
    <span>Author</span>
  </a> <?php if(!isset($_SESSION['auth'])){?>
  <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
    Account
  </h6> 
  <a href="./signup.php" class="dropdown-item border-radius-md">
    <span>Sign In</span>
  </a> <?php } ?>
</div>        

          <?php if(isset($_SESSION['auth'])){?>
<li class="nav-item my-auto ms-3 ms-lg-0">

          <a href="actions/user/logoutaction.php" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Logout</a>
          
        </li>
        <?php  }else{ ?>
          <li class="nav-item my-auto ms-3 ms-lg-0">

<a href="login.php" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Login</a>

</li>
<?php } ?>

      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
</div></div></div>



 