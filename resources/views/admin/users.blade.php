@extends('admin.Base')
@section('title','Danh mục sản phẩm')
@section('main')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Manager user</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manager User</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{asset('admin/users/store')}}">Add User</a>
                </div>
                <div class="panel-body">

                        <table id="tb1" class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Avatar</th>
                                <th>Email</th>
                                <th>Created at</th>
                                <th>Options</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                                <tr class="onRow">
                                    <td scope="row">{{$item->id}}</td>
                                    <td>{{$item->username}}</td>
                                    <td><img class="thumbnail" width="100px" src="{{isset($item->img)?asset('public/media/'.$item->img):asset('public/images/logo.png')}}" ></td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        <a href="{{asset('admin/users/update/'.$item->id)}}">Edit</a>
                                        <a href="{{asset('admin/users/delete/'.$item->id)}}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div><!-- /.panel-->
    </div><!-- /.col-->
    <div class="col-sm-12">
        <p class="back-link">Visit Card Theme by <a href="https://visitCard.vn">visitCard</a></p>
    </div>
    </div><!-- /.row -->
@stop
