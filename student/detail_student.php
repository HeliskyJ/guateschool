<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>
<?php require_once('../templates/aside.php'); ?>

<div class="column is-9">
    <div class="" align='right'>
        <br><br>
    <button class="button is-link is-outlined" type="submit" name="button">Imprimir Constancia</button>
    <button class="button is-primary is-outlined" type="submit" name="button">Asignar</button>
    </div>
  <div class="content is-medium">
<h3 class="title is-3">Cursos Asignados</h3>
    <div class="box">
<?php require_once('../src/database/connection.php');
$id = $_GET['id'];
$sql = "SELECT st.fullname, st.codigo, ROUND(DATEDIFF(NOW(), st.birthdate)/365) AS Edad,
        s.name, yr.year, sy.end_date, sby.score
        FROM student st, year yr, subject s, subject_year sy, student_subject_year sby
        WHERE st.id = '$id'
        AND sby.student_id = st.id
        AND sby.subject_year_id = sy.id
        AND sy.subject_id = s.id
        AND sy.year_id = yr.id";

        if($db_conn){
                $result = $db_conn->query($sql);

            /*$name = $row["fullname"];
            $code = $row["codigo"];
            $age = $row["Edad"];
            $subjName = $row["name"];
            $ciclo = $row["year"];
            $estado = $row["end_date"];
            $nota = $row["score"];
            $fecha_actual = date("d-m-Y");
            $est;
            if ($estado > $fecha_actual) {
                $est ="Finalizado";
            }else {
                $est ="En curso";
            }

            if($est == "En curso"){
                $not = "NI";
            }else {
                $not = $nota;
            }*/
            $i = 0;
            foreach ($result as $resu)  {
                echo "<br>
                <h1 class='title'>". $resu['fullname']. "</h1>".
                "<h2 class='subtitle'>".$resu['codigo']. "</h2>".
                "<h2 class='subtitle'>".$resu['Edad']. " Años</h2>";
            if (++$i == 1) break;

    }

    echo "<table class='table is-bordered is-striped is-narrow is-hoverable is-fullwidth'><tr>
    <th>Materia</th>
    <th>Ciclo</th>
    <th>Estado</th>
    <th>Nota</th>
    </tr>";

            foreach ($result as $value) {
            echo "<tr>" .
            "<td>". $value['name']. "</td>";

            $fecha_actual = date("Y-m-d");
            $est;

            if ($value['end_date'] <= $fecha_actual) {
                $est ="Finalizado";
            }else {
                $est ="En curso";
            }

            if($est == "En curso"){
                $not = "NI";
            }else {
                $not = $value['score'];}
            echo
            "<td>". $value['year']. "</td>".
            "<td>". $est ."</td>".
            "<td>". $not. "</td>".
            "</tr>";
}
echo "</table></div>";
        }else {
            echo "No se puede";
        }
?>
</div>
</div>
<?php require_once('../templates/footer.php'); ?>
