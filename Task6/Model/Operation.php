<?php
  require_once 'Connection.php';

  function adduser($data){
	$conn = db_conn();
    $selectQuery = "INSERT into store (Name,Email,U_name,Gender,Pass)
VALUES (:name, :email, :un,:gender,:pass)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':un' => $data['un'],
            ':gender'=> $data['gender'],
            ':pass'=> $data['pass']
        
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function checkuser($data)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `store` WHERE U_name LIKE '%$data%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($rows>1)
    return true;
    else
    return false;
}

function checkpass($data)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `store` WHERE Pass LIKE '%$data%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($rows>1)
    return true;
    else
    return false;
}

function Searchuser($user)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `store` WHERE U_name LIKE '%$user%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function updateuser($name, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE store set Name = ?, Email = ?,Gender=? where  U_name= ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'],$data['gender'] ,$name
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updatepass($user,$data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE store set Pass=? where  U_name= ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['pass'], $user
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


?>