<div class="modal fade" role="dialog" tabindex="-1" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div>
                        <ul class="nav nav-tabs">
                            <li class="active"><a class="bg-warning" href="#tab-1" role="tab" data-toggle="tab">Login </a></li>
                            <li><a class="text-primary" href="#tab-2" role="tab" data-toggle="tab">Register </a></li>
                            <li><a class="text-primary" href="#tab-3" role="tab" data-toggle="tab">Forgot password? </a></li>
                        </ul>
                        <div class="tab-content" >
                            <div class="tab-pane active" role="tabpanel" id="tab-1">
                                <div class="login-card"><img src="assets/img/avatar_2x.png" class="profile-img-card">
                                    <form class="form-signin" action="" method="post" name="log" onsubmit="return validateForm1();" >
                                        <input class="form-control" type="email" required="" placeholder="Email address" autofocus="" id="email" name="email">
                                      <input class="form-control" type="password" required="" placeholder="Password" id="password" name="password">
                                        <div class="checkbox">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" value="on">Remember me</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="login" id="login">Sign in</button>
                                    </form><a href="#tab-3" role="tab" data-toggle="tab" class="forgot-password">Forgot your password?</a></div>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="tab-2">
                            <?php if ($msg <> "") { ?>
                                <div class="alert alert-dismissable alert-<?php echo $msgType; ?>">
                                    <button data-dismiss="alert" class="close" type="button">x</button>
                                    <p><?php echo $msg; ?></p>
                                </div>
                                <?php } ?>
                                <form id="form_container" class="bootstrap-form-with-validation"  action="" method="post" name="f" onsubmit="return validateForm();"  enctype="multipart/form-data">
                                    <div class="form-group has-success">
                                        <label class="control-label" for="uname">User-Name </label>
                                        <input class="form-control"  
                                        type="text" name="uname" id="uname">
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="control-label" for="fname">First-name </label>
                                        <input class="form-control" type="text" name="fname" id="fname">
                                    </div>
                                    <div class="form-group has-warning">
                                        <label class="control-label" for="password-input">Last-name </label>
                                        <input class="form-control" type="text" name="lname" id="lname" >
                                    </div>
                                    <div class="form-group has-warning">
                                        <label class="control-label" for="password-input">Gender:- </label>
                                        <div class="radio">
                                            <label class="control-label">
                                                <input type="radio" id="gender1" value="male" name="gender">Male</label>
                                        </div>
                                        <div class="radio">
                                            <label class="control-label">
                                                <input type="radio" id="gender2" value="female" name="gender" >Female</label>
                                        </div>
                                    </div>
                                    <div class="form-group has-warning">
                                    <label class="control-label" for="dob">DOB:- </label>
                                    <select name="yearOfBirth" style="color:black;">
                                        <option value="">---Select year---</option>
                                        <?php for ($i = 1980; $i < date('Y'); $i++) : ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php endfor; ?>
                                        </select>
                                        <select name="monthOfBirth" style="color:black;"> 
                                        <option value="">---Select month---</option>
                                        <?php for ($i = 1; $i <= 12; $i++) : ?>
                                        <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
                                        <?php endfor; ?>
                                        </select>
                                        <select name="dateOfBirth" style="color:black;">
                                        <option value="">---Select date---</option>
                                        <?php for ($i = 1; $i <= 31; $i++) : ?>
                                        <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
                                        <?php endfor; ?>
                                        </select>
                                    </div>
                                    <div class="form-group has-error has-feedback">
                                        <label class="control-label" for="email">Email :-</label>
                                        <input class="form-control" type="email" name="email" id="email">></div>
                                    <div class="form-group has-error has-feedback">
                                        <label class="control-label" for="pass1">Password:- </label>
                                        <input class="form-control" type="password" id="pass1"  name="pass1"></div>
                                    <div class="form-group has-error has-feedback">
                                        <label class="control-label" for="pass2">Confirm Password:- </label>
                                        <input class="form-control" type="password" name="pass2" id="pass2"></i></div>
                                   
                                        <label class="control-label" for="photo" >Choose Profile Picture:-</label>
                                        <input type="file" name="image">
                                       <div class="form-group has-success">
                                        <div class="checkbox">
                                            <label class="control-label">
                                                <input type="checkbox" name="checkbox" required="">Agree Terms and Conditions.</label>
                                        </div>
                                    </div>
                                    <div class="form-group has-warning">
                                        <p class="form-static-control text-lowercase text-center text-info bg-danger" style="font-family:&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-seri;">By Clicking Register , verification code will be send to your email-id, after the proper verification you will be able to login to your account successfully.</p>
                                    </div>
                                    <div class="form-group has-warning">
                                        <button class="btn btn-success btn-block" name="sub" type="submit" >Register </button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="tab-3">
							<form name="login" action="" method="post">
								<input type="text" class="text" name="femail" value="" placeholder="Enter your registered email" required  ><a href="#" class=" icon email"></a>
										<div class="submit three">
											<input type="submit" name="send"  value="Send Email" >
										</div>
									</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
