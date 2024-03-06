@extends('layout.template')

@section('title')
    {{ $title }}
@endsection

@section('content')

    <div class="row justify-content-center mt-5 p-4">
        <div class="col-md-6 col-lg-2">
            <form id="frmSignIn" method="post" class="needs-validation" novalidate="novalidate">
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label text-color-dark text-3">
                            Email address <span class="text-color-danger">*</span>
                            <input type="email" value="" name="email" class="form-control form-control-lg text-4"
                                   required>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label text-color-dark text-3">
                            Password <span class="text-color-danger">*</span>
                            <input type="password" value="" name="password" class="form-control form-control-lg text-4"
                                   required>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <button type="submit"
                                class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3"
                                data-loading-text="Loading...">Login
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
