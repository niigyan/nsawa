<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boot/css/bootstrap.css">
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Dashboard</title>
</head>
<body class="main-body">
    
   <div class="container" id="container">
       
    <div class="card" style="width: 100%;">
    <div class=" card-title">All People Who Donated</div>
    <div class="card-body">
    
    <table class=" table table-bordered"> 
        <thead>
            <tr class="border border-dark">
                <th>#</th> <th>Name</th> <th>Phone Number</th> <th>Family Members</th> <th>Amount(GH₵)</th> <th>Date</th> <th>Action</th>
            </tr>
        </thead>
        <tbody>
           
        <?php foreach ($people as $person):?>    
            <tr  class="border border-dark">
                  <td><?php  $i=$i+1; echo  "{$i}"?></td>
                
                
                <td><?= $person->name; ?></td>
                <td><?= $person->momoNumber?></td>
                <td><?= $person->members?></td>
                <td><?= $person->amount?></td>
                <td><?= date("jS F Y", strtotime("$person->date"))?></td>
                <td>
                    <a href="edit.php?id=<?=$person->id?>"><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</button></a>
                    <a href="delete.php?id=<?=$person->id?>"><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Delete</button></a>
                    

                </td>
                
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    </div>
    </div>  

   </div>

  
<script src="boot/js/bootstrap.js"></script>
</body>
</html>