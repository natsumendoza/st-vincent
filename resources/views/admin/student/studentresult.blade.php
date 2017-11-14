@extends('admin/layouts/layout')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid" style="">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-table"></i> Results</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>LRN</th>
                                        <th>Name</th>
                                        <th style="text-align: center" colspan="8">Percentage</th>
                                        <th>Interpretation</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>E</th>
                                        <th>I</th>
                                        <th>S</th>
                                        <th>N</th>
                                        <th>T</th>
                                        <th>F</th>
                                        <th>P</th>
                                        <th>J</th>
                                        <th></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @if(count($studentResults) > 0)
                                        @foreach($studentResults as $studentResult)
                                            <tr>
                                                <td>{{$studentResult->lrn}}</td>
                                                <td>{{$studentResult->name}}</td>

                                                <td>{{$studentResult->e_percentage}}</td>
                                                <td>{{$studentResult->i_percentage}}</td>
                                                <td>{{$studentResult->s_percentage}}</td>
                                                <td>{{$studentResult->n_percentage}}</td>
                                                <td>{{$studentResult->t_percentage}}</td>
                                                <td>{{$studentResult->f_percentage}}</td>
                                                <td>{{$studentResult->p_percentage}}</td>
                                                <td>{{$studentResult->j_percentage}}</td>

                                                <td>{{$studentResult->interpretation}}</td>
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