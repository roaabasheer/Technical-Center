<?php
session_start();
?>
<html>
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

            <!--            navbar               -->
      <?php
        include ('include/header1.php');
      ?>
      <?php
      include 'include/connect.php';
      if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(empty($username)){
          echo "<div class='alert alert-danger text-center' role='alert'> الرجاء إدخال اسم المستخدم </div> ";
        }
        elseif(empty($password)){
          echo "<div class='alert alert-danger text-center' role='alert'> الرجاء إدخال كلمة المرور </div> ";
        }
        else{
          $sql="SELECT * FROM `users` WHERE `Username`='$username' and `Password`='$password';";
          $result=mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)>0){
            $user=mysqli_fetch_assoc($result);
            $_SESSION['user']=$user['Username'];
            header("location:index.php");
          }
          else{
            echo "<div class='alert alert-danger text-center' role='alert'>  خطأ في كلمة المرور أو اسم المستخدم</div> ";
          } 
        }
        
      }
      ?>
      <div class="card">
        <div class="card-header text-center">
          <h4>تسجيل الدخول للوحة التحكم</h4>
        </div>
        <div class="card-body text-center">
          <form action="" method="POST" style="min-hieght:250px">
        <div class="form-group row">
          <label for="user" class="col-sm-2 col-form-label">اسم المستخدم</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="username" id="user" placeholder="اسم المستخدم">
          </div>
        </div>
        <div class="form-group row">
          <label for="pass" class="col-sm-2 col-form-label">كلمة المرور</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" name="password" id="pass" placeholder="كلمة المرور">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-4 col-sm-offset-2 mr-5">
            <button type="submit" name="submit" class="btn btn-primary">تسجيل الدخول</button>
          </div>
        </div>
      </form>
      </div> 
      </div>
            <!--    footer    -->
            <?php
            include ('include/footer.php');
            ?>
    </body>
    </htm>