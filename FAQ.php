<?php 

require "resources/parts/header.php";
require "resources/parts/footer.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fakulteti i Inxhinierise Elektrike dhe Kompjuterike</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="resources/assets/img/favicon.png" rel="icon">
  <link href="resources/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="resources/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="resources/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="resources/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="resources/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="resources/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="resources/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="resources/assets/css/FAQ.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="resources/assets/css/style.css" rel="stylesheet">



</head>

<body>
    <?php render_header() ?>
 

  <link rel="stylesheet" href="//cdn.materialdesignicons.com/3.7.95/css/materialdesignicons.min.css">
<?php
    $test1="We will answer soon!";
 
    // connect with database
    $conn = new PDO("mysql:host=localhost;dbname=sems", "root", "");
 
    // check if insert form is submitted
    if (isset($_POST["submit"]))
    {
       
        // insert in faqs table
        $sql = "INSERT INTO FAQ (question, answer) VALUES (?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([
            $_POST["question"],
            $test1
        ]);
    }

    $sql = "SELECT * FROM FAQ";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $faqs = $statement->fetchAll();
 
?>
 <?php foreach ($faqs as $faq): ?>
                     <div class="card">
                          <div class="card-header" id="headingOne-4">
                            <h5 class="mb-0">
                              <a data-toggle="collapse" data-target="#collapseOne-4" aria-expanded="true" aria-controls="collapseOne-4">
                              <?php echo $faq['question']; ?>
                              </a>
                            </h5>
                          </div>
                          <div id="collapseOne-4" class="collapse show" aria-labelledby="headingOne-4" data-parent="#accordion-4">
                            <div class="card-body">
                              <p class="mb-0"> <?php echo $faq['answer']; ?></p><p>
                            </p></div>
                          </div>
                        </div>                               
                    </div>
                <?php endforeach; ?>
<div style="position:relative;left:35%;">
  <form method="POST" >
        <textarea id="subject" name="question" placeholder="Sheno pyetjen tende..." style="height:200px;width:400px;"></textarea>
      <input type="submit" name="submit" value="Dergo Pyetjen" class="social facebook"></input> 
  </form>	
</div>
<?php render_footer() ?>
  <!-- Vendor JS Files -->
  <script src="resources/assets/vendor/purecounter/purecounter.js"></script>
  <script src="resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="resources/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="resources/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="resources/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="resources/assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>
