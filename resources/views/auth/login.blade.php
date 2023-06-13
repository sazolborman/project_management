<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

<body>
  <div class="container-fluid h-100">
    <div class="row h-100">
      <div class="col-lg-6 d-none d-lg-block p-0 h-100">
        <div class="bg-image"
          style="width: inherit; height: 100%; position: fixed; background-image: url('{{asset('/images/login.png')}}'); background-size: cover; background-position: center;">
        </div>
        <!-- <img src="assets/images/login.png" width="100%"> -->
      </div>
      <div class="col-lg-6 p-0 h-100 position-relative">
        <div class="parent-elem">
          <div class="middle-elem">
            <div class="primary-form">
              <div class="form-logo">
                <img src="{{asset('/images/logo-login.png')}}">
              </div>
              <div class="form-btn">
                <a href="{{ route('login') }}" class="login-btn">Login</a>
                <a href="#" class="signup-btn">Sign Up</a>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="subtitle">
                    <p>See your growth and get consulting support!</p>
                  </div>
                  <div class="signin-diff">
                    <a href="#" class="signin-diff-btn signin-diff-btn1">
                      <i class="bi bi-facebook"></i>
                      Sign in with Facebook
                    </a>
                    <a href="#" class="signin-diff-btn signin-diff-btn2">
                      <i class="bi bi-google"></i>
                      Sign in with Google
                    </a>
                  </div>
                  <span class="signup-seperate">or</span>
                </div>
                <div class="col-12">
                  <div class="login-form">
                    <form method="post" action="{{ route('login') }}">
                        @csrf
                      <div class="form-row">
                        <div class="form-group">
                          <label for="email" class="form-label" >Email</label>
                          <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <!-- <input type="email" name="email" class="form-control" id="email"
                              placeholder="Your email address"> -->
                              <input class="form-control" id="email"  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                          </div>
                          <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="form-group">
                          <label for="password" class="form-label">Password</label>
                          <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <!-- <input type="password" name="password" class="form-control" id="password"
                              placeholder="6+ Strong character"> -->
                            <input id="password" class="form-control"
                              type="password"
                              name="password"
                            required autocomplete="current-password" />
                            <span class="input-group-text pe-18px ps-8px cursor-pointer"><i
                                class="bi bi-eye-slash"></i></span>
                          </div>
                           <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="form-group">
                          <div class="w-100">
                            <input type="checkbox" id="rememberMe">
                            <label class="cursor-pointer" for="rememberMe">Remember me</label>
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="float-end">Forgot password?</a>
                            @endif
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Main Jquery-->
  <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
  <!--Bootstrap bundle with popper-->
  <script src="assets/vendors/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>

  <!--Custom Script-->
  <script src="assets/js/script.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>
</x-guest-layout>