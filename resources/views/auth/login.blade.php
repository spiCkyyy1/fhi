@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.0.0/pnotify.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.0.0/pnotify.brighttheme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.0.0/pnotify.buttons.min.css">
@endsection
@section('content')
<div class="unix-login">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="login-content">
                    <div class="login-form">
                        <h4>Login</h4>
                        <form>
                            <div class="form-group">
                                <label>Username</label>
                                <label class="pull-right">
                                    <a href="javascript:;" id="forgotUserBtn">Forgotten Username?</a>
                                </label>
                                <input
                                    type="email"
                                    class="form-control"
                                    placeholder="Email"
                                    name="email"
                                    id="email"
                                />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <label class="pull-right">
                                    <a href="javascript:;" id="forgotPassBtn">Forgotten Password?</a>
                                </label>
                                <input
                                    type="password"
                                    id="password"
                                    class="form-control"
                                    placeholder="Password"
                                    name="password"
                                />
                            </div>

                            <button
                                type="button"
                                class="btn btn-primary btn-flat m-b-30 m-t-30" onclick="SignIn()"
                            >
                                Sign in
                            </button>

                            <div class="register-link m-t-15 text-center">
                                <p>Don't have account ? <a href="{{route('register')}}"> Sign Up Here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal custom fade" id="forgotUser" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding: 35px 20px;">
                <h4>
                    <span class="glyphicon glyphicon-lock"></span> Forgot Username
                </h4>
                <p>
                    Please enter the email address associated with your account. Your
                    username will be emailed to that address.
                </p>
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <div class="modal-body">
                <div class="horizontal-form">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="color: #000;"
                            >Email Address
                            </label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" placeholder="" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-primary" id="signup-btn">
                        Email Username
                    </button>
                    <button
                        type="button"
                        class="btn btn-primary"
                        id="signup-btn"
                        data-dismiss="modal"
                    >
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal custom fade" id="forgotPass" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding: 35px 20px;">
                <h4>
                    <span class="glyphicon glyphicon-lock"></span> Forgot Password
                </h4>
                <p>
                    Please enter your username.
                </p>
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <div class="modal-body">
                <div class="horizontal-form">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Username </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="" />
                            </div>
                        </div>
                        <div class="form-step confirmation">
                            <h2 class="heading">Change Password</h2>

                            <div class="basic-form">
                                <form>
                                    <div class="form-group">
                                        <label>What is my password?</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder=""
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input
                                            type="password"
                                            class="form-control"
                                            placeholder="Password"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm New Password</label>
                                        <input
                                            type="password"
                                            class="form-control"
                                            placeholder="Password"
                                        />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-primary" id="changePassNext">
                        Next
                    </button>
                    <button
                        type="button"
                        class="btn btn-primary"
                        id="signup-btn"
                        data-dismiss="modal"
                    >
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.0.0/pnotify.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.0.0/pnotify.buttons.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#forgotUserBtn").click(function () {
                $("#forgotUser").modal();
            });
            $("#forgotPassBtn").click(function () {
                $("#forgotPass").modal();
            });

            // forgot password next
            var nextBtn = $("#changePassNext");
            nextBtn.click(function () {
                var nextDiv = $(".form-step:visible").next(".form-step");
                if (nextDiv.length == 0) {
                    // wrap around to beginning
                    // nextDiv = $(".form-step:first");
                    nextDiv = $(".form-step:last");
                }
                $(".form-step").hide();
                nextDiv.show();
            });
        });
        function SignIn(){
            var email = $("#email").val();
            var password = $("#password").val();
            $.post("/login", {
                "_token": "{{ csrf_token() }}",
                email: email,
                password: password
            }, function (data, status) {
                if(status == 'success'){
                    PNotify.removeAll();
                    new PNotify({
                        title: 'Success',
                        text: 'Successfully Logged In',
                        type: 'success'
                    });
                    setTimeout(function(){
                        window.location = '{!! url()->current() !!}' + '/';
                    },1000);
                }
            }).error(function(data, status){
                PNotify.removeAll();
                new PNotify({
                    title: 'Error',
                    text: 'Please enter valid email and password.',
                    type: 'error'
                });
            });
        }
    </script>
@endsection
