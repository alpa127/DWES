<?php
  //Ver si hay usuario logueado
  session_start();
  if(isset($_SESSION['usuario'])){
    $us = $_SESSION['usuario'];
    // switch($us->getPerfil()){
    //   case 'A':
    //     pintarMenuAdmin();
    //   case 'M':
    //     pintarMenuMecanico();
    // }
  }
  else{
    //Redirigir a login
    header('location:../usuario/login.php');
  }

   ?>
   <!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <?php
      if($us->getPerfil()=='A'){
      echo '<li class="nav-item">
              <a class="nav-link active" href="#">Usuarios</a>
            </li>';
      }
      ?>
      <li class="nav-item">
        <a class="nav-link active" href="controllerPieza.php">Pieza</a>
      </li>

      <?php
      if($us->getPerfil()=='M'){
      echo '<li class="nav-item">
              <a class="nav-link active" href="#">Reparaciones</a>
            </li>';
      }
      ?>
      <li class="nav-item">
        <?php echo $us!=null ? $us->getNombre():""; ?>
        <a class="nav-link active" href="../usuario/login.php?accion=cerrar">Salir</a>
      </li>
     
    </ul>
  </div>
</nav>
<?php
  
  

?>
<!-- Grey with black text -->
<!-- <nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link active" href="login.php">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="controllerPieza.php">Pieza</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav> -->