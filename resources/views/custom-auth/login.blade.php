@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mx-auto">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">login From</h5>
                        <form action="{{route('login.show')}}" method="POST">
                            @csrf


                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>




                            <div class="mb-3">
                                <label for="password" class="form-label">password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="remember">
                                <label class="form-check-label" for="flexCheckDefault">
                                 remember me
                                </label>
                              </div>


                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>

                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
