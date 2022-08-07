<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include 'DbConnect.php';
$objDb = new DbConnect;
$conn = $objDb->connect();

$method = $_SERVER['REQUEST_METHOD'];
switch($method) {
    case "GET":
        $sql = "SELECT * FROM pharmaceutical_items";
        $path = explode('/', $_SERVER['REQUEST_URI']);
        if(isset($path[3]) && is_numeric($path[3])) {
            $sql .= " WHERE pharmaceuticalItemID = :pharmaceuticalItemID";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':pharmaceuticalItemID', $path[3]);
            $stmt->execute();
            $users = $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        echo json_encode($users);
        break;
    case "POST":
        $item = json_decode( file_get_contents('php://input') );
        $sql = "INSERT INTO pharmaceutical_items(pharmaceuticalItemID,userID, itemName, price, created_at) VALUES(null,:userID, :itemName, :price, :created_at)";
        $stmt = $conn->prepare($sql);
        $created_at = date('Y-m-d');
        $stmt->bindParam(':itemName', $item->itemName);
        $stmt->bindParam(':price', $item->price);
        $stmt->bindParam(':userID', $item->userID);
        $stmt->bindParam(':created_at', $created_at);

        if($stmt->execute()) {
            $response = ['status' => 1, 'message' => 'Record created successfully.'];
        } else {
            $response = ['status' => 0, 'message' => 'Failed to create record.'];
        }
        return json_encode($response);
        break;

    // case "PUT":
    //     $user = json_decode( file_get_contents('php://input') );
    //     $sql = "UPDATE pharmaceutical_items SET name= :name, email =:email, mobile =:mobile, updated_at =:updated_at WHERE id = :id";
    //     $stmt = $conn->prepare($sql);
    //     $updated_at = date('Y-m-d');
    //     $stmt->bindParam(':id', $user->id);
    //     $stmt->bindParam(':name', $user->name);
    //     $stmt->bindParam(':email', $user->email);
    //     $stmt->bindParam(':mobile', $user->mobile);
    //     $stmt->bindParam(':updated_at', $updated_at);

    //     if($stmt->execute()) {
    //         $response = ['status' => 1, 'message' => 'Record updated successfully.'];
    //     } else {
    //         $response = ['status' => 0, 'message' => 'Failed to update record.'];
    //     }
    //     echo json_encode($response);
    //     break;

    // case "DELETE":
    //     $sql = "DELETE FROM pharmaceutical_items WHERE id = :id";
    //     $path = explode('/', $_SERVER['REQUEST_URI']);

    //     $stmt = $conn->prepare($sql);
    //     $stmt->bindParam(':id', $path[3]);

    //     if($stmt->execute()) {
    //         $response = ['status' => 1, 'message' => 'Record deleted successfully.'];
    //     } else {
    //         $response = ['status' => 0, 'message' => 'Failed to delete record.'];
    //     }
    //     echo json_encode($response);
    //     break;
}