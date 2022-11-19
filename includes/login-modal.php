<!-- Register / SignIn Modal -->

<div class="modal fade " data-backdrop="static" id="user_login_Modal" tabindex="-1"
    aria-labelledby="user_login_ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header mt-4 mt-sm-0">
                <nav class="w-100">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab"
                            aria-controls="nav-login" aria-selected="false">Sign In</a>
                        <a class="nav-link" id="nav-register-tab" data-toggle="tab" href="#nav-register" role="tab"
                            aria-controls="nav-register" aria-selected="true">Register</a>

                    </div>
                </nav>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body pb-0">

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-login" role="tabpanel"
                        aria-labelledby="nav-login-tab">
                        <form class="signinform ui form cs-validation">
                            <div class="form-group field">
                                <label>Email / Username</label>
                                <input name="email" type="text" class="form-control">
                            </div>

                            <div class="form-group field">
                                <label>Password</label>
                                <div class="input-group">
                                    <input name="password" type="password" class="form-control">
                                    <button type="button" class="btn-like-a psw-show-btn hide-psw"><i
                                            class="fa fa-eye-slash"></i></button>
                                </div>

                            </div>

                            <div class="form-group">
                                <a data-toggle="modal" data-dismiss="modal" data-target="#forgot_psw_Modal" href=""
                                    class="text-orange forgot-psw">Forgot Password? </a>
                            </div>

                            <div class="response-text success text-center mb-3 py-2">
                                <p><i class="fa fa-check-circle mr-2"></i>Login Success !</p>
                            </div>

                            <div class="response-text error text-center mb-3 py-2">
                                <p><i class="fa fa-exclamation-circle mr-2"></i>Invalid Credential !</p>
                            </div>

                            <div class="form-group mb-0">
                                <button class="loginbtn w-100 ui submit button mb-3"><i
                                        class="fa fa-spin fa-spinner mr-1"></i> Log In</button>
                                <button class="guest-loginbtn border-radius-none w-100 ui submit button"><i
                                        class="fa fa-spin fa-spinner mr-1"></i> Guest Login</button>
                            </div>
                        </form>

                    </div>
                    <div class="tab-pane fade " id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">
                        <form class="signinform ui form cs-validation">
                            <div class="form-group field">
                                <label>Full Name</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class="form-group field">
                                <label>Email</label>
                                <input name="email" type="email" class="form-control">

                            </div>

                            <div class="form-group field">
                                <label>Password</label>
                                <div class="input-group">
                                    <input name="password" type="password" class="form-control">
                                    <button type="button" class="btn-like-a psw-show-btn hide-psw"><i
                                            class="fa fa-eye-slash"></i></button>
                                </div>
                            </div>

                            <div class="form-group field">
                                <label>Retype Password</label>
                                <div class="input-group">
                                    <input name="password" type="password" class="form-control">
                                    <button type="button" class="btn-like-a psw-show-btn hide-psw"><i
                                            class="fa fa-eye-slash"></i></button>
                                </div>

                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="subscribe_checkbox">
                                <label class="custom-control-label text-capitalize cursor-pointer"
                                    for="subscribe_checkbox"> Subscribe to newsletters & offers </label>
                            </div>
                            <div class="response-text success text-center mb-3 py-2">
                                <p><i class="fa fa-check-circle mr-2"></i>Registration Successful !</p>
                            </div>
                            <div class="form-group">
                                <button class="loginbtn ui submit w-100"><i class="fa fa-spin fa-spinner me-1"></i>
                                    Register</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" data-backdrop="static" id="forgot_psw_Modal" tabindex="-1"
    aria-labelledby="forgot_psw_ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header justify-content-center ">
                <p class="header-general-sm text-orange">Forgot Password</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forgot-psw-form" action="#">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="loginbtn w-100">Send Password Reset Mail</button>
                    </div>
                </form>
                <a class="mt-2 float-right theme-color login_back" data-toggle="modal" data-dismiss="modal"
                    data-target="#user_login_Modal" href=""><i class="fa fa-arrow-left me-2"></i> Back To Login</a>
            </div>
        </div>
    </div>
</div>
