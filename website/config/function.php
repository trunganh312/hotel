<?

function formatVND($price)
{
    $formattedAmount = number_format($price, 0, ',', ',');
    return $formattedAmount;
}

// Show cục to 
// Chỉ dùng cho các huyện phổ biến trang chủ
function itemLarge($item)
{
    $url = getCurrentUrl();
    $html = '<div class="col-md-6 mb-3 mb-md-4">
                            <div class="min-height-350 bg-img-hero rounded-border p-5 gradient-overlay-half-bg-gradient transition-3d-hover shadow-hover-2" style="background-image: url(/uploads/district_cover/' . $item['dis_image'] . ')">
                            <header class="w-100 d-flex justify-content-between mb-3">
                            <div>
                                <div class="destination pb-3 text-lh-1">
                                    <a href="' . $url . '/views/list/index.php?district=' . $item['dis_name'] . '" class="text-white font-weight-bold font-size-21">' . $item['dis_name'] . '</a>
                                </div>
                                <div class="mt-1 pt-1">
                                    <a href="' . $url . '/views/list/index.php?district=' . $item['dis_name'] . '" class="text-white">' . $item['hotel_count'] . ' Hotel</a>
                                </div>
                            </div>
                        </header>
                        </div>
                    </div>';
    return $html;
}

// // Show cục nhỏ
// Chỉ dùng cho các huyện phổ biến trang chủ

function itemSmall($item)
{
    $url = getCurrentUrl();
    $html = '<div class="col-md-6 col-xl-3 mb-3 mb-md-4 pb-1">
                <div class="min-height-350 bg-img-hero rounded-border p-5 gradient-overlay-half-bg-gradient transition-3d-hover shadow-hover-2" style="background-image: url(/uploads/district_cover/' . $item['dis_image'] . ')">
                    <header class="w-100 d-flex justify-content-between mb-3">
                        <div>
                            <div class="destination pb-3 text-lh-1">
                                <a href="' . $url . '/views/list/index.php?district=' . $item['dis_name'] . '" class="text-white font-weight-bold font-size-21">' . $item['dis_name'] . '</a>
                            </div>
                            <div class="mt-1 pt-1">
                                <a href="' . $url . '/views/list/index.php?district=' . $item['dis_name'] . '" class="text-white">' . $item['hotel_count'] . ' Hotel</a>
                            </div>
                        </div>
                    </header>
                </div>
                </div>';
    return $html;
}

// Render star
function star($number)
{
    $html = '';
    for ($i = 0; $i < $number; $i++) {
        $html .= '<small class="fas fa-star font-size-10 mr-1"></small>';
    }
    return $html;
}

// Thêm page vào mà ko mất query trước
function getBaseUrlWithPage($currentPage)
{
    // Lấy URL hiện tại
    $currentUrl = $_SERVER['REQUEST_URI'];

    // Phân tích URL hiện tại
    $parsedUrl = parse_url($currentUrl);
    $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';

    // Phân tích các tham số truy vấn hiện tại
    parse_str($query, $queryParams);

    // Thay đổi tham số phân trang hoặc thêm nếu chưa có
    $queryParams['page'] = $currentPage;

    // Xây dựng lại chuỗi truy vấn
    $newQuery = http_build_query($queryParams);

    // Tạo URL mới
    $baseUrl = $parsedUrl['path'] . '?' . $newQuery;

    return $baseUrl;
}


// Tạo pagination
function createPagination($currentPage, $totalPages)
{
    // Số trang tối đa được hiển thị
    $maxPagesToShow = 5;

    // Tạo base URL cho các liên kết phân trang
    $baseUrl = getBaseUrlWithPage('');

    $paginationHtml = '<ul class="list-pagination-1 pagination border border-color-4 rounded-sm overflow-auto overflow-xl-visible justify-content-md-center align-items-center py-2 mb-0">';

    // Trang trước
    if ($currentPage > 1) {
        $paginationHtml .= '<li class="page-item">
            <a class="page-link border-right rounded-0 text-gray-5" href="' . getBaseUrlWithPage($currentPage - 1) . '" aria-label="Previous">
                <i class="flaticon-left-direction-arrow font-size-10 font-weight-bold"></i>
                <span class="sr-only">Previous</span>
            </a>
        </li>';
    } else {
        $paginationHtml .= '<li class="page-item disabled">
            <span class="page-link border-right rounded-0 text-gray-5" aria-label="Previous">
                <i class="flaticon-left-direction-arrow font-size-10 font-weight-bold"></i>
                <span class="sr-only">Previous</span>
            </span>
        </li>';
    }

    // Tính toán khoảng trang cần hiển thị
    $startPage = max(1, $currentPage - floor($maxPagesToShow / 2));
    $endPage = min($totalPages, $startPage + $maxPagesToShow - 1);

    // Điều chỉnh startPage nếu endPage nhỏ hơn maxPagesToShow
    if ($endPage - $startPage + 1 < $maxPagesToShow) {
        $startPage = max(1, $endPage - $maxPagesToShow + 1);
    }

    // Tạo các liên kết trang
    for ($page = $startPage; $page <= $endPage; $page++) {
        if ($page == $currentPage) {
            $paginationHtml .= '<li class="page-item"><a class="page-link font-size-14 active" href="#">' . $page . '</a></li>';
        } else {
            $paginationHtml .= '<li class="page-item"><a class="page-link font-size-14" href="' . getBaseUrlWithPage($page) . '">' . $page . '</a></li>';
        }
    }

    // Trang tiếp theo
    if ($currentPage < $totalPages) {
        $paginationHtml .= '<li class="page-item">
            <a class="page-link border-left rounded-0 text-gray-5" href="' . getBaseUrlWithPage($currentPage + 1) . '" aria-label="Next">
                <i class="flaticon-right-thin-chevron font-size-10 font-weight-bold"></i>
                <span class="sr-only">Next</span>
            </a>
        </li>';
    } else {
        $paginationHtml .= '<li class="page-item disabled">
            <span class="page-link border-left rounded-0 text-gray-5" aria-label="Next">
                <i class="flaticon-right-thin-chevron font-size-10 font-weight-bold"></i>
                <span class="sr-only">Next</span>
            </span>
        </li>';
    }

    $paginationHtml .= '</ul>';
    return $paginationHtml;
}


// Get url hiện tại
function getCurrentUrl()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $currentUrl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return $currentUrl;
}

// Show item
function itemHotel($hotel)
{
    $html = '<div class="card transition-3d-hover shadow-hover-2 h-100 w-100">
                        <div class="position-relative">
                            <a href="/website/views/detail/' . $hotel['hot_slug'] . '" class="d-block gradient-overlay-half-bg-gradient-v5">
                                <img class="card-img-top" src="/uploads/hotel_cover/' . $hotel['hot_page_cover'] . '" alt="Image Description" />
                            </a>
                            <div class="position-absolute bottom-0 left-0 right-0">
                                <div class="px-4 pb-3">
                                    <a href="/website/views/detail/' . $hotel['hot_slug'] . '" class="d-block" >
                                        <div class="d-flex align-items-center font-size-14 text-white">
                                            <i class="icon flaticon-placeholder mr-2 font-size-20"></i>
                                            ' . $hotel['dis_address_map'] . '
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-4 pt-2 pb-3" style="display: flex;flex-direction: column;
                            ">
                            <div class="mb-2">
                                <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary letter-spacing-3">
                                    <div class="green-lighter"
                                    ' . star($hotel['hot_rate']) . '
                                    </div>
                                </div>
                            </div>
                            <div style="flex: 1">
                            <a href="/website/views/detail/' . $hotel['hot_slug'] . '" class="card-title font-size-17 font-weight-medium text-dark">' . $hotel['hot_name'] . '</a>
                            </div>
                            <div class="mt-2 mb-3">
                                <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">' . $hotel['hot_rate'] . '/5</span>
                                 <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                            </div>
                            <div class="mb-2">
                                <span class="mr-1 font-size-14 text-gray-1">Chỉ từ</span>
                                <span class="font-weight-bold">' . formatVND($hotel['hot_price']) . 'VNĐ</span>
                                <span class="font-size-14 text-gray-1"> / đêm</span>
                            </div>
                             <div class="mb-0 w-100">
                                <a href="#" class="btn btn-primary p-1 w-100">Đặt phòng</a>
                            </div>
                        </div>
                    </div>';
    return $html;
}

// Fake review
function fakeReview()
{
    $fakeReview = array(
        0 => array(
            'rate' => 9.8,
            'category' => 'Sạch sẽ',
            'range' => '98%'
        ),
        1 => array(
            'rate' => 9.5,
            'category' => 'Tiện ích',
            'range' => '95%'
        ),
        2 => array(
            'rate' => 9.2,
            'category' => 'Giá cả',
            'range' => '92%'
        ),
        3 => array(
            'rate' => 9.7,
            'category' => 'Dịch vụ',
            'range' => '97%'
        ),
        4 => array(
            'rate' => 9.9,
            'category' => 'Chăm sóc khách hàng',
            'range' => '99%'
        ),
        5 => array(
            'rate' => 9.4,
            'category' => 'Vị trí',
            'range' => '94%'
        ),
    );
    $html = '';
    foreach ($fakeReview as $review) {
        $html .= '<div class="col-md-6 mb-4">
                    <h6 class="font-weight-normal text-gray-1 mb-1">
                        ' . $review['category'] . '
                    </h6>
                    <div class="flex-horizontal-center mr-6">
                        <div class="progress bg-gray-33 rounded-pill w-100" style="height: 7px;">
                            <div class="progress-bar rounded-pill" role="progressbar" style="width: ' . $review['range'] . ';" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="ml-3 text-primary font-weight-bold">
                            ' . $review['rate'] . '
                        </div>
                    </div>
                </div>';
    }
    return $html;
}
