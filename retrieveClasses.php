<?php
ob_start();
require "DbUtil.inc"; //Database we're using
$objDBUtil = new DbUtil;
$db = $objDBUtil->Open();
?>

<?php
$query = "SELECT DISTINCT course_no FROM predictions ORDER BY course_no ASC";
$result = $db->query($query);
$classesArray = array();
if ($result and $result->num_rows != 0) {
        $result->data_seek(0);
        while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $classesArray[] = $row;
        }
        
	echo json_encode($classesArray);
    $result->free(); // Release memory for resultset 
    $db->close(); 
}
ob_end_flush();
?>

