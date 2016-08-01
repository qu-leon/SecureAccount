$(document).ready(function() {
    $("#login").click(function () {//wait for button click to happen
        var name = $("input[name='name']");//values of username
        var password = $("input[name='passwd']");//values of password
        var nameValue = name.val();
        var passwordValue = password.val();
        var nameArray = [];
        var passArray = [];
        var infoArray = [];
        var valid;
        //currentUser = 999;


        var postname = nameValue;//set input value of username
        var postpass = passwordValue;//set input value of password
        $.post('loginVerify.php',{postname:nameValue, postpass:passwordValue},//send the values to php file
            function(data){

                console.log(data);

                if(data == 99999) {
                    window.location.assign("invalidUser.html")
                }
                else {
                    window.location.assign("firstContent.php")
                }

            });

    })

});