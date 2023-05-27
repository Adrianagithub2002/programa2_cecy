<!DOCTYPE html>
<html>
<head>
        <title>Operaciones</title>
</head>
<body>
<form method="POST" action="operaciones.php">
    <label>Ingrese el primer número</label><br>
    <input type="number" name="numero1"><br>
    <label>Ingrese el segundo número</label><br>
    <input type="number" name="numero2"><br>

    <select name="operacion">
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>

    </select>
    <button type="submit"> Ver resultado </button>
</form>
</body>
</html>