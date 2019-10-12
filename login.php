<?php include 'header.php';?>

<?php
//include ('db.php');
//session_start();
//if(isset($_POST['submit'])) {
//
//    if (empty($_POST["username"]) || empty($_POST["password"])) {
//        $message = '<label>All fields are required</label>';
//
//    } else {
//        $username = $_POST['username'];
//        $password = $_POST['password'];
//        $our_check = "SELECT * from ourtest WHERE username=:username && password=:password";
//        $stmt = $conn->prepare($our_check);
//        $stmt->execute(['username' => $username, 'password' => $password]);
//        $data = $stmt->fetch();
//        if ($data->username === $username && $data->password === $password) {
//            header('Location:aboutus.php');
//        } else {
//            echo " you are not validation ";
//        }
//    }
//}
//?>

<?php
include 'db.php';
session_start();

if(isset($_POST['submit'])) {
    if(empty($_POST["username"]) || empty($_POST["password"]))
        {
            $message =  '<label>All fields are required</label>';

        }
        else
        {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $our_check="SELECT * FROM ourtest WHERE username=:username && password=:password";

            $stmt = $conn->prepare($our_check);

            $stmt->execute([ 'username' => $username,'password'=>$password]);
            $data=$stmt->fetch();
            if($data->username===$username &&$data->password===$password){
                header('Location:dashboard.php');
            }else {
                echo " Not found ";
            }





        }
//
//
}
//
//
//
//?>





<html>


<section class="container grey-text">


    <form class="white" action="login.php" method="POST">
        <div>
            <label>Username:</label>
            <input type="text"  name="username" >
        </div>
        <div>
            <label>password:</label>
            <input type="password" placeholder="....." name="password"  >
        </div>
        <button type="submit"  name="submit" class="btn btn-success">login</button>
        <?php
        echo $message;
        ?>
    </form>
</section>






</html>







<?php include 'footer.php'; ?>
