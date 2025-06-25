<?php 
require("../inc/fonction.php") ;
require("../inc/header.php") ;
$dept_no=$_GET['id'] ;
$liste=getDept_emp($dept_no) ;
$max=count($liste) ;
$manager=getManager($dept_no) ;
?>
<br>
<br>
<div class="container">
    <p>

<strong>DEPT NO : <?= ''.$dept_no?></strong>
</p>
<p>
<strong>ACTING MANAGER : <?= $manager['last_name'].' '.$manager['first_name'] ?></strong>
</p>
<table class="table table-success table-striped">
<tr>
    <th>GENDER</th>
    <th>FULL NAME</th>
    <th>RECRUITMENT DATE</th>
</tr>
<?php 
for($i=0;$i<$max;$i++){
    ?>
    <tr>
        <td><?= $liste[$i]['gender']?></td>
        <td><?= $liste[$i]['first_name']  .'   '. $liste[$i]['last_name']?></td>
        <td><?= $liste[$i]['hire_date']?></td>
    </tr>
    <?php
}
?>
</table>
</div>
<?php 
require("../inc/footer.php") ;
?>