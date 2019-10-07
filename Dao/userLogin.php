<?php
    // Begin session
    if(isset($_POST['signin']) && isset($_POST['UserID']) && isset($_POST['Password'])){
        login();
    }

    //Register new user
    if(isset($_POST['signup'])){
        registerUser();
    }

    // Validation of Populated Data in Form Fields
    function filterinput($conn,$data){
        //removes spaces at the beginning and
        //at the end of the string
        $data=trim($data);

        //remove against bars:
        // "water snake" becomes "water snake"
        $data= stripslashes($data);
        $data=htmlspecialchars($data);
        
        //Remove characters a hacker might have 
        //entered to hack or alter database
        $data=$conn->real_escape_string($data);

        return $data;
    }


    //Used to login to a user 
    function login(){
        require_once("connection.php");

        // Stage 1: Preparation
        $query="SELECT * FROM buskaro.passenger WHERE ID=? AND Pwd=?";
        $stmt=$conn->prepare($query);
        if(!$stmt){
            echo "Preparation Failed: (" . $conn->errno . ")" . $conn->error;
        }

        // Stage 2: Parameter Association (bind)
        $user=filterinput($conn,$_POST['UserID']);
        $password=filterinput($conn,$_POST['Password']);
        
        $bind=$stmt->bind_param("is",$user,$password);
        if(!$bind){
            echo "Connection parameters failed: (" . $stmt->errno . ")" . $stmt->error;
        }

        // Stage 3: Execution
        if(!$stmt->execute()){
            echo "Execução falhou: (" . $stmt->errno . ")" . $stmt->error;
        }

        // Stage 4: Obtaining Data
        $res=$stmt->get_result();
        if(!$res){
            echo "Result Set Fetch failed: (" . $stmt->errno . ")" . $stmt->error;
        }

        $t=false;
        if($res->num_rows){
            $linha=$res->fetch_assoc();
            if($linha['Pwd']==$password){
                session_start();
                $_SESSION['UserID']=$linha['ID'];
                $_SESSION['Type']=$linha['Type'];
                $_SESSION['Password']=md5($linha['Pwd']);
                header('Location: ../passenger/dashboard.php');         
                $t='true';
            }
        }    
        
        if($t==false){
            echo "<script type='text/javascript'>alert('Failed to Login! Incorrect RollNo or Password')</script>";
            header('Location: ../');
        }  
        $stmt->close();
        $conexao->close();
    }

    //Used to register new user 
    function registerUser(){
        require_once("connection.php");
        
        // Stage 1: Preparation
	    $query="CALL addUser(?,?,?,?,?,?,?)";
    
        $stmt=$conn->prepare($query);
        if(!$stmt){
            echo "Preparation failed: (" .$conn->errno .")" .$conn->error;
        }

        //Stage 2: Parameter Association (bind)
        $userID= filterinput($conn,$_POST['UserID']);
        $password=filterinput($conn,$_POST['Password']);
        $name=filterinput($conn,$_POST['Name']);
        $batch=filterinput($conn,$_POST['Batch']);
        $dept=filterinput($conn,$_POST['Dept']);
        $bloodG=filterinput($conn,$_POST['BloodG']);
        $type=filterinput($conn,$_POST['Type']);
        
        $bind=$stmt->bind_param("ississs",$userID,$password,$name,$batch,$dept,$bloodG,$type);
        if(!$bind){
            echo "Connection parameters failed: (" . $stmt->errno . ")" . $stmt->error;
        }
        
        // Stage 3: Execution
        if($stmt->execute()){
            echo "<script type='text/javascript'>alert('Registration Successful')</script>";
            header('Location: ../');
        }else{
            echo "Execution failed: (" . $stmt->errno . ")" . $stmt->error;
            echo "<script type='text/javascript'>alert('User Exists ".$conn->error."')</script>";
        }

        $stmt->close();
        $conn->close();
    }

?>