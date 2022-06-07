@extends("layouts.admin")
@section("content")

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="width:100%;">

                                <div class="card-body">
                                    
                                    @if(session()->has("success"))
                                        <div class="alert alert-success"> 
                                            {{session()->get("success")}} 
                                        </div>
                                    @endif

                                    @if(session()->has("error"))
                                        <div class="alert alert-danger"> 
                                            {{session()->get("error")}} 
                                        </div>
                                    @endif

                                    {{-- @if(!empty($success))
                                        <div class="alert alert-success mx-auto mt-5" style="width: 50%;">
                                            {{ $success }}
                                        </div>
                                    @endif

                                    @if(!empty($error))
                                        <div class="alert alert-success mx-auto mt-5" style="width: 50%;">
                                            {{ $error }}
                                        </div>
                                    @endif --}}

                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            {{-- <tfoot>
                                                <tr>
                                                    <th>Id</th>                               
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot> --}}
                                            <tbody>   
                                                @if(count($results) != 0)

                                                    @foreach($results as $result)
                                                    <tr>
                                                        <td> {{$result->id}} </td>  
                                                        <td>{{$result->email}}</td>
                                                        <td >
                                                            <a id="delete_user" href="{{ route('del-subscriber', encrypt(['id' => $result->id])) }}" 
                                                            class="btn btn-danger delete_user 
                                                            btn-circle btn-sm"> 
                                                            <i class="fa fa-trash"></i> </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                @else
                                                <tr>
                                                    <p>No Data Found</p>
                                                </tr>
                                               @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@endsection