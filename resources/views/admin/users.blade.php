@extends('admin.layout.template')

@section('title')
Registered Users
@endsection

@section('content')
    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5 p-5">
        @foreach($users as $user)
            <div class="text-center bg-slate-700 p-5 rounded-xl h-min flex flex-col items-center">
                <div class="w-20 h-20 rounded-full flex items-center justify-center bg-gray-200 text-gray-400">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="pt-3 text-indigo-500">
                    {{$user->name}}
                </div>
                <div class="mx-auto w-12 h-1.5 my-1 rounded-xl bg-indigo-500"></div>
                <p class="whitespace-nowrap text-gray-300">
                    {{$user->email}}
                </p>
            </div>
        @endforeach
    </section>
@endsection
