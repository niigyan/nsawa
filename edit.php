<?php 


$dsn = "mysql:dbname=nsawa; host=localhost; charset=utf8mb4;";
$username = "root";
$password = "";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

$conn = new PDO($dsn, $username, $password, $options);

// $name = $_POST["fname"];
// $momoNumber = $_POST["momo"];
// $members = $_POST["familyMembers"];
// $amount = $_POST["amount"];

// $stmt = $conn->prepare("insert into donation_acceptor (name, momoNumber, members, amount) values (:name, :momoNumber, :members, :amount)");

//      $stmt->bindParam (":name", $name);
//      $stmt->bindParam (":momoNumber", $momoNumber);
//      $stmt->bindParam (":members", $members);
//      $stmt->bindParam (":amount", $amount);
//      $stmt->execute();

    // $stamt= $conn->prepare("SELECT * FROM donation_acceptor id=:id");
    // $stamt->execute();
    // $people=$stamt->fetchAll(PDO::FETCH_OBJ);
    // var_dump($people);
    if (isset($_GET['id'])) {
        
        // Get the data from the  table
        $stmt = $conn->prepare('SELECT * FROM donation_acceptor WHERE id = ?');
        $stmt->execute([$_GET['id']]);
        $people = $stmt->fetch(PDO::FETCH_ASSOC);
        include_once "editpage.php";
    }
        // exit;
        
    
    
   
    

