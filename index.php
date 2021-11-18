<?php
$id_usuario=$_SERVER['REMOTE_ADDR'];
?>
<?php include 'header.php';


//$branch_id = $_GET['id'];
?>
  
<script src="../dist/js/demo.js?v=<?php echo(rand()); ?>"></script>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
  

        


        <?php
        if(isset($_POST['btn_temporada']))
        {
            $year = $_POST['year'];
            mysqli_query($con,"update temporada set year='$year' where id='1'")or die(mysqli_error());
        }
        ?>
        <!-- contenido -->
         <div class="right_col" role="main">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
          <div class = "x-panel">
          </div>
      </div>
  </div>
<?php
  $id_usuario=$_SERVER['REMOTE_ADDR'];
   $fecha = date('Y-m-d');
?>
<!--caja de ingreso-->

<?php
                
?>

<!--modulo egresar-->


     <?php
       ?>

<br>


<br>
<!--opcional la busqueda en verdad, no es requisito-->


<div class="box-header " >
  <h3 class="box-title"> Flujo de datos</h3>
</div>
                
<div class="box-body ">
  <table style="width: 70vw;" id="example2" class="table table-bordered table-striped">
    <thead>
    <tr class=" btn-success">
      <th> fecha </th>
      <th> descripcion </th>
     
    </tr>
    </thead>
<tbody>
<?php
  $query=mysqli_query($db,"select * from visitor_logs ")or die(mysqli_error());
  $i=1;
  while($row=mysqli_fetch_array($query)){
 

  $id_libro=$row['user_ip_address'];
  $debe_haber=$row['created'];
    
      ?>
  
   <tr >
  <td><?php echo $row['created'];?></td>
  <td><?php echo $row['user_ip_address'];?></td>
 
    
 
    <td class="btn-print">
      <?php
          ?>
          <!--eliminardaatos-->
   <a class="small-box-footer btn-print"  href="<?php  echo "delete.php?monto=$monto&id_libro=$id_libro&debe_haber=$debe_haber&id_usuario=$id_usuario";?>" onClick="return confirm('¿Está seguro de que quieres eliminar transaccion??');"><i class="glyphicon glyphicon-remove"></i></a>
   <?php
      ?>
   <?php
                 
       ?>

      </td>
        </tr>
        
<?php $i++;}?>
      </tbody>
      </table>
  <script type="text/javascript">
    function Eliminar (i) {
    document.getElementsByTagName("table")[0].setAttribute("id","tableid");
    document.getElementById("tableid").deleteRow(i);
}
    function Buscar() {
            var tabla = document.getElementById('example2');
            var busqueda = document.getElementById('txtBusqueda').value.toLowerCase();
            var cellsOfRow="";
            var found=false;
            var compareWith="";
            for (var i = 1; i < tabla.rows.length; i++) {
                cellsOfRow = tabla.rows[i].getElementsByTagName('td');
                found = false;
                for (var j = 0; j < cellsOfRow.length && !found; j++) { compareWith = cellsOfRow[j].innerHTML.toLowerCase(); if (busqueda.length == 0 || (compareWith.indexOf(busqueda) > -1))
                    {
                        found = true;
                    }
                }
                if(found)
                {
                    tabla.rows[i].style.display = '';
                } else {
                    tabla.rows[i].style.display = 'none';
                }
            }
        }
</script>
    </div>
  </div>
 </div>
</div>

</div>
</div>
</div>
</div>


     <script>
      $(document).ready( function() {
      $('#example2').dataTable( {
      "language": {
       "paginate": {
        "previous": "anterior",
        "next": "posterior"},
        "search": "Buscar:", },
        "info": false,
        "lengthChange": false,
         "searching": false,


          }
          );
          } );
       </script>

    <?php 
      
?>
</body>
</html>
