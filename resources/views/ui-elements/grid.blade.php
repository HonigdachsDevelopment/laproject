@extends('layouts.master')
@section('content')

    <x-main-wrapper>

        <!-- ##  ROW 1  ## -->
        <x-row>
            <x-col-twoone>

                <div class="card">
                    <div class="card-header bg-info h3">twoone</div>
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
                    <div class="card-header bg-success h3">twoone</div>
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


        <!-- ##  ROW 2 ## -->
        <x-row>
        <x-col-threetwo>

            <div class="card">
                <div class="card-header bg-success h3">threetwo</div>
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
                <div class="card-header bg-success h3">threetwo</div>
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

        <x-col-threetwo-lastchild>
            <div class="card">
                <div class="card-header bg-success h3">threetwo-lastchild</div>
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
        </x-col-threetwo-lastchild>

        </x-row>


        <!-- ##  ROW3 ## -->
        <x-row>
            <x-col-fourtwo>

                <div class="card">
                    <div class="card-header bg-success h3">fourtwo</div>
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
                    <div class="card-header bg-success h3">fourtwo</div>
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
                    <div class="card-header bg-success h3">fourtwo</div>
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
                    <div class="card-header bg-success h3">fourtwo</div>
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

    </x-main-wrapper>
@endsection
