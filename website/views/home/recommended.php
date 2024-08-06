  <!-- Tabs v3 -->
  <div class="tabs-block tabs-v3">
      <div class="container space-top-1 pb-3 mb-1">
          <div class="w-md-80 w-lg-50 text-center mx-md-auto my-3">
              <h2 class="section-title text-black font-size-30 font-weight-bold mb-0">
                  Khách sạn nên thử
              </h2>
          </div>
          <!-- Nav Classic -->
          <ul class="nav tab-nav-line flex-nowrap pb-4 tab-nav justify-content-lg-center text-nowrap" role="tablist">
              <!-- Tab các huyện tại tỉnh đó -->
              <?php foreach ($district_popular as $index => $district) : ?>
                  <li class="nav-item">
                      <a class="nav-link font-weight-medium <?= $index === 0 ? 'active' : '' ?>" id="pills-<?= $district['dis_id'] ?>-tab" data-toggle="pill" href="#pills-<?= $district['dis_id'] ?>" role="tab" aria-controls="pills-<?= $district['dis_id'] ?>" aria-selected="<?= $index === 0 ? 'true' : 'false' ?>">
                          <div class="d-flex flex-column flex-md-row position-relative text-dark align-items-center">
                              <span class="tabtext font-weight-semi-bold"><?= $district['dis_name'] ?></span>
                          </div>
                      </a>
                  </li>
              <?php endforeach; ?>

          </ul>

          <!-- End Nav Classic -->
          <div class="tab-content">
              <!-- Tab content theo id huyện -->
              <?php foreach ($district_popular as $index => $district) : ?>
                  <div class="tab-pane fade <?= $index === 0 ? 'active show' : '' ?>" id="pills-<?= $district['dis_id'] ?>" role="tabpanel" aria-labelledby="pills-<?= $district['dis_id'] ?>-tab">
                      <div class="row">
                          <?php
                            // Lấy danh sách các khách sạn thuộc huyện này từ database
                            $hotels = $DB->query('SELECT h.*, d.dis_address_map FROM hotel h JOIN district d ON h.hot_district_id = d.dis_id WHERE h.hot_district_id = ' . $district['dis_id'])->toArray();
                            ?>
                          <?php foreach ($hotels as $hotel) : ?>
                              <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                  <?= itemHotel($hotel) ?>
                              </div>
                          <?php endforeach; ?>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>
      </div>
  </div>
  </div>
  <!-- End Tabs v3 -->