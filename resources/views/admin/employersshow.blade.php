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

                            <li class="active">Employer Details</li>

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
            <strong class="card-title">Employer</strong>

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
                        {{  $user->id }}
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
                        {{  $user->name }}
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
                        {{  $user->location }}
                    </small>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">
                        Email
                    </label>
                </div>
                <div class="col-12">
                    <small class="form-text text-muted">
                        {{  $user->email }}
                    </small>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">
                        Mobile
                    </label>
                </div>
                <div class="col-12">
                    <small class="form-text text-muted">
                        {{  $user->mobile }}
                    </small>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">
                        Tag line
                    </label>
                </div>
                <div class="col-12">
                    <small class="form-text text-muted">
                        {{  $user->tagline }}
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
                        {{  $user->description }}
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
            <strong class="card-title">Jobs Posted</strong>

        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Posted By</th>
                        <th scope="col">Status</th>
                        {{-- <th scope="col">Won By</th> --}}
                        <th scope="col">Location</th>
                        <th scope="col">Created_at</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                    $count=1
                    @endphp
                    @foreach ($user->tasks as $job)

                    <tr>
                        <th scope="row">{{$count}}</th>
                        <td>{{$job->title}}</td>
                        <td>{{$job->category->name}}</td>
                        <td>{{$job->category->name}}</td>
                        <td>{{$job->status}}</td>
                        {{-- @if ($job->developer)
                        <td>{{$job->developer->name}}</td>

                        @else
                        <td>null</td>
                        @endif --}}
                        <td>{{ $job->location }}</td>
                        <td>{{ $job->created_at->diffForHumans() }}</td>
                        <td> <a href="/admin/jobs/{{ $job->id }}" class="btn btn-success">View</a></td>
                    </tr>
                    @php
                    $count++;
                    @endphp
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="content">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">User Reviews</strong>

        </div>
        <div class="card-body">



            <div class="table-stats order-table ov-h">
                <table class="table ">
                    <thead>
                        <tr>
                            <th class="serial">#</th>

                            <th>ID</th>
                            <th>Reviewer ID</th>
                            <th>Reviewer Name</th>
                            <th>Rating</th>
                            <th>Review</th>

                            <th>Created At </th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $crime=1;
                        @endphp
                        @foreach ($user->reviews()->get() as $review)

                        <tr>
                            <td class="serial">{{$crime}}</td>

                            <td> {{ $review->id }} </td>
                            <td> {{ $review->user->id }} </td>
                            <td> {{ $review->user->name }} </td>
                            <td> {{ $review->rating }} </td>
                            <td> {{ $review->review }} </td>


                            <td>{{\Carbon\Carbon::parse($review->created_at)->diffForhumans() }}</td>

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


{{-- <div class="content">
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
</div> --}}







@endsection