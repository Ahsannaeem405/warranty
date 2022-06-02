@extends("layouts.admin")


@section("content")
 <!-- Begin Page Content -->
 <div class="container-fluid">

<div class="row">
    <div class="col-12">

        <button type="button" class="btn btn-primary float-right my-2" data-toggle="modal" data-target="#exampleModal">
           Add Product
          </button>
          <button type="button" class="btn btn-success float-right my-2 mx-2" data-toggle="modal" data-target="#exampleModalCSV">
           Import CSV
          </button>
          <a download="sample_csv.csv" href="{{asset('sample_csv.csv')}}" class="btn btn-danger text-white float-right my-2" >
           Donwload CSV Sample
          </a>
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
                                <th>Image</th>
                                <th>Price</th>
                                <th>SKU</th>
                                <th>Serial #</th>
                                <th>Purchased</th>
                                <th>Expiry</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>SKU</th>
                                <th>Serial #</th>
                                <th>Purchased</th>
                                <th>Expiry</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td> {{$loop->iteration}} </td>
                                <td>{{$product->name}}</td>
                                <td class="text-center">
                                    <a href="{{ $product->image }}" target="_blank">
                                    <img src="{{ $product->image }}"  class="rounded" width="100" alt="">
                                    </a>
                                </td>
                                <td>${{ $product->price }}</td>
                                <td>{{$product->sku}} </td>
                                <td>{{$product->serial_no}} </td>
                                <td>{{\Carbon\Carbon::create($product->purchased_date)->format("d M, Y")}} </td>
                                <td>{{\Carbon\Carbon::create($product->expiry_date)->format("d M, Y")}} </td>
                                <td>
                                    <a id="deleteproduct" href="{{ route('deleteproduct', ['id' => $product->id]) }}" class="deleteproduct btn btn-danger btn-sm btn-circle">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <button type="button" class="btn btn-primary btn-sm btn-circle" data-toggle="modal" data-target="#exampleModal{{$loop->iteration}}">
                                    <i class="fa fa-edit"></i>
                                    </button>
                                    <!-- <a id="deleteproduct" href="{{ route('deleteproduct', ['id' => $product->id]) }}" class="btn btn-primary">
                                    </a> -->
                                </td>

                                <div class="modal fade" id="exampleModal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="{{ route('save.product') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 py-1">
                                    <label for="" class="pb-0">Product Image URL</label>
                                    <input name="file" type="text" value="{{ $product->image }}" class="form-control image_url" data-height="100" required />
                                    <img id="show_image" border="2" width="100px;" class="m-2 show_image" src="{{ $product->image }}" alt="">
                                </div>
                                <div class="col-6 py-2">
                                    <label for="" class="pb-0">Product Name</label>
                                    <input name="id" type="hidden" value="{{ $product->id }}" class="form-control">
                                    <input name="name" type="text" value="{{ $product->name }}" class="form-control" required placeholder="">
                                </div>
                                <div class="col-6 py-2">
                                    <label for="" class="pb-0">Serial #</label>
                                    <input name="serial" type="text" value="{{ $product->serial_no }}" class="form-control" required placeholder="">
                                </div>
                                <div class="col-6 py-2">
                                    <label for="" class="pb-0">Price ( $ )</label>
                                    <input name="price" type="number" value="{{ $product->price }}" class="form-control" required placeholder="">
                                </div>
                                <div class="col-6 py-2">
                                    <label for="" class="pb-0">SKU</label>
                                    <input name="sku" type="text" value="{{ $product->sku }}" class="form-control" required placeholder="">
                                </div>
                                <div class="col-6 py-2">
                                    <label for="" class="pb-0">Expiry Date</label>
                                    <input name="expiry" type="date" value="{{ $product->expiry_date }}" class="form-control" required value="" max="">
                                </div>
                                <div class="col-6 py-2">
                                    <label for="" class="pb-0">Purchaed Date</label>
                                    <input name="purchased" type="date" value="{{ $product->purchased_date }}" class="form-control" required value="" max="">
                                </div>
                                <div class="col-12 py-2">
                                    <label for="" class="pb-0">Description</label>
                                    <textarea name="description" id="" value="" class="form-control" required rows="2">{{ $product->description }}</textarea>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Update Product</button>

                            </form>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>
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

<!-- Start Add product Model -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="{{ route('save.product') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 py-1">
                                    <label for="" class="pb-0">Product Image URL</label>
                                    <input name="file" type="text" class="form-control image_url_add" data-height="100" required />
                                    <img id="show_image_add" border="2" width="100px;" class="m-2" src="" alt="">
                                </div>
                                <div class="col-6 py-2">
                                    <label for="" class="pb-0">Product Name</label>
                                    <input name="name" type="text" class="form-control" required placeholder="">
                                </div>
                                <div class="col-6 py-2">
                                    <label for="" class="pb-0">Serial #</label>
                                    <input name="serial" type="text" class="form-control" required placeholder="">
                                </div>
                                <div class="col-6 py-2">
                                    <label for="" class="pb-0">Price ( in $ )</label>
                                    <input name="price" type="number" class="form-control" required placeholder="">
                                </div>
                                <div class="col-6 py-2">
                                    <label for="" class="pb-0">SKU</label>
                                    <input name="sku" type="text" class="form-control" required placeholder="">
                                </div>
                                <div class="col-6 py-2">
                                    <label for="" class="pb-0">Expiry Date</label>
                                    <input name="expiry" type="date" class="form-control" required value="" max="">
                                </div>
                                <div class="col-6 py-2">
                                    <label for="" class="pb-0">Purchaed Date</label>
                                    <input name="purchased" type="date" class="form-control" required value="" max="">
                                </div>
                                <div class="col-12 py-2">
                                    <label for="" class="pb-0">Description</label>
                                    <textarea name="description" id="" class="form-control" required rows="2"></textarea>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Add Product</button>

                            </form>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>
<!-- End of Model -->


<!-- Start Add product Model -->
<div class="modal fade" id="exampleModalCSV" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Upload CSV</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="{{ route('save.csv') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 py-1">
                                    <label for="" class="pb-0">Select CSV</label>
                                    <input name="csv" type="file" class="form-control image_url_add" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"" required />
                                    <img id="show_image_add" border="2" width="100px;" class="m-2" src="" alt="">
                                </div>
                            </div>
                            <button type="submit" style="float: right;" class="btn btn-primary">Save</button>

                            </form>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>
<!-- End of Model -->
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
                            'copy', 'excel', 'pdf', 'csv'
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