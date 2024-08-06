<?
// Lấy ra danh sách khách sạn tại tỉnh đó với key là tên huyện
$hotelsByGroupDistrict = $DB->query("SELECT h.*, d.dis_name FROM hotel h 
    LEFT JOIN district d on h.hot_district_id = d.dis_id
 WHERE hot_city_id = 48 AND h.hot_active = 1 AND h.hot_hot = 1")->toArray();
$groupedHotels = array();

foreach ($hotelsByGroupDistrict as $hotel) {
    $districtId = $hotel['dis_name'];
    if (!isset($groupedHotels[$districtId])) {
        $groupedHotels[$districtId] = array();
    }
    $groupedHotels[$districtId][] = $hotel;
}

?>

<!-- Responsive Toggle Button -->
<button type="button" class="navbar-toggler btn u-hamburger u-hamburger--primary order-2 ml-3" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
    <span id="hamburgerTrigger" class="u-hamburger__box">
        <span class="u-hamburger__inner"></span>
    </span>
</button>
<!-- End Responsive Toggle Button -->
<!-- Navigation -->
<div id="navBar" class="navbar-collapse u-header__navbar-collapse collapse order-2 order-xl-0 pt-4 p-xl-0 position-relative">
    <ul class="navbar-nav u-header__navbar-nav">
        <!-- Hotel -->
        <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
            <a id="hotelMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-border" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="hotelSubMenu">Khách sạn</a>
            <!-- Hotel Submenu -->
            <ul id="hotelSubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu-rounded u-header__sub-menu-bordered hs-sub-menu-right u-header__sub-menu--spacer" aria-labelledby="hotelMenu" style="min-width: 230px">
                <li>
                    <a class="nav-link u-header__sub-menu-nav-link" href="../hotels/hotel-list.html">Sidebar</a>
                </li>
                <li>
                    <a class="nav-link u-header__sub-menu-nav-link" href="../hotels/hotel-list-02.html">List With Map</a>
                </li>
                <li>
                    <a class="nav-link u-header__sub-menu-nav-link" href="../hotels/hotel-single-v1.html">Hotel Single v1</a>
                </li>
                <li>
                    <a class="nav-link u-header__sub-menu-nav-link" href="../hotels/hotel-single-v2.html">Hotel Single v2</a>
                </li>
                <li>
                    <a class="nav-link u-header__sub-menu-nav-link" href="../hotels/hotel-single-v3.html">Hotel Single v3</a>
                </li>
                <li>
                    <a class="nav-link u-header__sub-menu-nav-link" href="../hotels/hotel-booking.html">Hotel Booking</a>
                </li>
            </ul>
            <!-- End Hotel Submenu -->
        </li>
        <!-- End Hotel -->

        <!-- KHÁCH SẠN THEO HUYỆN -->
        <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-max-width="722px" data-position="right">
            <a id="tourMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Khách sạn</a>

            <!-- Tour - Mega Menu -->
            <div class="hs-mega-menu u-header__sub-menu u-header__sub-menu-rounded" aria-labelledby="tourMegaMenu">
                <div class="row">
                    <? foreach ($groupedHotels as $key => $hotel) : ?>
                        <div class="col-12 col-xl-3dot64">
                            <span class="u-header__sub-menu-title"><?= $key ?></span>
                            <ul class="u-header__sub-menu-nav-group u-header__sub-menu-bordered mb-3">
                                <? foreach ($groupedHotels[$key] as $item) : ?>
                                    <li class="single-line">
                                        <a class="nav-link u-header__sub-menu-nav-link" href="/website/views/detail/<?= $item['hot_slug'] ?>"><?= $item['hot_name'] ?></a>
                                    </li>
                                <? endforeach; ?>
                            </ul>
                        </div>
                    <? endforeach; ?>
                </div>

            </div>
            <!-- End Tour - Mega Menu -->
        </li>
        <!-- End KHÁCH SẠN THEO HUYỆN -->

        <!-- Pages -->
        <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-max-width="722px" data-position="right">
            <a id="pagesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Pages</a>
            <!-- Pages - Mega Menu -->
            <div class="hs-mega-menu u-header__sub-menu u-header__sub-menu-rounded" aria-labelledby="pagesMegaMenu">
                <div class="row">
                    <div class="col-12 col-xl-4">
                        <ul class="u-header__sub-menu-nav-group u-header__sub-menu-bordered mb-3">
                            <li>
                                <a class="nav-link u-header__sub-menu-nav-link" href="../others/destination.html">Destination</a>
                            </li>
                            <li>
                                <a class="nav-link u-header__sub-menu-nav-link" href="../others/about.html">About us</a>
                            </li>
                            <li>
                                <a class="nav-link u-header__sub-menu-nav-link" href="../others/contact.html">Contact</a>
                            </li>
                            <li>
                                <a class="nav-link u-header__sub-menu-nav-link" href="../others/terms-conditions.html">Terms of Use</a>
                            </li>
                            <li>
                                <a class="nav-link u-header__sub-menu-nav-link" href="../others/faq.html">FAQs</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-xl-4">
                        <ul class="u-header__sub-menu-nav-group u-header__sub-menu-bordered mb-3">
                            <li>
                                <a class="nav-link u-header__sub-menu-nav-link" href="../blog/blog-list.html">Blog</a>
                            </li>
                            <li>
                                <a class="nav-link u-header__sub-menu-nav-link" href="../blog/blog-single.html">Blog Single</a>
                            </li>
                            <li>
                                <a class="nav-link u-header__sub-menu-nav-link" href="../others/become-expert.html">Become Expert</a>
                            </li>
                            <li>
                                <a class="nav-link u-header__sub-menu-nav-link" href="../others/404.html">404</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-xl-4">
                        <a href="../../documentation/index.html" class="btn btn-soft-primary mb-3 w-100"><span class="fas fa-laptop-code mr-2"></span>Documentation</a>
                        <a href="../../starter/index.html" class="btn btn-soft-secondary w-100"><span class="fas fa-th mr-2"></span>Starter</a>
                    </div>
                </div>
            </div>
            <!-- End Pages - Mega Menu -->
        </li>
        <!-- End Pages -->

        <!-- Thông tin -->
        <div class="d-flex align-items-center">
            <ul class="list-inline u-header__topbar-nav-divider mb-0">
                <li class="list-inline-item mr-0">
                    <a href="tel:(000)999-898-999" class="u-header__navbar-link">(000) 999 - 898 -999</a>
                </li>
                <li class="list-inline-item mr-0">
                    <a href="mailto:info@myhotel.com" class="u-header__navbar-link">info@myhotel.com</a>
                </li>
            </ul>
        </div>
        <!-- End thông tin -->
    </ul>
</div>
<!-- End Navigation -->