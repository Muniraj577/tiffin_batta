<div class="sticky-cart-content modal-body py-0 px-md-0 px-2">

    <div class="cart-inner p-1 bg-white">
        <div class="fw-bold border-bottom mt-2 pb-md-2 pb-2 px-2 d-flex align-items-center justify-content-between">
            <h4 class="text-orange mb-0">Cart</h4>
            <div class="close cursor-pointer">
                <i class="fa fa-times"></i>
            </div>
        </div>
        <div class="cs-scrollbar px-md-2">

            <!-- Empty cart -->
            <div class="cart-empty text-center px-2">
                <p><span class="svg-cart-icon d-block mb-2"><?php include 'img/empty-cart.svg'?></span> Your cart is
                    empty.</p>
                <button class="bg-orange btn text-white w-100 py-2 px-2 px-md-3 rounded-0">
                    Continue Shopping
                </button>
            </div>
            <!-- Empty cart -->

            <div class="px-2 mt-3 pb-3 border-bottom">
                <div class="order-type d-flex align-items-center mb-2">
                    <p class="fw-bold mr-4 mb-0">Order Type: <span class="text-muted order-type-label">ASAP
                            Pickup</span></p>
                    <button class="badge badge-secondary change-order-type" data-toggle="modal"
                        data-target="#choose_srv_Modal">Change</button>
                </div>
                <p class="p-2 bg-light font-size-small mb-2 d-flex"><i class="fa fa-info-circle me-2 mt-1"></i> Please
                    give us extra time if needed during busy periods</p>
                <div class="delivery-address d-flex align-items-center">
                    <p class="fw-bold mb-0">Delivery Address: <span class="text-muted">Bhaktapur</span></p>
                    <a class="badge badge-secondary py-1 px-2 ml-auto ml-sm-4" href="#">Change</a>
                </div>
            </div>

            <table class="table border-bottom mb-0">

                <tbody>

                    <tr>
                        <td colspan="2" class="px-2">
                            <div class="instruction-text">
                                <p class="fw-bold"> Hot Wings </p>
                                <p> Base Choice </p>
                                <ul class="pl-4 mb-0">
                                    <li> Stuffed Crust</li>
                                </ul>
                            </div>
                        </td>
                        <td class="text-right cart-counter">
                            <div class="price cart-price mb-2">
                                $47.70
                            </div>
                            <div class="d-flex align-items-center justify-content-end">
                                <div class="action">
                                    <button class="remove-btn" href="#"><i
                                            class="fa fa-trash-alt text-danger"></i></button>
                                </div>
                                <div class="quantity-wrap d-flex align-items-center text-center">
                                    <button class="qty-btn"><i class="fa fa-minus"></i></button>
                                    <div class="qty-count">3</div>
                                    <button class="qty-btn"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" class="px-2">
                            <div class="instruction-text">
                                <p class="fw-bold"> Masala Bhat </p>
                                <p> Base Choice </p>
                            </div>
                        </td>
                        <td class="text-right cart-counter">
                            <div class="price cart-price mb-2">
                                $87.70
                            </div>
                            <div class="d-flex align-items-center justify-content-end">
                                <div class="action">
                                    <button class="remove-btn" href="#"><i
                                            class="fa fa-trash-alt text-danger"></i></button>
                                </div>
                                <div class="quantity-wrap d-flex align-items-center text-center">
                                    <button class="qty-btn"><i class="fa fa-minus"></i></button>
                                    <div class="qty-count">2</div>
                                    <button class="qty-btn"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </td>
                    </tr>

                </tbody>
                <tfoot class="table-footer text-right">
                    <tr class="border-bottom-dashed">
                        <td colspan="100%" class="text-right px-2">
                            <span class="pe-5 fw-bold">Cart</span>
                            <span>$47.70</span>
                        </td>
                    </tr>
                    <tr class="border-bottom-dashed">
                        <td colspan="100%" class="text-right px-2">
                            <span class="pe-5 fw-bold">Order Tip</span>
                            <span>$47.70</span>
                        </td>

                    </tr>
                    <tr class="border-bottom-dashed">
                        <td colspan="100%" class="text-right px-2">
                            <span class="pe-5 fw-bold">TAX (10%) inc. in price</span>
                            <span>$52.47</span>
                        </td>

                    </tr>

                    <tr class="border-bottom-dashed px-2">
                        <td colspan="100%">
                            <div class="total-wrap text-center">
                                <span class="text fw-bold text-muted">TOTAL</span>
                                <p class="total-price fw-bold">$ 127.25</p>
                                <span class="text-muted fw-bold">VAT (20%) included</span>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="checkout-btn p-2 p-md-3">
            <button data-toggle="modal" data-target="#checkout_Modal" data-dismiss="modal"
                class="bg-orange btn text-white w-100 py-2 px-3 d-flex align-items-center justify-content-between rounded-0">
                <span>
                    Proceed To Checkout
                </span>
                <span class="price">
                    $ 1452.00
                </span>
            </button>
        </div>
    </div>

</div>