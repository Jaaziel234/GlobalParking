<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Sistema GlobalParking</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/authentication/form-2.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/switches.css') }}">
    <style>
        body {
            color: #888ea8!important;
            height: 100%;
            font-size: 0.875rem;
            background: #2c2d35;
            overflow-x: hidden;
            overflow-y: auto;
            letter-spacing: 0.0312rem;
            font-family: 'Nunito', sans-serif;
        }
        .form-form .form-container .form-content {
            display: block;
            width: 100%;
            padding: 25px;
            background: #060818;
            text-align: center;
            border-radius: 15px;
            -webkit-box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.2);
            box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.2);
        }
        .form-form .form-form-wrap form .field-wrapper label {
            font-size: 10px;
            font-weight: 700;
            color: #bfc9d4;
            margin-bottom: 8px;
        }
        .form-form .form-form-wrap form .field-wrapper input {
            display: inline-block;
            vertical-align: middle;
            border-radius: 6px;
            min-width: 50px;
            max-width: 635px;
            width: 100%;
            -ms-transition: all 0.2s ease-in-out 0s;
            transition: all 0.2s ease-in-out 0s;
            color: #009688;
            font-weight: 600;
            font-size: 16px;
            padding: 13px 35px 13px 46px;
        }
        .form-control {
            height: auto;
            border: 1px solid #1b2e4b;
            color: #009688;
            font-size: 15px;
            padding: 8px 10px;
            letter-spacing: 1px;
            height: calc(1.4em + 1.4rem + 2px);
            padding: .75rem 1.25rem;
            border-radius: 6px;
            background: #1b2e4b;
        }
        .form-form .form-container .form-content h1 {
            font-size: 32px;
            color: #bfc9d4;
        }
        .form-form .form-container {
            align-items: center;
            display: flex;
            flex-grow: 1;
            width: 100%;
            min-height: 100%;
        }

    </style>
</head>
<body class="form">


    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">GlobalParking</h1>
                        <p class="">Acceso</p>
                        
                        <form class="text-left"  autocomplete="off">
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">E-MAIL</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input id="username" name="username" type="text" class="form-control" placeholder="ej: carlos@gmail.com" autocomplete="off">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">PASSWORD</label>
                                        <!--<a href="auth_pass_recovery_boxed.html" class="forgot-pass-link">Forgot Password?</a>-->
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Ingresar</button>
                                    </div>
                                </div>

                                
                            </div>

                            <div class="division">
                              <span>versión 1.0.0</span>
                          </div>

                          <p class="signup-link">By <a href="#">by GlobalParking</a></p>




                      </div>
                  </form>

              </div>                    
          </div>
      </div>
  </div>
</div>


<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('assets/js/authentication/form-2.js') }}"></script>

</body>
</html>