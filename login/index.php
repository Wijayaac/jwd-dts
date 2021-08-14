<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post Newer on This Site</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <meta name="theme-color" content="#7952b3">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="link-secondary" href="#">Authenticator</a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#">Maximize</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="link-secondary" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24">
                            <title>Search</title>
                            <circle cx="10.5" cy="10.5" r="7.5" />
                            <path d="M21 21l-5.2-5.2" />
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                </div>
            </div>
        </header>
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
        <footer class="blog-footer">
            <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            <p>
                <a href="#">Back to top</a>
            </p>
        </footer>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>