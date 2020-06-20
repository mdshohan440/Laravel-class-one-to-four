<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="{{asset('assets/add/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/add/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('assets/add/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('assets/add/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
 <!-- Custom styles for this template -->
  <link href="{{asset('assets/add/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/add/css/style-responsive.css')}}" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="{{route('registrationsave')}}" method="post">
        <h2 class="form-login-heading">Registration Form
            <p style="color :green;font-size: 14px;font-weight: bold;margin-top:3px;"class="form-login-heading">
           @if(Session::has('messege'))        
             {{Session::get('messege')}}
           @endif
          </p>
        </h2>
        <div class="login-wrap">
          <input type ="hidden" name ="_token" value ="<?php echo csrf_token();?>">
          
          <input type="text" name="username" class="form-control" placeholder="User ID" autofocus>
          <br>
          <input type="password" name="password" class="form-control" placeholder="Password">
          <label class="checkbox">
            
            </label>
          <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Create Account</button>
          
          
          
        </div>
       
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('assets/add/lib/jquery/jquery.min.js'))}"></script>

  <script src="{{asset('assets/add/lib/bootstrap/js/bootstrap.min.js'))}"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="{{asset('assets/add/lib/jquery.backstretch.min.js'))}"></script>
  <script>
    $.backstretch("{{asset('assets/add/img/login-bg.jpg'))}", {
      speed: 500
    });
  </script>
</body>

</html>
