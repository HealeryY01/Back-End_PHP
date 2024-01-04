<?php
get_header();
?>
<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <h3 class="title">Giỏ hàng</h3>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <div class="section" id="info-cart-wp">
            <div class="sectio-detail table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>Mã sản phẩm</td>
                            <td>Ảnh sản phẩm</td>
                            <td>Tên sản phẩm</td>
                            <td>Giá sản phẩm</td>
                            <td>Số lượng</td>
                            <td colspan="2">Thành tiền</td>                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>HEALER_P#1</td>
                            <td>
                                <a href="" class="thumb">
                                    <img src="" alt=""/>
                                </a>
                            </td>
                            <td>
                                <a href="" title="" class="name-product">iPhone 15 Pro Max</a>
                            </td>
                            <td>33.190.000đ</td>
                            <td>
                                <input type="text" name="num-order" value="" class="num-order">
                            </td>
                            <td>33.190.000đ</td>
                            <td>
                                <a href="" title="" class="del-product"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>HEALER_P#2</td>
                            <td>
                                <a href="" class="thumb">
                                    <img src="" alt=""/>
                                </a>
                            </td>
                            <td>
                                <a href="" title="" class="name-product">iPhone 15 </a>
                            </td>
                            <td>33.190.000đ</td>
                            <td>
                                <input type="text" name="num-order" value="" class="num-order">
                            </td>
                            <td>29.190.000đ</td>
                            <td>
                                <a href="" title="" class="del-product"><i class=" fa fa-trash-o"/>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>HEALER_P#3</td>
                            <td>
                                <a href="" class="thumb">
                                    <img src="" alt=""/>
                                </a>
                            </td>
                            <td>
                                <a href="" title="" class="name-product">iPhone </a>
                            </td>
                            <td>33.190.000đ</td>
                            <td>
                                <input type="text" name="num-order" value="" class="num-order">
                            </td>
                            <td>33.190.000đ</td>
                            <td>
                                <a href="" title="" class="del-product"><i class=" fa fa-trash-o"/>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">
                                <div class="clearfix">
                                    <p id="total-price" class="fl-right">Tổng giá: <span> 90.000.000đ</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7">
                                <div class="clearfix">
                                    <div class="right">
                                        <a href="" id="update-cart" title="">Cập nhật giỏ hàng</a>
                                         <a href="?page=checkout" id="checkout-cart" title="">Thanh toán</a>
                                    </div>
                                </div>
                            </td> 
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="section" id="action-cart-wp">
            <div class="section-detail">
                <p class="title">Click vào<span>"Cập nhật giỏ hàng"</span> để cập nhật số lượng. Nhập vào số lượng</p>
                <a href="?page=home" title="" id="buy-more">Mua tiếp</a>
                <a href="?page=home" title="" id="delete">Xóa giỏ hàng</a>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>