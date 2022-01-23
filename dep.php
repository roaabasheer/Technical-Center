<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
<body dir="rtl">
<?php
    include ('include/header1.php');
    $sqL="SELECT * FROM `department` Where Id=$_GET[id]";
    $result=mysqli_query($conn,$sqL);
    $row=mysqli_fetch_assoc($result);
?>
<div class="row"style="min-height: 320px;">
    <div class="col-md-8">
    <div class="card">
        <div class="card-header text-right"> أهلا وسهلا بكم في القسم :<?php echo $row['Name'];?> </div>
        <div class="card-body text-right" style="height: 350px;"> <?php echo $row['Detail'];?> </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="card">
    <div class="card-header text-center">  التسجيل  في القسم : </div>
    <div class="card-body text-center" style="height: 350px;">
        <a href="addestudent.php"><button class="btn btn-info"> تسجيل طالب جديد </button></a>
        </div>
    </div>
</div>
</div>
<?php
        include ('include/footer.php');
    ?>
</body>