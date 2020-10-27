@extends('layouts.adminlayout')
@section('content')
<!-- Animated -->
<div class="content">
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7s-cash"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ count($categories) }}</span></div>
                                    <div class="stat-heading">Categories</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="pe-7s-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ count($employers) }}</span></div>
                                    <div class="stat-heading">Employers </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-3">
                                <i class="pe-7s-browser"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ count($jobs) }}</span></div>
                                    <div class="stat-heading">Jobs</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-4">
                                <i class="pe-7s-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ count($users) }}</span></div>
                                    <div class="stat-heading">Users</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







    </div>
    <div class="content">
        <div class="card">
            <div class="card-header">
                <strong class="card-title"> Recent Jobs</strong>

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
                        @foreach ($jobs as $job)

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

</div>
<!-- .animated -->
@endsection