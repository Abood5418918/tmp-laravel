@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-rigth">
                <h3>المنتجات</h3>
            </div>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>م</th>
                <th>الامم</th>
                <th>السعر</th>
                <th>الكمية</th>
                <th width="280px">العمليات</th>
            </tr>
            @foreach ($products as $index => $product)
            <tr>
                <th>{{++$index}}</th>
                <th>{{$product->name}}</th>
                <th>{{$product->price}} $</th>
                <th>{{$product->quantity}}</th>
                <td>
                    <a class="btn btn-info" href="#">تعديل</a>

                    <a class="btn btn-danger" href="#">حذف</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
