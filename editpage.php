<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Edit Page</title>
</head>
<body>

      <div id="main">
		  <img class="wave" src="image/wave-red.png" >
		  <div class="container">
			  <div class="img">
				  <img src="image/undraw_gradma_wanr.svg">
			  </div>
              
                  
            
			  <div class="login-container">
				  <form action="update.php?id=<?=$people['id']?>" method="post">
                    
                    <img id="donate-icon" src="image/undraw_transfer_money_rywa.svg" >
					<h2 style="text-transform: capitalize;"> Edit</h2>
                    
					<div class="input-div one focus">
						<div class="i">
							<i class="fas fa-user" ></i>
						</div>
                        
						<div>
							<h5 id="full-name" >Full Name</h5>
							<input class="input"  name="fname"  value="<?= $people['name'];?>" type="text" >
						</div>
					</div>

					<div class="input-div two focus">
						<div class="i">
							<i class="fas fa-phone" ></i>
						</div>
						<div>
							<h5 id="momo" >Momo Number</h5>
							<input class="input" name="momo"  value="<?= $people['momoNumber'];?>" type="tel">	
						</div>
					</div>
					<div class="input-div two focus">
						<div class="i">
							<i class="fas fa-users"></i>
						</div>
						<div>
							<h5 id="member">Who should recieve the donation</h5>
							<select class="input" name="familyMembers" >	
								<option value="1"> <span id="opt" >Chairman Nana Yeboah</span> </option>
								<option value="Eddie Khadijah" selected>Eddie Khadijah  </option>
								<option value="Roland Dodoo" > Roland Dodoo</option>
								<option value="Onukpa Danny"> Onukpa Danny</option>
								<option value="Big man Kwakye">Big man Kwakye</option>
								<option value="Lecturer Mike">Lecturer Mike</option>
                                
							</select>	
						</div>
					</div>
					<div class="input-div two focus" id="amt-input">
						<div class="i">
							<i class="fas fa-money-bill-wave"></i>
						</div>
						<div>
							<h5 id="amt">Amount</h5>
							<input class="input" name="amount"  value="<?= $people['amount']?>" type="number">	
						</div>
					</div>
					<input type="submit" id="btn" value="Donate">
				  </form>
			  </div> 
              
		  </div>
	  </div>
   
	  <script src="js/main.js"></script>

</body>
</html>