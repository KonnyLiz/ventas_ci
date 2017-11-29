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
               <th>Cliente</th>
               <th>Fecha</th>
               <th>Vendedor</th>
               <th>Sub-Total</th>
               <th>Iva</th>
               <th>Descuento</th>
               <th>Total</th>
           </tr>
       </thead>
       <tbody>
          <?php foreach ($resulVentas as $clientes) { ?>
            <tr>
                <td><?php echo $clientes->id;?></td>
                <td><!--Nombre cliente--></td>
                <td><?php echo $clientes->fecha;?></td>
                <td><!--Nombre vendedor--></td>
                <td><?php echo $clientes->subtotal;?></td>
                <td><?php echo $clientes->iva;?></td>
                <td><?php echo $clientes->descuento;?></td>
                <td><?php echo $clientes->total;?></td>
            </tr>
          <?php  }?>
       </tbody>
</table>



</body>
</html>
