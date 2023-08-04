@extends('dashboard.layout.app')
@section('content')

    <div class="main-container container-fluid">
        <div class="inner-body">
            <div id="mobileshow" class="see"></div>
            <div class="sees hide-mobile"></div>
            <!--Row-->

            <div class="row row-sm">
                <div class="col-md-12 col-lg-12">
                    <div class="card custom-card">
                        <div class="card-body">	<div>
                                <h6 class="main-content-label mb-1">Get Subscription</h6>
                                <p> Tap on any of the Plans below to purchase a plan.</p>

                                <h5> Current Account Type : Basic</h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="alert alert-info fade show" role="alert">
                <center style="color:red;">	INSUFFICIENT TRADING BALANCE.</center>

            </div>

            <div class="row row-sm">


                <div class="col-xxl-3 col-xl-6 col-lg-6 col-sm-6">
                    <div class="card card-pricing custom-card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mb-0">
                                    <h5 class="fs-16 tx-medium">STANDARD</h5>
                                    <h2 class="mt-2 mb-0 text-primary">$1000 <span class="text-muted fs-12">/ Minimum</span></h2>
                                    <p class="text-dark mt-3 mb-0 fs-14">High ROI After Trading Session</p>
                                </div>
                                <div class="text-end ms-auto">
                                    <span class="badge bg-primary-light">Try It Now</span>
                                </div>
                            </div>
                            <hr class="message-inner-separator">
                            <div class="pricingContent1">
                                <ul>
                                    <li class="pt-1"><i class="fe fe-check me-2 text-success bg-success-transparent font-weight-bold p-1 tx-12 rounded-circle"></i><span class="tx-semibold">7 Days</span> Duration</li>


                                    <li><i class="fe fe-check me-2 text-success bg-success-transparent font-weight-bold p-1 tx-12 rounded-circle"></i><span class="tx-semibold">5%</span> ROI</li>


                                    <li><i class="fe fe-check me-2 text-success bg-success-transparent font-weight-bold p-1 tx-12 rounded-circle"></i><span class="tx-semibold">24/7</span> Support</li>
                                </ul>

                                <form class="form" action="deposit.php" method="post">

                                    <input type="hidden" name="plan_id" value="1">


                                    <div class="form-group text-start">
                                        <label class="tx-medium">Amount</label>
                                        <input class="form-control" name="amount" placeholder="1000" type="text" required="">
                                    </div>
                                    <input class="form-control" type="hidden" name="account_type" value="STANDARD" required="">

                                    <button type="submit" name="subscribe" class="btn ripple btn-primary-transparent btn-block mb-2"> Subscribe to Plan <i class="mdi mdi-arrow-right ms-1"></i>
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-sm-6">
                    <div class="card card-pricing custom-card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mb-0">
                                    <h5 class="fs-16 tx-medium">PREMIUM</h5>
                                    <h2 class="mt-2 mb-0 text-primary">$5000 <span class="text-muted fs-12">/ Minimum</span></h2>
                                    <p class="text-dark mt-3 mb-0 fs-14">High ROI After Trading Session</p>
                                </div>
                                <div class="text-end ms-auto">
                                    <span class="badge bg-primary-light">Try It Now</span>
                                </div>
                            </div>
                            <hr class="message-inner-separator">
                            <div class="pricingContent1">
                                <ul>
                                    <li class="pt-1"><i class="fe fe-check me-2 text-success bg-success-transparent font-weight-bold p-1 tx-12 rounded-circle"></i><span class="tx-semibold">7 Days</span> Duration</li>


                                    <li><i class="fe fe-check me-2 text-success bg-success-transparent font-weight-bold p-1 tx-12 rounded-circle"></i><span class="tx-semibold">25%</span> ROI</li>


                                    <li><i class="fe fe-check me-2 text-success bg-success-transparent font-weight-bold p-1 tx-12 rounded-circle"></i><span class="tx-semibold">24/7</span> Support</li>
                                </ul>

                                <form class="form" action="deposit.php" method="post">

                                    <input type="hidden" name="plan_id" value="2">


                                    <div class="form-group text-start">
                                        <label class="tx-medium">Amount</label>
                                        <input class="form-control" name="amount" placeholder="5000" type="text" required="">
                                    </div>

                                    <input class="form-control" type="hidden" name="account_type" value="PREMIUM" required="">
                                    <button type="submit" name="subscribe" class="btn ripple btn-primary-transparent btn-block mb-2"> Subscribe to Plan <i class="mdi mdi-arrow-right ms-1"></i>
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-sm-6">
                    <div class="card card-pricing custom-card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mb-0">
                                    <h5 class="fs-16 tx-medium">GOLD</h5>
                                    <h2 class="mt-2 mb-0 text-primary">$10000 <span class="text-muted fs-12">/ Minimum</span></h2>
                                    <p class="text-dark mt-3 mb-0 fs-14">High ROI After Trading Session</p>
                                </div>
                                <div class="text-end ms-auto">
                                    <span class="badge bg-primary-light">Try It Now</span>
                                </div>
                            </div>
                            <hr class="message-inner-separator">
                            <div class="pricingContent1">
                                <ul>
                                    <li class="pt-1"><i class="fe fe-check me-2 text-success bg-success-transparent font-weight-bold p-1 tx-12 rounded-circle"></i><span class="tx-semibold">10 Days</span> Duration</li>


                                    <li><i class="fe fe-check me-2 text-success bg-success-transparent font-weight-bold p-1 tx-12 rounded-circle"></i><span class="tx-semibold">35%</span> ROI</li>


                                    <li><i class="fe fe-check me-2 text-success bg-success-transparent font-weight-bold p-1 tx-12 rounded-circle"></i><span class="tx-semibold">24/7</span> Support</li>
                                </ul>

                                <form class="form" action="deposit.php" method="post">

                                    <input type="hidden" name="plan_id" value="3">

                                    <input class="form-control" type="hidden" name="account_type" value="GOLD" required="">
                                    <div class="form-group text-start">
                                        <label class="tx-medium">Amount</label>
                                        <input class="form-control" name="amount" placeholder="10000" type="text" required="">
                                    </div>


                                    <button type="submit" name="subscribe" class="btn ripple btn-primary-transparent btn-block mb-2"> Subscribe to Plan <i class="mdi mdi-arrow-right ms-1"></i>
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-sm-6">
                    <div class="card card-pricing custom-card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mb-0">
                                    <h5 class="fs-16 tx-medium">ELITE</h5>
                                    <h2 class="mt-2 mb-0 text-primary">$25000 <span class="text-muted fs-12">/ Minimum</span></h2>
                                    <p class="text-dark mt-3 mb-0 fs-14">High ROI After Trading Session</p>
                                </div>
                                <div class="text-end ms-auto">
                                    <span class="badge bg-primary-light">Try It Now</span>
                                </div>
                            </div>
                            <hr class="message-inner-separator">
                            <div class="pricingContent1">
                                <ul>
                                    <li class="pt-1"><i class="fe fe-check me-2 text-success bg-success-transparent font-weight-bold p-1 tx-12 rounded-circle"></i><span class="tx-semibold">12 Days</span> Duration</li>


                                    <li><i class="fe fe-check me-2 text-success bg-success-transparent font-weight-bold p-1 tx-12 rounded-circle"></i><span class="tx-semibold">55%</span> ROI</li>


                                    <li><i class="fe fe-check me-2 text-success bg-success-transparent font-weight-bold p-1 tx-12 rounded-circle"></i><span class="tx-semibold">24/7</span> Support</li>
                                </ul>

                                <form class="form" action="deposit.php" method="post">

                                    <input type="hidden" name="plan_id" value="4">

                                    <input class="form-control" type="hidden" name="account_type" value="ELITE" required="">
                                    <div class="form-group text-start">
                                        <label class="tx-medium">Amount</label>
                                        <input class="form-control" name="amount" placeholder="25000" type="text" required="">
                                    </div>


                                    <button type="submit" name="subscribe" class="btn ripple btn-primary-transparent btn-block mb-2"> Subscribe to Plan <i class="mdi mdi-arrow-right ms-1"></i>
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-12">
                    <div class="card card-pricing custom-card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mb-0">
                                    <h5 class="fs-16 tx-medium">PRO</h5>
                                    <h2 class="mt-2 mb-0 text-primary">$50000 <span class="text-muted fs-12">/ Minimum</span></h2>
                                    <p class="text-dark mt-3 mb-0 fs-14">High ROI After Trading Session</p>
                                </div>
                                <div class="text-end ms-auto">
                                    <span class="badge bg-primary-light">Try It Now</span>
                                </div>
                            </div>
                            <hr class="message-inner-separator">
                            <div class="pricingContent1">
                                <ul>
                                    <li class="pt-1"><i class="fe fe-check me-2 text-success bg-success-transparent font-weight-bold p-1 tx-12 rounded-circle"></i><span class="tx-semibold">12 Days</span> Duration</li>


                                    <li><i class="fe fe-check me-2 text-success bg-success-transparent font-weight-bold p-1 tx-12 rounded-circle"></i><span class="tx-semibold">55%</span> ROI</li>


                                    <li><i class="fe fe-check me-2 text-success bg-success-transparent font-weight-bold p-1 tx-12 rounded-circle"></i><span class="tx-semibold">24/7</span> Support</li>
                                </ul>

                                <form class="form" action="deposit.php" method="post">

                                    <input type="hidden" name="plan_id" value="4">

                                    <input class="form-control" type="hidden" name="account_type" value="pro" required="">
                                    <div class="form-group text-start">
                                        <label class="tx-medium">Amount</label>
                                        <input class="form-control" name="amount" placeholder="50000" type="text" required="" data-listener-added_5c75eabd="true">
                                    </div>


                                    <button type="submit" name="subscribe" class="btn ripple btn-primary-transparent btn-block mb-2"> Subscribe to Plan <i class="mdi mdi-arrow-right ms-1"></i>
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>





        </div>
    </div>

@endsection`
