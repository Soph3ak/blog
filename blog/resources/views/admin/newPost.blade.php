@extends('master.master-admin')
@section('title','New Post')
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
        <new-post></new-post>
    </div>
@endsection
@section('script')
@endsection
