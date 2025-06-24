@extends('layouts.frontend')
@section('content')
<!-- breadcrumb__start -->
        <div class="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb__title">
                            <h1>Shop</h1>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="color__blue">
                                    Shop
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- breadcrumb__end -->

    <!-- shop__section__start-->
        <div class="shop sp_top_80">
            <div class="container">
                <div class="row grid__responsive">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">


                        <button type="button" class="default__button sidebar-collapse-btn" data-aos="fade-up" data-aos-duration="1800" >
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 32 32" width="24"><g id="Layer_2" data-name="Layer 2"><path d="m28.552 6.184h-2.671a4.556 4.556 0 0 0 -8.659 0h-13.774a1.449 1.449 0 0 0 0 2.9h13.774a4.556 4.556 0 0 0 8.659 0h2.671a1.449 1.449 0 0 0 0-2.9zm-7 3.138a1.69 1.69 0 1 1 1.689-1.69 1.692 1.692 0 0 1 -1.689 1.69z"></path><path d="m28.552 14.552h-13.774a4.556 4.556 0 0 0 -8.659 0h-2.671a1.448 1.448 0 0 0 0 2.9h2.671a4.556 4.556 0 0 0 8.659 0h13.774a1.448 1.448 0 0 0 0-2.9zm-18.1 3.138a1.69 1.69 0 1 1 1.686-1.69 1.692 1.692 0 0 1 -1.69 1.69z"></path><path d="m28.552 22.919h-2.671a4.556 4.556 0 0 0 -8.659 0h-13.774a1.449 1.449 0 0 0 0 2.9h13.774a4.556 4.556 0 0 0 8.659 0h2.671a1.449 1.449 0 0 0 0-2.9zm-7 3.138a1.69 1.69 0 1 1 1.689-1.689 1.692 1.692 0 0 1 -1.689 1.689z"></path></g></svg>
                            FILTER
                        </button>



                        <div class="sidebar sidebar-collapse-hide">
                            <div class="sidebar__widget widget-collapse-show">
                                <div class="sidebar__title">
                                    <h4>Categories</h4>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <div class="sidebar__menu">
                                    <ul>
                                        <li>
                                            <a href="#">Accessories <span>(22)</span></a>
                                        </li>

                                        <li>
                                            <a href="#">Baby <span>(10)</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Baby (T Shirt) <span> (3)</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Best Selling  <span>(68)</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Best-Selling (Jewelry) <span>(7)</span></a> 
                                        </li>
                                        <li>
                                            <a href="#">Bracelets <span>(1)</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Brooches and Pins <span>(2)</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Cap <span>(22)</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Best-Selling (Jewelry) <span>(7)</span></a> 
                                        </li>
                                        <li>
                                            <a href="#">Bracelets <span>(1)</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Brooches and Pins <span>(2)</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Cap <span>(22)</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="sidebar__widget widget-collapse-show">
                                <div class="sidebar__title">
                                    <h4>Availability</h4>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <div class="sidebar__menu">
                                    <ul>
                                        <li>
                                            <div class="sidebar__box">
                                            <input id="in_stock" type="checkbox">
                                            <label for="in_stock">In stock</label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                        
                                        </li>
                                        <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock" type="checkbox">
                                            <label for="out__of__stock">Out of stock</label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar__widget widget-collapse-show">
                                <div class="sidebar__title">
                                    <h4>Color</h4>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <div class="sidebar__menu">
                                    <ul>
                                        <li>
                                            <div class="sidebar__box">
                                            <input id="in_stock1" type="checkbox">
                                            <label for="in_stock1">black</label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                        
                                        </li>
                                        <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock2" type="checkbox">
                                            <label for="out__of__stock2">blue </label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock3" type="checkbox">
                                            <label for="out__of__stock3"> gold</label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock4" type="checkbox">
                                            <label for="out__of__stock4">gray</label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock5" type="checkbox">
                                            <label for="out__of__stock5"> green</label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock6" type="checkbox">
                                            <label for="out__of__stock6"> magenta</label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock7" type="checkbox">
                                            <label for="out__of__stock7"> maroon</label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>

                                    <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock8" type="checkbox">
                                            <label for="out__of__stock8"> navy</label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>

                                    <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock9" type="checkbox">
                                            <label for="out__of__stock9"> orange</label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>


                                    </ul>
                                </div>
                            </div>


                            <div class="sidebar__widget widget-collapse-show">
                                <div class="sidebar__title">
                                    <h4>Size</h4>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <div class="sidebar__menu">
                                    <ul>
                                        <li>
                                            <div class="sidebar__box">
                                            <input id="in_stock10" type="checkbox">
                                            <label for="in_stock10">s</label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                        
                                        </li>
                                        <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock11" type="checkbox">
                                            <label for="out__of__stock11">m </label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock12" type="checkbox">
                                            <label for="out__of__stock12"> l</label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock13" type="checkbox">
                                            <label for="out__of__stock13">xl</label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock14" type="checkbox">
                                            <label for="out__of__stock14"> xxl</label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar__widget widget-collapse-show">
                                <div class="sidebar__title">
                                    <h4>Material</h4>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <div class="sidebar__menu">
                                    <ul>
                                        <li>
                                            <div class="sidebar__box">
                                            <input id="in_stock15" type="checkbox">
                                            <label for="in_stock15">fiber</label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                        
                                        </li>
                                        <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock16" type="checkbox">
                                            <label for="out__of__stock16">
                                            leather </label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock17" type="checkbox">
                                            <label for="out__of__stock17"> metal </label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock19" type="checkbox">
                                            <label for="out__of__stock19">resin </label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock20" type="checkbox">
                                            <label for="out__of__stock20"> slag </label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="sidebar__widget">
                                <div class="sidebar__title">
                                    <h4>Product type</h4>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <div class="sidebar__menu">
                                    <ul>
                                        <li>
                                            <div class="sidebar__box">
                                            <input id="in_stock21" type="checkbox">
                                            <label for="in_stock21">Type A</label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                        
                                        </li>
                                        <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock22" type="checkbox">
                                            <label for="out__of__stock22">
                                            Type B </label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock23" type="checkbox">
                                            <label for="out__of__stock23"> Type C </label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock24" type="checkbox">
                                            <label for="out__of__stock24">Type D </label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock25" type="checkbox">
                                            <label for="out__of__stock25"> Type E </label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar__widget">
                                <div class="sidebar__title">
                                    <h4>Brand</h4>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <div class="sidebar__menu">
                                    <ul>
                                        <li>
                                            <div class="sidebar__box">
                                            <input id="in_stock26" type="checkbox">
                                            <label for="in_stock26">
                                                Minimalin</label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                        
                                        </li>
                                        <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock27" type="checkbox">
                                            <label for="out__of__stock27">
                                            Vendor A </label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock28" type="checkbox">
                                            <label for="out__of__stock28"> Vendor B </label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock29" type="checkbox">
                                            <label for="out__of__stock29">Vendor c </label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    <li>
                                        <div class="sidebar__box">
                                            <input id="out__of__stock30" type="checkbox">
                                            <label for="out__of__stock30"> Vendor D </label>
                                            <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                        </div>
                                    
                                    </li>
                                    </ul>
                                </div>
                            </div>



                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                        <div class="shop__right__wraper">
                            <div class="shop__tab">
                                <ul class="nav " id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="shop__tap__link active" data-bs-toggle="tab" data-bs-target="#projects__one" type="button">
                                            <i class="fas fa-th-large"></i>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="shop__tap__link" data-bs-toggle="tab" data-bs-target="#projects__two" type="button">
                                            <i class="fas fa-list"></i>
                                        </button>
                                    </li>
                                
                                    
        
                                </ul>
                            </div>
                            <div class="shop__selecte">
                                <select class="nice-select" name="SortBy" id="SortBy">
                                    <option value="manual">Featured</option>
                                    <option value="best-selling">Best Selling</option>
                                    <option value="title-ascending">Alphabetically, A-Z</option>
                                    <option value="title-descending">Alphabetically, Z-A</option>
                                    <option value="price-ascending">Price, low to high</option>
                                    <option value="price-descending">Price, high to low</option>
                                    <option value="created-descending">Date, new to old</option>
                                    <option value="created-ascending">Date, old to new</option>
                                    </select>
                            </div>
                            <div class="shop__number text-right">
                                <span>
                                    Showing 1 - 15 of  68 result 
                                </span>
                                </div>
                        </div>


                        <div class="tab-content " id="myTabContent">
                            <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                                <div class="row grid__responsive">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                        <div class="grid__wraper">
                                            <div class="grid__wraper__img">
                                                <div class="grid__wraper__img__inner">
                                                    <a href="single-product.html">
                                                        <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__1.png')}}" alt="Primary Image">
                                                        <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__2.png')}}" alt="Secondary Image">
                                                    </a>
                                                </div>
                                                <div class="grid__wraper__icon">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
            
                                                <div class="grid__wraper__badge">
                                                    <span class="new__badge">New</span>
                                                    <span class="sale__badge">-15%</span>
                                                </div>
            
                                                <div class="grid__wraper__countdown" data-countdown="2026/06/01">
                                                    <div class="count">
                                                        <p>422</p><span>Days</span>
                                                    </div>
                                                    <div class="count">
                                                        <p>23</p> <span>Hrs</span>
                                                    </div>
                                                    <div class="count">
                                                        <p>25</p> <span>Min</span>
                                                    </div>
                                                    <div class="count">
                                                        <p>01</p> <span>Sec</span>
                                                    </div>
                                                </div>
            
                                            </div>
                                            <div class="grid__wraper__info">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">W. Men Formal T-shirt</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <del>$72.00</del>
                                                    <span>$47.00</span> 
                                                </div>
                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url(img/grid/swatch__thumb__1.png);">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url(img/grid/swatch__thumb__2.png);">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url(img/grid/swatch__thumb__3.png);">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url(img/grid/swatch__thumb__4.png);">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+5</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
            
                                        
                                            
            
            
            
                                        </div>
                                    </div>
            
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                        <div class="grid__wraper">
                                            <div class="grid__wraper__img">
                                                <div class="grid__wraper__img__inner">
                                                    <a href="single-product.html">
                                                        <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__3.png')}}" alt="Primary Image">
                                                        <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__4.png')}}" alt="Secondary Image">
                                                    </a>
                                                </div>
                                                <div class="grid__wraper__icon">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
            
            
                                            </div>
                                            <div class="grid__wraper__info">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">B. Pair of Blue Shoes</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <span>$47.00</span> 
                                                </div>
                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+8</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
            
                                        
                                            
            
            
            
                                        </div>
                                    </div>
            
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                        <div class="grid__wraper">
                                            <div class="grid__wraper__img">
                                                <div class="grid__wraper__img__inner">
                                                    <a href="single-product.html">
                                                        <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__5.png')}}" alt="Primary Image">
                                                        <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__6.png')}}" alt="Secondary Image">
                                                    </a>
                                                </div>
                                                <div class="grid__wraper__icon">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
            
                                                <div class="grid__wraper__badge">
                                                    <span class="new__badge">New</span>
                                                </div>
            
            
                                            </div>
                                            <div class="grid__wraper__info">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">F. Ultimate Smart Watch</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <span>$47.00</span> 
                                                </div>
                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>
            
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                        <div class="grid__wraper">
                                            <div class="grid__wraper__img">
                                                <div class="grid__wraper__img__inner">
                                                    <a href="single-product.html">
                                                        <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__7.png')}}" alt="Primary Image">
                                                        <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__8.png')}}" alt="Secondary Image">
                                                    </a>
                                                </div>
                                                <div class="grid__wraper__icon">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
            
                                                <div class="grid__wraper__badge">
                                                    <span class="sale__badge">-15%</span>
                                                </div>
            
                                                <div class="grid__wraper__countdown" data-countdown="2027/02/01">
                                                    <div class="count">
                                                        <p>422</p><span>Days</span>
                                                    </div>
                                                    <div class="count">
                                                        <p>23</p> <span>Hrs</span>
                                                    </div>
                                                    <div class="count">
                                                        <p>25</p> <span>Min</span>
                                                    </div>
                                                    <div class="count">
                                                        <p>01</p> <span>Sec</span>
                                                    </div>
                                                </div>
            
                                            </div>
                                            <div class="grid__wraper__info">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">S. Mokmol Jacket</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <del>$72.00</del>
                                                    <span>$47.00</span> 
                                                </div>
                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url(img/grid/swatch__thumb__1.png);">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url(img/grid/swatch__thumb__2.png);">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url(img/grid/swatch__thumb__3.png);">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url(img/grid/swatch__thumb__4.png);">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+2</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                        <div class="grid__wraper">
                                            <div class="grid__wraper__img">
                                                <div class="grid__wraper__img__inner">
                                                    <a href="single-product.html">
                                                        <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__9.png')}}" alt="Primary Image">
                                                        <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__10.png')}}" alt="Secondary Image">
                                                    </a>
                                                </div>
                                                <div class="grid__wraper__icon">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
            
                                                <div class="grid__wraper__badge">
                                                    <span class="new__badge">New</span>
                                                    <span class="sale__badge">-15%</span>
                                                </div>
            
                                                <div class="grid__wraper__countdown" data-countdown="2026/06/01">
                                                    <div class="count">
                                                        <p>422</p><span>Days</span>
                                                    </div>
                                                    <div class="count">
                                                        <p>23</p> <span>Hrs</span>
                                                    </div>
                                                    <div class="count">
                                                        <p>25</p> <span>Min</span>
                                                    </div>
                                                    <div class="count">
                                                        <p>01</p> <span>Sec</span>
                                                    </div>
                                                </div>
            
                                            </div>
                                            <div class="grid__wraper__info">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">A. Stylist Sunglass</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <del>$72.00</del>
                                                    <span>$47.00</span> 
                                                </div>
                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url(img/grid/swatch__thumb__1.png);">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url(img/grid/swatch__thumb__2.png);">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url(img/grid/swatch__thumb__3.png);">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url(img/grid/swatch__thumb__4.png);">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+5</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
            
                                        
                                            
            
            
            
                                        </div>
                                    </div>
            
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                        <div class="grid__wraper">
                                            <div class="grid__wraper__img">
                                                <div class="grid__wraper__img__inner">
                                                    <a href="single-product.html">
                                                        <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__11.png')}}" alt="Primary Image">
                                                        <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__12.png')}}" alt="Secondary Image">
                                                    </a>
                                                </div>
                                                <div class="grid__wraper__icon">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
            
            
                                            </div>
                                            <div class="grid__wraper__info">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">B. Pair of Blue Shoes</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <span>$47.00</span> 
                                                </div>
                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+1</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
            
                                        
                                            
            
            
            
                                        </div>
                                    </div>
            
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                        <div class="grid__wraper">
                                            <div class="grid__wraper__img">
                                                <div class="grid__wraper__img__inner">
                                                    <a href="single-product.html">
                                                        <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__14.png')}}" alt="Primary Image">
                                                        <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__13.png')}}" alt="Secondary Image">
                                                    </a>
                                                </div>
                                                <div class="grid__wraper__icon">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
            
                                                <div class="grid__wraper__badge">
                                                    <span class="new__badge">New</span>
                                                </div>
            
            
                                            </div>
                                            <div class="grid__wraper__info">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">F. Ultimate Smart Watch</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <span>$47.00</span> 
                                                </div>
                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>
            
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                        <div class="grid__wraper">
                                            <div class="grid__wraper__img">
                                                <div class="grid__wraper__img__inner">
                                                    <a href="single-product.html">
                                                        <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__15.png')}}" alt="Primary Image">
                                                        <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__16.png')}}" alt="Secondary Image">
                                                    </a>
                                                </div>
                                                <div class="grid__wraper__icon">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
            
                                                <div class="grid__wraper__badge">
                                                    <span class="sale__badge">-15%</span>
                                                </div>
            
                                            
            
                                            </div>
                                            <div class="grid__wraper__info">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">S. Mokmol Jacket</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <del>$72.00</del>
                                                    <span>$47.00</span> 
                                                </div>
                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url(img/grid/swatch__thumb__1.png);">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url(img/grid/swatch__thumb__2.png);">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url(img/grid/swatch__thumb__3.png);">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url(img/grid/swatch__thumb__4.png);">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+2</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                        <div class="grid__wraper">
                                            <div class="grid__wraper__img">
                                                <div class="grid__wraper__img__inner">
                                                    <a href="single-product.html">
                                                        <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__17.png')}}" alt="Primary Image">
                                                        <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__18.png')}}" alt="Secondary Image">
                                                    </a>
                                                </div>
                                                <div class="grid__wraper__icon">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
            
                                                <div class="grid__wraper__badge">
                                                    <span class="new__badge">New</span>
                                                    <span class="sale__badge">-15%</span>
                                                </div>
            
                                                <div class="grid__wraper__countdown" data-countdown="2026/06/01">
                                                    <div class="count">
                                                        <p>422</p><span>Days</span>
                                                    </div>
                                                    <div class="count">
                                                        <p>23</p> <span>Hrs</span>
                                                    </div>
                                                    <div class="count">
                                                        <p>25</p> <span>Min</span>
                                                    </div>
                                                    <div class="count">
                                                        <p>01</p> <span>Sec</span>
                                                    </div>
                                                </div>
            
                                            </div>
                                            <div class="grid__wraper__info">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">W. Men Formal T-shirt</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <del>$72.00</del>
                                                    <span>$47.00</span> 
                                                </div>
                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url(img/grid/swatch__thumb__1.png);">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url(img/grid/swatch__thumb__2.png);">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url(img/grid/swatch__thumb__3.png);">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url(img/grid/swatch__thumb__4.png);">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+5</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
            
                                        
                                            
            
            
            
                                        </div>
                                    </div>
            
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                        <div class="grid__wraper">
                                            <div class="grid__wraper__img">
                                                <div class="grid__wraper__img__inner">
                                                    <a href="single-product.html">
                                                        <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__19.png')}}" alt="Primary Image">
                                                        <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__20.png')}}" alt="Secondary Image">
                                                    </a>
                                                </div>
                                                <div class="grid__wraper__icon">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
            
            
                                            </div>
                                            <div class="grid__wraper__info">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">B. Pair of Blue Shoes</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <span>$47.00</span> 
                                                </div>
                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+8</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
            
                                        
                                            
            
            
            
                                        </div>
                                    </div>
            
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                        <div class="grid__wraper">
                                            <div class="grid__wraper__img">
                                                <div class="grid__wraper__img__inner">
                                                    <a href="single-product.html">
                                                        <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__21.png')}}" alt="Primary Image">
                                                        <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__22.png')}}" alt="Secondary Image">
                                                    </a>
                                                </div>
                                                <div class="grid__wraper__icon">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
            
                                                <div class="grid__wraper__badge">
                                                    <span class="new__badge">New</span>
                                                </div>
            
            
                                            </div>
                                            <div class="grid__wraper__info">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">F. Ultimate Smart Watch</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <span>$47.00</span> 
                                                </div>
                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>
            
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                        <div class="grid__wraper">
                                            <div class="grid__wraper__img">
                                                <div class="grid__wraper__img__inner">
                                                    <a href="single-product.html">
                                                        <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__23.png')}}" alt="Primary Image">
                                                        <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__24.png')}}" alt="Secondary Image">
                                                    </a>
                                                </div>
                                                <div class="grid__wraper__icon">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
            
                                                <div class="grid__wraper__badge">
                                                    <span class="sale__badge">-15%</span>
                                                </div>
            
                                                <div class="grid__wraper__countdown" data-countdown="2027/02/01">
                                                    <div class="count">
                                                        <p>422</p><span>Days</span>
                                                    </div>
                                                    <div class="count">
                                                        <p>23</p> <span>Hrs</span>
                                                    </div>
                                                    <div class="count">
                                                        <p>25</p> <span>Min</span>
                                                    </div>
                                                    <div class="count">
                                                        <p>01</p> <span>Sec</span>
                                                    </div>
                                                </div>
            
                                            </div>
                                            <div class="grid__wraper__info">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">S. Mokmol Jacket</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <del>$72.00</del>
                                                    <span>$47.00</span> 
                                                </div>
                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url(img/grid/swatch__thumb__1.png);">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url(img/grid/swatch__thumb__2.png);">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url(img/grid/swatch__thumb__3.png);">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url(img/grid/swatch__thumb__4.png);">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+2</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                        <div class="grid__wraper">
                                            <div class="grid__wraper__img">
                                                <div class="grid__wraper__img__inner">
                                                    <a href="single-product.html">
                                                        <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__25.png')}}" alt="Primary Image">
                                                        <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__26.png')}}" alt="Secondary Image">
                                                    </a>
                                                </div>
                                                <div class="grid__wraper__icon">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
            
                                                <div class="grid__wraper__badge">
                                                    <span class="new__badge">New</span>
                                                    <span class="sale__badge">-15%</span>
                                                </div>
            
                                                <div class="grid__wraper__countdown" data-countdown="2026/06/01">
                                                    <div class="count">
                                                        <p>422</p><span>Days</span>
                                                    </div>
                                                    <div class="count">
                                                        <p>23</p> <span>Hrs</span>
                                                    </div>
                                                    <div class="count">
                                                        <p>25</p> <span>Min</span>
                                                    </div>
                                                    <div class="count">
                                                        <p>01</p> <span>Sec</span>
                                                    </div>
                                                </div>
            
                                            </div>
                                            <div class="grid__wraper__info">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">A. Stylist Sunglass</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <del>$72.00</del>
                                                    <span>$47.00</span> 
                                                </div>
                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url(img/grid/swatch__thumb__1.png);">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url(img/grid/swatch__thumb__2.png);">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url(img/grid/swatch__thumb__3.png);">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url(img/grid/swatch__thumb__4.png);">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+5</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
            
                                        
                                            
            
            
            
                                        </div>
                                    </div>
            
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                        <div class="grid__wraper">
                                            <div class="grid__wraper__img">
                                                <div class="grid__wraper__img__inner">
                                                    <a href="single-product.html">
                                                        <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__27.png')}}" alt="Primary Image">
                                                        <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__29.png')}}" alt="Secondary Image">
                                                    </a>
                                                </div>
                                                <div class="grid__wraper__icon">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
            
            
                                            </div>
                                            <div class="grid__wraper__info">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">B. Pair of Blue Shoes</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <span>$47.00</span> 
                                                </div>
                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+1</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
            
                                        
                                            
            
            
            
                                        </div>
                                    </div>
            
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                        <div class="grid__wraper">
                                            <div class="grid__wraper__img">
                                                <div class="grid__wraper__img__inner">
                                                    <a href="single-product.html">
                                                        <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__29.png')}}" alt="Primary Image">
                                                        <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__30.png')}}" alt="Secondary Image">
                                                    </a>
                                                </div>
                                                <div class="grid__wraper__icon">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
            
                                                <div class="grid__wraper__badge">
                                                    <span class="new__badge">New</span>
                                                </div>
            
            
                                            </div>
                                            <div class="grid__wraper__info">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">F. Ultimate Smart Watch</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <span>$47.00</span> 
                                                </div>
                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>
            
                                </div>
                            </div>
    
                            <div class="tab-pane fade" id="projects__two" role="tabpanel" aria-labelledby="projects__two">
                                <div class="row">
                                    
                                    <div class="col-xl-12">
                                        <div class="grid__wraper grid__list__wraper">

                                            <div class="grid__wraper__img__list__swatch">
                                                <div class="grid__wraper__img grid__wraper__img__list">
                                                    <div class="grid__wraper__img__inner">
                                                        <a href="single-product.html">
                                                            <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__17.png')}}" alt="Primary Image">
                                                            <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__18.png')}}" alt="Secondary Image">
                                                        </a>
                                                    </div>
                                                
                
                                                    <div class="grid__wraper__badge">
                                                        <span class="new__badge">New</span>
                                                        <span class="sale__badge">-15%</span>
                                                    </div>

                                                    <div class="grid__wraper__countdown" data-countdown="2026/06/01">
                                                        <div class="count">
                                                            <p>422</p><span>Days</span>
                                                        </div>
                                                        <div class="count">
                                                            <p>23</p> <span>Hrs</span>
                                                        </div>
                                                        <div class="count">
                                                            <p>25</p> <span>Min</span>
                                                        </div>
                                                        <div class="count">
                                                            <p>01</p> <span>Sec</span>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url(img/grid/swatch__thumb__1.png);">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url(img/grid/swatch__thumb__2.png);">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url(img/grid/swatch__thumb__3.png);">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url(img/grid/swatch__thumb__4.png);">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+5</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                
                                            </div>

                                            <div class="grid__wraper__info grid__wraper__info__list text-start">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">W. Men Formal T-shirt</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <del>$72.00</del>
                                                    <span>$47.00</span> 
                                                </div>

                                                <div class="gird__list__description">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                                </div>

                                                <div class="grid__wraper__icon grid__wraper__icon__list">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
                                                
                                            </div>
            
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-12">
                                        <div class="grid__wraper grid__list__wraper">

                                            <div class="grid__wraper__img__list__swatch">
                                                <div class="grid__wraper__img grid__wraper__img__list">
                                                    <div class="grid__wraper__img__inner">
                                                        <a href="single-product.html">
                                                            <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__19.png')}}" alt="Primary Image">
                                                            <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__20.png')}}" alt="Secondary Image">
                                                        </a>
                                                    </div>
                                                
                
                                                    <div class="grid__wraper__badge">
                                                        <span class="new__badge">New</span>
                                                        <span class="sale__badge">-10%</span>
                                                    </div>

                                                </div>

                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                
                                            </div>

                                            <div class="grid__wraper__info grid__wraper__info__list text-start">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">Ba. Dimond Ring</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <del>$80.00</del>
                                                    <span>$70.00</span> 
                                                </div>

                                                <div class="gird__list__description">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                                </div>

                                                <div class="grid__wraper__icon grid__wraper__icon__list">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
                                                
                                            </div>
            
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-12">
                                        <div class="grid__wraper grid__list__wraper">

                                            <div class="grid__wraper__img__list__swatch">
                                                <div class="grid__wraper__img grid__wraper__img__list">
                                                    <div class="grid__wraper__img__inner">
                                                        <a href="single-product.html">
                                                            <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__21.png')}}" alt="Primary Image">
                                                            <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__22.png')}}" alt="Secondary Image">
                                                        </a>
                                                    </div>
                                                
                
                                                    <div class="grid__wraper__badge">
                                                        <span class="new__badge">New</span>
                                                    </div>

                                                </div>

                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url(img/grid/swatch__thumb__1.png);">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url(img/grid/swatch__thumb__2.png);">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url(img/grid/swatch__thumb__3.png);">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url(img/grid/swatch__thumb__4.png);">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+5</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                
                                            </div>

                                            <div class="grid__wraper__info grid__wraper__info__list text-start">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">W. Women Formal T-shirt</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <del>$92.00</del>
                                                    <span>$65.00</span> 
                                                </div>

                                                <div class="gird__list__description">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                                </div>

                                                <div class="grid__wraper__icon grid__wraper__icon__list">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
                                                
                                            </div>
            
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-12">
                                        <div class="grid__wraper grid__list__wraper">

                                            <div class="grid__wraper__img__list__swatch">
                                                <div class="grid__wraper__img grid__wraper__img__list">
                                                    <div class="grid__wraper__img__inner">
                                                        <a href="single-product.html">
                                                            <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__23.png')}}" alt="Primary Image">
                                                            <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__24.png')}}" alt="Secondary Image">
                                                        </a>
                                                    </div>
                                                
                
                                                    <div class="grid__wraper__badge">
                                                        <span class="sale__badge">-10%</span>
                                                    </div>

                                                </div>

                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                
                                            </div>

                                            <div class="grid__wraper__info grid__wraper__info__list text-start">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">Ba. Dimond Ring</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <del>$80.00</del>
                                                    <span>$70.00</span> 
                                                </div>

                                                <div class="gird__list__description">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                                </div>

                                                <div class="grid__wraper__icon grid__wraper__icon__list">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
                                                
                                            </div>
            
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-12">
                                        <div class="grid__wraper grid__list__wraper">

                                            <div class="grid__wraper__img__list__swatch">
                                                <div class="grid__wraper__img grid__wraper__img__list">
                                                    <div class="grid__wraper__img__inner">
                                                        <a href="single-product.html">
                                                            <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__25.png')}}" alt="Primary Image">
                                                            <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__26.png')}}" alt="Secondary Image">
                                                        </a>
                                                    </div>
                                                
                
                                                    <div class="grid__wraper__badge">
                                                        <span class="new__badge">New</span>
                                                        <span class="sale__badge">-15%</span>
                                                    </div>

                                                    <div class="grid__wraper__countdown" data-countdown="2026/06/01">
                                                        <div class="count">
                                                            <p>422</p><span>Days</span>
                                                        </div>
                                                        <div class="count">
                                                            <p>23</p> <span>Hrs</span>
                                                        </div>
                                                        <div class="count">
                                                            <p>25</p> <span>Min</span>
                                                        </div>
                                                        <div class="count">
                                                            <p>01</p> <span>Sec</span>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url(img/grid/swatch__thumb__1.png);">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url(img/grid/swatch__thumb__2.png);">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url(img/grid/swatch__thumb__3.png);">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url(img/grid/swatch__thumb__4.png);">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+5</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                
                                            </div>

                                            <div class="grid__wraper__info grid__wraper__info__list text-start">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">W. Men Formal T-shirt</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <del>$72.00</del>
                                                    <span>$47.00</span> 
                                                </div>

                                                <div class="gird__list__description">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                                </div>

                                                <div class="grid__wraper__icon grid__wraper__icon__list">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
                                                
                                            </div>
            
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-12">
                                        <div class="grid__wraper grid__list__wraper">

                                            <div class="grid__wraper__img__list__swatch">
                                                <div class="grid__wraper__img grid__wraper__img__list">
                                                    <div class="grid__wraper__img__inner">
                                                        <a href="single-product.html">
                                                            <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__27.png')}}" alt="Primary Image">
                                                            <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__28.png')}}" alt="Secondary Image">
                                                        </a>
                                                    </div>
                                                
                
                                                    <div class="grid__wraper__badge">
                                                        <span class="new__badge">New</span>
                                                        <span class="sale__badge">-10%</span>
                                                    </div>

                                                </div>

                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                
                                            </div>

                                            <div class="grid__wraper__info grid__wraper__info__list text-start">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">Ba. Dimond Ring</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <del>$80.00</del>
                                                    <span>$70.00</span> 
                                                </div>

                                                <div class="gird__list__description">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                                </div>

                                                <div class="grid__wraper__icon grid__wraper__icon__list">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
                                                
                                            </div>
            
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-12">
                                        <div class="grid__wraper grid__list__wraper">

                                            <div class="grid__wraper__img__list__swatch">
                                                <div class="grid__wraper__img grid__wraper__img__list">
                                                    <div class="grid__wraper__img__inner">
                                                        <a href="single-product.html">
                                                            <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__29.png')}}" alt="Primary Image">
                                                            <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__30.png')}}" alt="Secondary Image">
                                                        </a>
                                                    </div>
                                                
                
                                                    <div class="grid__wraper__badge">
                                                        <span class="new__badge">New</span>
                                                    </div>

                                                </div>

                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url(img/grid/swatch__thumb__1.png);">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url(img/grid/swatch__thumb__2.png);">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url(img/grid/swatch__thumb__3.png);">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url(img/grid/swatch__thumb__4.png);">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+5</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                
                                            </div>

                                            <div class="grid__wraper__info grid__wraper__info__list text-start">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">W. Women Formal T-shirt</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <del>$92.00</del>
                                                    <span>$65.00</span> 
                                                </div>

                                                <div class="gird__list__description">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                                </div>

                                                <div class="grid__wraper__icon grid__wraper__icon__list">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
                                                            </a>
                                                        </li>
            
                                                    </ul>   
                                                </div>
                                                
                                            </div>
            
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-12">
                                        <div class="grid__wraper grid__list__wraper">

                                            <div class="grid__wraper__img__list__swatch">
                                                <div class="grid__wraper__img grid__wraper__img__list">
                                                    <div class="grid__wraper__img__inner">
                                                        <a href="single-product.html">
                                                            <img class="primary__image" src="{{asset('assets/frontend/img/grid/grid__31.png')}}" alt="Primary Image">
                                                            <img class="secondary__image" src="{{asset('assets/frontend/img/grid/grid__32.png')}}" alt="Secondary Image">
                                                        </a>
                                                    </div>
                                                
                
                                                    <div class="grid__wraper__badge">
                                                        <span class="sale__badge">-10%</span>
                                                    </div>

                                                </div>

                                                <div class="grid__wraper__color">
                                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                        <li class="red color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                                            </label>
                                                        </li>
                                                        <li class="green color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                                            </label>
                                                        </li>
                                                        <li class="blue color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                                            </label>
                                                        </li>
                                                        <li class="black color_img_variant">
                                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                                            </label>
                                                        </li>
                                                        <li class="vaiant-plus-one">
                                                            <a href="single-product.html" tabindex="0">
                                                                <span>+3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                
                                            </div>

                                            <div class="grid__wraper__info grid__wraper__info__list text-start">
                                                <h3 class="grid__wraper__tittle">
                                                    <a href="single-product.html" tabindex="0">Ba. Dimond Ring</a>
                                                </h3>
                                                <div class="grid__wraper__price">
                                                    <del>$80.00</del>
                                                    <span>$70.00</span> 
                                                </div>

                                                <div class="gird__list__description">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                                </div>

                                                <div class="grid__wraper__icon grid__wraper__icon__list">                                
                                                    <ul>
                                                        <li>
                                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </span>
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>                                             
                                                        </li>
            
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                                <i class="fas fa-exchange-alt"></i>
                                                                
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


                        <div class="pagination__wraper text-center sp_top_40">
                


                            <ul>
                              
                              <li class="disabled prev">
                                <a href="#">
                                  <span>
                                    
                                    <i class="fas fa-angle-double-left"></i>
                                    
                                  </span>
                                </a>
                              </li>
                              
                              
                              
                              
                              <li><a class="active" href="#">1</a></li>
                              
                              
                              
                              
                              <li>
                                <a href="#" title="">2</a>
                              </li>
                              
                              
                              
                              <li class="next">
                                <a href="#" title="Next »">
                                  <span aria-hidden="true">
                                    
                                    <i class="fas fa-angle-double-right"></i>
                                    
                                  </span>
                                </a>
                              </li>
                              
                            </ul>
                          </div>


                    </div>
                </div>
            </div>
        </div>
    <!-- shop__section__start-->

        <!-- categori__section__start -->
        <div class="category sp_bottom_70 sp_top_80">
            <div class="container">
                <div class="row grid__responsive row__custom__class category__slider__active slider__default__arrow">
                    <div class="col-12 column__custom__class">
                        <div class="category__single">
                            <div class="category__img">
                                <img src="{{asset('assets/frontend/img/baby/baby__1.png')}}" alt="">
                            </div>
                            <div class="category__text">
                                <h5><a href="#" tabindex="-1">Featured</a></h5>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-12 column__custom__class">
                        <div class="category__single">
                            <div class="category__img">
                                <img src="{{asset('assets/frontend/img/grid/grid__31.png')}}" alt="">
                            </div>
                            <div class="category__text">
                                <h5><a href="#" tabindex="-1">Earrings</a></h5>
                            </div>
                        </div>
        
                    </div>
        
                    <div class="col-12 column__custom__class">
                        <div class="category__single">
                            <div class="category__img">
                                <img src="{{asset('assets/frontend/img/grid/grid__32.png')}}" alt="">
                            </div>
                            <div class="category__text">
                                <h5><a href="#" tabindex="-1">Baby (T Shirt)</a></h5>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-12 column__custom__class">
        
                        <div class="category__single">
                            <div class="category__img">
                                <img src="{{asset('assets/frontend/img/grid/grid__33.png')}}" alt="">
                            </div>
                            <div class="category__text">
                                <h5><a href="#" tabindex="-1">Gold</a></h5>
                            </div>
                        </div>
        
                    </div>
        
                    <div class="col-12 column__custom__class">
                        <div class="category__single">
                            <div class="category__img">
                                <img src="{{asset('assets/frontend/img/grid/grid__37.png')}}" alt="">
                            </div>
                            <div class="category__text">
                                <h5><a href="#" tabindex="-1">Kids</a></h5>
                            </div>
                        </div>
        
                    </div>
        
                    <div class="col-12 column__custom__class">
                        <div class="category__single">
                            <div class="category__img">
                                <img src="{{asset('assets/frontend/img/grid/grid__35.png')}}" alt="">
                            </div>
                            <div class="category__text">
                                <h5><a href="#" tabindex="-1">Men</a></h5>
                            </div>
                        </div>
        
                    </div>
        
                    <div class="col-12 column__custom__class">
                        <div class="category__single">
                            <div class="category__img">
                                <img src="{{asset('assets/frontend/img/grid/grid__36.png')}}" alt="">
                            </div>
                            <div class="category__text">
                                <h5><a href="#" tabindex="-1">Necklaces</a></h5>
                            </div>
                        </div>
        
                    </div>
        
                    <div class="col-12 column__custom__class">
                        <div class="category__single">
                            <div class="category__img">
                                <img src="{{asset('assets/frontend/img/baby/baby__1.png')}}" alt="">
                            </div>
                            <div class="category__text">
                                <h5><a href="#" tabindex="-1">Featured </a></h5>
                            </div>
                        </div>
        
                    </div>
        
                    <div class="col-12 column__custom__class">
                        <div class="category__single">
                            <div class="category__img">
                                <img src="{{asset('assets/frontend/img/grid/grid__1.png')}}" alt="">
                            </div>
                            <div class="category__text">
                                <h5><a href="#" tabindex="-1">Kids</a></h5>
                            </div>
                        </div>
        
                    </div>
        
                    <div class="col-12 column__custom__class">
                        <div class="category__single">
                            <div class="category__img">
                                <img src="{{asset('assets/frontend/img/grid/grid__10.png')}}" alt="">
                            </div>
                            <div class="category__text">
                                <h5><a href="#" tabindex="-1"> Product</a></h5>
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
        <!-- categori__section__end -->


<!-- footer__section__start -->
<div class="footer ">
    <div class="footer__inner sp_top_80">
    <div class="container sp_bottom_60">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="footer__widget">
                    <h4 class="footer__title">About Us.</h4>
                    <div class="footer__content">
                        <p>Minimal E-Commerce is a dynamic and innovative online retail platform that offers a wide range of products to customers worldwide.</p>
                    </div>
                    <div class="footer__social__icon">
                        <ul>
                            <li><a target="_blank" title="Facebook-f" href="https://www.facebook.com/shopify"><i class="fab fa-facebook-f"></i></a></li>     
                            
                            
                            <li><a target="_blank" title="Twitter" href="https://twitter.com/shopify"><i class="fab fa-twitter"></i></a></li>       
                               
                            
                            
                            <li><a target="_blank" title="Youtube" href="https://www.youtube.com/user/shopify"><i class="fab fa-youtube"></i></a></li>       
                            
                            
                            <li><a target="_blank" title="Instagram" href="https://www.instagram.com/shopify/"><i class="fab fa-instagram"></i></a></li>       
                            
                            
                            <li><a target="_blank" title="Tiktok" href="https://www.tiktok.com/@shopify"><i class="fab fa-tiktok"></i></a></li>       
                            
                            
                            </ul>
                    </div>
                    <div class="footer__bottom">
<h5>Guaranteed safe checkout</h5>
                            <div class="footer__img">
                                <ul>
                                    <li>
                                        <img src="{{asset('assets/frontend/img/footer/footer__1.svg')}}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/frontend/img/footer/footer__2.svg')}}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/frontend/img/footer/footer__3.svg')}}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/frontend/img/footer/footer__4.svg')}}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/frontend/img/footer/footer__5.svg')}}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/frontend/img/footer/footer__6.svg')}}" alt="">
                                    </li>
                                </ul>
                            </div>
                </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-4 col-6">
                <div class="footer__widget">
                    <h4 class="footer__title">Quick Link</h4>
                    <div class="footer__menu">
                    <ul>
                        <li><a href="/account">My Account</a></li>
                        <li><a href="/cart">My Cart</a></li>
                        <li><a href="/pages/wishlist">Wishlist</a></li>
                        <li><a href="/">Gift Card</a></li>
                        <li><a href="/pages/contact">Need Help?</a></li>
                    </ul>
                  </div>
                </div>
            </div>


            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-4 col-6">
                <div class="footer__widget">
                    <h4 class="footer__title">Information</h4>
                    <div class="footer__menu">
                    <ul>
                        <li><a href="/account">About us</a></li>
                        <li><a href="/cart">Contact</a></li>
                        <li><a href="/pages/wishlist">Blogs</a></li>
                        <li><a href="/">Gift Card</a></li>
                        <li><a href="/pages/contact">Size Chart</a></li>
                    </ul>
                  </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-4 col-6">
                <div class="footer__widget">
                    <h4 class="footer__title">Policies</h4>
                    <div class="footer__menu">
                    <ul>
                        <li><a href="/account">Privacy Policy</a></li>
                        <li><a href="/cart">Refund Policy</a></li>
                        <li><a href="/pages/wishlist">Terms of Service</a></li>
                        <li><a href="/">Gift Card</a></li>
                        <li><a href="/pages/contact">Shipping Policy</a></li>
                    </ul>
                  </div>
                </div>
            </div>



        </div>
    </div>
    </div>

    <div class="copyright">
    <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="copyright__text">
                <p>© 2024 <strong>Minimalin</strong>. All rights reserved.</p>
           
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
 <!-- footer__section__end -->


<!-- modal__section__start -->
<div class="grid__quick__view__modal modalarea modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="row align-items-center">
              
                    <div class="col-xl-6 col-lg-6 col-md-6">
    
                     <div class="grid__quick__img">
                        <img src="{{asset('assets/frontend/img/grid/grid__1.png')}}" alt="">
                     </div>
    
    
                    </div>
    
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                      <div class="grid__quick__content">
                        <h3>W. Men Formal T-shirt</h3>
                        <div class="quick__price">
                            <del>$99.00</del> $120.00
                        </div>
                        <p>we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensuel...</p>


                        <div class="selector__wrapper">
                            <select class="single-option-selector select--wd" data-option="option1" id="product-select-qv-option-0">
                                <option value="White">White</option>
                                <option value="Gold">Gold</option><option value="l">l</option>
                                <option value="Grey">Grey</option>
                                <option value="Maroon">Maroon</option>
                                <option value="Magenta">Magenta</option>
                            </select>
                        </div>


                        <div class="featurearea__quantity">
                            <div class="qty-container">
                                <button class="qty-btn-minus btn-qty" type="button"><i class="fa fa-minus"></i></button>
                                <input type="text" name="qty" value="1" class="input-qty">
                                <button class="qty-btn-plus btn-qty" type="button"><i class="fa fa-plus"></i></button>
                            </div>
                            <a class="default__button" href="#">Add to cart</a>
                        
                        </div>

                      </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection