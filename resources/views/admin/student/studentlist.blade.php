@extends('admin/layouts/layout')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid" style="">
            @if (\Session::has('success'))
                <div class="alert alert-success text-center">
                    <p>{{ \Session::get('success') }}</p>
                </div><br />
            @endif
            <div class="row">
                <div class="col-lg-12">

                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-table"></i> List of students</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Section</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        @if(count($students) > 0)
                                            @foreach($students as $student)
                                                <tr>
                                                    <td><a href="{{url('/studentprofile/'.$student['id'])}}">{{$student['first_name'].' '.$student['middle_name'] . ' ' .$student['last_name']}}</a></td>
                                                    <td>{{$student['grade']}}</td>
                                                    <td>{{$student['section']}}</td>
                                                    <td><a class="btn btn-success" href="{{action('StudentController@edit', base64_encode($student['id']))}}">Edit</a></td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection