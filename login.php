  <?php
    session_start();
    include "config.php";

    ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="thoda.css">
      
      

  </head>
  <body>
 
     
     <div class="loginbox">
     <h1>login page </h1> 
     <hr>
      <form action="welcome.php" method="POST">
        
     
         <label>NAME:</label><br><br>

          <input type="text" name="username" placeholder="enter your name" required> <br><br>

          <label> PASSWORD:</label><br> <br>

         <input type="password" name="password" placeholder="enter your password" required> <br><br>

          <input type="submit" NAME="submit" value="LOGIN">

         
        
      </form>
      </div>
      <?php
      
        if (isset($_POST['submit'])) {

            $name = $_POST['username'];

            $password = $_POST['password'];


            $sql = "SELECT * FROM `student` WHERE `username`='$name'";

            $result = $conn->query($sql);

            $data = mysqli_num_rows($result);

            if ($data == true) {
                //echo "login successful";
                $_SESSION['username'] = $name;

                header('location:welcome.php');
            } else {
                ?> <script>  alert
                ("AKK BAAR PHIR SAI TRY MAROO:🥸🥸🥸🥸🥸") </script>
           <?php     
            }
        } 

        ?>
  </body>
  

  </html>