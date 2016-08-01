$(document).ready(function(){
    $("#verify").click(function () {//wait for button click to happen
        $("#errors").empty();
        $("input[name='passwd2']").removeClass("red");
        $("input[name='passwd']").removeClass("red");
        $("input[name='name']").removeClass("red");
        var name = $("input[name='name']");
        var password = $("input[name='passwd']");
        var password2 = $("input[name='passwd2']");//grabs the input object whos name is phone_number
        var nameValue = name.val();
        var passwordValue = password.val();//grabs value from the input object and puts it in phone_number
        var passwordValue2 = password2.val();

        var match = passwordValue.match(/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}/i);
        console.log(match + " : match value");

        //variables to send to php
        var postname = nameValue;
        var postpass = passwordValue;

        var availability = 0;



        if(passwordValue == passwordValue2) {


            $("input[name='passwd2']").removeClass("red");
            $("input[name='passwd']").removeClass("red");
            $("input[name='name']").removeClass("red");
            if(match != null) {

                //CHECK FOR USER NAME AVAILABILITY HERE
                $.post('unameAvailability.php',{postname:nameValue},
                    function(data){
                        console.log(data + " : 0 if available, 1 if taken");
                        if(data == 0) {
                            //ADD DATA TO FILE HERE
                            $.post('validate.php',{postname:nameValue, postpass:passwordValue},
                                function(data){
                                });
                            window.location.assign("confirmPage.html")
                        }
                        else {
                            $("input[name='name']").addClass("red");
                            $("#errors").append("user name is already taken",'');
                        }
                    });


            }
            else {
                $("input[name='passwd']").addClass("red");
                $("input[name='passwd2']").addClass("red");
                $("#errors").append("passwords must contain one lowercase letter, one upper case letter, one number, and be 8-12 chars",'');
            }
        }
        else {
            $("input[name='passwd']").removeClass("red");
            $("input[name='passwd2']").addClass("red");
            $("#errors").append("passwords are not the same",'');
        }
    });
});
