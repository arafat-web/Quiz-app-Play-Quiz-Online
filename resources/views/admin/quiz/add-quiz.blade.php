@extends('admin.master')
@php
    $page = 'manage-categories'
@endphp
@section('title')
    Manage Categories
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Add New Quiz</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New Quiz</li>
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
                    Add New Quiz </h5>
                <form class="add-form" action="{{route('save.quiz')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 mt-3">
                        <label for="question">Question:</label>
                        <input type="text" value="" class="form-control" id="question" placeholder="Enter Question"
                               name="question" required>
                    </div>
                    <div class="mb-4">
                        <label for="qcat">Category:</label>
                        <select class="form-control" name="qcat" id="qcat" required>
                            <option selected disabled>Select Category</option>
                            @foreach($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="opt1">Option 1:</label>
                        <input type="text" value="" class="form-control" id="opt1" placeholder="Enter Option 1"
                               name="opt1" required>
                    </div>
                    <div class="mb-4">
                        <label for="opt2">Option 2:</label>
                        <input type="text" value="" class="form-control" id="opt2" placeholder="Enter Option 2"
                               name="opt2" required>
                    </div>
                    <div class="mb-4">
                        <label for="opt3">Option 3:</label>
                        <input type="text" value="" class="form-control" id="opt3" placeholder="Enter Option 3"
                               name="opt3" required>
                    </div>
                    <div class="mb-4">
                        <label for="opt4">Option 4:</label>
                        <input type="text" value="" class="form-control" id="opt4" placeholder="Enter Option 4"
                               name="opt4" required>
                    </div>

                    <div class="mb-4">
                        <label for="answer">Answer:</label>
                        <input type="text" value="" class="form-control" id="answer" placeholder="Enter Answer"
                               name="answer" required>
                    </div>
                    <div class="mb-4">
                        <label for="status">Status:</label>
                        <select class="form-control" name="status" id="status" required>
                            <option selected disabled>Select Status</option>
                            <option value="1">Publish</option>
                            <option value="2">Unpublish</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>
            </div>
        </div>
    </section>
@endsection
