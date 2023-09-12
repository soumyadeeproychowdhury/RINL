<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `crudrinl` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
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

    
    $sql="update `crudrinl` set id=$id,name='$name',shift='$shift',appserver1='$appserver1',appserver2='$appserver2',dbserver1='$dbserver1',dbserver2='$dbserver2',dcserver1='$dcserver1',dcserver2='$dcserver2',devpc='$devpc',labpc='$labpc',appstorage='$appstorage',dbstorage='$dbstorage',firewall='$firewall',nwswitch='$nwswitch',l2hmipc='$l2hmipc',bh51='$bh51',cr12pc='$cr12pc',remotepc='$remotepc' where id=$id";
    
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "update succsess";
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
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name;?> >
            </div>
            <div class="form-group">
                <label>Shift</label>
                <input type="text" class="form-control" placeholder="Enter your shift for the day" name="shift" autocomplete="off" value=<?php echo $shift;?>>
            </div>
            <div class="form-group">
                <label>appserver1</label>
                <input type="text" class="form-control" placeholder="Enter status" name="appserver1" autocomplete="off" value=<?php echo $appserver1;?>>
            </div>
            <div class="form-group">
                <label>appserver2</label>
                <input type="tect" class="form-control" placeholder="Enter status" name="appserver2" autocomplete="off" value=<?php echo $appserver2;?>>
            </div>
            <div class="form-group">
                <label>dbserver1</label>
                <input type="text" class="form-control" placeholder="Enter status" name="dbserver1" autocomplete="off" value=<?php echo $dbserver1;?>>
            </div>
            <div class="form-group">
                <label>dbserver2</label>
                <input type="text" class="form-control" placeholder="Enter status" name="dbserver2" autocomplete="off" value=<?php echo $dbserver2;?>>
            </div>
            <div class="form-group">
                <label>dcserver1</label>
                <input type="text" class="form-control" placeholder="Enter status" name="dcserver1" autocomplete="off" value=<?php echo $dcserver1;?>>
            </div>
            <div class="form-group">
                <label>dcserver2</label>
                <input type="text" class="form-control" placeholder="Enter status" name="dcserver2" autocomplete="off" value=<?php echo $dcserver2;?>>
            </div>
            <div class="form-group">
                <label>devpc</label>
                <input type="text" class="form-control" placeholder="Enter status" name="devpc" autocomplete="off" value=<?php echo $devpc;?>>
            </div>
            <div class="form-group">
                <label>labpc</label>
                <input type="text" class="form-control" placeholder="Enter status" name="labpc" autocomplete="off" value=<?php echo $labpc;?>>
            </div>
            <div class="form-group">
                <label>appstorage</label>
                <input type="text" class="form-control" placeholder="Enter status" name="appstorage" autocomplete="off" value=<?php echo $appstorage;?>>
            </div>
            <div class="form-group">
                <label>dbstorage</label>
                <input type="text" class="form-control" placeholder="Enter status" name="dbstorage" autocomplete="off" value=<?php echo $dbstorage;?>>
            </div>
            <div class="form-group">
                <label>firewall</label>
                <input type="text" class="form-control" placeholder="Enter status" name="firewall" autocomplete="off" value=<?php echo $firewall;?>>
            </div>
            <div class="form-group">
                <label>n/wswitch</label>
                <input type="text" class="form-control" placeholder="Enter status" name="nwswitch" autocomplete="off" value=<?php echo $nwswitch;?>>
            </div>
            <div class="form-group">
                <label>l2hmiPC</label>
                <input type="text" class="form-control" placeholder="Enter status" name="l2hmiPC" autocomplete="off" value=<?php echo $l2hmipc;?>>
            </div>
            <div class="form-group">
                <label>bh51</label>
                <input type="text" class="form-control" placeholder="Enter status" name="bh51" autocomplete="off" value=<?php echo $bh51;?>>
            </div>
            <div class="form-group">
                <label>cr12pc</label>
                <input type="text" class="form-control" placeholder="Enter status" name="cr12pc" autocomplete="off" value=<?php echo $cr12pc;?>>
            </div>
            <div class="form-group">
                <label>remotepc</label>
                <input type="text" class="form-control" placeholder="Enter status" name="remotepc" autocomplete="off" value=<?php echo $remotepc;?>>
            </div>



            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>


</body>

</html>