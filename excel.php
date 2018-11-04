<?php
    include('config.php');
    session_start();
    $r = $_SESSION['qr'];
    $query = "select * from orders where mop='$r' xor recv_add='$r'";
    $result = mysqli_query($conn,$query);
    // $rec = mysqli_fetch_assoc($result);
    // echo $rec['recv_add'];
    // $rec = mysqli_fetch_assoc($result);
    // echo $rec['recv_add'];
    $columnHeader = "Recv_name" . "\t" . "Order_ID" . "\t" . "Recv_Address" . "\t" . "Product_ID" . "\t" . "Order_Date" . "\t" . "Mode_of_Payment";
    $setData = '';
    while ($rec = mysqli_fetch_row($result)) {
    $rowData = '';
    foreach ($rec as $value) {
    $value = '"' . $value . '"' . "\t";
    $rowData .= $value;
    }
    $setData .= trim($rowData) . "\n";
    }
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=User_Detail.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
    echo ucwords($columnHeader) . "\n" . $setData . "\n";
?>