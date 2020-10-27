@extends('layouts.adminlayout')
@section('content')

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>

                            <li class="active">Job Details</li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Job</strong>

        </div>
        <div class="card-body">

            <div class="row">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">
                        #ID
                    </label>
                </div>
                <div class="col-12">
                    <small class="form-text text-muted">
                        {{  $job->id }}
                    </small>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">
                        Name
                    </label>
                </div>
                <div class="col-12">
                    <small class="form-text text-muted">
                        {{  $job->title }}
                    </small>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">
                        Location
                    </label>
                </div>
                <div class="col-12">
                    <small class="form-text text-muted">
                        {{  $job->location }}
                    </small>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">
                        Posted By
                    </label>
                </div>
                <div class="col-12">
                    <small class="form-text text-muted">
                        {{  $job->user->name }}
                    </small>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">
                        Status
                    </label>
                </div>
                <div class="col-12">
                    <small class="form-text text-muted">
                        {{  $job->status }}
                    </small>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">
                        Category
                    </label>
                </div>
                <div class="col-12">
                    <small class="form-text text-muted">
                        {{  $job->category->name }}
                    </small>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">
                        Description
                    </label>
                </div>
                <div class="col-12">
                    <small class="form-text text-muted">
                        {{  $job->category->name }}
                    </small>
                </div>
            </div>
            <hr>



        </div>

    </div>
</div>



<div class="content">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Job Applications</strong>

        </div>
        <div class="card-body">



            <div class="table-stats order-table ov-h">
                <table class="table ">
                    <thead>
                        <tr>
                            <th class="serial">#</th>

                            <th>ID</th>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Created At </th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $crime=1;
                        @endphp
                        @foreach ($job->bids as $bid)

                        <tr>
                            <td class="serial">{{$crime}}</td>

                            <td> {{ $bid->id }} </td>
                            <td> {{ $bid->user->name }} </td>
                            <td> {{ $bid->details }} </td>

                            <td>{{\Carbon\Carbon::parse($bid->created_at)->diffForhumans() }}</td>

                        </tr>
                        @php
                        $crime++;
                        @endphp
                        @endforeach


                    </tbody>
                </table>
            </div> <!-- /.table-stats -->







        </div>
    </div>
</div>







@endsection