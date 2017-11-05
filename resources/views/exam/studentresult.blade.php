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
                    <div class="card mb-3" style="height: 100%;">

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
                                            <canvas id="myBarChart" width="100" height="50"></canvas>
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
                                <div class="col-md-12 text-center my-auto text-primary">
                                    <h3>{{$combinationData['interpretation']}}</h3>
                                    <ul style="list-style: none;">
                                        <li>1. {{$combinationData['career_1']}}</li>
                                        <li>2. {{$combinationData['career_2']}}</li>
                                        <li>3. {{$combinationData['career_3']}}</li>
                                        <li>4. {{$combinationData['career_4']}}</li>
                                        <li>5. {{$combinationData['career_5']}}</li>
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