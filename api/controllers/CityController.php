<?
require_once __DIR__ . '/../models/City.php';
require_once __DIR__ . '/../helpers/response.php';

class CityController
{
    private $city;

    public function __construct($DB)
    {
        $this->city = new city($DB);
    }

    public function getAllCitys()
    {

        $citys = $this->city->getAll();
        if (!empty($citys)) {
            $response = new Response(200, 'Call api thành công!!', $citys, null);
            return $response->sendResponse();
        } else {
            $response = new Response(404, 'Không tìm thấy huyện nào!!', null, null);
            return $response->sendResponse();
        }
    }


      // Lấy danh sách quận huyện có phân trang
      public function getCityWithMeta()
      {
          $filter = [];
  
          // Search theo tên tên huyện
          if (!empty($_GET['name'])) {
              $filter['name'] = $_GET['name'];
          }
          // Xử lý các tham số phân trang
          $page       = isset($_GET['page']) ? (int)$_GET['page'] : 1;
          // Số lượng item trên 1 trang
          $perPage    = 10;
  
          // Data hotel 
          $result       =  $this->city->getAllCityByMeta($filter, $page, $perPage);
  
          // Tổng số KS được tìm thấy
          $totals = $result['totals'];
          $cities = $result['cities'];
  
          // Tổng số trang
          $totalPages = ceil($totals / $perPage);
          $meta = new Meta($page, $totalPages, $totals);
          if ($result) {
              $response = new Response(200, 'Call api thành công', $cities, $meta);
              return $response->sendResponse();
          } else {
              $response = new Response(400, 'Call api thất bại', null, null);
              return $response->sendResponse();
          }
      }
  
      // Thêm mới quận huyện
      public function addCity()
      {
          // Thêm các header CORS
          header('Access-Control-Allow-Origin: *'); // Hoặc thay * b��ng domain cụ thể của bạn để bảo mật hơn
          header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
          header('Access-Control-Allow-Headers: Content-Type, Authorization');
          header('Content-Type: application/json');
  
          // Lấy dữ liệu JSON từ yêu cầu
          $data = json_decode(file_get_contents('php://input'), true);
          if (isset($data)) {
              if ($this->city->addCity($data)) {
                  $response = new Response(200, 'Call api thành công', null, null);
                  return $response->sendResponse();
              } else {
                  $response = new Response(400, 'Call api thất bại');
                  return $response->sendResponse();
              }
          }
      }
  
      // Xóa 
      public function deleteCity($id)
      {
          header('Access-Control-Allow-Origin: *'); // Hoặc thay * b��ng domain cụ thể của bạn để bảo mật hơn
          header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
          header('Access-Control-Allow-Headers: Content-Type, Authorization');
          header('Content-Type: application/json');
          if ($this->city->deleteCity($id)) {
              $response = new Response(200, 'Call api thành công', null, null);
              return $response->sendResponse();
          } else {
              $response = new Response(400, 'Call api thất bại');
              return $response->sendResponse();
          }
      }
  
      // Lấy thông tin chi tiết
      public function getCityById($id)
      {
          header('Access-Control-Allow-Origin: *'); // Hoặc thay * b��ng domain cụ thể của bạn để bảo mật hơn
          header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
          header('Access-Control-Allow-Headers: Content-Type, Authorization');
          header('Content-Type: application/json');
          $district = $this->city->getCityById($id);
          if ($district) {
              $response = new Response(200, 'Call api thành công', $district, null);
              return $response->sendResponse();
          } else {
              $response = new Response(404, 'Không tìm thấy huyện nào!!', null, null);
              return $response->sendResponse();
          }
      }
  
      // Update 
      // Update hotel
      public function updateCity($id)
      {
          // Thêm các header CORS
          header('Access-Control-Allow-Origin: *'); // Hoặc thay * b��ng domain cụ thể của bạn để bảo mật hơn
          header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
          header('Access-Control-Allow-Headers: Content-Type, Authorization');
          header('Content-Type: application/json');
  
          // Lấy dữ liệu JSON từ yêu cầu
          $data = json_decode(file_get_contents('php://input'), true);
          if (isset($data)) {
              $districtId = $id;
              if ($this->city->updateCity($districtId, $data)) {
                  $response = new Response(200, 'Call api thành công', null, null);
                  return $response->sendResponse();
              } else {
                  $response = new Response(400, 'Call api thất bại');
                  return $response->sendResponse();
              }
          } else {
              echo json_encode(['error' => 'Missing required parameters']);
              return;
          }
      }
}
