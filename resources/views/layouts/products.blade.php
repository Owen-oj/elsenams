@extends('layouts.site')
@section('content')
    <div class="row clearfix">
        <!--left content column-->
        <section class="col-lg-9 col-md-9 col-sm-9">
            @yield('products')
            <hr class="m_bottom_10 divider_type_3">
            @include('layouts.partials._products_paginate')
        </section>
        <!--right column-->
        @include('layouts.partials.aside')
    </div>

@endsection