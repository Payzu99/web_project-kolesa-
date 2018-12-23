<?php
    session_start();
?>
  <html>
   
    <head>
       <link href="https://fonts.googleapis.com/css?family=B612+Mono" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Domine" rel="stylesheet">
       
       
        <style>
        
            #a{
                position: relative;
                left: 500px;
            }
            #b{
                position: relative;
                right: 100px;
            }

            a:hover{
                text-decoration: none;
                color: blue;
            }
        header{
            display: flex;
            background-color: white;
            font-size: 15px;
            height: 40px;
            justify-content:space-around;
            align-items: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    
}
            .row{
    display: flex;
}
.row ul li{
    list-style: none;
    display: inline-block;
    margin-right: 20px;
}
.row .col3{
    margin-left: 700px;
    
}
.row .col3 img{
    width: 16px;
    
}
footer{
    background-color: #2f2f2f;
    line-height: 50px;
    
}
.row p{
    margin-left: 500px;
    color: #8d8d8d;
    font-size: 14px;
    font-weight: 500;
    font-family: sans-serif;
    
}
.row a{
    color: #b9b9b9;
}


            .card{
                width: 400px;
                position: relative;
                top: 50px;
                left: 100px;      
                
                
            }            
            span{
                font-family:monospace;
                color: black;
                font-size: 20px;
            }
            #title{
                font-size:20px;
                font-family: 'B612 Mono', monospace;
                color: black;
            }
            p{
                font-family: 'Domine', serif;
                color: #7e7c7c;
                font-size: 15px;
            }
            .phone{
                padding: 10px;
                width: 400px;
                position: relative;
                top: 80px;
                left: 80px;
                box-shadow: 0 5px 25px rgba(0,0,0,0.1);
                border-radius: 3px;
                
            }
            .phone #p{
                color: black;
                border-radius: 5px;
                width: 350px;
                padding: 10px;
                text-align: center;
                background: rgba(30,136,229,.2);
            }
            .phone p{
            
                margin-left: 15px;
            }
            #button{
                color: white;
                border-radius: 5px;
                width: 370px;
                padding: 10px;
                margin-left: 15px;
                background-color:blue;
            }
            
            body {
              font-family: Helvetica, sans-serif;
              margin: 0;
            
}
           .main-section {
              flex-grow: 1;  
              padding: 10px;
}
            p button{
                height: 25px;
                background-color: #ffd313;
                border: 1px solid #ffd313;
                border-radius: 5px;
            }
            p button:hover{
                background-color: #ffc71d;
                border: 1px solid #ffc71d;
            }

            
        </style>
    </head>
    <body>
       <article>
        <header>
      КОЛЁСА | КРЫША | МАРКЕТ
                 <?php
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
  <section class="main-section">
   <div class="card">
        <a href="http://localhost/payzu/project%20web/index.php">Main</a> /
        <a href="#">Passenger</a> /
        <a href="#">Mototechnics</a> /
        <a href="#">Water transport</a>
       
        </div>
          <?php
$conn = mysqli_connect("localhost","root","","myBase");
    
    if(! $conn ){
            die('Could not connect: ' .mysqli_error());
         }
    $sql = "SELECT * FROM cars";
    $result = mysqli_query($conn,$sql);
    $length = mysqli_num_rows($result);
           
$selected_car = NULL;
    for($i=0; $i<$length;$i++){
            $row = mysqli_fetch_assoc($result);
        if (isset($_REQUEST["id"])){
	    $selected_car = $row["id"];
            if($selected_car == $_REQUEST['id']){
                $int = (int)(($row['price'])/48);
                print '<div class="card">
                <p id="title">'.$row['maker']." ".$row['model']." ".$row['year']." year".'</p>
                <p style="font-size:22px;font-family:Open Sans,Tahoma,sans-serif;">'.$row['price'].'<span>₸ </span>in credit <button>'.$int.' ₸/month</button></p> 
                <p>'."City .................................................. <span>".$row['city'].'</span></p>                
                <p>'."Kuzov ............................................. <span>".$row['kuzov'].'</span></p>                
                <p>'."Volume engine, L........................ <span>".$row['volume'].'('.$row['engine'].')</span></p>
                <p>'."Mileage .......................................... <span>".$row['mileage'].' km</span></p>
                <p>'."Gearbox ......................................... <span>".$row['gearbox'].'</span></p>
                <p>'."Steering ......................................... <span>".$row['steer'].'</span></p>
                <p>'."Color ............................................... <span>".$row['color'].'</span></p>
                <p>'."Drive unit ..................................... <span>".$row['drive_unit'].'</span></p>
                </div>
                <div class="phone">
                    <p>Contact the author of the announcement</p>
                    <p id="p">Phone Number: '.$row['number'].'</p>
                    <button id="button">Write a message</button>
                    <p></p>
                    
                </div>
                <img style="width:720px; height:480px;position:relative;left:550px;border-radius:3px;top:-500px;" src="'.$row['url'].'"/>';
            }
        }
    }

?>
           </section>
            <section class="second-section">
                
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


