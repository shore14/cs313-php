    function sendCar(str) {
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.open("GET", "https://thawing-mountain-44844.herokuapp.com/func.php?c=" + str, true);
        xmlhttp.send();
    }