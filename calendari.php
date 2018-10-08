<?php

$mes=date("n");
$any=date("Y");
$dia_actual=date("j");

$diaSetmana = date("w", mktime(0,0,0,$mes,1,$any))+7;
$ultimDia = date("d", mktime(0,0,0, $mes+1, 1, $any)-1);

$mesos=array(1=>"Gener", "Febrer", "Març", "Abril", "Maig", "Junny", "Juliol",
"Agost", "Septembre", "Octubre", "Novembre", "Desembre");

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      table{
        border-collapse: collapse;
        border: 1px solid black;
      }
      td{
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
    <table>
    <caption><?php echo $mesos[$mes] . " " . $any ?></caption>
      <tr>
        <th>Lun</th>
        <th>Mar</th>
        <th>Mie</th>
        <th>Jue</th>
        <th>Vie</th>
        <th>Sab</th>
        <th>Dom</th>
      </tr>
      <tr>
        <?php
        $cela=$diaSetmana+$ultimDia;
        for($i=1;$i<=42;$i++)
        {
            if($i==$diaSetmana){
                $dia=1;
            }
            if($i<$diaSetmana || $i>=$cela){
                echo "<td>&nbsp</td>";
            }
            else{
                if($dia==$dia_actual){
					echo "<td>$dia</td>";
				}
				else{
				    echo "<td>$dia</td>";
				}
				$dia++;
			}
            if($i%7==0){
				echo "</tr><tr>\n";
			}
        }
        ?>
      </tr>
    </table>
  </body>
</html>
