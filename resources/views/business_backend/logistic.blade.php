@extends('newdashboard.master')
@section('header')
@endsection
@section('content')


<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Delivery's Dashboard</h4>
            </div>



          
           
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class='col-md-4'>
           
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="p-4 border-0">
                        <h3 class="card-title fw-bolder text-dark pt-4">Delivery Group Link</h3>
                        <small style='font-size:15px;'  class="form-text text-grey">Copy and paste your delivery group link here</small>
    
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        <!--begin::Item-->
                        <form id='set_group_link'>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Group Link</label>
                                <input type="text" class="form-control" id="group_link"
                                    aria-describedby="Pack Price" value='{{ $user->internal_group_link}}'>
                            </div>
                            
    
                            <button type="submit" style='background:#ebab21' class="mt-2 w-100 btn btn-warning">Update</button>
                        </form>
                    </div>
                    <!--end::Body-->
                </div>
               
        </div>
        <div class='col-md-8'>
            <div class='row'>
            <div class="col-md-6">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <a href='/category' class="text-muted fw-medium">Picked Up Delivery</a>
                                <h4 class="mb-0">{{ count($pending_deliveries) }}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                    <span class="avatar-title">
                                        <i class="bx bx-store-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-md-6">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <a href='food' class="text-muted fw-medium">Completed Delivery</a>
                                <h4 class="mb-0">{{ count($completed_deliveries) }}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-restaurant font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class='row'>
                        <div class="card-title col-md-8">Deliveries</div>
                    
                    </div>
                    <div class="table-responsive dataTables_length" id='datatable_length'>
                        <table id='datatable' class="table table-bordered dt-responsive nowrap w-100 align-middle mb-0">
                            <thead>
                                <tr class="fw-bolder text-muted">
                                   
                                    <th>Rider Name</th>
                                    <th>Status</th>
                                    <th>Delivery Price</th>
                                    <th>Delivery Address</th>
                                    <th>Request Time</th>
                                    <th>Pick Up Time</th>
                                    <th>Delivery Time</th>

                                    {{-- <th class="min-w-120px">Price</th> --}}

                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody id='search_food_tbody'>
                                @foreach($deliveries as $delivery)
                                <tr>

                                   
                              
                               <td>{{ $delivery->rider_name ?? "pending" }} - {{ $delivery->rider_phone ?? "" }}</td>
                               <td>
                                @if($delivery->status == 1) 
                                Success
                                @elseif($delivery->status == 0)
                                Pending
                                @else 
                                Not started
                                @endif
                            
                            </td>
                               <td>NGN{{ $delivery->delivery_price }}</td>
                               <td>{{ $delivery->order_to }} - {{ $delivery->address }}</td>
                               <td>{{ $delivery->request_time }}</td>
                               <td>{{ $delivery->pick_up_time ?? 'pending' }}</td>
                               <td>{{ $delivery->delivery_time ?? 'pending' }}</td>



                                    <td>
                                        <div class="d-flex justify-content-end flex-shrink-0">
                                            
                                            
                                            <a href='/pick_order/{{ $delivery->id }}' class="btn btn-primary btn-sm">
                                              Pick Up
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
            </div>
        </div>
       
          
            
       
    </div>
    <!-- end row -->


    <!-- end row -->

    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Latest Transaction</h4>
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 20px;">
                                        <div class="form-check font-size-16 align-middle">
                                            <input class="form-check-input" type="checkbox" id="transactionCheck01">
                                            <label class="form-check-label" for="transactionCheck01"></label>
                                        </div>
                                    </th>
                                    <th class="align-middle">Order ID</th>
                                    <th class="align-middle">Billing Name</th>
                                    <th class="align-middle">Date</th>
                                    <th class="align-middle">Total</th>
                                    <th class="align-middle">Payment Status</th>
                                    <th class="align-middle">Payment Method</th>
                                    <th class="align-middle">View Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input class="form-check-input" type="checkbox" id="transactionCheck02">
                                            <label class="form-check-label" for="transactionCheck02"></label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td>
                                    <td>Neal Matthews</td>
                                    <td>
                                        07 Oct, 2019
                                    </td>
                                    <td>
                                        $400
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                            data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                            View Details
                                        </button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end row -->
</div>
@section('script')
<script>
    $(document).ready(function() {
        
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
            const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
        })
    @if (session('message'))
    Swal.fire('CT-Taste',"{{ session('message') }}",'success');
    @endif
  


    async function resetAccount(el, id) {
        const willUpdate = await Swal.fire({
            title: "Confirm Category Delete",
            text: `Are you sure you want to delete? Food under this category will be deleted also?`,
            icon: "warning",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes!",
            showCancelButton: true,
            buttons: ["Cancel", "Yes, Delete"]
        });
        console.log(willUpdate.isDismissed, 'this is the will update')
        if (willUpdate.isDismissed == false) {
            //performReset()
            performDelete(el, id);
        } else {
            Swal.fire("Category will not be deleted  :)");
        }
    }


    function performDelete(el, id) {

        try {
            $.get('{{ route("deletecategory") }}?id=' + id,
                function(data, status) {
                    console.log(status);
                    console.table(data);
                    if (status === "success") {
                        let alert = Swal.fire('success', "Category successfully deleted!.", 'success');
                        $(el).closest("tr").remove();
                        window.location.reload()

                    }
                }
            );
        } catch (e) {
            let alert = Swal.fire(e.message);
        }
    }
    // end of javascript for category
    // beginning of javascript for food




    $("#createfood").on("submit", async function(e) {
        Swal.fire('Creating menu, please wait...')
        e.preventDefault();
        var fd = new FormData;
        fd.append('category_id', $("#category_id").val());
        fd.append('name', $("#food_name").val());
        fd.append('price', $("#price").val());
        fd.append('image',$('#image')[0].files[0]);
        fd.append('selectedimage', $('#selectedimagespan').val());

        console.log(fd)
        $.ajax({
            type: 'POST',
            url: "{{route('createfood')}}",
            data: fd,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                console.log('the data', data)
                Swal.close()
                Toast.fire({
                        icon: 'success',
                        title: 'Menu added successfully'
                        })
                $("#search_food_tbody").prepend(`
                <tr >

                <td>
                
                    <div class="symbol symbol-60px symbol-2by3 me-4">
                                            <img class="symbol-label" style='border:2px solid #ebab21;border-radius:4px' width='90px' height='70px' src='https://cttaste.com/cttaste_files/public/foodimages/${data.image}'/>
                                           
                                        </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                                           
                                           <div class="d-flex justify-content-start flex-column">
                                               <a id='name-${data.id}'
                                                   class="text-dark fw-bolder text-hover-primary fs-6">${data.name}</a>
                                               <a  id='price-${data.id}' style='color:#dc3545'
                                                   class=" fw-bolder text-hover-primary d-block fs-6">${data.price.toLocaleString('en-US', { style: 'currency', currency: 'NGN' })}</a>

                                           </div>
                                       </div>
                  
                   
                </td>

            


                <td>
                    <div class="d-flex justify-content-end flex-shrink-0">
                        <div class="form-check form-check-solid form-switch fv-row">
                            <input class="available form-check-input w-45px h-30px"
                                type="checkbox" data-id='${data.id}' id="available"
                                ${data.available} == 1 ? checked : ''>
                            
                            <label class="form-check-label" for="allowmarketing"></label>
                        </div>
                        <a data-bs-toggle="modal" data-bs-target="#kt_modal_menu2"
                            data-id='${data.id}'
                            class="edit_menu btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3"
                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                        fill="black"></path>
                                    <path
                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                        fill="black"></path>
                                </svg>
                            </span>
                        </a>
                        <a data-id='${data.id}'
                            class="delete_food btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                        fill="black"></path>
                                    <path opacity="0.5"
                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                        fill="black"></path>
                                    <path opacity="0.5"
                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                        fill="black"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </td>
                </tr>
                `)
                $("#category_id").val('')
                $("#food_name").val('')
                $("#price").val('')
                $("#image").val('')
                $("#kt_modal_menu").modal('hide')
                Swal.close()
                // window.location.reload()

            },
            error: function(data) {
                console.log(data)
                Swal.close()
                Swal.fire('Opps!', 'Food not created, contact the administrator', 'error')
            }
        })

    })

    $("#updatefood").on("submit", async function(e) {
        Swal.fire('Updating menu, please wait...')
        e.preventDefault();
        var fd = new FormData;
        fd.append('category_id', $("#edit_menu_category_id").val());
        fd.append('name', $("#edit_menu_name").val());
        fd.append('price', $("#edit_menu_price").val());
        fd.append('id', $("#edit_menu_id").val());
        fd.append('image',$('#edit_menu_image')[0].files[0]);
        console.log(fd)
        $.ajax({
            type: 'POST',
            url: "{{route('updatefood')}}",
            data: fd,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                console.log('the data', data)
                Swal.close()
                Toast.fire({
                        icon: 'success',
                        title: 'Menu updated successfully'
                        })
                // Swal.fire('success', 'Menu updated successfully!', 'success')
                var id = $("#edit_menu_id").val()
                $("#name-"+id).text(data.name)
                $("#price-"+id).text(data.price)
                $("#image-"+id).css('backgroundImage',"url(public/foodimages/" + data.image + ")");
                $("#kt_modal_menu2").modal('hide')
                // Swal.close()
                // window.location.reload()

            },
            error: function(data) {
                console.log(data)
                Swal.close()
                Swal.fire('Opps!', 'Menu not updated, contact the administrator', 'error')
            }
        })

    })

    $('body').on('click', '.edit_menu', function() {

        id = $(this).data('id');
       
        $("#edit_menu_image").val('')
        $.get("{{route('editfood')}}?id=" + id, function(data) {
            console.log(data);
            $("#edit_menu_category_id").val(data.category_id)
            $("#edit_menu_name").val(data.name)
            $("#edit_menu_price").val(data.price)
            // $("#edit_menu_quantity").val(data.quantity)
            $("#edit_menu_id").val(data.id)
        });


    });

    $('body').on('click', '.delete_food', function() {
        // var id = $("#delete_id").val();
        id = $(this).data('id');
        console.log(id)
        var token = $("meta[name='csrf-token']").attr("content");
        var el = this;
        // alert(user_id);
        resetFood(el, id);
    });


    async function resetFood(el, id) {
        const willUpdate = await Swal.fire({
            title: "Confirm Menu Delete",
            text: `Are you sure you want to delete this menu?`,
            icon: "warning",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes!",
            showCancelButton: true,
            buttons: ["Cancel", "Yes, Delete"]
        });
        if (willUpdate.isDismissed == false) {
            //performReset()
            performDeleteFood(el, id);
        } else {
            Swal.fire("Menu will not be deleted  :)");
        }
    }


    function performDeleteFood(el, id) {

        try {
            $.get('{{ route("deletefood") }}?id=' + id,
                function(data, status) {
                    console.log(status);
                    console.table(data);
                    if (status === "success") {
                        Toast.fire({
                        icon: 'success',
                        title: 'Menu deleted successfully'
                        })
                        //  Swal.fire('success', "Menu successfully deleted!.", 'success');
                        $(el).closest("tr").remove();
                       

                    }
                }
            );
        } catch (e) {
            let alert = Swal.fire(e.message);
        }
    }

    // $(".mytable").dataTable();
    $(".mytable").DataTable({
        pageLength: 5,
        filter: true,
        deferRender: true,

        "searching": true,
    });

    $('body').on('submit', '#set_group_link',async function(e) {
        e.preventDefault()
      
        var fd = new FormData;
        fd.append('group_link',$("#group_link").val());
        console.log(fd)
        $.ajax({
            type: 'POST',
            url: "{{route('set_group_link')}}",
            data: fd,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                console.log('the data', data)
                Swal.close()
                    if(data == true) {
                        Swal.fire('Success!', 'Group Link Set Successfully!', 'success')
                    console.log(data)
                    }
                    else {
                        Swal.fire('Error setting group link','Group link not set, please try again' ,'error')
                    
                    }
                    
               
                // window.location.reload()

            },
            error: function(data) {
                console.log(data)
                Swal.close()
                Swal.fire('Opps!', 'Group Link Not Updated, Contact The Admin', 'error')
            }
        })


    });

    $('body').on('submit', '#set_delivery_price',async function(e) {
        e.preventDefault()
      
        var fd = new FormData;
        fd.append('user_id',$("#user_id").val());
        fd.append('location_name',$("#location_name").val());
        fd.append('location_price',$("#location_price").val());
       
        console.log(fd)
        $.ajax({
            type: 'POST',
            url: "{{route('set_delivery_price')}}",
            data: fd,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                console.log('the data', data)
                Swal.close()
                    if(data == false) {
                        Swal.fire('Opps!', 'Location name already in existence!', 'error')
                    
                    }
                    else {
                        Swal.fire('Success!', 'Delivery Price Added Successfully!', 'success')
                        $("#delivery_table_body").prepend(`
                        <tr id='deliveryhead${data.id}'>

                                       
                                       
                        <td class="">
                            <div class="d-flex flex-column w-100 me-2">
                                <a 
                                    class="text-dark fw-bolder text-hover-primary d-block fs-6">${data.name}</a>

                            </div>
                        </td>
                        <td class="">
                            <div class="d-flex flex-column w-100 me-2">
                                <a 
                                    class="text-dark fw-bolder text-hover-primary d-block fs-6">#${data.price}</a>

                            </div>
                        </td>
                        <td class="">
                                                                        <div class="d-flex flex-column w-100 me-2">
                                                                            <a data-id="${data.id}" class="delete_location btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
                                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                                <span class="svg-icon svg-icon-3">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
                                                                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
                                                                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </a>
                                                                        </div>
                                                                    </td>


                        </tr>
                        `)
                    console.log(data)
                       
                    }
                    
               
                // window.location.reload()

            },
            error: function(data) {
                console.log(data)
                Swal.close()
                Swal.fire('Opps!', 'Delivery not updated, contact the administrator', 'error')
            }
        })


    });
    $('body').on('click','.delete_location',function() {
        con = confirm('Are you sure you want to delete this location')
       if(con == true) {
        id = $(this).data('id')
        $.get('{{ route("deletelocation") }}?val='+id,function(data) {
            console.log(data,'the location')
           $("#deliveryhead"+id).closest("tr").remove()

        })
       } else {

       }
       
    })
    $('body').on('click', '.available', function() {
        if($(this).is(":checked")) {
          
            status = false;
        }
        else {
         
            status = true;
        }
        id = $(this).data('id');
        var fd = new FormData;
        fd.append('id',id);
        fd.append('status', status);
       


        console.log(fd)
        $.ajax({
            type: 'POST',
            url: "{{route('availability')}}",
            data: fd,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                console.log('the data', data)
                Swal.close()
                if(data == true) {
                    Toast.fire({
                        icon: 'success',
                        title: 'Food enabled'
                        })
                    // Swal.fire('Enabled', 'Food is now made available for customers!', 'success')
                } else {
                    Toast.fire({
                        icon: 'success',
                        title: 'Food disabled'
                        })
                    // Swal.fire('Disabled', 'Food is now disabled for customers!', 'info')

                }
                // window.location.reload()

            },
            error: function(data) {
                console.log(data)
                Swal.close()
                Swal.fire('Opps!', 'Menu not updated, contact the administrator', 'error')
            }
        })


    });
    $("#showimage").click(function() {
        $("#selectimage").hide()
        $("#showimage2").hide()
        $("#imageContainer").show()
    })
    $("#hideimage").click(function() {
        $("#selectimage").show()
        $("#showimage2").show()
        $("#imageContainer").hide()
    })

    $("#edit_showimage").click(function() {
        $("#edit_selectimage").hide()
        $("#edit_showimage2").hide()
        $("#edit_imageContainer").show()
    })
    $("#edit_hideimage").click(function() {
        $("#edit_selectimage").show()
        $("#edit_showimage2").show()
        $("#edit_imageContainer").hide()
    })

    $("#food_search").keyup(function() {
        foodname = $("#food_search").val()
        $.get('{{ route("searchfoodimage") }}?val='+foodname,function(data) {
            console.log(data,'image data')
            $("#listimages").empty();
            $.each(data, function(key, value) {
                console.log(value.image,'odent')
                $("#listimages").append(`
                <img src='/foodimages/${value.image}' data-name='${value.category}' data-image='${value.image}' class="selectedimage img-thumbnail rounded m-5" style='width:100px;height:100px'>
                           
                `)
            })

        })
    })

    $("#edit_food_search").keyup(function() {
        foodname = $("#edit_food_search").val()
        $.get('{{ route("searchfoodimage") }}?val='+foodname,function(data) {
            console.log(data,'image data')
            $("#edit_listimages").empty();
            $.each(data, function(key, value) {
                console.log(value.image,'odent')
                $("#edit_listimages").append(`
                <img src='/foodimages/${value.image}' data-name='${value.category}' data-image='${value.image}' class="edit_selectedimage img-thumbnail rounded m-5" style='width:100px;height:100px'>
                           
                `)
            })

        })
    })
    $('body').on('click','.selectedimage',function() {
        image = $(this).data('image')
        name = $(this).data('name')
        $("#food_search").val(name+".jpg")
        $("#selectedimagespan").val(image)
      
    })

    $('body').on('click','.edit_selectedimage',function() {
        image = $(this).data('image')
        name = $(this).data('name')
      
        $("#edit_food_search").val(name+".jpg")
        $("#edit_selectedimagespan").val(image)
    })
       $("#searchCategory").on('input',function() {
       var val = $("#searchCategory").val()
       $.get('{{ route("searchCategory") }}?val='+val,function(data) {
        console.log(data,'here the data')
        $("#search_category_tbody").empty()
        $.each(data, function(key, value) {
              
                $("#search_category_tbody").append(`
                <tr>
                                            <td>
                                                
                                               <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                    <a href="">
                                                        <div class="symbol-label fs-3 bg-light-danger text-danger">${value.name.substring(0,1)}</div>
                                                    </a>
                                                </div>

                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-45px me-5">
                                                   </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a  class="text-dark fw-bolder text-hover-primary fs-6">${value.name}</a>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-45px me-5">
                                                   </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a  class="text-dark fw-bolder text-hover-primary fs-6">${value.name}</a>
                                                    </div>
                                                </div>
                                            </td>

                                           
                                            <td>
                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                    <a  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                     <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black"></path>
                                                                <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black"></path>
                                                            </svg>
                                                        </span>
                                                   </a>
                                                    <a data-id='${value.id}' data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends2" class="edit_category btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
                                                                <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <a data-id='${value.id}' class="delete_category btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
                                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
                                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                `
               
                )
            })
       })
    })
    $("#copy-link").click(function() {
            var link = $("#link-to-copy").attr("value");
            navigator.clipboard.writeText(link).then(function() {
                Toast.fire({
                icon: 'success',
                title: 'Linked Copied'
                })
                
            });
            });
    $("#searchFood").on('input',function() {
       var val = $("#searchFood").val()
       $.get('{{ route("searchFoodDashboard") }}?val='+val,function(data) {
        console.log(data,'here the data')
        $("#search_food_tbody").empty()
        $.each(data, function(key, value) {
              
                $("#search_food_tbody").append(`
                <tr>
                                           
                                           <td>
                                               <div class="symbol symbol-60px symbol-2by3 me-4">
                                                   <div class="symbol-label" style="background-image: url('/foodimages/${value.image}')"></div>
                                               </div>
                                           </td>
                                           <td>
                                               <div class="d-flex align-items-center">
                                                  
                                                   <div class="d-flex justify-content-start flex-column">
                                                       <a  class="text-dark fw-bolder text-hover-primary fs-6">${value.name}</a>
                                                       <span class="text-muted fw-bold text-muted d-block fs-7">${value.category_id}</span>
                                                   </div>
                                               </div>
                                           </td>

                                           <td class="text-end">
                                               <div class="d-flex flex-column w-100 me-2">
                                                   <a  class="text-dark fw-bolder text-hover-primary d-block fs-6">#${value.price}</a>

                                               </div>
                                           </td>
                                           <td>
                                               <div class="d-flex justify-content-end flex-shrink-0">
                                                   <div class="form-check form-check-solid form-switch fv-row">
                                                       <input class="available form-check-input w-45px h-30px" type="checkbox" data-id='${value.id}' id="available" ${value.available} ==1 ? checked:"">
                                                       <label class="form-check-label" for="allowmarketing"></label>
                                                   </div>
                                                   <a data-bs-toggle="modal" data-bs-target="#kt_modal_menu2" data-id='${value.id}' class="edit_menu btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                       <span class="svg-icon svg-icon-3">
                                                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                               <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
                                                               <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
                                                           </svg>
                                                       </span>
                                                   </a>
                                                   <a data-id='${value.id}' class="delete_food btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                       <span class="svg-icon svg-icon-3">
                                                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                               <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
                                                               <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
                                                               <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
                                                           </svg>
                                                       </span>
                                                   </a>
                                               </div>
                                           </td>
                                       </tr>
                `
               
                        )
                    })
            })
            })

        })
</script>
@endsection
@endsection