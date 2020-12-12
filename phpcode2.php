<pre class="prettyprint">
<?php
$username="root";
$password="";
$server="localhost";
$database="student";

$con=mysqli_connect($server, $username, $password, $database);
if($con){
    ?>
    <script>
      alert("Database Connected Succesfully!");
    </script>
    <?php
}
else{
    ?>
    <script>
      alert("An Error Occured:)");
    </script>
    <?php
}
?>
</pre>