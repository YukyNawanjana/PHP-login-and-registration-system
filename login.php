<?php 
    include('header.php');
    require 'includes/config.php';
    require 'includes/login_handler.php';

?>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-6 col-sm-12 card">
            <!-- Login form -->
                <form class="text-center border border-light p-5 " action="login.php" method="POST">

                    <p class="h4 mb-4">Sign In</p>
                    <?php if(in_array("Email or password was incorrect", $error_array)){ 
                            echo "
                            <div class='alert alert-danger' role='alert'>
                                Email or password was incorrect
                            </div> 
                        ";
                    }
                    ?>
                    <!-- Email -->
                    <input type="email" name="user_email" id="" class="form-control mb-4" placeholder="E-mail"  value="<?php 
					if(isset($_SESSION['log_email'])) {
						echo $_SESSION['log_email'];
					} 
					?>"  required>

                    <!-- Password -->
                    <input type="password" name="user_password" id="" class="form-control mb-4" placeholder="Password" required>

                    <div class="d-flex justify-content-around">
                        <div>
                            <!-- Remember me -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                            </div>
                        </div>
                        <div>
                            <!-- Forgot password -->
                            <a href="">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Sign in button -->
                    <button class="btn btn-primary btn-block my-4" type="submit" name="sign_in">Sign in</button>

                    <!-- Register -->
                    <p>Not a member?
                        <a href="register.php">Register</a>
                    </p>

                    <!-- Social login -->
                    <p>or sign in with:</p>

                    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

                </form> 
            <!-- End form login -->
            </div>
            <div class="col-md-3 col-sm-12"></div>
        </div>
    </div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>