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
                  <div>Reporte de Clientes</div>
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
               <th>Telefono</th>
               <th>Dui</th>
               <th>Nit</th>
               <th>Direccion</th>
           </tr>
       </thead>
       <tbody>
          <?php foreach ($resulClientes as $clientes) { ?>
            <tr>
                <td><?php echo $clientes->id;?></td>
                <td><?php echo $clientes->nombres;?></td>
                <td><?php echo $clientes->telefono;?></td>
                <td><?php echo $clientes->dui;?></td>
                <td><?php echo $clientes->nit;?></td>
                <td><?php echo $clientes->direccion;?></td>
            </tr>
          <?php  }?>
       </tbody>
</table>



</body>
</html>
