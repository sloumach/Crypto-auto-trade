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
                                            <h2>About us</h2>
                                        </div>
                                        <p class="text-center">www.trbotai.com</p>

                                    </div>




<p>Welcome to our website! We are a platform that utilizes cutting-edge technology to provide advanced trading services for cryptocurrencies. Our website is designed to make trading with crypto coins easy and accessible for everyone, thanks to the use of an AI trading bot that is constantly monitoring the markets and executing trades in real-time.

    Our AI trading bot is the cornerstone of our platform. It is a complex algorithm that is designed to analyze market trends and identify profitable opportunities for buying and selling cryptocurrencies. Our bot is constantly waking up every minute to analyze market data, and it is always on the lookout for the best trading opportunities. When our bot identifies a good opportunity, it will execute a trade by first buying the coins and then selling them at the right moment to maximize profits.





    So, if you are looking for a reliable and efficient trading platform for cryptocurrencies, look no further than our website. With our advanced AI trading bot and user-friendly interface, you can trade with confidence and ease. </p>
    <p>Our website was created by a team of AI developers who are passionate about using technology to revolutionize the world of trading. We believe that the power of AI can be harnessed to provide better and more efficient trading services, and that is exactly what we have done with our platform.</p>
    <p>While our platform may be advanced, we have made sure that it is easy to use for everyone. Our user interface is intuitive and user-friendly, and we have made sure that all of our features are accessible with just a few clicks. Whether you are an experienced trader or just starting out, our platform is designed to help you succeed.</p>
    <p>In addition to our advanced trading services, we also prioritize the security and safety of our users. We understand the importance of protecting our users' personal and financial information, which is why we have implemented robust security measures to ensure that all transactions and data are kept secure.</p>

    <p>Our platform also offers a range of features and tools that can help traders make informed decisions. We provide real-time market data, charts, and analysis tools that can help traders stay up-to-date with the latest market trends and make informed trading decisions. We also offer educational resources and materials that can help novice traders learn the ropes and improve their trading skills.

        At our website, we are committed to providing the best possible trading experience for our users. We are constantly working to improve our platform and add new features and tools that can help traders succeed. Our team of AI developers and trading experts are always exploring new technologies and techniques to help our users stay ahead of the curve.</p>


        <p>In summary, our website is a state-of-the-art trading platform for cryptocurrencies that utilizes an advanced AI trading bot to provide efficient and profitable trading services. Our user-friendly interface, real-time market data, and educational resources make trading easy and accessible for everyone. We are committed to providing the best possible trading experience for our users and are constantly working to improve our platform. Join us today and experience the future of trading!</p>

        <p class="text-center">Join us today and experience the future of trading!</p>
        <h5 class="text-center">The trbotai.com team</h5>
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
            {{-- <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                    <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
                </div>
            </div> --}}
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
