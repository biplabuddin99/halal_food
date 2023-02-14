@extends('master')

@section('content')

<div class="col right-side" style="padding: 0">
    <div class="cart p-4">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
      </nav>
      <div class="cart-condition shadow">
        {{-- @php
            $first_number = 5000;
            $second_number = $total_price;
            $sum_total = $first_number - $second_number
            // return $sum_total;
        @endphp --}}
        <p>Add <span>${{ $total_price }}</span> to cart and get free shipping!</p>
        <div class="progress mb-3">
          <div
            class="progress-bar bg-danger"
            role="progressbar"
            aria-label="Basic example"
            style="width: 25%"
            aria-valuenow="25"
            aria-valuemin="0"
            aria-valuemax="100"
          ></div>
        </div>
      </div>
      <div class="prorduct-table">
        <div class="row">
          <div class="col-sm-8 p-3">
            <div class="rounded bg-white my-3 shadow p-2">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Subtotal</th>
                    <th class="col">Remove</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($carts as $cartitem)
                    <tr>
                        <td>
                          <img
                            class="img-fluid"
                            src="{{ asset('./../../albaik/') }}/{{ $cartitem->options->product_image }}"
                            alt=""
                          />
                        </td>
                        <td>{{ $cartitem->name }}</td>
                        <td>${{ $cartitem->price }}</td>
                        <td>
                            <strong class="ps-2">{{ $cartitem->qty }}</strong>
                        </td>
                        <td>${{ $cartitem->price*$cartitem->qty  }}</td>
                        <td>
                            <a href="{{ route('removefrom.cart',['cart_id' => $cartitem->rowId]) }}">
                                <i class="ms-3 text-danger bi bi-x-circle-fill"></i>
                            </a>
                        </td>
                      </tr>
                    @empty

                    @endforelse

                </tbody>
              </table>
            </div>
            <div class="rounded bg-white my-3 shadow p-3">
              <div class="input-group mb-3">
                <input
                  type="text"
                  class="form-control"
                  aria-label="Sizing example input"
                  aria-describedby="inputGroup-sizing-default"
                />
                <span
                  class="input-group-text"
                  id="inputGroup-sizing-default"
                  >Apply Cupon</span
                >
              </div>
              <div class="input-group mb-3">
                <a class="btn btn-danger" href="{{ route('product.index') }}">Continue Shopping</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4 p-3">
            <div class="rounded bg-white my-3 shadow">
              <div class="cart-detaits p-3">
                <p>CART TOTALS</p>
                <hr />
                <p>Shipping Charge :<span>$1000.00</span></p>
                <p>Discount :<span>$1000.00</span></p>
                <p>Grant Total :<span>${{ $total_price }}</span></p>
                <hr />
                <a class="submit shadow" href="#">Process to Chackout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    let addBtn= document.querySelector('#add');
    let subBtn= document.querySelector('#sub');
    let qty= document.querySelector('#qtyBox');
    // console.log(addBtn,subBtn,qty);
    addBtn.addEventListener('click',()=>{
        qty.value=parseInt(qty.value)+1;
    });
    subBtn.addEventListener('click',()=>{
        if(qty.value <= 0){
            qty.value=0;
        }else{
            qty.value=parseInt(qty.value) -1;
        }
    });
</script>

@endsection
