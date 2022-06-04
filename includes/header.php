
    
    <?php if(isset($_SESSION['auth'])){?>
    <section class="py-sm-7  mb-n9 position-relative">
      <div class="container">
        <div class="row">
          <div class="col-11 mx-auto">
            <div class="mt-n8 mt-md-n9 text-center">
              <img class="avatar avatar-xxl shadow-xl position-relative z-index-2" src="<?= $_SESSION['photo'] ?>" alt="bruce" loading="lazy">
            </div>
            <div class="row py-5 mt-n4">
              <div class="col-lg-7 col-md-7 z-index-2 position-relative  px-sm-5 mx-auto">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h3 class="mb-0 align-center  text-uppercase "> <?= $_SESSION['name'] ?> <?= $_SESSION['last'] ?> </h3>
                  <div class="d-block">
                    <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-sm btn-outline-dark text-nowrap mb-0">Publish</button>
                  </div>
          
                </div>
                <div class="row mb-1">
                  <div class="col-auto">
                    <span class="h6 text-primary "  id="state1" countTo="
                    <?php require('actions/database.php');
$check=$bdd->prepare('SELECT * FROM post where author_id=?');
$check->execute(array($_SESSION['id']));
$check2=$check->rowcount();
echo $check2; ?>" >0</span>
                    <span>Posts</span>
                  </div>
                  <div class="col-auto" >
                    <span class="h6 text-primary" id="state2" countTo="<?= rand(200,1000) ?>" >0</span>
                    <span>Followers</span>
                  </div>
                  <div class="col-auto">
                    <span class="h6 text-primary" id="state3" countTo="<?= rand(100,300) ?>" >0</span>
                    <span>Following</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>
      <script type="text/javascript">

  if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state2')) {
    const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
      countUp1.start();
    } else {
      console.error(countUp1.error);
    }
  }
  if (document.getElementById('state3')) {
    const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
      countUp2.start();
    } else {
      console.error(countUp2.error);
    };
  }
</script>
<?php } ?>