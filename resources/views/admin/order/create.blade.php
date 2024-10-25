@extends('admin.master')

@section('title')
    <title>Order Create</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Order Create</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <!-- Shopping Cart -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Your Shopping Cart</h4>
                        </div>
                        <div class="card-body">
                            <!-- Item List -->
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="https://provengraphics.com/wp-content/uploads/2018/02/300x300.png" alt="Product Image" style="width: 50px; height: 50px;">
                                            </td>
                                            <td>
                                                <strong>Cute Kids Cardigan - 6T</strong><br>
                                                <small>Pink lorem ipsum dolor sit amet</small>
                                            </td>
                                            <td>$55.99</td>
                                            <td>
                                                <input type="number" value="1" min="1" style="width: 50px;">
                                            </td>
                                            <td>
                                                <button class="btn btn-danger btn-sm">Remove</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://provengraphics.com/wp-content/uploads/2018/02/300x300.png" alt="Product Image" style="width: 50px; height: 50px;">
                                            </td>
                                            <td>
                                                <strong>Boys Blazer - Youth Medium</strong><br>
                                                <small>Pink lorem ipsum dolor sit amet</small>
                                            </td>
                                            <td>$49.99</td>
                                            <td>
                                                <input type="number" value="1" min="1" style="width: 50px;">
                                            </td>
                                            <td>
                                                <button class="btn btn-danger btn-sm">Remove</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://provengraphics.com/wp-content/uploads/2018/02/300x300.png" alt="Product Image" style="width: 50px; height: 50px;">
                                            </td>
                                            <td>
                                                <strong>Cute Kids Cardigan - 4T</strong><br>
                                                <small>Pink lorem ipsum dolor sit amet</small>
                                            </td>
                                            <td>$55.99</td>
                                            <td>
                                                <input type="number" value="1" min="1" style="width: 50px;">
                                            </td>
                                            <td>
                                                <button class="btn btn-danger btn-sm">Remove</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Order Summary</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-6">Subtotal:</div>
                                <div class="col-6 text-right">$70.00</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6">Shipping:</div>
                                <div class="col-6 text-right">$9.00</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6">Tax:</div>
                                <div class="col-6 text-right">$5.00</div>
                            </div>
                            <hr>
                            <div class="row mb-4">
                                <div class="col-6"><strong>Total:</strong></div>
                                <div class="col-6 text-right"><strong>$84.00</strong></div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Coupon Code">
                                <button class="btn btn-secondary mt-2 w-100">Apply</button>
                            </div>

                            <button class="btn btn-primary btn-block">Checkout</button>
                            <button class="btn btn-info btn-block mt-2">Pay with PayPal</button>
                            <button class="btn btn-dark btn-block mt-2">Buy with G Pay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
