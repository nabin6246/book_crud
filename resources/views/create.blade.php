
@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Add Book
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('books.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="book_name">Book Name:</label>
                    <input type="text" class="form-control" name="book_name"/>
                </div>
                <div class="form-group">
                    <label for="isbn_no">Book ISBN Number :</label>
                    <input type="text" class="form-control" name="isbn_no"/>
                </div>
                <div class="form-group">
                    <label for="book_price">Book Price :</label>
                    <input type="text" class="form-control" name="book_price"/>
                </div>
                <button type="submit" class="btn btn-primary">Create Book</button>
            </form>
        </div>
    </div>
@endsection