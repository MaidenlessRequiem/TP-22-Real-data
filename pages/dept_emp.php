<?php 
require("../inc/fonction.php") ;
require("../inc/header.php") ;
$dept_no=$_GET['id'] ;
$liste=getDept_emp($dept_no) ;
$toshow=10 ;
if(isset($_GET['return'])){
    $toshow=$toshow-10 ;
    if($toshow==0){
        $toshow=10 ;
    }
}
if(isset($_GET['last_shown'])){
    $toshow=$toshow+$_GET['last_shown'] ;
}
?>
<br>
<?= count($liste)?>
<br>
<div class="container">
<table class="table table-success table-striped">
<tr>
    <th>Gender</th>
    <th>Full Name</th>
    <th>Recruitment Date</th>
</tr>
<?php 
for($i=$toshow-9;$i<$toshow;$i++){
$dept_no=$liste[$i]['dept_no'] ;
$manager=getManager($dept_no) ;
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
<div class="row">
    <?php 
if($toshow-10 >0){
?>

<a class="col-6" href="dept_emp.php?return=0&&id=<?= $dept_no?>">PREVIOUS PAGE</a>
<?php } ?>
<a class="col-6" href="dept_emp.php?last_shown=<?= $toshow ?>&&id=<?= $dept_no?>">NEXT PAGE</a>
</div>
<?php 
require("../inc/footer.php") ;
?>