@extends('layouts.adminMain')
@section('admin')
    @csrf
    <div style="padding:10px;">
        <center style='color:#15c; font-weight: bold; font-size:11pt;'>ADMIN DASHBOARD</center>
    </div>
    <div class="container mt-1">
        <button class='btn btn-success mb-3' id="them-sinh-vien">Thêm</button>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">#</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Loại</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataSupplies as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->types }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->img }}</td>
                        <td width="150px" align="center">
                            <button class='btn-circle-tnmt btn-info edit-sinh-vien' rel="{{ $data->id }}">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <button class='btn-circle-tnmt btn-danger delete-sinh-vien' rel="{{ $data->id }}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mb-4">
            {{ $dataSupplies->links() }}
        </div>

        <div id="dialog-delete"></div>
        <div id="dialog-sinh-vien">

            <div class="container">
                <form class="form addPet" action="{{ url('admin') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="form" style="display: none" value="supplies">
                    <div class="form-group">
                        <label for="name">Tên: </label>
                        <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="type">Loại: </label>
                        <input type="text" name="type" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="price">Giá: </label>
                        <input type="text" name="price" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="img">Ảnh:</label>
                        <input type="file" class="form-control-file" name="img" id="" placeholder=""
                            aria-describedby="fileHelpId">
                        {{-- <small id="fileHelpId" class="form-text text-muted">Help text</small> --}}
                    </div>
                </form>
            </div>
        </div>
        <div id="dialog-update">
            <div class="container">
                <form class="form updatePet" action="{{ url('admin/update') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="form" style="display: none" value="supplies">
                    <input type="text" name="id" id="" style="display: none">
                    <div class="form-group">
                        <label for="name">Tên: </label>
                        <input type="text" name="name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="type">Loại: </label>
                        <input type="text" name="type" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="price">Giá: </label>
                        <input type="text" name="price" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="img">Ảnh:</label>
                        <input type="file" class="form-control-file" name="img" id="" placeholder=""
                            aria-describedby="fileHelpId">
                        {{-- <small id="fileHelpId" class="form-text text-muted">Help text</small> --}}
                    </div>
                </form>
            </div>
        </div>
        <script>
            $(document).ready(function() {

                $(".edit-sinh-vien").click(function(event) {
                    console.log($(event.target));

                    var rel = $(this).attr("rel");
                    $.ajax({
                        type: "GET",
                        dataType: "html",
                        url: "{{ url('admin/supplies') }}" + "/" + rel,

                        // data: {
                        //     "_token": "{{ csrf_token() }}",
                        //     "action": "edit",
                        //     "id": rel
                        // },
                        beforeSend: function() {
                            console.log("{{ url('admin/rel') }}");
                        },
                        success: function(data) {
                            let item = JSON.parse(data)[0];
                            $("#dialog-update").dialog("open");
                            document.querySelector('.updatePet').setAttribute('action', document
                                .querySelector('.updatePet').getAttribute('action') + '/' + rel)
                            document.querySelector('.updatePet [name="id"]').value = item.id;
                            document.querySelector('.updatePet [name="name"]').value = item
                                .name;
                            switch (item
                                .types) {
                                case 'dog':
                                    document.querySelector('.updatePet [name="type"]').value =
                                        'chó';
                                    break;
                                case 'cat':
                                    document.querySelector('.updatePet [name="type"]').value =
                                        'mèo';
                                    break;
                                case 'food':
                                    document.querySelector('.updatePet [name="type"]').value =
                                        'thức ăn';
                                    break;
                                case 'toy':
                                    document.querySelector('.updatePet [name="type"]').value =
                                        'đồ chơi';
                                    break;

                                default:
                                    document.querySelector('.updatePet [name="type"]').value =
                                        'chó';
                                    break;
                            }

                            document.querySelector('.updatePet [name="price"]').value = item
                                .price;
                            document.querySelector('.updatePet [name="age"]').value = item.age;
                            document.querySelector('.updatePet [name="sex"]').value = item.sex;

                            // $("#dialog-sinh-vien").html(data);
                            // $("#dialog-sinh-vien").dialog("option", "title",
                            //     "Sửa thông tin sinh viên");

                        },
                        error: function(xhr, status, error) {



                        },
                        complete: function(xhr, status) {

                        }
                    });
                });

                $(".delete-sinh-vien").click(function() {
                    var rel = $(this).attr("rel");
                    $("#dialog-delete").html(
                        "<span style='color:red; font-weight:bold'>Bạn có đồng ý xóa thông tin?</span>");
                    $("#dialog-delete").dialog({
                        resizable: false,
                        modal: true,
                        title: "Xóa thông tin",
                        height: 200,
                        width: 350,
                        autoOpen: true,
                        buttons: {
                            "Đồng ý": function() {

                                $.ajax({
                                    type: "GET",
                                    url: "{{ url('admin/delete2') }}/" + rel,
                                    data: {
                                        "_token": "{{ csrf_token() }}"
                                    },
                                    dataType: "json",
                                    beforeSend: function(xhr) {

                                    },
                                    success: function(result) {
                                        open_message_box(result.message);
                                        $("#dialog-delete").html("");

                                        // if (result.success) {
                                        //     loadListSinhVien();
                                        // }

                                    },
                                    error: function(xhr, status, error) {


                                    },
                                    complete: function(xhr, status) {


                                    }
                                });
                                $("#dialog-delete").dialog('destroy');
                                window.location.reload()
                            },
                            "Không": function() {
                                $("#dialog-delete").html("");
                                $(this).dialog('destroy');
                            }
                        }

                    });

                });

                /*$("#list-supplier-table").DataTable({"aaSorting": [], columnDefs: [
                    { width: 500, targets: 2 }
                ]});*/
                $("#dialog-sinh-vien").dialog({
                    modal: true,
                    title: "Thêm vật phẩm",
                    height: 300,
                    width: 700,
                    autoOpen: false,
                    buttons: [{
                            id: "save-dialog-sinh-vien",
                            text: "Lưu",
                            click: function() {
                                document.querySelector('.addPet').submit()
                                // $.ajax({
                                //     type: "POST",
                                //     url: $("#form-update-sinh-vien").attr("action"),
                                //     data: $("#form-update-sinh-vien").serialize(),
                                //     dataType: "json",
                                //     beforeSend: function(xhr) {
                                //         open_loading();
                                //     },
                                //     success: function(result) {
                                //         if (result.success == true) {
                                //             $("#dialog-sinh-vien").dialog("close");
                                //             loadListSinhVien();
                                //             open_message_box(result.message);
                                //         } else {
                                //             $("#form-update-sinh-vien input").css(
                                //                 "background-color", "");
                                //             $("#form-update-sinh-vien select").css(
                                //                 "background-color", "");
                                //             $(".error").html("");
                                //             var error = result.attrError;
                                //             var errMsg = result.errMsg;

                                //             for (i = 0; i < error.length; i++) {
                                //                 if ($("#form-update-sinh-vien input[name='" +
                                //                         error[i] + "']").length) {
                                //                     $("#form-update-sinh-vien input[name='" +
                                //                         error[i] + "']").css(
                                //                         "background-color", "red");
                                //                 }

                                //                 if ($("#form-update-sinh-vien select[name='" +
                                //                         error[i] + "']").length) {
                                //                     $("#form-update-sinh-vien select[name='" +
                                //                         error[i] + "']").css(
                                //                         "background-color", "red");
                                //                 }

                                //                 $("#error-" + error[i]).html(errMsg[error[
                                //                     i]]);
                                //             }
                                //         }
                                //         close_loading();
                                //     },
                                //     error: function(xhr, status, error) {},
                                //     complete: function(xhr, status) {}
                                // });

                            }
                        },
                        {
                            text: "Thoát",
                            click: function() {
                                $(this).dialog('close');
                            }
                        }
                    ]

                });

                $("#dialog-update").dialog({
                    modal: true,
                    title: "Cập nhật thông tin vật phẩm",
                    height: 300,
                    width: 700,
                    autoOpen: false,
                    buttons: [{
                            id: "save-dialog-sinh-vien",
                            text: "Lưu",
                            click: function() {
                                document.querySelector('.updatePet').submit()
                                // $.ajax({
                                //     type: "POST",
                                //     url: $("#form-update-sinh-vien").attr("action"),
                                //     data: $("#form-update-sinh-vien").serialize(),
                                //     dataType: "json",
                                //     beforeSend: function(xhr) {
                                //         open_loading();
                                //     },
                                //     success: function(result) {
                                //         if (result.success == true) {
                                //             $("#dialog-sinh-vien").dialog("close");
                                //             loadListSinhVien();
                                //             open_message_box(result.message);
                                //         } else {
                                //             $("#form-update-sinh-vien input").css(
                                //                 "background-color", "");
                                //             $("#form-update-sinh-vien select").css(
                                //                 "background-color", "");
                                //             $(".error").html("");
                                //             var error = result.attrError;
                                //             var errMsg = result.errMsg;

                                //             for (i = 0; i < error.length; i++) {
                                //                 if ($("#form-update-sinh-vien input[name='" +
                                //                         error[i] + "']").length) {
                                //                     $("#form-update-sinh-vien input[name='" +
                                //                         error[i] + "']").css(
                                //                         "background-color", "red");
                                //                 }

                                //                 if ($("#form-update-sinh-vien select[name='" +
                                //                         error[i] + "']").length) {
                                //                     $("#form-update-sinh-vien select[name='" +
                                //                         error[i] + "']").css(
                                //                         "background-color", "red");
                                //                 }

                                //                 $("#error-" + error[i]).html(errMsg[error[
                                //                     i]]);
                                //             }
                                //         }
                                //         close_loading();
                                //     },
                                //     error: function(xhr, status, error) {},
                                //     complete: function(xhr, status) {}
                                // });

                            }
                        },
                        {
                            text: "Thoát",
                            click: function() {
                                $(this).dialog('close');
                            }
                        }
                    ]

                });

                $("#them-sinh-vien").click(function() {
                    //Code xử lý khi click vào nút Thêm
                    $("#dialog-sinh-vien").dialog("open");
                    // $.ajax({
                    //     type: "POST",
                    //     dataType: "html",
                    //     url: "{{ url('admin/showDialog') }}",
                    //     data: {
                    //         "_token": "{{ csrf_token() }}",
                    //         "action": "add"
                    //     },
                    //     beforeSend: function() {

                    //     },
                    //     success: function(data) {
                    //         $("#dialog-sinh-vien").html(data);
                    //         $("#dialog-sinh-vien").dialog("open");
                    //     },
                    //     error: function(xhr, status, error) {

                    //     },
                    //     complete: function(xhr, status) {

                    //     }
                    // });
                });
            });
        </script>

    </div>

@endsection
