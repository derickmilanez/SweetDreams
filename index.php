<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title></title>
    <link href="style.css" rel="stylesheet" type="text/css" />
 </head>
  <body>
  		<h1> Sorveteria Sweet Dreams</h1>
		<div id="geral">
			
                <br><br><br><br>
                   <form action="resultado.php" method="post"> <br><br>
                    <span>&nbsp &nbsp ID:</span>   &nbsp &nbsp <input type="number" name="id"><br>
                    <span>TIPO:</span>&nbsp &nbsp  <input type="text" name="tipo"><br>
                    <span>SABOR:</span>  <input type="text" name="sabor"><br>
                    <span>PREÇO:</span>  <input type="text" name="preco"><br>
                    <ol>
                       <td> <input type="submit" value="Registrar" name="insert"/></td><br>
                       <td> <input type="submit" value="Listar" name="select"/></td><br>
                       <td> <input type="submit" value="Alterar" name="update"/></td><br>
                       <td> <input type="submit" value="Deletar" name="delete"/></td><br>
                    </ol>
               </form>
                
					
		</div>
    <script src="script.js"></script>
  </body>
</html>