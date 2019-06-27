<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>
<?php require_once('../templates/aside.php'); ?>

<div class="column is-9">
    <div class="content is-medium">
        <h3 class="title is-3">Cursos Vigentes</h3>
    <div class="box">
<table class="table is-fullwidth is-striped is-narrow is-hoverable">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Instructor</th>
            <th colspan="2">Estado</th>
            <th>Detalle</th>
        </tr>
    </thead>
<?php require_once('../src/database/connection.php');
$sql = "SELECT s.id, s.name, tc.fullname, sy.end_date, sy.start_date
FROM subject s, subject_year sy, teacher tc, year yr
WHERE sy.subject_id = s.id
AND sy.teacher_id = tc.id
AND sy.year_id = yr.id
AND yr.is_active = 1
";
if($db_conn){
    $result = $db_conn->query($sql);
        foreach ($result as $value) {
    echo "<tbody>
    <tr>" .
    "<td>". $value['name'] ."</td>".
    "<td>". $value['fullname'] ."</td>";

    $fecha_actual = date("Y-m-d");
    $est;
    if ($value['end_date'] <= $fecha_actual) {
        $est ="Finalizado";
    }else {
        $est ="En curso";
    }


    echo
    "<td>". $est."</td><td></td>".
    "<td>" . "<a class='button is-outlined is-2'
    href='/school/student/detail_subject.php?id=" . $value["id"] .  "&name=" . $value["fullname"]
    . "&date=" . $value["start_date"].  "&twodate=" . $value["end_date"]. "&sub=" . $value["name"]. "'>Ver</a>" .
    "</td></tr>";
}}
echo "</tbody></table></div>";
?>
</div>
</div>
<?php require_once('../templates/footer.php'); ?>
