<?php
ob_start();
require "DbUtil.inc"; //Database we're using
$objDBUtil = new DbUtil;

//Has sql injection problems
$choices = $_POST['choices'];
$quarters = $_POST['quarters'];

if (isset( $_REQUEST["choices"])) {
    $choices = $_REQUEST['choices'];
    $choices = join("','",$choices); 
}
else $choices = "";
 

if (isset( $_REQUEST["quarters"])) {
    $quarters = $_REQUEST['quarters'];
    $quarters = join("','", $quarters);
}
else $quarters = "";

if ($choices && $quarters) {
    $db = $objDBUtil->Open();
    $query = "SELECT course_no, term, projection FROM predictions WHERE course_no IN ('$choices') AND term IN ('$quarters') ORDER BY course_no ASC, term ASC";
    
    $result = $db->query($query);
    $resultsArray = array();
    if ($result and $result->num_rows != 0) {
            $result->data_seek(0);
            while($row = $result->fetch_array(MYSQL_ASSOC)) {
                $resultsArray[] = $row;
            }
    }
    echo json_encode($resultsArray);
    $result->free(); // Release memory for resultset 
    $db->close(); 
}

ob_end_flush();
?>