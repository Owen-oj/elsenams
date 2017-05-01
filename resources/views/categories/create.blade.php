@extends('layouts.admin')

@section('content')

    <div class="col-md-8 col-md-offset-2">
        <section class="panel">
            <div class="panel-heading">Add New Category</div>
            <div class="panel-body">
            {!! Form::open(['action'=>'CategoriesController@store','files'=>'true','method'=>'post','class'=>'form-horizontal']) !!}

            <!--Name-->
                <div class="form-group">
                    {!! Form::label('name', 'Name',['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('name',null, ['class' => 'form-control ','placeholder'=>'Name']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('plan_id', 'Parent',['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::select('plan_id',[],null, ['class' => 'form-control ','placeholder'=>'Name']) !!}
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

                {!! Form::submit('Add',['class'=>'btn btn-primary btn-wide pull-right ' ])!!}

                {!! Form::close() !!}
            </div>
        </section>
    </div>

@endsection