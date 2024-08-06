<?
include '../../config/require_cms.php';
require_once __DIR__ . '/../../controllers/HotelController.php';

$HotelController = new HotelController($DB);


// Lấy ra đường link hiện tại để lấy slug của hotel
$urlArr = explode("/", getCurrentUrl());

$slug = $urlArr[count($urlArr) - 1];

if ($slug == 'index.php') {
    redirect_url('/website/views/list/index.php');
}


/** LẤY RA HOTEL DETAIL THEO SLUG */
$hotel = $HotelController->getDetail($slug);

if (!$hotel) {
    redirect_url('/website/views/list/index.php');
    exit();
}

/** MẢNG ẢNH CỦA HOTEL */
$images = json_decode($hotel['images'], true);

// Lấy ra danh sách khách sạn lân cận
$nearbyHotels = $HotelController->getNearbyHotels($hotel['hot_district_id']);
