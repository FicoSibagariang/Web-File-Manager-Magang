<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2">
      <div class="position-relative">
        <div class="card">
          <div class="card-body" style="height: max-content;">
            <nav class="navbar-mail">
              <ul class="navbar-nav flex-column w-100">
                <div class="btn-group mb-3">
                  <button type="button" class="btn btn-danger btn-info" style="font-size: 13px;"><i class="fas fa-solid fa-plus mr-3"></i>Create New</button>

                  <button type="button" class="btn btn-danger btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" onclick="add_folder()" title="Add Folder">Folder</a>
                    <a class="dropdown-item" onclick="add_file()" title="Add File">File</a>
                  </div>
                </div>
                <li class="nav-item">
                  <a class="nav-link text-dark text-muted" aria-current="page" href="/recent">
                    <i class="nav-icon far fa-clock text-red"></i>
                    Recent
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark text-muted" aria-current="page" href="/manage">
                    <i class="nav-icon icon-link-hover far fa-folder text-red"></i>
                    My Files
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark text-muted" aria-current="page" href="#!">
                    <i class=" nav-icon fas fa-trash text-red"></i>
                    Deleted Files
                  </a>
                </li>
                <br><br><br><br><br><br><br><br><br><br>
              </ul>

            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-9 ml-3">
      <div class="row" style="margin-bottom: 10px; margin-left: 2px">
        <form action="#">
          <div class="input-group">
            <span class="input-group-append" style="width: 200px; position:relative">
              <input class="form-control rounded-3" type="search" value="" id="searchInput" placeholder="Search">
              <button class="btn  ms-n10 rounded-0 rounded-end" type="button" style="position: absolute; right:0;">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search text-dark">
                  <circle cx="11" cy="11" r="8"></circle>
                  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
              </button>
            </span>
          </div>
        </form>
      </div>

      <div class="mt-4 mb-6">
        <div class="mt-4 mb-6">
          <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true"><i class="fas fa-grip-vertical text-red"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false"><i class="fas fa-list text-red"></i></a>
            </li>
          </ul>
          <div class="tab-content" id="custom-content-below-tabContent">
            <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
              <h5 class="mb-3 mt-4" style="font-weight: bold;">Quick Access</h5>
              <div class="mt-4 mb-6">
                <div class="row ">
                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body">
                        <a href="">
                          <div class="d-flex align-items-center">
                            <i class="nav-icon far fa-file-word text-red" style="font-size: 25px; margin-right: 10px;"></i>
                            <div class="ml-2">
                              <h5 class="mb-0 text-dark" style="font-size: 20px; font-weight: bold;">Word</h5>
                              <span class="fs-6 "><span class="me-2 text-dark">213Kb</span>&nbsp;&nbsp;&nbsp;<span class="text-dark">17 Dec, 2023 06:39 am</span></span>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body">
                        <a href="">
                          <div class="d-flex align-items-center">
                            <i class="nav-icon far fa-file-pdf text-red" style="font-size: 25px; margin-right: 10px;"></i>
                            <div class="ml-2">
                              <h5 class="mb-0 text-dark" style="font-size: 20px; font-weight: bold;">PDF</h5>
                              <span class="fs-6 "><span class="me-2 text-dark">213Kb</span>&nbsp;&nbsp;&nbsp;<span class="text-dark">17 Dec, 2023 06:39 am</span></span>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body">
                        <a href="">
                          <div class="d-flex align-items-center">
                            <i class="nav-icon far fa-file-powerpoint text-red" style="font-size: 25px; margin-right: 10px;"></i>
                            <div class="ml-2">
                              <h5 class="mb-0 text-dark" style="font-size: 20px; font-weight: bold;">PowerPoint</h5>
                              <span class="fs-6 "><span class="me-2 text-dark">213Kb</span>&nbsp;&nbsp;&nbsp;<span class="text-dark">17 Dec, 2023 06:39 am</span></span>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body">
                        <a href="">
                          <div class="d-flex align-items-center">
                            <i class="nav-icon far fa-file-excel text-red" style="font-size: 25px; margin-right: 10px;"></i>
                            <div class="ml-2">
                              <h5 class="mb-0 text-dark" style="font-size: 20px; font-weight: bold;">Excel</h5>
                              <span class="fs-6 "><span class="me-2 text-dark">213Kb</span>&nbsp;&nbsp;&nbsp;<span class="text-dark">17 Dec, 2023 06:39 am</span></span>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body">
                        <a href="">
                          <div class="d-flex align-items-center">
                            <i class="nav-icon far fa-image text-red" style="font-size: 25px; margin-right: 10px;"></i>
                            <div class="ml-2">
                              <h5 class="mb-0 text-dark" style="font-size: 20px; font-weight: bold;">Image</h5>
                              <span class="fs-6 "><span class="me-2 text-dark">213Kb</span>&nbsp;&nbsp;&nbsp;<span class="text-dark">17 Dec, 2023 06:39 am</span></span>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body">
                        <a href="">
                          <div class="d-flex align-items-center">
                            <i class="nav-icon far fa-folder text-red" style="font-size: 25px; margin-right: 10px;"></i>
                            <div class="ml-2">
                              <h5 class="mb-0 text-dark" style="font-size: 20px; font-weight: bold;">Figma Design</h5>
                              <span class="fs-6 "><span class="me-2 text-dark">213Kb</span>&nbsp;&nbsp;&nbsp;<span class="text-dark">17 Dec, 2023 06:39 am</span></span>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row ml-1">
                  <h5 class="mb-3 mt-4" style="font-weight: bold;">Folder</h5>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card">
                        <div class="card-body">
                          <a href="">
                            <div class="d-flex align-items-center">
                              <i class="nav-icon far fa-folder text-red" style="font-size: 25px; margin-right: 10px;"></i>
                              <div class="ml-2">
                                <span class="mb-0 text-dark" style="font-size: 20px;">Figma Design</span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card">
                        <div class="card-body">
                          <a href="">
                            <div class="d-flex align-items-center">
                              <i class="nav-icon far fa-folder text-red" style="font-size: 25px; margin-right: 10px;"></i>
                              <div class="ml-2">
                                <span class="mb-0 text-dark" style="font-size: 20px;">Figma Design</span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card">
                        <div class="card-body">
                          <a href="">
                            <div class="d-flex align-items-center">
                              <i class="nav-icon far fa-folder text-red" style="font-size: 25px; margin-right: 10px;"></i>
                              <div class="ml-2">
                                <span class="mb-0 text-dark" style="font-size: 20px;">Figma Design</span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card">
                        <div class="card-body">
                          <a href="">
                            <div class="d-flex align-items-center">
                              <i class="nav-icon far fa-folder text-red" style="font-size: 25px; margin-right: 10px;"></i>
                              <div class="ml-2">
                                <span class="mb-0 text-dark" style="font-size: 20px;">Figma Design</span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card">
                        <div class="card-body">
                          <a href="">
                            <div class="d-flex align-items-center">
                              <i class="nav-icon far fa-folder text-red" style="font-size: 25px; margin-right: 10px;"></i>
                              <div class="ml-2">
                                <span class="mb-0 text-dark" style="font-size: 20px;">Figma Design</span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card">
                        <div class="card-body">
                          <a href="">
                            <div class="d-flex align-items-center">
                              <i class="nav-icon far fa-folder text-red" style="font-size: 25px; margin-right: 10px;"></i>
                              <div class="ml-2">
                                <span class="mb-0 text-dark" style="font-size: 20px;">Figma Design</span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h5 class="mb-3 mt-4" style="font-weight: bold;">Quick Access</h5>
                </div>
                <div class="py-6">
                  <div class="row">
                    <div class="col-md-12 col-12">
                      <!-- card -->
                      <div class="card mb-3 mt-4">
                        <!-- card body -->
                        <div class="card-body">
                          <div class="row justify-content-between
                  align-items-center">
                            <div>
                              <i class="far fa-file-excel fa-2x mr-1" style="margin-left: 7px; color: #f00;"></i>
                            </div>
                            <div class="d-flex col-lg-6 col-12
                          mb-4 mb-lg-0 ml-4">
                              <!-- icon -->
                              <div class="ms-3">
                                <!-- heading -->
                                <a href="#!">
                                  <h5 class="mb-1 text-dark">Admin-Dashboard-Design.excl</h5>
                                </a>
                                <!-- text -->
                                <p class="mb-0
                              ">Uploaded
                                  by <a class="icon-link icon-link-hover" href="#" style="color: #000;">Jitu
                                    Chauhan </a></p>
                              </div>
                            </div>
                            <div class="col">
                              <!-- text -->
                              <span>213Kb</span>
                            </div>
                            <div class="col">
                              <!-- date and time -->
                              <span> 12
                                June, 2023 04:15 pm</span>
                            </div>
                            <div class="col-auto">
                              <!-- dropdown -->
                              <div class="dropdown dropstart">
                                <a href="#!" id="dropdownProjectOne" data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle" aria-haspopup="true" aria-expanded="false">
                                  <i class="icon-xs" data-feather="more-vertical"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownProjectOne">
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="external-link"></i>Move</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="clipboard"></i>Copy</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="download"></i>Download</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="trash-2"></i>Delete</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="edit"></i>Rename</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="link"></i>Get
                                    link</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- card -->
                      <div class="card mb-3">
                        <!-- card body -->
                        <div class="card-body">
                          <div class="row justify-content-between
                        align-items-center">
                            <div>
                              <i class="far fa-file-image fa-2x mr-1" style="margin-left: 7px; color: #f00;"></i>
                            </div>
                            <div class="d-flex col-lg-6 col-12
                          mb-4 mb-lg-0 ml-4">
                              <div class="ms-3">
                                <!-- heading -->
                                <a href="#!">
                                  <h5 class="mb-1 text-dark">Admin-Dashboard-Design.jpeg</h5>
                                </a>
                                <!-- text -->
                                <p class="mb-0
                              ">Uploaded
                                  by <a href="#" style="color: #000;">Jitu
                                    Chauhan </a> on 17
                                  Dec, 2023 06:39 am</p>
                              </div>
                            </div>
                            <div class="col">
                              <!-- text -->
                              <span>213Kb</span>
                            </div>
                            <div class="col">
                              <!-- date and time -->
                              <span>30
                                May, 2023 01:15 pm</span>
                            </div>
                            <div class="col-auto">
                              <!-- dropdown -->
                              <div class="dropdown dropstart">
                                <a href="#!" id="dropdownProjectTwo" data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle" aria-haspopup="true" aria-expanded="false">
                                  <i class="icon-xs" data-feather="more-vertical"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownProjectTwo">
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="external-link"></i>Move</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="clipboard"></i>Copy</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="download"></i>Download</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="trash-2"></i>Delete</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="edit"></i>Rename</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="link"></i>Get
                                    link</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- card -->
                      <div class="card mb-3">
                        <!-- card body -->
                        <div class="card-body">
                          <div class="row justify-content-between
                        align-items-center">
                            <div>
                              <i class="far fa-file fa-2x mr-1" style="margin-left: 7px; color: #f00;"></i>
                            </div>
                            <div class="d-flex col-lg-6 col-12
                          mb-4 mb-lg-0 ml-4">
                              <div class="ms-3">
                                <!-- heading -->
                                <a href="#!">
                                  <h5 class="mb-1 text-dark">
                                    DashUI Description.doc
                                  </h5>
                                </a>
                                <!-- text -->
                                <p class="mb-0">
                                  Uploaded by
                                  <a href="#" style="color: #000;">
                                    Jitu Chauhan
                                  </a>
                                  on 17 Dec, 2023 06:39 am
                                </p>
                              </div>
                            </div>
                            <div class="col">
                              <!-- text -->
                              <span>213Kb</span>
                            </div>
                            <div class="col">
                              <!-- date and time -->
                              <span> 12
                                May, 2023 01:15 pm</span>
                            </div>
                            <div class="col-auto">
                              <!-- dropdown -->
                              <div class="dropdown dropstart">
                                <a href="#!" id="dropdownProjectThree" data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle" aria-haspopup="true" aria-expanded="false">
                                  <i class="icon-xs" data-feather="more-vertical"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownProjectThree">
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="external-link"></i>Move</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="clipboard"></i>Copy</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="download"></i>Download</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="trash-2"></i>Delete</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="edit"></i>Rename</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="link"></i>Get
                                    link</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- card -->
                      <div class="card mb-3">
                        <!-- card body -->
                        <div class="card-body">
                          <div class="row justify-content-between
                        align-items-center">
                            <div>
                              <i class="fas fa-table fa-2x mr-1" style="margin-left: 7px; color: #f00;"></i>
                            </div>
                            <div class="d-flex col-lg-6 col-12
                          mb-4 mb-lg-0 ml-3">
                              <div class="ms-3">
                                <!-- heading -->
                                <a href="#!">
                                  <h5 class="mb-1 text-dark">Earning-from-DashUI.xlsx
                                  </h5>
                                </a>
                                <!-- text -->
                                <p class="mb-0
                              ">Uploaded
                                  by <a href="#" style="color: #000;">anne
                                    brewers </a> on 17
                                  Dec, 2023 06:39 am</p>
                              </div>
                            </div>
                            <div class="col">
                              <!-- text -->
                              <span>213Kb</span>
                            </div>
                            <div class="col">
                              <!-- date and time -->
                              <span> 12
                                May, 2023 08:15 pm</span>
                            </div>
                            <div class="col-auto">
                              <!-- dropdown -->
                              <div class="dropdown dropstart">
                                <a href="#!" id="dropdownProjectFour" data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle" aria-haspopup="true" aria-expanded="false">
                                  <i class="icon-xs" data-feather="more-vertical"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownProjectFour">
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="external-link"></i>Move</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="clipboard"></i>Copy</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="download"></i>Download</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="trash-2"></i>Delete</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="edit"></i>Rename</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="link"></i>Get
                                    link</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- card -->
                      <div class="card mb-3">
                        <!-- card body -->
                        <div class="card-body">
                          <div class="row justify-content-between
                        align-items-center">
                            <div>
                              <i class="far fa-file-powerpoint fa-2x mr-1" style="margin-left: 7px; color: #f00;"></i>
                            </div>
                            <div class="d-flex col-lg-6 col-12
                          mb-4 mb-lg-0 ml-4">
                              <div class="ms-3">
                                <!-- heading -->
                                <a href="#!">
                                  <h5 class="mb-1 text-dark">DashUI-Marketing-Process.ppt
                                  </h5>
                                </a>
                                <!-- text -->
                                <p class="mb-0
                              ">Uploaded
                                  by <a href="#" style="color: #000;">Richard
                                    Christmas</a> on 17
                                  Dec, 2023 06:39 am</p>
                              </div>
                            </div>
                            <div class="col">
                              <!-- text -->
                              <span>213mb</span>
                            </div>
                            <div class="col">
                              <!-- date and time -->
                              <span>12
                                May, 2023 02:15 pm</span>
                            </div>
                            <div class="col-auto">
                              <!-- dropdown -->
                              <div class="dropdown dropstart">
                                <a href="#!" id="dropdownProjectFive" data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle" aria-haspopup="true" aria-expanded="false">
                                  <i class="icon-xs" data-feather="more-vertical"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownProjectFive">
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="external-link"></i>Move</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="clipboard"></i>Copy</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="download"></i>Download</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="trash-2"></i>Delete</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="edit"></i>Rename</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="link"></i>Get
                                    link</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- card -->
                      <div class="card mb-3">
                        <!-- card body -->
                        <div class="card-body">
                          <div class="row justify-content-between
                        align-items-center">
                            <div>
                              <i class="fas fa-font fa-2x mr-1" style="margin-left: 7px; color: #f00;"></i>
                            </div>
                            <div class="d-flex col-lg-6 col-12
                          mb-4 mb-lg-0 ml-4">
                              <div class="ms-3">
                                <!-- heading -->
                                <a href="#!">
                                  <h5 class="mb-1 text-dark">DashUI-Marketing-Process.txt
                                  </h5>
                                </a>
                                <!-- text -->
                                <p class="mb-0
                              ">Uploaded
                                  by <a href="#" style="color: #000;">Jitu
                                    Chauhan </a> on 17
                                  Dec, 2023 06:39 am</p>
                              </div>
                            </div>
                            <div class="col">
                              <!-- text -->
                              <span>213mb</span>
                            </div>
                            <div class="col">
                              <!-- date and time -->
                              <span> 12
                                May, 2023 01:15 pm</span>
                            </div>
                            <div class="col-auto">
                              <!-- dropdown -->
                              <div class="dropdown dropstart">
                                <a href="#!" id="dropdownProjectSix" data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle" aria-haspopup="true" aria-expanded="false">
                                  <i class="icon-xs" data-feather="more-vertical"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownProjectSix">
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="external-link"></i>Move</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="clipboard"></i>Copy</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="download"></i>Download</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="trash-2"></i>Delete</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="edit"></i>Rename</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="link"></i>Get
                                    link</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- card -->
                      <div class="card mb-3">
                        <!-- card body -->
                        <div class="card-body">
                          <div class="row justify-content-between
                        align-items-center">
                            <div>
                              <i class="far fa-file-video fa-2x mr-1" style="margin-left: 7px; color: #f00;"></i>
                            </div>
                            <div class="d-flex col-lg-6 col-12
                          mb-4 mb-lg-0 ml-4">
                              <div class="ms-3">
                                <!-- heading -->
                                <a href="#!">
                                  <h5 class="mb-1 text-dark">DashUI-promo-trailer-template.mov
                                  </h5>
                                </a>
                                <!-- text -->
                                <p class="mb-0
                              ">Uploaded
                                  by <a href="#" style="color: #000;">Nicholas
                                    binder</a> on 17
                                  Dec, 2023 06:39 am</p>
                              </div>
                            </div>
                            <div class="col">
                              <!-- text -->
                              <span>213mb</span>
                            </div>
                            <div class="col">
                              <!-- date and time -->
                              <span> 22
                                April, 2023 03:15 pm</span>
                            </div>
                            <div class="col-auto">
                              <!-- dropdown -->
                              <div class="dropdown dropstart">
                                <a href="#!" id="dropdownProjectSeven" data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle" aria-haspopup="true" aria-expanded="false">
                                  <i class="icon-xs" data-feather="more-vertical"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownProjectSeven">
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="external-link"></i>Move</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="clipboard"></i>Copy</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="download"></i>Download</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="trash-2"></i>Delete</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="edit"></i>Rename</a>
                                  <a class="dropdown-item
                                d-flex
                                align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="link"></i>Get
                                    link</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <table id="tabel_data" class="table table-bordered table-striped table-hover">
                        <thead>
                          <tr class="bg-red">
                            <th>Name</th>
                            <th>Keterangan</th>
                            <th>Type</th>
                            <th>Last Modified</th>
                            <th><i class="fas fa-cog"></i></th>
                          </tr>
                        </thead>
                        <thead id="section_parent" style="display: none;">
                          <tr class="text-center">
                            <th colspan="5" class="p-1"><a href="javascript:void(0)" onclick="go_to_btn()"><i class="fas fa-arrow-circle-left"></i> Back</a></th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <input type="text" value="0" name="parent_id" id="parent_id" style="display: none;" />
          <input type="text" value="0" name="parent_id_before" id="parent_id_before" style="display: none;" />
        </div>
      </div>
    </div>
  </div>

  <?= $modal_data; ?>
  <?= $this->endSection(); ?>