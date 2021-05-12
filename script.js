$(document).ready(function(){
    $(window).bind("resize", resizeWindow);
    function resizeWindow(e){
        var newWindowWidth = $(window).width();
        // Если ширина меньше 600 px, используется таблица стилей для мобильного
        // if(newWindowWidth < 1250){
        //     // $("link[rel=stylesheet]").attr({href : "mobile.css"});
        //     var a1 =  document.getElementById("louwithraight");
        //     a1.style.display = "none";
        //     var b1 =  document.getElementById("louwithleft");
        //     b1.style.display = "none";
        //     var c1 =  document.getElementById("about1");
        //     c1.style.display = "none";
        //     var s1 =  document.getElementById("about2");
        //     s1.style.display = "none";
        //     var g1 =  document.getElementById("about3");
        //     g1.style.display = "none";
        // } else if(newWindowWidth > 1250){
        //     // Если ширина больше 600 px, используется таблица стилей для десктопа
        //     // $("link[rel=stylesheet]").attr({href : "style.css"});
        //     var a =  document.getElementById("louwithraight");
        //     a.style.display = "block";
        //     var b =  document.getElementById("louwithleft");
        //     b.style.display = "block";
        //     var c =  document.getElementById("about1");
        //     c.style.display = "block";
        //     var s =  document.getElementById("about2");
        //     s.style.display = "block";
        //     var g =  document.getElementById("about3");
        //     g.style.display = "block";
        // }
    }

    // function gamee() {
    //     var chbox;
    //     chbox=document.getElementById('game');
    //     if (chbox.checked) {
    //         var a =  document.getElementById("delgame");
    //         a.style.display = "block";
    //     }
    //     else {
    //         var obj= document.getElementById("delgame");
    //         obj.style.display = "none"
    //     }
    // }
    //
    //
    // // var one = $('#one').val();
    // // alert(one);
    // // if (one === "on"){
    // //     alert("one");
    // // }
    // // else {
    // //     alert("no one");
    // // }



    function delete_cookie ( cookie_name )
    {
        var cookie_date = new Date ( );  // Текущая дата и время
        cookie_date.setTime ( cookie_date.getTime() - 1 );
        document.cookie = cookie_name += "=; expires=" + cookie_date.toGMTString();
    }

    function getCookie(name) {
        // Split cookie string and get all individual name=value pairs in an array
        var cookieArr = document.cookie.split(";");

        // Loop through the array elements
        for(var i = 0; i < cookieArr.length; i++) {
            var cookiePair = cookieArr[i].split("=");

            /* Removing whitespace at the beginning of the cookie name
            and compare it with the given string */
            if(name == cookiePair[0].trim()) {
                // Decode the cookie value and return
                return decodeURIComponent(cookiePair[1]);
            }
        }

        // Return null if not found
        return null;
    }


    var firstName = getCookie("user");
    // var x = document.cookie;
    // x = x.replace("user=","")
    document.getElementById("x").innerHTML = firstName;
    if(firstName !== "" && firstName != null){
        var elem = document.getElementById("in");
        elem.remove();
        var elem = document.getElementById("reg");
        elem.remove();
    }else {
        var elem = document.getElementById("out");
        elem.remove();
        var elem = document.getElementById("us_name");
        elem.remove();
    }



});
