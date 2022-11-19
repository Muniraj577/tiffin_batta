<!-- Checkout Modal -->

<div class="modal fade" data-backdrop="static" id="checkout_Modal" tabindex="-1" aria-labelledby="checkout_ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-scrollable">
        <div class="modal-content p-0">
            <div class="modal-header justify-content-start mb-4">
                <a href="#" data-dismiss="modal" data-target="#cart_view_Modal" data-toggle="modal"
                    class="d-block icon mr-3 text-dark">
                    <i class="fa fa-chevron-circle-left fa-2x"></i>
                </a>
                <div class="text">
                    <p class="modal-title w-100 font-weight-bold text-orange">Checkout</p>
                    <p class="line-height-15">Confirm your order details.</p>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body py-0">

                <div class="order-details border mb-3">
                    <p class="font-weight-bold mb-2 px-3 py-2 bg-light border-bottom">Order Details</p>
                    <div class="border-bottom-dashed d-flex justify-content-between py-2 mx-3">
                        <p>Service</p>
                        <p>Pickup</p>
                    </div>
                    <div class="border-bottom-dashed d-flex justify-content-between py-2 mx-3">
                        <p>Due</p>
                        <p>11/03/2021, 1:30 am</p>
                    </div>
                    <div class=" d-flex justify-content-between py-2 mx-3">
                        <p>Delivery Address</p>
                        <p class="text-right max-width-250">351 Lonsdale Street, Melbourne Victoria 3000, Australia</p>
                    </div>
                </div>

                <div class="customers border pb-3">
                    <div
                        class="d-flex align-items-center justify-content-between mb-3 px-3 py-2 bg-light border-bottom">
                        <div class="text">
                            <p class="font-weight-bold line-height-15">Customer</p>
                            <small>Login to save your order & details</small>
                        </div>
                        <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#user_login_Modal"
                            class="theme-btn py-2">Login</a>
                    </div>

                    <div class="form-group px-3">
                        <input type="text" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="form-group px-3">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group px-3">
                        <input type="text" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="form-group px-3">
                        <textarea rows="3" type="text" class="form-control" placeholder="Order Notes"></textarea>
                    </div>
                </div>

                <div class="tip-wrapper border pb-4 mt-3">
                    <p class="font-weight-bold mb-3 px-3 py-2 bg-light border-bottom">Add A Tip</p>
                    <div class="tips px-3">
                        <button class="active" href="#">10%</button>
                        <button href="#">20%</button>
                        <button href="#">30%</button>
                        <button href="#">40%</button>
                        <button href="#">50%</button>
                    </div>
                    <h6 class="or my-3 text-center mx-3"><span>OR</span></h6>
                    <p class="text-muted px-3">You may provide a custom TIP amount instead.</p>
                    <div class="px-3">
                        <div class="input-group mt-2">
                            <i class="fa fa-dollar-sign"></i>
                            <input type="text" class="form-control" placeholder="Custom tip amount">
                        </div>
                    </div>
                    <p class="px-3 text-error mt-2">Enter a valid tip amount.</p>

                </div>

                <div class="promo-code mt-3">
                    <p class="font-weight-bold px-3 py-2 bg-light">Promo Code</p>

                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter your promo code">
                        <button> Apply</button>
                    </div>
                    <p class="px-3 text-error mt-2">Invalid Promo code.</p>
                </div>

                <div class="redeem border mt-3 pb-3">
                    <p class="font-weight-bold px-3 py-2 bg-light border-bottom">Redeem</p>

                    <div class="loyalty-details border-bottom mb-3">
                        <div class="pull-left mr-3">
                            <div class="img-box">
                                <img src="img/trophy.png" alt="">
                            </div>
                        </div>
                        <div class="pull-right">
                            <p>Your current points: <span class="pts">348</span> <small
                                    class="text-muted">points</small> <strong>($ 38.34)</strong></p>
                            <p class="text-success">You can use your loyalty points to pay for this order</p>
                        </div>
                    </div>

                    <div class="custom-control custom-checkbox mx-3">
                        <input type="checkbox" class="custom-control-input" id="redeem_checkbox" required>
                        <label class="custom-control-label text-capitalize cursor-pointer" for="redeem_checkbox"> Redeem
                            loyalty points </label>
                    </div>

                    <div class="redeem-text mt-2 mx-3">
                        <p class="alert alert-success mb-0 py-2">Loyalty points applies successfully.</p>
                    </div>
                </div>

                <div class="customers border mt-3">
                    <p class="font-weight-bold mb-3 px-3 py-2 bg-light border-bottom">Send To</p>

                    <div class="form">
                        <div class="form-group px-3">
                            <input type="text" class="form-control" placeholder="Recipient Full Name">
                        </div>
                        <div class="form-group px-3">
                            <input type="text" class="form-control" placeholder="Recipient Email">
                        </div>
                        <div class="form-group px-3">
                            <input type="text" class="form-control" placeholder="Confirm Recipient Email">
                        </div>
                        <div class="form-group px-3">
                            <input type="text" class="form-control" placeholder="Recipient Phone Number">
                        </div>
                        <div class="form-group px-3">
                            <textarea rows="3" class="form-control" placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>

                <div class="cart-total border mt-3">
                    <p class="font-weight-bold mb-2 px-3 py-2 bg-light border-bottom">Cart Total</p>
                    <div class="border-bottom-dashed d-flex justify-content-between py-2 mx-3">
                        <p>Tip Amount</p>
                        <p>$10</p>
                    </div>
                    <div class="border-bottom-dashed d-flex justify-content-between py-2 mx-3">
                        <p>Discount(%)</p>
                        <p>5%</p>
                    </div>
                    <div class="border-bottom-dashed d-flex justify-content-between py-2 mx-3">
                        <p>Sub Total</p>
                        <p>$25.35</p>
                    </div>
                    <div class="d-flex justify-content-between py-2 mx-3">
                        <p class="font-weight-bold">Total</p>
                        <p class="font-weight-bold">$49.35</p>
                    </div>
                </div>

                <div class="payment-method border mt-3 pb-3">
                    <div
                        class="d-flex align-items-center justify-content-between mb-3 px-3 py-2 bg-light border-bottom">
                        <div class="text">
                            <p class="font-weight-bold">Payment Method</p>
                        </div>
                    </div>

                    <div class="payment-lists px-3">
                        <div class="payment-card d-flex align-items-center justify-content-center">
                            <div class="custom-control custom-radio w-100">
                                <input type="radio" class="custom-control-input" id="card_pay" name="radio-stacked"
                                    required>
                                <label class="custom-control-label text-right w-100 px-4 py-2"
                                    for="card_pay">Card</label>
                            </div>
                        </div>
                        <div class="payment-card d-flex align-items-center justify-content-center">
                            <div class="custom-control custom-radio w-100">
                                <input type="radio" class="custom-control-input" id="credit_pay" name="radio-stacked"
                                    required>
                                <label class="custom-control-label text-right w-100 px-4 py-2" for="credit_pay">Credit
                                    Card</label>
                            </div>
                        </div>
                        <div class="payment-card d-flex align-items-center justify-content-center">
                            <div class="custom-control custom-radio w-100">
                                <input type="radio" class="custom-control-input has-input" id="paypal_pay"
                                    name="radio-stacked" required>
                                <label class="custom-control-label text-right w-100 px-4 py-2" for="paypal_pay">Pay
                                    Pal</label>
                            </div>
                        </div>

                        <div id="card-input-box" class="input-group mt-3">
                            <div id="secure-submit" class="p-3 border">
                                <div class="form-group">
                                    <label for="creditCardNumber">Card Number:</label>
                                    <input class="form-control px-3" type="tel" id="creditCardNumber"
                                        placeholder="•••• •••• •••• ••••">
                                </div>
                                <div class="form-group">
                                    <label for="creditCardExpirationYear">Card Expiration:</label>
                                    <div class="input-group creditcard-exp-wrap">
                                        <select id="creditCardExpirationYear" class="select creditcard-exp w-100">
                                            <option disabled selected>YYYY</option>
                                            <option>21</option>
                                            <option>22</option>
                                            <option>23</option>
                                            <option>24</option>
                                            <option>25</option>
                                        </select>

                                        <select id="creditCardExpirationMonth" class="select creditcard-exp w-100">
                                            <option disabled selected>MM</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="creditCardCvc">Card CVC:</label>
                                    <input class="form-control px-3" type="tel" id="creditCardCvc" placeholder="CVC">
                                </div>
                            </div>
                            <div id="card_errors"></div>
                        </div>

                        <p id="card_errors">Invalid Card.</p>

                    </div>

                </div>

                <div class="terms my-2 py-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="terms_checkbox" required>
                        <label for="terms_checkbox" class="custom-control-label text-capitalize cursor-pointer"><a
                                href="#" data-toggle="modal" data-target="#terms-modal">Accept Terms & Conditions </a>
                        </label>
                    </div>
                </div>

                <div class="response-text error py-2">
                    <ul class="mb-0">
                        <li>Fields cannot be empty.</li>
                        <li>Check for errors above.</li>
                    </ul>
                </div>
                <button data-toggle="modal" data-dismiss="modal" data-target="#order-success-modal"
                    class="btn bg-orange w-100 my-3 text-white">Continue To Payment</button>

            </div>
        </div>
    </div>
</div>
