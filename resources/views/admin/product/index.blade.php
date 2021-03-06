@extends('admin.layouts.master')

@section('title', '商品管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            商品管理 <small>所有商品列表</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 商品管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-bottom: 20px; text-align: right">
    <div class="col-lg-12">
        <a href="{{ route('admin.product.create') }}" class="btn btn-success">建立新產品</a>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="30" style="text-align: center">#</th>
                        <th width="70">產品名稱</th>
                        <th width="40" style="text-align: center">類型</th>
                        <th width="30" style="text-align: center">價格</th>
                        <th width="20" style="text-align: center">庫存</th>
                        <th width="20" style="text-align: center">顏色</th>
                        <th width="90" style="text-align: center">圖片</th>
                        <th width="30" style="text-align: center">狀態</th>
                        <th width="20" style="text-align: center">功能</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($product as $products)
                    <tr>
                        <td style="text-align: center">{{ $products->id }}</td>
                        <td>{{ $products->name }}</td>
                        <td style="text-align: center">{{ $products->ctg}}</td>
                        <td style="text-align: center">{{ $products->price}}</td>
                        <td style="text-align: center">{{ $products->invt}}</td>
                        <td style="text-align: center">{{ $products->color}}</td>
                        <td>{{ $products->image}}</td>
                        <td style="text-align: center">{{ $products->status}}</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.product.edit', $products->id) }}">編輯</a>
                            <form action="/admin/product/{{$products->id}}" method="POST" style="display: inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">刪除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
