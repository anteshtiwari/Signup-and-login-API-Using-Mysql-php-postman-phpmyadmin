<?php

require_once dirname(__FILE__)."/operation.php";

$response = array();

if($_SERVER['REQUEST_METHOD'] == "POST"){

# Code...
if(isset($_POST['name']) and isset($_POST['email'] ) and  isset($_POST['password'])) {
    

    $user = new operations();
    $result = $user->setUser($_POST['name'],$_POST['email'],$_POST['password']);
    if($result == 1){
       $response['error']=false;
       $response['message']="User is added Successfully";

    }else{
        $response['error']=false;
        $response['message']="Unable to add User";
    }
}else{
    $response['error']=true;
    $response['message']="Please fill all Fields";
}

}else{
    $response['error']=true;
       $response['message']="Invalid Request";
}

echo json_encode($response)

?>