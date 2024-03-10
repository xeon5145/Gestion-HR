<div class="container-fluid">
    <div class="row">

        <!-- logo div -->
        <div class="col-6">
            <div class="row primary-background">
                <div class="col-md-12 py-5 text-center" style="transform: scale(0.5);">
                    <img src="<?php echo base_url('assets/images/Gestin-HR-main.png'); ?>" style="border: 5px solid #ffffff;" />
                </div>
            </div>
        </div>
        <!-- logo div -->

        <!-- login div -->
        <div class="col-6 m-auto">
            <div class="">
                <p class="display-6 text-center mt-2">Login</p>
                <div class="w-50 m-auto" id="loginForm">
                    <input class="form-control mt-5 ct-input" type="text" id="username" placeholder="Username / Email">
                    <input class="form-control mt-4 ct-input" type="password" id="password" placeholder="Password">

                    <div class="mt-3">
                        <a class="link" href="#">Forgot password</a><br>
                        <a class="link" href="#">Signup</a>
                    </div>

                    <div class="text-center mt-5">
                        <button class="btn btn-primary py-2 px-4" id="login" disabled>Login</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- login div -->

    </div>
</div>

<script>
    $(document).ready(function() {

        // form validation
        $('#username, #password').keydown(function(event) {
            var username = $('#username').val().trim();
            var password = $('#password').val().trim();

            if (username.length > 0 && password.length > 0) {
                $('#login').prop('disabled', false);
            } else {
                $('#login').prop('disabled', true);
            }

        });
        // form validation

        // form submission
        $('#login').click(function(event) {
            var username = $('#username').val().trim();
            var password = $('#password').val().trim();

            // ajax code here
            $.ajax({
                url: '<?= base_url("login"); ?>',
                method: 'POST',
                data: {
                    'user': username,
                    'password': password
                },
                success: function(response) {
                    console.log(response);
                    // Handle success response here
                },
                error: function(xhr, status, error) {
                    console.error("AJAX request failed:", status, error);
                    // Handle error here
                }
            });

            // ajax code here
        });

        // form submission 
    })
</script>