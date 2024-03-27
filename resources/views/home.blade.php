@extends('layout.template')

@section('title')
    Welcome !
@endsection

@section('content')

    <div role="main" class="main">
        <div class="container container-xl-custom">
            <div class="row">
                <div class="col-lg-6 pt-5">
                    <h2 class="font-weight-bold text-10 line-height-2 appear-animation animated fadeInRightShorter appear-animation-visible"
                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"
                        style="animation-delay: 500ms;"><span class="text-5">Hello, I’m Artem Ivanov. I’m a web-developer from France.</span>
                    </h2>
                    <h4 class="text-6 line-height-6 font-weight-normal appear-animation animated fadeInRightShorter appear-animation-visible"
                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800"
                        style="animation-delay: 800ms;"><span class="opacity-6">I'm just studying, but I do a lot of progress, and I want to continue.</span>
                    </h4>
                    <a class="btn btn-badge btn-with-arrow mb-2 ms-0 ps-0 appear-animation animated fadeInRightShorter appear-animation-visible"
                       data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100"
                       style="animation-delay: 1100ms;" href="/about">About me<span><i
                                class="fas fa-chevron-right m-2"></i></span></a>
                </div>
            </div>
        </div>
    </div>

@endsection
