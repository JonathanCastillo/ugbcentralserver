<?php #include ("../../../config/config.php"); ?>
<?php include ("./config/config.php"); ?>
<style>
i.material-icons {
    color: #1e88e5;
}
i:hover {
  color: #76ff03;
}
</style>
<div class="navbar-fixed">
    <nav>
<div class="nav-wrapper grey darken-4">
      <!--<a href="?c=Usuario&a=Inicio" class="brand-logo"><img src="assets/img/JC2.png" class="Logo"></a>-->
      <a href="<?php echo SERVERURL;?>view/Usuario/Inicio.php" class="text-logo"><b>UGB CENTRAL</b></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo SERVERURL;?>view/Usuario/Inicio.php"><i class="material-icons">touch_app</i></a></li>
        <li><a href="<?php echo SERVERURL;?>view/Usuario/Login.php"><i class="material-icons">account_circle</i></a></li>
      </ul>
      </div>
</nav>
</div>