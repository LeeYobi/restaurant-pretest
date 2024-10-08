@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif
            <div class="card">
                <div class="card-header">All Ingredient</div>

                <div class="card-body">
                    {{-- @foreach ($ingredients as $ingredient)
                    <p>{{$ingredient->name}}</p>
                    @endforeach --}}

                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @if(count($ingredients)>0)
                                @foreach ($ingredients as $key=>$ingredient)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$ingredient->name}}</td>
                                    <td>
                                        <a href="{{route('ingredient.edit',[ingredient->id])}}"><button class="btn btn-outline-success">Edit</button></a>
                                    </td>


                                    <td>
                                        <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
                                        </td>
                                </tr>
                               <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('ingredient.destroy', ['ingredient' => $ingredient->id]) }}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Ingredient</h5>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this category?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
                                @endforeach
                                @else
                                <td colspan="4">Tidak ada kategori yang dapat ditampilkan.</td>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
                        
@endsection
