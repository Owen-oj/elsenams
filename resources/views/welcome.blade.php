@extends('layouts.site')
@section('slider')
    @include('layouts.partials.slider')
@endsection
@section('content')

    <!--banners-->
    @include('layouts.partials.banners')
    <!--filter navigation-->
    @include('layouts.partials.carousel')

    <!--Best Sellers-->
    @include('layouts.partials.best_sellers')
    <!--banners-->
    <section class="row clearfix m_bottom_45 m_sm_bottom_35">
        <div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">
            <a href="#" class="d_block banner wrapper r_corners relative m_xs_bottom_30">
                <img src="images/banner_img_1.png" alt="">
                <span class="banner_caption d_block vc_child t_align_c w_sm_auto">
									<span class="d_inline_middle">
										<span class="d_block color_dark tt_uppercase m_bottom_5 let_s">New Collection!</span>
										<span class="d_block divider_type_2 centered_db m_bottom_5"></span>
										<span class="d_block color_light tt_uppercase m_bottom_15 banner_title"><b>Colored Fashion</b></span>
										<span class="button_type_6 bg_scheme_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
									</span>
								</span>
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">
            <a href="#" class="d_block banner wrapper r_corners type_2 relative">
                <img src="images/banner_img_2.png" alt="">
                <span class="banner_caption d_block vc_child t_align_c w_sm_auto">
									<span class="d_inline_middle">
										<span class="d_block scheme_color banner_title type_2 m_bottom_0 m_mxs_bottom_5"><b>-50%</b></span>
										<span class="d_block divider_type_2 centered_db m_bottom_0 d_sm_none"></span>
										<span class="d_block color_light tt_uppercase m_bottom_15 m_md_bottom_5 d_mxs_none">On All<br><b>Sunglasses</b></span>
										<span class="button_type_6 bg_dark_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
									</span>
								</span>
            </a>
        </div>
    </section>
@endsection