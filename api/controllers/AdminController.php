<?
require_once __DIR__ . '/../models/Admin.php';
require_once __DIR__ . '/../helpers/response.php';
class AdminController {
    private $admin;

    public function __construct($DB)
    {
        $this->admin = new Admin($DB);
    }

    // login
    public function login() {
          // Thêm các header CORS
          header('Access-Control-Allow-Origin: *'); // Hoặc thay * b��ng domain cụ thể của bạn để bảo mật hơn
          header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
          header('Access-Control-Allow-Headers: Content-Type, Authorization');
          header('Content-Type: application/json');
  
          // Lấy dữ liệu JSON từ yêu cầu
          $data = json_decode(file_get_contents('php://input'), true);
          if (isset($data)) {
            $data = $this->admin->login($data['email'], $data['password']);
              if ($data) {
                http_response_code(200);
                echo json_encode(array("message" => "Đăng nhập thành công!", "data" => $data, "status"=> 200));
              } else {
                http_response_code(401);
                echo json_encode(array("message" => "Sai email hoặc mật khẩu.", "status"=> 401));
              }
          }
    }
}