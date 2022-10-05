@extends('layouts.app')

@section('content')
    <h1>Todo List</h1>
    <div class="col-lg-12">
        <form action="{{ route('todo.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <input class="form-control" name="title" type="text" placeholder="Deafalut input" aria-label="Enter Task">
                    </div>
                </div>
                <div class="col-lg-4">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>

    </div>
@endsection

@push('css')
    <style>
        h1 {
            color: rgb(54, 54, 228);
            font-size: 50px;
            text-align: center;
        }

        input {
            margin-left: 50px;
        }
    </style>
@endpush
