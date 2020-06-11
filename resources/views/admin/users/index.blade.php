@extends('layouts.master')

@section('content')
    <x-main-wrapper>

        <div class="card">

        <table class="table table-inverse table-responsive">
            <thead class="thead-inverse">
            <tr>
                <th class="text-white">ID</th>
                <th class="text-white">NAME</th>
                <th class="text-white">EMAIL</th>
                <th class="text-white">ROLES</th>
                <th class="text-white">
                    @can('edit-users')

                        ACTIONS
                    @endcan

                </th>
            </tr>
            </thead>
            <tbody class="">
            @foreach ($users as $user)
                <tr>
                    <td scope="row"> {{$user->id}}</td>
                    <td> {{$user->name}} </td>
                    <td> {{$user->email}} </td>
                    <td> {{ implode(', ' , $user->roles()->get()->pluck('name')->toArray())}} </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="">

                            @can('edit-users')
                                <a href="{{ route('admin.users.edit', $user->id ) }}">
                                    <button type="button" class="btn btn-outline-warning btn-sm float-left">
                                        EDIT
                                    </button>
                                </a>
                            @endcan
                            @can('delete-users')
                                <form action="{{ route('admin.users.destroy',  $user) }}" method="Post">
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
