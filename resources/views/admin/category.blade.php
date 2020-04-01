@extends('admin.Base')
@section('title','Danh mục sản phẩm')
@section('main')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Forms</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">UI Elements</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Forms</div>
                <div class="panel-body">
                    <div class="col-md-3">
                        <form method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Category name</label>
                                <input class="form-control" placeholder="Category name" name="title">
                            </div>
                            <div class="form-group">
                                <label>Describe</label>
                                <input class="form-control" placeholder="describe" name="describe">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control form-control-sm" name="status">
                                    <option value="1">Hoạt động</option>
                                    <option value="0">Không hoạt động</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-lg btn-primary">Add</button>
                        </form>
                    </div>
                    <div class="col-md-9">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Describe</th>
                                <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td scope="row">1</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->describe}}</td>
                                    <td>{{$item->status}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- /.panel-->
    </div><!-- /.col-->
    <div class="col-sm-12">
        <p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
    </div>
</div><!-- /.row -->
@stop
