<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php print $title;?></title>
        <meta charset="UTF-8" />
        <meta name="msapplication-TileColor" content="#5bc0de" />
        <meta name="msapplication-TileImage" content="<?php echo base_url()?>assets/img/metis-tile.png" />
        <?php print $meta;?>
        <link rel="stylesheet" href="<?php echo base_url()?>assets/lib/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/lib/magic/magic.css" />
        <?php print $css;?>
        
        <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/lib/bootstrap/js/bootstrap.js"></script>
        <?php print $javascript;?>
    </head>
    <body class="login">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo base_url()?>assets/img/logo.png" alt="Metis Logo" />
            </div>
            <div class="tab-content">
                <div id="login" class="tab-pane active">
                    <form action="<?php echo base_url()?>test/index" class="form-signin" method="post">
                        <p class="text-muted text-center">
                            Enter your username and password
                        </p>
                        <input type="text" placeholder="Username" class="form-control" id="username" name="username" />
                        <input type="password" placeholder="Password" class="form-control" id="userpassword" name="userpassword" />
                        <select id="type" name="type"class="form-control">
                                <option value="">select user type</option>
                                <option value="Admin">Administrator</option>
                                <option value="Student">Student</option>
                                <option value="Teacher">Teacher</option>
                        </select>
                        <br />
                        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in" />
                    </form>
                </div>
                <div id="forgot" class="tab-pane">
                    <form action="index.html" class="form-signin">
                        <p class="text-muted text-center">Enter your valid e-mail</p>
                        <input type="email" placeholder="mail@domain.com" required="required" class="form-control">
                        <br>
                        <button class="btn btn-lg btn-danger btn-block" type="submit">Recover Password</button>
                    </form>
                </div>
                <div id="signup" class="tab-pane">
                    <form action="index.html" class="form-signin">
                        <input type="text" placeholder="username" class="form-control">
                        <input type="email" placeholder="mail@domain.com" class="form-control">
                        <input type="password" placeholder="password" class="form-control">
                        <button class="btn btn-lg btn-success btn-block" type="submit">Register</button>
                    </form>
                </div>
            </div>
            <div class="text-center">
                <ul class="list-inline">
                    <li> <a class="text-muted" href="#login" data-toggle="tab">Login</a>  </li>
                    <li> <a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a>  </li>
                    <li> <a class="text-muted" href="#signup" data-toggle="tab">Signup</a>  </li>
                </ul>
            </div>
        </div><!-- /container -->
        
        <script>
            $('.list-inline li > a').click(function() {
                var activeForm = $(this).attr('href') + ' > form';
                //console.log(activeForm);
                $(activeForm).addClass('magictime swap');
                //set timer to 1 seconds, after that, unload the magic animation
                setTimeout(function() {
                    $(activeForm).removeClass('magictime swap');
                }, 1000);
            });
        </script>
    </body>
</html>
