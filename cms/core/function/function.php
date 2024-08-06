<?
/**
 * get_key_time_view()
 * Generate ra key cua array dung de render ra chart theo time va type truyen vao
 * @param mixed $time: integer
 * @param integer $type: 1: Theo ngay, 2: Theo tuan, 3: Theo thang
 * @return void integer $key
 */
function get_key_time_view($time, $type = 1) {
    
    $key    =   0;
    
    switch ($type) {
        //Xem theo ngày
        case 1:
            $key    =   strtotime('today', $time);
            break;
        
        //Xem theo tuần
        case 2:
            $key    =   strtotime('monday this week', $time);
            break;
            
        //Xem theo tháng
        case 3:
            $key    =   strtotime('first day of this month 00:00:00', $time);
            break;
        
        default:
            $key    =   strtotime('today', $time);
            break;
    }
    
    return $key;
}

/**
 * get_label_item_chart()
 * Lấy label của chart khi xem theo ngày tuần tháng
 * @param mixed $time
 * @param integer $type
 * @return
 */
function get_label_item_chart($time, $type = 1) {
    
    $label  =   'N/A';
    
    switch ($type) {
        //Xem theo ngày
        case 1:
            $label  =   date('d/m', $time);
            break;
        
        //Xem theo tuần
        case 2:
            $date   =   strtotime('monday this week', $time);
            $label  =   date('d', $date) . '-' . date('d/m', $date + 86400 * 7 - 1);
            break;
            
        //Xem theo tháng
        case 3:
            $label  =   date('m/Y', $time);
            break;
        
        default:
            $label  =   date('d/m', $time);
            break;
    }
    
    return $label;
}


/**
 * restruct_json_encoded()
 * Remove chuoi json bi loi thanh chuoi dung
 * @param mixed $string_json
 * @return string json
 */
function restruct_json_encoded($string_json)
{
    $string_json    =   str_replace('"[{"id"', '[{"id"', $string_json);
    $string_json    =   str_replace('"}]"', '"}]', $string_json);

    return $string_json;
}

// Lấy tẩt cả ngày trong khoảng thời gian
function create_date_range_array($iDateFrom,$iDateTo)
{
    $aryRange = [];

    array_push($aryRange, $iDateFrom);
    if ($iDateTo > $iDateFrom) {
        do{
            $iDateFrom += 86400; // add 24 hours
            array_push($aryRange, $iDateFrom);
        } while ($iDateFrom<$iDateTo);
    }
    return $aryRange;
}
?>