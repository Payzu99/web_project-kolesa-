<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","myBase");
    
    if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confpass = $_POST['conf'];
        if(!empty($email) && !empty($password) && !empty($confpass) && $password == $confpass){
            $sql = "SELECT * FROM register WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) == 0){
                $sql = "INSERT INTO register (email,password) VALUES ('$email', '$confpass')";
                $result = mysqli_query($conn, $sql);
                $_SESSION['email'] = $email;
                header("Location: index.php");
               
            }
            else{
                echo '<p id="error" style = "margin-left:auto; margin-right:auto; width:200px;position:relative;top:50px;color:red;">Логин уже существует</p>';
            }
        } 
        
    }
mysqli_close($conn);
?>
   <html>
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="css/grid2.css">
    
    </head>
    <body>
      <div class="title">
          <p>КОЛЁСА|КРЫША|МАРКЕТ</p></div>
       <div class="form-card">
        <form action="register.php" method="post" onsubmit="return errorF()" name="eform">
            <p>Вход в личный кабинет</p>
            <input id="email" type="text" name="email" placeholder="E-mail или номер телефона"><br>
            <div id="email_error" class="val_error"></div>
            <input id="pass" type="password" name="password" placeholder="Введите пароль"><br>
            <input id="conf" type="password" name="conf" placeholder="Повторите пароль" ><br>
            <div id="pass_error" class="val_error"></div>
            <input name="submit" id="submit" type="submit" value="Сохранить и войти"><br>
            <a href="http://localhost/payzu/project%20web/index.php">Пропустить</a>           
        </form>
    </div>
    <script>
        
            var email = document.forms["eform"]["email"];
            var password = document.forms["eform"]["pass"];
            var confirm = document.forms["eform"]["conf"];
            
            var email_error = document.getElementById("email_error");
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
            if(password.value != confirm.value){
                pass_error.textContent = "Password и Confirm Password должень быть равно!";
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
