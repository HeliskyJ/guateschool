<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>
<?php require_once('../templates/aside.php'); ?>

<?php require_once('../src/database/connection.php');
$sql = "SELECT * FROM student WHERE is_active = 1";
if($db_conn){
    $result = $db_conn->query($sql);
}
?>

<div class="column is-9">
  <div class="content is-medium">
<h3 class="title is-3">Estudiantes</h3>
    <div class="box">
        <table class="table is-hoverable has-text-grey-dark is-family-monospace">
            <thead class="is-uppercase">
                <th colspan="">Código</th><th></th>
                <th colspan="">Nombre</th>
                <th colspan="">Fecha de Nacimiento</th>
            </thead>
            <tbody>
        <?php
            foreach ($result as $value) {
                echo "<tr>" .
                 "<td colspan='2'>" . $value['codigo'] . "</td>" .
                 "<td>" . $value['fullname'] . "</td>" .
                 "<td>" . $value['birthdate'] . "</td>" .
                 "<td>" . "<a class='button is-warning is-2'
                 href='/school/student/update.php?id=" . $value["id"] . "'>Actualizar</a>" .
                 "</td>" .
                 "<td>" . "<a class='button is-success is-2'
                 href='/school/student/detail_student.php?id=" . $value["id"] . "'>Detalle</a>" .
                 "</td>" .
                 "<td>" . "<a class='button is-danger is-2'
                 href='/school/src/student_controller/delete.php?id=" . $value["id"] . "'>Eliminar</a>" .
                 "</td><tr>";
            }
        ?>
        </tbody>
    </table>
    </div>
</div>
</div>
<?php require_once('../templates/footer.php'); ?>
