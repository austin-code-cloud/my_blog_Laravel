@include('partials.authHeader')
<div class="members-page-wrap responsive-header-img">
    <div class="members-content-wrap">
        <div class="sign-card text-center">
            <div class="header-logo logo-wrap">
                <a href="/" class="logo-image theme-light-logo">
                    <img src="{{ asset('assets/content/images/2023/08/logo-dark.svg') }}" alt="Porto">
                </a>
                <a href="/" class="logo-image theme-dark-logo">
                    <img src="{{ asset('assetscontent/images/2023/08/logo-light.svg') }}" alt="Porto">
                </a>
            </div>
            <h1 class="post-title text-center h3">
                Sign in
            </h1>
            <div class="description text-center">
                Sign into your account for full access
            </div>
            <form class="members-form text-left" data-members-form="signin" autocomplete="off"
                action="{{ route('signin') }}" method="POST">
                @if (Session::has('success'))
                    <div>{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('failure'))
                    <div>{{ Session::get('failure') }}</div>
                @endif
                @csrf
                <div class="members-form-box">
                    <div class="form-field-wrap">
                        <label for="email" class="sr-only">Email</label>
                        <input data-members-email="" name="email" type="email" class="email form-field"
                            value="{{ old('email') }}" id="email" placeholder="Your email address" required=""
                            autocomplete="off">
                        <span>
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                        <label for="password" class="sr-only">Password</label>
                        <input data-members-email="" name="password" type="password" class="email form-field"
                            value="{{ old('password') }}" id="email" placeholder="Your Password" required=""
                            autocomplete="off">
                        <span>
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                        <button class="btn btn-block form-field"><span>Login</span></button>
                    </div>
                </div>

            </form>
            <div class="alternate-option text-center">
                Don&#x27;t have an account yet? <a href="{{ route('signup') }}">Sign up</a>
            </div>
        </div>
    </div>
</div>
@include('partials.authFooter')
