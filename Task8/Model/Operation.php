<?php
  require_once 'Connection.php';

  function adduser($data){
	$conn = db_conn();
    $selectQuery = "INSERT into adduser (Name,Email,User,Gender,Pass,Image)
VALUES (:name, :email, :un,:gender,:pass,:image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':un' => $data['un'],
            ':gender'=> $data['gender'],
            ':pass'=> $data['pass'],
            ':image'=>$data['image']
        
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
    $selectQuery = "SELECT * FROM `adduser` WHERE User LIKE '%$data%'";

    
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
    $selectQuery = "SELECT * FROM `adduser` WHERE Pass LIKE '%$data%'";

    
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
    $selectQuery = "SELECT * FROM `adduser` WHERE User LIKE '%$user%'";

    
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
    $selectQuery = "UPDATE adduser set Name = ?, Email = ?,Gender=? where  User= ?";
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
    $selectQuery = "UPDATE adduser set Pass=? where  User= ?";
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