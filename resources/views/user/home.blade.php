@extends('user.layout.template')

@section('title')
    Welcome !
@endsection

@section('content')

    <div role="main" class="main">
        <div class="container-xl">
            <div class="row">
                <div class="col-lg-6 pt-5">
                    <h2 class="fw-bold fs-5 lh-2 animate__animated animate__fadeInRightShort" style="animation-delay: 500ms;"><span class="fs-3">Hello, I’m Artem Ivanov. I’m a web-developer from France.</span></h2>
                    <h4 class="fs-6 lh-1.5 animate__animated animate__fadeInRightShort" style="animation-delay: 800ms;"><span class="opacity-50">I'm just studying, but I do a lot of progress, and I want to continue.</span></h4>
                    <a class="btn btn-primary mb-2 animate__animated animate__fadeInRightShort" href="/about" style="animation-delay: 1100ms;">About me<span><i class="fas fa-chevron-right ms-2"></i></span></a>
                </div>
            </div>
        </div>
    </div>

@endsection
