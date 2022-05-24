@extends("layouts.admin")
@section("content")

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="width:100%;">

                                <div class="card-body">
                                    @if(session()->has("success"))
                                    <div class="alert alert-success"> {{session()->get("success")}} </div>
                                    @endif
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>

                                                    <th>Name</th>


                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>IP Address</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>IP Address</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach($users as $user)
                                                <tr>
                                                    <td> {{$loop->iteration}} </td>
                                                    <td>
                                <!-- <img class="img-profile rounded-circle" style="width: 35px;" src="{{ isset($user->profile_pic) ? asset('upload/'.$user->profile_pic) : asset('img/undraw_profile.svg')}}"> -->

                                                        {{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->mobile}}</td>
                                                    <td>{{$user->address}}</td>
                                                    <td>{{$user->ip_address}}</td>
                                                    <td>
                                                        <a id="delete_user" href="{{ route('deleteUser', ['id' => $user->id]) }}" class="btn btn-danger delete_user btn-circle btn-sm"> <i class="fa fa-trash"></i> </a>
                                                        <a id="" href="{{ route('editUser', ['id' => $user->id]) }}" class="btn btn-success btn-circle btn-sm"> <i class="fa fa-edit"></i> </a>
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
                <!-- /.container-fluid -->

@endsection

@section("custom-js")
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

    <script>
        $(document).ready(function(){
            // $("#delete_user").on("click", function(){
            //     return confirm("Are sure to delete this user ?");
            // });

            $(".delete_user").on("click", function(e){
            var link = $(this).attr('href');
            e.preventDefault();
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                
            if (result.isConfirmed) {

            Swal.fire({
                title: 'Deleted!',
                text: 'User has been deleted.',
                icon: 'success',
            })
                
                
                window.location.href= link;
            }else {
                swal.fire({
                    title: "Not deleted!",
                });
            }
})
        })
        })
    </script>


@endsection