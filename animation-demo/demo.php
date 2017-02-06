<!DOCTYPE html>
<html lang="en">
	<head>
		<title>d3 Animation Demo</title>
		<link rel="stylesheet" href="css/jquery.pagepiling.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
		<script src="https://use.fontawesome.com/f2e6b71b56.js"></script>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
		<div id="wrapper">
			<div id="pagepiling">
				<div class="section">
					<h1 class="white-text center">Scroll Down</h1>
					<i class="fa fa-chevron-down fa-5x center white-text icon-center" aria-hidden="true"></i>
				</div>
				<div class="section">
					<h1 class="white-text center">Skills</h1>				 
			        <div id="radials">
			        	<div id="div1"></div>
				        <div id="div2"></div>
				        <div id="div3"></div>
			        </div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script> 
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<script src="js/demo.js"></script>
		<script type="text/javascript" src="js/d3.min.js"></script>
		<script>
			$(document).ready(function() {
				$('#pagepiling').pagepiling({
					sectionsColor: ['#7F00BA', '#EE6C4D', '#FFBA49', '#17A398', '#067BC2'],
					verticalCentered: true,
				});

				var div1=d3.select(document.getElementById('div1'));
			    var div2=d3.select(document.getElementById('div2'));
			    var div3=d3.select(document.getElementById('div3'));

			    function labelFunction(val,min,max) {

			    }

			    

			});
		</script>
	</body>
</html>