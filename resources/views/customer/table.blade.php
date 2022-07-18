@extends('templates.main')

@section('content')
    <div class="m-5">
        <h4 class="text-center">Customer Entries</h4>
        <div class="text-end my-1">
            <a href="{{ route('customerRegister') }}" class="btn btn-primary">Add more</a>
        </div>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Category</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    <td>Mark</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
