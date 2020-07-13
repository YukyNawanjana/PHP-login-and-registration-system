<?php 
    include('header.php');
    require 'includes/config.php';
    require 'includes/register_handler.php';
?>
 
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-6 col-sm-12 card">
                <!-- form register -->
                <form class="text-center border border-light p-5" action="register.php" method="POST">

                    <p class="h4 mb-4">Sign up</p>
                    <!-- From Error Dislay -->
                    <?php 

                    if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)){
                        echo "
                            <div class='alert alert-danger' role='alert'>
                                Your first name must be between 2 and 25 characters
                            </div> 
                        "; 
                    }
                    if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)){
                        echo "
                            <div class='alert alert-danger' role='alert'>
                            Your last name must be between 2 and 25 characters
                            </div>
                        "; 
                    } 

                    if(in_array("Email already in use<br>", $error_array)){
                        echo "
                            <div class='alert alert-danger' role='alert'>
                                Email already in use
                            </div>
                        ";  
                    }
                    
                    if(in_array("Your passwords do not match<br>", $error_array)){ 
                        echo "
                        <div class='alert alert-danger' role='alert'>
                            Your passwords do not match
                        </div>
                    ";  
                    
                    }else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)){
                        echo "
                        <div class='alert alert-danger' role='alert'>
                            Your password must be betwen 5 and 30 characters
                        </div>
                    ";  
                    }

                    if(in_array("<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>", $error_array)){ 
                        echo " 
                            <div class='alert alert-success' role='alert'>
                                <span>You're all set! Go ahead and<a href='login.php'> Log in!</a></span>

                            </div>
                    ";
                    }

                    
                    ?>
                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- First name -->
                            <input type="text" name="first_name" id="" class="form-control" placeholder="First name" value="<?php 
                            if(isset($_SESSION['reg_fname'])) {
                                echo $_SESSION['reg_fname'];
                            } 
                            ?>" required>
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="text" name="last_name" id="" class="form-control" placeholder="Last name" value="<?php 
                            if(isset($_SESSION['reg_lname'])) {
                                echo $_SESSION['reg_lname'];
                            } 
                            ?>" required>
                        </div>
                    </div>

                    <!-- User name 
                    <input type="text" name="username" id="" class="form-control mb-4" placeholder="Usernname" required>
                    -->
                    <!-- E-mail -->
                    <input type="email" name="email" id="" class="form-control mb-4" placeholder="E-mail" value="<?php 
                            if(isset($_SESSION['reg_email'])) {
                                echo $_SESSION['reg_email'];
                            } 
                            ?>" required>

                    
                    <!-- Phone number -->
                    <input type="text" id="" name="mobile" class="form-control mb-4" placeholder="Phone number" value="<?php 
                            if(isset($_SESSION['reg_mobile'])) {
                                echo $_SESSION['reg_mobile'];
                            } 
                            ?>" required>
                   
                    <!-- Password -->
                    <input type="password" name="password" id="" class="form-control mb-4" placeholder="Password" required>
                    <input type="password" name="password2" id="" class="form-control" placeholder="Confirm Password" required>
                    <small id="" class="form-text text-muted mb-4">
                        At least 8 characters and 1 digit
                    </small>

                    <!--  -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="terms" required>
                        <label class="custom-control-label" for="terms">I accept the Terms of Use & Privacy Policy</label>
                    </div>
                    <!-- Sign up button -->
                    <button class="btn btn-primary my-4 btn-block" type="submit" name="sign_up">Sign Up</button>

                    <!-- Social register -->
                    <p>or sign up with:</p>

                    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

                    <hr>

                    <!-- Terms of service -->
                    <p>Already have an account ?
                        <a href="login.php" >Log in</a>

                </form>
                <!-- End form register -->
            </div>
            <div class="col-md-3 col-sm-12"></div>
        </div>
    </div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>