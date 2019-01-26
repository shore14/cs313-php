<script type="txt/javascript">
    function sendCar(str) {
        var xmlhttp = new XMLHttpRequest();
        // xmlhttp.onreadystatechange = function(){

        // };
        xmlhttp.open("GET", "func.php?c=" + str, true);
        xmlhttp.send();
    }
</script>