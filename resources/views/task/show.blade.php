@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header text-white bg-primary">
                    Details of Task {{ $task->name }}
                    <a href="{{ route('task.edit', $task->id) }}" class="btn btn-sm btn-warning float-right">Edit Task</a>
                    <a href="{{ route('task.index') }}" class="btn btn-sm btn-secondary float-right" style="margin-right: 1%">Back to home</a>
                </div>


                <div class="card-body">

                      <div class="form-group">
                          <label class="col-sm-3 control-label">Name: </label>
                          <div class="col-sm-12">
                              <input type="text" name="name" class="form-control" value="{{ $task->name }}" readonly>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-sm-3 control-label">Description: </label>
                          <div class="col-sm-12">
                              <input type="text" name="description" class="form-control" value="{{ $task->description }}" readonly>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-sm-3 control-label">Created at: </label>
                          <div class="col-sm-12">
                              <input type="text" name="description" class="form-control" value="{{ $task->created_at->diffForHumans() }}" readonly>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-sm-6 control-label">Last updated at: </label>
                          <div class="col-sm-12">
                              <input type="text" name="description" class="form-control" value="{{ $task->updated_at->diffForHumans() }}" readonly>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-sm-3 control-label">Created by: </label>
                          <div class="col-sm-12">
                              <input type="text" name="description" class="form-control" value="{{ $task->user->name }}" readonly>
                          </div>
                      </div>


                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
