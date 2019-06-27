<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>
<?php require_once('../templates/aside.php'); ?>

<div class="column is-9">
  <div class="content is-medium">
<h3 class="title is-3">Nuevo Estudiante</h3>
    <div class="box"> <hr>
<form class="form has-text-grey-dark " action="../src/student_controller/create.php" method="post">
<div class="field">
<div class="control">
    <label class="label">Nombre Completo</label>
<input class="input is-family-monospace" type="text" name="fullName" placeholder="Full name">
</div></div>
<div class="field">
<div class="control">
    <label class="label">Fecha de Nacimiento</label>
<input class="input is-family-monospace" type="date" name="birthdate">
</div></div>
<div class="field">
<div class="control">
<label class="label">Estado</label>
<input class="checkbox" type="checkbox" name="active">
</div></div>
<div class="field is-grouped is-pulled-right">
<div class="control">
<button class="button is-success" name="button">Crear Estudiante</button>
</div>
<button class="button is-danger" type="reset" name="button">Cancelar</button>
</div>
</form>
</div>
</div>
</div>

<?php require_once('../templates/footer.php'); ?>
