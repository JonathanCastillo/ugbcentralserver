<!DOCTYPE html>
<html>

<head>
    <?php
include 'view/Components/Header.php';

if (@!$_SESSION['Usuario']) {
   //header("Location:?c=Usuario&a=Index");
    //Para cuando el perfil sea visitado por alguien mas
    //header("Location:Perfil2.php");
}
?>

</head>

<body>

    <div class="Container">
        <nav class="panel grey darken-4">
            <!--<div class="nav-wrapper">

      <a href="#!" class="brand-logo"><img src="assets/img/Cover.png" class="Logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><b><span><?php echo $_SESSION['user'];?></span></b></li>
        <li><a href="?c=Curriculum&a=Upload"><i class="material-icons">cloud_upload</i></a></li>
        <li><a href="?c=Curriculum&a=Ficha"><i class="material-icons">description</i></a></li>
        <li><a href="#"><i class="material-icons">more_vert</i></a></li>
      </ul>
    </div>-->
            <?php include 'view/Components/Menu_Standar.php'; ?>

        </nav>

    </div>
    <div class="row">
        <div class="col s12">
            <table>
                <th>
                    <tr>CODIGO</tr>
                    <tr>NOMBRES</tr>
                    <tr>APELLIDOS</tr>
                    <tr>ESPECIALIDAD</tr>
                    <tr>EMAIL</tr>
                </th>
            </table>

        </div>
    </div>

    <script>
        $(document.ready(function) {
            $('select').material_select();
            $('.datepicker').pickadate();
        });
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
<footer>
    <?php include 'view/Components/Footer.php';?>
</footer>

</html>