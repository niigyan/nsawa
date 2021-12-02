<?php
$name = $_POST["fname"];
$momoNumber = $_POST["momo"];
$members = $_POST["familyMembers"];
$amount = $_POST["amount"];
$errorMsg = null;
$new_name = str_replace(' ', '', $name);



if (empty($name)===true) {

    $errorMsg="Sorry!! your name is empty, Kindly insert your name";
    include_once "errorPage.php";
    exit;
    
}

elseif (ctype_alpha($new_name)!=true) {
    
     
        $errorMsg = "Your name {$name} should only contains letters(a-z), note: no characters and numbers";
        include_once "errorPage.php";
        exit;
    
    
} 

elseif (empty($momoNumber)===true) {
    $errorMsg = "No phone number entry, Donation can not be made without a phone number ";
    include_once "errorPage.php";
    exit;
}
elseif (is_numeric($momoNumber)!=true ) {
    $errorMsg = "Please the phone number {$momoNumber} is invalid, Please retry again with the correct phone number";
    include_once "errorPage.php";
    exit;
} 

elseif (strlen($momoNumber)!=10 ) {
  
    if (strlen($momoNumber)>10) {
        $errorMsg = "Please the phone number {$momoNumber} is invalid, the  phone number exceeds 10 digits";
        include_once "errorPage.php";
    exit;
    }

    elseif (strlen($momoNumber)<10) {
        $errorMsg = "Please the phone number {$momoNumber} is invalid ,the  phone number is less than 10 digits";
    include_once "errorPage.php";
    exit;
    }
}

elseif (empty($amount)===true) {
    $errorMsg= "No amount entry , Kindly enter the amount to proceed";
    include_once "errorPage.php";
    exit;
}
elseif (is_numeric($amount)!=true) {
    $errorMsg= "The amount {$amount} you have entered is invalid";
    include_once "errorPage.php";
    exit;
}


// Database Connection
$dsn = "mysql:dbname=nsawa; host=localhost; charset=utf8mb4;";
$username = "root";
$password = "";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

$conn = new PDO($dsn, $username, $password, $options);
$stmt = $conn->prepare("insert into donation_acceptor (name, momoNumber, members, amount) values (:name, :momoNumber, :members, :amount)");

     $stmt->bindParam (":name", $name);
     $stmt->bindParam (":momoNumber", $momoNumber);
     $stmt->bindParam (":members", $members);
     $stmt->bindParam (":amount", $amount);
     $stmt->execute();
     include_once 'thanksPage.php';

     
   

//  if ($conn->connect_error) {
//      die('Connection Failed : ' .$conn->connect_error);
//  } else {

//      var_dump($stmt);
//      exit;

//      if ($stmt === false) {
//          echo "Prepared statment failed" . ;
//      }




//  }
