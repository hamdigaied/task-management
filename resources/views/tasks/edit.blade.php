@extends('layout')

@section('actions')
    <a class="btn btn-primary mb-4" type="button" href="{{ route('tasks.index') }}">Back</a>
@endsection

@section('content')
    <form method="POST" action="{{ route('tasks.update', ['task' => $task->id]) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="task-name" class="form-label mb-0">Task name</label>
            <input class="form-control" value="{{ $task->name }}" id="task-name" type="text" name="name" placeholder="Task name">
        </div>
        <div class="mb-3">
            <label for="priority" class="form-label mb-0">Priority</label>
            <select class="form-select" id="priority" name="priority">
                @foreach ($priorities as $priority)
                    <option @if ($task->priority == $priority) selected @endif value="{{ $priority }}">{{ $priority }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="project" class="form-label mb-0">Associated project</label>
            <select class="form-select" id="project" name="project_id">
                @foreach ($projects as $project)
                    <option @if ($task->project_id == $project->id) selected @endif value="{{ $project->id }}">{{ $project->name }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary" type="submit">Update</button>
    </form>
@endsection