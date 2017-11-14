@extends('layouts.layout')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid" style="">
            <!-- Breadcrumbs-->

            <!-- Area Chart Example-->
            <div class="row" style="">
                <div class="col-md-12 text-center my-auto">
                    <h1>RESULT:</h1>
                </div>
            </div>

            <div class="row" style="">

                <div class="col-lg-12">
                    <!-- Example Bar Chart Card-->
                    <div class="card mb-3" style="height: 100%; background-image: url(../image/SVSF-Logo.png);
            background-repeat: no-repeat;
            background-size: 500px 470px;background-position: center;">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Example Bar Chart Card-->
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <input type="hidden" id="J" value="{{$J}}" />
                                            <input type="hidden" id="P" value="{{$P}}" />
                                            <input type="hidden" id="F" value="{{$F}}" />
                                            <input type="hidden" id="T" value="{{$T}}" />
                                            <input type="hidden" id="N" value="{{$N}}" />
                                            <input type="hidden" id="S" value="{{$S}}" />
                                            <input type="hidden" id="E" value="{{$E}}" />
                                            <input type="hidden" id="I" value="{{$I}}" />
                                            <canvas id="myBarChart" width="150" height="50"></canvas>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12 text-center my-auto text-primary">
                                    <h1>{{$combinationFetched}}</h1>
                                </div>
                            </div>
                            <div class="row">

                                @php
                                    $careers = explode(",", $combinationData['careers']);
                                    $count = 1;
                                @endphp

                                <div class="col-md-12 text-center my-auto text-primary">
                                    <h3>{{$combinationData['interpretation']}}</h3>
                                    <ul style="list-style: none;">
                                        @foreach($careers as $career)
                                            <li>{{$count++}}. {{$career}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.container-fluid-->
                <!-- /.content-wrapper-->
                <footer class="sticky-footer">
                    <div class="container">
                        <div class="text-center">
                            {{--<small>Copyright © Your Website 2017</small>--}}
                        </div>
                    </div>
                </footer>
                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fa fa-angle-up"></i>
                </a>
                <!-- Logout Modal-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="login.html">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
@endsection