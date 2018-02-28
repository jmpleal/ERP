<?php
include_once("conexion.php"); //INICIAMOS CONEXION
$params =  array();
$totalRecords = array();
$data = array();


$sqlTot = "";
$sqlRec = "";
$where = ""; //

$params = $_REQUEST; //esto lee los paramaetros y los asigna a la variable params
$limit = $params["rowCount"];
$limit ="15";

if (isset($params["current"])) { $page  = $params["current"]; } else { $page=1; };

$start_from = ($page-1) * $limit;

if( !empty($params['searchPhrase']) ) {
    $sql = "SELECT * FROM `productos`";
    $where .=" WHERE ";
    $where .=" (clave LIKE '".$params['searchPhrase']."%' ";
    $where .=" OR nombre LIKE '".$params['searchPhrase']."%' ) order by `id` DESC ";
}
else{
    $sql = "SELECT * FROM `productos` order by `id` DESC  ";
}


$sqlTot .= $sql;
$sqlRec .= $sql;

if(isset($where) && $where != '') {

    $sqlTot .= $where;
    $sqlRec .= $where;
}



if ($limit!=-1)
    $sqlRec .= "LIMIT $start_from, $limit";

$queryTot = mysqli_query($con, $sqlTot) or die("Database Error". mysqli_error($con));
$totalRecords = mysqli_num_rows($queryTot);
$queryRecords = mysqli_query($con, $sqlRec) or die("Query Error");

while( $row = mysqli_fetch_assoc($queryRecords) ) {
    $data[] = $row;
    //	echo "<pre>";print_R($data);//die;
}

$json_data = array(
    "current"            => intval( $params['current'] ),
    "rowCount"            => 10,
    "total"    => intval( $totalRecords ),
    "rows"            => $data  //agregamos
);

echo json_encode($json_data);  // send data as json format
?>
