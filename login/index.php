<?php
require_once('../templates/navbar.php')
?>
        <div style=" max-width: 540px;" class="container my-5 py-5">
            <form action="create.php" method="POST" class="form-control was-validated p-5">
                <div class="fw-bold text-center h2">Please Login</div>
                <div class="mb-3">
                    <label class="form-label" for="inputEmail">Place your email</label>
                    <input name='email' placeholder="ex : nano@gmail.com" type="email" class="form-control" id="inputEmail" required>
                    <div class="invalid-feedback">Your email not registered !</div>
                    <div class="valid-feedback">Hey welcome back !</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="inputPassword">Password</label>
                    <input name='password' placeholder="********" type="password" class="form-control" id="inputPassword" required>
                    <div class="invalid-feedback">Wrong password, please input correct one !</div>
                    <div class="valid-feedback">Great we know that was you!</div>
                </div>
                <div class="d-flex d-flex-row justify-content-center">
                    <input class="btn btn-lg btn-success" type="submit" value="Logon" />
                </div>
            </form>
            <div class="content row row-cols-2">

            </div>
        </div>
      
<?php
require('../templates/bottom.php')
?>