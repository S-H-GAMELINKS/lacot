@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Today's Todo!</h1>

    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addTodoModal">Add Todo</button>

    @component('todos.addTodoModal')
    @endcomponent
</div>
@endsection