
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<div class="noticia">
  <img class="izquierda" src="https://www.eluniverso.com/resizer/P36P1RlcmB2UEji6QrEs35iPh0Q=/1039x670/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/AFSJFSJM4FFKNLIEDSRBPGTBGU.jpg" width="100px">
  <aside style="margin-top:4%;font-size: 26pt; font-family: algeria;">REPORTE DE INGRESOS Y GASTOS</aside>
  <div class="reset"></div>
</div>
<style>
    div.noticia {
        width: 100%;
        margin: 20px auto;
        color: black;
        padding: 15px;
/*          margin-left: 20%;
*/  }
    div.noticia img.izquierda {
        float: left;
        margin-right: 15px;
    }
</style>
<table class="table table-striped  table-bordered table table-sm" style="margin-top: 1%;">
    <th style="text-align:center;font-size: 10pt;color:green;">#</th>
    <th style="text-align:center;font-size: 10pt;color:green; ">Responsable</th>
    <th style="text-align:center;font-size: 10pt;color:green;">Detalle</th>
    <th style="text-align:center;font-size: 10pt;color:green;">Categoria</th>
    <th style="text-align:center;font-size: 10pt;color:green;">Tipo</th>
    <th style="text-align:center;font-size: 10pt;color:green;">Fecha</th>
    <th style="text-align:center;font-size: 10pt;color:green;">Valor</th>
        <?php 
            $t_ing=0;
            $t_egr=0;
            $t_saldo=0;
        ?>
        @foreach($movimientos as $mov)
        <?php 
            if ($mov->cat_tipo==1) {
                $t_ing+=$mov->mov_valor;
            }

            if ($mov->cat_tipo==2) {
                $t_egr+=$mov->mov_valor;
            }

            $t_saldo=$t_ing-$t_egr;
            ?>
    <tr>
        <td style="text-align:center;font-size: 9pt">{{$loop->iteration}}</td>
        <td style="text-align:center;font-size: 9pt">{{$mov->usu_nombre}}</td>
        <td style="text-align:center;font-size: 9pt">{{$mov->mov_detalle}}</td>
        <td style="text-align:center;font-size: 9pt">{{$mov->cat_nombre}}</td>
        @if($mov->cat_tipo==1)
        <td style="text-align:center;font-size: 9pt">Ingreso</td>
        @else
        <td style="text-align:center;font-size: 9pt">Egreso</td>
        @endif 
         <td style="text-align:center;font-size: 9pt">{{$mov->mov_fecha}}</td>
                            <td style="text-align:center;font-size: 9pt">{{number_format($mov->mov_valor,2)}} $</td>
        
    </tr>
        @endforeach
     <tr>
                        <th style="text-align:center;font-size: 9pt;" colspan="2">Totales:</th>
                        <th style="text-align:center;font-size: 9pt;">Ingreso:{{number_format($t_ing,2)}} $</th>
                        <th style="text-align:center;font-size: 9pt;"> Egreso:{{number_format($t_egr,2)}} $</th>
                        <th style="text-align:center;font-size: 9pt;">Saldo:{{number_format($t_saldo,2)}} $</th>
                    </tr>
</table>
<div>
    <?php   
        $DateAndTime = date('d-m-Y', time());  
        echo"El reporte fue generado  $DateAndTime.";
    ?>
</div>











