<?php 

// session
session_start();

if ($_SESSION["role"] != "user") {
    header("location: auth/login.php");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>ASI | Beranda</title>
  </head>
  <body class="bg">
  <?php include 'layouts/navbar.php' ?>
   <div class="container top utama">
        <div class="row mt-5">
            <div class="col-lg-7 d-flex align-items-center">
                <div class="title mt-5">
                    <h2 class="mt-5">SMK NEGERI 2 LANGSA</h2>
                    <p class="subtitle">Sekolah Menengah Kejuruan (SMK) Negeri 2 Langsa merupakan salah satu sekolah tertua di Aceh, dengan tingkat kedisiplinan yang baik agar menamatkan peserta didik yang berkualitas sehingga dapat bersaing di dunia kerja/industri.</p>

					<h3 class="mt-3">Media Sosial</h3>
					<p>Berikut adalah berbagai media sosial yang di miliki SMK Negeri 2 Langsa :</p>
					<div class="col-lg-12">
						<a href="https://www.smkn2langsa.sch.id/" class="btn btn-lg"><i class="fas fa-globe fa-lg text-dark me-3"></i></a>
						<a href="https://www.youtube.com/smkn2langsa/" class="btn btn-lg"><i class="fab fa-youtube fa-lg text-dark me-3"></i></a>
						<a href="https://www.instagram.com/smkn2langsa/" class="btn btn-lg"><i class="fab fa-instagram fa-lg text-dark me-3"></i></a>
						<a href="https://www.facebook.com/smkn2langsa/" class="btn btn-lg"><i class="fab fa-facebook fa-lg text-dark me-3"></i></a>
					</div>
				</div>
            </div>
            <div class="col-lg-5">
                <div class="image d-flex justify-content-center">
                    <img src="img/flame-4.png" width="400" alt="" class="mt-5">
                </div>
            </div>
        </div>
   </div> 

  <?php include 'layouts/footer.php' ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="js/script.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>

  </body>
</html>
