<?php
//functions
//declare a function
// 


function convertDate(){
    $dateInput = 'September 14, 2029 11:35:00';
    $date = strtotime($dateInput);
    echo strtoupper( date('Y-m-d h:i:s a', $date));
}   
?>
