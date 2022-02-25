<?php
include('conn.php');
//session_start();
//echo $_SESSION['id'];
//echo $_SESSION['name'];
if($stmt=$conn->prepare('SELECT count(amount) from groceries where uid=?')){
    $stmt->bind_param('i',$_SESSION['id']);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($count);
    $stmt->fetch();
    echo $count;
}
if($stmt=$conn->prepare('Select SUM(amount) from groceries where uid=?')){
    $stmt->bind_param('i',$_SESSION['id']);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($total_expense);
    $stmt->fetch();
    //echo $total_expense;   
}

if($stmt_total=$conn->prepare('SELECT SUM(amount) from groceries')){
    $stmt_total->execute();
    $stmt_total->bind_result($total_expenditure);
    $stmt_total->fetch();
    //echo $total_expenditure;
}
$total_expense; // this is the total amount spent by the household      
$total_expenditure; // this is the total amount spent alltogether
$refund=$total_expense-($total_expenditure/4); // this would be the price refund or ...
// $count is the number of records input by the current user;

if($total_expenditure == 0){
    $total_expenditure="(None Yet)";
}

if($total_expense == 0){
    $total_expense="(None Yet)";
}

