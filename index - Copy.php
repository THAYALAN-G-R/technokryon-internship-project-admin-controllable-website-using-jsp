<?php
/*
 * @author THAYALAN G R
 */
include('config.php');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta http-equiv="refresh" content="5"> -->
    <title>EYANTRA</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" type="text/css">
</head>
<body>
      <div id="show" style="float:left;"></div>	  <div style="float:right;">	  <iframe src="http://freakiest-budgerigar-9742.dataplicity.io/?action=stream" style="width:640px; height:340px;"></iframe>	  </div>	  <div style="clear:both;"></div>
                          
    <script type="text/javascript" src="jquery-3.2.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#show').load('data.php')
				
			}, 3000);
		});
	</script>
                          
</body>
</html>