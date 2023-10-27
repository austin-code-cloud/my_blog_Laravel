@include('partials.authHeader')
<div class="members-page-wrap responsive-header-img">
    <div class="members-content-wrap">
        <div class="sign-card text-center">
            <div class="header-logo logo-wrap">
                <a href="/" class="logo-image theme-light-logo">
                    <img src="{{ asset('assets/content/images/2023/08/logo-dark.svg') }}" alt="Porto">
                </a>
                <a href="../index.html" class="logo-image theme-dark-logo">
                    <img src="{{ asset('assets/content/images/2023/08/logo-light.svg') }}" alt="Porto">
                </a>
            </div>
            <h1 class="post-title text-center">
                Sign up
            </h1>
            <div class="description text-center">
                Get access to members only content.
            </div>
            <form class="members-form text-left" data-members-form="signup" autocomplete="off"
                action="{{ route('signup') }}" method="POST">
                @csrf
                <div class="members-form-box">
                    <div class="form-field-wrap">
                        <label for="name" class="sr-only">Your name</label>
                        <input data-members-name="" name="username" type="text" class="name form-field"
                            id="name" placeholder="Your name" required="" autocomplete="off">
                        <label for="email" class="sr-only">Email</label>
                        <input data-members-email="" name="email" type="email" class="email form-field"
                            id="email" placeholder="Your email address" required="" autocomplete="off">
                        <label for="password" class="sr-only">Email</label>
                        <input data-members-email="" name="password" type="text" class="email form-field"
                            id="email" placeholder="Your password" required="" autocomplete="off">
                        <button class="btn btn-block form-field"><span>Submit</span></button>
                    </div>
                </div>
                <div class="message-container">
                    <div class="notification success form-notification">
                        <a class="notification-close" href="javascript:;" aria-label="close notification"><span
                                class="close-icon"><svg>
                                    <use xlink:href="#i-close" />
                                </svg></span></a>
                        <strong>Great!</strong> Check your inbox and click the link to confirm your subscription</span>
                    </div>
                    <div class="notification error form-notification">
                        <a class="notification-close" href="javascript:;" aria-label="close notification"><span
                                class="close-icon"><svg>
                                    <use xlink:href="#i-close" />
                                </svg></span></a>
                        <strong>Error!</strong> Sorry, something went wrong. Please try again.
                    </div>

                </div>
            </form>
            <div class="alternate-option text-center">
                Already have an account? <a href="{{ route('signin') }}">Sign in</a>
            </div>
        </div>
    </div>
</div>
@include('partials.authFooter')
