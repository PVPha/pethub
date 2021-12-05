<style>
    #list-sinh-vien-table tr td,
    #list-sinh-vien-table tr th {
        vertical-align: middle;
    }

    #list-sinh-vien-table tr th {
        text-align: center;
    }

</style>
<table id="list-sinh-vien-table" class="table-tnmt" style="width: 99% !important; margin: 0 auto;">
    <thead>
        <tr>
            <th>types</th>
            <th>price</th>
            <th>img</th>
            <th width="55px"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataPets as $key => $row)
            <tr>
                <td align="center">
                    {{ $row->types }}
                </td>
                <td>{{ $row->price }}</td>
                <td>{{ $row->img }}</td>
                <td width="150px" align="center">
                    <button class='btn-circle-tnmt btn-info edit-sinh-vien' rel="{{ $row->id }}">
                        <i class="fa fa-pencil"></i>
                    </button>
                    <button class='btn-circle-tnmt btn-danger delete-sinh-vien' rel="{{ $row->id }}">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
{{ $dataPets->links() }}
<div id="dialog-delete"></div>
<script>
    $(document).ready(function() {

        $(".edit-sinh-vien").click(function() {
            var rel = $(this).attr("rel");
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "{{ url('sinhvien/showdialog') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "action": "edit",
                    "id": rel
                },
                beforeSend: function() {

                },
                success: function(data) {
                    $("#dialog-sinh-vien").html(data);
                    $("#dialog-sinh-vien").dialog("option", "title",
                        "Sửa thông tin sinh viên");
                    $("#dialog-sinh-vien").dialog("open");
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
                "<span style='color:red; font-weight:bold'>Bạn có đồng ý xóa thông tin SV?</span>");
            $("#dialog-delete").dialog({
                resizable: false,
                modal: true,
                title: "Xóa sinh viên",
                height: 200,
                width: 350,
                autoOpen: true,
                buttons: {
                    "Đồng ý": function() {
                        $.ajax({
                            type: "GET",
                            url: "{{ url('sinhvien/delete') }}/" + rel,
                            data: {
                                "_token": "{{ csrf_token() }}"
                            },
                            dataType: "json",
                            beforeSend: function(xhr) {

                            },
                            success: function(result) {
                                open_message_box(result.message);
                                $("#dialog-delete").html("");
                                $("#dialog-delete").dialog('destroy');
                                if (result.success) {
                                    loadListSinhVien();
                                }

                            },
                            error: function(xhr, status, error) {


                            },
                            complete: function(xhr, status) {


                            }
                        });
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

    });
</script>
