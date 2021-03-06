@extends('layouts.layout')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid" style="">
            <!-- Breadcrumbs-->

            <!-- Area Chart Example-->

            <div class="row"  style="height: 500px;">

                <div class="col-lg-12" style="">
                    <!-- Example Bar Chart Card-->
                    <div class="card mb-3" style="height: 100%;background-image: url(../image/SVSF-Logo.png);
            background-repeat: no-repeat;
            background-size: 500px 470px;background-position: center; ">

                        <div class="card-body">
                            <div class="row"  style="margin-top: 11%">
                                <div class="col-md-12 text-center my-auto">
                                    <h1>Welcome to</h1>
                                </div>
                                {{--<div class="col-sm-4 text-center my-auto">--}}
                                {{--<div class="h4 mb-0 text-primary">$34,693</div>--}}
                                {{--<div class="small text-muted">YTD Revenue</div>--}}
                                {{--<hr>--}}
                                {{--<div class="h4 mb-0 text-warning">$18,474</div>--}}
                                {{--<div class="small text-muted">YTD Expenses</div>--}}
                                {{--<hr>--}}
                                {{--<div class="h4 mb-0 text-success">$16,219</div>--}}
                                {{--<div class="small text-muted">YTD Margin</div>--}}
                                {{--</div>--}}
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center my-auto">
                                    <h1>Personality</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center my-auto">
                                    <h1>Type Indicator</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center my-auto text-primary">
                                    <h1><a style="width: 250px; font-size: 26px; color: #000;" class="btn btn-primary" href="{{url('/exam')}}">BEGIN TEST</a></h1>
                                    {{--<button data-toggle="modal" data-target="#exampleModal">modal</button>--}}
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