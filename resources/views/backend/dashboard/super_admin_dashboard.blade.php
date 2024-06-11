@extends('layouts/backend/main')
@section('main-section')
  
 

<div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-titles">
          <div class="row">
            <div class="col-lg-8 col-md-6 col-12 align-self-center">
              <h4 class="text-muted mb-0 fw-normal">Welcome Johnathan</h4>
              <h1 class="mb-0 fw-bold">eCommerce Dashboard</h1>
            </div>
            <div
              class="
                col-lg-4 col-md-6
                d-none d-md-flex
                align-items-center
                justify-content-end
              "
            >
              <select
                class="form-select theme-select border-0"
                aria-label="Default select example"
              >
                <option value="1">Today 23 March</option>
                <option value="2">Today 24 March</option>
                <option value="3">Today 25 March</option>
              </select>
              <a
                href="javascript:void(0)"
                class="btn btn-info d-flex align-items-center ms-2"
              >
                <i class="ri-add-line me-1"></i>
                Add New
              </a>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        
		
		
		
		<!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- row -->
          <div class="row">
            <div class="col-lg-4">
              <div
                class="
                  card
                  welcome-card2
                  overflow-hidden
                  bg-light-info
                  border-0
                "
              >
                <div class="card-body">
                  <div class="d-flex align-items-start position-relative">
                    <div>
                      <h4 class="fw-bold">Earnings</h4>
                      <h2 class="text-primary">$63,438.78</h2>
                    </div>
                    <div class="ms-auto">
                      <span
                        class="
                          btn btn-lg btn-primary btn-circle
                          d-flex
                          align-items-center
                          justify-content-center
                        "
                      >
                        <i data-feather="dollar-sign"></i>
                      </span>
                    </div>
                  </div>
                  <a href="#" class="btn btn-info position-relative mt-2"
                    >Download</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card-group">
                <div class="card">
                  <div class="card-body">
                    <span
                      class="
                        btn btn-xl btn-light-info
                        text-info
                        btn-circle
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i data-feather="users"></i>
                    </span>
                    <h3 class="mt-3 pt-1 mb-0">
                      39,354
                      <span class="fs-2 ms-1 text-danger font-weight-medium"
                        >-9%</span
                      >
                    </h3>
                    <h6 class="text-muted mb-0 fw-normal">Customers</h6>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <span
                      class="
                        btn btn-xl btn-light-warning
                        text-warning
                        btn-circle
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i data-feather="package"></i>
                    </span>
                    <h3 class="mt-3 pt-1 mb-0">
                      4396
                      <span class="fs-2 ms-1 text-success font-weight-medium"
                        >+23%</span
                      >
                    </h3>
                    <h6 class="text-muted mb-0 fw-normal">Products</h6>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <span
                      class="
                        btn btn-xl btn-light-danger
                        text-danger
                        btn-circle
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i data-feather="bar-chart"></i>
                    </span>
                    <h3 class="mt-3 pt-1 mb-0 d-flex align-items-center">
                      423,39
                      <span class="fs-2 ms-1 text-success font-weight-medium"
                        >+38%</span
                      >
                    </h3>
                    <h6 class="text-muted mb-0 fw-normal">Sales</h6>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <span
                      class="
                        btn btn-xl btn-light-success
                        text-success
                        btn-circle
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i data-feather="refresh-cw"></i>
                    </span>
                    <h3 class="mt-3 pt-1 mb-0">
                      835
                      <span class="fs-2 ms-1 text-danger font-weight-medium"
                        >-12%</span
                      >
                    </h3>
                    <h6 class="text-muted mb-0 fw-normal">Refunds</h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- column -->
            <div class="col-lg-8">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h3 class="card-title">Products Performance</h3>
                      <h6 class="card-subtitle">Latest new products</h6>
                    </div>
                    <div class="ms-auto">
                      <ul class="list-style-none">
                        <li class="list-inline-item">
                          <i
                            class="
                              ri-checkbox-blank-circle-fill
                              text-primary
                              fs-1
                              me-1
                            "
                          ></i>
                          Expence
                        </li>
                        <li class="list-inline-item">
                          <i
                            class="
                              ri-checkbox-blank-circle-fill
                              text-warning
                              fs-1
                              me-1
                            "
                          ></i>
                          Budget
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-md-5 border-end">
                      <div class="pe-4">
                        <h3 class="fs-8 d-flex align-items-center mb-0">
                          $93,438.78
                          <span
                            class="
                              btn btn-circle btn-sm btn-success
                              fs-1
                              ms-2
                              d-flex
                              align-items-center
                              justify-content-center
                            "
                            >23%</span
                          >
                        </h3>
                        <h6 class="fw-normal text-muted mb-0">Budget</h6>
                        <h3 class="fs-8 d-flex align-items-center mb-0 mt-4">
                          $32,839.00
                        </h3>
                        <h6 class="fw-normal text-muted mb-0">Expence</h6>
                        <div class="mt-3 mb-4">
                          <div id="budget-expence-side-chart"></div>
                        </div>
                        <a href="#" class="btn btn-info">Download Report</a>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div id="product-performance" class="ps-3"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- column -->
            <div class="col-lg-4">
              <!-- earnings card -->
              <div class="card bg-primary w-100">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title text-white">Earnings</h4>
                    <div class="ms-auto">
                      <span
                        class="
                          btn btn-lg btn-info btn-circle
                          d-flex
                          align-items-center
                          justify-content-center
                        "
                      >
                        <i data-feather="dollar-sign"></i>
                      </span>
                    </div>
                  </div>
                  <div class="mt-3">
                    <h2 class="fs-8 text-white mb-0">$93,438.78</h2>
                    <span class="text-white op-5">Monthly revenue</span>
                  </div>
                </div>
              </div>
              <!-- yearly sales -->
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-6 col-xl-9">
                      <h3 class="fs-8 mb-0">43,246</h3>
                      <h6 class="text-muted fw-normal">Yearly sales</h6>
                      <div class="row mt-4 pt-2 gx-0">
                        <div class="col-6">
                          <i
                            class="
                              ri-checkbox-blank-circle-fill
                              text-info
                              fs-1
                              me-1
                            "
                          ></i>
                          2021
                        </div>
                        <div class="col-6">
                          <i
                            class="
                              ri-checkbox-blank-circle-fill
                              text-primary
                              fs-1
                              me-1
                            "
                          ></i>
                          2020
                        </div>
                        <div class="col-6 mt-2">
                          <i
                            class="
                              ri-checkbox-blank-circle-fill
                              text-warning
                              fs-1
                              me-1
                            "
                          ></i>
                          2019
                        </div>
                        <div class="col-6 mt-2">
                          <i
                            class="
                              ri-checkbox-blank-circle-fill
                              text-muted-lite
                              fs-1
                              me-1
                            "
                          ></i>
                          2018
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-xl-3 d-flex align-items-center">
                      <div id="yearly-sales"></div>
                      <i
                        data-feather="shopping-cart"
                        class="
                          total-sales-icon
                          text-muted-lite
                          feather-md
                          mt-n2
                        "
                      ></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- column -->
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h3 class="card-title">Recent Transactions</h3>
                  <h6 class="card-subtitle">List of payments</h6>
                  <div class="d-flex align-items-center mt-4 mb-3 pb-1">
                    <a
                      href="#"
                      class="
                        btn btn-rounded-lg btn-light-info
                        text-info
                        round
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i
                        data-feather="dollar-sign"
                        class="flex-shrink-0 feather-sm"
                      ></i>
                    </a>
                    <div class="ms-3 ps-1">
                      <h5 class="mb-1">PayPal Transfer</h5>
                      <h6 class="text-muted fw-normal mb-0">Money Added</h6>
                    </div>
                    <h6 class="ms-auto text-success">+$350</h6>
                  </div>
                  <div class="d-flex align-items-center my-3 py-1">
                    <a
                      href="#"
                      class="
                        btn btn-rounded-lg btn-light-success
                        text-success
                        round
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i
                        data-feather="shield"
                        class="flex-shrink-0 feather-sm"
                      ></i>
                    </a>
                    <div class="ms-3 ps-1">
                      <h5 class="mb-1">Wallet</h5>
                      <h6 class="text-muted fw-normal mb-0">Bill payment</h6>
                    </div>
                    <h6 class="ms-auto text-danger">-$560</h6>
                  </div>
                  <div class="d-flex align-items-center my-3 py-1">
                    <a
                      href="#"
                      class="
                        btn btn-rounded-lg btn-light-danger
                        text-danger
                        round
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i
                        data-feather="credit-card"
                        class="flex-shrink-0 feather-sm"
                      ></i>
                    </a>
                    <div class="ms-3 ps-1">
                      <h5 class="mb-1">Credit Card</h5>
                      <h6 class="text-muted fw-normal mb-0">Money reversed</h6>
                    </div>
                    <h6 class="ms-auto text-success">+$350</h6>
                  </div>
                  <div class="d-flex align-items-center my-3 py-1">
                    <a
                      href="#"
                      class="
                        btn btn-rounded-lg btn-light-warning
                        text-warning
                        round
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i
                        data-feather="check"
                        class="flex-shrink-0 feather-sm"
                      ></i>
                    </a>
                    <div class="ms-3 ps-1">
                      <h5 class="mb-1">Bank Transfer</h5>
                      <h6 class="text-muted fw-normal mb-0">Money Added</h6>
                    </div>
                    <h6 class="ms-auto text-success">+$350</h6>
                  </div>
                  <div
                    class="d-flex align-items-center my-3 pb-4 border-bottom"
                  >
                    <a
                      href="#"
                      class="
                        btn btn-rounded-lg btn-light-primary
                        text-primary
                        round
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i
                        data-feather="refresh-ccw"
                        class="flex-shrink-0 feather-sm"
                      ></i>
                    </a>
                    <div class="ms-3 ps-1">
                      <h5 class="mb-1">Refund</h5>
                      <h6 class="text-muted fw-normal mb-0">Payment Sent</h6>
                    </div>
                    <h6 class="ms-auto text-danger">-$50</h6>
                  </div>
                  <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-info">Add</a>
                    <div class="ms-auto">
                      <span class="fs-3 text-muted"
                        >36 Recent Transactions
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- column -->
            <div class="col-lg-8 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h3 class="card-title">Products Performance</h3>
                  <h6 class="card-subtitle">Latest new products</h6>
                  <!-- Nav tabs -->
                  <ul
                    class="nav nav-pills justify-content-end mt-md-n5"
                    role="tablist"
                  >
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        data-bs-toggle="tab"
                        href="#navpill-11"
                        role="tab"
                      >
                        <span>Pending</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link active"
                        data-bs-toggle="tab"
                        href="#navpill-22"
                        role="tab"
                      >
                        <span>Active</span>
                      </a>
                    </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div class="tab-pane" id="navpill-11" role="tabpanel">
                      <div class="table-responsive mt-3">
                        <table
                          class="table mb-0 align-middle text-sm-nowrap fs-3"
                        >
                          <tbody>
                            <tr>
                              <td class="px-0">
                                <div class="d-flex align-items-center">
                                  <img
                                    src="../../assets/images/product/s-prd2.jpg"
                                    class="btn-rounded-lg"
                                    alt="product"
                                  />
                                  <div class="ms-4">
                                    <h5 class="mb-0">
                                      Supreme toys presents best gift
                                    </h5>
                                    <span class="text-muted fs-3 mt-2"
                                      >Angular, React</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class="text-dark font-weight-medium fs-3"
                                  >Excellent</span
                                >
                                <div class="progress mt-2">
                                  <div
                                    class="progress-bar bg-success"
                                    role="progressbar"
                                    style="width: 98%"
                                    aria-valuenow="98"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <h6 class="text-muted fw-normal mt-2">
                                  98% Sold
                                </h6>
                              </td>
                              <td>
                                <span class="fs-3 text-muted fw-normal"
                                  >Earnings</span
                                >
                                <h5 class="mb-0">$546,000</h5>
                              </td>
                              <td class="pe-0 text-end">
                                <div class="d-flex align-items-center">
                                  <a href="#" class="text-muted me-3">
                                    <i
                                      data-feather="edit"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                  <a href="#" class="text-muted">
                                    <i
                                      data-feather="trash"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="px-0">
                                <div class="d-flex align-items-center">
                                  <img
                                    src="../../assets/images/product/s-prd3.jpg"
                                    class="btn-rounded-lg"
                                    alt="product"
                                  />
                                  <div class="ms-4">
                                    <h5 class="mb-0">
                                      Red color shoes from Gucci
                                    </h5>
                                    <span class="text-muted fs-3 mt-2"
                                      >Bootstrap, React</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class="text-dark font-weight-medium fs-3"
                                  >Average</span
                                >
                                <div class="progress mt-2">
                                  <div
                                    class="progress-bar bg-warning"
                                    role="progressbar"
                                    style="width: 46%"
                                    aria-valuenow="46"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <h6 class="text-muted fw-normal mt-2">
                                  46% Sold
                                </h6>
                              </td>
                              <td>
                                <span class="fs-3 text-muted fw-normal"
                                  >Earnings</span
                                >
                                <h5 class="mb-0">$546,000</h5>
                              </td>
                              <td class="pe-0 text-end">
                                <div class="d-flex align-items-center">
                                  <a href="#" class="text-muted me-3">
                                    <i
                                      data-feather="edit"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                  <a href="#" class="text-muted">
                                    <i
                                      data-feather="trash"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="px-0">
                                <div class="d-flex align-items-center">
                                  <img
                                    src="../../assets/images/product/s-prd1.jpg"
                                    class="btn-rounded-lg"
                                    alt="product"
                                  />
                                  <div class="ms-4">
                                    <h5 class="mb-0">
                                      Nike branding shoes for Men and Women
                                    </h5>
                                    <span class="text-muted fs-3 mt-2"
                                      >Bootstrap, Angular, React</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class="text-dark font-weight-medium fs-3"
                                  >Good</span
                                >
                                <div class="progress mt-2">
                                  <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: 65%"
                                    aria-valuenow="65"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <h6 class="text-muted fw-normal mt-2">
                                  65% Sold
                                </h6>
                              </td>
                              <td>
                                <span class="fs-3 text-muted fw-normal"
                                  >Earnings</span
                                >
                                <h5 class="mb-0">$546,000</h5>
                              </td>
                              <td class="pe-0 text-end">
                                <div class="d-flex align-items-center">
                                  <a href="#" class="text-muted me-3">
                                    <i
                                      data-feather="edit"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                  <a href="#" class="text-muted">
                                    <i
                                      data-feather="trash"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="px-0 pb-0">
                                <div class="d-flex align-items-center">
                                  <img
                                    src="../../assets/images/product/s-prd4.jpg"
                                    class="btn-rounded-lg"
                                    alt="product"
                                  />
                                  <div class="ms-4">
                                    <h5 class="mb-0">
                                      Stylish sneakers for men and women
                                    </h5>
                                    <span class="text-muted fs-3 mt-2"
                                      >Bootstrap, Angular, React</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="pb-0">
                                <span class="text-dark font-weight-medium fs-3"
                                  >Bad</span
                                >
                                <div class="progress mt-2">
                                  <div
                                    class="progress-bar bg-danger"
                                    role="progressbar"
                                    style="width: 23%"
                                    aria-valuenow="23"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <h6 class="text-muted fw-normal mt-2">
                                  23% Sold
                                </h6>
                              </td>
                              <td class="pb-0">
                                <span class="fs-3 text-muted fw-normal"
                                  >Earnings</span
                                >
                                <h5 class="mb-0">$546,000</h5>
                              </td>
                              <td class="pe-0 pb-0 text-end">
                                <div class="d-flex align-items-center">
                                  <a href="#" class="text-muted me-3">
                                    <i
                                      data-feather="edit"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                  <a href="#" class="text-muted">
                                    <i
                                      data-feather="trash"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div
                      class="tab-pane active"
                      id="navpill-22"
                      role="tabpanel"
                    >
                      <div class="table-responsive mt-3">
                        <table
                          class="table mb-0 align-middle text-sm-nowrap fs-3"
                        >
                          <tbody>
                            <tr>
                              <td class="px-0">
                                <div class="d-flex align-items-center">
                                  <img
                                    src="../../assets/images/product/s-prd1.jpg"
                                    class="btn-rounded-lg"
                                    alt="product"
                                  />
                                  <div class="ms-4">
                                    <h5 class="mb-0">
                                      Nike branding shoes for Men and Women
                                    </h5>
                                    <span class="text-muted fs-3 mt-2"
                                      >Bootstrap, Angular, React</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class="text-dark font-weight-medium fs-3"
                                  >Good</span
                                >
                                <div class="progress mt-2">
                                  <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: 65%"
                                    aria-valuenow="65"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <h6 class="text-muted fw-normal mt-2">
                                  65% Sold
                                </h6>
                              </td>
                              <td>
                                <span class="fs-3 text-muted fw-normal"
                                  >Earnings</span
                                >
                                <h5 class="mb-0">$546,000</h5>
                              </td>
                              <td class="pe-0 text-end">
                                <div class="d-flex align-items-center">
                                  <a href="#" class="text-muted me-3">
                                    <i
                                      data-feather="edit"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                  <a href="#" class="text-muted">
                                    <i
                                      data-feather="trash"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="px-0">
                                <div class="d-flex align-items-center">
                                  <img
                                    src="../../assets/images/product/s-prd2.jpg"
                                    class="btn-rounded-lg"
                                    alt="product"
                                  />
                                  <div class="ms-4">
                                    <h5 class="mb-0">
                                      Supreme toys presents best gift
                                    </h5>
                                    <span class="text-muted fs-3 mt-2"
                                      >Angular, React</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class="text-dark font-weight-medium fs-3"
                                  >Excellent</span
                                >
                                <div class="progress mt-2">
                                  <div
                                    class="progress-bar bg-success"
                                    role="progressbar"
                                    style="width: 98%"
                                    aria-valuenow="98"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <h6 class="text-muted fw-normal mt-2">
                                  98% Sold
                                </h6>
                              </td>
                              <td>
                                <span class="fs-3 text-muted fw-normal"
                                  >Earnings</span
                                >
                                <h5 class="mb-0">$546,000</h5>
                              </td>
                              <td class="pe-0 text-end">
                                <div class="d-flex align-items-center">
                                  <a href="#" class="text-muted me-3">
                                    <i
                                      data-feather="edit"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                  <a href="#" class="text-muted">
                                    <i
                                      data-feather="trash"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="px-0">
                                <div class="d-flex align-items-center">
                                  <img
                                    src="../../assets/images/product/s-prd3.jpg"
                                    class="btn-rounded-lg"
                                    alt="product"
                                  />
                                  <div class="ms-4">
                                    <h5 class="mb-0">
                                      Red color shoes from Gucci
                                    </h5>
                                    <span class="text-muted fs-3 mt-2"
                                      >Bootstrap, React</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class="text-dark font-weight-medium fs-3"
                                  >Average</span
                                >
                                <div class="progress mt-2">
                                  <div
                                    class="progress-bar bg-warning"
                                    role="progressbar"
                                    style="width: 46%"
                                    aria-valuenow="46"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <h6 class="text-muted fw-normal mt-2">
                                  46% Sold
                                </h6>
                              </td>
                              <td>
                                <span class="fs-3 text-muted fw-normal"
                                  >Earnings</span
                                >
                                <h5 class="mb-0">$546,000</h5>
                              </td>
                              <td class="pe-0 text-end">
                                <div class="d-flex align-items-center">
                                  <a href="#" class="text-muted me-3">
                                    <i
                                      data-feather="edit"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                  <a href="#" class="text-muted">
                                    <i
                                      data-feather="trash"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="px-0 pb-0">
                                <div class="d-flex align-items-center">
                                  <img
                                    src="../../assets/images/product/s-prd4.jpg"
                                    class="btn-rounded-lg"
                                    alt="product"
                                  />
                                  <div class="ms-4">
                                    <h5 class="mb-0">
                                      Stylish sneakers for men and women
                                    </h5>
                                    <span class="text-muted fs-3 mt-2"
                                      >Bootstrap, Angular, React</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="pb-0">
                                <span class="text-dark font-weight-medium fs-3"
                                  >Bad</span
                                >
                                <div class="progress mt-2">
                                  <div
                                    class="progress-bar bg-danger"
                                    role="progressbar"
                                    style="width: 23%"
                                    aria-valuenow="23"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <h6 class="text-muted fw-normal mt-2">
                                  23% Sold
                                </h6>
                              </td>
                              <td class="pb-0">
                                <span class="fs-3 text-muted fw-normal"
                                  >Earnings</span
                                >
                                <h5 class="mb-0">$546,000</h5>
                              </td>
                              <td class="pe-0 pb-0 text-end">
                                <div class="d-flex align-items-center">
                                  <a href="#" class="text-muted me-3">
                                    <i
                                      data-feather="edit"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                  <a href="#" class="text-muted">
                                    <i
                                      data-feather="trash"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- column -->
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="card w-100 overflow-hidden">
                <div class="card-body pb-0">
                  <div class="d-flex align-items-start">
                    <div>
                      <h3 class="card-title">Weekly Stats</h3>
                      <h6 class="card-subtitle mb-0">Average sales</h6>
                    </div>
                    <div class="ms-auto">
                      <div class="dropdown">
                        <a
                          href="#"
                          class="text-muted-lite"
                          id="year1-dropdown"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <i data-feather="more-horizontal"></i>
                        </a>
                        <ul
                          class="dropdown-menu"
                          aria-labelledby="year1-dropdown"
                        >
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li>
                            <a class="dropdown-item" href="#">Another action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Something else here</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 pb-3 d-flex align-items-center">
                    <span class="btn btn-primary btn-circle">
                      <i data-feather="shopping-cart"></i>
                    </span>
                    <div class="ms-3">
                      <h5 class="mb-0 fw-bold">Top Sales</h5>
                      <span class="text-muted fs-9">Johnathan Doe</span>
                    </div>
                    <div class="ms-auto">
                      <span class="badge bg-light-secondary text-muted"
                        >+68%</span
                      >
                    </div>
                  </div>
                  <div class="py-3 d-flex align-items-center">
                    <span class="btn btn-warning btn-circle">
                      <i data-feather="star"></i>
                    </span>
                    <div class="ms-3">
                      <h5 class="mb-0 fw-bold">Best Seller</h5>
                      <span class="text-muted fs-9">MaterialPro Admin</span>
                    </div>
                    <div class="ms-auto">
                      <span class="badge bg-light-secondary text-muted"
                        >+68%</span
                      >
                    </div>
                  </div>
                  <div class="pt-3 d-flex align-items-center">
                    <span class="btn btn-success btn-circle">
                      <i data-feather="message-square"></i>
                    </span>
                    <div class="ms-3">
                      <h5 class="mb-0 fw-bold">Most Commented</h5>
                      <span class="text-muted fs-9">Ample Admin</span>
                    </div>
                    <div class="ms-auto">
                      <span class="badge bg-light-secondary text-muted"
                        >+68%</span
                      >
                    </div>
                  </div>
                </div>
                <div id="weekly-stats"></div>
              </div>
            </div>
            <!-- column -->
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex align-items-start">
                    <div>
                      <h3 class="card-title">MedicalPro Branding</h3>
                      <h6 class="card-subtitle mb-0">Branding & Website</h6>
                    </div>
                    <div class="ms-auto">
                      <div class="dropdown">
                        <a
                          href="#"
                          class="text-muted-lite"
                          id="medical-dropdown"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <i data-feather="more-horizontal"></i>
                        </a>
                        <ul
                          class="dropdown-menu"
                          aria-labelledby="medical-dropdown"
                        >
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li>
                            <a class="dropdown-item" href="#">Another action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Something else here</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="mt-4">
                    <span class="badge bg-light-primary text-primary"
                      >16 APR, 2021</span
                    >
                    <div class="row border-bottom mt-4 gx-0">
                      <div class="col-4 pb-3 border-end">
                        <h6 class="fw-normal text-muted mb-0">Due Date</h6>
                        <span class="fs-3 font-weight-medium text-dark"
                          >Oct 23, 2021</span
                        >
                      </div>
                      <div class="col-4 pb-3 border-end ps-3">
                        <h6 class="fw-normal text-muted mb-0">Budget</h6>
                        <span class="fs-3 font-weight-medium text-dark"
                          >$98,500</span
                        >
                      </div>
                      <div class="col-4 pb-3 ps-3">
                        <h6 class="fw-normal text-muted mb-0">Expense</h6>
                        <span class="fs-3 font-weight-medium text-dark"
                          >$63,000</span
                        >
                      </div>
                    </div>
                    <div class="mt-4 pb-4 border-bottom">
                      <h4>Teams</h4>
                      <div class="mt-2 pt-1 mb-2">
                        <span class="badge bg-warning">Bootstrap</span>
                        <span class="badge bg-danger">Angular</span>
                      </div>
                    </div>
                    <div class="mt-4 pb-4 border-bottom">
                      <h4>Leaders</h4>
                      <div class="mt-2 pt-1 mb-2">
                        <a href="#" class="me-1">
                          <img
                            src="../../assets/images/users/1.jpg"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="John"
                            class="rounded-circle"
                            width="35"
                          />
                        </a>
                        <a href="#" class="me-1">
                          <img
                            src="../../assets/images/users/2.jpg"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Nirav"
                            class="rounded-circle"
                            width="35"
                          />
                        </a>
                        <a href="#" class="me-1">
                          <img
                            src="../../assets/images/users/3.jpg"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Sunil"
                            class="rounded-circle"
                            width="35"
                          />
                        </a>
                        <a href="#">
                          <img
                            src="../../assets/images/users/4.jpg"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Maruti"
                            class="rounded-circle"
                            width="35"
                          />
                        </a>
                      </div>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                      <a href="#" class="btn btn-info">Add</a>
                      <div class="ms-auto">
                        <span class="fs-3 text-muted"
                          >28 Team Members, 268 Tasks
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- column -->
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex align-items-start">
                    <div>
                      <h3 class="card-title">Daily Activities</h3>
                      <h6 class="card-subtitle mb-0">Overview of Years</h6>
                    </div>
                    <div class="ms-auto">
                      <div class="dropdown">
                        <a
                          href="#"
                          class="text-muted-lite"
                          id="daily-dropdown"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <i data-feather="more-horizontal"></i>
                        </a>
                        <ul
                          class="dropdown-menu"
                          aria-labelledby="daily-dropdown"
                        >
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li>
                            <a class="dropdown-item" href="#">Another action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Something else here</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="mt-4 pt-2">
                    <img
                      src="../../assets/images/background/blog-bg2.jpg"
                      class="blog-img btn-rounded-lg img-fluid w-100"
                      alt="flexy"
                    />
                    <h3 class="card-title mt-4 mb-1">
                      Angular 12 coming soon!
                    </h3>
                    <span class="text-muted">
                      By
                      <a href="#" class="text-primary">Johnathan Doe</a>
                    </span>
                    <p class="fs-3 mt-4 text-muted">
                      This will be the small description for the news you have
                      shown here. There could be some great info.
                    </p>
                    <a href="#" class="btn btn-info mt-3">Read more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">2021© All Rights Reserved by Wrappixel</footer>
        <!-- ============================================================== -->
		
@endsection