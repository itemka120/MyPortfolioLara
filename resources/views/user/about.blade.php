@extends('user.layout.template')

@section('title')
    About me
@endsection

@section('content')

    <div class="container">
        <div class="row pb-4 mb-2 justify-content-center">
            <div class="col-md-5 mb-4 mb-md-0">
                <div class="card">
                    <img src="/public/storage/img/img.png" alt="PhotoAbout">
                </div>
            </div>
            <div class="col-md-5 ">
                <h2 class="text-info fs-4 mb-0 ">Personal Description</h2>
                <p class="text-wrap">Donec volutpat nibh sit amet libero ornare non laoreet arcu luctus.
                    Donec id arcu quis mauris euismod placerat sit amet ut metus. Sed imperdiet fringilla sem eget
                    euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                    egestas.</p>
            </div>
        </div>
    </div>
@endsection
