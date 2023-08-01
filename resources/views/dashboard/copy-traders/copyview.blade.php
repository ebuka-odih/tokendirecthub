@extends('dashboard.layout.app')
@section('content')

<div class="container" style="margin-top:45px; color:white; text-align:center;">
    <h1><strong>MY TRADERS</strong></h1>




    <p>Get More Expert Traders and Earn More Profits <a href="account_upgrade.php">GO PRO</a> </p>




    <div class="alert alert-info fade show" role="alert">
        <center style="color:;">MINIMAL COPY TRADE AMOUNT: $ 500.00</center>

    </div>


    <div class="container" style="margin-top:45px; color:white; text-align:center;">

        <div class="container" style="margin-top:45px; color:white; text-align:center;">
            <h3><strong>COPY EXPERT TRADERS</strong></h3>

            <div class="container bootstrap snippets bootdey">
                <div class="profile card">
                    <div class="profile-body" style="padding:10px; margin-bottom:10px;">
                        <div class="profile-bio">
                            <div class="row">
                                <div class="col-md-5 text-center">
                                    <img style="height:170px;" class="img-thumbnail md-margin-bottom-10" src="img/83E58524-699E-447C-9F06-06B03AAAFAF8.jpeg" alt="">

                                </div>
                                <div class="col-md-7">



                                    <h2>Username: 7WSND</h2>
                                    <span><strong>Accuracy:</strong> 70%</span><br>
                                    <span><strong>Trades Won in Ratio:</strong>88.2%</span><br>
                                    <span><strong>Trades lost in Ratio:</strong> 21.8%</span><br>
                                    <span><strong>Trade Percentage:</strong> 30%</span>
                                    <br>
                                    <p>Supported By Whirl Wind Invts.</p>


                                    <div class="alert alert-info fade show" role="alert">
                                        <center style="color:red;">	INSUFFICIENT TRADING BALANCE.</center>

                                    </div>


                                    <form method="POST" action="copyaction.php">

                                        <input type="hidden" name="user_id" value="7WSND">

                                        <input type="hidden" name="accuracy" value="70">

                                        <input type="hidden" name="won_ratio" value="88.2">

                                        <input type="hidden" name="file" value="83E58524-699E-447C-9F06-06B03AAAFAF8.jpeg">

                                        <input type="hidden" name="username" value="nancy112">


                                        <input type="hidden" name="loss_ratio" value="21.8">

                                        <input type="hidden" name="percentage" value="30">


                                        <div class="alert alert-info fade show" role="alert">
                                            <center style="color:;">EXPERT TRADE NOT COPIED</center>

                                        </div>


                                        <button class="btn btn-warning" type="submit" name="copy" style="color:white;">Copy Trade</button>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>


                </div>


            </div>

        </div>


    </div>

</div>

@endsection
