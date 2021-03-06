@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{__('task_statuses.create_header')}}</h2>
        {{ Form::model($status, ['url' => route('task_statuses.store')]) }}
            @include('task_statuses.form') <br>
            {{ Form::submit(__('task_statuses.button_create'), ['class' => 'btn btn-secondary btn-sm']) }}
        {{ Form::close() }}
    </div>
@endsection