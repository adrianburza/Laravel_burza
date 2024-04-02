<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <h3 style="text-align: center;"><b>Log in</b></h3>
                    <div style="text-align: center;">Not a member? <a href="#" data-bs-toggle="modal"
                            data-bs-target="#registerModal" class="btn2">Sign up</a></div>
                    <hr>
                    <br>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                <div style="padding: 10px; margin-bottom: 10px; color: rgb(169, 68, 66);">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="triangle-exclamation"
                                        class="svg-inline--fa fa-triangle-exclamation fa-w-16" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        style="color: rgb(169, 68, 66); width: 16px; height: 16px;">
                                        <path fill="currentColor"
                                            d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z">
                                        </path>
                                    </svg>
                                    {{ session('error') }}
                                </div>
                            </div>
                        @endif


                        <label for="email">Email address</label>
                        <input class="input_form" id="email" type="email" name="email"
                            value="{{ old('email') }}" required autofocus>

                        <label for="password">Password</label>
                        <input class="input_form" id="password" type="password" name="password" required>

                        <div class="reset"><a href="aut/reset" class="btn2">Forgot password</a></div>

                        <button type="submit" class="mainButton">Log in</button>

                        <div class="text1"><span class="sc-bczRLJ kRzaZt"><span>By creating an account, you're agreeing
                                    with our <a href="/pages/terms" target="_blank" class="btn1"><br>Terms of Use</a>
                                    and <a href="/pages/privacy" target="_blank" class="btn1">Privacy
                                        Policy</a></span></span></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
