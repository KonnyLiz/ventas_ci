<html>
  <head>
      <link rel="stylesheet" type="text/css" href="./assets/css/dompdf.css">
  </head>

<body>

  <header>
      <table>
          <tr>
              <td id="header_logo">
                  <img id="logo" src="./assets/img/logoXYZ.png">
              </td>
              <td id="header_texto">
                  <div>Ferreteria XYZ</div>
                  <div>Reporte de Campañas</div>
              </td>
              <td id="header_logo">
              </td>
          </tr>
      </table>
  </header>
  <footer>
      <div id="footer_texto">Reporte de Campañas</div>
  </footer>

  <table border="1" id="table_info">
       <thead>
           <tr>
               <th>#</th>
               <th>Nombre</th>
               <th>Producto</th>
               <th>Fecha de Inicio</th>
               <th>Fecha de Finalizacion</th>
           </tr>
       </thead>
       <tbody>
          <?php foreach ($resulCampana as $campana) { ?>
            <tr>
                <td><?php echo $campana->id;?></td>
                <td><?php echo $campana->nombre;?></td>
                <td><?php echo $campana->producto;?></td>
                <td><?php echo $campana->fecha_i;?></td>
                <td><?php echo $campana->fecha_f;?></td>
            </tr>
          <?php  }?>
       </tbody>
</table>



</body>
</html>
