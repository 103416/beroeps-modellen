<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
</head>
<body>

<div id="qrcode"></div>

<script>
    const urlWithGet = "https://zekerniels.nl";
    new QRCode(document.getElementById("qrcode"), {
        text: urlWithGet,
        width: 30,
        height: 30
    });
</script>

</body>
</html>

