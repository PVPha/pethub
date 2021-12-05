<style>
    #form-update-sinh-vien label {
        font-weight: bold;
        display: inline-block !important;
        margin-bottom: 3px;
    }

    .error {
        color: red;
        font-weight: bold;
    }

</style>

{!! Form::model($data, ['url' => 'admin/store/' . $action, 'id' => 'form-update-sinh-vien', 'class' => 'form-inline']) !!}

<table width="100%" border="0" align="center" cellpadding="5" cellspacing="2">
    {!! Form::label($for, $text) !!}
    {!! Form::text('name', null, ['class' => 'form-control form-control-sm', 'maxlength' => 200, 'style' => 'width:100px', 'placeholder' => 'Tên']) !!}
    {{-- <tr>
        <td>

            <label>Mã SV</label><br />
            {{ Form::text('masv', null, ['class' => 'form-control form-control-sm', 'maxlength' => 200, 'style' => 'width:100px', 'placeholder' => 'Mã SV']) }}

            {{ Form::hidden('ma_sinh_vien', null) }}<br />
            <span class='error' id='error-masv'></span>
        </td>
        <td>
            <label>Họ</label><br />
            {{ Form::text('ho', null, ['class' => 'form-control form-control-sm', 'maxlength' => 200, 'style' => 'width:200px', 'placeholder' => 'Họ']) }}<br />
            <span class='error' id='error-ho'></span>
        </td>
        <td>
            <label>Tên</label><br />
            {{ Form::text('ten', null, ['class' => 'form-control form-control-sm', 'maxlength' => 200, 'style' => 'width:100%', 'placeholder' => 'Tên']) }}<br />
            <span class='error' id='error-ten'></span>
        </td>
    </tr>
    <tr>
        <td>
            <label>Ngày sinh</label><br />
            {{ Form::text('ngaysinh', null, ['class' => 'form-control form-control-sm', 'maxlength' => 10, 'style' => 'width:100px']) }}<br />
            <span class='error' id='error-ngaysinh'></span>
        </td>
        <td>
            <label>Giới tính</label><br />
            @php
                $listGioiTinh = ['M' => 'Nam', 'F' => 'Nữ'];
            @endphp
            {{ Form::select('gioitinh', ['' => '--Chọn giới tính--'] + $listGioiTinh, null, ['class' => 'form-control form-control-sm', 'style' => 'height:28px;width:150px']) }}<br />
            <span class='error' id='error-gioitinh'></span>
        </td>

        <td>
            <label>Email</label><br />
            {{ Form::text('email', null, ['class' => 'form-control form-control-sm', 'maxlength' => 255, 'style' => 'width:100%']) }}<br />
            <span class='error' id='error-email'></span>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <label>Địa chỉ</label><br />

            {{ Form::text('diachi', null, ['class' => 'form-control form-control-sm', 'maxlength' => 300, 'style' => 'width:100%']) }}<br />
            <span class='error' id='error-diachi'></span>
        </td>
    </tr> --}}
</table>

{{ Form::close() }}
