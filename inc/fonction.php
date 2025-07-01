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
function getDept_emp($dept_no){
    $request="select last_name,employees.emp_no,hire_date,first_name,gender,dept_no from employees join dept_emp on dept_emp.emp_no=employees.emp_no  where dept_emp.dept_no='%s'" ;
    $request=sprintf($request ,$dept_no) ;
    $result=mysqli_query(dbconnect(),$request) ;
    if(mysqli_num_rows($result)){
        for($i=0;$i<mysqli_num_rows($result);$i++){
            $val[$i]=mysqli_fetch_assoc($result) ;
        }
    return $val ;
    }
return 0 ;
}
function Dept_name($dept_no){
    $request="select dept_name,dept_no from departments where dept_no='%s'" ;
$request=sprintf($request ,$dept_no) ;
    $result=mysqli_query(dbconnect(),$request) ;
            $val=mysqli_fetch_assoc($result) ;
    return $val ;    
}


























function get_employee_by_id($emp_no) {
    $request = "select * from employees where emp_no = '%s'" ;
    $request = sprintf($request, $emp_no) ;
    $result = mysqli_query(dbconnect(), $request) ;
    return mysqli_fetch_assoc($result) ;
}
function get_salary_by_id($emp_no) {
    $request = "select salary, from_date, to_date from salaries where emp_no = '%s' order by from_date DESC" ;
    $request = sprintf($request, $emp_no) ;
    $result = mysqli_query(dbconnect(), $request) ;
    $val = [] ;
    while($row = mysqli_fetch_assoc($result)) {
        $data = $row ;
    }
    return $val ;
}
function get_titles_by_id($emp_no) {
    $request = "select title, from_date, to_date from titles where emp_no = '%s' order by from_date DESC" ;
    $request = sprintf($request, $emp_no) ;
    $result = mysqli_query(dbconnect(), $request) ;
    $val = [] ;
    while($row = mysqli_fetch_assoc($result)) {
        $val = $row ;
    }
    return $val ;
}
?>