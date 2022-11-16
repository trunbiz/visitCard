@extends('admin.Base')
@section('title','Danh mục sản phẩm')
@section('main')
    <script type="text/javascript">
        $('select').picker();

        function changeImg(input) {
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function (e) {
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(document).ready(function () {
            $('#avatar').click(function () {
                $('#img').click();
            });
        });
    </script>
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Blog/Profile</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Profile</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>
                <div class="panel-body">
                    <form method="POST" role="form" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input class="form-control" placeholder="id" name="id" type="hidden"
                               value="{{isset($item->id)?$item->id:''}}">
                        <div class="form-group col-sm-6">
                            <label>Username</label>
                            <input class="form-control" placeholder="username" name="username" disabled
                                   value="{{isset($item->username)?$item->username:''}}">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Email</label>
                            <input class="form-control" type="text" placeholder="email" name="email"
                                   value="{{isset($item->email)?$item->email:''}}">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Phone</label>
                            <input class="form-control" type="text" placeholder="Phone" name="phone"
                                   value="{{isset($item->phone)?$item->phone:''}}">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>City</label>
                            <input class="form-control" type="text" placeholder="city" name="city"
                                   value="{{isset($item->city)?$item->city:''}}">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Address</label>
                            <input class="form-control" type="text" placeholder="address" name="address"
                                   value="{{isset($item->address)?$item->address:''}}">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Password</label>
                            <input class="form-control" type="text" placeholder="Nhập để thay password mới"
                                   name="password"
                                   value="">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Facebook</label>
                            <input class="form-control" type="text" placeholder="url facebook" name="url_facebook"
                                   value="{{isset($item->url_facebook)?$item->url_facebook:''}}">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Instagram</label>
                            <input class="form-control" type="text" placeholder="url instagram" name="url_instagram"
                                   value="{{isset($item->url_instagram)?$item->url_instagram:''}}">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Youtube</label>
                            <input class="form-control" type="text" placeholder="url Youtube" name="url_youtube"
                                   value="{{isset($item->url_youtube)?$item->url_youtube:''}}">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Tiktok</label>
                            <input class="form-control" type="text" placeholder="url Tiktok" name="url_tiktok"
                                   value="{{isset($item->url_tiktok)?$item->url_tiktok:''}}">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Short description</label>
                            <input class="form-control" type="text" placeholder="Short description" name="short_description"
                                   value="{{isset($item->short_description)?$item->short_description:''}}">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Description</label>
                            <textarea class="form-control" type="text" placeholder="Description" name="description">{{isset($item->description)?$item->description:''}}</textarea>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Avatar</label>
                            <input id="img" type="file" name="img" value="" class="form-control"
                                   onchange="changeImg(this)">
                            <img id="avatar" class="thumbnail" width="300px"
                                 src="{{isset($item->img)?asset('public/media/'.$item->img):asset('public/images/logo.png')}}">
                            <p class="help-block">Avatar.</p>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>QR CODE</label><br>
                            {!! \SimpleSoftwareIO\QrCode\Facades\QrCode::size(250)->generate(asset('user/qr/' . $item->id)); !!}
                        </div>
                        <br>
                        <div class="col-sm-12">
                            <button class="btn btn-lg btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.panel-->
    </div><!-- /.col-->
    <div class="col-sm-12">
        <p class="back-link">Visit Card Theme by <a href="https://visitCard.vn">Visit Card</a></p>
    </div>
    </div><!-- /.row -->
@stop
