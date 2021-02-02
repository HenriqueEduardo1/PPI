<?php
    $usuarios = [];

    $usuarios[] = ["Marcelo Figueiredo Barbosa Júnior", 31, "Professor"];
    $usuarios[] = ["Ana Alice Galdino Cavalcante", 20, "Alunx"];
    $usuarios[] = ["Clemerson Lucas de Oliveira Campelo", 16, "Alunx"];
    $usuarios[] = ["Bruna Kevenlly Pontes Soares", 16, "Alunx"];
    $usuarios[] = ["Caio César Penha Dantas", 16, "Alunx"];
    $usuarios[] = ["Fernanda Emily Souza do Nascimento", 16, "Alunx"];
    $usuarios[] = ["Douglas Gabriel da Silva Araujo", 21, "Calourx"];
    $usuarios[] = ["Fernanda Soares Fernandes", 16, "Alunx"];
    $usuarios[] = ["Francisco Eduardo do Nascimento", 16, "Alunx"];
    $usuarios[] = ["Késia Thaise Viana Vicente", 16, "Alunx"];
    $usuarios[] = ["Guilherme Augusto Araújo de Andrade", 17, "Alunx"];
    $usuarios[] = ["Lívia Cristina de Lima Rafael", 16, "Alunx"];
    $usuarios[] = ["Henrique Eduardo Costa da Silva", 19, "Lindx"];
    $usuarios[] = ["Luma Deiziane Lopes da Silva", 16, "Alunx"];
    $usuarios[] = ["Isaac Marlon da Silva Lourenço", 16, "Alunx"];
    $usuarios[] = ["Isabel Campelo da Silva", 16, "Alunx"];
    $usuarios[] = ["Isac Luís Justino Rodrigues", 16, "Alunx"];
    $usuarios[] = ["Karmen Luiza Pinheiro de Paiva", 18, "Alunx"];
    $usuarios[] = ["Lucas Ramon Martins Dias", 16, "Alunx"];
    $usuarios[] = ["Luciana Azevedo da Silva", 16, "Alunx"];
    $usuarios[] = ["Matheus Vinícius Ataide Rosa Silva", 16, "Alunx"];
    $usuarios[] = ["Michelly Lopes de Carvalho", 16, "Alunx"];
    $usuarios[] = ["Paulo Vitor Lima Borges", 16, "Alunx"];
    $usuarios[] = ["Nathália Barbosa Praxedes de Souza", 16, "Alunx"];
    $usuarios[] = ["Pablo Henrique da Silva Oqueres", 16, "Alunx"];
    $usuarios[] = ["Pávila Louyse da Silva Santos", 16, "Alunx"];
    $usuarios[] = ["Rafael Cavalcante dos Santos", 16, "Alunx"];
    $usuarios[] = ["Yasmim Lorrany Dantas Araújo", 16, "Alunx"];
    $usuarios[] = ["Reinaldo Belarmino de Macedo Neto", 16, "Alunx"];
    $usuarios[] = ["Sofia Teresa de Carvalho Silva Alves", 16, "Alunx"];
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
                background-color:#fff;
            }
        
            tr:hover {background-color:#f5f5f5;}
        </style>
        <meta charset="utf-8">
        <title>Prática com laço 2</title>
    </head>
    <body>
        <?php
       
            echo "<table id='Table'>";
            echo "<tr>";
            echo "<th onclick='sortTable(0)'>Nome</th>";
            echo "<th onclick='sortTable(1)'>Função</th>";
            echo "<th onclick='sortTable(2)'>Idade</th>";
            echo "</tr>";

                foreach($usuarios as $usuario){
                    echo "<tr>";
                        echo "<td>";
                        echo $usuario[0];
                        echo "</td>";

                        echo "<td>";
                        echo $usuario[2];
                        echo "</td>";
                        
                        echo "<td>";
                        echo $usuario[1];
                        echo "</td>";
                    echo "</tr>";
                }
            echo "</table>";
        ?>
        <script>
            function sortTable(n){
                var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
                table = document.getElementById("Table");
                switching = true;
                
                dir = "asc";

                while(switching){
                    switching = false;
                    rows = table.rows;

                    for(i = 1; i < (rows.length - 1); i++){
                        shouldSwitch = false;

                        x = rows[i].getElementsByTagName("TD")[n];
                        y = rows[i + 1].getElementsByTagName("TD")[n];

                        if(dir == "asc"){
                            if(x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()){
                                shouldSwitch = true;
                                break;
                            }
                        }else if(dir == "desc"){
                            if(x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()){
                                shouldSwitch = true;
                                break;
                            }
                        }
                    }
                    if(shouldSwitch){
                        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                        switching = true;
                        switchcount ++;
                    }else{
                        if(switchcount == 0 && dir == "asc"){
                            dir = "desc";
                            switching = true;
                        }
                    }
                }
            }
        </script>
    </body>
</html>