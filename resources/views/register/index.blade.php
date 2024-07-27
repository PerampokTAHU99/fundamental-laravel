@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form>
                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="username" placeholder="username">
                    <label for="username">username</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <label for="password mb-5">Password</label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
                </form>
            <small class="d-block text-center mt-3">Don't have an account? <a href="/register">Register here</a></small>
            <p class="mt-5 mb-3 text-body-secondary text-center">Dev PerampokTAHU&copy;2024</p>
        </main>
    </div>
</div>
@endsection