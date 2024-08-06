<!DOCTYPE html>
<html lang="en">

<head>
    <?=
    $Layout->loadHead();
    ?>
</head>

<body>
    <?=
    $Layout->loadHeader();
    ?>
    <!-- Content -->
    <main id="content">
        <!-- ========== HERO ========== -->
        <? include('hero.php'); ?>
        <!-- ========== END HERO ========== -->

        <!-- Khách sạn phổ biến nhất -->
        <? include('popular.php'); ?>

        <!-- Huyện phổ biến nhất -->
        <? include('district_popular.php'); ?>

        <!-- Banner -->
        <? include('banner.php'); ?>

        <!-- Recommended hotel -->
        <? include('recommended.php'); ?>

        <!-- Icon Block v1 -->
        <div class="icon-block-center icon-center-v1 border-bottom border-color-8">
            <div class="container text-center space-bottom-1">
                <!-- Title -->
                <div class="w-md-80 w-lg-50 text-center mx-md-auto pb-1">
                    <h2 class="section-title text-black font-size-30 font-weight-bold">Why Choose</h2>
                </div>
                <!-- End Title -->

                <!-- Features -->
                <div class="mb-2">
                    <div class="row">
                        <!-- Icon Block -->
                        <div class="col-md-4">
                            <i class="flaticon-price text-primary font-size-80 mb-3"></i>
                            <h5 class="font-size-17 text-dark font-weight-bold mb-2">
                                <a href="#">Competitive Pricing</a>
                            </h5>
                            <p class="text-gray-1 px-xl-2 px-uw-7">
                                With 500+ suppliers and the purchasing power of 300 million members, mytravel.com
                                can save you more!
                            </p>
                        </div>
                        <!-- End Icon Block -->

                        <!-- Icon Block -->
                        <div class="col-md-4">
                            <i class="flaticon-medal text-primary font-size-80 mb-3"></i>
                            <h5 class="font-size-17 text-dark font-weight-bold mb-2">
                                <a href="#">Award-Winning Service</a>
                            </h5>
                            <p class="text-gray-1 px-xl-2 px-uw-7">
                                Travel worry-free knowing that we're here if you needus, 24 hours a day
                            </p>
                        </div>
                        <!-- End Icon Block -->

                        <!-- Icon Block -->
                        <div class="col-md-4">
                            <i class="flaticon-global-1 text-primary font-size-80 mb-3"></i>
                            <h5 class="font-size-17 text-dark font-weight-bold mb-2">
                                <a href="#">Worldwide Coverage</a>
                            </h5>
                            <p class="text-gray-1 px-xl-2 px-uw-7">
                                Over 1,200,000 hotels in more than 200 countries and regions & flights to over
                                5,000 cities
                            </p>
                        </div>
                        <!-- End Icon Block -->
                    </div>
                </div>
                <!-- End Features -->
            </div>
        </div>
        <!-- End Icon Block v1 -->
    </main>
    <?=
    $Layout->loadfooter();
    ?>
</body>

</html>