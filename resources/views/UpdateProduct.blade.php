@extends('Main.structure')

@section('container')

@include('Partial.YellowNavAdmin')

<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/UpdateProduct.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="UpdateProduct-Body">
    <div class="Top-Things-UpdateProduct">
        <button type="button" class="btn btn-default btn-sm" onclick="window.location.href='/ManageProduct/{lang}   ';">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Back
        </button>
    </div>
    <div class="UpdateProduct-Positioning">
        @foreach ($item as $x)           
        <form action="{{Route('Product.updateData',['id'=>$x->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="UpdateProduct-Input-Form">
                <label for="Name" style="color:aliceblue">Name</label>
                <input type="text" style="color:aliceblue" class="form-control" value="{{ $x->Name }}" name="Name" placeholder="First name" aria-label="First name" required>
            </div>
            <div class="UpdateProduct-Input-Form">
                <label for="Category" style="color:aliceblue">Category</label>
                <select class="form-select" style="color:aliceblue" aria-label="Default select example" value="{{ $x->Category }}" name="Category" required>
                    <option value="1">Vegetable</option>
                    <option value="2">Other</option>
                </select>
            </div>
            <div class="UpdateProduct-Input-Form mb-3 mt-3">
                <label for="comment" style="color:aliceblue">Comments:</label>
                <textarea class="form-control" style="color:aliceblue" rows="5" value="{{ $x->Detail }}" id="comment" name="Detail" required></textarea>
            </div>
            <div class="UpdateProduct-Input-Form">
                <label for="Price" style="color:aliceblue">Price</label>
                <input type="text" style="color:aliceblue" class="form-control" name="Price" value="{{ $x->Price }}" placeholder="Price" aria-label="Price" required>
            </div>
            <div class="UpdateProduct-Input-Form mb-3">
                <label for="formFile" class="form-label" style="color:aliceblue">Default file input example</label>
                <input class="form-control" style="color:aliceblue" name="Photo" value="{{ $x->Photo }}"  type="file" id="formFile" required>
            </div>
            <div class="UpdateProduct-Button">
                <button type="submit" class="btn btn-light">Update</button>
            </div>
        </form>
        @endforeach
    </div>
</div>

@endsection