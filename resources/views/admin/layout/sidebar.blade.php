<aside class="relative" x-data="{ sidebar: true }">

    <!-- Toggle button for sidebar -->
    <button x-show="!sidebar" @click="sidebar = true" class="absolute w-fit"><i class="fas fa-arrow-right py-3 px-0.5 rounded-r-xl bg-slate-800 hover:text-indigo-500"></i></button>

    <!-- Sidebar -->
    <div class="sm:h-screen bg-slate-800 w-full flex flex-col text-indigo-500" x-transition x-show="sidebar">


        <!-- Dashboard Section -->
        <section class="select-none text-center p-3 text-nowrap text-xl"><button @click="sidebar = false" class="hover:text-red-400 font-bold text-center" ><i class="fas fa-times py-3 px-0.5 rounded-r-xl bg-slate-800 hover:text-red-400 pr-2"></i>Dashboard</button></section>

        <!-- Users Section -->
        <section class="mx-2 p-3 pt-0 border-b-2 border-gray-700">
            <div x-data="{ isOpen: open }" class="bg-slate-700 p-2 rounded-lg shadow-lg text-left">
                <button @click="isOpen = !isOpen" class="w-full">Users</button>
                <div x-transition x-show="isOpen" class="my-2 bg-slate-600 p-2 rounded flex flex-col gap-2">
                    <a href="/dashboard/users" class="text-left hover:text-indigo-600">All the users</a>
                </div>
            </div>
        </section>

        <!-- Profile Section -->
        <section class="mx-4 my-2 bg-slate-900 rounded-lg p-1" x-data="{ isOpen: false }">
            <div class="flex items-center relative">
                <img @click="isOpen = !isOpen" src="{{asset('/public/storage/img/cv.png')}}" class="hover:border hover:border-slate-800 p-1 rounded-full w-11 h-11 cursor-pointer" alt="logo">
                <div x-transition x-show="isOpen" @click.away="isOpen = false" class="bg-slate-700 absolute w-fit -left-1 top-14 origin-top-right rounded-xl shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                    <a href="/logout" class="hover:bg-slate-600 hover:text-red-400 rounded-lg block px-5 py-2">logout</a>
                </div>
                <p class="ml-2">Hello, {{ auth()->user()->name }}!</p>
            </div>
        </section>

    </div>

</aside>
