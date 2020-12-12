
<pre class="prettyprint">
<?php include 'connection.php';
  if(isset($_POST['submit'])){
    $username=mysqli_real_escape_string($con, $_POST['username']);
    $email=mysqli_real_escape_string($con, $_POST['email']);
    $mobile=mysqli_real_escape_string($con, $_POST['mobile']);
    $password=mysqli_real_escape_string($con, $_POST['password']);
    $cpassword=mysqli_real_escape_string($con, $_POST['cpassword']);

    $pass=password_hash($password, PASSWORD_BCRYPT);
    $cpass=password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery= "select *from login1 where email='$email'";
    $query=mysqli_query($con, $emailquery);

    $emailcount=mysqli_num_rows($query);
    if($emailcount>0){
        ?>
        <script>
           alert("Email Already Exist!");
        </script>
        <?php
      }
      else{
        if($password===$cpassword){
          $res=mysqli_query($con, "INSERT into login1 values('','$username','$email', '$mobile', '$pass', '$cpass')");
          if($res){
            ?>
            <script>
               alert("Data Successfully Submitted!");
            </script>
            <?php
        }
        else{
            ?>
            <script>
               alert("Data Not Submitted!");
            </script>
            <?php
        }
        }
          else{
            ?>
            <script>
               alert("Password Not Matching!");
            </script>
            <?php
          }
         }
  }
  ?>
</pre>

