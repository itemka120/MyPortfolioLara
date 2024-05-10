<aside class="p-3 hidden bg-base-100" id="LeftNavbar" x-data="{ tooltips: {}, isOpen: false }" :class="{ 'animated': isOpen }">
    <nav class="text-left bg-transparent flex flex-col h-16">
        <ul class="h-full">
            <li class="py-1">
                <a href="/" class="btn btn-ghost btn-circle" @mouseover="tooltips['Home'] = true" @mouseleave="tooltips['Home'] = false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" width="50%" height="50%">
                        <path fill="currentColor" d="M12 2L1 11h3v11h16V11h3z"/>
                    </svg>
                </a>
                <span x-show="tooltips['Home']" x-cloak class="tooltip tooltip-right absolute ml-3 pt-2.5 shadow-sm">Home</span>
            </li>
            <li class="py-1">
                <a href="/projects" class="btn btn-ghost btn-circle" @mouseover="tooltips['Projects'] = true" @mouseleave="tooltips['Projects'] = false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" width="50%" height="50%">
                        <path fill="currentColor" d="M21.3 11.71l-9-9c-.39-.39-1.02-.39-1.41 0l-9 9c-.39.39-.39 1.02 0 1.41l9 9c.39.39 1.02.39 1.41 0l9-9c.38-.39.38-1.02-.01-1.41zm-2.59-.71l-6-6L4 11.41 5.41 13l2.3-2.29 4.3 4.29 6-6L18.71 11z"/>
                    </svg>
                </a>
                <span x-show="tooltips['Projects']" x-cloak class="tooltip tooltip-right absolute ml-3 pt-2.5 shadow-sm">Projects</span>
            </li>
            <li class="border-t-2 border-gray-400 py-1">
                <div class="btn btn-ghost btn-circle">
                    <label for="theme-switch" class="swap swap-rotate">

                        <!-- this hidden checkbox controls the state -->
                        <input type="checkbox" class="theme-controller" id="theme-switch" />

                        <!-- sun icon -->
                        <svg class="swap-off fill-current w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z"/></svg>

                        <!-- moon icon -->
                        <svg class="swap-on fill-current w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z"/></svg>

                    </label>
                </div>
            </li>
        </ul>
    </nav>
</aside>
