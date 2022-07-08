<!DOCTYPE html>
<html lang="pt-br">
<head>
        <title>Listagem de Jogos</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="estilos/estilo.css"/>
        
        
</head>
<body>
        <?php
                require_once "includes/banco.php";
                require_once "includes/funcoes.php";
        ?>
        <div id="corpo">
                <h1>Escolha seu Jogo </h1>
                <table class="listagem" >
                        <?php
                        $busca = $banco->query("select * from jogos order by nome");
                        if(!$busca){
                                echo"<tr><td>Infelizmente a busca deu errado</p>";
                        }else {
                                if ($busca->num_rows == 0){
                                        echo"<tr><td>Nenhum Regitro encontrado</p>";      
                                } else {
                                        while($reg=$busca->fetch_object()){
                                             $t = thumb($reg->capa);
                                             echo"<tr><td><img src='$t' class='mini'/><td>$reg->nome";
                                             echo"<td>Adm";   
                                        }
                                }
                        }
                        ?>
                        
                </table>
        </div>
        <?php $banco->close();?>
</body>
</html>