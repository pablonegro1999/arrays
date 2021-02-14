     <table border="1" align="center">
            <?php
            echo "<tr>";
            for ($cabecera="6";$cabecera<=6;$cabecera++){
                        echo "<th>";
                        echo $cabecera;
                        echo "</th>";
            }
            echo "</tr>";
            for ($x = 0; $x <=10; $x++){
                       echo "<tr>";
                       echo "<th>";
                       echo $x;
                       echo "</th>";
                            for ($y=6;$y<=6;$y++){                      
                                    $multiplicacion=$x*$y;                    
                                    echo "<td>";                      
                                    echo $multiplicacion;                      
                                    echo "</td>";              
                            }              
                    echo "</tr>";          
                    }      
    ?>      
    </table>