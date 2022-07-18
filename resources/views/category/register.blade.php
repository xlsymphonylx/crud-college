@extends('templates.main')

@section('content')
    <div class="m-5">
        <h3 class="text-center">Category Form</h3>
        <form class="mx-5">
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Category Description">
            </div>
            <div class="p-3 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('categoryIndex')}}" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
@endsection
