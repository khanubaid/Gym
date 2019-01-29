<?php
$success_msg= $this->session->flashdata('success_msg');
$error_msg= $this->session->flashdata('error_msg');
    if($success_msg){
      ?>
      <div class="alert alert-success">
        <?php echo $success_msg; ?>
      </div>
    <?php
    }
    if($error_msg){
      ?>
      <div class="alert alert-danger">
        <?php echo $error_msg; ?>
      </div>
<?php
}
?>

<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Login Forms with tabs - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    .btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
    margin-right: 6%;
    background-color: white;
    color: blue;
    margin-top: 4%;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.text-align{
    margin-top: -3%;
    margin-bottom: -9%;

    padding: 10%;
    margin-left: 30%;
}
.form-new{
    margin-right: 22%;
    margin-left: 20%;
}
.register-heading{
    margin-left: 21%;
    margin-bottom: 10%;
    color: #e9ecef;
}
.register-heading h1{
    margin-left: 21%;
    margin-bottom: 10%;
    color: #e9ecef;
}
.btnLoginSubmit{
    border: none;
    padding: 2%;
    width: 25%;
    cursor: pointer;
    background: #29abe2;
    color: #fff;
}
.btnForgetPwd{
    cursor: pointer;
    margin-right: 5%;
    color: #f8f9fa;
}
.register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
    border-radius: 2.5rem;
}
.nav-tabs .nav-link{
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    color: white;
}    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
<?php echo validation_errors(); ?>

  
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="Styles/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="Styles/bootstrap-4.1.0.min.js" type="text/javascript"></script>
        <link href="Styles/bootstrap-4.1.0.min.css" rel="stylesheet" type="text/css">
        <link href="Styles/MainStyle.css" rel="stylesheet" type="text/css">
        <title></title>
    
    
        <!--?php
        session_start();
        ? -->
        <div class="container register">
            <?php
$success_msg= $this->session->flashdata('success_msg');
$error_msg= $this->session->flashdata('error_msg');
    if($success_msg){
      ?>
      <div class="alert alert-success">
        <?php echo $success_msg; ?>
      </div>
    <?php
    }
    if($error_msg){
      ?>
      <div class="alert alert-danger">
        <?php echo $error_msg; ?>
      </div>
<?php
}
?>
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Member Registration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Trainer Registration</a>
                        </li>
                    </ul>  
                    <div class="tab-content" id="myTabContent">
                        

                    

                        <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Member Registration</h3>
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <form role="form" method="post" action="<?php echo base_url('user/login_member'); ?>">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="user_password" type="password" value="">
                            </div>
                             <div class="form-group" style="display: none;">
                                <input class="form-control" placeholder="type" name="trainer_member" type="text" value="Member">
                            </div>

                                <div class="form-group">
                                            <input type="submit" name="login" class="btnContactSubmit" value="Login">
                                            <!-- <a href="ForgetPassword.php" class="btnForgetPwd" value="Login">Forget Password?</a> -->
                                </div>

                        </fieldset>
                    </form>
                                </div>
                            </div>
                        </div>  


                        <div class="tab-pane fade show text-align form-new" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3 class="register-heading">Trainer Registration</h3>
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <form role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="user_password" type="password" value="">
                            </div>
                            <div class="form-group" style="display: none;">
                                <input class="form-control" placeholder="Type" name="trainer_member" type="text" value="Trainer" >
                            </div>

                                <div class="form-group">
                                            <input type="submit" name="login" class="btnContactSubmit" value="Login">
                                            <!-- <a href="ForgetPassword.php" class="btnForgetPwd" value="Login">Forget Password?</a> -->
                                </div>

                        </fieldset>
                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    
 </body></html> 



<!-- <!DOCTYPE html>
<html>
<head>
<title>Login form</title>
</head>

<body>
  <form method="post">
<table width="600" align="center" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td colspan="2"><?php echo @$error; ?></td>
  </tr>
  <tr>
    <td>Enter Your Email </td>
    <td><input type="text" name="email"/></td>
 </tr>

 <tr>
    <td width="230">Enter Your Password </td>
    <td width="329"><input type="password" name="pass"/></td>
  </tr> 
   <tr>
    <td colspan="2" align="center">
  <input type="submit" name="login" value="Login"/></td>
  </tr>
</table>

  </form>
</body>
</html>