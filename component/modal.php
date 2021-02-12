<!-- Sign up Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sign up to iDiscuss</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="signup_handle.php" method='post'>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="uname">Username</label>
                        <input type="text" class="form-control" id="uname" name="uname" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="pass">
                    </div>
                    <div class="form-group">
                        <label for="con_password">Confirm Password</label>
                        <input type="password" class="form-control" id="con_password" name="con_pass">
                    </div>
                    <button type="submit" class="btn btn-primary" name="save">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Log in Modal -->
<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modal"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Log in to iDiscuss</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="login_handle.php" method='post'>
                    <div class="form-group">
                        <label for="uname">Username</label>
                        <input type="text" class="form-control" id="uname" name="uname" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="pass">
                    </div>
                    <button type="submit" class="btn btn-primary" name="save">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php 
 if(isset($_GET['signup'])=="false") {
     $error = $_GET['error'];
    echo    '<div class="alert alert-danger alert-dismissible fade show m-0" data-dismiss="alert" aria-label="Close">
     <button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <strong>Failed!</strong> '.$error.'
    </div>';
 }

 if(isset($_GET['signupsuccess'])=="true") {
     $alert = $_GET['alert'];
    echo    '<div class="alert alert-success alert-dismissible fade show m-0" data-dismiss="alert" aria-label="Close">
     <button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <strong>Success!</strong> '.$alert.' </div>';
 }

 if(isset($_GET['login'])=="false") {
     $error = $_GET['error'];
    echo    '<div class="alert alert-danger alert-dismissible fade show m-0" data-dismiss="alert" aria-label="Close">
     <button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <strong>Failed!</strong> '.$error.' </div>';
 }

 if(isset($_GET['loginsuccess'])=="true") {
    $alert = $_GET['alert'];
    echo    '<div class="alert alert-success alert-dismissible fade show m-0" data-dismiss="alert" aria-label="Close">
     <button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <strong>Success!</strong> '.$alert.'</div>';
 } 
 if(isset($_GET['logout'])=="true") {
    $msg = $_GET['msg'];
    echo    '<div class="alert alert-success alert-dismissible fade show m-0" data-dismiss="alert" aria-label="Close">
     <button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <strong>Success!</strong> '.$msg.'</div>';
 }
 ?>