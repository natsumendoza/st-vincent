@extends('admin/layouts/layout')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid" style="">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-table"></i> List of students</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Grade</th>
                                        <th>Section</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        @if(count($students) > 0)
                                            @foreach($students as $student)
                                                <tr>
                                                    <td>{{$student['name']}}</td>
                                                    <td>{{$student['grade']}}</td>
                                                    <td>{{$student['section']}}</td>
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