<htm>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
  <?php
      $x=0;
      $sql="SELECT * FROM `news` order by Id desc limit 4";
      $result=mysqli_query($conn,$sql);
      $count=mysqli_num_rows($result);
      while($row=mysqli_fetch_assoc($result)){
        ?>
      <div class="carousel-item <?php echo($x==0 ? 'active' : '') ?> ">
      <img class="d-block w-100" src="admin-cp/<?php echo $row['Image']; ?>" height="430px" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
      <h5><?php echo $row['Title'] ;?></h5>
      <p><?php echo $row['Detail'] ;?></p>
       </div>
      </div>
       <?php $x++ ;}
       ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
              <!--    card      -->
              
              <div class="row mr-0 w-100 ml-3 tit" id="tctt">
                  <h2 class="col-9" style="text-align: right;"><b>أقسام ICTL</b></h2>
                    <a href="addstudent.php"><button class="btn btn-info">تسجيل طالب جديد</button></a>
              </div>
              <div class="container">
              <div class="row">
                <?php
                $sql="SELECT * FROM `department`";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($result)){
                ?>
                <div class="col-sm col-md mb-0">
              <div class="card-deck">
                <div class="card ml-2" style="width: 18rem;height: auto;">
                <?php
                 echo "<img class='card-img-top' src='admin-cp/$row[Image]' height='180px' width='200px' alt='Card image cap'>";
                 //echo "<img src=img/".$row['Image']. "class='card-img-top'  height='180px' width='200px' alt='Card image cap'>";
                 ?>
                  <div class="card-body text-center" >
                    <h5 class="card-title"><?php echo $row['Name']; ?></h5>
                    <p class="card-text"><?php echo substr($row['Detail'],0,150);?></p>
                  <?php echo "<a href='dep.php?id=$row[Id]' class='btn btn-primary'>اقرأالمزيد </a>"; ?>
                </div>
                </div>   
              </div>
              </div> 
              <?php } ?>
            </div>
</div>

            <!--    footer    -->
            <?php
            include ('include/footer.php');
            ?>

    </body>
    </htm>