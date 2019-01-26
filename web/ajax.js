    function sendCar(str) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "func.php?c=" + str, true);
        xmlhttp.send();
    }