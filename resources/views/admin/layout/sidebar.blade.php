<aside class="w-2/6 h-screen bg-slate-800 flex flex-col text-indigo-500">

    <section class="select-none">
        <div class="w-full text-center text-xl p-3">Dashboard</div>
    </section>

    <section class="mx-2">
        <div class="p-3 border-t-2 border-gray-700">
            <div x-data="{isOpen: open}" class="hover:bg-transparent bg-slate-700 p-2 rounded-lg shadow-lg text-left">
                <button @click="isOpen = !isOpen" class="w-full">
                    Pages
                </button>

                <div x-show="isOpen" class="my-2  bg-slate-600 p-2 rounded flex flex-col gap-2">
                    <button class="text-left hover:text-indigo-600">
                        Home
                    </button>
                    <hr class="border-gray-700" />
                    <button class="text-left hover:text-indigo-600">
                        About
                    </button>
                </div>
            </div>
            <div>

            </div>
        </div>
        <div class="p-3 pt-0 border-b-2 border-gray-700">
            <div x-data="{isOpen: open}" class="hover:bg-transparent bg-slate-700 p-2 rounded-lg shadow-lg text-left">
                <button @click="isOpen = !isOpen" class="w-full">
                    Users
                </button>

                <div x-show="isOpen" class="my-2 bg-slate-600 p-2 rounded flex flex-col gap-2">
                    <button class="text-left hover:text-indigo-600">
                        All the users
                    </button>
                    <hr class="border-gray-700" />
                    <button class="text-left hover:text-indigo-600">
                        Vacancies
                    </button>
                </div>
            </div>
        </div>
    </section>


    <section class="mx-4 my-2 bg-slate-900 rounded-lg p-1" x-data="{ isOpen: false }">
        <div class="flex items-center relative"> <!-- Use relative positioning for dropdown menu -->
            <!-- Image with hover effect to trigger dropdown -->
            <img @click="isOpen = !isOpen" src="{{asset('/public/storage/img/cv.png')}}" class="hover:border hover:border-slate-800 p-1 rounded-full w-11 h-11 cursor-pointer" alt="logo">

            <!-- Dropdown menu -->
            <div x-show="isOpen" @click.away="isOpen = false" class="bg-slate-700 absolute w-fit -left-1 top-14 origin-top-right rounded-xl shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                <div class="py-1" role="menu" aria-orientation="vertical" tabindex="-1">
                    <!-- Dropdown items -->
                    <a href="/logout" class="hover:bg-slate-600 hover:text-red-400 rounded-lg block px-4 py-2 " role="menuitem" tabindex="-1">logout</a>
                </div>
            </div>
            <!-- Text content -->
            <p class="ml-2">Hello, {{auth()->user()->name}}!</p>
        </div>
    </section>

</aside>
