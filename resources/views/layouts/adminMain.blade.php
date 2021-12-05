<?php
/**
 * Created by PhpStorm.
 * User: kien
 * Date: 4/16/2019
 * Time: 2:41 PM
 */
?>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/start/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.jqueryui.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Web Testing</title>
    <style>
        body {
            font-size: 8pt;
        }

        table tr td,
        table tr th {
            font-size: 12px;
        }

        .btn-circle-tnmt {
            border-radius: 20px;
            width: 32px;
            height: 32px;
            color: white;
            font-size: 11pt;
            border: 1px solid transparent;
        }


        .table-tnmt {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;

        }

        .table-tnmt tr:first-child th:first-child {
            /*border-top-left-radius: 10px;*/
        }

        .table-tnmt tr:first-child th:last-child {
            /*border-top-right-radius: 10px;*/
        }

        .table-tnmt td,
        .table-tnmt th {
            border-right: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            vertical-align: middle;
            padding: 8px;
        }


        .table-tnmt td:first-child,
        .table-tnmt th:first-child {
            border-left: 1px solid #ddd;
        }

        .table-tnmt tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table-tnmt tr:hover {
            background-color: #FFCC00;
        }

        .table-tnmt th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #418bca;
            color: white;
        }

        .hidden {
            display: none;
        }

    </style>
</head>

<body>




    @yield('admin')
    <div id="loading-box-webtesting"></div>
    <div id="message-box-webtesting"></div>

    <script>
        function open_message_box(content) {
            $("#message-box-webtesting").html('<center>' + content + '</center>');
            $("#message-box-webtesting").dialog("open");
        }

        function open_loading() {
            if (!$("#loading-box-webtesting").dialog("isOpen")) {
                $("#loading-box-webtesting").html(
                    '<center><div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div><center>'
                    );
                $("#loading-box-webtesting").dialog("open");
            }
        }

        function close_loading() {
            if ($("#loading-box-webtesting").dialog("isOpen")) {
                $("#loading-box-webtesting").dialog("close");
            }
        }

        $(document).ready(function() {
            $("#message-box-webtesting, #loading-box-webtesting").dialog({
                resizable: false,
                modal: true,
                title: "",
                height: 200,
                width: 350,
                autoOpen: false,
                buttons: {
                    "Đóng": function() {
                        $(this).dialog('close');
                    }
                }
            });
        });
    </script>

</html>
