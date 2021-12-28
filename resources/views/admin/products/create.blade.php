@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            إضافة منتج
        </div>
        <div class="card-body">
            <form method="post" action="{{url('admin/products/store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">اسم المنتج :</label>
                    <input type="text" class="form-control" name="product_name" />
                </div>
                <div class="form-group">
                    <label for="details">تفاصيل المنتج :</label>
                    <input type="textarea" class="form-control" name="product_details" />
                </div>
                <div class="form-group">
                    <label for="price">سعر المنتج :</label>
                    <input type="text" class="form-control" name="product_price" />
                </div>
                <div class="form-group">
                    <label for="quantity">كمية المنتج :</label>
                    <input type="text" class="form-control" name="product_qty" />
                </div>
                <div class="form-gruop">
                    <label for="image">صورة المنتج :</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">إضافة</button>
            </form>
        </div>
    </div>
</div>
@endsection
