<?php
include 'connect.php';?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FRashtriya_Ispat_Nigam&psig=AOvVaw2zkK0x73dI_fxxk02U4qNp&ust=1693714084679000&source=images&cd=vfe&opi=89978449&ved=0CBAQjRxqFwoTCLiFwt2Gi4EDFQAAAAAdAAAAABAE" width="30" height="30" class="d-inline-block align-top" alt="">
    Blast Furnace Control System Logging Software
  </a>
</nav>

    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add new Entry</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">sl no</th>
                    <th scope="col">name</th>
                    <th scope="col">shift </th>
                    <th scope="col">appserver1</th>
                    <th scope="col">appserver2</th>
                    <th scope="col">dbserver1</th>
                    <th scope="col">dbserver2</th>
                    <th scope="col">dcserver1</th>
                    <th scope="col">dcserver2</th>
                    <th scope="col">devpc</th>
                    <th scope="col">labpc </th>
                    <th scope="col">appstorage</th>
                    <th scope="col">dbstorage</th>
                    <th scope="col">firewall</th>
                    <th scope="col">nwswitch</th>
                    <th scope="col">l2hmipc </th>
                    <th scope="col">bh51</th>
                    <th scope="col">cr12pc</th>
                    <th scope="col">remotepc</th>
                    <th scope="col">operations</th>
                </tr>
            </thead>
            <tbody>
<?php
$sql="select * from `crudrinl`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $shift=$row['shift'];
        $appserver1=$row['appserver1'];
        $appserver2=$row['appserver2'];
        $dbserver1=$row['dbserver1'];
        $dbserver2=$row['dbserver2'];
        $dcserver1=$row['dcserver1'];
        $dcserver2=$row['dcserver2'];
        $devpc=$row['devpc'];
        $labpc=$row['labpc'];
        $appstorage=$row['appstorage'];
        $dbstorage=$row['dbstorage'];
        $firewall=$row['firewall'];
        $nwswitch=$row['nwswitch'];
        $l2hmipc=$row['l2hmipc'];
        $bh51=$row['bh51'];
        $cr12pc=$row['cr12pc'];
        $remotepc=$row['remotepc'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$shift.'</td>
        <td>'.$appserver1.'</td>
        <td>'.$appserver2.'</td>
        <td>'.$dbserver1.'</td>
        <td>'.$dbserver2.'</td>
        <td>'.$dcserver1.'</td>
        <td>'.$dcserver2.'</td>
        <td>'.$devpc.'</td>
        <td>'.$labpc.'</td>
        <td>'.$appstorage.'</td>
        <td>'.$dbstorage.'</td>
        <td>'.$firewall.'</td>
        <td>'.$nwswitch.'</td>
        <td>'.$l2hmipc.'</td>
        <td>'.$bh51.'</td>
        <td>'.$cr12pc.'</td>
        <td>'.$remotepc.'</td>
        <td>
            <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light" >Update</a></button>
            <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light" >Delete</a></button>
        </td>
        </tr>';
    }
    
}


?>                

                
                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr> -->
            </tbody>
        </table>
    </div>

</body>

</html>