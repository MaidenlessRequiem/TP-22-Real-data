<?php 
require("connection.php") ;
function selectDepartements(){
    $request="select * from departments " ;
    $result=mysqli_query(dbconnect(),$request) ;
    if(mysqli_num_rows($result)) 
    {
    $n=mysqli_num_rows($result) ;
    for($i=0;$i<$n;$i++){
        $val[$i]=mysqli_fetch_assoc($result) ;
    }
    return $val ;
}
return 0 ;
}
function getManager($id){
    $request="select * from dept_manager join employees on employees.emp_no=dept_manager.emp_no join departments on departments.dept_no=dept_manager.dept_no where departments.dept_no='%s'" ;
    $request=sprintf($request,$id) ;
    if(mysqli_query(dbconnect(),$request))
   {
   $result=mysqli_query(dbconnect(),$request) ;
   $val=mysqli_fetch_assoc($result) ;
   return $val ;
   }
   return 0 ;
}
?>