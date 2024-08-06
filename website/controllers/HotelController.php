<?
include_once __DIR__ . '/../../cms/core/classes/Hotel.php';
class HotelController
{
    private $hotelModel;

    public function __construct($DB)
    {
        $this->hotelModel = new Hotel($DB);
    }

    // SEARCH
    public function search()
    {
        $filter = [];
        $sort = '';

        // Search theo tên ks hoặc tên huyện
        if (!empty($_GET['s'])) {
            $filter['s'] = $_GET['s'];
        }

        // Filter theo hạng sao
        if (!empty($_GET['rating'])) {
            $filter['rating'] = $_GET['rating'];
        }

        // Filter theo kiểu khách sạn
        if (!empty($_GET['type'])) {
            $filter['type'] = $_GET['type'];
        }

        // Tìm theo khoảng giá
        if (!empty($_GET['price_range'])) {
            $filter['price_range'] = $_GET['price_range'];
        }

        // Tìm theo quận huyện
        if (!empty($_GET['district'])) {
            $filter['district'] = $_GET['district'];
        }

        // Lấy sort từ query string
        if (!empty($_GET['sort'])) {
            $sort = $_GET['sort'];
        }

        // Xử lý các tham số phân trang
        $page       = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        // Số lượng item trên 1 trang
        $perPage    = 15;

        // Data hotel 
        $data       =  $this->hotelModel->getHotels($filter,  $sort, $page, $perPage);
        // Danh sách KS
        $hotels     = $data['hotels'];

        // Tổng số KS được tìm thấy
        $totals = $data['totals'];

        // Tổng số trang
        $totalPages = ceil($totals / $perPage);

        require_once __DIR__ . '/../views/list/listing.php';
    }

    // GET DETAIL HOTEL
    public function getDetail($slug)
    {
        $hotel = $this->hotelModel->getDetail($slug);
        return $hotel;
    }

    // GET LIST HOTEL NEARBY
    public function getNearbyHotels($district_id)
    {
        $hotels = $this->hotelModel->getNearbyHotels($district_id);
        return $hotels;
    }
}
