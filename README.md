ĐỀ BÀI:
1. Thực hiện đọc một file Account.txt danh sách người dùng gồm email và password. Kiểm tra xem người dùng có nhập đúng thông tin trong danh sách này không. Nếu có thì đến trang chào mừng. Còn không thì đến trang báo “Sorry your login information is wrong. Click here to login again” Và khi người dùng nhấn thì sẽ về trang đăng nhập lại
2. Khi người dùng nhấn nút trong form_register là “Create An Account” thì sẽ đến trang ghi đầy đủ lại tất cả thông tin muốn đăng ký và hỏi lại 
             “Please see your information again above. If you make sure, please press Confirm”  
Và khi người dùng nhấn nút Confirm thì ta vào trang Chào Mừng.
__________________________________________________________________________________

- Tao lưu mỗi tài khoản dưới dạng object Account(email,password).
- Đẩy tất cả tài khoản vào 1 mảng array, mà mỗi phần tử của nó là 1 object Account.

VẤN ĐỀ:
Tao muốn in ra thử cái mảng array (line 48 - 53). Nhưng nó báo error:

Fatal error: Uncaught Error: Object of class Account could not be converted to string in C:\Users\Admin\Downloads\PHP\htdocs\WORKPLACE\Lab02\index.php:50 Stack trace: #0 {main} thrown in C:\Users\Admin\Downloads\PHP\htdocs\WORKPLACE\Lab02\index.php on line 50

