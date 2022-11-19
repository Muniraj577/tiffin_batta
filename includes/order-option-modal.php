 <!-- Order Option Modal -->

 <div class="modal fade" data-backdrop="static" id="choose_srv_Modal" tabindex="-1"
     aria-labelledby="choose_srv_ModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered ">
         <div class="modal-content">
             <div class="modal-header justify-content-center">
                 <p class="modal-title" id="choose_srv_ModalLabel">Choose A Service</p>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body py-0">
                 <div class="row">
                     <div class="col-6 py-3">
                         <div data-target="#show_pickup"
                             class="pickup service_each service_head text-center py-3 active">
                             <i class="fa fa-2x fa-shopping-bag"></i>
                             <p class="mt-2">Pickup</p>
                         </div>
                     </div>

                     <div class="col-6 py-3">
                         <div data-target="#show_delivery"
                             class="delivery service_each service_head text-center py-3">
                             <i class="fa fa-2x fa-car"></i>
                             <p class="mt-2">Delivery</p>
                         </div>
                     </div>

                     <div class="col-12">
                         <div class="append-box text-center" id="show_pickup">
                             <p class="header-general-sm py-2">When Would You Like Your Order?</p>
                             <div class="row justify-content-center">
                                 <div class="col-6 col-md-4 py-2">
                                     <div data-target="#show_now"
                                         class=" service_each service_subhead text-center py-3">
                                         <i class="fa fa-2x fa-hand-point-down"></i>
                                         <p class="mt-2">Now</p>
                                     </div>
                                 </div>

                                 <div class="col-6 col-md-4 py-2">
                                     <div data-target="#show_later"
                                         class=" service_each service_subhead text-center py-3">
                                         <i class="fa fa-2x fa-clock"></i>
                                         <p class="mt-2">Later</p>
                                     </div>
                                 </div>

                                 <div class="col-12">
                                     <div class="append-subbox text-center" id="show_now">
                                         <p class="p-2 mb-2 bg-light font-size-small"><i
                                                 class="fa fa-info-circle mr-2"></i>Order will be ready in approx 11
                                             minutes</p>

                                         <div class="response-text error text-center my-3 py-2">
                                             <p><i class="fa fa-exclamation-circle mr-2"></i>Not Available.</p>
                                         </div>

                                         <button class="theme-btn cart-btn px-4">Start Order</button>
                                     </div>

                                     <div class="append-subbox text-center" id="show_later">
                                         <div class="date_time_wrap mt-3">
                                             <div class="date-wrapper">
                                                 <label class="d-md-none">Date <sup>*</sup></label>
                                                 <div class="input-group date w-100">
                                                     <input type="text" class="form-control date-picker"
                                                         placeholder="Date *">
                                                     <div class="input-group-addon"></div>
                                                 </div>
                                             </div>

                                             <div class="time-wrapper">
                                                 <label class="d-md-none">Time <sup>*</sup></label>
                                                 <div class="input-group w-100">
                                                     <input type="text" id="timepicker" class="form-control clockpicker"
                                                         placeholder="Select Time">
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="response-text error text-center my-3 py-2">
                                             <p><i class="fa fa-exclamation-circle mr-2"></i>Please choose both date &
                                                 time. !</p>
                                         </div>

                                         <div class=" text-center" id="start_order">
                                             <button class="theme-btn cart-btn px-4">Start Order</button>
                                         </div>

                                     </div>

                                 </div>
                             </div>
                         </div>

                         <div class="append-box text-center" id="show_delivery">
                             <p class="p-2 bg-light font-size-small"><i class="fa fa-info-circle mr-2"></i> Please give
                                 us extra time if needed during busy periods</p>

                             <button data-toggle="modal" data-target="#choose_loc_Modal"
                                 class="address_btn text-capitalize mt-3 p-2 w-100">Find your delivery address</button>

                             <form class="ui form mt-3">
                                 <div class="field input-icon">
                                     <i class="fa fa-map-marker-alt"></i>
                                     <input autocomplete="off" type="text" class="form-control"
                                         placeholder="Your Location">
                                 </div>
                                 <div class="two fields">
                                     <div class="field">
                                         <input autocomplete="off" type="text" class="form-control"
                                             placeholder="Street">
                                     </div>
                                     <div class="field">
                                         <input autocomplete="off" type="text" class="form-control" placeholder="City">
                                     </div>
                                 </div>
                                 <div class="two fields">
                                     <div class="field">
                                         <select autocomplete="off" class="form-control ui search dropdown">
                                             <option value="">Select State</option>
                                             <option value="AL">Alabama</option>
                                             <option value="AK">Alaska</option>
                                             <option value="AZ">Arizona</option>
                                             <option value="AR">Arkansas</option>
                                             <option value="CA">California</option>
                                             <option value="CO">Colorado</option>
                                             <option value="CT">Connecticut</option>
                                             <option value="DE">Delaware</option>
                                             <option value="DC">District Of Columbia</option>
                                             <option value="FL">Florida</option>
                                             <option value="GA">Georgia</option>
                                             <option value="HI">Hawaii</option>
                                             <option value="ID">Idaho</option>
                                             <option value="IL">Illinois</option>
                                             <option value="IN">Indiana</option>
                                             <option value="IA">Iowa</option>
                                             <option value="KS">Kansas</option>
                                             <option value="KY">Kentucky</option>
                                             <option value="LA">Louisiana</option>
                                             <option value="ME">Maine</option>
                                             <option value="MD">Maryland</option>
                                             <option value="MA">Massachusetts</option>
                                             <option value="MI">Michigan</option>
                                             <option value="MN">Minnesota</option>
                                             <option value="MS">Mississippi</option>
                                             <option value="MO">Missouri</option>
                                             <option value="MT">Montana</option>
                                             <option value="NE">Nebraska</option>
                                             <option value="NV">Nevada</option>
                                             <option value="NH">New Hampshire</option>
                                             <option value="NJ">New Jersey</option>
                                             <option value="NM">New Mexico</option>
                                             <option value="NY">New York</option>
                                             <option value="NC">North Carolina</option>
                                             <option value="ND">North Dakota</option>
                                             <option value="OH">Ohio</option>
                                             <option value="OK">Oklahoma</option>
                                             <option value="OR">Oregon</option>
                                             <option value="PA">Pennsylvania</option>
                                             <option value="RI">Rhode Island</option>
                                             <option value="SC">South Carolina</option>
                                             <option value="SD">South Dakota</option>
                                             <option value="TN">Tennessee</option>
                                             <option value="TX">Texas</option>
                                             <option value="UT">Utah</option>
                                             <option value="VT">Vermont</option>
                                             <option value="VA">Virginia</option>
                                             <option value="WA">Washington</option>
                                             <option value="WV">West Virginia</option>
                                             <option value="WI">Wisconsin</option>
                                             <option value="WY">Wyoming</option>
                                         </select>
                                     </div>
                                     <div class="field">
                                         <input type="text" class="form-control" placeholder="Zip">
                                     </div>
                                 </div>
                                 <div class="loader text-center">
                                     <p><i class="fa fa-spinner fa-spin me-1"></i> Loading</p>
                                 </div>
                                 <div class="response-text success text-center my-3 py-2">
                                     <p>Location Found</p>
                                 </div>

                             </form>

                             <div class="append-box text-center mt-3" id="show_pickup_delivery">
                                 <p class="header-general-sm py-2">When Would You Like Your Order?</p>
                                 <div class="row justify-content-center">
                                     <div class="col-6 col-md-4 py-2">
                                         <div data-target="#show_now_delivery"
                                             class=" service_each service_subhead text-center py-3">
                                             <i class="fa fa-2x fa-hand-point-down"></i>
                                             <p class="mt-2">Now</p>
                                         </div>
                                     </div>

                                     <div class="col-6 col-md-4 py-2">
                                         <div data-target="#show_later_delivery"
                                             class=" service_each service_subhead text-center py-3">
                                             <i class="fa fa-2x fa-clock"></i>
                                             <p class="mt-2">Later</p>
                                         </div>
                                     </div>

                                     <div class="col-12">
                                         <div class="append-subbox text-center" id="show_now_delivery">
                                             <p class="p-2 mb-2 bg-light font-size-small"><i
                                                     class="fa fa-info-circle mr-2"></i>Order will be ready in approx 11
                                                 minutes</p>

                                             <div class="response-text error text-center my-3 py-2">
                                                 <p><i class="fa fa-exclamation-circle mr-2"></i>Not Available !</p>
                                             </div>

                                             <button class="theme-btn cart-btn px-4">Start Order</button>
                                         </div>

                                         <div class="append-subbox text-center" id="show_later_delivery">

                                             <div class="date_time_wrap mt-3">

                                                 <div class="date-wrapper">
                                                     <label class="d-md-none">Date <sup>*</sup></label>
                                                     <div class="input-group date w-100">
                                                         <input type="text" class="form-control date-picker"
                                                             placeholder="Date *">
                                                         <div class="input-group-addon"></div>
                                                     </div>
                                                 </div>
                                                 <div class="time-wrapper">
                                                     <label class="d-md-none">Time <sup>*</sup></label>
                                                     <div class="input-group w-100">
                                                         <input type="text" id="timepickers"
                                                             class="form-control clockpicker" placeholder="Select Time">
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="response-text error text-center my-3 py-2">
                                                 <p><i class="fa fa-exclamation-circle mr-2"></i>Please choose both date
                                                     & time. !</p>
                                             </div>

                                             <div class=" text-center" id="start_order_delivery">
                                                 <button class="theme-btn cart-btn px-4">Start Order</button>
                                             </div>

                                         </div>

                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>

         </div>
     </div>
 </div>
