<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/alt/adminlte.components.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/alt/adminlte.core.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/alt/adminlte.extra-components.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/alt/adminlte.pages.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/alt/adminlte.plugins.min.css">


    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.0.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
</head>

<body class="hold-transition layout-top-nav">


    <?php
  if(isset($_GET['Cedula'])){
  $persona = $_GET['Cedula'];
  $datos = file_get_contents("http://173.249.49.169:88/api/test/consulta/$persona");
  $datos = json_decode($datos);
  $cedula = $datos->Cedula;
  $nombres = $datos->Nombres;
  $apellido1 =$datos->Apellido1;
  $apellido2 =$datos->Apellido2;
  $fechaNac = $datos->FechaNacimiento;
  $lugarNac = $datos->LugarNacimiento;
  $foto = "http://173.249.49.169:88/api/test/foto/$persona";

  echo"
  <div class='content-wrapper'>

  <section class='content-header'>
      <div class='container-fluid'>
        <div class='row mb-2'>
          <div class='col-sm-6'>
            <h1>Resultados</h1>
          </div>
          <div class='col-sm-6'>
            <ol class='breadcrumb float-sm-right'>
              <li class='breadcrumb-item'><a href='index.php'>Volver atras</a></li>
              <li class='breadcrumb-item active'>Resultados</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
  
  
  <table id='example' class='table table-striped table-bordered dt-responsive nowrap' style='width:100%'>
  <thead>
      <tr>
        <th>Cedula</th>
        <th>Nombres</th>
        <th>Primer Apellido</th>
        <th>Segundo Apellido</th>
        <th>Fecha Nacimiento</th>
        <th>Lugar Nacimiento</th>
        <th>Foto</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>$cedula</td>
        <td>$nombres</td>
        <td>$apellido1</td>
        <td>$apellido2</td>
        <td>$fechaNac</td>
        <td>$lugarNac</td>
        <td><img src='$foto'></td>
      </tr>

      </div>
    ";
}else{


echo"
<center>
<div class='login-box'>
  <div class='login-logo'>
    <a href='index.html'><b>Consulta tus datos</b></a>
  </div>
  <div class='card'>
    <div class='card-body login-card-body'>
      <p class='login-box-msg'>Consulte con el dato que considere</p>
      <form>
        <div class='input-group mb-3'>
          <input type='text' class='form-control'name='Cedula' placeholder='Cedula' required>
          <div class='input-group-append'>
            <div class='input-group-text'>
            <span class='fas fa-address-card'></span>
            </div>
          </div>
        </div>
        <div class='row'>
          <div class='col-4'>
            <button type='submit' class='btn btn-primary btn-block'>Consultar</button>
          </div> 
        </div>
      </form>
    </div>
  </div>
</div> 
</center>
";}?>

    </tbody>
    </table>



</body>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    var table = $('#example').DataTable({
        lengthChange: false,
        buttons: ['csv', 'pdf', 'colvis']
    });

    table.buttons().container()
        .appendTo('#example_wrapper .col-md-6:eq(0)');
});
</script>


    </html>