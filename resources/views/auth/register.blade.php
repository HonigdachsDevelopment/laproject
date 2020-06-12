@extends('layouts.master')

@section('content')
    <x-formonly-wrapper>
        <div class="card-header h2">{{ __('Register') }}</div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="card-body">

                <div class="form-group row">
                    <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-12">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required
                               autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                               required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required
                               autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                    <div class="form-group row">
                        <div class="col-md-12 mt-4">
                        <button type="submit" class="btn btn-block btn-outline-success float-right ">
                            {{ __('Register') }}
                        </button>
                        </div>
                    </div>
            </div>

        </form>


    </x-formonly-wrapper>
@endsection
