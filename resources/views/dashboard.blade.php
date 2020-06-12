@extends('layouts.master')
@section('content')
    <x-main-wrapper>
        <!-- ##  ROW 1  ## -->
        <x-row>
            <x-col-fourtwo>

                <div class="card">
                    <div class="card-header h2">USERINFO</div>
                    <div class="card-body">
                        <div class="card-info">
                            <div class="h6">You are logged in {{ session('status') }} as</div>
                            <span> {{ Auth::user()->name }}</span>

                            <div class="h6">You're role is{{ session('status') }} as</div>
                            <span>  <br></span>
                        </div>

                    </div>
                </div>

            </x-col-fourtwo>

            <x-col-fourtwo>

                <div class="card">
                    <div class="card-header h2">fourtwo</div>
                    <div class="card-body">
                        <span> {{ Auth::user()->name }}<br></span>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                    </div>
                </div>

            </x-col-fourtwo>

            <x-col-fourtwo>

                <div class="card">
                    <div class="card-header h2">fourtwo</div>
                    <div class="card-body">
                        <span> {{ Auth::user()->name }}<br></span>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>

            </x-col-fourtwo>

            <x-col-fourtwo>

                <div class="card">
                    <div class="card-header h2">fourtwo</div>
                    <div class="card-body">
                        <span> {{ Auth::user()->name }}<br></span>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>

            </x-col-fourtwo>
        </x-row>


        <!-- ##  ROW 2  ## -->

        <x-row>

            <x-col-twoone>

                <div class="card">
                    <div class="card-header h2">twoone</div>
                    <div class="card-body">
                        <span> {{ Auth::user()->name }}<br></span>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>

            </x-col-twoone>
            <x-col-twoone>

                <div class="card">
                    <div class="card-header h2">twoone</div>
                    <div class="card-body">
                        <span> {{ Auth::user()->name }}<br></span>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>

            </x-col-twoone>
        </x-row>
        <!-- ##  ROW 3  ## -->

        <x-row>
            <x-col-threeone>
                <div class="card">
                    <div class="card-header h2">threeone</div>
                    <div class="card-body">
                        <span> {{ Auth::user()->name }}<br></span>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </x-col-threeone>

            <x-col-threetwo>

                <div class="card">
                    <div class="card-header h2">threetwo</div>
                    <div class="card-body">
                        <span> {{ Auth::user()->name }}<br></span>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>

            </x-col-threetwo>
            <x-col-threetwo>

                <div class="card">
                    <div class="card-header h2">threetwo</div>
                    <div class="card-body">
                        <span> {{ Auth::user()->name }}<br></span>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>

            </x-col-threetwo>

        </x-row>


    </x-main-wrapper>
@endsection
