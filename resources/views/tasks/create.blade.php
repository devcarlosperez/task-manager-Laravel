@extends('layouts.segundoapp')

@section('content')
    <h1>Create a new task</h1>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter task name">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" id="description"
                placeholder="Enter task description">
        </div>
        <div class="form-group">
            <label for="priority">Priority</label>
            <select name="priority" id="priority" class="form-control">
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="{{ route('tasks.index') }}">Back to the list of tasks</a>
@endsection
