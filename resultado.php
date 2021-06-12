<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title></title>
    <link href="style.css" rel="stylesheet" type="text/css" />
 </head>
  <body>
          <h1> Nota Fiscal Sweet Dreams</h1>
          <div id="geral">
            <?php
                $hostname = "localhost";
                $username = "id11052355_sorveteria";
                $password = "123456789";
                $database = "id11052355_sorveteriadreams";
                $id   = $_POST["id"];
                $tipo = $_POST["tipo"];
                $sabor = $_POST["sabor"];
                $preco = $_POST["preco"];
                try {
                $conn = mysqli_connect($hostname,$username,$password,$database);
                } catch (Exception $e)
                {
                    echo "Não foi possível se conectar ao banco de dados.";
                }
                if(isset($_POST["insert"]))
                {
                $sql = "insert into sorveteria values ($id,'$tipo','$sabor','$preco')";
                mysqli_query($conn,$sql);
                echo "<center>
                <h1> DADOS REGISTRADOS. </h1>
                </center>";
                }
                else if(isset($_POST["select"]))
                {
                    $sql = "select * from sorveteria";
                    $result = mysqli_query($conn,$sql);
                    while ($row=mysqli_fetch_assoc($result))
                    {
                        echo $row["ID"]." - ".$row["Tipo"]." - ".$row["Sabor"]." - ".$row["Preço"]."<br>";
                    }
                }
                else if(isset($_POST["update"]))
                {
                    $sql = "update sorveteria set Tipo='$tipo', Sabor='$sabor', Preço='$preco' where ID=$id";
                    mysqli_query($conn,$sql);
                    echo "<center>
                <h1> DADOS ATUALIZADOS. </h1>
                </center>";
                }
                else if(isset($_POST["delete"]))
                {
                    $sql = "delete from sorveteria where ID=$id";
                    mysqli_query($conn,$sql);
                    echo "<center>
                <h1> DADOS DELETADOS!. </h1>
                </center>";
                }
                mysqli_close($conn);
            ?>
          </div>
		
					
		
    <script src="script.js"></script>
  </body>
</html>