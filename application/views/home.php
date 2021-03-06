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
                <div class=title>
                    <div class=logo>
                        <a href="/codeigniter/static//index.html">
                            <div class=logo_png><img src="<?php echo base_url() ?>static/img/cv_cover_letter-512.png"></div>
                            <div class=logo_text><h1>cv_builder</h1></div>
                        </a>
                    </div>
                </div>
                <div class=login>
                    <div class=login_form>
                        <div class=login_table>
                            <form class="form-inline" id="loginform" method="POST" action="registration.php">
                                <div class="form-row">
                                    <div class="col-sm">
                                        <label class="sr-only" for="inlineFormInputName2">Username</label>
                                        <div class=username>
                                            <input type="text" name="username" class="form-control form-control-sm" id="inlineFormInputName2" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <label class="sr-only" for="inlineFormInputGroupUsername2">Password</label>
                                        <div class="password">

                                            <input type="password" name="password" class="form-control form-control-sm" id="inlineFormInputGroupUsername2" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row" id=remember_me_login>
                                    <div class=remember_me>
                                        <div class="form-check mb-2 mr-sm-2">
                                            <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                            <label class="form-check-label" for="inlineFormCheck">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <div class=login_button>
                                        <button class="btn btn-primary btn-sm" type="submit" form="loginform" value="submit">Log In</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=image_container>
            <div class=content_image>
                <img src="<?php echo base_url() ?>static//img/corporate.jpg">
                <div class=registration>
                    <h1>Registration</h1>
                    <form class="needs-validation" method="POST" id="registrationform" action="<?php echo base_url() ?>index.php/register/submit" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"></label>
                                <input type="text" name="firstname" class="form-control" id="validationCustom01" placeholder="First name"  required>
                                <div class="invalid-feedback">
                                    Please provide your first name.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02"></label>
                                <input type="text" name="lastname" class="form-control" id="validationCustom02" placeholder="Last name"  required>
                                <div class="invalid-feedback">
                                    Please provide your last name.
                                </div>
                            </div>

                        </div>
                        <div class=form-row>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustomUsername"></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    </div>
                                    <input type="text" name="username" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03"></label>
                                <input type="password" name="password" class="form-control" id="validationCustom03" placeholder="New Password" required>
                                <div class="invalid-feedback">
                                    Please provide a password.
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom04"></label>
                                <input type="text" name="email" class="form-control" id="validationCustom04" placeholder="E-mail" required>
                                <div class="invalid-feedback">
                                    Please provide an email address.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom05"></label>
                                <input type="text" name="phone" class="form-control" id="validationCustom05" placeholder="Phone" required>
                                <div class="invalid-feedback">
                                    Please provide a phone number.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class=gender-container>
                                    <div class=" input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Gender</span>
                                        </div>
                                        <div class="input-group-prepend ">
                                            <div class="input-group-text input-group-sm" style="border-top-right-radius: 0.25rem; border-bottom-right-radius: 0.25rem">
                                                <input type="radio" aria-label="Radio button for following text input"  name="optradio" value="Female">
                                                <div class="gender">
                                                    <span class="input-group-text">Female</span>
                                                </div>
                                                <input type="radio" aria-label="Radio button for following text input"  name="optradio" value="Male">
                                                <div class="gender">
                                                    <span class="input-group-text">Male</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" name="remember_me" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit" form="registrationform" value="submit">Submit</button>
                    </form>
                    
                    <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                    </script>
                </div>
            </div>

        </div>
    </div>
    <div class=footer>
        <h4>Copyright &copy CV Builder 2017. All rights reserved.</h4>
    </div>
</body>
</html>
