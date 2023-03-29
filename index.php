<?php 
	require 'include/database.php';
	require 'include/function.php';
	$sql = "SELECT * FROM sensor ORDER BY id_sensor DESC LIMIT 15"; 
	$sensor = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($sensor)) {
	   $distance[] = $row['data_sensor'];
	   $temp[] = $row['data_temp'];
	   $hum[] = $row ['data_hum'];
	   $time[] = clock($row ['waktu']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156560412-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-156560412-1');
	</script>
	<meta name="google-site-verification" content="QJvAU3kQaDNllhFcZki-5WhJ1bpW1XVUNfpyO3BR1qI" />
	<meta charset="UTF-8">
	<meta name="keywords" lang="en" content="smarttrash, smartgarbage, smart trash, smart garbage, iot device, garbage full, garbage temperature, garbage humidity, temperature and humidity sensor, wi-fi module, distance sensor, connect garbage, map location, garbage, smarttrash.ddns.net">
	<meta name="description" content="Container fill level measuring system | Official web site">
	<meta name="robots" content="index, follow">
	<meta name="msapplication-TileColor" content="#5C058F">
	<meta name="theme-color" content="#5C058F">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google" content="notranslate">
	<title>Smart Garbage - Container fill level measuring system | Web Site</title>
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://smarttrash.ddns.net/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="https://smarttrash.ddns.net/css/all.css">
	<link rel="stylesheet" type="text/css" href="https://smarttrash.ddns.net/css/main.css">
	<link rel="shortcut icon" type="image/png" href="https://smarttrash.ddns.net/img/favicon.png">
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script>
	function showUser(str) {
	  if (str == "") {
	    document.getElementById("txtHint").innerHTML = "";
	    return;
	  } else {
	    var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	      if (this.readyState == 4 && this.status == 200) {
	        document.getElementById("txtHint").innerHTML = this.responseText;
	      }
	    };
	    xmlhttp.open("GET","getuser.php?q="+str,true);
	    xmlhttp.send();
	  }
	}
	</script>	
</head>
<body>
<!-- Button Up -->
<a href="#" class="scrollup">Вгору</a>	
	<header id="home" class="header">
		<div class="container">
			<div class="nav">
				<div class="logo">
					<i class="fas fa-trash-alt"></i>
					<a href="index.php"><h2>SmartGarbage</h2></a>
				</div>
				<!--Desktop menu-->
				<div class="nav-wraper">
					<!-- Desktop navigation -->
					<ul class="nav__menu">
						<li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
						<li class="nav__item"><a href="#about" class="nav__link">How it work</a></li>
						<li class="nav__item"><a href="#connect" class="nav__link">Connect garbage</a></li>
						<li class="nav__item"><a href="#map" class="nav__link">Map location</a></li>
						<li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
					</ul>

					<!-- Button for mobile navigation -->
					<div id="menu-togle" class="menu-icon">	
						<div class="menu-icon-line"></div>
					</div>

					<!-- Mobile navigation -->
					<div id="mobile-nav" class="mobile-nav">
						<div class="mobile-nav__title">Menu</div>
						<ul class="mobile-nav__list">
							<li class="mobile-nav__item"><a href="#home" class="mobile-nav__link">Home</a></li>
							<li class="mobile-nav__item"><a href="#about" class="mobile-nav__link">How it work</a></li>
							<li class="mobile-nav__item"><a href="#connect" class="mobile-nav__link">Connect garbage</a></li>
							<li class="mobile-nav__item"><a href="#map" class="mobile-nav__link">Map location</a></li>
							<li class="mobile-nav__item"><a href="#contact" class="mobile-nav__link">Contact</a></li>
							<li class="mobile-nav__item"><a href="login.html" class="mobile-nav__link">Sign in</a></li>
						</ul>
					</div>
				</div>
				<a href="login.html" class="btn sign_btn">Sign in</a>
			</div>
			<div class="content">
				<div class="content_left_part">
					<div class="offer">
						<h1>Container fill level measuring system
						</h1>
						<p>Smart Garbage is a system for remote waste container 
						fill level measuring, and collection routes optimization.
						</p>
						<div class="btn_group">	
							<a id="menu" href="#connect" class="btn cta_btn">Try Now</a>
							<a href="#about" class="btn info_btn">How it work</a>
						</div>
					</div>
				</div>
				<div class="content_right_part">
					<img src="img/new/garbage.webp" alt="smart garbage illustration">
				</div>
			</div>
		</div>
	</header>
	<section id="about" class="info">
		<div class="container">
			<div class="offer_info">
				<h2>How it work</h2>
				<p>Only three components need you to start</p>
			</div>
			<div class="text_info">
				<div class="item_info">
					<div class="item_img">
						<img src="https://smarttrash.ddns.net/img/about/new/hum.webp" alt="DHT11">
					</div>
					<h3>Temperature and Humidity Sensor</h3>
					<p>DHT11 
						It uses a capacitive humidity sensor and a thermistor to measure the surrounding air, and spits out a digital signal on the data pin. 
					</p>
				</div>
				<div class="item_info">
					<div class="item_img">
						<img src="https://smarttrash.ddns.net/img/about/new/wifi.webp" alt="Wi-Fi Module">
					</div>
					<h3>Wi-Fi Module</h3>
					<p>Wi-Fi adapter for arduino is a system for remote waste container fill level measuring, and collection routes optimization.
					</p>
				</div>
				<div class="item_info">
					<div class="item_img">
						<img src="https://smarttrash.ddns.net/img/about/new/sensor.webp" alt="UltraSonic Sensor">
					</div>
					<h3>Distance sensor</h3>
					<p>The HC-SR04 sensor is used to track the contents of the bin. Due to its characteristics and cost, the sensor was ideal for the project.
					</p>
				</div>
				<div class="item_info">
					<div class="item_img">
						<img src="https://smarttrash.ddns.net/img/about/new/gsm.webp" alt="SIM900A">
					</div>
					<h3>Sim 900 Module </h3>
					<p>SIM900A is an ultra-compact and reliable wireless module. It is a Dual-band GSM/GPRS module in a SMT type and is great for wireless cost-effective solutions.
					</p>
				</div>
			</div>
			<a href="#connect" class="btn start_btn">Start Now</a>
		</div>
	</section>
	<section  id="connect" class="connection">
		<div class="container">
			<div class="offer_connection">
				<h2>Connect garbage</h2>
				<p>Choosing the right trash can gives you control over the refill, temperature and humidity in the middle of the tank..</p>
			</div>
			<form action="#" class="form">
				<select name="users" onchange="showUser(this.value)">
					<option value="">Choose your garbage</option>
					<option value="1">Garbage 1</option>
					<option value="2">Garbage 2</option>
					<option value="3">Garbage 3</option>
					<option value="4">Garbage 4</option>
				</select>
			</form>
			<div class="garbage_connect">
				<div class="info_garbage">
					<?php
									$sql = "SELECT * FROM sensor ORDER BY id_sensor DESC" ;
									$result = mysqli_query ($conn, $sql);
									$row= mysqli_fetch_array($result, MYSQLI_ASSOC); 
									
									mysqli_free_result($result);

									if($row["data_sensor"] >= 70){
										echo "<img src='https://smarttrash.ddns.net/img/new/03.webp' alt='Status garbage' class='garbage' width='116px' height='165px'>";
									}
									else {
										echo "<img src='https://smarttrash.ddns.net/img/new/02.webp' alt='Status garbage' class='garbage' width='116px' height='165px'>";
									}
									
					?>
					<div class="offer_garbage">
						<div id="txtHint">Information about the selected garbage can will be listed here...</div>
					</div>
				</div>
				<div class="metric_garbage">
					<div class="metric_full">
						<div class="full" data-percent="<?php
									$sql = "SELECT * FROM sensor ORDER BY id_sensor DESC" ;
									$result = mysqli_query ($conn, $sql);
									while ($result= mysqli_fetch_array($result, MYSQLI_ASSOC)) {
									echo "{$result['data_sensor']}";
									}
								?>">
						</div>
						<div class="metric_info">
							<h3>Garbage full on</h3>
							<p>
								<?php
									$sql = "SELECT * FROM sensor ORDER BY id_sensor DESC" ;
									$result = mysqli_query ($conn, $sql);
									$row= mysqli_fetch_array($result, MYSQLI_ASSOC); 
									
									mysqli_free_result($result);

									if($row["data_sensor"] >= 100){
										echo "Trash is full";
									} else
									if ($row["data_sensor"] < 100){
									printf("%.1f", $row["data_sensor"]);
									echo " %";
									}
								?>
							</p>						
						</div>																		
					</div>
					<div class="metric_full">
						<div class="temp" data-percent="<?php
									$sql = "SELECT * FROM sensor ORDER BY id_sensor DESC" ;
									$result = mysqli_query ($conn, $sql);
									while ($result= mysqli_fetch_array($result, MYSQLI_ASSOC)) {
									echo "{$result['data_temp']}";
									}
								?>">
						</div>
						<div class="metric_info">
							<h3>Garbage temperature on</h3>
							<p>
								<?php
									$sql = "SELECT * FROM sensor ORDER BY id_sensor DESC" ;
									$result = mysqli_query ($conn, $sql);
									$row= mysqli_fetch_array($result, MYSQLI_ASSOC); 
									printf("%.1f", $row["data_temp"]);
									mysqli_free_result($result);
								?>
								&#176C								
							</p>						
						</div>																		
					</div>		
					<div class="metric_full">
						<div class="hum" data-percent="<?php
									$sql = "SELECT * FROM sensor ORDER BY id_sensor DESC" ;
									$result = mysqli_query ($conn, $sql);
									while ($result= mysqli_fetch_array($result, MYSQLI_ASSOC)) {
										echo "{$result['data_hum']}";
									}
								?>">
						</div>
						<div class="metric_info">
							<h3>Garbage humidity on</h3>
							<p>
								<?php
									$sql = "SELECT * FROM sensor ORDER BY id_sensor DESC" ;
									$result = mysqli_query ($conn, $sql);
									$row= mysqli_fetch_array($result, MYSQLI_ASSOC); 
									printf("%.1f", $row["data_hum"]);
									mysqli_free_result($result);
								?>
								%								
							</p>						
						</div>					
					</div>								
				</div>
			</div>
			<script>
Highcharts.theme = {
    colors: [' #C9ED57','#ED5757'],
    chart: {
        backgroundColor: 'rgba(0,0,0,0)'
    },
    title: {
        style: {
            color: '#fff',
            font: 'bold 18px "Titillium Web", sans-serif'
        }
    },
    subtitle: {
        style: {
            color: '#fff',
            font: 'bold 12px "Trebuchet MS", Verdana, sans-serif'
        }
    },
    legend: {
        itemStyle: {
            font: '14px Titillium Web, sans-serif',
            color: '#fff'
        },
        itemHoverStyle:{
            color: '#fff'
        }   
    },
       xAxis: {
      gridLineColor: '#707073',
      labels: {
         style: {
            color: '#fff'
         }
      },
  
      tickColor: '#707073',
      title: {
         style: {
            color: '#A0A0A3'

         }
      }
   },
   yAxis: {
     labels: {
         style: {
            color: '#fff'
         }
      },
      tickColor: '#707073',
      tickWidth: 1,
      title: {
         style: {
            color: '#fff'
         }
      }
   }
     
};
// Apply the theme
Highcharts.setOptions(Highcharts.theme);				
				document.addEventListener('DOMContentLoaded', function () {
				Highcharts.chart('charts', {
				  chart: {
				    type: 'line'
				  },
				  title: {
				    text: 'Dynamics of filling and temperature of the garbage container'
				  },
				  // subtitle: {
				  //   text: 'site: smarttrash.ddns.net'
				  // },
				  xAxis: {
				    categories: [
					<?php 
						foreach ($time as $value) {
						echo '\''.$value.'\',';
					}?>],
					tickInterval: 2,
           			labels: {
                		enabled: true
                	}
				  },
				  yAxis: {
				    title: {
				      text: 'Filling (%) and Temperature (°C)'
				    }
				  },
				  plotOptions: {
				    line: {
				      dataLabels: {
				        enabled: true
				      },
				      enableMouseTracking: false
				    }
				  },
				  series: [{
				    name: 'Filling of garbage',
				    data: [  
				    <?php 
					      foreach ($distance as $value) {
					         echo $value.',';
					      } ?>]
				  }, {
				    name: 'Temperature of garbage',
				    data: [
				            <?php
        foreach ($temp as $value) {
         echo $value.',';
      }?>]
				  }]
				});
				});
			</script>			
			<div id="charts" style="width: 100%; padding-bottom: 120px"></div>

		</div>
	</section>
	<section id="map" class="location">
		<div class="container">
			<div class="offer_location">
				<h2>Map location</h2>
				<p>You have the ability to choose the smart trash can you want in Google Map and watch the trash bin you choose.</p>
			</div>
			<div class="map_location">
				<iframe width="100%" height="550" id="gmap_canvas" src="https://maps.google.com/maps?q=%D0%93%D1%83%D1%81%D1%8F%D1%82%D0%B8%D0%BD%20%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F%20%D0%A8%D0%B5%D0%B2%D1%87%D0%B5%D0%BD%D0%BA%D0%B0%203&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
			</div>
		</div>
	</section>
	<footer id="contact" class="footer">
		<div class="container">
				<div class="nav">
					<a href="#home" class="logo"><i class="fas fa-trash-alt"></i><h2>SmartGarbage</h2></a>
					<nav id="menu" class="menu">
						<ul>
							<li><a href="#home">Home</a></li>
							<li><a href="#about">How it work</a></li>
							<li><a href="#connect">Connect garbage</a></li>
							<li><a href="#map">Map location</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</nav>
				</div>
				<div class="social">
					<p>Follow us on social media:</p>
					<div class="social_icons">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
						<a href="mailto:infosmarttrash@gmail.com"><i class="fas fa-envelope"></i></a>
					</div>
				</div>
				<div class="copyright">
					<p>Copyright © 2019 - <?php echo date("Y");?> | All right reserved</p>
				</div>
		</div>
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://smarttrash.ddns.net/js/jquery.easypiechart.js"></script>
	<script src="https://smarttrash.ddns.net/js/main.js"></script>
</body>
</html>