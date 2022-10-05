@extends('layouts.app')

@section('content')
    <h1>Todo List</h1>
    <div class="col-lg-12 mt-5" id="form_Style">
        <form action="{{ route('todo.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <input class="form-control" name="title" type="text" placeholder="Deafalut input"
                            aria-label="Enter Task">
                    </div>
                </div>
                <div class="col-lg-4" id="button_style">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-12 mt-5">
        <div id="table_style">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $key => $task)
                        <tr>
                            <th scope="row">{{ $key++ }}</th>
                            <td>{{ $task->title }}</td>
                            <td>
                                @if ($task->done == 0)
                                    <span class="badge bg-warning">Not Completed</span>
                                @else
                                    <span class="badge bg-success">Completed</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('todo.delete', $task->id) }}" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                                <a href="{{ route('todo.done', $task->id) }}" class="btn btn-success">
                                    <i class="fas fa-check-circle"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
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

        #form_Style {
            width: 80%;
            left: 0;
            right: 0;
            margin: auto;
        }

        #button_style {
            padding-left: 70px;
        }

        #table_style {
            width: 80%;
            left: 0;
            right: 0;
            margin: auto;
            position: relative;
        }
    </style>
@endpush
