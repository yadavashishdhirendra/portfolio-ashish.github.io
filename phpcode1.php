<pre class="prettyprint">
<?php include 'connection.php';
           if(isset($_POST['submit'])){
            $email=mysqli_real_escape_string($con, $_POST['email']);
            $password=mysqli_real_escape_string($con, $_POST['password']);
      
            $email_search="select *from login1 where email='$email'";
            $query=mysqli_query($con,$email_search);
      
            $email_count=mysqli_num_rows($query);

            if($email_count){
                $email_pass=mysqli_fetch_assoc($query);
                $dbpass=$email_pass['password'];
                $_SESSION['username']=$email_pass['username'];
                $pass_decode=password_verify($password, $dbpass);
                if($pass_decode){
                    ?>
                 <script>
                  alert("Login Successfully!");
                  location.replace("Home.php");
                 </script>
                  <?php
                }
                else{
                     ?>
                <script>
                   alert("Incorrect Password");
                </script>
                <?php
               }
              }
                else{
                  ?>
              <script>
                 alert("Invalid Email");
              </script>
                 <?php
                }
            }
      
      ?>
</pre>