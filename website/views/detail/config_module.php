<?
include '../../config/require_web.php';
require_once __DIR__ . '/../../controllers/HotelController.php';

$HotelController = new HotelController($DB);

// Lấy ra đường link hiện tại để lấy slug của hotel
$urlArr = explode("/", getCurrentUrl());


$slug = $urlArr[count($urlArr) - 1];

$arrSlug = explode(".", $slug);
var_dump($arrSlug);

if ($arrSlug[count($arrSlug) - 1] == '') {
    redirect_url('' . URL_VIEW . 'list/index.php');
}



if ($slug == 'index.php') {
    redirect_url('' . URL_VIEW . 'list/index.php');
}

/** LẤY RA HOTEL DETAIL THEO SLUG */
$hotel = $HotelController->getDetail($slug);

if (!$hotel) {
    redirect_url('' . URL_VIEW . 'list/index.php');
    exit();
}

// Lấy ra danh sách phòng theo hotel id

$rooms = $HotelController->getRooms($hotel['hot_id']);


// Lấy ra tất cả ảnh thheo hotel id gom vào chung 1 type
$images = $DB->query("SELECT * FROM hotel_image WHERE hti_hotel_id = " . $hotel['hot_id'] . " ORDER BY hti_type_image")->toArray();


// Nhóm các hình ảnh theo loại
$groupedImages = [];
$total_image = 0;
foreach ($images as $image) {
    $type = $image['hti_type_image'];
    if (!isset($groupedImages[$type])) {
        $groupedImages[$type] = [
            'images' => [],
            'total' => 0,
        ];
    }
    $groupedImages[$type]['images'][] = $image;
    $groupedImages[$type]['total']++;
    $total_image++;
}

$groupedImages['total_image'] = $total_image;


if (!$hotel) {
    redirect_url('' . URL_VIEW . 'list/index.php');
    exit();
}

/** MẢNG ẢNH CỦA HOTEL */
$images = json_decode($hotel['images'], true);

// Lấy ra danh sách khách sạn lân cận
$nearbyHotels = $HotelController->getNearbyHotels($hotel['hot_district_id']);

// Lấy ra danh sách tất cả ks tại đà nẵng

$hotels = $HotelController->getHotelsByCityId(CITY_ID);

$hotelsJson = json_encode($hotels);

$hotelJson = json_encode($hotel);

// Lấy ra danh sách review của khách sạn 
$reviews = $DB->query('SELECT * FROM reviews WHERE rev_hotel_id = ' . $hotel['hot_id'] . ' AND rev_average > 4.5 LIMIT 100')->toArray();

// Tổng số review
$totalReviews = count($reviews);

// Tính trung bình điểm review của khách sạn đó
$averageRating = 0;
if ($totalReviews > 0) {
    foreach ($reviews as $review) {
        $averageRating += $review['rev_average'];
    }
    $averageRating = number_format($averageRating / $totalReviews, 1);

    $averages = [
        "rev_cleanliness" => 0,
        "rev_amenities" => 0,
        "rev_money" => 0,
        "rev_service" => 0,
        "rev_customer_support" => 0,
        "rev_location" => 0
    ];

    // Tính tổng cho mỗi hạng mục
    foreach ($reviews as $review) {
        $averages['rev_cleanliness'] += $review['rev_cleanliness'];
        $averages['rev_amenities'] += $review['rev_amenities'];
        $averages['rev_money'] += $review['rev_money'];
        $averages['rev_service'] += $review['rev_service'];
        $averages['rev_customer_support'] += $review['rev_customer_support'];
        $averages['rev_location'] += $review['rev_location'];
    }

    // Tính trung bình cho mỗi hạng mục
    foreach ($averages as $key => $average) {
        $averages[$key] = number_format($average / $totalReviews, 1); // Cập nhật giá trị trung bình
    }
}
