<?
class City
{
    private $table_name = 'city';
    private $DB;

    public function  __construct($DB)
    {
        $this->DB = $DB;
    }

    // Lấy ra tất cả huyện
    public function getAll()
    {
        $sql = "SELECT * FROM " . $this->table_name;
        return  $this->DB->query($sql)->toArray();
    }


     // Lấy dan sách quận huyện có phân trang, query
     public function getAllCityByMeta($filter = [], $page = 1, $perPage = 15)
     {
         $offset = ($page - 1) * $perPage;
 
         $sql = "SELECT * FROM city WHERE 1=1";
 
         // Áp dụng các bộ lọc
         if (!empty($filter['name'])) {
             $name = $filter['name'];
             $sql .= " AND cit_name LIKE '%$name%' ";
         }
 
         // Thêm phân trang
         $sql .= " LIMIT " . intval($perPage) . " OFFSET " . intval($offset);
 
         // Thực hiện câu lệnh truy vấn
         $this->DB->query($sql);
 
         // Lấy kết quả dưới dạng mảng
         $cities = $this->DB->toArray();
 
         return [
             'cities' => $cities,
             'totals' => $this->getTotalCity($filter)
         ];
     }
 
     // Lấy tổng số quận huyện theo filter
     public function getTotalCity($filter = [])
     {
         $sql = "SELECT COUNT(DISTINCT c.cit_id) AS total
         FROM city c WHERE 1=1 ";
 
         // Áp dụng các bộ lọc
         if (!empty($filter['name'])) {
             $name = $filter['name'];
             $sql .= " AND c.cit_name LIKE '%$name%' ";
         }
 
         // Thực hiện câu lệnh truy vấn
         $this->DB->query($sql);
 
         // Lấy kết quả dưới dạng mảng
         $total = $this->DB->toArray()[0]['total'];
 
         return $total;
     }
 
     // Thêm mới quận huyện
     public function addCity($data)
     {
         $sql = "INSERT INTO $this->table_name 
         (cit_name, cit_name_other, cit_search_data, cit_lat_center, cit_lng_center, cit_active, cit_hot, cit_content, cit_address_map) 
         VALUES (
         '{$data['cit_name']}',
         '{$data['cit_name_other']}',
         '{$data['cit_search_data']}',
         '{$data['cit_lat_center']}',
         '{$data['cit_lng_center']}',
         '{$data['cit_active']}',
         '{$data['cit_hot']}',
         '{$data['cit_content']}',
         '{$data['cit_address_map']}'
         )";
         $result =  $this->DB->query($sql);
         if ($result) {
             return true;
         }
         return false;
     }
 
     // Xóa
     public function deleteCity($id)
     {
         $sql = "DELETE FROM $this->table_name WHERE cit_id = " . intval($id);
         return  $this->DB->query($sql);
     }
 
     // Lấy chi tiết 1 huyện
     public function getCityById($id)
     {
         $sql = "SELECT * FROM $this->table_name  WHERE cit_id = " . intval($id);
         return  $this->DB->query($sql)->getOne();
     }
 
     // Update
     public function updateCity($district_id, $data)
     {
         $sql = "UPDATE $this->table_name SET
          dis_name = '{$data['dis_name']}',
          dis_name_other = '{$data['dis_name_other']}',
          dis_active = '{$data['dis_active']}',
          dis_hot = '{$data['dis_hot']}',
          dis_address_map = '{$data['dis_address_map']}',
          dis_content = '{$data['dis_content']}',
          dis_city_id = '{$data['dis_city_id']}',
          dis_lat_center = '{$data['dis_lat_center']}',
          dis_lng_center = '{$data['dis_lng_center']}' WHERE dis_id = $district_id";
         $result = $this->DB->query($sql);
 
         return $result;
     }
}
