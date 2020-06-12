@extends('layouts.master')

@section('content')
    <x-main-wrapper>

        <div class="card">
            <!--
            <img class="card-img-top" src="holder.js/100x180/" alt="">
            -->
            <div class="card-body">
                <h4 class="card-title"><small>USER ID</small> #{{ $user->id}} </h4>

                <p class="card-text">

                <form action="{{ route('admin.users.update', $user) }}" method="post">

                    <div class="form-group row">
                        <label for="name" class="col-md-12 col-form-label text-md-right">USER NAME</label>

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name}}" required
                                   autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-12 col-form-label text-md-right">USER MAIL</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email}}"
                                   required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group row">
                        <label for="roles" class="col-md-12 col-form-label text-md-right">USER ROLES</label>

                        @foreach($roles as $role)
                            <div class="form-check">
                                <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                       @if ($user->roles->pluck('id')->contains($role->id))
                                       checked
                                    @endif
                                >
                                <label>{{ $role->name }}</label>
                            </div>
                        @endforeach
                    </div>

                    <button type="submit" class=" btn btn-sm btn-outline-success">
                        Update
                    </button>
                </form>

                </p>

            </div>
        </div>

    </x-main-wrapper>
@endsection
