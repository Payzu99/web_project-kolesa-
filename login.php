<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","myBase");
    
    if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }

    
        if(isset($_POST['submit'])){
            $user_email = $_POST['email'];
            $user_password = $_POST['password'];
            
            if(!empty($user_email) && !empty($user_password)){
                $sql = "SELECT id,email FROM register WHERE email = '$user_email' AND password = '$user_password'";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) == 1){
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['email'] = $user_email;
                    header("Location: index.php");

                }
                else{
                    echo '<p id="b" style = "margin-left:auto; margin-right:auto; width:250px;position:relative;top:50px;color:red;">Извините, имя пользователя или пароль неправильные</p>';
                }
            }
            else{
                echo '<p id="error" style="display:block;"></p>';
            }
            
        }
    

?>
   <html>
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="css/grid.css">

    </head>
    <body>
      <div class="title">
       <h2>КОЛЁСА|КРЫША|МАРКЕТ</h2></div>
       <div class="login">
        <form class="form" action="http://localhost/payzu/project%20web/login.php" onsubmit="return errorF()" name="eform" method="post">
            <p>Вход в личный кабинет</p>
            <input id="email" type="text" name="email" placeholder="E-mail или номер телефона"><br>
            <div id="error_email" class="error"></div>
            <input id="pass" type="password" name="password" placeholder="Введите пароль"><br>
            <div id="pass_error" class="error"></div>
            <input id="submit" type="submit" name="submit" value="Продолжить"><br>
            
            <a href="http://localhost/payzu/project%20web/index.php">Попустить</a>              
        </form>
        </div>
        <script>
        
            var email = document.forms["eform"]["email"];
            var password = document.forms["eform"]["password"];
          
            
            var email_error = document.getElementById("error_email");
            var pass_error = document.getElementById("pass_error");
     
        function errorF(){
            if(email.value === ""){
                
                email_error.textContent = "Введите телефон номер или e-mail";
                email.focus();
                return false;
            }
            if(password.value === ""){
                
                pass_error.textContent = "Введите пароль";
                password.focus();
                return false;
            }
                       
            }
        function emailVerify(){
            if(email.value != ""){
                email_error.innerHTML = "";
                return true;
            }
        }
        document.querySelector("#email").addEventListener("blur",emailVerify,true);
        
        function passVerify(){
            if(password.value != ""){
                pass_error.innerHTML = "";
                return true;
            }
        }
        document.querySelector("#pass").addEventListener("blur",passVerify,true);
        </script>
    </body>
</html>
