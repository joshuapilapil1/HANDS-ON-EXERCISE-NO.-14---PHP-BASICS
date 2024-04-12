<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.register_and_login.com</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Add custom styles here */
        body {
            background-image: url('nature1.webp');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.7); /* Adjust the opacity value (0.7) as needed */
            border-radius: 10px;
            margin-top: 50px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Other settings</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a> <!-- Link to the PHP process file -->
            </li>
        </ul>
    </div>
</nav>

<!-- Content area -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Login form -->
            <div class="card">
                <div class="card-header">
                    joshua pilapil login form
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group">
                            <label for="loginUsername">Username</label>
                            <input type="text" class="form-control" id="loginUsername" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="loginPassword">Password</label>
                            <input type="password" class="form-control" id="loginPassword" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                        <?php if (isset($login_error)) { echo "<p class='text-danger'>$login_error</p>"; } ?>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <!-- Registration form -->
            <div class="card">
                <div class="card-header">
                    joshua pilapil register form
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group">
                            <!-- Registration form fields -->
                        </div>
                        <li class="nav-item">
                        <a class="nav-link btn btn-success" href="Registration_form.php">Registration virtual slipt</a> <!-- Link to the PHP process file -->
                         </li>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
