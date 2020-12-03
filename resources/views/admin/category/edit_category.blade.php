@extends('admin.layout')
@section('title','Loại sản phẩm')
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
                    <header class="panel-heading">
                        Sửa loại sản phẩm
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            @foreach($category as $category)
                            <form action="{{route('category.store')}}" method="post" role="form">
                                    @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên loại</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter email" >
                                </div>
                                <button type="submit" class="btn btn-info">Sửa</button>
                            </form>
                            @endforeach
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
@endsection('content')