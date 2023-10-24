@include('partials.authHeader')
<div class="members-page-wrap responsive-header-img">
    <div class="members-content-wrap">
        <div class="sign-card text-center">
        <div class="header-logo logo-wrap">
            <a href="/" class="logo-image theme-light-logo">
    <img src="{{asset('assets/content/images/2023/08/logo-dark.svg')}}" alt="Porto">
</a>
<a href="/" class="logo-image theme-dark-logo">
    <img src="{{asset('assetscontent/images/2023/08/logo-light.svg')}}" alt="Porto">
</a>
        </div>
        <h1 class="post-title text-center h3">
            Sign in
        </h1>
        <div class="description text-center">
            Sign into your account for full access
        </div>
        <form class="members-form text-left" data-members-form="signin" autocomplete="off">
            <div class="members-form-box">
                <div class="form-field-wrap">
                    <label for="email" class="sr-only">Email</label>
                    <input data-members-email="" type="email" class="email form-field" id="email" placeholder="Your email address" required="" autocomplete="off">
                    <button class="btn btn-block form-field" type="submit" name="submit"><span>Send login link</span></button>
                </div>
            </div>
            <div class="message-container">
                <div class="notification success form-notification">
                    <a class="notification-close" href="javascript:;" aria-label="close notification"><span class="close-icon"><svg><use xlink:href="#i-close"/></svg></span></a>
                    <strong>Great!</strong>  Check your inbox and click the link to complete sign in.</span>
                </div>
                <div class="notification error form-notification">
                    <a class="notification-close" href="javascript:;" aria-label="close notification"><span class="close-icon"><svg><use xlink:href="#i-close"/></svg></span></a>
                    <strong>Error!</strong> Sorry, something went wrong. Please try again.
                </div>
                
            </div>
        </form>
        <div class="alternate-option text-center">
            Don&#x27;t have an account yet? <a href="../signup/index.html">Sign up</a>
        </div>
        </div>
    </div>
</div>
@include('partials.authFooter')