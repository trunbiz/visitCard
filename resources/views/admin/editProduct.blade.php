@extends('admin.Base')
@section('title','Danh mục sản phẩm')
@section('main')
    <script type="text/javascript">
        $('select').picker();
        function changeImg(input){
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            $('#avatar').click(function(){
                $('#img').click();
            });
        });
    </script>
    <script type="text/javascript">
        var id;
        var title;
        var describe;
        var status;
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus');
        });
        $(document).ready(function(){
            $('#tb1 tr').click(function (e) {
                id = $(this).closest('.onRow').find('td:nth-child(1)').text();
                title = $(this).closest('.onRow').find('td:nth-child(2)').text();
                describe = $(this).closest('.onRow').find('td:nth-child(3)').text();
                $('.title').val(title);
                $('.describe').val(describe);
            });
        });
        function updateItem() {
            var titlecate=$('.title').val();
            var describecate=$('.describe').val();
            var statuscate=$('.status').val();

            $.get(
                '{{url('admin/category/update')}}',
                {id:id,title:titlecate,describe:describecate,status:statuscate},
                function() {
                    location.reload();
                }
            );
        }
    </script>
    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="myForm" role="form" method="post"  action="{{ url('/admin/category/update') }}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Category Name</label>
                            <input class="form-control title" placeholder="Category Name" name="title">
                        </div>
                        <div class="form-group">
                            <label>Describe Category</label>
                            <input class="form-control describe" placeholder="Describe" name="describe">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="status">
                                <option value="1">Hoạt động</option>
                                <option value="0">Không hoạt động</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary save" onclick="updateItem()">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--code popup---------------------------------------------------------------------}}
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Product/Add</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Product</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Add Product</div>
                <div class="panel-body">
                    <form method="POST" role="form" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group col-sm-6">
                            <label>Product category</label>
                            <select id="boot-multiselect-demo" multiple="multiple" class="form-control" rows="5" name="idcategory[]">
                                @foreach($listCate as $item)
                                <option value="{{$item->id}}">{{$item->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Product name</label>
                            <input class="form-control" placeholder="Prodcut name" name="title">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Product price</label>
                            <input class="form-control" type="number" placeholder="Prodcut price" name="price">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Product sale</label>
                            <input class="form-control" type="number" placeholder="Prodcut sale" name="sale">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Product size</label><br>
                            <select id="boot-multiselect-demo" class="form-control" rows="5" multiple="multiple" name="size[]">
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL" >XL</option>
                            </select>

                        </div>
                        <div class="form-group col-sm-6">
                            <label>Product Color</label>
                            <select id="boot-multiselect-demo" multiple="multiple" class="form-control" rows="5" name="color[]">
                                <option value="red">Red</option>
                                <option value="white">White</option>
                                <option value="yellow">Yellow</option>
                                <option value="black" >Black</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Number of product</label>
                            <input class="form-control" type="number" placeholder="Number of product" name="count">
                        </div>multiple
                        <div class="form-group col-sm-6">
                            <label>Product Img</label>
                            <input id="img" type="file" name="coverimg" value="" class="form-control" onchange="changeImg(this)">
                            <img id="avatar" class="thumbnail" width="300px" src="{{asset('public/images/shirt-render.jpg')}}" >
                            <p class="help-block">Ảnh đại diện.</p>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Product Img</label>
                            <input id="img" multiple type="file" name="coverimg" value="" class="form-control" onchange="changeImg(this)">
                            <img id="avatar" class="thumbnail" width="300px" src="{{asset('public/images/shirt-render.jpg')}}" >
                            <p class="help-block">Ảnh đại diện.</p>
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Product describe</label>
                            <br>
                            <textarea class="form-control" rows="5" name="content" placeholder="Product describe">
                            </textarea>
                        </div>
                        <button class="btn btn-lg btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div><!-- /.panel-->
    </div><!-- /.col-->
    <div class="col-sm-12">
        <p class="back-link">Render Theme by <a href="https://kipo.vn">Kipo</a></p>
    </div>
    </div><!-- /.row -->
@stop
