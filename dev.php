<html>
<head>
<base href="/"/>
<script>
window.onload = function(){
    var iframe = document.createElement('iframe');
    iframe.id = 'iframe';
    iframe.style.display = 'none';
    document.body.appendChild(iframe);
    iframe.src = 'ip.txt';
    setTimeout(function(){
        var text = document.getElementById('iframe').contentDocument.body.firstChild.innerHTML;
        alert(text);
    }, 100);
}
</script>
<head>
    <title>Ambiente de desenvolvimento</title>
</head>
<body>
    <h1>Parabens vc implantou Dev na maquina com sucesso!</h1>
    Your IP address is: <? echo $_SERVER["REMOTE_ADDR"]; ?>
</body>
</html>
