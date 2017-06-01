@extends('layouts.products')
@section('products')
    <h2 class="tt_uppercase color_dark m_bottom_25">{{$category->name}}</h2>
    <img class="r_corners m_bottom_40" src="{{asset('images/category_img_1.jpg')}}" alt="">
    <!--categories nav-->

    <!--sort-->
    <div class="row clearfix m_bottom_10">
        <div class="col-lg-7 col-md-8 col-sm-12 m_sm_bottom_10">
            <p class="d_inline_middle f_size_medium">Sort by:</p>
            <div class="clearfix d_inline_middle m_left_10">
                <!--product name select-->
                <div class="custom_select f_size_medium relative f_left">
                    <div class="select_title r_corners relative color_dark">Product name</div>
                    <ul class="select_list d_none"></ul>
                    <select name="product_name">
                        <option value="Product SKU">Product SKU</option>
                        <option value="Product Price">Product Price</option>
                        <option value="Product ID">Product ID</option>
                    </select>
                </div>
                <button class="button_type_7 bg_light_color_1 color_dark tr_all_hover r_corners mw_0 box_s_none bg_cs_hover f_left m_left_5"><i class="fa fa-sort-amount-asc m_left_0 m_right_0"></i></button>
            </div>
            <!--manufacturer select-->
            <div class="custom_select f_size_medium relative d_inline_middle m_left_15 m_xs_left_5 m_mxs_left_0 m_mxs_top_10">
                <div class="select_title r_corners relative color_dark">Select manufacturer</div>
                <ul class="select_list d_none"></ul>
                <select name="manufacturer">
                    <option value="Manufacture 1">Manufacture 1</option>
                    <option value="Manufacture 2">Manufacturer 2</option>
                    <option value="Manufacture 3">Manufacturer 3</option>
                </select>
            </div>
        </div>
        <div class="col-lg-5 col-md-4 col-sm-12 t_align_r t_sm_align_l">
            <!--grid view or list view-->
            <p class="d_inline_middle f_size_medium m_right_5">View as:</p>
            <div class="clearfix d_inline_middle">
                <button class="button_type_7 bg_scheme_color color_light tr_delay_hover r_corners mw_0 box_s_none bg_cs_hover f_left"><i class="fa fa-th m_left_0 m_right_0"></i></button>
                <button class="button_type_7 bg_light_color_1 color_dark tr_delay_hover r_corners mw_0 box_s_none bg_cs_hover f_left m_left_5"><i class="fa fa-th-list m_left_0 m_right_0"></i></button>
            </div>
        </div>
    </div>
    <hr class="m_bottom_10 divider_type_3">
    @include('layouts.partials._products_paginate')
    <!--products-->
    <section class="products_container category_grid clearfix m_bottom_15">
        <!--product item-->
        <div class="product_item hit w_xs_full">
            <figure class="r_corners photoframe type_2 t_align_c tr_all_hover shadow relative">
                <!--product preview-->
                <a href="#" class="d_block relative wrapper pp_wrap m_bottom_15">
                    <img src="images/product_img_1.jpg" class="tr_all_hover" alt="">
                    <span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                </a>
                <!--description and price of product-->
                <figcaption>
                    <h5 class="m_bottom_10"><a href="#" class="color_dark">Eget elementum vel</a></h5>
                    <!--rating-->
                    <ul class="horizontal_list d_inline_b m_bottom_10 clearfix rating_list type_2 tr_all_hover">
                        <li class="active">
                            <i class="fa fa-star-o empty tr_all_hover"></i>
                            <i class="fa fa-star active tr_all_hover"></i>
                        </li>
                        <li class="active">
                            <i class="fa fa-star-o empty tr_all_hover"></i>
                            <i class="fa fa-star active tr_all_hover"></i>
                        </li>
                        <li class="active">
                            <i class="fa fa-star-o empty tr_all_hover"></i>
                            <i class="fa fa-star active tr_all_hover"></i>
                        </li>
                        <li class="active">
                            <i class="fa fa-star-o empty tr_all_hover"></i>
                            <i class="fa fa-star active tr_all_hover"></i>
                        </li>
                        <li>
                            <i class="fa fa-star-o empty tr_all_hover"></i>
                            <i class="fa fa-star active tr_all_hover"></i>
                        </li>
                    </ul>
                    <p class="scheme_color f_size_large m_bottom_15">$102.00</p>
                    <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
                    <div class="clearfix m_bottom_5">
                        <ul class="horizontal_list d_inline_b l_width_divider">
                            <li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
                            <li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
                        </ul>
                    </div>
                </figcaption>
            </figure>
        </div>
    </section>

@endsection