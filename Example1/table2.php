<html>
<head>
    <title> Formulario</title>
</head>
    <body>
        <form action="table2.php" method="POST">
            <center>
                <label> Ingresar numero </label></br>
                <input trype="number" name="num"></br></br>
                <button> Generar Numero </button></br></br>
            </center>   
            <table border="1" align="center">
                <tr><th> number list </th></tr>
                <?php
                $n= $_POST['num'] ?? 0;
                    for($i=1;$i<=$n;$i++){
                        if($i%2==0){
                            echo"<tr><td align='center'><font color='blue'>".$i."</font></td></tr>";
                        }else{
                            echo"<tr><td align='center'><font color='red'>".$i."</font></td></tr>";
                        }
                    }
                ?>
            </table>
        </form>
    </body>
</html>