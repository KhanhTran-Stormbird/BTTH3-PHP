@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Task</h1>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="long_description">Long Description:</label>
                <textarea class="form-control" id="long_description" name="long_description"></textarea>
            </div>
            <div class="form-group form-check">
                <input type="hidden" name="completed" value="0">
                <input type="checkbox" class="form-check-input" id="completed" name="completed" value="1" {{ $task->completed ? 'checked' : '' }}>
                <label class="form-check-label" for="completed">Completed</label>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
