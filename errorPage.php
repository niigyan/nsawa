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
			  <div >

			    <h1 id="failed"> Donation Failed!!</h1>
			  <?php
			  	
                
					$string  = <<< Text
					 <h1 style="
					 position: absolute;
					 top: 100px;
					 left: 350px;
					 font-size: 20px;"> $errorMsg</h1>
					Text;
			
	
				echo $string;
	
				?>
			  
			  </div> 
		  </div>
	  </div>
   
	  <script src="js/main.js"></script>

</body>
</html>