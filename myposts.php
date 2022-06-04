<?php require('actions/securityaction.php');
require('actions/post/mypostsaction.php'); 
require('actions/post/publishactions.php'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include'includes/head.php'; ?> 
</head>
<body class="blog-author bg-gray-200" >
 <?php include'includes/navbar.php' ?>
 <header>
    <div class="page-header min-height-400" style="background-image: url('https://cdn.kulshe.com/uploads/countries/banner/1630217223.jpg?width=1600&crop=1600,440&crop_gravity=center&quality=65)');" loading="lazy">
      <span class="mask opacity-8"></span>
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">Atlas Tunisia.
          </h1>
          <p class="lead text-white mt-3"> Buy, Sell and Promote Anything for FREE  in Tunisia </p>
        </div>
    </div>
    </div>
  </header>
  <div class="card card-body blur shadow-blur mx-3 mx-md-5 mt-n6 ">

 <?php include'includes/header.php' ?>

 
   <div class="container mt-6">
    <div class="row align-items-center">
      <div class="col-lg-4 ms-auto me-auto ">
        <div class="rotating-card-container">
          <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
            <div class="front front-background" style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
              <div class="card-body py-7 text-center">
                <i class="material-icons text-white text-4xl my-3">touch_app</i>
                <h3 class="text-white">إنت تاجر <br /> هاو كيفاش تكبر من راس مالك في مدة قصيرة</h3>
                <p class="text-white opacity-8">السمعة لازم تكون باهية.<br> الأس كي تبدى تثق في الموقع تثق زادة في السلعة إلي فيه</p>
              </div>
            </div>
            <div class="back back-background" style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
              <div class="card-body pt-7 text-center">
                <h3 class="text-white">استثمار مبلغ بسيط</h3>
                <h4 class="text-white opacity-8"> كيف استثمر مبلغ صغير ؟ <br>  ماهو أفضل استثمار مبلغ بسيط ؟</h4>
                <a href="https://www.go-rich.net/استثمار-مبلغ-بسيط-كيف-استثمر-مبلغ-صغير/" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">Start </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 ms-auto overflow-auto mt-3 " style="height: 500px">
        <div class="row justify-content-start">
        <div class="page-header py-3  my-sm-3  border-radius-xl " style="background-image: url('https://previews.123rf.com/images/peshkov/peshkov1712/peshkov171200365/92337625-abstract-bitcoin-background-cryptocurrency-e-business-and-e-commerce-concept-3d-rendering.jpg');" loading="lazy">
    <span class="mask bg-gradient-dark"></span>
    <div class="container">
      <div class="row">
          <section class="py-1">
    <div class="row justify-space-between py-1">
      <div class="col- mx-auto">

<div >
 <?php if (isset($error)){echo ' <h2 class=" text-white">' .$error.'</h2>';} ?>
        <?php  while($post=$getallpost->fetch()){ ?>
 
          <div class=" px-6 mt-4 ">
          <div class="card-body card bg-gradient-dark">
            <div class="author align-items-center">
              <div class="name">

                <div class="stats text-white">
                  <i class="far fa-clock"></i> <?= $post['datep']; ?>
                </div>
              </div>
            </div>
            <p class="text-white mb-0 font-weight-bolder"><?= $post['subject']; ?></p>

            <p class="mt-4 text-white"><?= $post['message']; ?></p>
            <div class="d-block text-end me-4 ">
                    <a  href="editpost.php?id=<?= $post['id']; ?>"  class="btn btn-sm btn-outline-white text-nowrap  w-20 mb-0">EDIT</a>
                    <a  onclick="return confirm('delete?')"href="actions/post/deletepostaction.php?id=<?= $post['id']; ?>" class="btn  btn-sm btn-outline-white  text-nowrap mb-0">DElETE</a>


                  </div>
    
          </div>
    
 
      </div>


      <?php        } ?>

          
        
      </div>  
            </div>
          </div>
        </section>
        </div>
      </div>
      </span>

    </div>
  </div>
        
      </div>
    </div>
  </div>
  <section class="mt-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto text-center">
        <h2 class="mb-0">More than </h2>
        <h2 class="text-gradient text-primary mb-3"><?php require('actions/database.php');
$check= $bdd->query('SELECT * from post  ');
$check1=$check->rowcount();
echo $check1;
?> Articles for sale</h2>
        <p class="lead">Many Fortune  companies, startups,  governmental institutions and indiduals post their products. </p>
      </div>
    </div>

</section>
        </div>
  <?php include'includes/footer.php' ?>  
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <?php include'includes/modal.php' ?>
        </div>
      </div>
</body>
</html>