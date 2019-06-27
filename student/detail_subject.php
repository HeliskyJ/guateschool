<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>
<?php require_once('../templates/aside.php'); ?>

<div class="column is-9">
    <div align='right'>
        <br><br>
    <a href="new_subject.php" class="button is-link is-outlined" type="submit" name="button">Imprimir Lista</a>
    </div>
  <div class="content is-medium">
<h3 class="title is-3">Estudiantes Asignados</h3>
    <div class="box">
<?php require_once('../src/database/connection.php');
$id = $_GET['id'];
$name = $_GET['name'];
$subj = $_GET['sub'];
$date = $_GET['date'];
$two = $_GET['twodate'];

$sql = "SELECT st.codigo, st.fullname
FROM student st, student_subject_year sby, subject s, subject_year sy, year yr
WHERE sby.student_id = st.id
AND sby.subject_year_id = sy.id
AND sy.subject_id = s.id
AND sy.year_id = yr.id
AND s.id = '$id'
AND yr.is_active = 1";

echo "<h4><b>Clase: </b>". $subj ."</h4>";
echo "<h4><b>Maestro: </b>". $name ."</h4><hr>";
echo "<h4><b>Fecha Inicio: </b>". $date ."</h4>";
echo "<h4><b>Fecha Final: </b>". $two ."</h4>";

echo "<table class='table is-bordered is-striped is-narrow is-hoverable is-fullwidth'>
    <thead><tr>
    <th>#</th>
    <th>Código</th>
    <th>Nombre</th>
    </tr></thead>";

if($db_conn){
    $result = $db_conn->query($sql);
        $i = 1;
        foreach ($result as $value) {
            echo "<tr>" .
            "<td>" . $i++ . "</td>" .
            "<td>". $value["codigo"]."</td>".
            "<td>". $value["fullname"] . "</td>
            </tr>";
        }
echo "</table></div>";
    }else {
            echo "No se puede";
        }
?>
</div>
</div>
<?php require_once('../templates/footer.php'); ?>
