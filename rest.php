<?php include 'header.php' ?>

<?php
include ('db.php');
session_start();
if(isset($_POST['submit'])){
//  echo htmlspecialchars($_POST['fname']);
//   echo htmlspecialchars($_POST['lname']) ;
//   echo htmlspecialchars( $_POST['username']);
$error=array('fname'=>'','lname'=>'','username'=>'','email'=>'','password'=>'');

    if(empty($_POST['fname'])){
        $error['fname']="reqirer";
    }
    if(empty($_POST['lname'])){
        $error['lname']="reqirer";
    }
    if(empty($_POST['username'])){
        $error['username']="reqirer";
    }
    if(empty($_POST['email'])){
        $error['email']="reqirer";
    }
    if(empty($_POST['password'])){
        $error['password']="reqirer";
    }
    if(array_filter($error)){
        echo "check your input";
    }else{
        header('Location: dashboard.php');
    }
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $_SESSION["name"] = $fname;

    $sql = "INSERT INTO ourtest (first_name, last_name, username,password,email)
    VALUES ('$fname', '$lname', '$username','$password','$email')";
    include ("db.php");
//    $stmt=$conn->prepare($sql);
//    $stmt->execute(['fname'=>$fname,'lname'=>$lname , 'username'=>$username,  'password'=>$password,'email'=>$email]);

}

?>
    <html>
    <head>

    </head>
    <body>
    <section class="container">

        <form  action="rest.php" method="POST">
            <div>
                <label>First Name: </label>
                <input type="text" name="fname" required>

            </div>
            <div>
                <label>Last Name:</label>
                <input type="text" name="lname"/>


            </div>
            <div>
                <label>User Name: </label>
                <input type="text" name="username"/>

            </div>
            <div>
                <label>E-mail: </label>
                <input type="email" placeholder="example@example.com" name="email"/>

            </div>
            <div>
                <label>password: </label>
                <input type="password" placeholder="....." name="password"/>

            </div>

            <button name="submit" type="submit" value="submit" class="btn btn-success">Success</button>
        </form>


    </section>


    </body>
    </html>

<?php include 'footer.php' ?>