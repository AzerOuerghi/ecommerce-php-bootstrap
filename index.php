<?php
session_start(); 

 require('actions/post/publishactions.php'); 
require('actions/post/infoallpostsaction.php');

require('actions/database.php');
$check= $bdd->query('SELECT * from post  ');
$check1=$check->rowcount();



?>
<!DOCTYPE html> 
<html lang="en">
<head>
 <?php include'includes/head.php'; ?>
    <title>Document</title>
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
  
<form method="GET" class="form-inline mt-7  ">
    <div class="row justify-space-between mx-6   my-n6 ">
      <div class="col- mx-auto">
        <div class="input-group input-group-dynamic ">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" ">
      <button class="btn btn-warning my-2 my-sm-0" type="submit">    <i class="fas fa-search"></i>
</button>
        </div>
      </div>
    </div>
</form>
<div class="   mx-auto">

        <h2 class="  animate__animated animate__wobble  mb-3">More than <?php  if(isset($check4)) {echo  $check4;}else{echo $check1;}; ?> Articles for sale</h2> </div>
<section class="py-6 bg-gray-100 ">
  <div class="container">
    <div class="row">
    <?php while($post=$getallpost->fetch()){ ?>

      <div class="position-relative  mt-4 col-sm-2">
      <a href="post.php?id=<?= $post['id']; ?>">

      <di class="rotating-card-container">
          <div class="card card-rotate ">

        <div class="card ">
          <div class="card-header p-0  mt-n4 position-relative z-index-2">
              <img src="<?= $post['photo'] ?>" alt="img-blur-shadow" class="img-fluid border-radius-lg shadow  mx-auto">
          </div></div>
          </div>
          <div class="card-body pt-2">
            <span class="text-gradient text-warning text-uppercase text-xs font-weight-bold my-2"><?= $post['price']." DT" ?></span>
            <p class="h5  text-dark">
            <?= $post['subject']; ?>
            </p>
            <p class="card-description mb-4">
            available in:  <?= $post['location']; ?>             </p>
            <div class="author align-items-center">
              <div class=" ms-3 ">
                <Strong class=" text-uppercase"><?= $post['author_name']; ?> </Strong><br>
                  <small> <?= $post['datep']; ?></small>
              </div>
            </div>
          </div>
        </di>
    </a>
      </div>
      <?php        } ?>
    </div>
  </div>
</section>


<!-- START Blogs images & quote & text -->
<section class="py-5 px-5 ">
  <div class="container ">
    <div class="row">
        <div class="col-md-6 position-relative">
          <div class="position-relative ms-md-5 me-md-n5">
            <div class="blur-shadow-image">
              <img class="image-left border-radius-lg img-fluid position-relative top-0 end-0 bg-cover" src="assets/img/laaaa.png" alt="merc">
            </div>
          </div>

          <p class="blockquote border border-primary rounded w-50 p-3 text-sm text-primary float-md-end mt-4 me-md-n2 mx-auto">"السمعة متع site web لازم تكون باهية. الأس كي تبدى تثق في الموقع تثق زادة في السلعة إلي فيه

"
              <br>
              <br>
              <small>-Azer</small>
          </p>
          <!-- Second image on the left side of the article -->
          <div class="position-absolute bottom-0 ms-n2 me-3 start-0 end-2 d-md-block d-none">
            <div class="blur-shadow-image">
              <img class="image-container border-radius-lg img-fluid position-relative bg-cover" src="https://8rbtna.com/pic/images/news/3430027520.jpg" alt="steer">
            </div>
          </div>

        </div>
        <div class="col-md-5">
            <!-- First image on the right side, above the article -->
            <div class="position-relative ms-n4 mb-5 mt-8 d-md-block d-none">
              <div class="blur-shadow-image">
                <img class="image-right border-radius-lg img-fluid position-relative bg-cover" src="assets/img/laa.jpg" alt="biturbo">
              </div>
            </div>
            <h3 class="mb-4">أكثر من 6 ملاين توانسة عندهم  <br> “ACCES INTERNET”
            </p>
            <p>
            في 2022, أغلب التوانسة إلي عمرهم أقل من 50 سنة عندهم انترنت في التليفون، في الدار، في الخدمة و لا حتى في ال-publinet. هذا يمثل فرصة ممتازة لك إنت كى تاجر بش تبيع سلعتك ولا تعرض خدماتك في تونس الكل مش كان في حومتك و لا مدينتك. يعني عندك possibilité بش تبيع سلعتك لأكثر من 6 ملاين توانسة ما غير تعب.

باهي كيفاش ؟
أسهل طريقة بش تبيع عل الإنترنت هي انك تهبط السلعة  ولا الخدمات متاعك في شكل إعلانات على مواقع مختصة كما موقع أفريات تونس. لكن رد بالك من حاجة، ما تهبطش إعلاناتك على أي موقع، ثبت فيه مليح ساع، عندو سمعة باهية ولا لا. خاطر كي تهبط على موقع خايب، سلعتك زادة بش يشوفها العباد             </p>
            <p class="mb-0">على موقع Atlas تنجم تهبط إعلاناتك بطريقةٍ:<br>

من غير compte: لهنا juste تهبط إعلان وأكهو (لازم نومرو التليفون بش يكلموك العباد)<br>

بال compte: هذي أحسن طريقة خاصة كي تحب تعمل boutique en ligne بإسمك تبيع فيها إلي تحب.<br>

كي تولي “Un vendeur de confiance”، يعني بائع محل ثقة، إعلاناتك يوليو يهبطوا automatiquement من غير modération.<br>

بعد ما تحل compte، ما عليك كان تبدى تهبط في إعلاناتك (كراهب، ديار، سلعة، …)
<br>
ملاحظة: موقع أفريات موجود باللغة الفرنسية و اللغة العربية. يعني كان تحب تحل البوتيك متاعك بالعربي أدخل على النسخة متع الموقع بالعربي. كان تحب 
            </p>
        </div>
    </div>
</div>
</section>




    </div> </div> </div>

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