    <table  border = 4 align="center" cellpadding=4 cellspacing=4>
            <?php

            
            
            for($i=0; $i< 10; $i++){
            echo  "<tr>";

                for($j=0; $j < 10; $j++) {
                    $coloresAleatorios = random_int(000000,999999);

                echo  "<td style = background-color:#$coloresAleatorios></td>";

            }
                echo "</tr>";
            }

            ?>
        </table>