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
                  <div>Reporte de Categorias</div>
              </td>
               <td id="header_logo">
              </td>
          </tr>
      </table>
  </header>
  <footer>
      <div id="footer_texto">Reporte de Categorias</div>
  </footer>

  <table border="1" id="table_info">
       <thead>
           <tr>
               <th>#</th>
               <th>Nombre</th>
               <th>Descipcion</th>
           </tr>
       </thead>
       <tbody>
          <?php foreach ($resulCategoria as $categoria) { ?>
            <tr>
                <td><?php echo $categoria->id;?></td>
                <td><?php echo $categoria->nombre;?></td>
                <td><?php echo $categoria->descripcion;?></td>
            </tr>
          <?php  }?>
       </tbody>
</table>



</body>
</html>
