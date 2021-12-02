<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Donator</title>
</head>
<body>
      <div id="main">
		  <img class="wave" src="image/wave-red.png" >
		  <div class="container">
			  <div class="img">
				  <img src="image/undraw_gradma_wanr.svg">
			  </div>
			  <div class="sucess-container">
			  <div id="donation-sucess">
				  <h1 >Donation Sucessful</h1>
				  <img src="image/sucessful.gif" style="width: 100px;" id="gif">
			 
			
			
			<?php
			 if ($name!=='') {
                
				$string  = <<< Text
				 <h1 class="sucess-note"> Thank you  <span> $name</span></h1>
				Text;
			}

			echo $string; 
			
            ?>
			
			  </div> 
			  </div>

		  </div>
	  </div>
   
	  <script src="js/main.js"></script>

</body>
</html>