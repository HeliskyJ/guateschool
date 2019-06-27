<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>
<?php require_once('../templates/aside.php'); ?>
<?php require_once('../src/database/connection.php');
$id = $_GET['id'];

$sql = "SELECT * FROM student WHERE id=$id";
if($db_conn){
    $result = $db_conn->prepare($sql);
    $result->execute();
    $row = $result->fetch();

    $code = $row["codigo"];
    $name = $row["fullname"];
    $birth = $row["birthdate"];
    $state = $row["is_active"];
    $a   = 'checked';
}else {
    echo "No se puede";
}
?>

<div class="column is-9">
  <div class="content is-medium">
<h3 class="title is-3">Actualizar Estudiante</h3>
    <div class="box">

<form class="form has-text-grey-dark " action="../src/student_controller/create.php" method="post">
<hr>
<div class="field">
<div class="control">
    <label class="label">Código del Estudiante</label>
<input class="input is-family-monospace" type="text" readonly
placeholder="Full name"  <?php echo 'value=' . $code; ?>>
</div></div>
<div class="field">
<div class="control">
    <label class="label">Nombre Completo</label>
<input class="input is-family-monospace" type="text" name="fullName"
placeholder="Full name" <?php echo 'value=' . $name; ?>>
</div></div>
<div class="field">
<div class="control">
    <label class="label">Fecha de Nacimiento</label>
<input class="input is-family-monospace" type="date" name="birthdate"
 <?php echo 'value=' . $birth;  ?>>
</div></div>
<div class="field">
<div class="control">
<label class="label">Estado</label>
<input class="checkbox" type="checkbox" name="active" <?php if ($state != 0) {
                    echo "checked='" . $a . "'";} ?>>
</div></div>
<div class="field is-grouped is-pulled-right">
<div class="control">
<button class="button is-success" name="button">Actualizar</button>
</div>
<button class="button is-danger" type="reset" name="button">Cancelar</button>
</div>
</form>
</div>
</div>
</div>

<?php require_once('../templates/footer.php'); ?>
