<div class="col-lg-4 col-xl-3 order-lg-1 width-md-100">
    <div class="navbar-expand-lg navbar-expand-lg-collapse-block">
        <button class="btn d-lg-none mb-5 p-0 collapsed" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="far fa-caret-square-down text-primary font-size-20 card-btn-arrow ml-0"></i>
            <span class="text-primary ml-2">Sidebar</span>
        </button>
        <div id="sidebar" class="collapse navbar-collapse">
            <div class="mb-6 w-100">
                <!-- Tìm kiếm theo tên ks hoặc địa điểm -->
                <? include('search.php') ?>
                <div class="pb-4 mb-2">
                    <a href="#ontargetModal" class="d-block border rounded" data-modal-target="#ontargetModal" data-modal-effect="fadein">
                        <img src="/website/public/img/map-markers/map.jpg" alt="" width="100%" />
                    </a>
                    <!-- On Target Modal -->
                    <div id="ontargetModal" class="js-modal-window u-modal-window max-height-100vh width-100vw overflow-hidden" data-modal-type="ontarget" data-open-effect="zoomIn" data-close-effect="zoomOut" data-speed="500">
                        <div class="bg-white">
                            <div class="border-bottom py-xl-2">
                                <div class="row d-block d-md-flex flex-horizontal-center mx-0">
                                    <div class="col-xl">
                                        <!-- Nav Links -->
                                        <ul class="row nav align-items-center py-xl-1 px-0 mb-3 mb-xl-0 border-bottom border-xl-bottom-0" role="tablist">
                                            <li class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1">
                                                <select class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto" data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center">
                                                    <option value="one" selected>City</option>
                                                    <option value="two">Two</option>
                                                    <option value="three">Three</option>
                                                    <option value="four">Four</option>
                                                </select>
                                            </li>
                                            <li class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                                <select class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto" data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center">
                                                    <option value="one" selected>Price</option>
                                                    <option value="two">Two</option>
                                                    <option value="three">Three</option>
                                                    <option value="four">Four</option>
                                                </select>
                                            </li>
                                            <li class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                                <select class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto" data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center">
                                                    <option value="one" selected>Stars</option>
                                                    <option value="two">Two</option>
                                                    <option value="three">Three</option>
                                                    <option value="four">Four</option>
                                                </select>
                                            </li>
                                            <li class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                                <select class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto" data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center">
                                                    <option value="one" selected>Guest Rating</option>
                                                    <option value="two">Two</option>
                                                    <option value="three">Three</option>
                                                    <option value="four">Four</option>
                                                </select>
                                            </li>
                                            <li class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                                <select class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto" data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center">
                                                    <option value="one" selected>Meals</option>
                                                    <option value="two">Two</option>
                                                    <option value="three">Three</option>
                                                    <option value="four">Four</option>
                                                </select>
                                            </li>
                                            <li class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                                <select class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto" data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center">
                                                    <option value="one" selected>Facilities</option>
                                                    <option value="two">Two</option>
                                                    <option value="three">Three</option>
                                                    <option value="four">Four</option>
                                                </select>
                                            </li>
                                            <li class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                                <select class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto" data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center">
                                                    <option value="one" selected>Property Type</option>
                                                    <option value="two">Two</option>
                                                    <option value="three">Three</option>
                                                    <option value="four">Four</option>
                                                </select>
                                            </li>
                                        </ul>
                                        <!-- End Nav Links -->
                                    </div>
                                    <div class="col-xl-auto">
                                        <div class="d-flex justify-content-center justify-content-xl-start">
                                            <button type="button" class="btn btn-wide btn-blue-1 font-weight-normal font-size-14 rounded-xs mb-3 mb-xl-0" aria-label="Close" onclick="Custombox.modal.close();">
                                                <span aria-hidden="true">Back to hotel list</span>
                                                <i class="fas fa-times font-size-15 ml-3"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="height-100vh-72">
                                <div class="row no-gutters">
                                    <div class="col-lg-5 col-xl-4 col-wd-3gdot5 order-1 order-lg-0">
                                        <div class="pt-4 px-4 px-xl-5">
                                            <div class="mb-4">
                                                <div class="mb-2 text-gray-1">50 of 3771 hotels shown</div>
                                                <select class="form-control js-select selectpicker dropdown-select" required="" data-msg="Please select option." data-error-class="u-has-error" data-success-class="u-has-success" data-style="form-control font-size-14 border-width-2 border-gray font-weight-normal">
                                                    <option value="One" selected>Recommended</option>
                                                    <option value="Two">Low to High</option>
                                                    <option value="Three">High to Low</option>
                                                    <option value="Four">Popular</option>
                                                </select>
                                            </div>
                                            <div class="js-scrollbar height-100vh-72">
                                                <ul class="d-block list-unstyled">
                                                    <li class="card mb-4 overflow-hidden">
                                                        <div class="product-item__outer w-100">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="product-item__header">
                                                                        <div class="position-relative">
                                                                            <a href="#" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-150 card-img-top" src="../../assets/img/300x230/img58.jpg" /></a>
                                                                        </div>
                                                                        <div class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                            <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                                <span class="flaticon-valentine-heart"></span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="position-absolute bottom-0 left-0 right-0">
                                                                            <div class="px-4 pb-3">
                                                                                <a href="#" class="d-block">
                                                                                    <div class="d-flex align-items-center font-size-14 text-white">
                                                                                        <i class="icon flaticon-pin-1 mr-2 font-size-20"></i>
                                                                                        Greater London
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 flex-horizontal-center">
                                                                    <div class="w-100 position-relative m-4 m-md-0">
                                                                        <div class="mb-1 pb-1">
                                                                            <span class="green-lighter ml-2">
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                            </span>
                                                                        </div>
                                                                        <a href="#">
                                                                            <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay
                                                                            </span>
                                                                        </a>
                                                                        <div class="card-body p-0">
                                                                            <div class="my-2">
                                                                                <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                                            </div>
                                                                            <div class="mb-0">
                                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                <span class="font-weight-bold">£350.00</span>
                                                                                <span class="font-size-14 text-gray-1">
                                                                                    / night</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="card mb-4 overflow-hidden">
                                                        <div class="product-item__outer w-100">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="product-item__header">
                                                                        <div class="position-relative">
                                                                            <a href="#" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-150 card-img-top" src="../../assets/img/300x230/img59.jpg" /></a>
                                                                        </div>
                                                                        <div class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                            <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                                <span class="flaticon-valentine-heart"></span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="position-absolute bottom-0 left-0 right-0">
                                                                            <div class="px-4 pb-3">
                                                                                <a href="#" class="d-block">
                                                                                    <div class="d-flex align-items-center font-size-14 text-white">
                                                                                        <i class="icon flaticon-pin-1 mr-2 font-size-20"></i>
                                                                                        Greater London
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 flex-horizontal-center">
                                                                    <div class="w-100 position-relative m-4 m-md-0">
                                                                        <div class="mb-1 pb-1">
                                                                            <span class="green-lighter ml-2">
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                            </span>
                                                                        </div>
                                                                        <a href="#">
                                                                            <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay
                                                                            </span>
                                                                        </a>
                                                                        <div class="card-body p-0">
                                                                            <div class="my-2">
                                                                                <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                                            </div>
                                                                            <div class="mb-0">
                                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                <span class="font-weight-bold">£350.00</span>
                                                                                <span class="font-size-14 text-gray-1">
                                                                                    / night</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="card mb-4 overflow-hidden">
                                                        <div class="product-item__outer w-100">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="product-item__header">
                                                                        <div class="position-relative">
                                                                            <a href="#" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-150 card-img-top" src="../../assets/img/300x230/img60.jpg" /></a>
                                                                        </div>
                                                                        <div class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                            <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                                <span class="flaticon-valentine-heart"></span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="position-absolute bottom-0 left-0 right-0">
                                                                            <div class="px-4 pb-3">
                                                                                <a href="#" class="d-block">
                                                                                    <div class="d-flex align-items-center font-size-14 text-white">
                                                                                        <i class="icon flaticon-pin-1 mr-2 font-size-20"></i>
                                                                                        Greater London
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 flex-horizontal-center">
                                                                    <div class="w-100 position-relative m-4 m-md-0">
                                                                        <div class="mb-1 pb-1">
                                                                            <span class="green-lighter ml-2">
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                            </span>
                                                                        </div>
                                                                        <a href="#">
                                                                            <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay
                                                                            </span>
                                                                        </a>
                                                                        <div class="card-body p-0">
                                                                            <div class="my-2">
                                                                                <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                                            </div>
                                                                            <div class="mb-0">
                                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                <span class="font-weight-bold">£350.00</span>
                                                                                <span class="font-size-14 text-gray-1">
                                                                                    / night</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="card mb-4 overflow-hidden">
                                                        <div class="product-item__outer w-100">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="product-item__header">
                                                                        <div class="position-relative">
                                                                            <a href="#" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-150 card-img-top" src="../../assets/img/300x230/img3.jpg" /></a>
                                                                        </div>
                                                                        <div class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                            <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                                <span class="flaticon-valentine-heart"></span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="position-absolute bottom-0 left-0 right-0">
                                                                            <div class="px-4 pb-3">
                                                                                <a href="#" class="d-block">
                                                                                    <div class="d-flex align-items-center font-size-14 text-white">
                                                                                        <i class="icon flaticon-pin-1 mr-2 font-size-20"></i>
                                                                                        Greater London
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 flex-horizontal-center">
                                                                    <div class="w-100 position-relative m-4 m-md-0">
                                                                        <div class="mb-1 pb-1">
                                                                            <span class="green-lighter ml-2">
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                            </span>
                                                                        </div>
                                                                        <a href="#">
                                                                            <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay
                                                                            </span>
                                                                        </a>
                                                                        <div class="card-body p-0">
                                                                            <div class="my-2">
                                                                                <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                                            </div>
                                                                            <div class="mb-0">
                                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                <span class="font-weight-bold">£350.00</span>
                                                                                <span class="font-size-14 text-gray-1">
                                                                                    / night</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="card mb-4 overflow-hidden">
                                                        <div class="product-item__outer w-100">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="product-item__header">
                                                                        <div class="position-relative">
                                                                            <a href="#" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-150 card-img-top" src="../../assets/img/300x230/img61.jpg" /></a>
                                                                        </div>
                                                                        <div class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                            <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                                <span class="flaticon-valentine-heart"></span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="position-absolute bottom-0 left-0 right-0">
                                                                            <div class="px-4 pb-3">
                                                                                <a href="#" class="d-block">
                                                                                    <div class="d-flex align-items-center font-size-14 text-white">
                                                                                        <i class="icon flaticon-pin-1 mr-2 font-size-20"></i>
                                                                                        Greater London
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 flex-horizontal-center">
                                                                    <div class="w-100 position-relative m-4 m-md-0">
                                                                        <div class="mb-1 pb-1">
                                                                            <span class="green-lighter ml-2">
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                            </span>
                                                                        </div>
                                                                        <a href="#">
                                                                            <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay
                                                                            </span>
                                                                        </a>
                                                                        <div class="card-body p-0">
                                                                            <div class="my-2">
                                                                                <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                                            </div>
                                                                            <div class="mb-0">
                                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                <span class="font-weight-bold">£350.00</span>
                                                                                <span class="font-size-14 text-gray-1">
                                                                                    / night</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="card mb-4 overflow-hidden">
                                                        <div class="product-item__outer w-100">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="product-item__header">
                                                                        <div class="position-relative">
                                                                            <a href="#" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-150 card-img-top" src="../../assets/img/300x230/img62.jpg" /></a>
                                                                        </div>
                                                                        <div class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                            <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                                <span class="flaticon-valentine-heart"></span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="position-absolute bottom-0 left-0 right-0">
                                                                            <div class="px-4 pb-3">
                                                                                <a href="#" class="d-block">
                                                                                    <div class="d-flex align-items-center font-size-14 text-white">
                                                                                        <i class="icon flaticon-pin-1 mr-2 font-size-20"></i>
                                                                                        Greater London
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 flex-horizontal-center">
                                                                    <div class="w-100 position-relative m-4 m-md-0">
                                                                        <div class="mb-1 pb-1">
                                                                            <span class="green-lighter ml-2">
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                            </span>
                                                                        </div>
                                                                        <a href="#">
                                                                            <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay
                                                                            </span>
                                                                        </a>
                                                                        <div class="card-body p-0">
                                                                            <div class="my-2">
                                                                                <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                                            </div>
                                                                            <div class="mb-0">
                                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                <span class="font-weight-bold">£350.00</span>
                                                                                <span class="font-size-14 text-gray-1">
                                                                                    / night</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="card mb-4 overflow-hidden">
                                                        <div class="product-item__outer w-100">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="product-item__header">
                                                                        <div class="position-relative">
                                                                            <a href="#" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-150 card-img-top" src="../../assets/img/300x230/img63.jpg" /></a>
                                                                        </div>
                                                                        <div class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                            <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                                <span class="flaticon-valentine-heart"></span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="position-absolute bottom-0 left-0 right-0">
                                                                            <div class="px-4 pb-3">
                                                                                <a href="#" class="d-block">
                                                                                    <div class="d-flex align-items-center font-size-14 text-white">
                                                                                        <i class="icon flaticon-pin-1 mr-2 font-size-20"></i>
                                                                                        Greater London
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 flex-horizontal-center">
                                                                    <div class="w-100 position-relative m-4 m-md-0">
                                                                        <div class="mb-1 pb-1">
                                                                            <span class="green-lighter ml-2">
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                            </span>
                                                                        </div>
                                                                        <a href="#">
                                                                            <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay
                                                                            </span>
                                                                        </a>
                                                                        <div class="card-body p-0">
                                                                            <div class="my-2">
                                                                                <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                                            </div>
                                                                            <div class="mb-0">
                                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                <span class="font-weight-bold">£350.00</span>
                                                                                <span class="font-size-14 text-gray-1">
                                                                                    / night</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="card mb-4 overflow-hidden">
                                                        <div class="product-item__outer w-100">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="product-item__header">
                                                                        <div class="position-relative">
                                                                            <a href="#" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-150 card-img-top" src="../../assets/img/300x230/img9.jpg" /></a>
                                                                        </div>
                                                                        <div class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                            <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                                <span class="flaticon-valentine-heart"></span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="position-absolute bottom-0 left-0 right-0">
                                                                            <div class="px-4 pb-3">
                                                                                <a href="#" class="d-block">
                                                                                    <div class="d-flex align-items-center font-size-14 text-white">
                                                                                        <i class="icon flaticon-pin-1 mr-2 font-size-20"></i>
                                                                                        Greater London
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 flex-horizontal-center">
                                                                    <div class="w-100 position-relative m-4 m-md-0">
                                                                        <div class="mb-1 pb-1">
                                                                            <span class="green-lighter ml-2">
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                            </span>
                                                                        </div>
                                                                        <a href="#">
                                                                            <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay
                                                                            </span>
                                                                        </a>
                                                                        <div class="card-body p-0">
                                                                            <div class="my-2">
                                                                                <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                                            </div>
                                                                            <div class="mb-0">
                                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                <span class="font-weight-bold">£350.00</span>
                                                                                <span class="font-size-14 text-gray-1">
                                                                                    / night</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="card mb-4 overflow-hidden">
                                                        <div class="product-item__outer w-100">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="product-item__header">
                                                                        <div class="position-relative">
                                                                            <a href="#" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-150 card-img-top" src="../../assets/img/300x230/img10.jpg" /></a>
                                                                        </div>
                                                                        <div class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                            <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                                <span class="flaticon-valentine-heart"></span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="position-absolute bottom-0 left-0 right-0">
                                                                            <div class="px-4 pb-3">
                                                                                <a href="#" class="d-block">
                                                                                    <div class="d-flex align-items-center font-size-14 text-white">
                                                                                        <i class="icon flaticon-pin-1 mr-2 font-size-20"></i>
                                                                                        Greater London
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 flex-horizontal-center">
                                                                    <div class="w-100 position-relative m-4 m-md-0">
                                                                        <div class="mb-1 pb-1">
                                                                            <span class="green-lighter ml-2">
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                                <small class="fas fa-star font-size-10"></small>
                                                                            </span>
                                                                        </div>
                                                                        <a href="#">
                                                                            <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire Prestige Causeway Bay
                                                                            </span>
                                                                        </a>
                                                                        <div class="card-body p-0">
                                                                            <div class="my-2">
                                                                                <span class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                <span class="font-size-14 text-gray-1 ml-2">(166 reviews)</span>
                                                                            </div>
                                                                            <div class="mb-0">
                                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                <span class="font-weight-bold">£350.00</span>
                                                                                <span class="font-size-14 text-gray-1">
                                                                                    / night</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-xl-8 col-wd-8gdot5">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15544.315136188916!2d80.28787859999998!3d13.09419335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7f6b00bf787831af!2sApollo%20City%20Centre%20Hospital%20Sowcarpet!5e0!3m2!1sen!2sin!4v1580992215999!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border: 0" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End On Target Modal -->
                </div>
                <div class="sidenav border border-color-8 rounded-xs">
                    <!-- STAR -->
                    <? include('star.php') ?>
                    <!-- END STAR -->

                    <!-- PRICE -->
                    <? include('price.php') ?>
                    <!-- PRICE -->

                    <!-- LOẠI HÌNH -->
                    <? include('type.php') ?>
                    <!-- END LOẠI HÌNH -->

                    <!-- Quận huyên -->
                    <? include('district.php') ?>
                    <!-- End quận huyện -->


                    <!-- Tiện ích -->
                    <? include('amenity.php') ?>
                    <!-- End tiện ích -->

                    <!-- End Accordion -->
                </div>
            </div>
        </div>
    </div>
</div>