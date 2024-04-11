@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Consumers</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($consumers as $consumer)
                                <tr>
                                    <td>{{ $consumer->id }}</td>
                                    <td>{{ $consumer->name }}</td>
                                    <td>{{ $consumer->email }}</td>
                                    <td>{{ $consumer->phone }}</td>
                                    <td>
                                        <a href="{{ route('consumers.show', $consumer->id) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('consumers.edit', $consumer->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('consumers.destroy', $consumer->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
