@extends('user.layout.template')

@section('title')
    Welcome !
@endsection

@section('content')
        <section class="text-gray-600 body-font flex-1 bg-base-200">
            <div class="container px-5 py-24 mx-auto">
                <div class="lg:w-4/6 mx-auto">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="{{ asset('/public/storage/img/img.png') }}">
                    </div>
                    <div class="flex flex-col sm:flex-row mt-10">
                        <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                            <img src="{{ asset('/public/storage/img/img.png') }}" alt="Selfie" class="object-cover  inline-flex items-center justify-center bg-gray-200 text-gray-400 w-20 h-20 rounded-full"/>
                            <div class="flex flex-col items-center text-center justify-center">
                                <h2 class="font-medium mt-4 text-primary text-lg">Artem Ivanov</h2>
                                <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                                <p class="text-base">Web-developing beginner with a great initiative!</p>
                            </div>
                        </div>
                        <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                            <p class="leading-relaxed text-lg mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet aspernatur, atque aut dignissimos doloremque ducimus enim eos harum, in incidunt labore minus nihil, odio porro quidem ratione. Esse, rerum?</p>
                            <a class="text-indigo-500 inline-flex items-center hover:gap-2" href="/about">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
@endsection
