<!-- Cart View Modal -->

<div class="modal fade" data-backdrop="static" id="cart_view_Modal" tabindex="-1" aria-labelledby="cart_view_ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content p-0">
            <div class="modal-header">
                <p class="modal-title w-100 font-weight-bold text-orange">Cart</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body py-0">
                <div class="cart-empty text-center">
                    <p><span class="svg-cart-icon d-block mb-2"><?php include 'img/empty-cart.svg'?></span> Your cart
                        is empty.</p>
                </div>

                <div class="px-2 mt-3 pb-3 border-bottom">
                    <div class="order-type d-flex align-items-center mb-2">
                        <p class="font-weight-bold mr-4">Order Type: <span class="text-muted">Pickup</span></p>
                        <a class="text-orange" href="#" data-toggle="modal" data-target="#choose_srv_Modal">Change</a>
                    </div>
                    <p class="p-2 bg-light font-size-small mb-2"><i class="fa fa-info-circle mr-2"></i> Please give us
                        extra time if needed during busy periods</p>
                    <div class="delivery-address d-flex align-items-center">
                        <p class="font-weight-bold mr-4">Delivery Address: <span class="text-muted">Bhaktapur</span></p>
                        <a class="text-orange" href="#">Change</a>
                    </div>
                </div>

                <table class="table border-bottom mb-0">
                    <thead>
                        <th>Oty</th>
                        <th class="item">Item</th>
                        <th>Price</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">3</td>
                            <td>
                                <p class="font-weight-bold"> Hot Wings </p>
                                <div class="instruction-text">
                                    <p> Base Choice </p>
                                    <ul class="ps-4 mb-0">
                                        <li> Stuffed Crust</li>
                                    </ul>
                                </div>
                            </td>
                            <td class="text-right">
                                $47.70
                            </td>
                            <td class="pe-0">
                                <div class="action">
                                    <button class="remove-btn" href="#"><i
                                            class="fa fa-trash-alt text-danger"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot class="table-footer">
                        <tr class="border-bottom-dashed">
                            <td></td>
                            <td>Cart</td>
                            <td>$47.70</td>
                            <td></td>
                        </tr>
                        <tr class="border-bottom-dashed">
                            <td></td>
                            <td>Order Tip</td>
                            <td>$47.70</td>
                            <td></td>
                        </tr>
                        <tr class="border-bottom-dashed">
                            <td></td>
                            <td>TAX (10%) inc. in price</td>
                            <td>$52.47</td>
                            <td></td>
                        </tr>
                        <tr class="border-bottom-dashed">
                            <td></td>
                            <td class="font-weight-bold">Total</td>
                            <td class="font-weight-bold">$52.47</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>

                <div class="checkout-btn py-3">
                    <button data-toggle="modal" data-target="#checkout_Modal" data-dismiss="modal"
                        class="bg-orange btn text-white w-100 p-2">Proceed To Checkout</button>
                </div>

            </div>
        </div>
    </div>
</div>