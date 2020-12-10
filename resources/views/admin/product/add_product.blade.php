@extends('admin.layout')
@section('title','Thương Hiệu')
@section('content')
<!--main content start-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <!-- page start-->
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        @if(session('msg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('msg') }}
                        </div>
                        @endif
                        <header class="panel-heading">
                            Thêm  sản phẩm
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="{{route('product.store')}}" method="post" role="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <!-- Tên sản phẩm -->
                                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        <!-- Tên thương hiệu -->
                                        <label for="exampleInputEmail1">Tên thương hiệu</label>
                                        <select id="brand_id" name="brand_id"  class="form-control m-bot15">
                                            @foreach($brand as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                        <!-- Tên dòng -->
                                        <label for="exampleInputEmail1">Tên dòng</label>
                                        <select id="productline_id" name="productline_id"  class="form-control m-bot15">
                                             @foreach($productline as $productline)
                                            <option value="{{$productline->id}}">{{$productline->name}}</option>
                                            @endforeach
                                        </select>
                                        <!-- Ảnh sản phẩm -->
                                        <label for="exampleInputFile">Chọn ảnh</label>
                                        <input  name="images[]" id="upload" type="file" multiple="true" >
                                        <!-- Giá sản phẩm -->
                                        <label for="exampleInputEmail1">Giá</label>
                                        <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="">
                                        <!-- Số lượng sản phẩm -->
                                        <label for="exampleInputEmail1">Số lượng </label>
                                        <input type="text" name="quantity" class="form-control" id="exampleInputEmail1" placeholder="">
                                        <!-- Mô tả sản phẩm -->
                                        <script src="../ckeditor/ckeditor.js"></script>
                                        <div class="form-group mb-0">
                                             <label for="exampleInputEmail1">Mô tả </label>
                                            <textarea name="description" id="ckeditor1" class="ckeditor" ></textarea>
                                            <script>
                                                CKEDITOR.replace(ckeditor1);
                                            </script>
                                        </div>
                                        <!-- CPU -->
                                        <label for="exampleInputEmail1">CPU</label>
                                        <input type="text" name="cpu" class="form-control" id="exampleInputEmail1" placeholder="">
                                        <!-- Ram -->
                                        <label for="exampleInputEmail1">Ram</label>
                                        <input type="text" name="ram" class="form-control" id="exampleInputEmail1" placeholder="">
                                        <!-- Disk -->
                                        <label for="exampleInputEmail1">Ổ cứng</label>
                                        <input type="text" name="disk" class="form-control" id="exampleInputEmail1" placeholder="">
                                        <!-- VGA -->
                                        <label for="exampleInputEmail1">VGA</label>
                                        <input type="text" name="vga" class="form-control" id="exampleInputEmail1" placeholder="">
                                        <!-- resolution -->
                                        <label for="exampleInputEmail1">Độ phân giải</label>
                                        <input type="text" name="resolution" class="form-control" id="exampleInputEmail1" placeholder="">
                                        <!-- Video -->
                                        <label for="exampleInputEmail1">Màn hình</label>
                                        <input type="text" name="screen" class="form-control" id="exampleInputEmail1" placeholder="">
                                        <!-- Video -->
                                        <label for="exampleInputEmail1">Video</label>
                                        <input type="text" name="video" class="form-control" id="exampleInputEmail1" placeholder="">
                                        <!-- Tags -->
                                        <label for="exampleInputEmail1">Tag</label>
                                        <input type="text" name="tag" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>
                                    <button type="submit" class="btn btn-info">Thêm</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </div>
    </section>
</section>

<!--main content end-->
</section>
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function () {
        $("select#brand_id").change(function () {
            var id = $('select#brand_id').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{route('select_productline')}}',
                type: "POST",
                cache: false,
                data: {
                    _token: CSRF_TOKEN,
                    id: id
                },
                success: function (data) {
                    // $("select#productline_id").empty();
                    // $("select#productline_id").append(data);
                    alert(data);
                },
                error: function (error) {
                    alert("Không xác định");
                }
            });

        });

    });
</script>


@endsection('content')