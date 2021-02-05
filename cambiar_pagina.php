<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <div class="clearfix">
          <div class="hint-text">Pagina <b><?php echo $paginas ?></b> de <b><?php echo $total_paginas ?></b></div>

<?php
     for($i=1; $i<=$total_paginas; $i++){
?>

          <ul class="pagination">
               <!--<li class="page-item disabled"><a href="#">Previo</a></li>-->
               <li class="page-item active"><?php echo '<a href="?pagina=' . $i . '" class="page-link">' . $i . '</a>'; ?></li>
               <!--<li class="page-item"><a href="#" class="page-link">2</a></li>
               <li class="page-item active"><a href="#" class="page-link">3</a></li>
               <li class="page-item"><a href="#" class="page-link">4</a></li>
               <li class="page-item"><a href="#" class="page-link">5</a></li>-->
               <!--<li class="page-item"><a href="#" class="page-link">Siguiente</a></li>-->
          </ul>
<?php
     }
?>
     </div>
</body>
</html>


<!--Lo comentado es para la paginacion-->

<!--<div class="clearfix">
     <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
     <ul class="pagination">
     <li class="page-item disabled"><a href="#">Previous</a></li>
     <li class="page-item"><a href="#" class="page-link">1</a></li>
     <li class="page-item"><a href="#" class="page-link">2</a></li>
     <li class="page-item active"><a href="#" class="page-link">3</a></li>
     <li class="page-item"><a href="#" class="page-link">4</a></li>
     <li class="page-item"><a href="#" class="page-link">5</a></li>
     <li class="page-item"><a href="#" class="page-link">Next</a></li>
     </ul>
</div>-->