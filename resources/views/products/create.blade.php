@extends('layouts.admin')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Add New Product</div>
            <div class="panel-body">
            {!! Form::open(['action'=>'ProductsController@store','files'=>'true','method'=>'post','class'=>'form-horizontal']) !!}

            <!--Name-->
                <div class="form-group">
                    {!! Form::label('name', 'Name',['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('name',null, ['class' => 'form-control ','placeholder'=>'Name']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('product_code', 'Product Code',['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('product_code',null, ['class' => 'form-control ','placeholder'=>'Attributes']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('price', 'Price',['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('price',null, ['class' => 'form-control ','placeholder'=>'Categories']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Description',['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::textarea('description',null, ['class' => 'form-control ','placeholder'=>'description','rows'=>3]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('image', 'Image',['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::file('image',null, ['class' => 'form-control ']) !!}
                    </div>
                </div>

                {!! Form::submit('Create',['class'=>'btn btn-primary btn-wide pull-right ' ])!!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection