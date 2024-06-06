<!DOCTYPE html>
<html lang="en">

<head>

    @include('frontend.layouts.head')

</head>

<body id="blog-list-sidebar-left" class="blog">

    @include('frontend.layouts.header')


    <!-- main content -->
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper">
                <div id="main">
                    <div class="page-home">

                        <!-- breadcrumb -->
                        <nav class="breadcrumb-bg">
                            <div class="container no-index">
                                <div class="breadcrumb">
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <span>Home</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Living Room</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Sofa</span>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </nav>
                        <div class="container">
                            <div class="content">
                                <div class="row">
                                    <div class="sidebar-3 sidebar-collection col-lg-3 col-md-3 col-sm-4">

                                        <!-- category -->
                                        <div class="sidebar-block">
                                            <div class="title-block">Categories</div>
                                            <div class="block-content">
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapse-icons collapsed" data-toggle="collapse" data-target="#livingroom" aria-expanded="false" role="status">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">Living Room</a>
                                                    <div class="subCategory collapse" id="livingroom" aria-expanded="true" role="status">
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">Side Table</a>
                                                            <div class="subCategory collapse" id="subCategory-fruits" aria-expanded="true" role="status">
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">Side Table</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">FIREPLACE</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">FIREPLACE</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">floor lamp</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">ottoman</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">armchair</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">cushion</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">FIREPLACE</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">FIREPLACE</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">floor lamp</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">ottoman</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">armchair</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">cushion</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#bathroom" aria-expanded="false" role="status">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">Bathroom</a>
                                                    <div class="subCategory collapse" id="bathroom" aria-expanded="false" role="status">
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">TOMATO</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">BROCCOLI</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">CABBAGE</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">CUCUMBER</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">EGGPLANT</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#diningroom" aria-expanded="false" role="status">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">Dining Rooom</a>
                                                    <div class="subCategory collapse" id="diningroom" aria-expanded="true" role="status">
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">DRY BREAD</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">BREAD SLICES</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">FRENCH BREAD</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">BLACK BREAD</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#bedroom" aria-expanded="false" role="status">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">BedRoom</a>
                                                    <div class="subCategory collapse" id="bedroom" aria-expanded="true" role="status">
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">ORANGE JUICES</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">TOMATO JUICES</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">APPLE JUICES</a>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#kitchen" aria-expanded="false" role="status">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">Kitchen</a>
                                                    <div class="subCategory collapse" id="kitchen" aria-expanded="true" role="status">
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">ORANGE JUICES</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">TOMATO JUICES</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">APPLE JUICES</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- recent posts -->
                                        <div class="sidebar-block">
                                            <div class="title-block">Recent Posts</div>
                                            <div class="post-item-content">
                                                <div>
                                                    <div class="late-item first-child">
                                                        <a href="blog-detail.html">
                                                            <p class="content-title">Lorem ipsum dolor sit amet</p>
                                                        </a>
                                                        <span>
                                                            <i class="zmdi zmdi-comments"></i>13 comment
                                                        </span>
                                                        <span>
                                                            <i class="zmdi zmdi-calendar-note"></i>20 APRIl 2017
                                                        </span>
                                                        <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                            nonummy...
                                                        </p>
                                                        <p class="remove">
                                                            <a href="blog-detail.html">READ MORE</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="late-item">
                                                        <a href="blog-detail.html">
                                                            <p class="content-title">Lorem ipsum dolor sit amet</p>
                                                        </a>
                                                        <span>
                                                            <i class="zmdi zmdi-comments"></i>13 comment
                                                        </span>
                                                        <span>
                                                            <i class="zmdi zmdi-calendar-note"></i>20 APRIl 2017
                                                        </span>
                                                        <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                            nonummy...
                                                        </p>
                                                        <p class="remove">
                                                            <a href="blog-detail.html">READ MORE</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- product tag -->
                                        <div class="sidebar-block product-tags">
                                            <div class="title-block">
                                                Blog Tags
                                            </div>
                                            <div class="block-content">
                                                <ul class="listSidebarBlog list-unstyled">
                                                    <li>
                                                        <a href="#" title="Show products matching tag Hot Trend">Hot Trend</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Jewelry">Jewelry</a>
                                                    </li>

                                                    <li>
                                                        <a href="man.html" title="Show products matching tag Man">Man</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Party">Party</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag SamSung">SamSung</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Shirt Dresses">Shirt Dresses</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Shoes">Shoes</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Summer">Summer</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Sweaters">Sweaters</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Winter">Winter</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Woman">Woman</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- advertising -->
                                        <div class="sidebar-block group-image-special">
                                            <div class="effect">
                                                <a href="#">
                                                    <img class="img-fluid" src="img/blog/advertising.jpg" alt="banner-2" title="banner-2">
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-8 col-lg-9 col-md-9 flex-xs-first main-blogs">
                                        <h2>Recent Posts</h2>
                                        <div class="list-content row">
                                            <div class="hover-after col-md-5 col-xs-12">
                                                <a href="blog-detail.html">
                                                    <img src="img/blog/4.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="late-item col-md-7 col-xs-12">
                                                <p class="content-title">
                                                    <a href="blog-detail.html">Lorem ipsum dolor sit amet</a>
                                                </p>
                                                <p class="post-info">
                                                    <span>3 minitunes ago</span>
                                                    <span>113 Comments</span>
                                                    <span>TIVATHEME</span>
                                                </p>
                                                <p class="description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis
                                                    bibendum auctor, nisi elit consequat ipsum, elit. Duis sed odio sit amet
                                                    nibh vultate cursus a sit amet mauris. Proin gravida...
                                                </p>
                                                <span class="view-more">
                                                    <a href="blog-detail.html">view more</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="list-content row">
                                            <div class="hover-after col-md-5 col-xs-12">
                                                <a href="blog-detail.html">
                                                    <img src="img/blog/5.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="late-item col-md-7 col-xs-12">
                                                <p class="content-title">
                                                    <a href="blog-detail.html">Lorem ipsum dolor sit amet</a>
                                                </p>
                                                <p class="post-info">
                                                    <span>3 minitunes ago</span>
                                                    <span>113 Comments</span>
                                                    <span>TIVATHEME</span>
                                                </p>
                                                <p class="description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis
                                                    bibendum auctor, nisi elit consequat ipsum, elit. Duis sed odio sit amet
                                                    nibh vultate cursus a sit amet mauris. Proin gravida...
                                                </p>
                                                <span class="view-more">
                                                    <a href="blog-detail.html">view more</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="list-content row">
                                            <div class="hover-after col-md-5 col-xs-12">
                                                <a href="blog-detail.html">
                                                    <img src="img/blog/6.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="late-item  col-md-7 col-xs-12">
                                                <p class="content-title">
                                                    <a href="blog-detail.html">Lorem ipsum dolor sit amet</a>
                                                </p>
                                                <p class="post-info">
                                                    <span>3 minitunes ago</span>
                                                    <span>113 Comments</span>
                                                    <span>TIVATHEME</span>
                                                </p>
                                                <p class="description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis
                                                    bibendum auctor, nisi elit consequat ipsum, elit. Duis sed odio sit amet
                                                    nibh vultate cursus a sit amet mauris. Proin gravida...
                                                </p>
                                                <span class="view-more">
                                                    <a href="blog-detail.html">view more</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="list-content row">
                                            <div class="hover-after col-md-5 col-xs-12">
                                                <a href="blog-detail.html">
                                                    <img src="img/blog/7.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="late-item col-md-7 col-xs-12">
                                                <p class="content-title">
                                                    <a href="blog-detail.html">Lorem ipsum dolor sit amet</a>
                                                </p>
                                                <p class="post-info">
                                                    <span>3 minitunes ago</span>
                                                    <span>113 Comments</span>
                                                    <span>TIVATHEME</span>
                                                </p>
                                                <p class="description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis
                                                    bibendum auctor, nisi elit consequat ipsum, elit. Duis sed odio sit amet
                                                    nibh vultate cursus a sit amet mauris. Proin gravida...
                                                </p>
                                                <span class="view-more">
                                                    <a href="blog-detail.html">view more</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="list-content row">
                                            <div class="hover-after col-md-5 col-xs-12">
                                                <a href="blog-detail.html">
                                                    <img src="img/blog/8.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="late-item col-md-7 col-xs-12">
                                                <p class="content-title">
                                                    <a href="blog-detail.html">Lorem ipsum dolor sit amet</a>
                                                </p>
                                                <p class="post-info">
                                                    <span>3 minitunes ago</span>
                                                    <span>113 Comments</span>
                                                    <span>TIVATHEME</span>
                                                </p>
                                                <p class="description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis
                                                    bibendum auctor, nisi elit consequat ipsum, elit. Duis sed odio sit amet
                                                    nibh vultate cursus a sit amet mauris. Proin gravida...
                                                </p>
                                                <span class="view-more">
                                                    <a href="blog-detail.html">view more</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="list-content row">
                                            <div class="hover-after col-md-5 col-xs-12">
                                                <a href="blog-detail.html">
                                                    <img src="img/blog/9.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="late-item  col-md-7 col-xs-12">
                                                <p class="content-title">
                                                    <a href="blog-detail.html">Lorem ipsum dolor sit amet</a>
                                                </p>
                                                <p class="post-info">
                                                    <span>3 minitunes ago</span>
                                                    <span>113 Comments</span>
                                                    <span>TIVATHEME</span>
                                                </p>
                                                <p class="description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis
                                                    bibendum auctor, nisi elit consequat ipsum, elit. Duis sed odio sit amet
                                                    nibh vultate cursus a sit amet mauris. Proin gravida...
                                                </p>
                                                <span class="view-more">
                                                    <a href="blog-detail.html">view more</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="page-list col">
                                            <ul class="justify-content-center d-flex">
                                                <li>
                                                    <a rel="prev" href="#" class="previous disabled js-search-link">
                                                        Previous
                                                    </a>
                                                </li>
                                                <li class="current active">
                                                    <a rel="nofollow" href="#" class="disabled js-search-link">
                                                        1
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="nofollow" href="#" class="disabled js-search-link">
                                                        2
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="next" href="#" class="next disabled js-search-link">
                                                        Next
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main content -->

    @include('frontend.layouts.footer')
</body>

</html>