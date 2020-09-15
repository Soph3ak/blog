@extends('master.master-pages')
@section('content')
    @section('title','Home')

        <div class="latest">
            <a href="#">
                <div class="left">
                   <img src="images/Bayon-Temple.jpg" alt="">
                    <div class="cover">
                        <div class="content">
                            <h2>Bayon Temple</h2>
                            <p style="display:none">
                                Angkor Wat lies 5.5 kilometres (3.4 mi) north of the modern town of Siem Reap, and a short distance south and slightly east of the previous capital, which was centred at Baphuon. In an area of Cambodia where there is an important group of ancient structures, it is the
                            </p>
                        </div>
                        <span>5th of March 2017</span>
                    </div>

                </div>
            </a>
            <div class="right">
                <a href="#">
                    <div class="top">
                    <img src="{{asset('images/AngkorWatPhotography.jpg')}}" alt="" width="392px" height="194px">
                        <div class="cover">
                        <div class="content">
                            <h3>Angkor Wat</h3>
                            <p style="display:none">
                                Angkor Wat lies 5.5 kilometres (3.4 mi) north of the modern town of Siem Reap, and a short distance south and slightly east of the previous capital, which was centred at Baphuon. In an area of Cambodia where there is an important group of ancient structures, it is the
                            </p>
                        </div>
                        <span>5th of March 2017</span>
                    </div>
                </div>
                </a>
                <a href="#">
                    <div class="buttom">
                    <img src="{{asset('images/Angkor_SiemReap_Cambodia_Tha-Prom-Temple-01.jpg')}}" alt="" width="392px" height="194px">
                    <div class="cover">
                        <div class="content">
                            <h3>Tha Prom Temple</h3>
                            <p style="display:none">
                                Angkor Wat lies 5.5 kilometres (3.4 mi) north of the modern town of Siem Reap, and a short distance south and slightly east of the previous capital, which was centred at Baphuon. In an area of Cambodia where there is an important group of ancient structures, it is the
                            </p>
                        </div>
                        <span>5th of March 2017</span>
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="main-content">
            <div class="left-side">

                <div class="post">
                    <a href="#"><h2 class="title">Angkor Wat Temple</h2></a>
                    <i>This was posted on the 5th of March 2017 by Sopheak</i>
                    <div class="content">
                        <a href="#"><img src="{{asset('images/AngkorWatPhotography.jpg')}}"></a>
                    <p>
                        Angkor Wat lies 5.5 kilometres (3.4 mi) north of the modern town of Siem Reap, and a short distance south and slightly east of the previous capital, which was centred at Baphuon. In an area of Cambodia where there is an important group of ancient structures, it is the southernmost of Angkor's main sites. it is the southernmost of Angkor's main sites. it is the southernmost of Angkor's main sites.


                    </p>
                    </div>
                    <i>Categories: News</i>
                    <a href="{{route('readMore')}}" class="more">Read more<i class="fa fa-caret-down fa-rotate-270" aria-hidden="true"></i></a>
                </div>

                <div class="post">
                    <a href="#"><h2 class="title">Tha Prom Temple</h2></a>
                    <i>This was posted on the 5th of March 2017 by Sopheak</i>
                    <div class="content">
                        <a href="#"><img src="{{asset('images/Angkor_SiemReap_Cambodia_Tha-Prom-Temple-01.jpg')}}"></a>
                    <p>
                        Angkor Wat lies 5.5 kilometres (3.4 mi) north of the modern town of Siem Reap, and a short distance south and slightly east of the previous capital, which was centred at Baphuon. In an area of Cambodia where there is an important group of ancient structures, it is the southernmost of Angkor's main sites. it is the southernmost of Angkor's main sites. it is the southernmost of Angkor's main sites.


                    </p>
                    </div>
                    <i>Categories: News</i>
                    <a href="{{route('readMore')}}" class="more">Read more<i class="fa fa-caret-down fa-rotate-270" aria-hidden="true"></i></a>
                </div>

                <div class="post">
                    <a href="#"><h2 class="title">Bayon Temple</h2></a>
                    <i>This was posted on the 5th of March 2017 by Sopheak</i>
                    <div class="content">
                        <a href="#"><img src="{{asset('images/Bayon-Temple.jpg')}}"></a>
                    <p>
                        Angkor Wat lies 5.5 kilometres (3.4 mi) north of the modern town of Siem Reap, and a short distance south and slightly east of the previous capital, which was centred at Baphuon. In an area of Cambodia where there is an important group of ancient structures, it is the southernmost of Angkor's main sites. it is the southernmost of Angkor's main sites. it is the southernmost of Angkor's main sites.


                    </p>
                    </div>
                    <i>Categories: News</i>
                    <a href="{{route('readMore')}}" class="more">Read more<i class="fa fa-caret-down fa-rotate-270" aria-hidden="true"></i></a>
                </div>


            </div>
            <div class="right-side">
                <div class="sidebar">
                    <h3>Popular Posts</h3>
                    <a href="#">
                        <div class="popular-post">
                        <img src="{{asset('images/Bayon-Temple.jpg')}}" alt="Bayon-Temple">
                        <div class="right">
                            <h5>Bayon Temple</h5>
                            <p>Angkor Wat lies 5.5 kilometres (3.4 mi) north of the modern town of Siem Reap.</p>
                        </div>
                    </div>
                    </a>
                    <a href="#">
                        <div class="popular-post">
                        <img src="{{asset('images/Angkor_SiemReap_Cambodia_Tha-Prom-Temple-01.jpg')}}" alt="Bayon-Temple">
                        <div class="right">
                            <h5>Tha Prom Temple</h5>
                            <p>Angkor Wat lies 5.5 kilometres (3.4 mi) north of the modern town of Siem Reap.</p>
                        </div>

                    </div>
                    </a>
                    <a href="#">
                        <div class="popular-post">
                        <img src="{{asset('images/AngkorWatPhotography.jpg')}}" alt="Bayon-Temple">
                        <div class="right">
                            <h5>Angkor Wat Temple</h5>
                            <p>Angkor Wat lies 5.5 kilometres (3.4 mi) north of the modern town of Siem Reap.</p>
                        </div>

                    </div>
                    </a>


                </div>
                <div class="sidebar">
                    <h3>Find me on Facebook</h3>
                    <div class="fb-page">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMy-Computer-Prices-259435534417219%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="315" height="180" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>

                <div class="sidebar">
                    <h3>Top Sidebar</h3>
                    <p>The initial design and construction of the temple took place in the first half of the 12th century, during the reign of Suryavarman II (ruled 1113 – c. 1150).</p>
                </div>
            </div>


        </div>
        @endsection

