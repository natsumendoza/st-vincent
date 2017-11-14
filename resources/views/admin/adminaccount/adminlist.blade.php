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
                            <i class="fa fa-table"></i> List of admin accounts</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @if(count($admins) > 0)
                                        @foreach($admins as $admin)
                                            <tr>
                                                <td>{{$admin['username']}}</td>
                                                <td>{{$admin['password']}}</td>
                                                <td>
                                                    <a class="btn btn-success" href="{{action('AdminAccountController@edit', base64_encode($admin['id']))}}">Edit</a>
                                                    <form action="{{action('AdminAccountController@destroy', base64_encode($admin['id']))}}" method="post">
                                                        {{csrf_field()}}
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button class="btn btn-small btn-danger" type="submit">Delete</button>
                                                    </form>
                                                </td>
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