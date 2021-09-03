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
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

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
                                    <h3 class="font-weight-bolder text-info text-gradient">Register Here</h3>

                                </div>
                                <div class="card-body">
                                    <form role="form" method="post" action="uregister">
                                        {{csrf_field()}}
                                        <label>Frist Name</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Frist name" aria-label="frist_name" aria-describedby="frist_name-addon" name="first_name" id="first_name">
                                            <p id="first_name_error" style="color:red;font-size:12px;"></p>
                                        </div>
                                        <label>Last Name</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Last Name" aria-label="last_name" aria-describedby="last_name-addon" name="last_name" id="last_name">
                                            <p id="last_name_error" style="color:red;font-size:12px;"></p>
                                        </div>
                                        <label>Email</label>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="email" aria-label="email" aria-describedby="email-addon" name="email" id="email">
                                            <p id="email_error" style="color:red;font-size:12px;"></p>
                                        </div>
                                        <label>Mobile Number</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Mobile Number" aria-label="mobile_no" maxlength="10" aria-describedby="mobile_no-addon" name="mobile_no" id="mobile_no">
                                            <p id="mobile_no_error" style="color:red;font-size:12px;"></p>
                                        </div>
                                        <label>Gender</label>
                                        <div class="mb-3">
                                            &nbsp;&nbsp; <input type="radio" aria-label="gender" aria-describedby="gender-addon" name="gender" required value="male">&nbsp;&nbsp;Male&nbsp;&nbsp;
                                            <input type="radio" aria-label="gender" aria-describedby="gender-addon" name="gender" required value="female">&nbsp;&nbsp;Female
                                            <p id="gender_error" style="color:red;font-size:12px;"></p>
                                        </div>
                                        <label>Date of Brith</label>
                                        <div class="mb-3">
                                            <input type="date" class="form-control" placeholder="Username" aria-label="date" aria-describedby="date-addon" name="dob" id="dob">
                                            <p id="dob_error" style="color:red;font-size:12px;"></p>
                                        </div>
                                        <label>User Name</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Username" aria-label="username" aria-describedby="username-addon" name="username" id="username">
                                            <p id="username_error" style="color:red;font-size:12px;"></p>
                                        </div>
                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="password" id="password">
                                            <p id="password_error" style="color:red;font-size:12px;"></p>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" onclick="return register_validation()" name="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Register</button>
                                        </div>
                                    </form>
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
    function register_validation() {
        var first_name = $("#first_name").val();
        var last_name = $("#last_name").val();
        var email = $("#email").val();
        var gender = $('input:radio[name=gender]:checked').length;
        var mobile_no = $("#mobile_no").val();
        var last_name = $("#last_name").val();
        var dob = $("#dob").val();
        var username = $("#username").val();
        var password = $("#password").val();
        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;

        if (first_name == "") {
            $("#first_name_error").html('please enter first name');
            $("#first_name").focus();
            return false;
        } else if (last_name == "") {
            $("#first_name_error").html('');
            $("#last_name_error").html('please enter last name');
            $("#last_name").focus();
            return false;
        } else if (email == "") {
            $("#last_name_error").html('');
            $("#email_error").html('please enter email');
            $("#email").focus();
            return false;
        } else if (!pattern.test(email)) {
            $("#email_error").html('');
            $("#email_error").html('please enter valid email');
            $("#email").focus();
            return false;
        } else if (mobile_no == "") {
            $("#email_error").html('');
            $("#mobile_no_error").html('please enter mobile no');
            $("#mobile_no").focus();
            return false;
        } else if (mobile_no.length != 10) {
            $("#email_error").html('');
            $("#mobile_no_error").html('please enter only 10 digits ');
            $("#mobile_no").focus();
            return false;
        } else if (gender == 0) {
            $("#mobile_no_error").html('');
            $("#gender_error").html('please select gender ');
            $("#gender").focus();
            return false;
        } else if (dob == "") {
            $("#gender_error").html('');
            $("#dob_error").html('please enter dob');
            $("#dob").focus();
            return false;
        } else if (username == "") {
            $("#dob_error").html('');
            $("#username_error").html('please enter username');
            $("#username").focus();
            return false;
        } else if (password == "") {
            $("#username_error").html('');
            $("#password_error").html('please enter password');
            $("#password").focus();
            return false;
        } else {
            $("#password_error").html('');
            return true;
        }

    }
</script>