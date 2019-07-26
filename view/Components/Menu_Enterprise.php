<script language="javascript">
function preguntar(){
   cerrar=confirm("¿Deseas cerrar la sesion?");
   if (cerrar)
   
 else
  //Y aquí pon cualquier cosa que quieras que salga si le diste al boton de cancelar
    alert('Regresando a estado actual')
    window.location= 'Master.php?c=Usuario&a=StartEnterprise';

}
</script>
<div class="navbar-fixed">
    <nav>
<div class="nav-wrapper grey darken-4">

      <a href="?c=Usuario&a=StartEnterprise" class="brand-logo"><img src="assets/img/Cover.png" class="Logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><b><span><?php echo $_SESSION['user'];?></span></b></li>
        <li><a href="?c=Plazas&a=Publicar"><i class="material-icons">record_voice_over</i></a></li>
        <li><a href="?c=User&a=Profile"><i class="material-icons">account_circle</i></a></li>
        <li><a onclick="preguntar()" href="?c=User&a=Logout" ><i class="material-icons">notifications_paused</i></a></li>
      </ul>
    </div>
</nav>
</div>