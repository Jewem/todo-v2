@extends('layout')



@section('title','Ma todo-liste - TODOLIST Organizer')



@section('content')
<!-- todolist.content -->

    <h1>Ma TODO liste</h1>

    @include('parts.menu')

    <ul>
        @foreach ($tasks as $task)
            <li>
                <a href="{!! url('todolist/' . $task->id) !!}">{{ $task->task }}</a> <a href="{!! url('todolist/' . $task->id . '/edit') !!}">Éditer</a>
            </li>
        @endforeach
    </ul>

    <a href="{!! url('todolist/create') !!}">Nouvelle tâche</a>

<!-- /todolist.content -->
@endsection
