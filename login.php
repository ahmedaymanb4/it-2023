<?php

$pageTitle = "Shop - Login";
$cssFile = "login.css";

include 'init.php';
include './includes/functions/auth/index.php';

$error = "";

if(isset($_POST["login"])) {
    $result = login($conn, $_POST["email"], $_POST["password"]);
    if($result == 0) {
        $error = "Invalid input!";
    } else if ($result == 1) {
        $error = "☹️ There is no user with that email";
    } else if ($result == 2) {
        $error = "☹️ Wrong password";
    } else if ($result == 3) {
        header("Location: profile.php");
    } else {
        $error = "Server Error!";
    }
}

?>

<main class="container login">
    <h1 class="text-center display-4 title">Login</h1>
    <p class="text-center text-body-secondary subTitle">Hey enter your details to sign in to your account </p>
    <form action="/login.php" method="POST" id="login-form">
        <div class="mb-4" style="position: relative;">
            <input type="email" class="form-control" name="email" placeholder="Enter you email" required>
            <div class="icon"><i class="fa-light fa-user"></i></div>
        </div>
        <div class="mb-4" style="position: relative;">
            <input type="password" class="form-control" name="password" placeholder="Enter you password" required>
            <div class="icon"><i class="fa-light fa-fingerprint"></i></div>
        </div>
        <?php if($error != '') { echo '<div class="alert alert-danger" role="alert">' . $error . '</div>'; }; ?>
        <button type="submit" name="login" class="btn btn-primary">Submit</button>
    </form>
</main>

<script>

$("#login-form").submit(function(){
    var isFormValid = true;

    $(".form-control").each(function(){
        if ($.trim($(this).val()).length < 6){
            $(this).addClass("highlight");
            isFormValid = false;
        }
        else{
            $(this).removeClass("highlight");
            isFormValid = true;
        }
    });

    if (!isFormValid) alert("the required fields should be more than 6!");

    return isFormValid;
});

</script>

<?php include 'includes/templates/footer.php'; ?>