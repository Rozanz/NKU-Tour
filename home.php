<?php require("signupclass.php") ?>
<?php
if(isset($_POST['submit'])){
    $user = new RegisterUser($_POST['email'], $_POST['password']);
}
?>

<?php require("loginclass.php") ?>
<?php
if(isset($_POST['confirm'])){
    $user = new LoginUser($_POST['email'], $_POST['password']);
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <title>NKUtour</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="style.css">
</head>


<body class="bg">

<nav class="navbar navbar-expand bg-light navbar-light">
    <div class="container">
        <a class="navbar-brand">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/02/Northern_Kentucky_University_seal.svg/1200px-Northern_Kentucky_University_seal.svg.png" >
            NKU Voice-Guided Tour
        </a>
        <div class="collapse navbar-collapse" id="navmenu">
             <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="openLogin"  onclick="openLogInForm()">Login</a>
                </li>
                <li class="nav-item">
                    <a class="openSignup" onclick="openSignUpForm()">SignUp</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br />


<div class="d-flex justify-content-center p-5 ">

    <div class="form-popup" id="myForm">
        <form action="" method="post" enctype="multipart/form-data"  class="form-container">
            <h1>Login</h1>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit" name="confirm" class="btn">Login</button>
            <button type="button" class="btn cancel" onclick="closeLogInForm()">Close</button>

            <p class="error"><?php echo @$user->error ?></p>
            <p class="success"><?php echo @$user->success ?></p>
        </form>
    </div>


    <div class="form-popup" id="myyForm">
        <form action="" method="post"  class="form-container">
            <h1>Sign Up</h1>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit" name="submit" class="btn">Sign Up</button>
            <button type="button" class="btn cancel" onclick="closeSignUpForm()">Close</button>

            <p class="error"><?php echo @$user->error ?></p>
            <p class="success"><?php echo @$user->success ?></p>

        </form>
    </div>

</div>


<script>
    function openLogInForm() {
        document.getElementById("myyForm").style.display = "none";
        document.getElementById("myForm").style.display = "block";
    }

    function closeLogInForm() {
        document.getElementById("myForm").style.display = "none";
    }

    function openSignUpForm() {
        document.getElementById("myForm").style.display = "none";
        document.getElementById("myyForm").style.display = "block";
    }

    function closeSignUpForm() {
        document.getElementById("myyForm").style.display = "none";
    }
</script>

</body>
</html>



