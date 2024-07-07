@extends('layouts.home')
@section('title', 'Trang sản phẩm')
@section('content')
    <div id="main-content-wp" class="clearfix category-product-page">
        <div class="wp-inner">
            <div class="secion" id="breadcrumb-wp">
                <div class="secion-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <a href="" title="">Trang chủ</a>
                        </li>
                        <li>
                            <a href="" title="">Điện thoại</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-content fl-right">
                <div class="section" id="list-product-wp">
                    <div class="section-head clearfix">
                        <h3 class="section-title fl-left">Tất cả sản phẩm</h3>
                        <div class="filter-wp fl-right">
                            <p class="desc">Hiển thị 45 trên 50 sản phẩm</p>
                            <div class="form-filter">
                                <form method="POST" action="">
                                    <select name="select">
                                        <option value="0">Sắp xếp</option>
                                        <option value="1">Từ A-Z</option>
                                        <option value="2">Từ Z-A</option>
                                        <option value="3">Giá cao xuống thấp</option>
                                        <option value="3">Giá thấp lên cao</option>
                                    </select>
                                    <button type="submit">Lọc</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="section-detail">
                        <ul class="list-item clearfix">
                            @foreach ($products as $product)
                                <li>
                                    <a href="{{ route('detailProduct', $product->id) }}" title="" class="thumb">
                                        <img src="{{ asset($product->images[0]->image_name) }}">
                                    </a>
                                    <a href="{{ route('detailProduct', $product->id) }}" title=""
                                        class="product-name">{{ $product->name }}
                                    </a>
                                    <div class="price">

                                        @if ($product->sale_price > 0)
                                            <span class="new">{{ number_format($product->sale_price, 0, '', '.') }}
                                                đ</span>
                                            <span class="old">{{ number_format($product->price, 0, '', '.') }} đ</span>
                                        @else
                                            <span class="new"> {{ number_format($product->price, 0, '', '.') }} đ</span>
                                        @endif
                                                

                                    </div>
                                    <div class="action clearfix">
                                        <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ
                                            hàng</a>
                                        <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                    </div>
                                </li>
                            @endforeach
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="{{ asset('product/public/images/img-pro-17.png') }}">
                                </a>
                                <a href="?page=detail_product" title="" class="product-name">Laptop HP Probook
                                    4430s</a>
                                <div class="price">
                                    <span class="new">17.900.000đ</span>
                                    <span class="old">20.900.000đ</span>
                                </div>
                                <div class="action clearfix">
                                    <a href="?page=cart" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                    <a href="?page=checkout" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="section" id="paging-wp">
                    <div class="section-detail">
                        <ul class="list-item clearfix">
                            <li>
                                <a href="" title="">1</a>
                            </li>
                            <li>
                                <a href="" title="">2</a>
                            </li>
                            <li>
                                <a href="" title="">3</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="sidebar fl-left">
                @include('layouts.navbar')
                <div class="section" id="filter-product-wp">
                    <div class="section-head">
                        <h3 class="section-title">Bộ lọc</h3>
                    </div>
                    <div class="section-detail">
                        <form method="POST" action="">
                            <table>
                                <thead>
                                    <tr>
                                        <td colspan="2">Giá</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="radio" name="r-price"></td>
                                        <td>Dưới 500.000đ</td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="r-price"></td>
                                        <td>500.000đ - 1.000.000đ</td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="r-price"></td>
                                        <td>1.000.000đ - 5.000.000đ</td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="r-price"></td>
                                        <td>5.000.000đ - 10.000.000đ</td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="r-price"></td>
                                        <td>Trên 10.000.000đ</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table>
                                <thead>
                                    <tr>
                                        <td colspan="2">Hãng</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="radio" name="r-brand"></td>
                                        <td>Acer</td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="r-brand"></td>
                                        <td>Apple</td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="r-brand"></td>
                                        <td>Hp</td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="r-brand"></td>
                                        <td>Lenovo</td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="r-brand"></td>
                                        <td>Samsung</td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="r-brand"></td>
                                        <td>Toshiba</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table>
                                <thead>
                                    <tr>
                                        <td colspan="2">Loại</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="radio" name="r-price"></td>
                                        <td>Điện thoại</td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="r-price"></td>
                                        <td>Laptop</td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
                <div class="section" id="banner-wp">
                    <div class="section-detail">
                        <a href="?page=detail_product" title="" class="thumb">
                            <img src="public/images/banner.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection