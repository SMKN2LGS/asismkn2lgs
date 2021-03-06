<?php 

// session
session_start();

if ($_SESSION["role"] != "user") {
    header("location: auth/login.php");
}



function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

function hari_ini(){
	$hari = date ("D");
 
	switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;
 
		case 'Mon':			
			$hari_ini = "Senin";
		break;
 
		case 'Tue':
			$hari_ini = "Selasa";
		break;
 
		case 'Wed':
			$hari_ini = "Rabu";
		break;
 
		case 'Thu':
			$hari_ini = "Kamis";
		break;
 
		case 'Fri':
			$hari_ini = "Jumat";
		break;
 
		case 'Sat':
			$hari_ini = "Sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;
	}

    return $hari_ini;
 
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
                <div class="title">
                <?php date_default_timezone_set('Asia/Jakarta'); ?>
                <h5 class="mb-5"><?php echo hari_ini(); echo ', '; echo tgl_indo(date( 'Y-m-d')); ?></h5>
                    <h2>Aplikasi Surat Izin <br> SMK Negeri 2 Langsa</h2>
                    <p>Surat izin merupakan surat yang berisi keterangan pada sekolah, instansi, unversitas, ataupun tempat kerja dikarenakan adanya keperluan yang tidak dapat ditinggalkan sehingga tidak dapat hadir seperti biasanya. Surat izin harus dibuat sebenar-benarnya dan dapat dipertanggungjawabkan.</p>

                    <a href="asi.php?hal=daftar" class="btn btn-primary">Mulai !</a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="image d-flex justify-content-center">
                    <img src="img/smkn2langsa.png" width="400" alt="" class="mt-5">
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
