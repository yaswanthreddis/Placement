<?php
require("include/connect.php");
$dept = $_GET['dept'];


$var = 0;
$batch = 'Y20';
$percentage = '85';
if (isset($_POST['search'])) {
  $var = 1;
  $batch = $_POST['batch'];
  $percentage = $_POST['percentage'];
  $sql = "SELECT * FROM students WHERE dept='$dept' and batch='$batch' and percentage>='$percentage' order by percentage desc";
  $data = $conn->query($sql);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Placement Cell</title>
  <meta content="" name="description">
  <meta content="" name="keywords">



  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    @font-face {
      font-family: 'CustomFont';
      src: url('URWDIN-Black.ttf') format('truetype');
  }
  


 .center-container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 20vh; /* Adjust as needed */
    }

    /* Styling the label and select */
    label, select {
      margin-right: 10px;
    }
    select{
      margin-right: 40px;
    }

  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="home.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Placement Cell<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a href="home.php" >Home</a></li>
          <li><a href="cse.php?dept=CSE" >CSE</a></li>
          <li><a href="it.php?dept=IT" >IT</a></li>  
          <li><a href="csds.php?dept=CSDS" >CSDS</a></li>
          <li><a href="ece.php?dept=ECE" >ECE</a></li>
          <li><a href="eee.php?dept=EEE" >EEE</a></li>
          <li><a href="eie.php?dept=EIE" >EIE</a></li>
          <li><a href="civil.php?dept=CIVIL" >CIVIL</a></li>
          <li><a href="#it">MECH</a></li>
          <!--<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>-->
          
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="index.php" id="delayedLink">Log out</a>
      <div id="loadingOverlay" class="loading-overlay">
    <div class="loading-spinner"></div>
</div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
     

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <main id="main">

    <!-- ======= About Section ======= -->
    

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script>
  const currentPage = window.location.pathname.split('/').pop(); // Extract the current page from URL
  const navLinks = document.querySelectorAll('nav a');
  
  navLinks.forEach(link => {
    if (link.getAttribute('href') === currentPage) {
      link.classList.add('active');
    }
  });
</script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="it" class="about section-bg">
    <br>
    <div class="head">
      <h1 style="text-align:center;font-size: 28px;font-weight: 700;">Department Of <?php echo $dept;?><span style="color: var(--color-primary);">.</span></h1>
    </div>
    
    
        <div class="center-container">
        
        <form method="post" action="">
        <label style="text-align:center;"><strong>Choose Batch</strong></label>
            <select style="text-weight:bold;text-align:center;" name="batch">
                <option <?php if ($batch == 'Y20') {echo 'selected';}?> value="Y20">Y20</option>
                <option <?php if ($batch == 'Y21') {echo 'selected';}?> value="Y21">Y21</option>
                <option <?php if ($batch == 'Y22') {echo 'selected';}?> value="Y22">Y22</option>
                <option <?php if ($batch == 'Y23') {echo 'selected';}?> value="Y23">Y23</option>
            </select>
            <label style="text-align:center;"><strong>Choose Percentage</strong></label>
            <select style="text-align:center;" name = "percentage">
                <option <?php if ($percentage == '85') {echo 'selected';}?> value="85"> >85%</option>
                <option <?php if ($percentage == '75') {echo 'selected';}?> value="75"> >75%</option>
                <option <?php if ($percentage == '65') {echo 'selected';}?> value="65"> >65%</option>
                <option <?php if ($percentage == '55') {echo 'selected';}?> value="55"> >55%</option>
            </select>
            <button type="submit" style="display: inline-block;
    padding: 4px 12px;
    background-color: #4169e1;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease" name="search">Search</button>
    </form>

        </div>
        
        <?php if($var==1){  ?>
        <div class="container mt-3">         
        <table style="margin-top:50px;text-align:center" class="table table-bordered">
          <thead>
            <tr>
              <th>S.NO</th>
              <th>Regd.No</th>
              <th>Name</th>
              <th>Batch</th>
              <th>Percentage</th>
              <th>CGPA</th>
              <th>View Details</th>
            </tr>
          </thead>
          <tbody>
          <?php $cnt = 0 ;
          while ($res = $data->fetch_assoc()) { ?>
            <tr>
              <td><?php echo ++$cnt ?></td>
              <td><?php echo $res['id']; ?></td>
              <td><?php echo $res['name']; ?></td>
              <td><?php echo $res['batch']; ?></td>
              <td><?php echo $res['percentage']; ?></td>
              <td><?php echo $res['cgpa3']; ?></td>
              <td><a style="display: inline-block;
    padding: 4px 12px;
    background-color: #4169e1;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease" href="student.php?id=<?php echo $res['id'];?>">View</a></td>
            </tr>
       <?php } ?>
            
          </tbody>
        </table>
      </div>
      <?php }?>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>