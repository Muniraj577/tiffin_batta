<!-- Order Success Modal -->

<div class="modal fade" data-backdrop="static" id="order-success-modal" tabindex="-1"
    aria-labelledby="order-success-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-0">
            <div class="modal-header p-0 border-none">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 py-3">
                        <div class="left-col h-100 text-center">

                            <div class="check-icon mb-4">
                                <?php include 'img/check-circle.svg';?>
                            </div>
                            <p class="font-size-21 font-weight-bold">Order Confirmed</p>

                            <p>Your order has been placed successfully.</p>

                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#loyalty-modal">View
                                Loyalty Modal</a>
                            <div class="button mt-5">
                                <a href="user-dashboard.php" class="text-white theme-btn bg-orange text-capitalize">go
                                    to your order</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>