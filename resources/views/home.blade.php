<html>
<title>
    Exámen
</title>
<head></head>
<body>

    <form action="calculo" method="post">
        {{csrf_field()}}
        Dividiendo: <input type="text" name="dividiendo">
        <br><br>
        Divisor: <input type="text" name="divisor">
        <br><br>
        <button type="submit">Enviar</button>

    </form>

</body>
</html>