<?php
function showRegForm(){
    echo '<form action=';
}
function checkRegInfo(){

}
function showLoginForm(){
    echo '<form action="/admin/index.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Login</label>
    <input type="text" class="form-control"  name="login" placeholder="Enter Login">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>  
  <button type="submit" name="btnLogin" class="btn btn-primary">LogIn</button>
</form>';
}
function logIn(){
    if (isset($_POST['btnLogin'])){
        $login=$_POST['login'];
        $password=$_POST['password'];
        if ($login=='user' && $password=='user'){
            $_SESSION['userName']=$login;
            showAlert('Welcom - '.$login);
            //goUri()
        }else{
            showAlert( 'Login or Password incorrect!!!');
        }
    }

}
function logOut(){

}
function checkAuth(){
    if (isset($_SESSION['userName'])&& !empty( $_SESSION['userName'])){
        return $_SESSION['userName'];
    }else{
        return false;
    }
}
function goUri($uri){
    echo '<script language="JavaScript">
        document.location.href = \''.$uri.'\'</script>';
}

function showAlert($text){
    echo '<script language="JavaScript">
    alert( \''.$text.'\' );
</script>';
}