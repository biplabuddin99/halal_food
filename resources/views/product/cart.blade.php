@extends('master')

@section('content')

<div class="col right-side" style="padding: 0">
    <div class="cart p-4">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
      </nav>
      <div class="cart-condition shadow">
        <p>Add <span>$45.15</span> to cart and get free shipping!</p>
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
                    <th scope="col"></th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Subtotal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img
                        class="img-fluid"
                        src="./resource/img/vagitable.jpg"
                        alt=""
                      />
                    </td>
                    <td>Fresh Organic Broccoli Crowns</td>
                    <td>$4.85</td>
                    <td>
                      <form class="quentity d-flex" action="">
                        <div class="me-2">
                          <i class="bi bi-dash minus"></i>
                        </div>
                        <div class="num">01</div>
                        <div class="ms-2">
                          <i class="bi bi-plus plus"></i>
                        </div>
                      </form>
                    </td>
                    <td>$9.70</td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        class="img-fluid"
                        src="./resource/img/vagitable.jpg"
                        alt=""
                      />
                    </td>
                    <td>Fresh Organic Broccoli Crowns</td>
                    <td>$4.85</td>
                    <td>
                      <form class="quentity d-flex" action="">
                        <div>
                          <i class="bi bi-dash"></i>
                        </div>
                        <input type="text" placeholder="1" value="1" />
                        <div>
                          <i class="bi bi-plus"></i>
                        </div>
                      </form>
                    </td>
                    <td>$9.70</td>
                  </tr>
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
            </div>
          </div>
          <div class="col-sm-4 p-3">
            <div class="rounded bg-white my-3 shadow">
              <div class="cart-detaits p-3">
                <p>CART TOTALS</p>
                <hr />
                <p>Shipping Charge :<span>$1000.00</span></p>
                <p>Discount :<span>$1000.00</span></p>
                <p>Grant Total :<span>$1000.00</span></p>
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

<script>
	const plus=document.querySelector(".plus"),
	minus=document.querySelector(".minus"),
	num=document.querySelector(".num");

	let a=1;
	plus.addEventListener("click",()=>{
	 a++;
	 a= (a<10)?"0" + a:a;
	 num.innerText=a;
	//  console.log(a);
	 });
	minus.addEventListener("click",()=>{
	if(a>1){
		a--;
		a=(a<10)?"0" + a : a;
		num.innerText =a;
		}

	 });

	</script>

@endsection