<div class="pt-5 pb-3 px-5 border-bottom">
    <a href="'.URL_VIEW.'detail/<?= $room['hot_slug']  ?>" class="d-block mb-3">
        <img class="img-fluid rounded-xs" src="/uploads/room_cover/<?= $room['roo_cover'] ?>" alt="<?= $room['roo_name']  ?>">
    </a>
    <a href="'.URL_VIEW.'detail/<?= $room['hot_slug']  ?>" class="text-dark font-weight-bold pr-xl-1"><?= $room['roo_name']  ?></a>
    <div class="my-1 flex-horizontal-center text-gray-1">
        <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> <?= $room['hot_address_map']  ?>
    </div>
</div>