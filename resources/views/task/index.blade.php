@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card-body">
                    <div class="card">
                        <div class="card-header text-white bg-primary">Add Task</div>
                        <div class="card-body">

                        <form  action="{{ route('task.store') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                            {{-- <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" class="form-control"> --}}

                            <div class="form-group">
                                <label class="col-sm-6 control-label">Name: </label>
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-6 control-label">Description: </label>
                                <div class="col-sm-12">
                                    <input type="text" name="description" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-block btn-md btn-success">
                                        Add Task
                                    </button>
                                </div>
                            </div>
                        </form>

                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="card">

                <div class="card-body">

                    <div class="card">
                        <div class="card-header text-white bg-primary">Current Task</div>
                        <div class="card-body">
                            <table class="table overlay">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Description</th>
                                  <th scope="col">Created By</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @forelse($tasks as $task)
                                <tr>
                                  <th scope="row"></th>
                                  <td>{{ $task->name }}</td>
                                  <td>{{ $task->description }}</td>
                                  <td>{{ $task->user->name }}</td>
                                  <td>
                                    <a href="{{ route('task.show', $task->id) }}" class="btn btn-sm btn-primary">Details</a>
                                    <a href="{{ route('task.edit', $task->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                    <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">
                                             Delete
                                            </button>
                                    </form>
                                  </td>
                                </tr>

                                @empty
                                @endforelse
                              </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
