@extends('layouts.layout')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid" style="">
        <!-- Breadcrumbs-->

        <!-- Area Chart Example-->

        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-3 text-center" style="height: 100%;">
                    <img height="500" width="500" style="margin: 0 auto;" class="img-polaroid" src="{{URL::asset('/image/SVSF-Logo.JPG')}}">

                </div>

            </div>

            <div class="col-lg-6">
                <!-- Example Bar Chart Card-->
                <div class="card mb-3" style="height: 100%;">

                    <div class="card-body">
                        <div class="row" style="margin-top: 17%;">
                            <div class="col-md-12 text-center my-auto">
                                <h2 class="h-style">Are you a</h2>
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
                            <div class="col-md-12 text-center my-auto text-primary">
                                <h2 id="guidance" class="ph-style"><a href="{{url('/login')}}">Guidance Counselor</a></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center my-auto">
                                <h2>or a</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center my-auto text-primary">
                                <h2 id="student" style="margin-bottom: 5%;" class="ph-style"><a href="{{url('/studentlogin')}}">Student</a></h2>
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