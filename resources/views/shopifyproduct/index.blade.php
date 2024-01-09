@extends('layouts.main')

@section('page-title')
    {{__('Manage Product')}}
@endsection

@section('page-breadcrumb')
   {{__('Product')}}
@endsection
@section('page-action')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table mb-0 pc-dt-simple" id="shopify_product">
                            <thead>
                                <tr>
                                    <th>{{__('Product Image')}}</th>
                                    <th>{{__('Title')}}</th>
                                    <th>{{__('Status')}}</th>
                                    <th>{{__('Category')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($shopify_products['products'] as $shopify_product)
                                    <tr>
                                        <td>
                                            <div>
                                                <a href="{{$shopify_product['image']['src']}}" target="_blank">
                                                    <img alt="Image placeholder" src="{{$shopify_product['image']['src']}}" class="wid-75 rounded me-3">
                                                </a>
                                            </div>
                                        </td>
                                        <td>{{ $shopify_product['title'] }}</td>
                                        <td>{{ $shopify_product['status'] }}</td>
                                        <td>{{ !empty($shopify_product['product_type'])?$shopify_product['product_type']:'-' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
