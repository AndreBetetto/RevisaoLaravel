<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br><br>
    <center>
        <h3>Dados inseridos: </h3>
        <table border=1>
            <tr>
                <td align="center"> Comida </td>
                <td align="center"> Tipo </td>
                <td align="center"> Preço </td>
                <td align="center"> Descrição </td>
            </tr>
<br>
            <tr>
                <td align="center"> {{$_POST['name']}} </td>
                <td align="center"> {{$_POST['category']}} </td>
                <td align="center"> {{$_POST['price']}} </td>
                <td align="center"> {{$_POST['description']}} </td>
            </tr>

        </table>
    </center>

</body>

</html>