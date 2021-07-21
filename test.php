<?php
session_start();
?>

<!DOCTYPE html>
<html>

<body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <p id="p1">
        {
        "data":[
        {"session_token":"<?php echo $_COOKIE["PHPSESSID"]; ?>"},
        {"user_name":"<?php echo $_SESSION["name"]; ?>"}
        ]
        }
    </p>
    <button onclick="copyToClipboard('#p1')">Copy Session ID</button>

</body>

</html>

<script>
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).html()).select();
        document.execCommand("copy");
        $temp.remove();
    }
</script>