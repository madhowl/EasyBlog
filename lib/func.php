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
            echo '<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">'.$login.'
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>';
        }else{
            echo 'Login or Password incorrect!!!';
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