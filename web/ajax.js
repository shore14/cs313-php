<script type="txt/javascript">
    function sendCar(str) {
        Var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "func.php?c=" + str, true);
        xmlhttp.send();
    }
</script>