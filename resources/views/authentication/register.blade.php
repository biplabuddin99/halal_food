@extends('authentication.auth')

@section('content')
<div class="col right-side" style="padding: 0">
    <div class="form p-4">
      <div class="bg-white rounded shadow p-3">
        <p>Registation</p>
        <hr />
        @if ($errors->any())
        <div class="alert alert-danger mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                <p class="invalid-tooltips">{{ $error }}</p>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="m-auto my-3 w-50">
          <form action="{{ route('customer.store') }}" method='post'>
                @csrf
                <div class="mb-3">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"
                    >First Name</label
                    >
                    <input
                    type="text"
                    class="form-control @error('first_name') is-invalid @enderror"
                    id="exampleInputEmail1"
                    name="first_name" value="{{ old('first_name') }}" placeholder="Enter Your First Name"
                    aria-describedby="emailHelp"
                    />
                    @if($errors->has('first_name'))
                        <small class="d-block text-danger">
                            {{$errors->first('first_name')}}
                        </small>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"
                    >Last Name</label
                    >
                    <input
                    type="text"
                    class="form-control @error('last_name') is-invalid @enderror"
                    id="exampleInputEmail1"
                    name="last_name" value="{{ old('last_name') }}" placeholder="Enter Your Last Name"
                    aria-describedby="emailHelp"
                    />
                    @if($errors->has('last_name'))
                    <small class="d-block text-danger">
                        {{ $errors->first('last_name') }}
                    </small>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"
                    >Mobile Number</label
                    >
                    <input
                    type="number"
                    class="form-control @error('contact') is-invalid @enderror"
                    id="exampleInputEmail1"
                    name="contact" value="{{ old('contact') }}" placeholder="Enter Your Phone Number"
                    aria-describedby="emailHelp"
                    />
                    @if($errors->has('contact'))
                    <small class="d-block text-danger">
                        {{ $errors->first('contact') }}
                    </small>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"
                    >Shipping Address</label
                    >
                    <input
                    type="text"
                    class="form-control @error('shipping_address') is-invalid @enderror"
                    id="exampleInputEmail1"
                    name="shipping_address" value="{{ old('shipping_address') }}" placeholder="Enter Your Place"
                    aria-describedby="emailHelp"
                    />
                    @if($errors->has('shipping_address'))
                    <small class="d-block text-danger">
                        {{ $errors->first('shipping_address') }}
                    </small>
                    @endif
                </div>
                <label for="exampleInputEmail1" class="form-label"
                    >Email address</label
                >

                <input
                    type="email"
                    class="form-control @error('email') is-invalid @enderror"
                    id="exampleInputEmail1"
                    name="email" value="{{ old('email') }}" placeholder="Enter Your Email"
                    aria-describedby="emailHelp"
                />
                @if($errors->has('email'))
                <small class="d-block text-danger">
                    {{ $errors->first('email') }}
                </small>
                @endif
                <div id="emailHelp" class="form-text">
                    We'll never share your email with anyone else.
                </div>
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                    >Password</label
                >
                <input
                    type="password"
                    class="form-control @error('password') is-invalid @enderror"
                    id="exampleInputPassword1"
                    name="password" value="{{ old('password') }}" placeholder="Enter Your Passwoard"
                />
                @if($errors->has('password'))
                <small class="d-block text-danger">
                    {{ $errors->first('password') }}
                </small>
                @endif
                </div>
                <div class="mb-3 form-check">
                <input
                    type="checkbox"
                    class="form-check-input"
                    id="exampleCheck1"
                    name="check_me_out"
                    value="1"
                />
                <label class="form-check-label" for="exampleCheck1"
                    >Check me out</label
                > <a class="ms-2" href="{{ route('login') }}"><span>or Login</span></a>
                </div>
                <button type="submit" class="submit shadow">Submit</button>
                {{-- <a class="submit shadow" href="#">Submit</a> --}}
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
