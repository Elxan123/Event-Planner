<div class="user-login-section section-padding bg-fixed" style="background-image: url(<?php echo base_url('assets/')?>images/header/hero-5.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1  text-center">
                <div class="login-wrapper">
                    <ul class="ui-list nav nav-tabs justify-content-center mar-bot-30" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#login" role="tab" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#register" role="tab" aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <?php if(isset($_SESSION['err'])){ ?>
                    <div class="alert alert-danger">
                        <p><?php echo $_SESSION['err'] ?></p>
                    </div>
                    <?php } ?>
                    <div class="ui-dash tab-content">
                        <div class="tab-pane fade show active" id="login" role="tabpanel">
                            <form id="login-form" action="<?php echo base_url('login_act')?>" method="post">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="email" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                                </div>
<!--                                <div class="row mar-top-20">-->
<!--                                    <div class="col-md-6 col-12 text-left">-->
<!--                                        <div class="res-box">-->
<!--                                            <input type="checkbox" tabindex="3" class="" name="remember" id="remember">-->
<!--                                            <label for="remember">Remember Me</label>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-6 col-12 text-right">-->
<!--                                        <div class="res-box sm-left">-->
<!--                                            <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="res-box text-center mar-top-30">
                                    <button type="submit" class="btn v3"><i class="ion-log-in"></i> Log In</button>
                                </div>
                            </form>
<!--                            <div class="social-profile-login text-center mar-top-30">-->
<!--                                <h5>or Login with</h5>-->
<!--                                <ul class="social-btn">-->
<!--                                    <li class="bg-fb"><a href="#"><i class="ion-social-facebook"></i></a></li>-->
<!--                                    <li class="bg-tt"><a href="#"><i class="ion-social-twitter"></i></a></li>-->
<!--                                    <li class="bg-ig"><a href="#"><i class="ion-social-instagram"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
                        </div>
                        <div class="tab-pane fade" id="register" role="tabpanel">
                            <form id="register-form" action="#" method="post">
                                <div class="form-group">
                                    <input type="text" name="user_name" id="user_name" tabindex="1" class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="user_password" id="user_password" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="res-box text-left">
                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                    <label for="remember">I've read and accept terms &amp; conditions</label>
                                </div>
                                <div class="res-box text-center mar-top-30">
                                    <button type="submit" class="btn v3"><i class="ion-android-checkmark-circle"></i>Sign Up</button>
                                </div>
                            </form>
                            <div class="social-profile-login text-center mar-top-30">
                                <h5>or Sign Up with</h5>
                                <ul class="social-btn">
                                    <li class="bg-fb"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li class="bg-tt"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li class="bg-ig"><a href="#"><i class="ion-social-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
