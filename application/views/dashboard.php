<!doctype html>
<html>
<head>
    <title> CV Builder </title>

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>static/img/favicon-16x16.png">
    <link rel="stylesheet" href="<?php echo base_url() ?>static/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>static/css/style.css">
</head>
<body>
    <div class=cv_wrapper>
        <div class=header>
            <div class=nav_bar>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class=logo>
                        <a class="navbar-brand" href="dashboard.php">
                            <div class=logo_png><img src=<?php echo base_url() ?>static/img/cv_cover_letter-512.png></div>
                            <div class=logo_text><h1>cv_builder</h1></div>
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Profile <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">View CV</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Download</a>
                            </li>
                            <li class="nav-item">
                                <div class=logout>
                                    <button class="btn btn-primary btn-sm" type="logout">Logout</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>


            </div>
        </div>
