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
                  <div>Reporte General de Oportunidades</div>
              </td>
              <td id="header_logo">
              </td>
          </tr>
      </table>
  </header>
  <footer>
      <div id="footer_texto">Reporte de Oportunidades</div>
  </footer>

  <table border="1" id="table_info">
       <thead>
           <tr>
               <th>#</th>
               <th>Nombre</th>
               <th>LLamada</th>
               <th>Respuesta#1</th>
               <th>Reunion</th>
               <th>Respuesta#2</th>
               <th>Grupo</th>
           </tr>
       </thead>
       <tbody>
          <?php foreach ($resulOportunidades as $oportunidades) { ?>
            <tr>
                <td><?php echo $oportunidades->id_oportunidad;?></td>
                <td><?php echo $oportunidades->nombre;?></td>
                <td><?php echo $oportunidades->llamada;?></td>
                <td><?php echo $oportunidades->respuesta1;?></td>
                <td><?php echo $oportunidades->reunion;?></td>
                <td><?php echo $oportunidades->respuesta2;?></td>
                <td><?php echo $oportunidades->id_grupo;?></td>
            </tr>
          <?php  }?>
       </tbody>
</table>



</body>
</html>
