<?php
    session_start();

    include('dbconnect.php');

    $name = filter_input(INPUT_POST, 'name');
    list($fname, $lname) = explode(" ", $name);
    $address = filter_input(INPUT_POST, 'address');
    $phone = filter_input(INPUT_POST, 'phone');
    $salary = filter_input(INPUT_POST, 'salary');
    $ytd = filter_input(INPUT_POST, 'ytd');
    $comm = filter_input(INPUT_POST, 'comm');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    $pin = "S";
    
    $i = 0; $digits = 5;
    while($i < $digits)
    {
        //generate a random number between 0 and 9.
        $pin .= mt_rand(1, 9);
        $i++;
    }

    if(isset($_SESSION['ldmanager1']))
    {
        $connection = mysqli_connect("127.0.0.1", "root", "csci318project", "dealer_one");
        $sql = "INSERT INTO representative (rep_no, name, address, phone, base_salary, ytd_sales, comm)
                    VALUES ('$pin', '$name', '$address', '$phone', '$salary', '$ytd', '$comm')";
        $location = "D1";
    } else if(isset($_SESSION['ldmanager2']))
    {
        $connection = mysqli_connect("127.0.0.1", "root", "csci318project", "dealer_two");
        $sql = "INSERT INTO sales_person (sale_no, name, address, phone, comm, base_salary, ytdsales)
                    VALUES ('$pin','$name', '$address', '$phone', '$comm', '$salary', '$ytd')";
        $location = "D2";
    }

    $query = "INSERT INTO employee (emp_no, fname, lname, email, password, location) 
                VALUES ('$pin','$fname', '$lname', '$email', '$password', '$location')";

    if ($connection->query($sql) === TRUE && $dbconnect->query($query) === TRUE) 
    {
        echo "<script>alert('New Person Added'); window.location.href='index.html';</script>";
    }
    else 
    {
        //echo "Wrong Code" . "<br>" . $dbconnect->error;
        //echo "Wrong Code" . "<br>" . $connection->error;
        echo "<script>alert('You already filled one'); window.location.href='addRep.html';</script>";
    } 
?>