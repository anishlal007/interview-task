<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Demo
  </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="">

  <main class="main-content  mt-0">
    <section style="margin-top:-80px;">
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Log IN</h3>

                </div>
                <div class="card-body">
                  <form role="form" method="post" action="ulogin">
                    {{csrf_field()}}
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Email or Username" aria-label="Email" aria-describedby="email-addon" name="email" id="email">
                      <p id="email_error" style="color:red;font-size:12px;"></p>
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="password" id="password">
                      <p id="password_error" style="color:red;font-size:12px;"></p>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" onclick="return login_validation()" name="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Don't have an account?
                    <a href="/user_register" class="text-info text-gradient font-weight-bold">Sign up</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('assets/img/ad.jpeg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
</body>

</html>
<script>
  function login_validation() {
    var email = $("#email").val();
    var password = $("#password").val();
    if (email == "") {
      $("#email_error").html('please enter username');
      return false;
    } else if (password == "") {
      $("#email_error").html('');
      $("#password_error").html('please enter password');
      return false;
    } else {
      $("#password_error").html('');
      return true;
    }

  }
</script>