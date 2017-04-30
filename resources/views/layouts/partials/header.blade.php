<header role="banner" class="type_5">
    <!--header top part-->
    @include('layouts.partials.top_bar')
    <!--header bottom part-->
    <section class="h_bot_part">
        <div class="menu_wrap">
            <div class="container">
                <div class="clearfix row">
                    <div class="col-lg-2 t_md_align_c m_md_bottom_15">
                        <a href="{{url('/')}}" class="logo d_md_inline_b">
                            <img src="images/lggg.png" alt="">
                        </a>
                    </div>
                    <div class="col-lg-10 clearfix t_sm_align_c">
                        <div class="clearfix t_sm_align_l f_left f_sm_none relative s_form_wrap m_sm_bottom_15 p_xs_hr_0 m_xs_bottom_5">
                            <!--button for responsive menu-->
                            <button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_xs_bottom_5">
                                <span class="centered_db r_corners"></span>
                                <span class="centered_db r_corners"></span>
                                <span class="centered_db r_corners"></span>
                            </button>
                            <!--main menu-->
                            <nav role="navigation" class="f_left f_xs_none d_xs_none m_right_35 m_md_right_30 m_sm_right_0">
                                <ul class="horizontal_list main_menu type_2 clearfix">
                                    <li class="current relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a href="{{url('/')}}" class="tr_delay_hover color_dark tt_uppercase r_corners"><b>Home</b></a>
                                    </li>
                                    <li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0">
                                        <a href="{{route('categories.show','women')}}" class="tr_delay_hover color_dark tt_uppercase r_corners">
                                            <b>Women</b>
                                        </a>
                                        <!--sub menu-->
                                        <div class="sub_menu_wrap top_arrow d_xs_none tr_all_hover clearfix r_corners w_xs_auto">
                                            <div class="f_left f_xs_none">
                                                <b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Dresses</b>
                                                <ul class="sub_menu first">
                                                    <li><a class="color_dark tr_delay_hover" href="#">Evening Dresses</a></li>

                                                </ul>
                                            </div>

                                            <div class="f_left m_left_10 m_xs_left_0 f_xs_none">
                                                <b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Tops</b>
                                                <ul class="sub_menu">
                                                    <li><a class="color_dark tr_delay_hover" href="#">Evening Tops</a></li>
                                                    <li><a class="color_dark tr_delay_hover" href="#">Long Sleeved</a></li>
                                                    <li><a class="color_dark tr_delay_hover" href="#">Short Sleeved</a></li>
                                                </ul>
                                            </div>
                                            <img src="images/woman_image_1.jpg" class="d_sm_none f_right m_bottom_10" alt="">
                                        </div>
                                    </li>
                                    <li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0">
                                        <a href="{{route('categories.show','men')}}" class="tr_delay_hover color_dark tt_uppercase r_corners">
                                            <b>Men</b>
                                        </a>
                                        <!--sub menu-->
                                        <div class="sub_menu_wrap top_arrow d_xs_none tr_all_hover clearfix r_corners w_xs_auto">
                                            <div class="f_left f_xs_none">
                                                <b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Dresses</b>
                                                <ul class="sub_menu first">
                                                    <li><a class="color_dark tr_delay_hover" href="#">Evening Dresses</a></li>

                                                </ul>
                                            </div>
                                            <div class="f_left m_left_10 m_xs_left_0 f_xs_none">
                                                <b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Tops</b>
                                                <ul class="sub_menu">
                                                    <li><a class="color_dark tr_delay_hover" href="#">Evening Tops</a></li>
                                                    <li><a class="color_dark tr_delay_hover" href="#">Long Sleeved</a></li>
                                                </ul>
                                            </div>
                                            <img src="images/woman_image_1.jpg" class="d_sm_none f_right m_bottom_10" alt="">
                                        </div>
                                    </li>

                                    <li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a href="{{route('categories.show','kids')}}" class="tr_delay_hover color_dark tt_uppercase r_corners"><b>Kids</b></a></li>

                                    <li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a href="{{url('/contact')}}" class="tr_delay_hover color_dark tt_uppercase r_corners"><b>Contact</b></a></li>
                                </ul>
                            </nav>
                            <button class="f_right search_button tr_all_hover f_xs_none d_xs_none">
                                <i class="fa fa-search"></i>
                            </button>
                            <!--search form-->
                            <div class="searchform_wrap type_2 bg_tr tf_xs_none tr_all_hover w_inherit">
                                <div class="container vc_child h_inherit relative w_inherit">
                                    <form role="search" class="d_inline_middle full_width">
                                        <input type="text" name="search" placeholder="Type text and hit enter" class="f_size_large p_hr_0">
                                    </form>
                                    <button class="close_search_form tr_all_hover d_xs_none color_dark">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <ul class="f_right horizontal_list d_sm_inline_b f_sm_none clearfix t_align_l site_settings">
                            <!--like-->
                            <li>
                                <a role="button" href="#" class="button_type_1 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none"><i class="fa fa-heart-o f_size_ex_large"></i><span class="count circle t_align_c">12</span></a>
                            </li>
                            <li class="m_left_5">
                                <a role="button" href="#" class="button_type_1 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none"><i class="fa fa-files-o f_size_ex_large"></i><span class="count circle t_align_c">3</span></a>
                            </li>
                            <!--shopping cart-->
                            <li class="m_left_5 relative container3d" id="shopping_button">
                                <a role="button" href="#" class="button_type_3 color_light bg_scheme_color d_block r_corners tr_delay_hover box_s_none">
												<span class="d_inline_middle shop_icon">
													<i class="fa fa-shopping-cart"></i>
													<span class="count tr_delay_hover type_2 circle t_align_c">3</span>
												</span>
                                    <b>$355</b>
                                </a>
                                <div class="shopping_cart top_arrow tr_all_hover r_corners">
                                    <div class="f_size_medium sc_header">Recently added item(s)</div>
                                    <ul class="products_list">
                                        <li>
                                            <div class="clearfix">
                                                <!--product image-->
                                                <img class="f_left m_right_10" src="images/shopping_c_img_1.jpg" alt="">
                                                <!--product description-->
                                                <div class="f_left product_description">
                                                    <a href="#" class="color_dark m_bottom_5 d_block">Cursus eleifend elit aenean auctor wisi et urna</a>
                                                    <span class="f_size_medium">Product Code PS34</span>
                                                </div>
                                                <!--product price-->
                                                <div class="f_left f_size_medium">
                                                    <div class="clearfix">
                                                        1 x <b class="color_dark">$99.00</b>
                                                    </div>
                                                    <button class="close_product color_dark tr_hover"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="clearfix">
                                                <!--product image-->
                                                <img class="f_left m_right_10" src="images/shopping_c_img_2.jpg" alt="">
                                                <!--product description-->
                                                <div class="f_left product_description">
                                                    <a href="#" class="color_dark m_bottom_5 d_block">Cursus eleifend elit aenean auctor wisi et urna</a>
                                                    <span class="f_size_medium">Product Code PS34</span>
                                                </div>
                                                <!--product price-->
                                                <div class="f_left f_size_medium">
                                                    <div class="clearfix">
                                                        1 x <b class="color_dark">$99.00</b>
                                                    </div>
                                                    <button class="close_product color_dark tr_hover"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="clearfix">
                                                <!--product image-->
                                                <img class="f_left m_right_10" src="images/shopping_c_img_3.jpg" alt="">
                                                <!--product description-->
                                                <div class="f_left product_description">
                                                    <a href="#" class="color_dark m_bottom_5 d_block">Cursus eleifend elit aenean auctor wisi et urna</a>
                                                    <span class="f_size_medium">Product Code PS34</span>
                                                </div>
                                                <!--product price-->
                                                <div class="f_left f_size_medium">
                                                    <div class="clearfix">
                                                        1 x <b class="color_dark">$99.00</b>
                                                    </div>
                                                    <button class="close_product color_dark tr_hover"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!--total price-->
                                    <ul class="total_price bg_light_color_1 t_align_r color_dark">
                                        <li class="m_bottom_10">Tax: <span class="f_size_large sc_price t_align_l d_inline_b m_left_15">$0.00</span></li>
                                        <li class="m_bottom_10">Discount: <span class="f_size_large sc_price t_align_l d_inline_b m_left_15">$37.00</span></li>
                                        <li>Total: <b class="f_size_large bold scheme_color sc_price t_align_l d_inline_b m_left_15">$999.00</b></li>
                                    </ul>
                                    <div class="sc_footer t_align_c">
                                        <a href="#" role="button" class="button_type_4 d_inline_middle bg_light_color_2 r_corners color_dark t_align_c tr_all_hover m_mxs_bottom_5">View Cart</a>
                                        <a href="#" role="button" class="button_type_4 bg_scheme_color d_inline_middle r_corners tr_all_hover color_light">Checkout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="divider_type_6">
        </div>
    </section>
</header>