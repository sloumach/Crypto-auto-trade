@extends('layouts.app')

@section('content')

    </head>

    <body>
        @include('header')
        @include('navbar')
            <!--**********************************
                Content body start
            ***********************************-->
            <div class="content-body">
                <!-- row -->
                <div class="container">
                    <div class="row">
                       @include('topbody',['lasttrade' => $lasttrade,  'prf'=>$prf])

                        <!-- /# column -->
                    </div>




                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                </div>

                                <div class="col-md-6">

                                </div>
                                <div class="col-lg-12 text-black">
                                    <div class="card text-black">
                                        <div class="card-header justify-content-center">
                                            <h2>Terms and Policies</h2>
                                        </div>
                                        <p class="text-center">Welcome to our platform! By using our services, you agree to the following terms and policies:</p>

                                    </div>



<h4>Processing Time:</h4>
<p>Each recharge or withdrawal action may take between 24 and 72 hours to process. We make every effort to process transactions as quickly as possible, but delays may occur due to technical issues or security checks.</p>

<h4>Account Verification:</h4>
<p>Withdrawal actions require that the user's account status is 'verified'. Users who are not verified can only perform recharges.</p>
<p>Once a user is verified, they can only update their password. Please ensure that you modify any other information before verifying your account.</p>
<p>To verify your account, you must provide your wallet address accurately, upload your passport in the 'verification' window on your profile page, and wait for approval by the administration, which takes less than 24 hours.</p>
<p>To complete verification, you must invite a friend to join our platform, and that friend must only submit their ID. This is to ensure that the person who invited them is also verified.</p>

<h4>Database Backup:</h4>
<p>Our databases are backed up every 24 hours at 01:00 UTC. This process takes 30 minutes, and the website may be temporarily down during this time. Please do not be alarmed if this happens.</p>

<h4>Password Security:</h4>
<p>Our website will always prompt you for your password for important actions. Never share your password with any third party.</p>

<h4>Loss Guarantee:</h4>
<p>Our bot guarantees that any losses will not be more than 3% in cases such as war, market downturns, or USDT coin no longer being accepted by major markets such as Binance.com and MarketCoinCap.com.</p>

<h4>Recharge and Withdrawal:</h4>
<p>Before verifying your account, please ensure that you provide your wallet address accurately.</p>
<p>When recharging, please ensure that you enter the correct 'amount' and 'txid' information. The website will ban any account with fraudulent actions or users who attempt to recharge or withdraw funds from another user's account.</p>
<p>Every action is logged, and you can review your trading, recharge, and withdrawal history at any time.</p>

<h4>Market Window:</h4>
<p>Our market window refreshes every 5 minutes.</p>

<h4>Identification Requirements:</h4>
<p>The identification used for verification must match the country of the account. The only form of identification accepted is a passport. Any other form of identification will be automatically rejected, and the passport must be valid (expired passports will be rejected).</p>

<h4>Transaction Limits:</h4>
<p>The maximum amount for recharges and withdrawals is $1000 per day.</p>
<p>The minimum amount for recharges and withdrawals is $50.</p>

<h4>Inactive Accounts:</h4>
<p>Accounts that have been inactive for more than 1 month will automatically withdraw their funds and close their accounts.</p>

<p>Please read these terms and policies carefully before using our platform. By using our platform, you acknowledge that you have read and agreed to these terms and policies. If you have any questions or concerns, please contact our customer support.</p>
                                </div>



                            </div>
                            <!-- /# card -->
                        </div>
                    </div>
                </div>
            </div>
            <!--**********************************
                Content body end
            ***********************************-->


            <!--**********************************
                Footer start
            ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                    <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
                </div>
            </div>
            <!--**********************************
                Footer end
            ***********************************-->

            <!--**********************************
               Support ticket button start
            ***********************************-->

            <!--**********************************
               Support ticket button end
            ***********************************-->


        </div>
    </body>
    <script src="dshb/vendor/global/global.min.js"></script>
    <script src="dshb/js/quixnav-init.js"></script>
    <script src="dshb/js/custom.min.js"></script>



    <!--**********************************
            Main wrapper end
@endsection
