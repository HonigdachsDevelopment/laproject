@extends('layouts.master')
@section('content')

<x-formonly-wrapper>



        <div class="card-header">
            {{ $channel->title }}
        </div>
        <div class="card-body">

            <form action="{{ route('channel.update', $channel->id) }}" method="POST" enctype="multipart/form-data" id="update-channel-form">

                @csrf
                @method('PATCH')


                <div class="form-group row justify-content-center">
                    <div class="channel-avatar">

                        <div onclick="document.getElementById('image').click()" class="channel-avatar-overlay"></div>

                        <img  src="{{ $channel->image() }}" alt="">

                    </div>

                </div>


                <input style="display: none" type="file" id="image" name="image" onchange="document.getElementById('update-channel-form').submit()">



                <div class="form-group">
                    <label for="title">
                        Title
                    </label>
                    <input id="title" name="title" value="{{ $channel->name }}" type="text" class="form-control">
                </div>

                <div class="form-group card-text">
                    <label for="description">
                        ABOUT
                    </label>
                    <textarea name="description" id="description" rows="3" class="form-control">{{ $channel->description }}</textarea>
                </div>

                <button type="submit" class="btn btn-large btn-outline-success">UPDATE</button>

            </form>

        </div>


</x-formonly-wrapper>>

@endsection
