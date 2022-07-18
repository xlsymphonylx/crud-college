@extends('templates.main')

@section('content')
    <div class="m-5">
        <h4 class="text-center">Category Entries</h4>
        <div class="text-end my-1">
            <a href="{{ route('categoryRegister') }}" class="btn btn-primary">Add more</a>
        </div>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
