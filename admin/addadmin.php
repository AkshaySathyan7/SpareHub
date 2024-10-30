<?php
$name=$_POST["name"];
$email=$_POST["email"];
$user_type="admin";
$status="ok";
$con = mysqli_connect("localhost", "root", "", "sparehub");
$query="insert into reg_user (name,email,user_type,status) values ('$name','$email','$user_type','$status')";
if(mysqli_query($con,$query))
{
    echo "<script>
    alert('New admin added!');
    window.location.href = 'admin.php';
    </script>";
}
else{
    echo "Error".mysqli_error($con,$query);
}

?>