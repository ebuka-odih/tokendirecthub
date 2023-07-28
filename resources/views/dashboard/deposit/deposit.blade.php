@extends('dashboard.layout.app')
@section('content')


    <div style="margin-top: 50px"  class="main-container container-fluid">
        <div class="inner-body">
            <div id="mobileshow" class="see"></div>
            <div class="sees hide-mobile"></div>
            <!--Row-->
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <div class="card bg-transparent">
                        <div class="card-header">
                            <div class=" shadow-sm pt-4 pl-2 pr-2 pb-2">
                                <!-- Credit card form tabs -->
                                <ul role="tablist" class="nav nav-pills rounded nav-fill mb-3">
                                    <!--<li class="nav-item"> <a data-bs-toggle="pill" href="#credit-card" class="nav-link"> <i class="icofont-credit-card mr-2"></i> Credit Card </a> </li>-->
                                    <li class="nav-item"> <a data-bs-toggle="pill" href="#crypto" class="nav-link active"> <i class="icofont-bitcoin mr-2"></i> Payment Methods </a> </li>
                                    <li class="nav-item"> <a data-bs-toggle="pill" href="#bank-dep" class="nav-link"> <i class="icofont-credit-card mr-2"></i> Bank Deposit </a> </li>
                                    <li class="nav-item"> <a data-bs-toggle="pill" href="#others" class="nav-link"> <i class="icofont-bill-alt mr-2"></i> Others </a> </li>

                                    <li class="nav-item"> <a data-bs-toggle="pill" href="#upload" class="nav-link"> <i class="icofont-checked mr-2"></i> Payment Proof </a>
                                    </li>

                                    <li class="nav-item"> <a data-bs-toggle="pill" href="#dephistory" class="nav-link"> <i class="icofont-listing-box mr-2"></i> Deposit History </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End -->
                            <div class="tab-content">

                                <!--<div id="credit-card" class="tab-pane fade  pt-3">
                                <form onsubmit="submitform(event,'/en/php/card/','#btn-card')" action="en/php/card/" method="post" role="form" id="fcard">
                                <div class="form-group mt-2">
                                    <label for="username">
                                    <h6>Card Owner</h6>
                                    </label>
                                    <input type="text" name="cardholder" placeholder="Card Owner Name" required class="form-control " id="cardholder">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="cardNumber">
                                    <h6>Card number</h6>
                                    </label>
                                    <div class="input-group">
                                        <input type="number" name="cardnumber" placeholder="Valid card number" class="form-control " id="cardnumber" required> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span>

                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-8">
                                    <div class="form-group">
                                        <label><span class="hidden-xs">
                                        <h6>Expiration Date</h6>
                                        </span>
                                        </label>
                                    <div class="input-group">
                                        <input type="text" placeholder="MM/YY" name="expdate" class="form-control" id="expdate" required>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <div class="form-group">
                                        <label data-bs-toggle="tooltip" title="Three digit CV code on the back of your card">
                                        <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                        </label>
                                        <input type="text" required class="form-control" name="cvvcode" id="cvvcode">
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="cardNumber">
                                    <h6>Amount</h6>
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text text-muted">USD</span>
                                        <input type="number" name="amount" placeholder="Amount" class="form-control" id="cardamt" min=10 required>

                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                            <label for="to">
                                            <h6>To</h6>
                                            </label>
                                            <div class="input-group">
                                                <select class="form-control text-primary" name="to" id="to" required>
                                                    <option value="trade">Trading</option>
                                                    <option value="mining">Mining</option>
                                                </select>
                                                <span class="input-group-text"><i class="icofont-caret-down"></i></span>
                                            </div>
                                        </div>
                                <div class="form-group mt-2">
                                    <button id="btn-card" type="submit" class="btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
                                </div>

                                </form>

                                </div>-->
                                <div id="crypto" class="text-break tab-pane fade pt-3 active show">
                                    <p class="py-3"> Don't have crypto? Buy here<i class="icofont-arrow-right"></i><a href="https://bitcoin.com">Bitcoin.com</a> | <a href="https://exchange.mercuryo.io/">Mercuryo</a> | <a href="https://changelly.com">Changelly</a> | <a href="https://crypto.com">Crypto.com</a> | <a href="https://simplex.com">Simplex</a>
                                        | <a href="https://moonpay.com">Moonpay</a>
                                    </p>
                                    <form onsubmit="submitform(event,'/en/php/deposit/','#btn-crypto')" method="post" role="form" id="fcard">
                                        <div class="form-group mt-2">
                                            <label for="cmethod">
                                                <h6>Payment Method</h6>
                                            </label>
                                            <div class="input-group">
                                                <select class="form-control text-primary" name="cmethod" id="cmethod" required="">
                                                    <option value="btc">Bitcoin (BTC)</option>
                                                    <option value="eth">Ethereum (ETH)</option>
                                                    <option value="bnb">Binance Coin (BNB)</option>
                                                    <option value="bsc">Binance Smart Chain (BSC)</option>
                                                    <option value="usdt">USDT Tether (USDT)</option>
                                                    <option value="ltc">Litecoin (LTC)</option>
                                                    <option value="cos">Cosmos (ATOM)</option>
                                                    <option value="algo">Algorand (ALGO)</option>
                                                </select>
                                                <span class="input-group-text"><i class="icofont-caret-down"></i></span>
                                            </div>

                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="amt">
                                                <h6>Amount</h6>
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-text">USD</span>
                                                <input type="number" name="amount" placeholder="Amount" class="form-control " id="cryptoamt" min="" minlength="3" required="">
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="to">
                                                <h6>To</h6>
                                            </label>
                                            <div class="input-group">
                                                <select class="form-control text-primary" name="to" id="to" required="">
                                                    <option value="trade">Trading</option>
                                                    <option value="mine">Mining</option>
                                                </select>
                                                <span class="input-group-text"><i class="icofont-caret-down"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <button type="submit" class="btn btn-primary btn-block shadow-sm" id="btn-crypto"> Proceed </button>
                                            <input type="hidden" name="typ" value="crypto">
                                        </div>

                                    </form>
                                </div>
                                <div id="bank-dep" class="tab-pane fade pt-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="text-center">Bank Deposit</h2>
                                            <div class="alert">
                                                <p class="font-weight-bold text-center">Contact us from the live chat or send an email to support@optionscaptrader.live to provide an account to make your deposit</p>
                                            </div>
                                            <p class="text-muted">Note: Minimum deposit is USD 5,000 </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="others" class="tab-pane fade pt-3">
                                    <form onsubmit="submitform(event,'/en/php/deposit/','#btn-oth')" method="post" id="fdeposit">

                                        <div class="form-group mt-2">
                                            <label class="bmd-label-floating">Amount</label>

                                            <div class="input-group">
                                                <span class="input-group-text">USD</span>
                                                <input type="number" name="amount" min="10" class="form-control" id="othersamount" required="" data-listener-added_c36e958a="true">
                                            </div>
                                        </div>

                                        <div class="form-group mt-2">
                                            <label for="Select Your Bank">
                                                <h6>Select Other Payment Methods</h6>
                                            </label>
                                            <div class="input-group">
                                                <select class="form-control text-primary" name="method" id="met">
                                                    <option value="" selected="" disabled="">--Please select other gateways--</option>
                                                    <option value="skrill">Skrill</option>
                                                    <!--<option value="western union">Western Union</option>-->
                                                    <option value="wire transfer">Wire Transfer</option>
                                                    <!--<option value="moneyegram">Moneygram</option>-->
                                                    <option value="perfect money">Perfect Money</option>
                                                </select>
                                                <span class="input-group-text"><i class="icofont-caret-down"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="to">
                                                <h6>To</h6>
                                            </label>
                                            <div class="input-group">
                                                <select class="form-control text-primary" name="to" id="to" required="">
                                                    <option value="trade">Trading</option>
                                                    <option value="mine">Mining</option>
                                                </select>
                                                <span class="input-group-text"><i class="icofont-caret-down"></i></span>
                                            </div>
                                        </div>

                                        <div class="form-group mt-2">
                                            <p> <button id="btn-oth" type="submit" class="btn btn-primary "> Proceed </button>
                                                <input type="hidden" name="typ" value="oth">
                                            </p>

                                        </div>

                                        <p class="text-muted">Note: Minimum deposit is USD 5,000 </p>

                                    </form>
                                </div>
                                <div id="upload" class="tab-pane fade pt-3">
                                    <form onsubmit="submitform(event,'/en/php/upload2.php','#btn-up')" method="post" enctype="multipart/form-data" id="fileupload1">

                                        <div class="form-group">
                                            <label class="col-sm-3 form-label" for="formFile">Upload Payment Proof</label>
                                            <input name="file2" class="form-control" id="formFile" type="file">
                                        </div>

                                        <div class="form-group mt-2">

                                            <p> <button id="btn-up" type="submit" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i> Upload</button>
                                            </p>

                                        </div>

                                        <p class="text-muted">Note: Only use this form to upload your payment proof. </p>

                                    </form>
                                </div>
                                <div id="dephistory" class="tab-pane fade pt-3">
                                    <div class="card mb-0">
                                        <div class="card-header">
                                            <h3 class="h4 mb-0">Deposit List</h3>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                <table class="table mb-0 table-striped table-sm">
                                                    <thead>
                                                    <tr>
                                                        <th>Amount</th>
                                                        <th>Details</th>
                                                        <th>Date</th>
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

                    </div>

                </div>

            </div>
            <!-- End Row -->


        </div>
    </div>

@endsection
