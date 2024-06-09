@extends('admin.layout.template')

@section('title')
    Registered Users
@endsection

@section('content')
    <section class="h-min flex-1 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5 p-5">
        @foreach($users as $user)
            <div class="bg-slate-700 p-5 rounded-xl h-min flex flex-col items-center">
                <div class="w-20 h-20 rounded-full flex items-center justify-center bg-gray-200 text-gray-400 relative" x-data="{ Open: false, OpenEdit: false }">

                    <!-- Tools Button -->
                    <button @click="Open = !Open" title="tools">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </button>

                    <!-- Delete Form -->
                    <form action="{{ route('delete.user', $user->id) }}" method="POST" class="absolute -left-10 hover:bg-gray-600 rounded-xl" x-show="Open" x-transition>
                        @csrf
                        @method('DELETE')
                        <button class="p-1" type="submit">
                            <img src="{{ asset('storage/img/trash.svg') }}" alt="delete" class="h-7 w-7" />
                        </button>
                    </form>

                    <!-- Edit Button -->
                    <button @click="OpenEdit = true" class="p-1 absolute -right-10 hover:bg-gray-600 rounded-xl" x-show="Open" x-transition>
                        <img src="{{ asset('storage/img/edit.svg') }}" alt="edit" class="h-7 w-7" />
                    </button>

                    <!-- Edit Modal -->
                    <div x-show="OpenEdit" x-transition class="fixed inset-0 flex items-center justify-center z-50">
                        <!-- Modal Background -->
                        <div class="fixed inset-0 bg-black opacity-60" @click="OpenEdit = false"></div>

                        <!-- Modal Content -->
                        <div class="bg-base-200 p-5 rounded-xl w-1/2 z-10">
                            <div class="flex text-lg mb-4">
                                <p class="flex-1">Edit User:</p>
                                <button @click="OpenEdit = false" class="justify-end">✕</button>
                            </div>

                            <form method="POST" action="{{ route('edit.user', $user->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="relative mb-4">
                                    <label for="name" class="leading-7 text-sm">Name</label>
                                    <input type="text" id="name" name="name" value="{{ $user->name }}" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-sm outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Name(5-10)" minlength="5" maxlength="10">
                                </div>
                                <div class="relative mb-4">
                                    <label for="email" class="leading-7 text-sm">Email</label>
                                    <input type="email" id="email" name="email" value="{{ $user->email }}" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-sm outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" maxlength="100" placeholder="Email">
                                </div>
                                <button class="btn btn-primary w-full" type="submit">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="pt-3 text-center">
                    <div class="text-indigo-500">{{ $user->name }}</div>
                    <div class="mx-auto w-12 h-1.5 my-1 rounded-xl bg-indigo-500"></div>
                    <div class="max-w-40 overflow-y-scroll text-gray-300 scrollbar-hidden">
                        {{ $user->email }}
                    </div>
                </div>

            </div>
        @endforeach

        <!-- Create User Button and Modal -->
        <div x-data="{ showModal: false }" class="bg-slate-700 p-5 rounded-xl h-min flex flex-col items-center">
            <button @click="showModal = true" class="w-20 h-20 hover:bg-slate-600 rounded-full" title="Create a user">
                <img src="{{ asset('storage/img/plus.svg') }}" alt="Create user" />
            </button>
            <div x-show="showModal" x-transition class="fixed inset-0 flex items-center justify-center z-50">
                <!-- Modal Background -->
                <div class="fixed inset-0 bg-black opacity-60" @click="showModal = false"></div>

                <!-- Modal Content -->
                <div class="bg-base-200 p-5 rounded-xl w-1/2 z-10">
                    <div class="flex text-lg mb-4">
                        <p class="flex-1">Create a user:</p>
                        <button @click="showModal = false" class="justify-end">✕</button>
                    </div>

                    <form method="POST" action="{{ route('create.user') }}">
                        @csrf
                        <div class="relative mb-4">
                            <label for="name" class="leading-7 text-sm">Name</label>
                            <input type="text" id="name" name="name" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-sm outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Name(5-10)" minlength="5" maxlength="10" required>
                        </div>
                        <div class="relative mb-4">
                            <label for="email" class="leading-7 text-sm">Email</label>
                            <input type="email" id="email" name="email" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-sm outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Email" maxlength="100" required>
                        </div>
                        <div class="relative mb-4">
                            <label for="password" class="leading-7 text-sm">Your Password</label>
                            <input type="password" id="password" name="password" class="text-sm w-full rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" minlength="6" maxlength="12" placeholder="Password(6-12)" required>
                        </div>
                        <button class="btn btn-primary w-full" type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
