<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>Bangun Datar</title>
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css"  rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="js/ie-emulation-modes-warning.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="page-top">
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="#page-top">LUAS</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li>
							<a class="page-scroll" href="index.php">Segitiga</a>
						</li>
						<li>
							<a class="page-scroll" href="persegi.php">Persegi</a>
						</li>
						<li>
							<a class="page-scroll" href="lingkaran.php">Lingkaran</a>
						</li>
                        <li>
							<a class="page-scroll" href="data.php">Data</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<!-- Header -->
		<header>
			<div class="container">
				<div class="slider-container">
					<div class="intro-text">
						<div class="intro-lead-in">Data</div>
						<div class="intro-heading">Hasil Perhitungan Luas</div>
					</div>
				</div>
			</div>
		</header>
        
        <!-- Tampil data perhitungan segitiga -->
		<section id="about" class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
					</div>
				</div>
				<?php 
                    $lines = file('hasils3.txt'); 
                    echo "<h3>Berikut ini data perhitungan segitiga</h3><hr>";
                    foreach ($lines as $line_num => $line){
	                   print "<font color=black>Line #{$line_num}</font> : " . $line . "<br />\n"; 
                    }
                ?>
                
                <?php

                $file = "hasils3.txt";
                $baris = count(file($file));

                echo "Jumlah data: $baris";

                ?>
                
			</div>
			<!-- /.container -->
		</section>
        
        
        <!-- Tampil data perhitungan persegi -->
		 <section id="about" class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
					</div>
				</div>
				<?php 
                    $lines = file('hasilpersegi.txt'); 
                    echo "<h3>Berikut ini data perhitungan persegi</h3><hr>";
                
                    foreach ($lines as $line_num => $line){
	               print "<font color=black>Line #{$line_num}</font> : " . $line . "<br />\n"; 
                    }
                ?>
                
                
                <?php

                $file = "hasilpersegi.txt";
                $baris = count(file($file));

                echo "Jumlah data: $baris";

                ?>
			</div>
			<!-- /.container -->
		</section>
		
        
        <!-- Tampil data perhitungan lingkaran -->
        <section id="about" class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
					</div>
				</div>
				<?php 
                    $lines = file('hasilling.txt'); 
                    echo "<h3>Berikut ini data perhitungan lingkaran</h3><hr>";
                    foreach ($lines as $line_num => $line){
	               print "<font color=black>Line #{$line_num}</font> : " . $line . "<br />\n"; 
                    }
                ?>
                
                
                <?php

                $file = "hasilling.txt";
                $baris = count(file($file));

                echo "Jumlah data: $baris";

                ?>
			</div>
			<!-- /.container -->
		</section>
     
		
		<p id="back-top">
			<a href="#top"><i class="fa fa-angle-up"></i></a>
		</p>
		<footer>
			<div class="container text-center">
				<p>Designed by <a href="http://moozthemes.com"><span>MOOZ</span>Themes.com</a></p>
			</div>
		</footer>


		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/cbpAnimatedHeader.js"></script>
		<script src="js/theme-scripts.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>