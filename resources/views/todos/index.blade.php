@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Today's Todo!</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Date</th>
                <th scope="col">Done</th>
            </tr>
        </thead>
        <tbody>
            @foreach($todos as $todo)
            <tr>
                <td>{{ $todo->title }}</td>
                <td>{{ $todo->content }}</td>
                <td>{{ $todo->date }}</td>
                <td>
                    <form method="POST" action="/todos/{{ $todo->id }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <button type="submit" class="btn btn-outline-success">Done</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addTodoModal">Add Todo</button>

    @component('todos.addTodoModal')
    @endcomponent
</div>
@endsection