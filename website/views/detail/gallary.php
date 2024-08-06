<div class="col-lg-8 col-xl-9">
    <div class="pb-4 mb-2">
        <div class="row mx-n1">
            <!-- Hiển thị 1 cái ảnh đầu tiên của mảng -->
            <div class="col-lg-8 col-xl-9 mb-1 mb-lg-0 px-0 px-lg-1">
                <a class="js-fancybox u-media-viewer" href="javascript:;" data-src="/uploads/hotel_images/<?= $images[0] ?>" data-fancybox="fancyboxGallery6" data-caption="Ảnh <?= $hotel['hot_name'] ?>  #1" data-speed="700">
                    <img class="img-fluid border-radius-3 min-height-458" src="/uploads/hotel_images/<?= $images[0] ?>" alt="Image Description">
                    <span class="u-media-viewer__container">
                        <span class="u-media-viewer__icon">
                            <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                        </span>
                    </span>
                </a>
            </div>
            <div class="col-lg-4 col-xl-3 px-0">
                <!-- Show 3 ảnh nhỏ vị trí 1,2,3 -->
                <!-- Ảnh thứ 2 -->
                <a class="js-fancybox u-media-viewer pb-1" href="javascript:;" data-src="/uploads/hotel_images/<?= $images[1] ?>" data-fancybox="fancyboxGallery6" data-caption="Ảnh <?= $hotel['hot_name'] ?>  #2" data-speed="700">
                    <img class="img-fluid border-radius-3 min-height-150" src="/uploads/hotel_images/<?= $images[1] ?>" alt="Image Description">
                    <span class="u-media-viewer__container">
                        <span class="u-media-viewer__icon">
                            <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                        </span>
                    </span>
                </a>
                <!-- Ảnh thứ 3 -->
                <a class="js-fancybox u-media-viewer pb-1" href="javascript:;" data-src="/uploads/hotel_images/<?= $images[2] ?>" data-fancybox="fancyboxGallery6" data-caption="Ảnh <?= $hotel['hot_name'] ?>  #3" data-speed="700">
                    <img class="img-fluid border-radius-3 min-height-150" src="/uploads/hotel_images/<?= $images[2] ?>" alt="Image Description">

                    <span class="u-media-viewer__container">
                        <span class="u-media-viewer__icon">
                            <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                        </span>
                    </span>
                </a>
                <!-- Ảnh thứ 4 -->
                <a class="js-fancybox u-media-viewer u-media-viewer__dark" href="javascript:;" data-src="/uploads/hotel_images/<?= $images[3] ?>" data-fancybox="fancyboxGallery6" data-caption="Ảnh <?= $hotel['hot_name'] ?>  #4" data-speed="700">
                    <img class="img-fluid border-radius-3 min-height-150" src="/uploads/hotel_images/<?= $images[3] ?>" alt="Image Description">

                    <span class="u-media-viewer__container z-index-2 w-100">
                        <span class="u-media-viewer__icon u-media-viewer__icon--active w-100  bg-transparent">
                            <span class="u-media-viewer__icon-inner font-size-14">SEE ALL PHOTOS</span>
                        </span>
                    </span>
                </a>

                <!-- Show ảnh còn lại trong mảng -->
                <!-- Bỏ đi 4 phần tử đầu tiên trong mảng ảnh -->
                <?php for ($i = 4; $i < count($images); $i++) : ?>
                    <img class="js-fancybox d-none" alt="Image Description" data-fancybox="fancyboxGallery6" data-src="/uploads/hotel_images/<?= $images[$i] ?>" data-caption="Ảnh <?= $hotel['hot_name'] ?>  #<?= $i ?>" data-speed="700">
                <? endfor; ?>
            </div>
        </div>
    </div>
</div>