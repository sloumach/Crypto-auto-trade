@extends('layouts.app')

@section('content')

    </head>

    <body>
        @include('header',['lasttrade' => $lasttrade,  'msg'=>$msg])
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
<p>Withdrawal actions require the user's account status to be 'verified'. Users who have not been verified are only allowed to perform recharges.</p>
<p>Once a user is verified, they can only update their password. Please ensure that you modify any other information before verifying your account.</p>
<p>To verify your account, you need to accurately provide your wallet address, upload your passport in the 'verification' section on your profile page, and await approval from the administration, a process that typically takes less than 24 hours.</p>
<p>To complete the verification process, you are required to invite a friend to join our platform. Your friend needs to submit their ID for verification. This step ensures that the person who extended the invitation is also verified.</p>

<h4>Database Backup:</h4>
<p>Our databases are backed up every 24 hours at 01:00 UTC. This process takes approximately 30 minutes, and there might be a temporary disruption of the website during this period. Kindly note that this is a normal occurrence and there is no need for concern if this happens.</p>

<h4>Password Security:</h4>
<p>Our website will consistently prompt you to enter your password for critical actions. Please refrain from sharing your password with any third party.</p>

<h4>Loss Guarantee:</h4>
<p>Our bot guarantees that any losses will not be more than 3% in cases such as war, market downturns, or USDT coin no longer being accepted by major markets such as Binance.com and MarketCoinCap.com.</p>

<h4>Recharge and Withdrawal:</h4>
<p>Prior to proceeding with account verification, it is imperative to accurately input your wallet address.

Furthermore, exercise utmost diligence when performing recharges, ensuring accurate entries for both the 'amount' and 'txid' fields. Any account found engaging in fraudulent activities, such as attempting to recharge or withdraw funds from another user's account, will be subject to immediate suspension.

Rest assured, all activities are meticulously logged, granting you the ability to access and review your trading, recharge, and withdrawal history whenever you desire.</p>

<h4>Market Window:</h4>
<p>Our market window refreshes every 5-10 minutes.</p>

<h4>Identification Requirements:</h4>
<p>For the purpose of verification, it is crucial that the identification you provide corresponds to the country associated with your account. Only a valid passport will be accepted as a form of identification. Any alternative forms of identification will be automatically declined. Additionally, it is important to note that the submitted passport must be currently valid, as expired passports will not be accepted.</p>

<h4>Transaction Limits:</h4>
<p>The maximum amount for recharges and withdrawals is $1000 per day.</p>
<p>The minimum amount for recharges and withdrawals is $50.</p>

<h4>Inactive Accounts:</h4>
<p>Accounts that remain inactive for a period exceeding one month will undergo an automatic withdrawal of their funds, followed by the closure of the account.</p>

<p>We strongly emphasize the necessity of thoroughly reviewing and comprehending the contents of these terms and policies prior to engaging with our platform. Your utilization of our platform signifies your explicit acknowledgment and acceptance of these terms and policies. Should any inquiries or apprehensions arise, we encourage you to promptly communicate with our dedicated customer support team. Your proactive engagement with our platform implies your unwavering commitment to abiding by these terms and policies.</p>
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
            @include('footer')
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
