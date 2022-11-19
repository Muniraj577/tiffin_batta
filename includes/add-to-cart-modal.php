<!-- Add To Cart Modal -->

<div class="modal fade" data-backdrop="static" id="add_to_cart_Modal" tabindex="-1"
    aria-labelledby="add_to_cart_ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content p-0">
            <div class="modal-header p-0 border-none">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="row no-gutters">
                    <div class="col-lg-12">
                        <div class="product-img border-bottom text-center">
                            <img src="img/cart-img.jpeg" alt="">
                        </div>
                        <div class="food-name py-3 px-4">
                            <div class="d-flex justify-content-between mb-2 mt-3 mt-md-0">
                                <p class="font-weight-bold"><span class="font-size-21"> Hot Wings </span> <br>
                                    <em>Chicken Tandoori ( Served with mayonees & FrenchFries )</em>
                                </p>
                                <p class="font-weight-bold font-size-21 text-orange">$<span
                                        id="actual_price">11.90</span></p>
                            </div>
                            <p>Cheese, tomato & basil with tomato base</p>
                        </div>

                        <div class="item-details px-4 py-2 border-bottom text-justify">
                            <p>This will be the whole description about the item. Lorem ipsum dolor, sit amet
                                consectetur adipisicing elit.</p>
                        </div>

                        <div class="toppings-drop">
                            <div class="drop-head d-flex align-items-center justify-content-between px-4 py-2">
                                <div class="text">
                                    <p class="font-weight-bold"> Base Choice </p>
                                    <p class="text-secondary"> Select one (Required) </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-chevron-down"></i>
                                </div>
                            </div>
                            <div class="drop-content px-4">
                                <div class="drop-content-each py-2 d-flex align-items-center justify-content-between">
                                    <p>Classic</p>
                                    <div class="custom-control custom-switch">
                                        <input type="radio" name="choices" class="custom-control-input"
                                            id="classic_choice">
                                        <label class="custom-control-label" for="classic_choice"></label>
                                    </div>
                                </div>
                                <div class="drop-content-each py-2 d-flex align-items-center justify-content-between">
                                    <p>Thin</p>
                                    <div class="custom-control custom-switch">
                                        <input type="radio" name="choices" class="custom-control-input"
                                            id="thin_choice">
                                        <label class="custom-control-label" for="thin_choice"></label>
                                    </div>
                                </div>
                                <div class="drop-content-each py-2 d-flex align-items-center justify-content-between">
                                    <p>Stuffed Crust</p>
                                    <div class="custom-control custom-switch">
                                        <input type="radio" name="choices" class="custom-control-input"
                                            id="cust_choice">
                                        <label class="custom-control-label" for="cust_choice"></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="toppings-drop">
                            <div class="drop-head d-flex align-items-center justify-content-between px-4 py-2">
                                <div class="text">
                                    <p class="font-weight-bold"> Extra Toppings </p>
                                    <p class="text-secondary"> Select multiple (Optional)</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-chevron-down"></i>
                                </div>
                            </div>
                            <div class="drop-content px-4">
                                <div class="drop-content-each py-2 d-flex align-items-center justify-content-between">
                                    <p>Extra Onoin</p>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="check_one">
                                        <label for="check_one"
                                            class="custom-control-label text-capitalize cursor-pointer"></label>
                                    </div>
                                </div>
                                <div class="drop-content-each py-2 d-flex align-items-center justify-content-between">
                                    <p>Extra Capsicum</p>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="check_two">
                                        <label for="check_two"
                                            class="custom-control-label text-capitalize cursor-pointer"></label>
                                    </div>
                                </div>
                                <div class="drop-content-each py-2 d-flex align-items-center justify-content-between">
                                    <p>Extra Pineapple</p>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="check_three">
                                        <label for="check_three"
                                            class="custom-control-label text-capitalize cursor-pointer"></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="toppings-drop">
                            <div class="drop-head d-flex align-items-center justify-content-between px-4 py-2">
                                <div class="text">
                                    <p class="font-weight-bold"> Ingredients </p>
                                    <p class="text-secondary"> Un-check to remove </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-chevron-down"></i>
                                </div>
                            </div>
                            <div class="drop-content px-4">
                                <div class="drop-content-each py-2 d-flex align-items-center justify-content-between">
                                    <p>Cheese</p>
                                    <div class="custom-control custom-checkbox checkbox">
                                        <input data-index="0" data-related-to="toppingsmushrooms" data-price="1.25"
                                            value="Mushrooms" type="checkbox" name="toppingsmushrooms"
                                            class="custom-control-input product-options-value "
                                            id="options-toppingsmushrooms-0">
                                        <label class="custom-control-label" for="options-toppingsmushrooms-0"></label>
                                    </div>
                                </div>
                                <div class="drop-content-each py-2 d-flex align-items-center justify-content-between">
                                    <p>Tomato</p>
                                    <div class="custom-control custom-checkbox checkbox">
                                        <input data-index="0" data-related-to="toppingsmushrooms" data-price="1.25"
                                            value="Mushrooms" type="checkbox" name="toppingsmushrooms"
                                            class="custom-control-input product-options-value "
                                            id="options-toppingsmushrooms-0">
                                        <label class="custom-control-label" for="options-toppingsmushrooms-0"></label>
                                    </div>
                                </div>
                                <div class="drop-content-each py-2 d-flex align-items-center justify-content-between">
                                    <p>Sausage</p>
                                    <div class="custom-control custom-checkbox checkbox">
                                        <input data-index="0" data-related-to="toppingsmushrooms" data-price="1.25"
                                            value="Mushrooms" type="checkbox" name="toppingsmushrooms"
                                            class="custom-control-input product-options-value "
                                            id="options-toppingsmushrooms-0">
                                        <label class="custom-control-label" for="options-toppingsmushrooms-0"></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="instruction px-4 py-2">
                            <div class="form-group align-items-center">
                                <p class="font-weight-bold"> Instruction </p>
                                <textarea rows="3" class="form-control border-none cs-scrollbar px-0" type="text"
                                    placeholder="Special Instructions..."></textarea>
                            </div>
                        </div>

                        <div class="response-text success text-center mt-4 mx-4 py-2">
                            <p><i class="fa fa-check-circle mr-2"></i>Added to cart.</p>
                        </div>

                        <div class="cart-footer p-4 d-flex align-items-center justify-content-between">
                            <div class="qty-count d-flex align-items-center justify-content-between">
                                <div class="minus-btn bttn p-2">
                                    <i class="fa fa-minus"></i>
                                </div>
                                <div class="value bttn p-2">
                                    <input class="text-orange font-weight-bold" type="num" value="1" disabled="disabled"
                                        id="cart_value">
                                </div>
                                <div class="add-btn bttn p-2">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>

                            <button class="theme-btn">Add To Cart <span class="ml-3 font-weight-bold">$
                                    <span id="total_price">11.90</span></span></button>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>