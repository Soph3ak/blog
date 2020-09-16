@extends('master.master-admin')
@section('title','All Posts')
@section('style')
    <style>
        div.dataTables_wrapper div.dataTables_filter input {
            min-width: 288px;
        }
        div.row th:first-child{
            width: 40%;
        }

        @media screen and (max-width: 600px) {
            tbody i.mr-1{
                margin-right: 0!important;
            }
            i.fa-pencil-alt{
                padding: 0 2px!important;
            }

        }
    </style>
@endsection
@section('content')
    <div id="app">
        <post></post>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
                "order": [[ 2, "desc" ]]
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
