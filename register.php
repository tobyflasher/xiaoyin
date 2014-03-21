<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/profile.css" type="text/css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head> 
<body>
  <div id="topbar" >
     <h1>Hello World<small>lugou</small></h1>
  </div>
<div class="container">
<div class="row" >
<div class="col-md-3">
.col-md-3
</div>
<div class="col-md-6" id="register-container">
    <form "role="form" name="register" action="" method="post">
  <div class="form-group">
    <label for="username">用户名</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="用户名">
  </div>
  <div class="form-group">
    <label for="inputEmail">Email地址</label>
    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="example@mail.com">
  </div>
  <div class="form-group">
    <label for="inputPassword">密码</label>
    <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="输入密码">
  </div>
  <div class="form-group">
    <label for="inputPasswordConfirm">密码确认</label>
    <input type="password" class="form-control" id="inputPasswordConfirm" name="inputPasswordConfirm" placeholder="再输入一遍">
  </div>
  <table class="col-md-4" class="form-control">
  <tr>
   <td rowspan="2" class="col-md-3">
   <img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
   </td>
   <td>
   <input type="text" name="captcha_code" size="10" maxlength="6" />
   </td>
   <tr>
   <td>
   <a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">看不清</a>
   </td>
   </tr>
</table>
  <button type="submit"  class="btn btn-default form-control">提交表单</button>
</form>
</div>
<div class="col-md-3">
.col-md-3
</div>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validate.min.js"></script>
    <script src="js/headroom.min.js"></script>
  <script>
      var myElement = document.getElementById('topbar');
      var headroom = new Headroom(myElement, {
       "tolerance":5,
       "offset":205,
       "classes":{"initial":"animated","pinned":"slideDown","unpinned":"slideUp"}
       }
);
      headroom.init();
  </script>
                       
  </body>
</html>
