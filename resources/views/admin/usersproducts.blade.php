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
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>SKU</th>
                                    <th>Serial #</th>
                                    <th>Date of Purchase</th>
                                    <th>Country of Purchase</th>
                                    <th>Dealer Name</th>
                                    <th>Expiry</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>SKU</th>
                                    <th>Serial #</th>
                                    <th>Date of Purchase</th>
                                    <th>Country of Purchase</th>
                                    <th>Dealer Name</th>
                                    <th>Expiry</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                @foreach($myProducts as $myProduct)
{{--                                    {{dd($myProduct->expiry)}}--}}
                                    <tr>
{{--                                        <td> {{$loop->iteration}} </td>--}}
                                        <td>{{$myProduct->user_name}}</td>
                                        <td class="text-center">
                                          <img src="{{ $myProduct->image }}"  class="rounded" width="100" alt="">
                                        </td>
                                        <td>{{$myProduct->sku}} </td>
                                        <td>{{$myProduct->serial_no}} </td>
                                        <td>{{date('F d, Y', strtotime($myProduct->date_of_purchase))}} </td>
                                        <td>{{$myProduct->country_name}} </td>
                                        <td>{{$myProduct->dealer_name}} </td>
                                        <td>{{date('F d, Y', strtotime($myProduct->expiry))}} </td>
                                        <td>
                                            <a id="deleteproduct" href="{{ route('deleteproduct', ['id' => $myProduct->product_id]) }}" class="deleteproduct btn btn-danger btn-sm btn-circle">
                                                <i class="fa fa-trash"></i>
                                            </a>
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
    <script src="{{ asset('assets/dropify/js/dropify.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>


    <script>
        $(document).ready(function(){
            // $('#dataTable').DataTable();
            $('#dataTable').DataTable({
                dom: 'Bfrtip',
                buttons:[

                ]
            });

            $(".deleteproduct").on("click", function(e){
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
                            text: 'Your file has been deleted.',
                            icon: 'success',
                        })


                        window.location.href= link;
                    }else {
                        swal.fire({
                            title: "Your product is safe!",
                        });
                    }
                })
            })
            // alert("ok")
            // $('.dropify').dropify();
            $(".image_url_add").on("keyup", function(){
                var url = $(this).val();
                $("#show_image_add").attr("src", url);
            })

            $(".image_url").on("keyup", function(){
                var url = $(this).val();
                $(".show_image").attr("src", url);
            })
        });
    </script>
@endsection
