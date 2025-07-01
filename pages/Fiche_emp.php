<?php 
require('../inc/fonction.php') ;
$emp_no = $_GET['emp_no'] ;
if(!$emp_no) {
    header('Location: dept_emp.php') ;
}

$emp = get_employee_by_id($emp_no) ;
$salary = get_salary_by_id($emp_no) ;
$titles = get_titles_by_id($emp_no) ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FICHE EMPLOYEES</title>
</head>
<body>
    <h1>Fiche de l'employee : <?= $emp['last_name'] .' '. $emp['first_name'] ?></h1>
    <ul>
        <li>Numero: <?= $emp['emp_no'] ?></li>
        <li>Genre: <?= $emp['gender'] ?></li>
        <li>Date de Naissance: <?= $emp['birth_date'] ?></li>
        <li>Date d'eqmbauche: <?= $emp['hire_date'] ?></li>
    </ul>
    <h1>Historique des salaires</h1>
        <table border='1'>
            <tr>
                <th>Salaire</th>
                <th>Debut</th>
                <th>Fin</th>
            </tr>
            <?php foreach($salary as $sal) { ?>
                <tr>
                    <td><?= $sal['salary'] ?></td>
                    <td><?= $sal['from_date'] ?></td>
                    <td><?= $sal['to_date'] ?></td>
                </tr>
            <?php } ?>
        </table>
    <h1>Postes Occupees</h1>
    <table border='1'>
            <tr>
                <th>Titre</th>
                <th>Debut</th>
                <th>Fin</th>
            </tr>
            <?php foreach($titles as $tit) { ?>
                <tr>
                    <td><?= $tit['salary'] ?></td>
                    <td><?= $tit['from_date'] ?></td>
                    <td><?= $tit['to_date'] ?></td>
                </tr>
            <?php } ?>
        </table>  
        <?php 
require("../inc/footer.php") ;
?>
</body>
</html>