<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>
<?php require_once('../templates/aside.php'); ?>

<div class="column is-9">
  <div class="content is-medium">
<h3 class="title is-3">Nuevo Curso</h3>
    <div class="box"> <hr>
<form class="form has-text-grey-dark " action="../src/student_controller/create_subject.php" method="post">
    <div class="field">
  <div class="control">
      <label class="label">Nombre</label>
    <input class="input is-small" type="text" placeholder="Nuevo Curso" name="name">
  </div>
</div>
<div class="field">
<div class="control">
     <label class="label">Código</label>
<input class="input is-small" type="text" placeholder="0009" name="codigo">
</div>
</div>
<div class="field">
<label class="label">Activar</label>
<div class="control">
<input class="is-small" type="checkbox" name="estado">
</div>
</div>
<div class="field is-grouped is-pulled-right">
<div class="control">
<button class="button is-success" name="button">Crear Curso</button>
</div>
<button class="button is-danger" type="reset" name="button">Cancelar</button>
</div>
</form></div>
</div>
</div>

<?php require_once('../templates/footer.php'); ?>
