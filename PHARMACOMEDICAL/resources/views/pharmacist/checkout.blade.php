@extends('layouts.appPharmacist')
@section('contentPharmacist')
@push('css')
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/choosen.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/color-03.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/flexslider.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/owlcarousel.min.css') }}" />
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
    <title>Task1</title>
</head>
<body>
<main id="main" class="main-site">

<div class="container">

    <div class=" main-content-area">
        <div class="wrap-address-billing">
            <h3 class="box-title">Billing Address</h3>
            <form action="#" method="get" name="frm-billing">
                <p class="row-in-form">
                    <label for="fname">first name<span>*</span></label>
                    <input id="fname" type="text" name="fname" value="" placeholder="Your name">
                </p>
                <p class="row-in-form">
                    <label for="lname">last name<span>*</span></label>
                    <input id="lname" type="text" name="lname" value="" placeholder="Your last name">
                </p>
                <p class="row-in-form">
                    <label for="email">Email Addreess:</label>
                    <input id="email" type="email" name="email" value="" placeholder="Type your email">
                </p>
                <p class="row-in-form">
                    <label for="phone">Phone number<span>*</span></label>
                    <input id="phone" type="number" name="phone" value="" placeholder="10 digits format">
                </p>
                <p class="row-in-form">
                    <label for="add">Address:</label>
                    <input id="add" type="text" name="add" value="" placeholder="Street at apartment number">
                </p>
                <p class="row-in-form">
                    <label for="country">Country<span>*</span></label>
                    <input id="country" type="text" name="country" value="" placeholder="United States">
                </p>
                <p class="row-in-form">
                    <label for="zip-code">Postcode / ZIP:</label>
                    <input id="zip-code" type="number" name="zip-code" value="" placeholder="Your postal code">
                </p>
                <p class="row-in-form">
                    <label for="city">Town / City<span>*</span></label>
                    <input id="city" type="text" name="city" value="" placeholder="City name">
                </p>
                <p class="row-in-form fill-wife">
                    <label class="checkbox-field">
                        <input name="create-account" id="create-account" value="forever" type="checkbox">
                        <span>Create an account?</span>
                    </label>
                    <label class="checkbox-field">
                        <input name="different-add" id="different-add" value="forever" type="checkbox">
                        <span>Ship to a different address?</span>
                    </label>
                </p>
            </form>
        </div>
        <div class="summary summary-checkout">
            <div class="summary-item payment-method">
                <h4 class="title-box">Payment Method</h4>
                <p class="summary-info"><span class="title">Check / Money order</span></p>
                <p class="summary-info"><span class="title">Credit Card (saved)</span></p>
                <div class="choose-payment-methods">
                    <label class="payment-method">
                        <input name="payment-method" id="payment-method-bank" value="bank" type="radio">
                        <span>Direct Bank Transder</span>
                        <span class="payment-desc">But the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</span>
                    </label>
                    <label class="payment-method">
                        <input name="payment-method" id="payment-method-visa" value="visa" type="radio">
                        <span>visa</span>
                        <span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
                    </label>
                    <label class="payment-method">
                        <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
                        <span>Paypal</span>
                        <span class="payment-desc">You can pay with your credit</span>
                        <span class="payment-desc">card if you don't have a paypal account</span>
                    </label>
                </div>
                <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">$100.00</span></p>
                <a href="thankyou.html" class="btn btn-medium">Place order now</a>
            </div>
            <div class="summary-item shipping-method">
                <h4 class="title-box f-title">Shipping method</h4>
                <p class="summary-info"><span class="title">Flat Rate</span></p>
                <p class="summary-info"><span class="title">Fixed $50.00</span></p>
                <h4 class="title-box">Discount Codes</h4>
                <p class="row-in-form">
                    <label for="coupon-code">Enter Your Coupon code:</label>
                    <input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">	
                </p>
                <a href="#" class="btn btn-small">Apply</a>
            </div>
        </div>

        <div class="wrap-show-advance-info-box style-1 box-in-site">
            <h3 class="title-box">Most Viewed Products</h3>
            <div class="wrap-products">
                <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                        <a href="#" title="Rostil SR">
										<figure><img src="{{ URL::asset('./images/products/rostil.PNG') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
                            <div class="group-flash">
                                <span class="flash-item new-label">new</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                        <a href="#" class="product-name"><span>Rostil SR tablet</span></a>
									<div class="wrap-price"><span class="product-price">$100.00</span></div>
                        </div>
                    </div>
                   

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                        <a href="#" title="provair">
										<figure><img src="{{ URL::asset('./images/products/provair.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
									<a href="#" class="product-name"><span>Provair 10 [10mg - 1pPcs]</span></a>
									<div class="wrap-price"><span class="product-price">$180.00</span></div>
								</div>
                    </div>
                   

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                        <a href="#" title="Losectil">
										<figure><img src="{{ URL::asset('./images/products/losectil.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
                            <div class="group-flash">
                                <span class="flash-item new-label">new</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
									<a href="#" class="product-name"><span>Losectil Capsule [40mg - 10Pcs]</span></a>
									<div class="wrap-price"><span class="product-price">$20.00</span></div>
								</div>
                    </div>
                    

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                        <a href="#" title="napa">
										<figure><img src="{{ URL::asset('./images/products/napa.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
                            <div class="group-flash">
                                <span class="flash-item bestseller-label">Bestseller</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
									<a href="#" class="product-name"><span>Napa Tablet [500mg - 10Pcs]</span></a>
									<div class="wrap-price"><span class="product-price">$250.00</span></div>
								</div>
                    </div>
                </div>
            </div><!--End wrap-products-->
        </div>

    </div><!--end main content area-->
</div><!--end container-->

</main>
@endsection
	</body>
</html>