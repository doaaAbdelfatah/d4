@extends('main')
@section('header1')
    <div class="container">
        <h1>Products</h1>
        <hr>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <form action="/products/add" method="POST">
                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                {{-- {{ csrf_field() }} --}}
                @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" />
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control" name="price" type="number" />
                    </div>
                    <div class="form-group">
                        <input class="btn btn-block btn-primary" type="submit" value="Save" />
                    </div>


                </form>

            </div>
            <div class="col-md-7">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($prods as $row)
                         <tr>
                             <td>{{$row->id}}</td>
                             <td>{{$row->name}}</td>
                             <td>{{$row->price}}</td>
                         </tr>
                        @empty
                        <tr>
                             <td colspan="3">No Products</td>
                         </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
