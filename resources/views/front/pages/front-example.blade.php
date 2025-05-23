@extends('front.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Document Title')
@section('content')

<main class="main">
    <!-- Slider Section -->
    <section id="slider" class="slider section dark-background">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": "auto",
                        "centeredSlides": true,
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "navigation": {
                            "nextEl": ".swiper-button-next",
                            "prevEl": ".swiper-button-prev"
                        }
                    }
                </script>

                <div class="swiper-wrapper">
                    <div
                        class="swiper-slide"
                        style="background-image: url('front/assets/img/post-slide-1.jpg')">
                        <div class="content">
                            <h2>
                                <a href="single-post.html">The Best Homemade Masks for Face (keep the Pimples
                                    Away)</a>
                            </h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Quidem neque est mollitia! Beatae minima assumenda repellat
                                harum vero, officiis ipsam magnam obcaecati cumque maxime
                                inventore repudiandae quidem necessitatibus rem atque.
                            </p>
                        </div>
                    </div>

                    <div
                        class="swiper-slide"
                        style="background-image: url('front/assets/img/post-slide-2.jpg')">
                        <div class="content">
                            <h2>
                                <a href="single-post.html">17 Pictures of Medium Length Hair in Layers That Will
                                    Inspire Your New Haircut</a>
                            </h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Quidem neque est mollitia! Beatae minima assumenda repellat
                                harum vero, officiis ipsam magnam obcaecati cumque maxime
                                inventore repudiandae quidem necessitatibus rem atque.
                            </p>
                        </div>
                    </div>

                    <div
                        class="swiper-slide"
                        style="background-image: url('front/assets/img/post-slide-3.jpg')">
                        <div class="content">
                            <h2>
                                <a href="single-post.html">13 Amazing Poems from Shel Silverstein with Valuable Life
                                    Lessons</a>
                            </h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Quidem neque est mollitia! Beatae minima assumenda repellat
                                harum vero, officiis ipsam magnam obcaecati cumque maxime
                                inventore repudiandae quidem necessitatibus rem atque.
                            </p>
                        </div>
                    </div>

                    <div
                        class="swiper-slide"
                        style="background-image: url('front/assets/img/post-slide-4.jpg')">
                        <div class="content">
                            <h2>
                                <a href="single-post.html">9 Half-up/half-down Hairstyles for Long and Medium
                                    Hair</a>
                            </h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Quidem neque est mollitia! Beatae minima assumenda repellat
                                harum vero, officiis ipsam magnam obcaecati cumque maxime
                                inventore repudiandae quidem necessitatibus rem atque.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- /Slider Section -->
</main>
<!-- Andrea blog content start -->
<div class="container">
    <div class="row d-flex">
        <div class="col-xl-8 py-5 px-md-5">
            <div class="row pt-md-4">
                <div class="col-md-12">
                    <div
                        class="blog-entry ftco-animate d-md-flex fadeInUp ftco-animated">
                        <a
                            href="single.html"
                            class="img img-2"
                            style="background-image: url(front/images/image_1.jpg)"></a>
                        <div class="text text-2 pl-md-4">
                            <h3 class="mb-2">
                                <a href="single.html">A Loving Heart is the Truest Wisdom</a>
                            </h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                    <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                    <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">
                                A small river named Duden flows by their place and supplies
                                it with the necessary regelialia.
                            </p>
                            <p>
                                <a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div
                        class="blog-entry ftco-animate d-md-flex fadeInUp ftco-animated">
                        <a
                            href="single.html"
                            class="img img-2"
                            style="background-image: url(front/images/image_2.jpg)"></a>
                        <div class="text text-2 pl-md-4">
                            <h3 class="mb-2">
                                <a href="single.html">Great Things Never Came from Comfort Zone</a>
                            </h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                    <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                    <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">
                                A small river named Duden flows by their place and supplies
                                it with the necessary regelialia.
                            </p>
                            <p>
                                <a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div
                        class="blog-entry ftco-animate d-md-flex fadeInUp ftco-animated">
                        <a
                            href="single.html"
                            class="img img-2"
                            style="background-image: url(front/images/image_3.jpg)"></a>
                        <div class="text text-2 pl-md-4">
                            <h3 class="mb-2">
                                <a href="single.html">Paths Are Made by Walking</a>
                            </h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span>Dec 14, 2018</span>
                                    <span><a href="single.html">Lifestyle</a></span>
                                    <span>5 Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">
                                A small river named Duden flows by their place and supplies
                                it with the necessary regelialia.
                            </p>
                            <p>
                                <a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div
                        class="blog-entry ftco-animate d-md-flex fadeInUp ftco-animated">
                        <a
                            href="single.html"
                            class="img img-2"
                            style="background-image: url(front/images/image_4.jpg)"></a>
                        <div class="text text-2 pl-md-4">
                            <h3 class="mb-2">
                                <a href="single.html">The Secret of Getting Ahead is Getting Started</a>
                            </h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span>Dec 14, 2018</span>
                                    <span><a href="single.html">Nature</a></span>
                                    <span>5 Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">
                                A small river named Duden flows by their place and supplies
                                it with the necessary regelialia.
                            </p>
                            <p>
                                <a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div
                        class="blog-entry ftco-animate d-md-flex fadeInUp ftco-animated">
                        <a
                            href="single.html"
                            class="img img-2"
                            style="background-image: url(front/images/image_5.jpg)"></a>
                        <div class="text text-2 pl-md-4">
                            <h3 class="mb-2">
                                <a href="single.html">You Can't Blame Gravity for Falling in Love</a>
                            </h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span>Dec 14, 2018</span>
                                    <span><a href="single.html">Lifestyle</a></span>
                                    <span>5 Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">
                                A small river named Duden flows by their place and supplies
                                it with the necessary regelialia.
                            </p>
                            <p>
                                <a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div
                        class="blog-entry ftco-animate d-md-flex fadeInUp ftco-animated">
                        <a
                            href="single.html"
                            class="img img-2"
                            style="background-image: url(front/images/image_6.jpg)"></a>
                        <div class="text text-2 pl-md-4">
                            <h3 class="mb-2">
                                <a href="single.html">You Can't Blame Gravity for Falling in Love</a>
                            </h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span>Dec 14, 2018</span>
                                    <span><a href="single.html">Travel</a></span>
                                    <span>5 Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">
                                A small river named Duden flows by their place and supplies
                                it with the necessary regelialia.
                            </p>
                            <p>
                                <a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div
                        class="blog-entry ftco-animate d-md-flex fadeInUp ftco-animated">
                        <a
                            href="single.html"
                            class="img img-2"
                            style="background-image: url(front/images/image_7.jpg)"></a>
                        <div class="text text-2 pl-md-4">
                            <h3 class="mb-2">
                                <a href="single.html">You Can't Blame Gravity for Falling in Love</a>
                            </h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span>Dec 14, 2018</span>
                                    <span><a href="single.html">Travel</a></span>
                                    <span>5 Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">
                                A small river named Duden flows by their place and supplies
                                it with the necessary regelialia.
                            </p>
                            <p>
                                <a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div
                        class="blog-entry ftco-animate d-md-flex fadeInUp ftco-animated">
                        <a
                            href="single.html"
                            class="img img-2"
                            style="background-image: url(front/images/image_8.jpg)"></a>
                        <div class="text text-2 pl-md-4">
                            <h3 class="mb-2">
                                <a href="single.html">You Can't Blame Gravity for Falling in Love</a>
                            </h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                    <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                    <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">
                                A small river named Duden flows by their place and supplies
                                it with the necessary regelialia.
                            </p>
                            <p>
                                <a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div
                        class="blog-entry ftco-animate d-md-flex fadeInUp ftco-animated">
                        <a
                            href="single.html"
                            class="img img-2"
                            style="background-image: url(front/images/image_9.jpg)"></a>
                        <div class="text text-2 pl-md-4">
                            <h3 class="mb-2">
                                <a href="single.html">You Can't Blame Gravity for Falling in Love</a>
                            </h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                    <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                    <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">
                                A small river named Duden flows by their place and supplies
                                it with the necessary regelialia.
                            </p>
                            <p>
                                <a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div
                        class="blog-entry ftco-animate d-md-flex fadeInUp ftco-animated">
                        <a
                            href="single.html"
                            class="img img-2"
                            style="background-image: url(front/images/image_10.jpg)"></a>
                        <div class="text text-2 pl-md-4">
                            <h3 class="mb-2">
                                <a href="single.html">You Can't Blame Gravity for Falling in Love</a>
                            </h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span>Dec 14, 2018</span>
                                    <span><a href="single.html">Lifestyle</a></span>
                                    <span>5 Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">
                                A small river named Duden flows by their place and supplies
                                it with the necessary regelialia.
                            </p>
                            <p>
                                <a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div
                        class="blog-entry ftco-animate d-md-flex fadeInUp ftco-animated">
                        <a
                            href="single.html"
                            class="img img-2"
                            style="background-image: url(front/images/image_11.jpg)"></a>
                        <div class="text text-2 pl-md-4">
                            <h3 class="mb-2">
                                <a href="single.html">You Can't Blame Gravity for Falling in Love</a>
                            </h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                    <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                    <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">
                                A small river named Duden flows by their place and supplies
                                it with the necessary regelialia.
                            </p>
                            <p>
                                <a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div
                        class="blog-entry ftco-animate d-md-flex fadeInUp ftco-animated">
                        <a
                            href="single.html"
                            class="img img-2"
                            style="background-image: url(front/images/image_12.jpg)"></a>
                        <div class="text text-2 pl-md-4">
                            <h3 class="mb-2">
                                <a href="single.html">You Can't Blame Gravity for Falling in Love</a>
                            </h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                    <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                    <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">
                                A small river named Duden flows by their place and supplies
                                it with the necessary regelialia.
                            </p>
                            <p>
                                <a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END-->
            <div class="row">
                <div class="col">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="col-xl-4 sidebar ftco-animate bg-light pt-5 fadeInUp ftco-animated">
            <div class="sidebar-box pt-md-4">
                <form action="#" class="search-form">
                    <div class="form-group">
                        <span class="icon icon-search"></span>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Type a keyword and hit enter" />
                    </div>
                </form>
            </div>
            <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
                <h3 class="sidebar-heading">Categories</h3>
                <ul class="categories">
                    <li>
                        <a href="#">Fashion <span>(6)</span></a>
                    </li>
                    <li>
                        <a href="#">Technology <span>(8)</span></a>
                    </li>
                    <li>
                        <a href="#">Travel <span>(2)</span></a>
                    </li>
                    <li>
                        <a href="#">Food <span>(2)</span></a>
                    </li>
                    <li>
                        <a href="#">Photography <span>(7)</span></a>
                    </li>
                </ul>
            </div>

            <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
                <h3 class="sidebar-heading">Popular Articles</h3>
                <div class="block-21 mb-4 d-flex">
                    <a
                        class="blog-img mr-4"
                        style="background-image: url(front/images/image_1.jpg)"></a>
                    <div class="text">
                        <h3 class="heading">
                            <a href="#">Even the all-powerful Pointing has no control</a>
                        </h3>
                        <div class="meta">
                            <div>
                                <a href="#"><span class="icon-calendar"></span> June 28, 2019</a>
                            </div>
                            <div>
                                <a href="#"><span class="icon-person"></span> Dave Lewis</a>
                            </div>
                            <div>
                                <a href="#"><span class="icon-chat"></span> 19</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-21 mb-4 d-flex">
                    <a
                        class="blog-img mr-4"
                        style="background-image: url(front/images/image_2.jpg)"></a>
                    <div class="text">
                        <h3 class="heading">
                            <a href="#">Even the all-powerful Pointing has no control</a>
                        </h3>
                        <div class="meta">
                            <div>
                                <a href="#"><span class="icon-calendar"></span> June 28, 2019</a>
                            </div>
                            <div>
                                <a href="#"><span class="icon-person"></span> Dave Lewis</a>
                            </div>
                            <div>
                                <a href="#"><span class="icon-chat"></span> 19</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-21 mb-4 d-flex">
                    <a
                        class="blog-img mr-4"
                        style="background-image: url(front/images/image_3.jpg)"></a>
                    <div class="text">
                        <h3 class="heading">
                            <a href="#">Even the all-powerful Pointing has no control</a>
                        </h3>
                        <div class="meta">
                            <div>
                                <a href="#"><span class="icon-calendar"></span> June 28, 2019</a>
                            </div>
                            <div>
                                <a href="#"><span class="icon-person"></span> Dave Lewis</a>
                            </div>
                            <div>
                                <a href="#"><span class="icon-chat"></span> 19</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
                <h3 class="sidebar-heading">Tag Cloud</h3>
                <ul class="tagcloud">
                    <a href="#" class="tag-cloud-link">animals</a>
                    <a href="#" class="tag-cloud-link">human</a>
                    <a href="#" class="tag-cloud-link">people</a>
                    <a href="#" class="tag-cloud-link">cat</a>
                    <a href="#" class="tag-cloud-link">dog</a>
                    <a href="#" class="tag-cloud-link">nature</a>
                    <a href="#" class="tag-cloud-link">leaves</a>
                    <a href="#" class="tag-cloud-link">food</a>
                </ul>
            </div>

            <div
                class="sidebar-box subs-wrap img py-4"
                style="background-image: url(images/bg_1.jpg)">
                <div class="overlay"></div>
                <h3 class="mb-4 sidebar-heading">Newsletter</h3>
                <p class="mb-4">
                    Far far away, behind the word mountains, far from the countries
                    Vokalia
                </p>
                <form action="#" class="subscribe-form">
                    <div class="form-group">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Email Address" />
                        <input
                            type="submit"
                            value="Subscribe"
                            class="mt-2 btn btn-white submit" />
                    </div>
                </form>
            </div>

            <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
                <h3 class="sidebar-heading">Archives</h3>
                <ul class="categories">
                    <li>
                        <a href="#">Decob14 2018 <span>(10)</span></a>
                    </li>
                    <li>
                        <a href="#">September 2018 <span>(6)</span></a>
                    </li>
                    <li>
                        <a href="#">August 2018 <span>(8)</span></a>
                    </li>
                    <li>
                        <a href="#">July 2018 <span>(2)</span></a>
                    </li>
                    <li>
                        <a href="#">June 2018 <span>(7)</span></a>
                    </li>
                    <li>
                        <a href="#">May 2018 <span>(5)</span></a>
                    </li>
                </ul>
            </div>

            <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
                <h3 class="sidebar-heading">Paragraph</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus
                    itaque, autem necessitatibus voluptate quod mollitia delectus aut.
                </p>
            </div>
        </div>
        <!-- END COL -->
    </div>
</div>
<!-- Content End -->

@endsection
