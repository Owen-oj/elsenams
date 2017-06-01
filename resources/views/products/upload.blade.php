@extends('layouts.admin')
@section('content')
    <div class="padding p-b-0">
        <div class="page-title m-b">
            <h1 class="inline m-a-0">Upload Pictures</h1>
            @if(isset($product_id))
                <a href="{{route('products.edit',$product_id)}}" class="btn btn-primary">Edit Product</a>
            @endif

        </div>
        <input id="input-700" name="file" type="file" multiple class="file-loading">
    </div>


@endsection
@push('scripts')
    <script>
        $("#input-700").fileinput({
            uploadUrl: "{{route('products.upload')}}", // server upload action
            uploadAsync: true,
            maxFileCount: 5,
            browseOnZoneClick:true,
            fileActionSettings:{showZoom:false},
            uploadExtraData:{_token:'{{csrf_token()}}',
                product_id:'{{$product_id}}',
            }
        });
    </script>
@endpush