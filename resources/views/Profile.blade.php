@extends('Main.structure')

@section('container')

@include('Partial.YellowNavUser')

<link rel="stylesheet" href="/css/Profile.css">
<link rel="stylesheet" href="/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="icon" href="https://cdn.pixabay.com/photo/2020/04/17/19/48/city-5056657__340.png">

<div class="Profile_Positioning">
    <div class="Profile-Collum-Positioning">
        <form action="action/ProfileAdmin" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
        <div class="Profile-Flexing" style="display:flex">
            <div class="Profile-Collum-Image">
                <img src="#" alt="Your Display Picture">
            </div>
            <div class="Profile-Collum-Left">
                <div class="form-floating mb-2" style="display: flex;color:aliceblue">
                    First Name: 
                    <div class="input-form">
                        <input type="text" style="color:black" name="FirstName" class="form-control @error('name') is-invalid @enderror" id="FirstName" placeholder="{{auth()->user()->FirstName}}"  style="background-color: transparent" required>
                    </div>
                </div>
                <div class="form-floating mb-2"  style="display: flex;color:aliceblue">
                    Email:
                    <div class="input-form">
                        <input type="email" style="color:black" name="email" class="form-control @error('email') is-invalid @enderror" id="Email" placeholder="{{auth()->user()->email}}" style="background-color: transparent" required>
                    </div>
                </div>
                <div style="color:aliceblue">
                    Gender:
                    <div class="input-form">
                        <input id="lk" name="gender" type="radio" name="jenis_kelamin" value="Male">
                        <label for="lk">Male</label>
                        <input id="lk" name="gender" type="radio" name="jenis_kelamin" value="Female">
                        <label for="lk">Female</label>
                    </div>
                </div>
                <div class="form-floating mb-2"  style="display: flex;color:aliceblue">
                    Password
                    <div class="input-form">
                        <input type="password" style="color:black" name="password" class="form-control" id="floatingPassword" placeholder="Password" style="background-color: transparent" required>
                    </div>
                </div>
            </div>
            
            <div class="Profile-Collum-Right">
                <div class="form-floating mb-2" style="display: flex;color:aliceblue">
                    Last Name:
                    <div class="input-form">
                        <input type="text" style="color:black" name="LastName" class="form-control @error('name') is-invalid @enderror" id="LastName" placeholder="{{auth()->user()->LastName}}"  style="background-color: transparent" required>
                    </div>
                </div>
                <div class="form-floating mb-2" style="display: flex;color:aliceblue">
                    Role:
                    <div class="input-form" style="color:aliceblue">
                        <select id="Role" name="Role" class="form-control" style="background-color: transparent;color:aliceblue" required>
                            <option value="1">User</option>
                            <option value="2">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="form-floating mb-2"  style="display: flex;color:aliceblue">
                    Display Picture
                    <div class="input-form">
                        <input class="form-control" type="file" style="color:black" name="Photo" id="formFile" required>
                    </div>
                </div>
                <div class="form-floating mb-2"  style="display: flex;color:aliceblue">
                    Confirm-Password
                    <div class="input-form">
                        <input type="password" name="confirm-password" style="color:black" class="form-control" id="floatingPasswordConfirmation" placeholder="Re-Type Password" style="background-color: transparent" required>
                    </div>
                    
                </div>
            </div>
        </div>       
        <div class="Profile-Submit-Button" style="text-align:right">
            <p><button style="font-size:18px;background-color:white;opacity:0.7" onclick="return confirm('Update, Continue?')">Save</button></p>
        </div>
        </form>
    </div>
</div>

<div class="Index-Footer">
    <div class="Index-Footer-Detail">
        <p>@ Amazing E-Grocery 2023</p>
    </div>
</div>

@endsection