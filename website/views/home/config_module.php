<?
// Lấy ra 10 hotel phổ biến nhất và được phép hiển thị thuộc 1 tỉnh
// VD Đà Nẵng -> cit_id = 48
$hotel_popular = $DB->query('SELECT h.*, d.dis_address_map
            FROM hotel h
            JOIN district d ON h.hot_district_id = d.dis_id
            WHERE h.hot_hot = 1 AND h.hot_active = 1 AND  h.hot_page_cover IS NOT NULL AND h.hot_city_id = ' . CITY_ID . '
            LIMIT 10')->toArray();

// Lấy ra 6 huyện phổ biến nhất của tỉnh đó và lấy ra số hotel thuộc huyện đó
// ví dụ : Đà Nẵng
$district_popular = $DB->query('SELECT d.*, COUNT(h.hot_id) AS hotel_count
FROM district d
LEFT JOIN hotel h ON d.dis_id = h.hot_district_id
WHERE d.dis_city_id = ' . CITY_ID . '
GROUP BY d.dis_id, d.dis_name
LIMIT 6')->toArray();

$star_ratings = $DB->query('SELECT DISTINCT hot_star FROM hotel WHERE hot_active = 1 AND hot_promotion = 1 ORDER BY hot_star DESC LIMIT 2')->toArray();

$amenities = $DB->query('SELECT ame.* FROM amenity ame LEFT JOIN amenity_group gr ON gr.amg_id = ame.ame_group_id WHERE gr.amg_name = "Vị trí"')->toArray();
