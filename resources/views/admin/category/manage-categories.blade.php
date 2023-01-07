@extends('admin.master')
@php
    $page = 'manage-categories'
@endphp
@section('title')
    Manage Categories
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Manage Categories</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Categories</li>
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
        <div class="row">
            <div class="col-md-6 col-sm-6 col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">

                        @if( isset($edit) && $edit  === 'true')
                            <h5 class="card-title fw-bold">
                                Update Category
                            </h5>
                            <form class="add-form" action="{{route('update.category')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-2 mt-3">
                                    <input type="hidden"
                                           value="{{$category->id}}"
                                           name="id">
                                    <label for="cat_name">Name:</label>
                                    <input type="text" class="form-control" value="{{$category->cat_name}}" id="cat_name"
                                           placeholder="Enter Category Name" name="cat_name" required>
                                </div>
                                <div class="mb-2">
                                    <label for="cat_anim">Animation:</label>
                                    <select class="form-control" name="cat_anim" id="cat_anim" required>
                                        <option selected disabled>Select Animation</option>
                                        <option value="1">{{$category->cat_anim}}</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="cat_img">Image:</label>
                                    <input type="file" class="form-control" id="cat_img"  name="cat_img" required>
                                    <img class="img_fluid d-block mt-3" width="54px" height="54px" src="{{asset($category->cat_img)}}" alt="{{$category->cat_name}}">
                                    <input type="hidden"
                                           value="{{$category->cat_img}}"
                                           name="img_path">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-warning">Reset</button>
                            </form>
                        @else
                            <h5 class="card-title fw-bold">
                                Add Category
                            </h5>
                            <form class="add-form" action="{{route('add.category')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-2 mt-3">
                                    <input type="hidden" value="" name="cat_id">
                                    <label for="cat_name">Name:</label>
                                    <input type="text" class="form-control" id="cat_name"
                                           placeholder="Enter Category Name" name="cat_name" required>
                                </div>
                                <div class="mb-2">
                                    <label for="cat_img">Image:</label>
                                    <input type="file" class="form-control" id="cat_img"  name="cat_img" required>
                                </div>
                                <div class="mb-2">
                                    <label for="cat_anim">Animation:</label>
                                    <select class="form-control" name="cat_anim" id="cat_anim" required>
                                        <option selected disabled>Select Animation</option>
                                        <option value="jello">Jello</option>
                                        <option value="tada">Tada</option>
                                        <option value="rotateIn">RotateIn</option>
                                        <option value="wobble">Wobble</option>
                                        <option value="flip">Flip</option>
                                        <option value="hinge">Hinge</option>
                                    </select>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-warning">Reset</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-3 fw-bold">Categories</h5>

                        <table class="table text-center table-bordered table-hover bg-white">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Animation</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i = 1; @endphp
                            @foreach($categories as $cat)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$cat->cat_name}}</td>
                                    <td>{{$cat->cat_anim}}</td>
                                    <td><img src="{{asset($cat->cat_img)}}"></td>
                                    <td>
                                        <a class="btn btn-sm btn-warning"
                                           href="{{route('edit.category', ['id'=>$cat->id])}}">
                                            <i class='bx bx-edit'></i>
                                        </a>
                                        <a class="btn btn-sm btn-danger"
                                           href="{{route('delete.category', ['id'=>$cat->id])}}"
                                           onclick="return confirm('Are Sure Wants Delete This!!')"
                                        >
                                            <i class='bx bxs-trash-alt'></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
