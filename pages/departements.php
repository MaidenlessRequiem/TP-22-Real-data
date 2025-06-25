<?php 
require("../inc/fonction.php") ;
require("../inc/header.php") ;
$liste=selectDepartements() ;
?>
<br>
<br>
<div class="container">
<table class="table table-success table-striped">
<tr>
<th>ID</th>    
<th>DEPARTMENTS</th>
    <th>MANAGER </th>
</tr>
<?php 
for($i=0;$i<count($liste);$i++){
$dept_no=$liste[$i]['dept_no'] ;
$manager=getManager($dept_no) ;
    ?>
    <tr>
    <td><?= $liste[$i]['dept_no'] ?></td>  
    <td><a href="dept_emp.php?id=<?= $liste[$i]['dept_no']?>"><?= $liste[$i]['dept_name'] ?></a></td>
        <td><?= $manager['first_name']  .'   '. $manager['last_name']?></td>
    </tr>
    <?php
}
?>
</table>
</div>

<?php 
require("../inc/footer.php") ;
?>