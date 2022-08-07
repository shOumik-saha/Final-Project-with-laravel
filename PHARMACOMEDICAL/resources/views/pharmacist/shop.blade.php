@extends('layouts.appPharmacist')
@section('contentPharmacist')
@push('css')
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/choosen.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/color-01.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/flexslider.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/style.css') }}" />
@endpush
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>shop</title>
</head>
<body>
<style>
    
</style>
<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="row">

        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

            <div class="banner-shop">
                <a href="#" class="banner-link">
                <img src="{{ URL::asset('./images/products/napa.jpg') }}" alt="" width="214" height="214" >                </a>
            </div>

            <div class="wrap-shop-control">

                <h1 class="shop-title">Medicines</h1>

                <div class="wrap-right">


                    <div class="change-display-mode">
                        <a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                        <a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
                    </div>

                </div>

            </div><!--end wrap shop control-->

            <div class="row">

                <ul class="product-list grid-products equal-container">

                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="napa">
                                <img src="{{ URL::asset('./images/products/napa.jpg') }}" alt="" width="214" height="214" >                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Napa Tablet [500mg - 10Pcs]</span></a>
                                <div class="wrap-price"><span class="product-price">$15.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="sergel">
                                <img src="{{ URL::asset('./images/products/sergel.PNG') }}" alt="" width="214" height="214" >                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>sergel Tablet [20mg - 10Pcs]</span></a>
                                <div class="wrap-price"><span class="product-price">$20.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                        <div class="product-thumnail">
                                <a href="detail.html" title="rostil">
                                <img src="{{ URL::asset('./images/products/rostil.PNG') }}" alt="" width="214" height="214" >                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Rostil SR tablet</span></a>
                                <div class="wrap-price"><span class="product-price">$100.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="Informet">
                                <img src="{{ URL::asset('./images/products/informet.PNG') }}" alt="" width="214" height="214" >                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Informet 850</span></a>
                                <div class="wrap-price"><span class="product-price">$120.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="Ticamet">
                                <img src="{{ URL::asset('./images/products/ticamet.jpg') }}" alt="" width="214" height="214" >                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Ticamet-250 [inhaler]</span></a>
                                <div class="wrap-price"><span class="product-price">$600.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="Napa">
                                <img src="{{ URL::asset('./images/products/napa.jpg') }}" alt="" width="214" height="214" >                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Napa Tablet [500mg - 10Pcs]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="Losectil">
                                <img src="{{ URL::asset('./images/products/losectil.jpg') }}" alt="" width="214" height="214" >                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Losectil Capsule [40mg - 10Pcs]</span></a>
                                <div class="wrap-price"><span class="product-price">$20.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="Tylenol">
                                <img src="{{ URL::asset('./images/products/tylenol.PNG') }}" alt="" width="214" height="214" >                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Tylenol [500 mg]</span></a>
                                <div class="wrap-price"><span class="product-price">$900.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="provair">
                                <img src="{{ URL::asset('./images/products/provair.jpg') }}" alt="" width="214" height="214" >                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Provair 10 [10mg - 1pPcs]</span></a>
                                <div class="wrap-price"><span class="product-price">$180.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="maxpro">
                                <img src="{{ URL::asset('./images/products/maxpro.jpg') }}" alt="" width="214" height="214" >                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>MaxPro [20mg - 14Pcs]</span></a>
                                <div class="wrap-price"><span class="product-price">$50.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="neogaba">
                                <img src="{{ URL::asset('./images/products/neogaba.png') }}" alt="" width="214" height="214" >                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Neogaba [75mg - 14Pcs]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>

            <div class="wrap-pagination-info">
                <ul class="page-numbers">
                    <li><span class="page-number-item current" >1</span></li>
                    <li><a class="page-number-item" href="#" >2</a></li>
                    <li><a class="page-number-item" href="#" >3</a></li>
                    <li><a class="page-number-item next-link" href="#" >Next</a></li>
                </ul>
                <p class="result-count">Showing 1-8 of 12 result</p>
            </div>
        </div><!--end main products area-->

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
            <div class="widget mercado-widget categories-widget">
                <h2 class="widget-title">All Categories</h2>
                <div class="widget-content">
                    <ul class="list-category">
                        <li class="category-item has-child-cate">
                            <a href="#" class="cate-link">Tablets</a>
                            <span class="toggle-control">+</span>
                            <ul class="sub-cate">
                                <li class="category-item"><a href="#" class="cate-link">Amilin(10mg)</a></li>
                                <li class="category-item"><a href="#" class="cate-link">Napa(50mg)</a></li>
                                <li class="category-item"><a href="#" class="cate-link">provair(10mg)</a></li>
                            </ul>
                        </li>
                        <li class="category-item has-child-cate">
                            <a href="#" class="cate-link">Inhaler</a>
                            <span class="toggle-control">+</span>
                            <ul class="sub-cate">
                                <li class="category-item"><a href="#" class="cate-link">Fluticasone</a></li>
                                <li class="category-item"><a href="#" class="cate-link">Ticamet(850)</a></li>
                                <li class="category-item"><a href="#" class="cate-link">Budesonide</a></li>
                            </ul>
                        </li>
                        <li class="category-item has-child-cate">
                            <a href="#" class="cate-link">Drops</a>
                            <span class="toggle-control">+</span>
                            <ul class="sub-cate">
                                <li class="category-item"><a href="#" class="cate-link">Olopatadine OTC</a></li>
                                <li class="category-item"><a href="#" class="cate-link">Levoster</a></li>
                                <li class="category-item"><a href="#" class="cate-link">Vicks</a></li>
                            </ul>
                        </li>
                        <li class="category-item has-child-cate">
                            <a href="#" class="cate-link">Injections</a>
                            <span class="toggle-control">+</span>
                            <ul class="sub-cate">
                                <li class="category-item"><a href="#" class="cate-link">Alacot</a></li>
                                <li class="category-item"><a href="#" class="cate-link">Claravis</a></li>
                                <li class="category-item"><a href="#" class="cate-link">Clarinex</a></li>
                            </ul>
                        </li>
                        <li class="category-item has-child-cate">
                            <a href="#" class="cate-link">Capsules</a>
                            <span class="toggle-control">+</span>
                            <ul class="sub-cate">
                                <li class="category-item"><a href="#" class="cate-link">Ciprofloxacin</a></li>
                                <li class="category-item"><a href="#" class="cate-link">Ofloxacin</a></li>
                                <li class="category-item"><a href="#" class="cate-link">Ambrox</a></li>
                            </ul>
                        </li>
                        <li class="category-item has-child-cate">
                            <a href="#" class="cate-link">Liquid</a>
                            <span class="toggle-control">+</span>
                            <ul class="sub-cate">
                                <li class="category-item"><a href="#" class="cate-link">Damiana</a></li>
                                <li class="category-item"><a href="#" class="cate-link">Xylomist</a></li>
                                <li class="category-item"><a href="#" class="cate-link">R41</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- Categories widget-->
            <br>
            <div class="widget mercado-widget filter-widget brand-widget">
                <h2 class="widget-title">Brand</h2>
                <div class="widget-content">
                    <ul class="list-style vertical-list list-limited" data-show="6">
                        <li class="list-item"><a class="filter-link active" href="#">Beximco</a></li>
                        <li class="list-item"><a class="filter-link " href="#">Square</a></li>
                        <li class="list-item"><a class="filter-link " href="#">Novartis</a></li>
                        <li class="list-item"><a class="filter-link " href="#">Healthcare</a></li>
                        <li class="list-item"><a class="filter-link " href="#">Incepta</a></li>
                        <li class="list-item"><a class="filter-link " href="#">Sun Pharmaceutical</a></li>
                        <li class="list-item default-hiden"><a class="filter-link " href="#">Printer & Ink</a></li>
                        <li class="list-item default-hiden"><a class="filter-link " href="#">CPUs & Prosecsors</a></li>
                        <li class="list-item default-hiden"><a class="filter-link " href="#">Sound & Speaker</a></li>
                        <li class="list-item default-hiden"><a class="filter-link " href="#">Shop Smartphone & Tablets</a></li>
                        <li class="list-item"><a data-label='Show less<i class="fa fa-angle-up" aria-hidden="true"></i>' class="btn-control control-show-more" href="#">Show more<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div><!-- brand widget-->
            <div class="widget mercado-widget widget-product">
                <h2 class="widget-title">Most Bought Medicines</h2>
                <div class="widget-content">
                    <ul class="products">
                        <li class="product-item">
                            <div class="product product-widget-style">
                            <div class="thumnail">
									<a href="#" title="Rostil SR">
										<img src="{{ URL::asset('./images/products/rostil.PNG') }}" width="170" height="170" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
									</a>
                            </div>
                                <div class="product-info">
									<a href="#" class="product-name"><span>Rostil SR tablet</span></a>
									<div class="wrap-price"><span class="product-price">$100.00</span></div>
								</div>
                            </div>
                        </li>

                        <li class="product-item">
                            <div class="product product-widget-style">
                            <div class="thumnail">
									<a href="#" title="informet">
										<img src="{{ URL::asset('./images/products/informet.PNG') }}" width="170" height="170" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
									</a>
                            </div>
                                <div class="product-info">
									<a href="#" class="product-name"><span>Informet 850</span></a>
									<div class="wrap-price"><p class="product-price">$120.00</p></ins></div>
								</div>
                            </div>
                        </li>

                        <li class="product-item">
                            <div class="product product-widget-style">
                            <div class="thumnail">
									<a href="#" title="ticamet">
										<img src="{{ URL::asset('./images/products/ticamet.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
									</a>
                            </div>
                                <div class="product-info">
									<a href="#" class="product-name"><span>Ticamet-250 [inhaler]</span></a>
									<div class="wrap-price"><ins><p class="product-price">$600.00</p></ins> <del><p class="product-price">$700.00</p></del></div>
								</div>
                            </div>
                        </li>

                        <li class="product-item">
                            <div class="product product-widget-style">
                            <div class="thumnail">
									<a href="#" title="napa">
										<img src="{{ URL::asset('./images/products/napa.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            
									</a>
                            </div>
                                <div class="product-info">
									<a href="#" class="product-name"><span>Napa Tablet [500mg - 10Pcs]</span></a>
									<div class="wrap-price"><span class="product-price">$250.00</span></div>
								</div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div><!-- brand widget-->

        </div><!--end sitebar-->

    </div><!--end row-->

</div><!--end container-->

</main>
@endsection
	</body>
</html>