@extends('layouts.layout')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid" style="">
            <!-- Breadcrumbs-->

            <!-- Area Chart Example-->
            <div class="row" style="">
                <div class="col-md-12 text-center my-auto">
                    <h1>RESULTS:</h1>
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
                                            <h2>ENERGY:</h2>
                                            <canvas id="energyBarChart" width="500" height="50"></canvas>
                                            <h2 style="margin-top: 20px;">INFORMATION:</h2>
                                            <canvas id="informationBarChart" width="500" height="50"></canvas>
                                            <h2 style="margin-top: 20px;">DECISION MAKING:</h2>
                                            <canvas id="decisionMakingBarChart" width="500" height="50"></canvas>
                                            <h2 style="margin-top: 20px;">LEARNING STYLE:</h2>
                                            <canvas id="learningStyleBarChart" width="500" height="50"></canvas>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12 my-auto text-center text-primary">
                                    <h1 style="color: #000040;"><span style="color: #000;">PERSONALITY TYPE: </span>{{$combinationFetched}}</h1>
                                </div>
                            </div>
                            <div style="margin-top: 20px" class="row">

                                @php
                                    $careers = explode(",", $combinationData['careers']);
                                    $count = 1;
                                @endphp

                                <div class="col-md-12 text-center my-auto">
                                    <h3 style="color: #000040;"><span style="color: #000;">INTERPRETATION: </span>{{$combinationData['interpretation']}}</h3>

                                    <h3 style="color: #000;margin-top: 20px">POSSIBLE CAREER:</h3>
                                    <ul style="list-style: none;">
                                        @foreach($careers as $career)
                                            <li style="font-size: 22px; color: #000040;">{{$count++}}. {{$career}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div style="margin-top: 50px" class="row">
                                <div class="col-md-12 my-auto text-center text-primary">
                                    <h2 style="color: #000040;">*Please see the guidance counselor for career counseling*</h2>
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