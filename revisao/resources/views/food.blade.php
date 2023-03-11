<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão</title>
</head>

<body>
    <center>
        <h3>Insira dos dados sobre uma determinada comida:</h3>
        <br>
        <form method="POST" action="/routefood">
            {{ csrf_field() }}
            <input type="text" name="name" placeholder="Nome">
            <select name="category">
                <option value="1">Entrada</option>
                <option value="2">Prato principal</option>
                <option value="3">Sobremesa</option>
            </select>
            <input type="text" name="price" placeholder="Preço">
            <input type="text" name="description" placeholder="Descrição">
            <input type="submit" value="Cadastrar">
        </form>
    </center>
   
</body>

</html>