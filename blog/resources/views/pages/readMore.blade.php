@extends('master.master-pages')
@section('title','ReadMore')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('css/readMore.css')}}">
@endsection
@section('content')
        <div class="main-content">
            <div class="left-side">
                <div class="post">
                    <h1 class="title">Angkor Wat Temple</h1>
                    <i>This was posted on the 5th of March 2017 by Sopheak</i>
                    <div class="content">
                        <img src="{{asset('images/AngkorWatPhotography.jpg')}}" alt="">
                    <p>
                        Angkor Wat lies 5.5 kilometres (3.4 mi) north of the modern town of Siem Reap, and a short distance south and slightly east of the previous capital, which was centred at Baphuon. In an area of Cambodia where there is an important group of ancient structures, it is the southernmost of Angkor's main sites. it is the southernmost of Angkor's main sites. it is the southernmost of Angkor's main sites.
                    </p>
                    <div class="related-post">
                        <h3 class="related">RELATED ARTICLE</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{asset('images/Bayon-Temple.jpg')}}" alt="">
                                    <h4>Angkor Wat Photography Angkor Wat Photography</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('images/AngkorWatPhotography.jpg')}}" alt="">
                                    <h4>Angkor Wat Photography</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('images/AngkorWatPhotography.jpg')}}" alt="">
                                    <h4>Angkor Wat Photography</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                    </div>
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
@section('script')
@endsection
