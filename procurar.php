<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "base_dados";

    $conn = mysqli_connect($host, $user,$pass, $db);

    $palavras = $_POST['palavra'];

    //Query no banco
    $clientes = "SELECT * FROM tb_clientes WHERE Razao_social LIKE '%$palavras%'";
    $resultado = mysqli_query($conn, $clientes);

    if($conn){
        if(mysqli_num_rows($resultado) <= 0){
            echo "Nenhum cliente encontrado...";
        }else{
            while($linha = mysqli_fetch_assoc($resultado)){
                echo "<li>" . $linha['Razao_social'] ."</li>";
            }
        }
    }

?>