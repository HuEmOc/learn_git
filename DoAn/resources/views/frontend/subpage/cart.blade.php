@extends('frontend.master')
@section('title','Giỏ hàng')
@section('content')
    <div id="content">
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="">Trang chủ</a></li>
                            <li class="active">Giỏ hàng</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">

                    <div class="cart-table">
                        <form method="post" action="/cart">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                        <th>Xóa</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                        <tr>
                                            <td><img width="40"></td>
                                            <td>
                                                <a href="">abc</a>
                                            </td>
                                            <td>

                                            </td>
                                            <td></td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                        </tr>

                                    <tr>
                                        <td colspan="6">
                                            <div class="pull-right">
                                                Tổng tiền :<span class="tong_cart"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">
                                            <div class="pull-left">
                                                <a class="comment-submit" href="">Tiếp tục mua sắm</a>
                                            </div>
                                            <div class="pull-right">
                                                <a class="comment-submit" href="">Hủy giỏ hàng</a>
                                                <a class="comment-submit" href="">Thanh toán</a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </div>
@stop