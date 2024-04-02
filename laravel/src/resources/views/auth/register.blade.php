<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <h3 style="text-align: center;"><b>Sign up</b></h3>
                    <div style="text-align: center;">Already a member? <a href="#" data-bs-toggle="modal"
                            data-bs-target="#loginModal" class="btn2">Log in</a></div>
                    <hr>
                    <br>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    <i class="fas fa-minus-circle alert__icon"></i> {{ $error }}
                                </div>
                            @endforeach
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                <i class="fas fa-check-circle alert__icon"></i> {{ session('success') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="meno">First Name</label>
                            <input class="input_form" id="meno" type="text" name="meno"
                                value="{{ old('meno') }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="priezvisko">Last Name</label>
                            <input class="input_form" id="priezvisko" type="text" name="priezvisko"
                                value="{{ old('priezvisko') }}" required>
                        </div>

                        <label for="email">Email address</label>
                        <input class="input_form" id="email" type="email" name="email"
                            value="{{ old('email') }}" required>

                        <label for="password">Password</label>
                        <input class="input_form" id="password" type="password" name="password" required>

                        <label for="password_confirmation">Password confirmation</label>
                        <input class="input_form" id="password_confirmation" type="password"
                            name="password_confirmation" required>

                        <button type="submit" class="mainButton">Sign up</button>

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
