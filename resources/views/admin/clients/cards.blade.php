@extends('layouts.master')

@section('content')
    <x-main-wrapper>

        <div class="card-group d-inline-flex">

            @foreach ($users as $user)

                <div class="card mr-2 shadow-sm">
                    <div class="card-header">
                        User #{{ $user->id}}
                    </div>
                    <div class="card-body">

                        <h5 class="card-title">
                            {{$user->name}}
                        </h5>
                        <p class="card-text">
                            {{ $user->email}}
                        </p>
                    </div>
                    <div class="card-footer">
                        Footer
                    </div>
                </div>
            @endforeach
        </div>

    </x-main-wrapper>
@endsection
