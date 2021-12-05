@extends('layouts.adminMain')
@section('admin')
<div style="padding:10px;">
	<center style = 'color:#15c; font-weight: bold; font-size:11pt;'>ADMIN DASHBOARD</center>

	<button class='btn btn-success' id="them-sinh-vien">Thêm</button>
</div>
<div id = "pets">
    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">#</th>
                    <th scope="col">types</th>
                    <th scope="col">price</th>
                    <th scope="col">img</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataPets as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->types }}</td>
                    <td>{{ $data->price }}</td>
                    <td>{{ $data->img }}</td>
                    <td width="150px" align="center">
                        <button class='btn-circle-tnmt btn-info edit-sinh-vien' rel = "{{$data->id}}">
                            <i class="fa fa-pencil"></i>
                        </button>
                        <button class='btn-circle-tnmt btn-danger delete-sinh-vien' rel = "{{$data->id}}">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$dataPets->links()}}
        <div id ="dialog-delete"></div>
</div>
<div id ="dialog-sinh-vien"></div>
<script>

    // function loadListSinhVien()
    // {
    //     var url = "";
    //     $.ajax({
    //             type:"GET",
    //             dataType:"html",
    //             url: "{{url("window.location.search == '' ? "admin/loadDatabase":"admin/loadDatabase"+window.location.search")}}",
    //             data:{"_token": "{{ csrf_token() }}"},
    //             beforeSend:function(){
    //                // open_loading();
    //             },
    //             success:function(data){
    //                 $("#pets").html(data);
    //             },
    //             error: function (xhr,status,error){

    //             },
    //             complete: function(xhr,status){

    //             }
    //         });
    // }

	$(document).ready(function(){
        loadListSinhVien();
		$("#dialog-sinh-vien").dialog({
            modal: true,
            title:"Sinh viên",
            height: 300,
            width: 700,
            autoOpen: false,
            buttons: [{
                id: "save-dialog-sinh-vien",
                text:"Lưu",
                click: function () {
                    $.ajax({
                        type: "POST",
                        url: $("#form-update-sinh-vien").attr("action"),
                        data: $("#form-update-sinh-vien").serialize(),
                        dataType: "json",
                        beforeSend: function (xhr) {
                            open_loading();
                        },
                        success: function (result) {


                            if(result.success==true)
                            {
                                 $("#dialog-sinh-vien").dialog("close");
                                 loadListSinhVien();
                                 open_message_box(result.message);
                            }
                            else
                            {
                                $("#form-update-sinh-vien input").css("background-color","");
                                $("#form-update-sinh-vien select").css("background-color","");
                                $(".error").html("");
                                var error = result.attrError;
                                var errMsg = result.errMsg;

                                for(i = 0; i<error.length;i++)
                                {
                                    if( $("#form-update-sinh-vien input[name='"+error[i]+"']").length)
                                    {
                                       $("#form-update-sinh-vien input[name='"+error[i]+"']").css("background-color","red");
                                    }

                                    if( $("#form-update-sinh-vien select[name='"+error[i]+"']").length)
                                    {
                                      $("#form-update-sinh-vien select[name='"+error[i]+"']").css("background-color","red");
                                    }

                                    $("#error-"+error[i]).html(errMsg[error[i]]);
                                }
                            }
                            close_loading();
                        },
                        error: function (xhr, status, error) {
                        },
                        complete: function (xhr, status) {
                        }
                    });

                }
                },
                {
                 text: "Thoát",
                 click: function () {
               		$(this).dialog('close');
                    }
                }
               ]

        });

		$("#them-sinh-vien").click(function(){
            //Code xử lý khi click vào nút Thêm
			$.ajax({
                type:"POST",
                dataType:"html",
                url: "{{url('sinhvien/showdialog')}}",
                data:{"_token": "{{ csrf_token() }}","action":"add"},
                beforeSend:function(){

                },
                success:function(data){
                    $("#dialog-sinh-vien").html(data);
                    $("#dialog-sinh-vien").dialog("open");
                },
                error: function (xhr,status,error){

                },
                complete: function(xhr,status){

                }
            });
		});
	});
</script>
@endsection
