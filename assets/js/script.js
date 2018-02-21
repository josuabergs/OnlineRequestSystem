$(document).ready(function() {

    $("#login-form").submit(function(e) {
        e.preventDefault();
        var username = $("#username").val();
        var password = $("#password").val();

        if(username == "" || password == "") {
            swal("Blank username or password", "Please re-enter", "error");
        } else {
            var toDb = {
                username: username,
                password: password
            };

            $.ajax({
                data: toDb,
                url: "app/auth.php",
                type: "POST",
                success: function(response) {
                    if (response == "1") {
                        window.location = "index";
                    } else {
                        swal("Wrong username or password", "Please re-enter", "error");

                        
                    }
                }
            });
        }
    });
});