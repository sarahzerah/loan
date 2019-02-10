<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Register | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
    ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- wave CSS
    ============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <!-- Notika icon CSS
    ============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>


    <div  class="Login">
            <!-- Login -->
    <div style=" margin-left: 450px; width: 500px; height: 100px; padding-top: 50px">   
        <div class="nk-form">
            <div  style="padding: 50px">
                <form action="login.php" method="POST">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

                  <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-user"></i></span>
                    <div class="nk-int-st">
                        <input type="text"  name="username" class="form-control" placeholder="Username">
                    </div>
                   </div>
                   <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-key"></i></span>
                    <div class="nk-int-st">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                   </div>
                   <br>
                  <div style="padding: 20px;" >
                      <input type="submit" name="submit"> Login</>
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalfour">Register</button>
                </div>
            </form>
          </div>
       </div>

              
              <br><br>
               <!-- start modal -->
             <div class="row">
                <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalfour">bounce</button> -->
                <div class="modal animated bounce" id="myModalfour" role="dialog">
                    <div class="modal-dialog modals-default">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <h2>Registration From</h2>
                                 <!-- <div class="nk-form"> -->
                                     <form class="login-action" action="register.php" method="POST" >
                                        <div class="input-group">
                                            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                                            <div class="nk-int-st">
                                                <input type="text" name="firstname" class="form-control" placeholder="Firstname">
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                                            <div class="nk-int-st">
                                                <input type="text" name="lastname" class="form-control" placeholder="Lastname">
                                            </div>
                                        </div>

                                        <div class="input-group mg-t-15">
                                            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-menus"></i></span>
                                            <div class="nk-int-st">
                                                <input type="text" name="emailaddress" class="form-control" placeholder="Email Address">
                                            </div>
                                        </div>

                                        <div class="input-group mg-t-15">
                                            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-star"></i></span>
                                            <div class="nk-int-st">
                                                <input type="text" name="role" class="form-control" placeholder="Role">
                                            </div>
                                        </div>

                                        <div class="input-group mg-t-15">
                                            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-star"></i></span>
                                            <div class="nk-int-st">
                                                <input type="password" name="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                               
                              <!-- </div>         -->

                                <!-- <button class="btn" type="submit" type="submit" name="submit">SAVE</button> -->
                              <br>                    
                            <div class="modal-footer">
                             <button  class="btn btn-default" type="submit" name="submit">Save </button>
                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>

                              </form>
                        </div>
                    </div>
                </div>
            </div>
     
            <!-- end modal -->

           </div>
         </div>
     </div>

 <!-- end login -->
       
        

        <!-- Register -->
        <!-- <form class="login-action" action="new-user.php" method="POST" >> -->
          <!-- <div class="nk-block" id="l-register"> -->
           

    <!-- </form> -->
       

        <!-- Forgot Password -->
        <div class="nk-block" id="l-forget-password">
            <div class="nk-form">
                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>

                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="Email Address">
                    </div>
                </div>

                <a href="#l-login" data-ma-action="nk-login-switch" data-ma-block="#l-login" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></a>
            </div>

            <div class="nk-navigation nk-lg-ic rg-ic-stl">
                <a href="new-user.php" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Sign in</span></a>
                <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
            </div>
        </div>
    </div>
    <!-- Login Register area End-->
    <!-- jquery
    ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
    ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
    ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
    ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
    ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
    ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
    ============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
    ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
    ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
    ============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
    ============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  Chat JS
    ============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  wave JS
    ============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!-- icheck JS
    ============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!--  todo JS
    ============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- Login JS
    ============================================ -->
    <script src="js/login/login-action.js"></script>
    <!-- plugins JS
    ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
    ============================================ -->
    <script src="js/main.js"></script>

<script type="text/javascript">
        if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF'];?>');
    }
</script>

</body>

</html>
