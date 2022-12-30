@extends('layouts.login')

@section('container')
    
<div class="container-fluid d-flex flex-column align-items-center">
    <div class="display-5 mb-4">Login Admin</div>
    <div style="width: 28rem">
        <form action="">
            <div class="mb-3">
                <label for="nameAdmin" class="form-label">Nama Admin</label>
                <input type="text" name="nameAdmin" id="nameAdmin" class="form-control">
            </div>
            <div class="mb-3">
                <label for="passAdmin" class="form-label">Password</label>
                <input type="password" name="passAdmin" id="passAdmin" class="form-control">
            </div>
            <div class="d-flex justify-content-end mt-4">
                <input type="button" value="Masuk" class="btn btn-primary">
            </div>
        </form>
    </div>
    
</div>

@endsection