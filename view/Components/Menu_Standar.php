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
      <a href="<?php echo SERVERURL;?>view/Usuario/index.php" class="text-logo"><b>UGB CENTRAL</b></a>
      <ul class="right hide-on-med-and-down">
        <li><span><?php echo $_SESSION['user']."-";?></span></li>
        <li><b><span><?php echo $_SESSION['Codigo'];?></span></b></li>
        <li><a href="?c=Usuario&a=Inicio"><i class="material-icons">touch_app</i></a></li>
        <li><a href="#"><i class="material-icons">description</i></a></li>
        <li><a href="#"><i class="material-icons">account_circle</i></a></li>
        <li><a onclick="preguntar()" href="<?php echo SERVERURL;?>Modulo/Logout.php" ><i class="material-icons">notifications_paused</i></a></li>
      </ul>
      </div>
</nav>
</div>
