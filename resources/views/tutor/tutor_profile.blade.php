@extends('layouts.tutor')
@section('title','Tutor Profile')
@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Poppins', sans-serif;
    background-color: aliceblue;
}

.wrapper{
    padding: 30px 50px;
    border: 1px solid #ddd;
    border-radius: 15px;
    margin: 10px auto;
    max-width: 80%;
}
h4{
    letter-spacing: -1px;
    font-weight: 400;
}
.img{
    width: 100px;
    height: 100px;
    border-radius: 6px;
    object-fit: cover;
}
#img-section p,#deactivate p{
    font-size: 12px;
    color: #777;
    margin-bottom: 10px;
    text-align: justify;
}
#img-section b,#img-section button,#deactivate b{
    font-size: 14px; 
}

label{
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 500;
    color: #777;
    padding-left: 3px;
}

.form-control{
    border-radius: 10px;
}

input[placeholder]{
    font-weight: 500;
}
.form-control:focus{
    box-shadow: none;
    border: 1.5px solid #0779e4;
}
select{
    display: block;
    width: 100%;
    border: 1px solid #ddd;
    border-radius: 10px;
    height: 40px;
    padding: 5px 10px;
    /* -webkit-appearance: none; */
}

select:focus{
    outline: none;
}
.button{
    background-color: #fff;
    color: #0779e4;
}
.button:hover{
    background-color: #0779e4;
    color: #fff;
}
.btn-primary{
    background-color: #0779e4;
}
.danger{
    background-color: #fff;
    color: #e20404;
    border: 1px solid #ddd;
}
.danger:hover{
    background-color: #e20404;
    color: #fff;
}
@media(max-width:576px){
    .wrapper{
        padding: 25px 20px;
    }
    #deactivate{
        line-height: 18px;
    }
}
</style>
<div class="wrapper bg-white mt-sm-2">
    <h4 class="pb-4 border-bottom">Account settings</h4>
    <div class="d-flex align-items-start py-3 border-bottom">
        <img src="data:image/jpeg;base64,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"
            class="img" alt="">
        <div class="pl-sm-4 pl-8" id="img-section">
            <b>Profile Photo</b>
            <p>Accepted file type .png. Less than 1MB</p>
            <button class="btn button border"><b>Upload</b></button>
        </div>
    </div>
    <div class="py-2">
        <div class="row py-2">
            <div class="col-md-6">
                <label for="firstname">First Name</label>
                <input type="text" class="bg-light form-control" placeholder="Steve">
            </div>
            <div class="col-md-6 pt-md-0 pt-3">
                <label for="lastname">Last Name</label>
                <input type="text" class="bg-light form-control" placeholder="Smith">
            </div>
        </div>
        <div class="row py-2">
            <div class="col-md-6">
                <label for="email">Email Address</label>
                <input type="text" class="bg-light form-control" placeholder="steve_@email.com">
            </div>
            <div class="col-md-6 pt-md-0 pt-3">
                <label for="phone">Phone Number</label>
                <input type="tel" class="bg-light form-control" placeholder="+962 79 #######">
            </div>
        </div>
           <div class="row py-2">
            <div class="col-md-12">
                <label for="bio">Bio</label>
                <textarea  class="bg-light form-control" name="bio" id="bio" cols="2" rows="4"> I am A computer Science graduate from .....</textarea>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-md-6">
                <label for="location">Location</label>
                <input type="text" class="bg-light form-control" placeholder="Amman abdali">
            </div>
            <div class="col-md-6 pt-md-0 pt-3" id="lang">
                <label for="language">Language</label>
                <div class="arrow">
                    <select name="language" id="language" class="bg-light">
                        <option value="english" selected>English</option>
                        <option value="english_us">English (United States)</option>
                        <option value="enguk">English UK</option>
                        <option value="arab">Arabic</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-md-6">
                <label for="password">Current Password</label>
                <input type="text" class="bg-light form-control" >
            </div>
            <div class="col-md-6 pt-md-0 pt-3">
                <label for="new_password">New Password</label>
                <input type="text" class="bg-light form-control" >
            </div>
             <div class="col-md-6 pt-md-0 pt-3">
                <label for="confirm_password">Confirm Password</label>
                <input type="text" class="bg-light form-control" >
            </div>
        </div>

        <div class="py-3 pb-4 border-bottom">
            <button class="btn btn-primary mr-3">Save Changes</button>
            <button class="btn border button">Cancel</button>
        </div>
        <div class="d-sm-flex align-items-center pt-3" id="deactivate">
            <div>
                <b>Deactivate your account</b>
                <p>Details about your company account and password</p>
            </div>
            <div class="ml-auto">
                <button class="btn danger">Deactivate</button>
            </div>
        </div>
    </div>
</div>

@endsection