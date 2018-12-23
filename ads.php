<?php
    $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'mybase');
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
            
//         if(isset($_GET['delete'])){
//             $sql = "DELETE FROM cars WHERE id=".$_GET['delete'];
//	         $result = mysqli_query($conn,$sql);
//         }

         if(isset($_GET['maker'])){
            $sql = "INSERT INTO cars (id, maker, model, price, year, url, city, volume, gearbox, number, color, mileage, drive_unit, kuzov, steer, engine)
          VALUES (NULL, '".$_GET['maker']."','".$_GET['model']."','".$_GET['price']."','".$_GET['year']."','".$_GET['url']."','".$_GET['city']."','".$_GET['volume']."','".$_GET['gearbox']."','".$_GET['number']."','".$_GET['color']."','".$_GET['mileage']."','".$_GET['drive_unit']."','".$_GET['kuzov']."','".$_GET['steer']."','".$_GET['engine']."')";
          $result = mysqli_query($conn, $sql);
         }
        $sql = "SELECT * FROM cars";
        $result = mysqli_query($conn,$sql);
        $length = mysqli_num_rows($result);

?>
 

 <html>
  <head>
    <meta charset="utf-8">
    <title>Колёса</title>
    <link rel="stylesheet" href="css/styleads.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="script/make.js" defer></script>
<!--    <script src="javascript/shahar.js" defer></script>-->

  </head>
  <body>
   
      <header>
      <div id="header">
      КОЛЁСА | КРЫША | МАРКЕТ</div>
                 <?php
          session_start();
                  if(empty($_SESSION['email'])){
                      
                  
                  ?>
               <a id = "a" href="http://localhost/payzu/project%20web/register.php">Регистрация</a>
              
                <a id="b" href="http://localhost/payzu/project%20web/login.php">Личный кабинет</a>
                <?php
                  }else{ ?>
                    <a href="#"><?php echo $_SESSION['email']; ?></a>  
                    <a href="ex.php">Выйти</a>  
          <?php
              
          }
        ?>
             
</header>               
      

<h2>Подать объявление на Колёса</h2>
             
<form action="ads.php" method="get">
   <div class="everything">
       <div class="row-1">
        <p>Select Region and City*</p>
    <select id="countries">
      <option>Select country</option>
    </select>
    <select name="city" id="cities">
      <option>Select city</option>
      <option>Almaty</option>
      <option>Astana</option>
      <option>Turkestan</option>
    </select></div>
    
    <div class="row-2">
    <p>Maker and model*</p>
       <div class="maker">
        <select name="maker" id="maker">
          <option>Select maker</option>
        </select>
        <select name="model" id="model" disabled>
          <option>Select model</option>
        </select></div>
        </div>
        <div class="row-3">
    <p>Kuzov*</p>
       <div class="button">
       
        <input type="radio" name="kuzov" value="sedan" id="sedan">
        <label for="sedan">sedan </label>
        <input type="radio" name="kuzov" value="universal" id="universal">
        <label for="universal">universal</label>
        <input type="radio" name="kuzov" value="liftback" id="liftback">
        <label for="liftback">liftback</label>
        <input type="radio" name="kuzov" value="limousine" id="limousine">
        <label for="limousine">limousine</label> 
        <input type="radio" name="kuzov" value="coupe" id="coupe">
        <label for="coupe">coupe</label>
        <input type="radio" name="kuzov" value="roadster" id="roadster">
        <label for="roadster">roadster</label>
        <input type="radio" name="kuzov" value="cabriolet" id="cabriolet">
        <label for="cabriolet">cabriolet</label>
        <input type="radio" name="kuzov" value="suv" id="suv">
        <label for="suv">suv</label>
        <input type="radio" name="kuzov" value="crossover" id="crossover">
        <label for="crossover">crossover</label>
        <input type="radio" name="kuzov" value="mikroven" id="mikroven">
        <label for="mikroven">mikroven</label>
        <input type="radio" name="kuzov" value="minivan" id="minivan">
        <label for="minivan">minivan</label>
        <input type="radio" name="kuzov" value="minibus" id="minibus">
        <label for="minibus">minibus</label>
        <input type="radio" name="kuzov" value="van" id="van">
        <label for="van">van</label>
        <input type="radio" name="kuzov" value="pickup" id="pickup">
        <label for="pickup">pickup</label>
                 </div></div>
                  <div class="row-4">
            <p>Year of issue*</p>
            <div class="year">
               <input type="number" name="year">
                
            </div>
        </div>
        <div class="row-5">
            <p>Price*</p>
            <div class="price">
               <input type="number" name="price"> tenge
                
            </div>
        </div>
        <div class="row-5">
            <p>Engine*</p>
            <div class="engine">
               <input type="text" name="volume"> л.
               <input type="radio" name="engine" value="fuel" id="fuel">
               <label for="fuel">fuel</label>
               <input type="radio" name="engine" value="dieslel" id="diesel">
               <label for="diesel">diesel</label>
               <input type="radio" name="engine" value="gas-gasoline" id="gas-gasoline">
               <label for="gas-gasoline">gas-gasoline</label>
               <input type="radio" name="engine" value="hybrid" id="hybrid">
               <label for="hybrid">hybrid</label>
               <input type="radio" name="engine" value="electricity" id="electricity">
               <label for="electricity">electricity</label>
<!--
                <button>fuel</button> <button>diesel</button> <button>gas-gasoline</button>
        <button>gas</button> <button>hybrid</button> <button>electricity</button>
-->
            </div>
        </div>
        <div class="row-5">
            <p>Gearbox*</p>
            <div class="gear">
              <input type="radio" name="gearbox" value="mechanic" id="mechanic">
               <label for="mechanic">mechanic</label>
               <input type="radio" name="gearbox" value="avto" id="avto">
               <label for="avto">avto</label>
               <input type="radio" name="gearbox" value="tiptronic" id="tiptronic">
               <label for="tiptronic">tiptronic</label>
               <input type="radio" name="gearbox" value="robot" id="robot">
               <label for="robot">robot</label>
                
            </div>
        </div>
        <div class="row-5">
            <p>Milleage*</p>  
            <div class="milleage">
               <input type="text" name="mileage">  km
                
            </div>
        </div>
        <div class="row-6">
            <p>Steer*</p>
            <div class="steer">
              <input type="radio" name="steer" value="left" id="left">
              <label for="left">left</label>
              <input type="radio" name="steer" value="right" id="right">
              <label for="right">right</label>
               
            </div>
        </div>
        <div class="row-6">
            <p>Color*</p>
            <div class="color">
               <select name="color">
                   <option>Select</option>
                   <option>yellow</option>
                   <option>green</option>
                   <option>blue</option>
                   <option>black</option>
                   <option>white</option>
                   <option>red</option>
                   <option>orange</option>
                   <option>gray</option>
                   <option>purple</option>
                   <option>chameleo</option>
                   <option>burgundy</option>
                   <option>bronze</option>
                   <option>golden</option>
                   <option>Violet</option>
                   <option>silver</option>
                   <option>cherry</option>
               </select> 
            </div>
        </div>
        <div class="row-5">
            <p>Drive unit*</p>
            <div class="drive_unit">
               <input type="radio" name="drive_unit" value="front-wheel drive" id="front-wheel">
               <label for="front-wheel">front-wheel drive</label>
               <input type="radio" name="drive_unit" value="four-wheel drive" id="four-wheel">
               <label for="four-wheel">four-wheel</label>
               <input type="radio" name="drive_unit" value="rear drive" id="rear">
               <label for="rear">rear drive</label>
           
            </div>
        </div>
        
        <div class="row-5">
            <p>Image(URL)*</p>
            <div class="img">
                <input type="text" name="url">
            </div>
        </div>
        <div class="row-5">
            <p>Phone Number*</p>
            <div class="phone">
                <input type="text" name="number">
            </div>
            
        </div>
        <div class="row-5">
            
            <div class="submit">
                <input type="submit" value="submit ads" name="submit">
            </div>
            
        </div>
        
        </div>
        
</form>
                 
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

  </body>
</html>
<?php 
mysqli_close($conn);
?>