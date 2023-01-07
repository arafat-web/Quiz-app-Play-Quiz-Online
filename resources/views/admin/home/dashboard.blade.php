@extends('admin.master')
@php
    $page = 'dashboard'
@endphp
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div>
    <section id="minimal-statistics">
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1 mt-3">
                                    <i class="bx bxl-product-hunt fs-1 text-warning text-start"></i>
                                </div>
                                <div class="text-end flex-grow-1">
                                    <h3>15</h3>
                                    <span>Total Products</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1 mt-3">
                                    <i class="bx bxs-dollar-circle fs-1 text-info text-start"></i>
                                </div>
                                <div class="text-end flex-grow-1">
                                    <h3>278</h3>
                                    <span>Total Sell</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1 mt-3">
                                    <i class="bx bxs-spreadsheet fs-1 text-danger text-start"></i>
                                </div>
                                <div class="text-end flex-grow-1">
                                    <h3>6</h3>
                                    <span>Total Categories</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1 mt-3">
                                    <i class="bx bxs-user-pin fs-1 text-primary text-start"></i>
                                </div>
                                <div class="text-end flex-grow-1">
                                    <h3>1</h3>
                                    <span>Total Customers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
