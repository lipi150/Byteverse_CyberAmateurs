<!DOCTYPE html>
<html>
<head>
   <title>loginpage</title>
   <link  rel="stylesheet" href="database.css"/>
</head>
<body>
   <div class="database-form">
    <form method='POST'>
      <div class="form">
         <h1>Create Account</h1>
         <div class="form-sub">
   <div><label>username</label><input type="text" name="username" placeholder="username" ></div>
   <div><label>password</label><input type="text" name="password" placeholder="password"></div>
   <div><input  type="submit" name="submit"  ></div>
   <button id="create-submit">Redirect to home</button>
   <div><a href ="display.php"  id="checkForm">Already have an account?Login</a></div>
   </div>   
</div>
</form>
</div>
</body>
</html>


<?php

   include 'connection.php';

   if(isset($_POST['submit'])){
       $name = $_POST['username'];
       $password= $_POST['password'];
      

       $insertquery = "insert into hackathon.signin(name,password) values('$name','$password')";
   
       $res= mysqli_query($con,$insertquery);  
       
     
       
       if($res){
        ?>
          <script>
              alert("data inserted properly");
              const createSubmit = document.getElementById("create-submit");
               createSubmit.addEventListener("click",()=>{
               window.open('index.php');
               document.getElementById('navc').innerHTML=$show;
        
               });
            </script>

        <?php
       }else{
        ?>
           <script>
             alert("data not inserted");
           </script>
        <?php
       }
    }
?>


<script>

</script>

