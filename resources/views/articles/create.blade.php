@extends('app')

@section('content')

    <h1>Write a new Article </h1>

    <hr>

   {!! Form::open(['url' => 'articles']) !!}

    <!-- title form input -->
    <div class="form-group">
        {!! Form::label('title' , 'Title:') !!}
        {!! Form::text('title' , null , ['class' => 'form-control'])!!}
    </div>

    <!-- body form input -->
    <div class="form-group">
        {!! Form::label('body' , 'Body:') !!}
        {!! Form::textarea('body' , null , ['class' => 'form-control'])!!}
    </div>

  <!-- Published_at form input -->
      <div class="form-group">
          {!! Form::label('Published_at' , 'Published On:') !!}
          {!! Form::input('date', 'Published_at', date('Y-m-d'), ['class' => 'form-control'])!!}
      </div>


        <!-- Add Article  submit buton -->
            <div class="form-group">
                {!! Form::submit('Add Article' , ['class' => ' btn btn-primary form-control'])!!}
            </div>

   
    
    {!! Form::close() !!}
@stop