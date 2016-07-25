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


        //CHECKING AGAINST JSON FILES FOR LOGINS
        /**$.get('Account.json', '', function (data) {//get the json file
            console.log(data);
            var arr = data['AccountInfo'];//take out Quote object from data in the file
            var len = arr.length;//get length number of elements in the quote object
            console.log("number of things in array: " + len);            //(number of people)
            for (var i = 0; i < len; i++) {//for each person in the json object
                var line = arr[i]['Name'];//take the name attribute from each element
                var lineM = arr[i]['pass'];
                var line2 = arr[i]['info'];
                // console.log(line);
                // console.log(lineM);
                // console.log(line2);
                nameArray[i] = line;
                passArray[i] = lineM;
                infoArray[i] = line2;
            }
            for ( var i = 0; i < len; i++) {
                if (nameArray[i] == nameValue && passArray[i] == passwordValue) {
                    currentUser = i;
                }
            }
            if(currentUser == 999) {
                window.location.assign("invalidUser.html")
            }
            else {
                window.location.assign("firstContent.php")
            }
        });*/

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