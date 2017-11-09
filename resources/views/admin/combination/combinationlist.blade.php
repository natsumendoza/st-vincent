@extends('admin/layouts/layout')

@section('content')

    <div class="content-wrapper">
        @if (\Session::has('success'))
            <div class="alert alert-success text-center">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif
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
                                        <th>Combination</th>
                                        <th>Interpretation</th>
                                        <th>Careers</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    @php
                                        $count = 1;
                                    @endphp

                                    <tbody>
                                        @foreach($combinations as $combination)
                                            <tr>
                                                <td>{{$combination['combination']}}</td>
                                                <td>{{$combination['interpretation']}}</td>
                                                <td>
                                                    <ul style="list-style: none;">
                                                        @foreach(explode(',', $combination['careers']) as $career)
                                                            <li>{{$count++}}. {{$career}}</li>
                                                        @endforeach
                                                            @php
                                                                $count = 1;
                                                            @endphp
                                                        <li><a href="{{action('CombinationController@edit', $combination['id'] . '_add')}}" class="btn btn-success">Add career</a></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <a href="{{action('CombinationController@edit', $combination['id'] . '_edit')}}" class="btn btn-warning">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
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