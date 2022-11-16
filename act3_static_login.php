<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    <title>Login Form</title>
</head>
<body>
    <?php
        $users = array(
            array(
                'type' => 'Admin',
                'username' => 'admin',
                'password' => 'pass1234'
            ),
            array(
                'type' => 'Admin',
                'username' => 'renmark',
                'password' => 'pogi1234'
            ),
            array(
                'type' => 'Content Manager',
                'username' => 'pepito',
                'password' => 'manaloto'
            ),
            array(
                'type' => 'Content Manager',
                'username' => 'juan',
                'password' => 'delacruz'
            ),
            array(
                'type' => 'System User',
                'username' => 'pedro',
                'password' => 'penduko'
            )
        );

        if(isset($_POST['btnSignIn'])){
            $status = $_POST['drpUser'];
            $name = $_POST['txtUsername'];
            $pass = $_POST['txtPassword'];

            if($status === $users[0]['type']){
                if($name === $users[0]['username']){
                    if($pass === $users[0]['password']){
                        echo
                        '<div class="container-fluid text-center alert-size mt-3">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Welcome to the System: '. $name .'
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>';
                    }
                    else{
                        echo
                        '<div class="container-fluid text-center alert-size mt-3">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Invalid Username / Password
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>';
                    }
                }
                elseif($name === $users[1]['username']){
                    if($pass === $users[1]['password']){
                        echo
                        '<div class="container-fluid text-center alert-size mt-3">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Welcome to the System: '. $name .'
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>';
                    }
                    else{
                        echo
                        '<div class="container-fluid text-center alert-size mt-3">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Invalid Username / Password
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>';
                    }
                }
                else{
                    echo
                    '<div class="container-fluid text-center alert-size mt-3">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Invalid Username / Password
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>';
                }
            }
            elseif($status === $users[2]['type']){
                if($name === $users[2]['username']){
                    if($pass === $users[2]['password']){
                        echo
                        '<div class="container-fluid text-center alert-size mt-3">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Welcome to the System: '. $name .'
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>';
                    }
                    else{
                        echo
                        '<div class="container-fluid text-center alert-size mt-3">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Invalid Username / Password
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>';
                    }
                }
                elseif($name === $users[3]['username']){
                    if($pass === $users[3]['password']){
                        echo
                        '<div class="container-fluid text-center alert-size mt-3">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Welcome to the System: '. $name .'
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>';
                    }
                    else{
                        echo
                        '<div class="container-fluid text-center alert-size mt-3">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Invalid Username / Password
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>';
                    }
                }
                else{
                    echo
                    '<div class="container-fluid text-center alert-size mt-3">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Invalid Username / Password
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>';
                }
            }
            elseif($status === $users[4]['type']){
                if($name === $users[4]['username']){
                    if($pass === $users[4]['password']){
                        echo
                        '<div class="container-fluid text-center alert-size mt-3">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Welcome to the System: '. $name .'
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>';
                    }
                    else{
                        echo
                        '<div class="container-fluid text-center alert-size mt-3">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Invalid Username / Password
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>';
                    }
                }
                else{
                    echo
                    '<div class="container-fluid text-center alert-size mt-3">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Invalid Username / Password
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>';
                }
            }
        }
    ?>
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <form method="post">
                <select name="drpUser" id="drpUser" class="form-control mb-2">
                    <option value="Admin" selected>Admin</option>
                    <option value="Content Manager">Content Manager</option>
                    <option value="System User">System User</option>
                </select>

                <input type="text" name="txtUsername" class="form-control mb-2" placeholder="Username" required autofocus>
                <input type="password" name="txtPassword" class="form-control mb-2" placeholder="Password" required>
                <button type="submit" name="btnSignIn" class="btn btn-lg btn-primary btn-block btn-signin">Sign in</button>
            </form>
        </div>
    </div>
    
    

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>