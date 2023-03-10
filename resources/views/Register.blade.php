@extends('Main.structure')

@section('container')
    
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/Register.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="icon" href="https://cdn.pixabay.com/photo/2020/04/17/19/48/city-5056657__340.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="Register-Page">

        <div class="Register-Title">
            <h4><u>Register</u></h4>
        </div>

            <div class="Register-Card">
                <form action="/Register" method="post" style="margin:auto;padding-left: 20px">
                    @csrf

                    <div class="Register-Collum-Positioning">
                        <div class="Register-Collum-Left">
                            <div class="form-floating mb-2" style="display: flex;color:aliceblue">
                                First Name:
                                <div class="input-form">
                                    <input type="text" name="FirstName" class="form-control @error('name') is-invalid @enderror" id="FirstName" placeholder="Enter Your Name"  style="background-color: transparent;color:aliceblue" required>
                                </div>
                            </div>
                            <div class="form-floating mb-2"  style="display: flex;color:aliceblue">
                                Email:
                                <div class="input-form">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="Email" placeholder="Enter Your Email" style="background-color: transparent;color:aliceblue" required>
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
                                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" style="background-color: transparent;color:aliceblue" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="Register-Collum-Right">
                            <div class="form-floating mb-2" style="display: flex;color:aliceblue">
                                Last Name:
                                <div class="input-form">
                                    <input type="text" name="LastName" class="form-control @error('name') is-invalid @enderror" id="LastName" placeholder="Enter Your Name"  style="background-color: transparent;color:aliceblue" required>
                                </div>
                            </div>
                            <div class="form-floating mb-2" style="display: flex;color:aliceblue">
                                Role:
                                <div class="input-form" style="background-color:aliceblue">
                                    <select id="Role" name="Role" class="form-control" style="background-color: transparent" required>
                                        <option value="1">User</option>
                                        <option value="2">Admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-floating mb-2"  style="display: flex;color:aliceblue">
                                Display Picture
                                <div class="input-form">
                                    <input class="form-control" type="file" name="Photo" id="formFile" required>
                                </div>
                            </div>
                            <div class="form-floating mb-2"  style="display: flex;color:aliceblue">
                                Confirm-Password
                                <div class="input-form">
                                    <input type="password" name="confirm-password" class="form-control" id="floatingPasswordConfirmation" placeholder="Re-Type Your Password" style="background-color: transparent;color:aliceblue" required>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="Remember-Button" style="color:white">
                        <div class="checkbox mb-3">
                            <label>
                              <input type="checkbox"  value="remember-me"> Remember me
                            </label>
                          </div>
                          <button class="Register-btn" type="submit">Register</button>
                    </div>

                </form>
              
                <div class="Register-Text">
                    <p>Have an account?</p>
                    <a href="/Login">Login Here</a>
                </div>
            </div>
    </div>

    <div class="Index-Footer">
        <div class="Index-Footer-Detail">
            <p>@ Amazing E-Grocery 2023</p>
        </div>
    </div>
    
@endsection