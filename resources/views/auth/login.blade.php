@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class=" col-10 col-md-4"> --}}
                <div class="section-right col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                 <img src="backend/assets/img/brand/sistem.png " alt="" class="w-50 mb-4">
                </div>
                <form method="POST" action="{{ route('login') }}">
                  @csrf
    
                  <div class="form-group ">
                      <label for="email" >{{ __('E-Mail Address') }}</label>
    
                      <div class="form-group">
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
    
                  <div class="form-group ">
                      <label for="password">{{ __('Password') }}</label>
    
                      <div class="form-group">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                          <button type="submit" class="btn btn-lg btn-primary w-100">
                              {{ __('Login') }}
                          </button>
    
                          @if (Route::has('register'))
                          <p class="d-block tex-center mt-4 "> Not Registered?
                              <a href="{{ route('register') }}">
                                  {{ __('Register Now!') }}
                              </a>
                              </p>
                          @endif
                    
              </form>
              </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
