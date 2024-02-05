@extends('layouts.base')
@section('content')
<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Blog Details</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.htm">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Details Blog Section Start -->
<section class="masonary-blog-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-9 col-md-8 order-md-1 ratio_square">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="blog-details">
                            <div class="blog-image-box">
                                <img src="../assets/images/inner-page/product/10.jpg" alt="" class="card-img-top">
                                <div class="blog-title">
                                    <div>
                                        <div class="social-media media-center">
                                            <a href="https://www.facebook.com/" target="new">
                                                <div class="social-icon-box social-color">
                                                    <i class="fab fa-facebook-f"></i>
                                                </div>
                                            </a>
                                            <a href="https://twitter.com/" target="new">
                                                <div class="social-icon-box social-color">
                                                    <i class="fab fa-twitter"></i>
                                                </div>
                                            </a>
                                            <a href="https://in.pinterest.com/" target="new">
                                                <div class="social-icon-box social-color">
                                                    <i class="fab fa-pinterest-p"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-detail-contain">
                                <span class="font-light">August 15 2023</span>
                                <h2 class="card-title">Just a Standard Format Post.</h2>
                                <p class="font-light firt-latter">Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                    text ever since the 1500s, Lorem Ipsum has been the industry's standard dummy
                                    text ever since the 1500s.looked up one of the more obscure Latin words,
                                    consectetur, from a Lorem Ipsum passage.</p>

                                <p class="font-light">Contrary to popular belief, Lorem Ipsum is not simply random
                                    text. It has roots in a piece of classical Latin literature from 45 BC, making
                                    it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
                                    College in Virginia, looked up one of the more obscure Latin words, consectetur,
                                    from a Lorem Ipsum passage, and going through the cites of the word in classical
                                    literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                                    1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                                    Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of
                                    ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                                    "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The
                                    standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                                    those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
                                    Malorum" by Cicero are also reproduced in their exact original form, accompanied
                                    by English versions from the 1914 translation by H. Rackham.</p>

                                <p class="font-light">It is a long established fact that a reader will be distracted
                                    by the readable content of a page when looking at its layout. The point of using
                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                    opposed to using 'Content here, content here', making it look like readable
                                    English. Many desktop publishing packages and web page editors now use Lorem
                                    Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                                    many web sites still in their infancy. Various versions have evolved over the
                                    years, sometimes by accident, sometimes on purpose injected humour and the
                                    like.</p>
                            </div>
                        </div>

                        <div class="blog-profile box-center mb-lg-5 mb-4">
                            <div class="image-profile">
                                <img src="../assets/images/inner-page/review-image/2.jpg"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>

                            <div class="image-name text-weight">
                                <h3>John wike</h3>
                                <h6>15 Aug 2023</h6>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-12">
                                <div class="minus-spacing mb-2">
                                    <h3>Leave Comments</h3>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="Enter First Name"
                                    required="">
                            </div>
                            <div class="col-lg-4">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lname" placeholder="Enter Last Name"
                                    required="">
                            </div>

                            <div class="col-lg-4">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="example@example.com" required="">
                            </div>

                            <div class="col-12">
                                <label for="textarea" class="form-label">Comments</label>
                                <textarea rows="3" class="form-control" id="textarea"
                                    placeholder="Leave a comment here" required=""></textarea>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-solid-default btn-spacing mt-2">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="left-side">
                    <!-- Search Bar Start -->
                    <div class="search-section">
                        <div class="input-group search-bar">
                            <input type="search" class="form-control search-input" placeholder="Search">
                            <button class="input-group-text search-button" id="basic-addon3">
                                <i class="fas fa-search text-color"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Search Bar End -->

                    <!-- Popular Post Start -->
                    <div class="popular-post mt-4">
                        <div class="popular-title">
                            <h3>Popular Posts</h3>
                        </div>

                        <div class="popular-image">
                            <div class="popular-number">
                                <h4 class="theme-color">01</h4>
                            </div>
                            <div class="popular-contain">
                                <h3>Lorem Ipsum is simply dummy text of the printing.</h3>
                                <p class="font-light mb-1"><span>King Monster</span> in <span>News</span></p>
                                <div class="review-box">
                                    <span class="font-light clock-time"><i data-feather="clock"></i>15m
                                        ago</span>
                                    <span class="font-light eye-icon"><i data-feather="eye"></i>8641</span>
                                </div>
                            </div>
                        </div>

                        <div class="popular-image">
                            <div class="popular-number">
                                <h4 class="theme-color">02</h4>
                            </div>
                            <div class="popular-contain">
                                <h3>Lorem Ipsum is simply dummy text of the printing.</h3>
                                <p class="font-light mb-1"><span>King Monster</span> in <span>News</span></p>
                                <div class="review-box">
                                    <span class="font-light clock-time"><i data-feather="clock"></i>15m
                                        ago</span>
                                    <span class="font-light eye-icon"><i data-feather="eye"></i>8641</span>
                                </div>
                            </div>
                        </div>

                        <div class="popular-image">
                            <div class="popular-number">
                                <h4 class="theme-color">03</h4>
                            </div>
                            <div class="popular-contain">
                                <h3>Lorem Ipsum is simply dummy text of the printing.</h3>
                                <p class="font-light mb-1"><span>King Monster</span> in <span>News</span></p>
                                <div class="review-box">
                                    <span class="font-light clock-time"><i data-feather="clock"></i>15m
                                        ago</span>
                                    <span class="font-light eye-icon"><i data-feather="eye"></i>8641</span>
                                </div>
                            </div>
                        </div>

                        <div class="popular-image">
                            <div class="popular-number">
                                <h4 class="theme-color">04</h4>
                            </div>
                            <div class="popular-contain">
                                <h3>Lorem Ipsum is simply dummy text of the printing.</h3>
                                <p class="font-light mb-1"><span>King Monster</span> in <span>News</span></p>
                                <div class="review-box">
                                    <span class="font-light clock-time"><i data-feather="clock"></i>15m
                                        ago</span>
                                    <span class="font-light eye-icon"><i data-feather="eye"></i>8641</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Popular Post End -->

                    <!-- Category section Start -->
                    <div class="category-section popular-post mt-4">
                        <div class="popular-title">
                            <h3>Category</h3>
                        </div>
                        <ul>
                            <li class="category-box">
                                <a href="">
                                    <div class="category-product">
                                        <div class="cate-shape">
                                            <i class="fas fa-globe text-color"></i>
                                        </div>

                                        <div class="cate-contain">
                                            <h5 class="text-color">Global</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="category-box">
                                <a href="">
                                    <div class="category-product">
                                        <div class="cate-shape">
                                            <i class="fas fa-building text-color"></i>
                                        </div>

                                        <div class="cate-contain">
                                            <h5 class="text-color">Business</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="category-box">
                                <a href="">
                                    <div class="category-product">
                                        <div class="cate-shape">
                                            <i class="fas fa-play text-color"></i>
                                        </div>

                                        <div class="cate-contain">
                                            <h5 class="text-color">Entertainmant</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="category-box">
                                <a href="">
                                    <div class="category-product">
                                        <div class="cate-shape">
                                            <i class="fas fa-tshirt text-color"></i>
                                        </div>

                                        <div class="cate-contain">
                                            <h5 class="text-color">Sports</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="category-box">
                                <a href="">
                                    <div class="category-product">
                                        <div class="cate-shape">
                                            <i class="fas fa-dumbbell text-color"></i>
                                        </div>

                                        <div class="cate-contain">
                                            <h5 class="text-color">Health</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Category section End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Details Blog Section End -->

<!-- related blog start -->
<section class="section-b-space block-shadow-space ratio3_2">
    <div class="container">
        <div class="slide-4 product-wrapper slick-lg-space">
            <div>
                <div class="card blog-categority">
                    <a href="blog-details.html" class="blog-img">
                        <img src="../assets/images/inner-page/product/19.jpg" alt=""
                            class="card-img-top blur-up lazyload bg-img">
                    </a>
                    <div class="card-body">
                        <a href="blog-details.html">
                            <h2 class="card-title">How to make the perfect morning coffee, according to the
                                science
                            </h2>
                        </a>
                        <div class="blog-profile">
                            <div class="image-name">
                                <h3>John wike</h3>
                                <h6>15 Aug 2023</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card blog-categority">
                    <a href="blog-details.html" class="blog-img">
                        <img src="../assets/images/inner-page/product/19.jpg" alt=""
                            class="card-img-top blur-up lazyload bg-img">
                    </a>
                    <div class="card-body">
                        <a href="blog-details.html">
                            <h2 class="card-title">How to make the perfect morning coffee, according to the
                                science
                            </h2>
                        </a>
                        <div class="blog-profile">
                            <div class="image-name">
                                <h3>John wike</h3>
                                <h6>15 Aug 2023</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card blog-categority">
                    <a href="blog-details.html" class="blog-img">
                        <img src="../assets/images/inner-page/product/19.jpg" alt=""
                            class="card-img-top blur-up lazyload bg-img">
                    </a>
                    <div class="card-body">
                        <a href="blog-details.html">
                            <h2 class="card-title">How to make the perfect morning coffee, according to the
                                science
                            </h2>
                        </a>
                        <div class="blog-profile">
                            <div class="image-name">
                                <h3>John wike</h3>
                                <h6>15 Aug 2023</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card blog-categority">
                    <a href="blog-details.html" class="blog-img">
                        <img src="../assets/images/inner-page/product/19.jpg" alt=""
                            class="card-img-top blur-up lazyload bg-img">
                    </a>
                    <div class="card-body">
                        <a href="blog-details.html">
                            <h2 class="card-title">How to make the perfect morning coffee, according to the
                                science
                            </h2>
                        </a>
                        <div class="blog-profile">
                            <div class="image-name">
                                <h3>John wike</h3>
                                <h6>15 Aug 2023</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card blog-categority">
                    <a href="blog-details.html" class="blog-img">
                        <img src="../assets/images/inner-page/product/19.jpg" alt=""
                            class="card-img-top blur-up lazyload bg-img">
                    </a>
                    <div class="card-body">
                        <a href="blog-details.html">
                            <h2 class="card-title">How to make the perfect morning coffee, according to the
                                science
                            </h2>
                        </a>
                        <div class="blog-profile">
                            <div class="image-name">
                                <h3>John wike</h3>
                                <h6>15 Aug 2023</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card blog-categority">
                    <a href="blog-details.html" class="blog-img">
                        <img src="../assets/images/inner-page/product/19.jpg" alt=""
                            class="card-img-top blur-up lazyload bg-img">
                    </a>
                    <div class="card-body">
                        <a href="blog-details.html">
                            <h2 class="card-title">How to make the perfect morning coffee, according to the
                                science
                            </h2>
                        </a>
                        <div class="blog-profile">
                            <div class="image-name">
                                <h3>John wike</h3>
                                <h6>15 Aug 2023</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card blog-categority">
                    <a href="blog-details.html" class="blog-img">
                        <img src="../assets/images/inner-page/product/19.jpg" alt=""
                            class="card-img-top blur-up lazyload bg-img">
                    </a>
                    <div class="card-body">
                        <a href="blog-details.html">
                            <h2 class="card-title">How to make the perfect morning coffee, according to the
                                science
                            </h2>
                        </a>
                        <div class="blog-profile">
                            <div class="image-name">
                                <h3>John wike</h3>
                                <h6>15 Aug 2023</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card blog-categority">
                    <a href="blog-details.html" class="blog-img">
                        <img src="../assets/images/inner-page/product/19.jpg" alt=""
                            class="card-img-top blur-up lazyload bg-img">
                    </a>
                    <div class="card-body">
                        <a href="blog-details.html">
                            <h2 class="card-title">How to make the perfect morning coffee, according to the
                                science
                            </h2>
                        </a>
                        <div class="blog-profile">
                            <div class="image-name">
                                <h3>John wike</h3>
                                <h6>15 Aug 2023</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection