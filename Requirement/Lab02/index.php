<?php 
    include "src/header.php";
?>
<!--________________________________________________________________________________-->
<!--BƯỚC 1: Người dùng nhập email và password (Form login)-->
<!--________________________________________________________________________________-->
<?php 
    $user_login = '';
    $pass_login = '';
    if(isset($_POST['login'])){          // Kiểm tra xem user có thực hiện nhấn nút summit Login hay ko.
        $user_login = $_POST['name'];    // Nếu người dùng có nhấn:  ta dùng $_POST[‘name’] để lấy thông tin Email or Phone do người dùng nhập trên form và gán vào biến  $user_login
        $pass_login = $_POST['password'];//                          ta dùng $_POST[‘password’] để lấy thông tin password do người dùng nhập trên form và gán vào biến  $pass_login
    }
?>

<div class="fb-header">
    <div id="img1" class="fb-header"><img src="img/facebook.png"/></div>
    <?php
        if(empty($user_login)){     // Hàm empty($user_login) để kiểm tra biến này có giá trị chưa. Nếu chưa có thực hiện import các form đăng nhập và đăng ký. 
            include "src/form_login.php";
        }            
    ?>
</div>

<!--________________________________________________________________________________-->
<!--BƯỚC 2: Kiểm tra xem có nằm trong danh sách của file txt hay không? (Đọc file)-->
<!--________________________________________________________________________________-->
<?php
    include "src/account.php";

    $path   = "C:\\Users\\Admin\\Downloads\\PHP\\htdocs\\WORKPLACE\\Lab02\\src\\Account.txt";
    $myfile = fopen($path, "r") or die ("Unable to open file!"); // Mở file ở chế độ đọc            
   
    $array= array(); 
    $count = 0;
    echo "<br>";echo "<br>";echo "<br>";
    echo "<br>";echo "<br>";echo "<br>";

    while(! feof($myfile)){                       // Hàm fgets() được sử dụng để đọc từng dòng từ một file 
        $line          = fgets($myfile)."<br />"; // Để lấy tất cả dữ liệu bằng hàm fgets(), sử dụng hàm feof() bên trong vòng lặp while.
        $array_of_line = explode("|", $line);     // Hàm explode() chuyển một chuỗi thành một mảng và mỗi phần tử được cắt bởi một chuỗi con nào đó (cụ thể là "|").                
                                
        $account = new Account($array_of_line[0],$array_of_line[1]);
        array_push($array,$account);              //push 1 phần tử account vào mảng $array.
        $count++;

        
        for($i=0;$i<$count;$i++){
            echo"<div class='black'>";
                echo $array[$i];
                echo "<br />";
            echo"</div>";
        } 
    }s
    fclose($myfile);
    
?>