<header class="flex px-1 bg-base-100 flex-shrink">
    <nav class="navbar justify-between items-center">
        <!-- Left Navbar Button -->
        @auth()
            <div class="justify-start w-1/2">
                <button class="btn btn-ghost btn-circle hover:animate-spin" id="ShowLeftNavbar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </button>
            </div>
        @else
            <div class="justify-start sm:w-1/2">
                <button class="btn btn-ghost btn-circle hover:animate-spin" id="ShowLeftNavbar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </button>
            </div>
        @endauth

        <!-- Center Navbar Button -->

        <div class="justify-center">
            <a download="MyCV.pdf" href="{{asset('/public/storage/download/MyCV.pdf')}}" class="btn sm:btn-md btn-sm sm:text-xl hover:bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500" style="">Download my CV</a>
        </div>
        <!-- Right Navbar Content -->
        @auth
            <!-- Authenticated User Dropdown -->
            <div class="justify-end w-1/2">
                <details class="dropdown dropdown-end">
                    <summary tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img alt="User Avatar" src="{{asset('/public/storage/img/cv.png')}}" />
                        </div>
                    </summary>
                    <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-300 rounded-box hover:bg-transparent">
                        <li><a class="hover:bg-red-500 " href="/logout">Logout</a></li>
                    </ul>
                </details>
            </div>
        @else
            <div class="justify-end gap-2 sm:w-1/2">

                <button class="btn sm:btn-sm btn-xs btn-active btn-primary" onclick="login_modal.showModal()">Login</button>

                <dialog id="login_modal" class="modal">
                    <div class="container px-5 py-12 mx-auto flex flex-wrap flex-col items-center">
                        <div class="lg:w-2/6 md:w-1/2 bg-base-300 rounded-lg p-8 flex flex-col w-full mt-10 md:mt-0 shadow-b shadow-md">
                            <div class="mb-5 flex flex-row items-center">
                                <div class="text-lg flex-1">Login</div>
                                <a class="btn btn-sm btn-circle btn-ghost" onclick="document.getElementById('login_modal').close()">✕</a>
                            </div>
                            <form method="POST" action="{{route('login')}}">
                                @csrf
                                <div class="relative mb-4">
                                    <label for="email" class="leading-7 text-sm">Email</label>
                                    <input type="email" id="email" name="email" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Email" required>
                                </div>
                                <div class="relative mb-4">
                                    <label for="password" class="leading-7 text-sm">Your Password</label>
                                    <input type="password" id="password" name="password" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" maxlength="12" placeholder="Password" required>
                                </div>
                                <button class="btn btn-primary w-full" type="submit">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </dialog>

                <button class="btn sm:btn-sm btn-xs btn-outline btn-warning" onclick="register_modal.showModal()">Sign up</button>

                <dialog id="register_modal" class="modal">
                    <div class="container px-5 py-12 mx-auto flex flex-wrap flex-col items-center">
                        <div class="lg:w-2/6 md:w-1/2 bg-base-300 rounded-lg p-8 flex flex-col w-full mt-10 md:mt-0 shadow-b shadow-md">
                            <div class="mb-5 flex flex-row items-center">
                                <div class="text-lg flex-1">Sign Up</div>
                                <a class="btn btn-sm btn-circle btn-ghost" onclick="document.getElementById('register_modal').close()">✕</a>
                            </div>
                            <form method="POST" action="{{route('register')}}">
                                @csrf
                                <div class="relative mb-4">
                                    <label for="name" class="leading-7 text-sm">Full Name</label>
                                    <input type="text" id="name" name="name" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" maxlength="12" placeholder="Your Name" required>
                                </div>
                                <div class="relative mb-4">
                                    <label for="email" class="leading-7 text-sm">Email</label>
                                    <input type="email" id="email" name="email" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Email" required>
                                </div>
                                <div class="relative mb-4">
                                    <label for="password" class="leading-7 text-sm">Your Password</label>
                                    <input type="password" id="password" name="password" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" maxlength="12" placeholder="Password" required>
                                </div>
                                <button class="btn btn-primary w-full" type="submit">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </dialog>
            </div>
        @endauth
    </nav>
</header>
