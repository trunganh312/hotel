<?
include '../../config/require_cms.php';

// Lấy ra danh sách quận huyện tại 1 tỉnh. VD: Tại Đà Năng là 48
$districts   =  $DB->query("SELECT dis_name FROM district WHERE dis_city_id = " . CITY_ID)->toArray();

// Lấy ra dánh sách tiện ích
$amenities = $DB->query("SELECT * FROM amenity")->toArray();
