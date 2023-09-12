<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $shift=$_POST['shift'];
    $appserver1=$_POST['appserver1'];
    $appserver2=$_POST['appserver2'];
    $dbserver1=$_POST['dbserver1'];
    $dbserver2=$_POST['dbserver2'];
    $dcserver1=$_POST['dcserver1'];
    $dcserver2=$_POST['dcserver2'];
    $devpc=$_POST['devpc'];
    $labpc=$_POST['labpc'];
    $appstorage=$_POST['appstorage'];
    $dbstorage=$_POST['dbstorage'];
    $firewall=$_POST['firewall'];
    $nwswitch=$_POST['nwswitch'];
    $l2hmipc=$_POST['l2hmipc'];
    $bh51=$_POST['bh51'];
    $cr12pc=$_POST['cr12pc'];
    $remotepc=$_POST['remotepc'];

    
    $sql="insert into `crudrinl` (name,shift,appserver1,appserver2,dbserver1,dbserver2,dcserver1,dcserver2,devpc,labpc,appstorage,dbstorage,firewall,nwswitch,l2hmipc,bh51,cr12pc,remotepc)
    values('$name','$shift','$appserver1','$appserver2','$dbserver1','$dbserver2','$dcserver1','$dcserver2','$devpc','$labpc','$appstorage','$dbstorage','$firewall','$nwswitch','$l2hmipc','$bh51','$cr12pc','$remotepc')";
    
    $result=mysqli_query($con,$sql);
    if($result){
        // 
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
    
}







?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud operation</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name">
            </div>
            <div class="form-group">
                <label>Shift</label>
                <input type="text" class="form-control" placeholder="Enter your shift for the day" name="shift">
            </div>
            <div class="form-group">
                <label>appserver1</label>
                <input type="text" class="form-control" placeholder="Enter status" name="appserver1">
            </div>
            <div class="form-group">
                <label>appserver2</label>
                <input type="tect" class="form-control" placeholder="Enter status" name="appserver2">
            </div>
            <div class="form-group">
                <label>dbserver1</label>
                <input type="text" class="form-control" placeholder="Enter status" name="dbserver1">
            </div>
            <div class="form-group">
                <label>dbserver2</label>
                <input type="text" class="form-control" placeholder="Enter status" name="dbserver2">
            </div>
            <div class="form-group">
                <label>dcserver1</label>
                <input type="text" class="form-control" placeholder="Enter status" name="dcserver1">
            </div>
            <div class="form-group">
                <label>dcserver2</label>
                <input type="text" class="form-control" placeholder="Enter status" name="dcserver2">
            </div>
            <div class="form-group">
                <label>devpc</label>
                <input type="text" class="form-control" placeholder="Enter status" name="devpc">
            </div>
            <div class="form-group">
                <label>labpc</label>
                <input type="text" class="form-control" placeholder="Enter status" name="labpc">
            </div>
            <div class="form-group">
                <label>appstorage</label>
                <input type="text" class="form-control" placeholder="Enter status" name="appstorage">
            </div>
            <div class="form-group">
                <label>dbstorage</label>
                <input type="text" class="form-control" placeholder="Enter status" name="dbstorage">
            </div>
            <div class="form-group">
                <label>firewall</label>
                <input type="text" class="form-control" placeholder="Enter status" name="firewall">
            </div>
            <div class="form-group">
                <label>n/wswitch</label>
                <input type="text" class="form-control" placeholder="Enter status" name="nwswitch">
            </div>
            <div class="form-group">
                <label>l2hmiPC</label>
                <input type="text" class="form-control" placeholder="Enter status" name="l2hmiPC">
            </div>
            <div class="form-group">
                <label>bh51</label>
                <input type="text" class="form-control" placeholder="Enter status" name="bh51">
            </div>
            <div class="form-group">
                <label>cr12pc</label>
                <input type="text" class="form-control" placeholder="Enter status" name="cr12pc">
            </div>
            <div class="form-group">
                <label>remotepc</label>
                <input type="text" class="form-control" placeholder="Enter status" name="remotepc">
            </div>



            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>


</body>

</html>