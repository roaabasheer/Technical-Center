<htm>
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
            <div class="card">
  
  <div class="card-body text-center">
    <form action="" method="POST" style="min-hieght:250px">
  <div class="form-group row">
    <label for="user" class="col-sm-2 col-form-label">اسم الطالب</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="name"  id="user" placeholder="اسم الطالب">
    </div>
  </div>
  <div class="form-group row">
    <label for="pass" class="col-sm-2 col-form-label">الإيميل </label>
    <div class="col-sm-4">
      <input type="email" class="form-control" name="email" id="pass" placeholder="الإيميل">
    </div>
  </div>
  <div class="form-group row">
    <label for="user" class="col-sm-2 col-form-label">العمر</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" name="age"  id="user" placeholder="العمر">
    </div>
  </div>
  <div class="form-group row">
    <label for="pass" class="col-sm-2 col-form-label">العنوان</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="address" id="pass" placeholder="العنوان">
    </div>
  </div>
  <div class="form-group row">
    <label for="pass" class="col-sm-2 col-form-label">الهاتف</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" name="phone" id="pass" placeholder=" الهاتف">
    </div>
  </div>
  <div class="form-group row">
      <label for="inputState" class="col-sm-2 col-form-label">القسم</label>
      <div class="col-sm-4">
      <select id="inputState" class="form-control" name="department">
        <option selected value="اختر القسم">اختر القسم</option>
        <option value="تطبيقات الويب">تطبيقات الويب</option>
        <option value="تطبيقات الهواتف الذكية">تطبيقات الهواتف الذكية</option>
        <option value="التصميم الجرافيكي">التصميم الجرافيكي</option>
      </select>
</div>
    </div>
  <div class="form-group row">
    <div class="col-sm-4 col-sm-offset-2 mr-5">
      <button type="submit" name="submit" class="btn btn-primary">تسجيل الدخول</button>
    </div>
  </div>
</form>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $dep=$_POST['department'];
    if( empty($name) || empty($email) || empty($age) || empty($address) || empty($phone)){
        echo "<div class='alert alert-danger text-center' role='alert'><h3>الرجاء إدخال القيمة</h3> </div>";
    }
    else{
        $sql="INSERT INTO `students`(`Name`, `Email`, `Age`, `Address`, `Phone`, `Depnum`) VALUES ('$name','$email',$age,'$address',$phone,'$dep')";
        $result=mysqli_query($conn,$sql);
        if(isset($result)){
          echo "<div class='alert alert-success text-center' role='alert'><h3> جاري تحويلك ... تم تسجيلك بنجاح</h3> </div>";
          echo '<meta http-equiv="refresh" content="2; \'index.php\'">';
        }
        else{

        }
        }
    }
?>
</div> 
</div>
            <!--    footer    -->
            <?php
            include ('include/footer.php');
            ?>
    </body>
    </htm>