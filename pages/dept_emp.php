<?php 
require("../inc/fonction.php") ;
require("../inc/header.php") ;
$dept_no=$_GET['id'] ;
$dept=Dept_name($dept_no) ;
$liste=getDept_emp($dept_no) ;
$max=count($liste) ;
$manager=getManager($dept_no) ;
$afficher=20;
if(isset($_GET['page_number'])){
    $current=$afficher*$_GET['page_number'] ;
    $page_number=$_GET['page_number'] ;
}
else{
    $page_number=1 ;
    $current=$afficher ;
}
if($current>$max){
    $current=$max ;
}
?>
<h2 class="text-center"><strong><?= $dept['dept_name']?></strong></h2>

<br>
<br>
<div class="container">
  
<p>
<strong> MANAGER : <?= $manager['last_name'].' '.$manager['first_name'] ?></strong>
</p>
<table class="table table-success table-striped">
<tr>
    <th>GENDER</th>
    <th>FULL NAME</th>
    <th>RECRUITMENT DATE</th>
</tr>
<?php 
for($i=$current-$afficher;$i<$current;$i++){
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
<?php if($max!=$current) {?>
<a href="dept_emp.php?page_number=<?=  $page_number+1 ?>&&id=<?= $dept_no ?>"><button>NEXT</button></a>
<?php 
}
?>
<?php if($afficher!=$current) {?>
<a href="dept_emp.php?page_number=<?=  $page_number-1 ?>&&id=<?= $dept_no ?>"><button>BAACK</button></a>
<?php 
}
?>
</div>
<?php 
require("../inc/footer.php") ;
?>