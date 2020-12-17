<?php
include 'includes/connect.php';
session_start();
    $masanpham=!empty($_GET['masanpham']) ? (Int)$_GET['masanpham'] : 0;
    $quantity=!empty($_GET['quantity']) ? (Int)$_GET['quantity'] : 1;
    $action=!empty($_GET['action']) ? (Int)$_GET['action'] : 'add';
    $query=$o->query("Select * from sanpham where masanpham='$masanpham'");
    $pro=$query->fetchAll();
    $item = array();        
    //thêm
    if($pro && $action == 'add')
    {
        if(isset($item))
    {
        $quantity++;
    }
           $item = [
            'hinhanh'=>$pro[0]['hinhanh'],
            'tensanpham'=>$pro[0]['tensanpham'],
            'gia'=>$pro[0]['gia'],
            'soluong'=>$quantity
        ];
            $_SESSION['cart'][$masanpham]=$item;
    echo '<pre>';
    if(isset($item))
    {
        echo "da them";
    }
    var_dump($_SESSION['cart']);


    }
    header ('location:shopping-cart.php');
    ?>