<?php
     $dbhost = 'localhost';
     $dbuser = 'root';
     $dbpass = '';
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'mybase');

     if(! $conn ){
        die('Could not connect: ' . mysqli_error());
     }

     $sql = "SELECT * FROM cars";
     $result = mysqli_query($conn,$sql);
     $length = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/styletypecar.css">
  </head>
  <body>
   
    <article>
        <header id="header">
        <div id="head">КОЛЁСА | КРЫША | МАРКЕТ
        

                 <?php
                  if(empty($_SESSION['email'])){
                      
                  
                  ?>
               <a id = "a" href="http://localhost/payzu/project%20web/register.php">Регистрация</a>
              
                <a id="b" href="http://localhost/payzu/project%20web/login.php">Личный кабинет</a>
                <?php
                  }else{ ?>
                    <a id="a" href="#"><?php echo $_SESSION['email']; ?></a>  
                    <a id="b" href="ex.php">Выйти</a>  
          <?php
              
          }
        ?></div>

        
              
</header>       
   
<section>
   <div class="main">
      <div id="card">
    <?php 
        if(isset($_GET['maker']) and $_GET['maker']==$_GET['maker']){
                $sql = "SELECT * FROM cars WHERE maker='" . $_GET['maker'] . "'";
                $result = mysqli_query($conn,$sql);
                $length = mysqli_num_rows($result);
            for($i=0; $i<$length;$i++){
            $row = mysqli_fetch_assoc($result);
                print '<div id="cars"><a href="http://localhost/payzu/project%20web/show.php?id='.$row['id'].'"><img src="'.$row['url'].'"/></a>
                <a href="http://localhost/payzu/project%20web/show.php?id='.$row['id'].'"><p id = "title">'.$row['maker']." ".$row['model'].'</p></a>
                <p id="price">'.$row['price'].' тенге</p>
                <p id="year">'.$row['year']. ' year.Volume '.$row['volume'].' Gearbox '.$row['gearbox'].'
              Engine '.$row['engine'].'.Wheel '.$row['steer'].' </p>
              <p id="credit">12-month credit </p>
              <p id="monthly">'.round($row['price']/12 ).' тг/ай </p>
              <p id="city">City '.$row['city'].'</p>
        </div>';}
    } ?>
    
    </div> 
</div>
    </section>
    
    
    <footer>
          <div class="row">
              <div class="col span-1-of-2">
                  <ul>
                      <li><a href="">About us</a></li>
                      <li><a href="">Blog</a></li>
                      <li><a href="">Press</a></li>
                      <li><a href="">Android App</a></li>
                  </ul>
              </div>
              <div class="col3">
                  <ul>
                      <li><a href=""><img src="image/facebook.png" alt=""></a></li>
                      <li><a href=""><img src="image/youtube.png" alt=""></a></li>
                      <li><a href=""><img src="image/instagram%20(2).png" alt=""></a></li>
                      <li><a href=""><img src="image/iconfinder_39_social_2609573.png" alt=""></a></li>
                      <li><a href=""><img src="image/iconfinder_social-56_1591869.png" alt=""></a></li>
                  </ul>
              </div>
          </div>
          <div class="row">
              <p>(C) 2006-2018 TOO (Kolesa). All right reserved</p>
          </div>
          
      </footer>
    </article>

  </body>
 

</html>
