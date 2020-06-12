@extends('layouts.master')

@section('content')
    <x-main-wrapper>

        <div class="card">

        <table class="table table-inverse table-responsive">
            <thead class="thead-inverse">
            <tr>
                <th class="text-white">ID</th>
                <th class="text-white">NAME</th>
                <th class="text-white">DESCRIPTION</th>
                <th class="text-white">PROJECT</th>
                <th class="text-white">PROJECT DESC</th>
                <th class="text-white">
                    @can('edit-users')

                        ACTIONS
                    @endcan

                </th>
            </tr>
            </thead>
            <tbody class="">
            @foreach ($clients as $client)
                <tr>
                    <td scope="row"> {{$client->id}}</td>
                    <td> {{$client->name}} </td>
                    <td> {{$client->description}} </td>
                    <td> {{ implode(', ' , $client->projects()->get()->pluck('name')->toArray())}} </td>
                    <td> {{ implode(', ' , $client->projects()->get()->pluck('description')->toArray())}} </td>

                    <td>
                        <div class="btn-group" role="group" aria-label="">

                            @can('edit-users')
                                <a href="{{ route('admin.clients.edit', $client->id ) }}">
                                    <button type="button" class="btn btn-outline-warning btn-sm float-left">
                                        EDIT
                                    </button>
                                </a>
                            @endcan
                            @can('delete-users')
                                <form action="{{ route('admin.clients.destroy',  $client) }}" method="Post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-outline-danger btn-sm float-right">
                                        DELETE
                                    </button>
                                </form>
                            @endcan

                        </div>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </x-main-wrapper>
@endsection
