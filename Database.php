<?php

class Database{

    public $con;
    public $error;

    public function __construct(){
        $this->con=mysqli_connect("localhost","root","","saliag");

        if(!$this->con){
            echo 'Database connection error' . mysqli_connect_error($this->con);
        }
    }


    /*if(isset($_POST['btn-login'])){

        $username = htmlspecialchars($_POST['username'], ENT_QUOTES);
        $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
        $passencrip = md5(sha1(crc32($password)));


        $login_query = mysqli_query($con, "SELECT * FROM tblusuarios WHERE username='$username' AND password='$password' ")

        if($fetch_login = mysqli_fetch_array($login_query)){
            if($fetch_login['password'] == $passencrip){
               if($fetch_login['status'] == 0){
                   echo "No puedes entrar al sistema porque tu cuenta esta dada de baja";
               }else{
                   echo "OK"

                   
               }
            }
        }
    }*/



    public function login($data){
        $username = htmlspecialchars($_POST['username'], ENT_QUOTES);
        $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
        $passencrip = md5(sha1(crc32($password)));
        

        if($username==""|| $password=""){
            $msg="<span style='color:red; font-size:18px;'> Fiel must not be empty</span>";
            return $msg;
        }else{
            $query="SELECT * FROM tblusuarios WHERE username='$username' AND password='$password'";
            
            $result=mysqli_query($this->con,$query);
            $row=mysqli_fetch_array($result);
            $user=isset($row['username']);
            $pass=isset($row['password']);
           
            
            if($username==$user && $password==$pass){
                $_SESSION['username']=$row['username'];
                $_SESSION['correo']=$row['correo'];
                
                header("location:index.php");

            }else{
                $msg="<span style='color:red; font-size:18px;'> Username and password not matched! </span>";
                return $msg;
            }


            
        }
    }

}
?>