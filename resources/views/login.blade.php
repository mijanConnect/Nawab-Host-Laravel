<x-master title="Login">
<!--=========================-->
<!--=        Login         =-->
<!--=========================-->
<section class="login">
    <div class="row g-0">
        <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="login__side-header">
                <div class="login__overlay"></div>
                <div class="login__site-header-container">
                    <div class="login__side-header-logo">
                        <a href="{{ route('home') }}">
                            <img src="media/login-form/logo-white.svg" alt="Logo">
                        </a>
                    </div>
                    <div class="login__side-header-content">
                        <h3 class="login__side-header-heading">Join Our Community</h3>
                        <p class="login__side-header-description">Hosting plans dolor sit amet consectetur
                            adipisicing elitsed do eiusmod incididunt ut labore etdolore magna aliqua. Ut enim ad
                            minim
                            veniam.</p>
                    </div>
                    <div class="login__side-header-bottom">
                        <div class="login__side-header-bottom-content">
                            <p class="login__side-header-copyright">
                                <span>© 2022 Nawabhost</span> - All Rights Reserved
                            </p>
                            <a href="#" class="login__side-header-terms-condition">Terms & Conditions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="login__form">
                <div class="login__form-container">
                    <a href="{{ route('home') }}">
                        <img src="media/login-form/logo.svg" class="login__mobile-logo" alt="Logo">
                    </a>
                    <h3 class="login__form-header">Login</h3>
                    <form>
                        <div class="mb-3 login__form-username">
                            <label for="exampleInputEmail1" class="form-label">User Name</label>
                            <input type="email" class="form-control login__form-username-input"
                                id="exampleInputEmail1" placeholder="Your User Name">
                        </div>
                        <div class="mb-3 login__form-password">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control login__form-password-input"
                                id="exampleInputPassword1" placeholder="Your Password">
                        </div>
                        <button type="submit" class="login__form-btn">Login</button>
                        <div class="login__forgot-password">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input login__form-check"
                                    id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                            </div>
                            <a href="" class="login__forgot-btn">Forgot Password?</a>
                        </div>
                    </form>

                    <div class="login__form-bottom">
                        <div class="login__text-area">
                            <div class="login__left-line"></div>
                            <h4 class="login__text">Or Login With</h4>
                            <div class="login__right-line"></div>
                        </div>
                        <div class="login__social-icon">
                            <a href="#" class="login__facebook-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="login__twitter-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="login__linkedin-icon"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="login__register-content">
                            <p>Not a menber? <span><a href="{{ route('signup') }}"
                                        class="login__register-btn">Register</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</x-master>