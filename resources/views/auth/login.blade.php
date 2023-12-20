@include('ticketHub.include.header')

<!-- Main Content -->
<main id="rlr-main" class="">
    <div class="">
        <section class="rlr-section rlr-section__mt rlr-account">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4">
                      
                         <form method="POST" class="rlr-authforms" action="{{ route('login') }}">
                            @csrf
                            <div class="rlr-authforms__header">
                                <h2>Log in </h2>
                                <p>Welcome back! Please enter login details.</p>
                            </div>
                            <div class="rlr-authforms__form">
                                <div class="rlr-authforms__inputgroup"><label
                                        class="rlr-form-label rlr-form-label--light required"> Email </label> <input
                                        type="email" name="email" autocomplete="off" class="form-control form-control--light" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="rlr-authforms__inputgroup"><label
                                        class="rlr-form-label rlr-form-label--light required"> Password </label> <input
                                        type="password" name="password" autocomplete="off" class="form-control form-control--light" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="rlr-authforms__forgotpassword">
                                    <div class="form-check-inline">
                                        <input class="form-check-input rlr-form-check-input" id="rlr-checkbox-1"
                                            type="checkbox" value="defaultValue" />
                                        <label
                                            class="rlr-form-label rlr-form-label--checkbox rlr-form-label--font-inherit rlr-form-label--bold"
                                            for="rlr-checkbox-1">Remember me on this device</label>
                                    </div>
                                    <a href="account-pages--forgot-password">Forgot password</a>
                                </div>
                                <button type="submit"
                                    class="btn mb-3 rlr-button rlr-button--fullwidth rlr-button--primary">Sign
                                    in</button>
                               
                            </div>
                            <div class="rlr-authforms__notes">
                                <p>Don’t have an account? <a href="/register">Sign up</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<!-- Footer -->

<!-- Scripts -->
<script src="./vendors/navx/js/navigation.min.js" defer></script>
<script src="./js/main.js" defer></script>
</body>

</html>
