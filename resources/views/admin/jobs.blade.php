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

                            <li class="active">Jobs</li>

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
            <strong class="card-title">Jobs</strong>

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


{{-- my modals go here --}}

<div class="modal fade " id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
    style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">New Crime Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">

                    <div class="card-body card-block">
                        <form id="station-form" action="crimes" method="post">
                            @csrf
                            <div class="form-group"><label for="company" class=" form-control-label">Type</label><input
                                    type="text" name="name" id="company" placeholder="" class="form-control" required>
                            </div>
                            <div class="form-group"><label for="company" class=" form-control-label">Details</label>
                                <textarea name="details" id="textarea-input" rows="9" placeholder="Content..."
                                    class="form-control"></textarea>

                            </div>



                        </form>
                    </div>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="event.preventDefault();
                document.getElementById('station-form').submit();" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

@endsection