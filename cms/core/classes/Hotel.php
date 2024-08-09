<?
class Hotel extends Model
{
    public $DB;

    public function __construct($DB)
    {
        $this->DB = $DB;
    }

    // Lấy danh sách khách sạn với tùy chọn lọc, sắp xếp và phân trang
    public function getHotels($filter = [], $sort = '', $page = 1, $perPage = 15)
    {
        $offset = ($page - 1) * $perPage;

        $sql = "SELECT h.*,
        c.cit_name ,
        d.dis_name,d.dis_address_map,
        JSON_ARRAYAGG(img.hti_name) AS images
        FROM hotel h
        LEFT JOIN city c ON h.hot_city_id = c.cit_id
        LEFT JOIN district d ON h.hot_district_id = d.dis_id
        LEFT JOIN hotel_image img ON h.hot_id = img.hti_hotel_id
        WHERE 1=1 ";

        // Áp dụng các bộ lọc
        // Escape các giá trị đầu vào để ngăn chặn SQL injection
        if (!empty($filter['s'])) {
            $s = $this->DB->escapeString($filter['s']);
            $sql .= " AND h.hot_name LIKE '%$s%' OR d.dis_name LIKE '%$s%'";
        }

        // Áp dụng lọc theo khoảng giá
        if (!empty($filter['price_range'])) {
            list($minPrice, $maxPrice) = explode(';', $filter['price_range']);
            $minPrice = intval($minPrice);
            $maxPrice = intval($maxPrice);
            $sql .= " AND h.hot_price BETWEEN $minPrice AND $maxPrice";
        }

        // Rating
        if (!empty($filter['rating'])) {
            $rating = intval($filter['rating']);
            $sql .= " AND h.hot_star = $rating";
        }

        // Kiểu KS
        if (!empty($filter['type'])) {
            $type = $this->DB->escapeString($filter['type']);
            $sql .= " AND h.hot_type = '$type'";
        }

        // Kiểu KS
        if (!empty($filter['district'])) {
            $district = $this->DB->escapeString($filter['district']);
            $sql .= " AND d.dis_name = '$district'";
        }

        if (!empty($filter['amenity'])) {
            // Escape các tên tiện ích và đưa chúng vào chuỗi
            $amenityNames = array_map(function ($amenity) {
                return "'" . $this->DB->escapeString($amenity) . "'";
            }, $filter['amenity']);

            $amenityNamesString = implode(',', $amenityNames);

            $sql .= " AND h.hot_id IN (
                        SELECT ha.hta_hotel_id
                        FROM hotel_amenities ha
                        JOIN amenity a ON ha.hta_amenity_id = a.ame_id
                        WHERE a.ame_name IN ($amenityNamesString)
                        GROUP BY ha.hta_hotel_id
                        HAVING COUNT(DISTINCT a.ame_name) = " . count($filter['amenity']) . "
                      )";
        }


        $sql .= " GROUP BY h.hot_id, c.cit_name, d.dis_name";

        // Áp dụng sắp xếp
        if (!empty($sort)) {

            switch ($sort) {
                case 'price-asc':
                    $sql .= " ORDER BY h.hot_price ASC";
                    break;
                case 'price-desc':
                    $sql .= " ORDER BY h.hot_price DESC";
                    break;
                default:
                    $sql .= " ORDER BY h.hot_price ASC";
            }
        }

        // Thêm phân trang
        $sql .= " LIMIT " . intval($perPage) . " OFFSET " . intval($offset);

        // Thực hiện câu lệnh truy vấn
        $this->DB->query($sql);

        // Lấy kết quả dưới dạng mảng
        $hotels = $this->DB->toArray();

        return [
            'hotels' => $hotels,
            'totals' => $this->getTotalHotels($filter)
        ];
    }

    // Lấy tổng số khách sạn theo filter
    public function getTotalHotels($filter = [])
    {

        $sql = "SELECT COUNT(DISTINCT h.hot_id) AS total
                FROM hotel h
                LEFT JOIN city c ON h.hot_city_id = c.cit_id
                LEFT JOIN district d ON h.hot_district_id = d.dis_id
                WHERE 1=1";

        // Áp dụng các bộ lọc
        // Escape các giá trị đầu vào để ngăn chặn SQL injection
        if (!empty($filter['s'])) {
            $s = $this->DB->escapeString($filter['s']);
            $sql .= " AND h.hot_name LIKE '%$s%' OR d.dis_name LIKE '%$s%'";
        }

        // Áp dụng lọc theo khoảng giá
        if (!empty($filter['price_range'])) {
            list($minPrice, $maxPrice) = explode(';', $filter['price_range']);
            $minPrice = intval($minPrice);
            $maxPrice = intval($maxPrice);
            $sql .= " AND h.hot_price BETWEEN $minPrice AND $maxPrice";
        }

        // Rating
        if (!empty($filter['rating'])) {
            $rating = intval($filter['rating']);
            $sql .= " AND h.hot_star = $rating";
        }

        // Kiểu KS
        if (!empty($filter['type'])) {
            $type = $this->DB->escapeString($filter['type']);
            $sql .= " AND h.hot_type = '$type'";
        }

        // Kiểu KS
        if (!empty($filter['district'])) {
            $district = $this->DB->escapeString($filter['district']);
            $sql .= " AND d.dis_name = '$district'";
        }

        if (!empty($filter['amenity'])) {
            // Escape các tên tiện ích và đưa chúng vào chuỗi
            $amenityNames = array_map(function ($amenity) {
                return "'" . $this->DB->escapeString($amenity) . "'";
            }, $filter['amenity']);

            $amenityNamesString = implode(',', $amenityNames);

            $sql .= " AND h.hot_id IN (
                        SELECT ha.hta_hotel_id
                        FROM hotel_amenities ha
                        JOIN amenity a ON ha.hta_amenity_id = a.ame_id
                        WHERE a.ame_name IN ($amenityNamesString)
                        GROUP BY ha.hta_hotel_id
                        HAVING COUNT(DISTINCT a.ame_name) = " . count($filter['amenity']) . "
                      )";
        }

        // Thực hiện câu lệnh truy vấn
        $this->DB->query($sql);

        // Lấy kết quả dưới dạng mảng
        $total = $this->DB->toArray()[0]['total'];

        return $total;
    }

    // Lấy ra thông tin chi tiết khách sạn
    public function getDetail($slug)
    {
        $sql = "SELECT h.*,
        c.cit_name,
        d.dis_name,d.dis_address_map,
        JSON_ARRAYAGG(img.hti_name) AS images
        FROM hotel h
        LEFT JOIN city c ON h.hot_city_id = c.cit_id
        LEFT JOIN district d ON h.hot_district_id = d.dis_id
        LEFT JOIN hotel_image img ON h.hot_id = img.hti_hotel_id
        WHERE h.hot_slug = '$slug'
        GROUP BY h.hot_id, c.cit_name, d.dis_name";

        $this->DB->query($sql);

        $result =  $this->DB->getOne();
        if (!$result) {
            return false;
        }

        // Lấy ra danh sách tiện ích của khách sạn
        $result['amenities'] = $this->getAmenities($result['hot_id']);

        return $result;
    }

    // Lấy ra danh sách tiện ích theo khách sạn
    public function getAmenities($hotelId)
    {
        $sql = "SELECT a.*
                FROM hotel_amenities ha
                LEFT JOIN amenity a ON ha.hta_amenity_id = a.ame_id
                WHERE ha.hta_hotel_id = $hotelId";

        $this->DB->query($sql);
        return $this->DB->toArray();
    }

    // Lấy ra 15 danh sách khác sạn lân cận
    public function getNearbyHotels($district_id)
    {
        $sql = "SELECT h.*,
        c.cit_name ,
        d.dis_name,d.dis_address_map
        FROM hotel h
        LEFT JOIN city c ON h.hot_city_id = c.cit_id
        LEFT JOIN district d ON h.hot_district_id = d.dis_id
        WHERE 1=1 AND h.hot_district_id = $district_id GROUP BY h.hot_id, c.cit_name, d.dis_name";

        $this->DB->query($sql);

        return $this->DB->toArray();
    }

    // Lấy ra danh sách phòng 
    public function getRooms($hotelId)
    {
        $sql = "SELECT *
                FROM room
                WHERE roo_hotel_id = $hotelId";

        $this->DB->query($sql);
        return $this->DB->toArray();
    }

    // Lấy ra chi tiết phòng
    public function getRoomDetail($roomId)
    {
        $sql = "SELECT *
                FROM room
                WHERE roo_id = $roomId";

        $this->DB->query($sql);
        return $this->DB->getOne();
    }

    // Lấy dánh sách khách sạn theo city id
    public function getHotelsByCity($cityId)
    {
        $sql = "SELECT h.*,
        c.cit_name,
        d.dis_name,d.dis_address_map
        FROM hotel h
        LEFT JOIN city c ON h.hot_city_id = c.cit_id
        LEFT JOIN district d ON h.hot_district_id = d.dis_id
        WHERE 1=1 AND h.hot_city_id =" . $cityId;
        $hotels = $this->DB->query($sql)->toArray();
        return $hotels;
    }
}
