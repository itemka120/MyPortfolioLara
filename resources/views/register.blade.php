@extends('layout.template')

@section('title')
    Register
@endsection

@section('content')

    <div class="row justify-content-center mt-3 p-3">
        <div class="col-md-6 col-lg-2">
            <form id="frmSignUp" method="POST" action="{{route('register.post')}}">
                @if($errors->any())
                    <div class="p-3 mb-3 rounded-2 bg-danger w-auto">
                        @foreach($errors->all() as $error)
                            <div class="text-color-hover-black text-3">
                                {{$error}}
                            </div>
                        @endforeach
                    </div>
                @endif
                @csrf
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label text-color-dark text-3">
                            Your Name <span class="text-color-danger">*</span>
                            <input type="text" name="name" value="" class="form-control form-control-lg text-4"
                                   required="">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label text-color-dark text-3">
                            Email <span class="text-color-danger">*</span>
                            <input type="email" name="email" value="" class="form-control form-control-lg text-4"
                                   required="">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label text-color-dark text-3">
                            Password <span class="text-color-danger">*</span>
                            <input type="password" name="password" value="" class="form-control form-control-lg text-4"
                                   required="">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <button type="submit"
                                class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3"
                                data-loading-text="Loading...">Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
