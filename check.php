<?php
    session_start();
?>
<?php
        $con=mysqli_connect("localhost:3307","root","","imageDB");
        if(!$con){
          die("Connection Failed".mysqli_connect_error());
        }
        echo "HEllo";
        unset($_SESSION['count']);
        $name=$_SESSION['name'];
        $otp=$_POST['otp'];    
        echo $name." : ".$otp;
        $sql1="SELECT * FROM otp_checker WHERE username=? && otp=?";
        $stmt=$con->prepare($sql1);
        $stmt->bind_param("ss",$name,$otp);
        $stmt->execute();
        $result1=$stmt->get_result();
        while($row=$result1->fetch_assoc()){
            $_SESSION['count']='1';
            $_SESSION['otp']=$otp;
            $sql2="DELETE FROM `otp_checker` WHERE `otp`=?";
            $stmt2=$con->prepare($sql2);
            $stmt2->bind_param("s",$otp);
            $stmt2->execute();

        }
        if(!isset($_SESSION['count'])){
            $sql2="DELETE FROM `otp_checker` WHERE `otp`=?";
            $stmt2=$con->prepare($sql2);
            $stmt2->bind_param("s",$otp);
            $stmt2->execute();
            header("Location: http://localhost/mini_project/sign_in.php");
            exit();
        }
        if(file_exists("C:\\"."third_eye")){
          
        }
        else{
          if(mkdir("C:\\"."third_eye",0777)){
              $myfile=fopen("C:\\third_eye\\third_eye.txt","w");
              $txt=$name."@gmail.com";
              fwrite($myfile,$txt);
              fclose($myfile);
          }
          else{
            echo "failed";
          }
        }
        unset($_SESSION['sign_in']);
        header("Location: http://localhost/mini_project/index.php");
        exit();
?>
