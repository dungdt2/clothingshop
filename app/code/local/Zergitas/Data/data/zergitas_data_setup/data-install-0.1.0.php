<?php
/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 10/5/2018
 * Time: 5:34 PM
 */ 
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();
$store = Mage::app()->getStore('default');
//create Slider block
$content = '<section class="welcome_area">
            <div class="welcome_slides owl-carousel">
                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url('.Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN).'frontend/rwd/theme692/img/bg-img/bg-1.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Fashion Trends</h2>
                                    <a href="#" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url('.Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN).'frontend/rwd/theme692/img/bg-img/bg-4.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Summer Collection</h2>
                                    <a href="#" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Check Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url('.Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN).'frontend/rwd/theme692/img/bg-img/bg-2.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                                    <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">Women Fashion</h2>
                                    <a href="#" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s" data-duration="500ms">Check Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="top_catagory_area d-md-flex clearfix">
            <!-- Single Catagory -->
            <div class="single_catagory_area d-flex align-items-center bg-img"  style="background-image: url('.Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN).'frontend/rwd/theme692/img/bg-img/bg-2.jpg);">
                <div class="catagory-content">
                    <h6>On Accesories</h6>
                    <h2>Sale 30%</h2>
                    <a href="#" class="btn karl-btn">SHOP NOW</a>
                </div>
            </div>
            <!-- Single Catagory -->
            <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url('.Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN).'frontend/rwd/theme692/img/bg-img/bg-3.jpg);">
                <div class="catagory-content">
                    <h6>in Bags excepting the new collection</h6>
                    <h2>Designer bags</h2>
                    <a href="#" class="btn karl-btn">SHOP NOW</a>
                </div>
            </div>
        </section>';
    $data = array(
        'title' => 'Slider 1',
        'identifier' => 'slider_1',
        'stores' => array(0), // Array with store ID's
        'content' => $content,
        'is_active' => 1
    );

// Check if static block already exists, if yes then update content
$block = Mage::getModel('cms/block')->load($data['identifier']);
if ($block->isObjectNew()) {
    //Create static block
    Mage::getModel('cms/block')->setData($data)->save();
}else{
    //Update Content
    $block->setData('content', $data['content'])->save();
}

// create footer list block
$content = '
<div class="col-12 col-md-6 col-lg-3">
<div class="single_footer_area">
<div class="footer-logo"><img alt="" src="'.Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN).'frontend/rwd/theme692/img/core-img/logo.png)" /></div>
<div class="copywrite_text d-flex align-items-center"></div>
</div>
</div>
<div class="col-12 col-sm-6 col-md-3 col-lg-2">
<div class="single_footer_area">
<ul class="footer_widget_menu">
<li><a href="/about">About</a></li>
<li><a href="/blog">Blog</a></li>
<li><a href="/faq">Faq</a></li>
<li><a href="/returns">Returns</a></li>
<li><a href="/contact">Contact</a></li>
</ul>
</div>
</div>
<div class="col-12 col-sm-6 col-md-3 col-lg-2">
<div class="single_footer_area">
<ul class="footer_widget_menu">
<li><a href="#">My Account</a></li>
<li><a href="#">Shipping</a></li>
<li><a href="#">Our Policies</a></li>
<li><a href="#">Afiliates</a></li>
</ul>
</div>
</div>';
$data = array(
    'title' => 'Footer List',
    'identifier' => 'footer_list',
    'stores' => array(0), // Array with store ID's
    'content' => $content,
    'is_active' => 1
);

// Check if static block already exists, if yes then update content
$block = Mage::getModel('cms/block')->load($data['identifier']);
if ($block->isObjectNew()) {
    //Create static block
    Mage::getModel('cms/block')->setData($data)->save();
}else{
    //Update Content
    $block->setData('content', $data['content'])->save();
}

// create discount area block
$content = '
<div class="single-discount-area">
<h5>Free Shipping &amp; Returns</h5>
<h6><a href="#">BUY NOW</a></h6>
</div>
<div class="single-discount-area">
<h5>20% Discount for all dresses</h5>
<h6>USE CODE: Colorlib</h6>
</div>
<div class="single-discount-area">
<h5>20% Discount for students</h5>
<h6>USE CODE: Colorlib</h6>
</div>';
$data = array(
    'title' => 'Discount Area',
    'identifier' => 'discount_area',
    'stores' => array(0), // Array with store ID's
    'content' => $content,
    'is_active' => 1
);

// Check if static block already exists, if yes then update content
$block = Mage::getModel('cms/block')->load($data['identifier']);
if ($block->isObjectNew()) {
    //Create static block
    Mage::getModel('cms/block')->setData($data)->save();
}else{
    //Update Content
    $block->setData('content', $data['content'])->save();
}


// create offer area block
$content = '<section class="offer_area height-700 section_padding_100 bg-img"  style="background-image: url('.Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN).'frontend/rwd/theme692/img/bg-img/bg-5.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end justify-content-end">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                            <h2>White t-shirt <span class="karl-level">Hot</span></h2>
                            <p>* Free shipping until 25 Dec 2017</p>
                            <div class="offer-product-price">
                                <h3><span class="regular-price">$25.90</span> $15.90</h3>
                            </div>
                            <a href="#" class="btn karl-btn mt-30">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>';
$data = array(
    'title' => 'Offer Area',
    'identifier' => 'offer_area',
    'stores' => array(0), // Array with store ID's
    'content' => $content,
    'is_active' => 1
);

// Check if static block already exists, if yes then update content
$block = Mage::getModel('cms/block')->load($data['identifier']);
if ($block->isObjectNew()) {
    //Create static block
    Mage::getModel('cms/block')->setData($data)->save();
}else{
    //Update Content
    $block->setData('content', $data['content'])->save();
}

// create popular brand block
$content = '<!-- ****** Popular Brands Area Start ****** -->
<section class="karl-testimonials-area section_padding_100">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section_heading text-center">
<h2>Testimonials</h2>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-12 col-md-8">
<div class="karl-testimonials-slides owl-carousel"><!-- Single Testimonial Area -->
<div class="single-testimonial-area text-center"><span class="quote">"</span>
<h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis.</h6>
<div class="testimonial-info d-flex align-items-center justify-content-center">
<div class="tes-thumbnail"><img alt="" src="'.Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN).'frontend/rwd/theme692/img/bg-img/tes-1.jpg" /></div>
<div class="testi-data">
<p>Michelle Williams</p>
<span>Client, Los Angeles</span></div>
</div>
</div>
<!-- Single Testimonial Area -->
<div class="single-testimonial-area text-center"><span class="quote">"</span>
<h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis.</h6>
<div class="testimonial-info d-flex align-items-center justify-content-center">
<div class="tes-thumbnail"><img alt="" src="'.Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN).'frontend/rwd/theme692/img/bg-img/tes-1.jpg" /></div>
<div class="testi-data">
<p>Michelle Williams</p>
<span>Client, Los Angeles</span></div>
</div>
</div>
<!-- Single Testimonial Area -->
<div class="single-testimonial-area text-center"><span class="quote">"</span>
<h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis.</h6>
<div class="testimonial-info d-flex align-items-center justify-content-center">
<div class="tes-thumbnail"><img alt="" src="'.Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN).'frontend/rwd/theme692/img/bg-img/tes-1.jpg" /></div>
<div class="testi-data">
<p>Michelle Williams</p>
<span>Client, Los Angeles</span></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- ****** Popular Brands Area End ****** -->';
$data = array(
    'title' => 'Popular',
    'identifier' => 'popular_brand',
    'stores' => array(0), // Array with store ID's
    'content' => $content,
    'is_active' => 1
);

// Check if static block already exists, if yes then update content
$block = Mage::getModel('cms/block')->load($data['identifier']);
if ($block->isObjectNew()) {
    //Create static block
    Mage::getModel('cms/block')->setData($data)->save();
}else{
    //Update Content
    $block->setData('content', $data['content'])->save();
}

// create social link block
$content = '<div class="footer_bottom_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_social_area text-center">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>';
$data = array(
    'title' => 'Social Links',
    'identifier' => 'social_links',
    'stores' => array(0), // Array with store ID's
    'content' => $content,
    'is_active' => 1
);

// Check if static block already exists, if yes then update content
$block = Mage::getModel('cms/block')->load($data['identifier']);
if ($block->isObjectNew()) {
    //Create static block
    Mage::getModel('cms/block')->setData($data)->save();
}else{
    //Update Content
    $block->setData('content', $data['content'])->save();
}

$installer->endSetup();