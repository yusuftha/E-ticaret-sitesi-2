<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vücut kitle indeksi</title>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stil.css">
    <style type="text/css">
    	*{
    		padding: 0;
  			margin: 0;
    	}
    	.linkler
    	{
    		color: #e60000;
    		padding: 10px;
    		margin-right: 5px;

    		text-decoration: none;
    	}
    	.linkler:hover
    	{
    		background-color: #e60000;
    		color: white;
    		transition: 500ms;
    		text-decoration: none;
    	}
    

			.slide {
			    position: absolute;
			    left: 550px;
			    top:25px;
			    width: 300px;
			    text-align: left;
			    height: 100px;
			    color:white;
			    font-size: 40px;
			    -webkit-animation: slide 0.2s reverse;
			    -webkit-animation-delay: 1s;
			    animation: slide 0.5s reverse;
			    animation-delay: 1s;
			}

			@-webkit-keyframes slide {
			    100% { left: 0; }
			}

			@keyframes slide {
			    100% { left: 0; }
			}

			.slider {
			    position: absolute;
			    right: -600px;
			    top:80px;
			    width: 850px;
			    text-align: left;
			    height: 15px;
			    color:white;
			    font-size: 20px;
			    -webkit-animation: slider 0.2s forwards;
			    -webkit-animation-delay: 1s;
			    animation: slider 0.5s forwards;
			    animation-delay: 1s;
			}

			@-webkit-keyframes slider {
			    100% { right: 0; }

			}

			@keyframes slider {
			    100% { right: 0; }
			}
    	
    
		@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
		}
		@import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);
		.fa-2x {
		font-size: 2em;
		}
		.fa {
		position: relative;
		display: table-cell;
		width: 60px;
		height: 36px;
		text-align: center;
		vertical-align: middle;
		font-size:20px;
		}


		.main-menu:hover,nav.main-menu.expanded {
		width:250px;
		overflow:visible;
		}

		.main-menu {
		background:#e60000;
		text-align: left;
		position:absolute;
		top:90px;
		bottom:0;
		height:425px;
		left:0;
		width:10px;
		overflow:hidden;
		-webkit-transition:width .05s linear;
		transition:width .05s linear;
		-webkit-transform:translateZ(0) scale(1,1);
		z-index:1000;
		}

		.main-menu>ul {
		margin:7px 0;
		}

		.main-menu li {
		position:relative;
		display:block;
		width:250px;
		}

		.main-menu li>a {
		position:relative;
		display:table;
		border-collapse:collapse;
		border-spacing:0;
		color:#999;
		font-family: arial;
		font-size: 14px;
		text-decoration:none;
		-webkit-transform:translateZ(0) scale(1,1);
		-webkit-transition:all .1s linear;
		transition:all .1s linear;
		  
		}

		.main-menu .nav-icon {
		position:relative;
		display:table-cell;
		width:60px;
		height:36px;
		text-align:center;
		vertical-align:middle;
		font-size:18px;
		}

		.main-menu .nav-text {
		position:relative;
		display:table-cell;
		vertical-align:middle;
		width:190px;
		font-size: 18px;
		color: white;
		  font-family: 'Oswald', sans-serif;
		}

		.main-menu>ul.logout {
		position:absolute;
		left:0;
		bottom:0;
		}

		.no-touch .scrollable.hover {
		overflow-y:hidden;
		}

		.no-touch .scrollable.hover:hover {
		overflow-y:auto;
		overflow:visible;
		}

		a:hover,a:focus {
		text-decoration:none;
		}

		nav {
		-webkit-user-select:none;
		-moz-user-select:none;
		-ms-user-select:none;
		-o-user-select:none;
		user-select:none;
		}

		nav ul,nav li {
		outline:0;
		margin:0;
		margin-bottom:20px;
		margin-top: 30px;
		}
		.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
		color:#fff;
		background-color:black;
		}
		.area {
		float: left;
		background: #e2e2e2;
		width: 100%;
		height: 100%;
		}
		@font-face {
		  font-family: 'Titillium Web';
		  font-style: normal;
		  font-weight: 300;
		  src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
		}
		#buton
		{
			background-color: #e60000;
			width: 90px;
			font-size: 17px;
			padding: 10px;
			color:white;
			outline: none;
			border:none;
			margin: 0px auto;

		}
		#buton:hover
		{
			background-color: white;
			color: #e60000;
			
			transition: 500ms;
		}
		#buton2
		{
			background-color: #e60000;
			width: 90px;
			font-size: 17px;
			padding: 10px;
			color: white;
			outline: none;
			border:none;
			margin: 0px auto;

		}
		#buton2:hover
		{
			background-color: white;
			color: #e60000;
			border:1px solid black;
			transition: 500ms;
		}
		#boyinput,#kiloinput
		{
			width: 200px;
			height: 30px;
			font-size: 18px;
			background-color: #e6e6e6;
			border: none;
			outline: none;
			background-color: white;
			border-bottom: 2px solid black;
		}

    </style>
</head>
<body style="font-family: Oswald;">
	<div class="container-fluid">
		<div class="row" style="background-color: white;line-height: 50px;text-align: center ">
			<div class="col-md-2">
				<a href="anasayfa.php"><img src="img/yenilogo.png" class="img-responsive" style="padding: 10px;margin: 0px auto"></a>
			</div>

			<div class="col-md-7">
				<form action="arama.php" method="post">
					<input type="text" name="ara" style="height: 30px;width: 500px;margin:0px auto;padding: 5px" placeholder="Ara">
					
					<button type="submit" style="width: 50px;height: 30px;line-height: 25px;margin-left:0px;border:none;background-color: #e60000;color:white">Ara</button>
					
				</form>
				
			</div>

			<div class="col-md-3" style="color:white; text-align: right;">
				<a href="#" id="ism" style="color:#e60000">
					<?php
    				    if (isset($_SESSION['user']))
    				    {
					        echo $_SESSION['user']['ad_soyad'];
					    }
					?>
				</a>
				<a href="sepet.php" class="linkler text-right"><span class="glyphicon glyphicon-shopping-cart"></span> SEPET</a>
				<a href="uyegiris.php" class="linkler" style="text-decoration: none"><span class="glyphicon glyphicon-user"></span> ÜYE GİRİŞİ</a>
			</div>
		</div>
		
		
		<div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="anasayfa.php">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                             <span class="glyphicon glyphicon-home"></span> ANASAYFA
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="hakkimizda.php">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            <span class="glyphicon glyphicon-briefcase"></span> HAKKIMIZDA
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="supplementler.php">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                           <span class="glyphicon glyphicon-ok-circle"></span> SUPPLEMENTLER
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="programlar.php">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                         <span class="glyphicon glyphicon-heart-empty"></span>  PROGRAMLAR
                        </span>
                    </a><br><br><br>
                   
                </li>
               
            <ul class="logout">
                <li>
                   <a href="cikis.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                           <span class="glyphicon glyphicon-log-out"></span>  ÇIKIŞ YAP
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
        <h1 align="center">Vücüt Kitle İndeksi (BMI)</h1><br>
		<div class="row" style="padding-left: 150px">

			<div class="col-md-4" style="border:2px solid red;border-radius: 40px;height: 500px">
				<form method="post">
					<h2 style="background-color: red;color: white;width: 200px;text-align: center;margin: 0px auto;position: relative;bottom:25px;padding: 8px">V.K.İ Hesaplama</h2>
					
					<br><br><br><br>
					<div style="font-size: 20px" class="row">
						<table style="margin-left: 20px">
							<tr>
								<td align="right">Boyunuz :</td>
								<td style="font-size: 13px">
									<input type="text" name="boy" id="boyinput" placeholder="(metre cinsinden)"> 
								</td>
							</tr>
						</table>
							<br><br>
						<table style="margin-left: 25px">

								<tr align="left">
									<td align="right">Kilonuz :</td>
									<td style="font-size: 11px">
										<input type="text" name="kilo" id="kiloinput" placeholder="(kg cinsinden)"> 
									</td>
								</tr>
						
						</table>
					</div>
					<br><br><br><br><br><br><br><br>
					<p align="center">
						<input type="submit" name="gonder" value="Hesapla" id="buton2">
					</p>
				</form>
				
			</div>
			
			<div class="col-md-8">
				<p style="font-size: 20px;padding: 20px;text-align: justify;text-indent: 5px">
					Vücut kitle indeksiniz, boyunuza göre kilonuzun zayıf mı, şişman mı olduğunu öğrenmek için kullanılır. Değerler 18.6'nın altında çıkarsa zayıf, 18.6 ile 24.9 arasında çıkarsa normal kilolu, 25 ile 29.9 arasında çıkarsa fazla kilolu, 30 ile 34.9 arasında çıkarsa 1.derece obez, 35 ile 39.9 arasında çıkarsa 2.derece obez, 40'ın üzerinde çıkarsa 3. derece obezsiziz demektir.
				</p>
				<div align="center">
					<img src="img/vki.png">
				</div>
				<br><br>
				<div>
					<p style="font-size: 22px">
						<?php 
					
							if (isset($_POST["gonder"])) {
								$boy=$_POST["boy"];
								$kilo=$_POST["kilo"];
								$vkiboy=($boy*$boy);
								$vki=$kilo/$vkiboy;
								echo "Vücut kitle indeksiniz:  ".round($vki,1);

								if ($vki<'18.6')
								{
									echo "<br><br>Çok zayıfsınız. Günlük aldığınız kaloriyi arttırarak kilonuzu yükseltin. Bol kalorili besinler tüketin ve kesinlikle spor yapın. <b>Uzaktan eğitim </b> programımızı öneriyoruz. Kendinize özel beslenme programı ve Antrenman programınızı almak için programları incelerin. Antrenman programları için <a href='programlar.php'>tıklayın.</a>";
								}
								else if ($vki>'18.6' && $vki<'24.9')
								{
									echo "<br><br>Kilonuz normal. Beslenmenize dikkat ederek kilonuzu koruyun. Spor yaparak kas oranınızı arttırabilir ve daha fit görünebilirsiniz. Antrenman programları için <a href='programlar.php'>tıklayın.</a> ";
								}
								else if ($vki>'25' && $vki<'29.9')
								{
									echo "<br><br>Fazla Kilolusuzuz. Kalori açığı oluşturarak ve düzenli spor yaparak yağ oranınızı düşürün. <b>Yağ Yakımı </b> programımızı öneriyoruz. Antrenman programları için <a href='programlar.php'>tıklayın.</a> ";
								}
								else if ($vki>'30' && $vki<'34.9')
								{
									echo "<br><br>1. dereceden obezsiniz. Sağlığınız için kesinlikle spora başlamalı ve derhal sağlıklı beslenmeye başlamalısız.  <b>Yağ Yakımı </b> programımızı öneriyoruz. Antrenman programları için <a href='programlar.php'>tıklayın.</a>";
								}
								else if ($vki>'35' && $vki<'39.9')
								{
									echo "<br><br>2. dereceden obezsiniz. Kesinlikle doktora görünmeli ve uzman bir diyetisyenden yardım almalısınız.";
								}
								else if ($vki>'40')
								{
									echo "<br><br>3. dereceden obezsiniz. Sağlığınız için derhal doktora görünmelisiniz. Aksi taktirde ciddi rahatsızlıklar yaşarsınız.";
								}
							}

				 		?>
					</p>
				</div>

			</div>			
		</div>
		<br><br><br><br><br>


	<div class="row" style="background-color: white;padding: 15px">
		<div class="col-md-3">
			<a href="anasayfa.php"><img src="img/yenilogo.png" class="img-responsive" style="padding: 10px; margin: 0px auto;"></a>
		</div>

		<div class="col-md-3">
			<h5 style="color:black;text-align: center;">MENÜ</h5>
			<a href="coksatan.php" style="color: black;text-decoration: none; padding-left: 10px;font-size: 10px">En Çok Satanlar</a><br><br>
			<a href="populer.php" style="color: black;text-decoration: none; padding-left: 10px;font-size: 10px">En Popüler Olanlar</a><br><br>
			<a href="indirim.php" style="color: black;text-decoration: none; padding-left: 10px;font-size: 10px">İndirimde Olanlar</a><br>
		</div>
		<div class="col-md-3" style="text-align: center; color: black;font-size: 10px">
			<h5 style="text-align: center;">BİZE ULAŞIN</h5>
			<p align="left" style="padding: 10px">
				<span class="glyphicon glyphicon-earphone"> </span> (0216) 544 34 00 <br><br>
				<span class="glyphicon glyphicon-envelope"> </span> info@fitkal.com <br><br>
				<span class="glyphicon glyphicon-map-marker"> </span>  Armağanevler Mahallesi Sırt Sokak No 141 Ümraniye İstanbul <br><br>
				<a href="iletisim.php">Daha Fazla</a>
			</p>
		</div>
		
		<div class="col-md-3">
			<h5 style="text-align: center; color: black;">BİLGİLER</h5>
			<a href="hakkimizda.php" style="color: black;text-decoration: none; padding-left: 10px; font-size: 10px">Hakkımızda</a><br><br>
			<a href="sss.php" style="color: black;text-decoration: none; padding-left: 10px; font-size: 10px">Sıkça Sorulan Sorular (S.S.S)</a><br><br>
			<a href="markalar.php" style="color: black;text-decoration: none; padding-left: 10px; font-size: 10px">Markalar</a><br>
		</div>
	</div>
	<div class="row">
		<img src="img/footerimg.png" class="img-responsive" style="margin: 0px auto">
	</div>
	</div>
</body>

</html>
