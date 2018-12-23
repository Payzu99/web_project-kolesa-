<?php
session_start();

$conn = mysqli_connect("localhost","root","","myBase");
    
    if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
    $sql = "SELECT * FROM cars";
    $result = mysqli_query($conn,$sql);
    $length = mysqli_num_rows($result);
            
?>
              
<html>
  <head>
    <meta charset="utf-8">
    <title>Колёса</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

  <div class="label">
   <ul>
      <li>
        <a href="">Машины</a>
         </li>
        <li>
        <a href="">Запчасти</a>
        </li>
        <li>
        <a href="">Ремонт и услуги</a>
        </li>
        <li>
        <span id="span"><a href="ads.php"><img src="image/plus.png" alt=""><span id="tr">Подать объявление</span></a></span>
        </li>
    </ul></div>
   <div class="main">
    <div class="types">
        <a href="#">Легковые</a>
        <a href="#">Автосалоны</a>
        <a href="#">Мототехника</a>
        <a href="#">Водный транспорт</a>
       
    </div>
    <p>Горячие предложения по продаже авто</p>
    <div class="cards">
      <div id="card">
    <?php 
        for($i=0; $i<$length;$i++){
            $row = mysqli_fetch_assoc($result);
                print '<div id="cars">
            <a href="http://localhost/payzu/project%20web/show.php?id='.$row['id'].'"><img src="'.$row['url'].'"/></a>
        </div>';
    } ?>
    
    </div>  
    </div>
    <div id="btn">
        <button id="prev"><img src="image/left-arrow.png" alt=""></button>
        <button id="next"><img src="image/right-arrow.png" alt=""></button></div>
        
        
  
    </div>
    </section>
    
    <section>
    <div class="container">
        <div class="row-2">

      <a href="http://localhost/maqsat/task_10/index2.php?All"><img src="https://images-na.ssl-images-amazon.com/images/I/41HVDI87SRL.jpg" alt="photo" width=40 height=50></a>
      <a href=""><img src="http://www.car-brand-names.com/wp-content/uploads/2015/04/BMW-logo.png" alt="photo" width=40 height=50></a>
      <img src="https://www.portagetoyota.com/wp-content/uploads/sites/37/2016/08/cropped-toyota-brand-icon.png" alt="photo" width=40 height=50>
      <img src="http://www.logosvectorfree.com/wp-content/uploads/2017/12/Audi-car-Logo-Vectors-hd-Free-symbol.jpg" alt="photo" width=40 height=50>
      <img src="https://www.freeiconspng.com/uploads/ferrari-logo-icon-png-0.png" alt="photo" width=40 height=50>
      <img src="https://www.logolynx.com/images/logolynx/b8/b83a0101a9c1aef8a69343e6e49dbfb3.jpeg" alt="" width=40 height=50>
      <img src="https://vignette.wikia.nocookie.net/thecrew/images/6/6f/Nissan-icon.png" alt="" width=40 height=50>
      <img src="https://listcarbrands.com/wp-content/uploads/2016/03/logo-Lexus.png" alt="" width=40 height=50>
      <img src="http://www.car-brand-names.com/wp-content/uploads/2016/03/Mitsubishi-logotype-3.jpg" alt="" width=40 height=50>
      <img src="http://cdn.onlinewebfonts.com/svg/img_537268.png" alt="" width=40 height=50>
    </div>
    <table>
   <tr>
      <th><a href="cars.php?audi">Audi</a></th>
      <th><a href="cars.php?citreon">Citreon</a></th>
      <th><a href="cars.php?chery">Chery</a></th>
      <th><a href="cars.php?ssangyong">SsangYong</a></th>
      <th><a href="cars.php?afts">АФЦ</a></th>
      <th><a href="cars.php?vaz">ВАЗ</a></th>

  </tr>
  <tr>
    <th><a href="cars.php?hummer">Hummer</a></th>
    <th><a href="cars.php?chevrolet">Chevrolet</a></th>
    <th><a href="cars.php?toyota">Toyota</a></th>
    <th><a href="cars.php?moskvich">Москвич </a></th>
    <th><a href="cars.php?bmw">BMW</a></th>
    <th><a href="cars.php?renault">Renault</a></th>
  </tr>
  <tr>
    <th><a href="cars.php?peugeot">Peugeot</a></th> 
    <th><a href="cars.php?merc">Mercedes</a></th>
    <th><a href="cars.php?hyundai">Hyundai</a></th>
    <th><a href="cars.php?uaz">УАЗ </a></th>
    <th><a href="cars.php?seat">Seat</a></th>
    <th><a href="cars.php?saab">Saab</a></th>
  </tr>
  <tr>
    <th><a href="cars.php?volksvagen">Volksvagen</a></th>
    <th><a href="cars.php?nissan">Nissan</a></th>
    <th><a href="cars.php?skoda">Skoda</a></th>
    <th><a href="cars.php?mg">MG</a></th>
    <th><a href="cars.php?volvo">Volvo</a></th>
    <th><a href="cars.php?porsche">Porsche</a></th>
  </tr>
  <tr>
    <th><a href="cars.php?lexus">Lexus</a></th>
    <th><a href="cars.php?kia">Kia</a></th>
    <th><a href="cars.php?opel">Opel</a></th>
    <th><a href="cars.php?zaz">ЗАЗ</a></th>
    <th><a href="cars.php?ravon">Ravon</a></th>
  </tr>
  <tr>
    <th><a href="cars.php?daewoo">Daewoo</a></th>
    <th><a href="cars.php?honda">Honda</a></th>
    <th><a href="cars.php?mazda">Mazda</a></th>
    <th><a href="cars.php?chrysler">Chrysler</a></th>
    <th><a href="cars.php?kia">Kia</a></th>
  </tr>
  <tr>
    <th><a href="cars.php?isuzu">Isuzu</a></th>
    <th><a href="cars.php?opel">Opel</a></th>
    <th><a href="cars.php?tesla">Tesla</a></th>
    <th><a href="cars.php?mistsubishi">Mitsubishi</a></th>
    <th><a href="cars.php?niva">NIVA</a></th>
    
  </tr>
  <tr>
    <th><a href="cars.php?jeep">Jeep</a></th>
    <th><a href="cars.php?datsun">Datsun</a></th>
    <th><a href="cars.php?subaru">Subaru</a></th>
    <th><a href="cars.php?ford">Ford</a></th>
  </tr>
  <tr>
    <th><a href="cars.php?geely">Geely</a></th>
    <th><a href="cars.php?foton">Foton</a></th>
    
    
  </tr>
  
 
</table>

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
              <div class="col span-1-of-2">
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
              <p>Copyright $copy; 2006-2018 Kolesa. All right reserved</p>
          </div>
          
      </footer>
    </article>
    
    
       
       
       <script>
        document.getElementById('next').onclick = sliderRight;
        var right = 0;
        var polosa = document.getElementById('card');
        function sliderRight(){
            if(right>-1667){
                right -= 552;
            
            }

        
            polosa.style.left = right + 'px';
        }
        document.getElementById('prev').onclick = sliderLeft;
        var polosa = document.getElementById('card');
        function sliderLeft(){
            if(right<-551){
                right += 552;
        
            }
            polosa.style.left = right + 'px'; 
            
        }

    </script>
  </body>
</html>