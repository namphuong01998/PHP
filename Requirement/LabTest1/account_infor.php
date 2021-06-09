<?php 
    include "src/header.php";
?>

<div class="fb-header">
    <div id="img1" class="fb-header"><img src="img/facebook.png"/></div>
    <?php
        if(empty($user_login)){     // Hàm empty($user_login) để kiểm tra biến này có giá trị chưa. Nếu chưa có thực hiện import các form đăng nhập và đăng ký. 
            include "src/form_login.php";
        }            
    ?>
</div>


<?php
 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname']; 
    $sex = $_POST['sex'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
        

    echo "<div class='fb-body'>";
        if(isset($firstname,$lastname)){
            echo "- Firstname: $firstname "."<br>";
            echo "- Lastname: $lastname "."<br>";    
        } 

        $birthday = strtotime($_POST['birthday']);    //How to get date from input form within PHP
        if($birthday){
            $new_date = date('d-m-Y', $birthday);
            echo "- Birthday: $new_date "."<br>";
        }

        if(isset($sex)){
            echo "- Sex: $sex "."<br>";
        }

        if(isset($mail,$pass)){
            echo "- Email: <b>$mail</b>"."<br>";
            echo "- Password: <b>$pass</b>"."<br>";
        }
    echo"</div>";   

?>

<?php
    echo "<br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/><br/> <br/> <br/> <br/>";
    echo"<div class='confirm'>";
        echo "Please see your information again above. If you make sure, please press <b>Confirm</b>.";
    echo"</div>";
    include "src/form_confirm.php";
?>

<?php
    include "src/footer.php";
?>



