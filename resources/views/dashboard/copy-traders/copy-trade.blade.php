@extends('dashboard.layout.app')
@section('content')
    <style>


        body {
            margin: 0;

        }

        .navbari {
            overflow: hidden;
            background-color:#0e132e;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .navbari a {
            float: left;
            display: block;
            color: white	;
            text-align: center;
            padding: 8px 10px;
            text-decoration: none;
            font-size: 13px;
        }

        .navbari a:hover {
            background: #00002E;
            color: black;
        }

        .navbari a.active {

            color: white;
        }

        .main {
            padding: 20px;
            margin-bottom: 30px;
        }
    </style>
    <style>
        .stars {
            font-size: 0;
        }

        .stars p {
            font-size: 20px;
            padding: 3px;
        }

        .stars i {
            font-size: 35px;
            padding: 3px;
        }

        .stars:hover i,
        .stars:not(:hover) .active{
            color: yellow;
        }

        .stars:hover i:hover ~ i {
            color: inherit;
        }
    </style>

<div class="container" style="margin-top:45px; color:white; text-align:center;">
    <h1><strong>MY TRADERS</strong></h1>


    <p>Get More Expert Traders and Earn More Profits <a href="account_upgrade.php">GO PRO</a> </p>

    <div class="alert alert-info fade show" role="alert">
        <center style="color:;">MINIMAL COPY TRADE AMOUNT: $ 500.00</center>

    </div>


    <div class="container" style="margin-top:45px; color:white; text-align:center;">
        <h3><strong>COPY EXPERT+ TRADERS</strong></h3>




        <div class="container bootstrap snippets bootdey">
            <div class="profile card" style="padding:10px; margin-bottom:10px;">
                <div class="profile-body">
                    <div class="profile-bio">
                        <div class="row">
                            <div class="col-md-5 text-center">
                                <img style="height:170px;" class="img-thumbnail md-margin-bottom-10" src="../administrators/upload/ED4B8E70-CFAF-4749-8064-F6EAC2BEB509.jpeg" alt="">

                            </div>
                            <div class="col-md-7">



                                <h2>Username: 1T8CV</h2>
                                <span><strong>Accuracy:</strong> 55%</span><br>
                                <span><strong>Trades Won in Ratio:</strong>60%</span><br>
                                <span><strong>Trades lost in Ratio:</strong> 40%</span><br>
                                <span><strong>Trade Percentage:</strong> 20%</span>
                                <br>
                                <p>Supported By Whirl Wind Invts.</p>





                                <form method="POST" action="">

                                    <input type="hidden" name="user_id" value="1T8CV">

                                    <input type="hidden" name="accuracy" value="55">

                                    <input type="hidden" name="won_ratio" value="60">

                                    <input type="hidden" name="username" value="nancy112">

                                    <input type="hidden" name="loss_ratio" value="40">

                                    <input type="hidden" name="percentage" value="20">


                                    <button class="btn btn-warning" type="submit" name=""><a style="color:white;" href="copyview.php?id=18">Copy Trade</a></button>

                                </form>

                            </div>

                        </div>

                    </div>


                </div>


            </div>

        </div>

        <div class="container bootstrap snippets bootdey">
            <div class="profile card" style="padding:10px; margin-bottom:10px;">
                <div class="profile-body">
                    <div class="profile-bio">
                        <div class="row">
                            <div class="col-md-5 text-center">
                                <img style="height:170px;" class="img-thumbnail md-margin-bottom-10" src="../administrators/upload/83E58524-699E-447C-9F06-06B03AAAFAF8.jpeg" alt="">

                            </div>
                            <div class="col-md-7">



                                <h2>Username: 7WSND</h2>
                                <span><strong>Accuracy:</strong> 70%</span><br>
                                <span><strong>Trades Won in Ratio:</strong>88.2%</span><br>
                                <span><strong>Trades lost in Ratio:</strong> 21.8%</span><br>
                                <span><strong>Trade Percentage:</strong> 30%</span>
                                <br>
                                <p>Supported By Whirl Wind Invts.</p>





                                <form method="POST" action="">

                                    <input type="hidden" name="user_id" value="7WSND">

                                    <input type="hidden" name="accuracy" value="70">

                                    <input type="hidden" name="won_ratio" value="88.2">

                                    <input type="hidden" name="username" value="nancy112">

                                    <input type="hidden" name="loss_ratio" value="21.8">

                                    <input type="hidden" name="percentage" value="30">


                                    <button class="btn btn-warning" type="submit" name=""><a style="color:white;" href="copyview.php?id=17">Copy Trade</a></button>

                                </form>

                            </div>

                        </div>

                    </div>


                </div>


            </div>

        </div>

        <div class="container bootstrap snippets bootdey">
            <div class="profile card" style="padding:10px; margin-bottom:10px;">
                <div class="profile-body">
                    <div class="profile-bio">
                        <div class="row">
                            <div class="col-md-5 text-center">
                                <img style="height:170px;" class="img-thumbnail md-margin-bottom-10" src="../administrators/upload/040954DC-1E58-43AA-A74B-DB0E9A5FDB37.jpeg" alt="">

                            </div>
                            <div class="col-md-7">



                                <h2>Username: SZ3XF***567</h2>
                                <span><strong>Accuracy:</strong> 80%</span><br>
                                <span><strong>Trades Won in Ratio:</strong>88.14%</span><br>
                                <span><strong>Trades lost in Ratio:</strong> 11.86%</span><br>
                                <span><strong>Trade Percentage:</strong> 30%</span>
                                <br>
                                <p>Supported By Whirl Wind Invts.</p>





                                <form method="POST" action="">

                                    <input type="hidden" name="user_id" value="SZ3XF***567">

                                    <input type="hidden" name="accuracy" value="80">

                                    <input type="hidden" name="won_ratio" value="88.14">

                                    <input type="hidden" name="username" value="nancy112">

                                    <input type="hidden" name="loss_ratio" value="11.86">

                                    <input type="hidden" name="percentage" value="30">


                                    <button class="btn btn-warning" type="submit" name=""><a style="color:white;" href="copyview.php?id=16">Copy Trade</a></button>

                                </form>

                            </div>

                        </div>

                    </div>


                </div>


            </div>

        </div>




        <div class="container" style="margin-top:45px; color:white; text-align:center;">
            <h3><strong>COPY EXPERT TRADERS</strong></h3>




            <div class="container bootstrap snippets bootdey">
                <div class="profile card">
                    <div class="profile-body" style="padding:10px; margin-bottom:10px;">
                        <div class="profile-bio">
                            <div class="row">
                                <div class="col-md-5 text-center">
                                    <img style="height:170px;" class="img-thumbnail md-margin-bottom-10" src="img/9F660119-205F-4609-AB9B-71E3FDAA88A6.jpeg" alt="">

                                </div>
                                <div class="col-md-7">



                                    <h2>Username: 5K1LX***101</h2>
                                    <span><strong>Accuracy:</strong> 86%</span><br>
                                    <span><strong>Trades Won in Ratio:</strong>89.9%</span><br>
                                    <span><strong>Trades lost in Ratio:</strong> 10.1%</span><br>
                                    <span><strong>Trade Percentage:</strong> 15%</span>
                                    <br>
                                    <p>Supported By Whirl Wind Invts.</p>





                                    <form method="POST" action="">

                                        <input type="hidden" name="user_id" value="5K1LX***101">

                                        <input type="hidden" name="accuracy" value="86">

                                        <input type="hidden" name="won_ratio" value="89.9">

                                        <input type="hidden" name="username" value="nancy112">

                                        <input type="hidden" name="loss_ratio" value="10.1">

                                        <input type="hidden" name="percentage" value="15">



                                        <button class="btn btn-warning" type="submit" name=""><a style="color:white;" href="copyview.php?id=19">Copy Trade</a></button>

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
