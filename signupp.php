<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <?php
include ('include/connect.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $rpass=$_POST['rpass'];
    if(empty($name)||empty($pass)||empty($rpass)){
      echo "<div class='alert alert-danger'>الرجاء إدخال القيمة </div>";
    }
    elseif($pass!==$rpass){
        echo "<div class='alert alert-danger'>password not valid</div>";
      }
    else{
        $sqll="SELECT `Username` FROM `users` WHERE `Username`='$name'";
        $result=mysqli_query($conn,$sqll);
            if(mysqli_num_rows($result)>0){
              echo "<div class='alert alert-danger text-center'>User is Exist</div>";
            }
            else{
              $sql="INSERT INTO `users`(`Username`, `Password`) VALUES ('$name','$pass')";
              $r=mysqli_query($conn,$sql);
              if($r){
                  header("location:login.php");
              }
            }
          }
        }
    ?>
      <form action="" method="POST" enctype="multipart/form-data">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          
          <label for="mail">Password:</label>
          <input type="password" id="mail" name="pass">
          
          <label for="password">Repet_Password:</label>
          <input type="password" id="password" name="rpass">
          
        <button type="submit" name="submit">Sign Up</button>
      </form>

    </body>
</html>