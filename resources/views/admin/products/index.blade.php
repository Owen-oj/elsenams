@extends('layouts.admin')

@section('content')

    <!-- page start-->
    <section class="panel">
        <header class="panel-heading">
            Products
        </header>
        <div class="panel-body">
            <div class="adv-table editable-table ">
                <div class="clearfix">
                    <div class="btn-group">
                        <a href="{{route('products.create')}}" id="editable-sample_new" class="btn green">
                            Add New <i class="icon-plus"></i>
                        </a>
                    </div>
                    <div class="btn-group pull-right">
                        <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">Print</a></li>
                            <li><a href="#">Save as PDF</a></li>
                            <li><a href="#">Export to Excel</a></li>
                        </ul>
                    </div>
                </div>
                <div class="space15"></div>
                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($products->isEmpty())
                        <tr><td colspan="4">No data</td></tr>
                    @else
                        @foreach($products as $product)
                            <tr class="">
                                <td>{{$product->name}}</td>
                                <td>{{$product->code}}</td>
                                <td>{{$product->price}}</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- page end-->

@endsection
@push('scripts')
<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
</script>
@endpush