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
                        <div class="card-header text-white bg-primary">
                            Edit {{ $task->name }}
                            <a href="{{ route('task.index') }}" class="btn btn-sm btn-secondary float-right">Back to home</a>
                        </div>
                        <br>
                        
                        <form  action="{{ route('task.update', $task->id) }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                            <div class="form-group">
                                <label class="col-sm-6 control-label">Name: </label>
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" value="{{ $task->name }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-6 control-label">Description: </label>
                                <div class="col-sm-12">
                                    <input type="text" name="description" class="form-control" value="{{ $task->description }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-block btn-md btn-success">
                                        Update Task
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection
