@extends('user.layout.template')

@section('content')

    <section class="bg-base-200 w-full m-auto">
        <div class="flex flex-col justify-center">
            <div class="p-8">
                <h1 class="text-4xl md:text-6xl font-bold text-primary mb-4">Oops!</h1>
                <p class="text-lg md:text-xl text-gray-600 mb-8">You met an unknown error, please, return to the main page.</p>
                <a href="/" class="px-6 py-3 bg-primary text-white rounded-lg inline-block hover:bg-blue-600 transition duration-300 ease-in-out">Return to Home</a>
            </div>
        </div>
    </section>

@endsection
