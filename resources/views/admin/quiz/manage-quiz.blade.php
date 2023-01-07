@extends('admin.master')
@php
    $page = 'manage-quiz'
@endphp
@section('title')
    Manage Quiz
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Manage Quiz</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Quiz</li>
            </ol>
        </nav>
    </div>
    @if(session()->has('success'))
        <div class="container-fluid">
            <div class="alert w-100 alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    <section class="section">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">
                    Manage Post
                </h5>
                <table id="datatable" class="table table-border table-striped" style="width:100%">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Question</th>
                        <th scope="col">Category</th>
                        <th scope="col">Option 1</th>
                        <th scope="col">Option 2</th>
                        <th scope="col">Option 3</th>
                        <th scope="col">Option 4</th>
                        <th scope="col">Answer</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i = 1; @endphp
                    @foreach($quizzes as $quiz)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$quiz->question}}</td>
                        <td>{{$quiz->cat_name}}</td>
                        <td>{{$quiz->option_1}}</td>
                        <td>{{$quiz->option_2}}</td>
                        <td>{{$quiz->option_3}}</td>
                        <td>{{$quiz->option_4}}</td>
                        <td>{{$quiz->answer}}</td>
                        <td>{{$quiz->status === 1 ? 'Published' : 'Unpublished'}}</td>
                        <td>
                            <a href="#" class="btn-sm btn btn-warning">
                                <i class="bx bx-edit"></i>
                            </a>
                            <a href="{{route('delete.product', ['id'=>$product->id])}}" class="btn-sm btn btn-danger">
                                <i class="bx bxs-trash-alt"></i>
                            </a>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.j
    s"></script>
    <script>
        $(document).ready(function () {
            $('#datatable').DataTable({
                "order": [
                    [0, "desc"]
                ]
            });
        });
    </script>
@endsection
