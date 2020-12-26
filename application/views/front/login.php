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
                            <a class="nav-link register_link" data-toggle="tab" href="#register" role="tab" aria-selected="false">Register</a>
                        </li>
                    </ul>

                    <?php if(isset($_SESSION['register_err'])){ ?>
                    <script>
                        // $(window).load(() => {
                            setTimeout(() => {
                                $('.register_link').click();
                            },3000)
                        // })
                    </script>
                    <?php } ?>
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
                                <div class="res-box text-center mar-top-30">
                                    <button type="submit" class="btn v3"><i class="ion-log-in"></i> Log In</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="register" role="tabpanel">
                            <form id="register-form" action="<?php echo base_url('register_act')?>" method="post">
                                <div class="form-group">
                                    <input type="text" name="name" id="user_name" tabindex="1" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="surname" id="r_email" tabindex="1" class="form-control" placeholder="Surname">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="number" id="user_password" tabindex="2" class="form-control" placeholder="Number">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="confirm-password" tabindex="2" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="r_password" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="res-box text-center mar-top-30">
                                    <button type="submit" class="btn v3"><i class="ion-android-checkmark-circle"></i>Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
