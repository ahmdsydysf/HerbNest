@extends('webLayout.app')
@section('page_content')

<!--Page Header Start-->
<section class="page-header"
    style="background-image: url({{ asset('allAssets/web/assets/images/backgrounds/page-header-contact.jpg') }});">
    <div class="container">
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="{{ route('main') }}">Home</a></li>
            <li><span>Blog Post</span></li>
        </ul>
        <h2>Blog Post</h2>
    </div>
</section>

<!--Blog One Start-->
<section class="blog_one blog-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <!--Blog One Single-->
                <div class="blog_one_single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <div class="blog_one_image">
                        <img src="{{ asset('allAssets/web/assets/images/blog/blog--page-img-1.jpg') }}" alt="">
                        <div class="blog_one_date_box">
                            <p>20 <br> Oct</p>
                        </div>
                    </div>
                    <div class="blog-one__content">
                        <ul class="list-unstyled blog-one__meta">
                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> Admin</a></li>
                            <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                        <div class="blog_one_title">
                            <h3><a href="blog-details.html">We are best for any industrial business
                                    solutions</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <!--Blog One Single-->
                <div class="blog_one_single wow fadeInDown" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="blog_one_image">
                        <img src="{{ asset('allAssets/web/assets/images/blog/blog--page-img-2.jpg') }}" alt="">
                        <div class="blog_one_date_box">
                            <p>20 <br> Oct</p>
                        </div>
                    </div>
                    <div class="blog-one__content">
                        <ul class="list-unstyled blog-one__meta">
                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> Admin</a></li>
                            <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                        <div class="blog_one_title">
                            <h3><a href="blog-details.html">Organically grow the holistic world view of
                                    disruptive</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <!--Blog One Single-->
                <div class="blog_one_single wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="blog_one_image">
                        <img src="{{ asset('allAssets/web/assets/images/blog/blog--page-img-3.jpg') }}" alt="">
                        <div class="blog_one_date_box">
                            <p>20 <br> Oct</p>
                        </div>
                    </div>
                    <div class="blog-one__content">
                        <ul class="list-unstyled blog-one__meta">
                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> Admin</a></li>
                            <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                        <div class="blog_one_title">
                            <h3><a href="blog-details.html">Bring to the table win-win survival strategies
                                    to</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <!--Blog One Single-->
                <div class="blog_one_single wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <div class="blog_one_image">
                        <img src="{{ asset('allAssets/web/assets/images/blog/blog--page-img-4.jpg') }}" alt="">
                        <div class="blog_one_date_box">
                            <p>20 <br> Oct</p>
                        </div>
                    </div>
                    <div class="blog-one__content">
                        <ul class="list-unstyled blog-one__meta">
                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> Admin</a></li>
                            <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                        <div class="blog_one_title">
                            <h3><a href="blog-details.html">Leverage agile frameworks to provide a robust</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <!--Blog One Single-->
                <div class="blog_one_single wow fadeInDown" data-wow-duration="1500ms" data-wow-delay="400ms">
                    <div class="blog_one_image">
                        <img src="{{ asset('allAssets/web/assets/images/blog/blog--page-img-5.jpg') }}" alt="">
                        <div class="blog_one_date_box">
                            <p>20 <br> Oct</p>
                        </div>
                    </div>
                    <div class="blog-one__content">
                        <ul class="list-unstyled blog-one__meta">
                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> Admin</a></li>
                            <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                        <div class="blog_one_title">
                            <h3><a href="blog-details.html">At the end of the day, going forward, a new
                                    normal</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <!--Blog One Single-->
                <div class="blog_one_single wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="500ms">
                    <div class="blog_one_image">
                        <img src="{{ asset('allAssets/web/assets/images/blog/blog--page-img-6.jpg') }}" alt="">
                        <div class="blog_one_date_box">
                            <p>20 <br> Oct</p>
                        </div>
                    </div>
                    <div class="blog-one__content">
                        <ul class="list-unstyled blog-one__meta">
                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> Admin</a></li>
                            <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                        <div class="blog_one_title">
                            <h3><a href="blog-details.html">Capitalize on low hanging fruit to identify a
                                    ballpark</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center blog-page__load-more">
            <a href="blog.html" class="thm-btn">Load More</a><!-- /.thm-btn -->
        </div><!-- /.text-center -->
    </div>
</section>


@endsection