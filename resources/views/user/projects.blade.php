@extends('user.layout.template')

@section('title')
    My projects
@endsection

@section('content')
    <div class="border-t border-gray-400">
        <!-- Carousel Section -->
        <section class="bg-base-200 p-10 shadow-sm">
            <div class="carousel relative overflow-hidden rounded-lg" style="height: 69vh">
                <!-- Slides -->
                <div class="carousel-inner flex pointer-events-none">
                    <div class="carousel-item w-full">
                        <img src="{{asset('/public/storage/img/tailwind.png')}}" class="w-full object-cover" alt=""/>
                    </div>
                    <div class="carousel-item w-full">
                        <img src="{{asset('/public/storage/img/alpine.png')}}" class="w-full object-cover" alt=""/>
                    </div>
                    <div class="carousel-item w-full">
                        <img src="{{asset('/public/storage/img/flaticon.png')}}" class="w-full object-cover" alt=""/>
                    </div>
                </div>
                <!-- Navigation buttons -->
                <div class="absolute top-1/2 left-5 transform -translate-y-1/2">
                    <button id="prevBtn" class="hidden btn btn-circle" onclick="carouselPrev()">❮</button>
                </div>
                <div class="absolute top-1/2 right-5 transform -translate-y-1/2">
                    <button id="nextBtn" class="btn btn-circle" onclick="carouselNext()">❯</button>
                </div>
            </div>
        </section>

        <!-- "Want to work with me?" Section -->
        <section class="text-center w-full mx-auto m-5 text-4xl bg-base-100">
            <button id="scrollButton" class="animate-pulse">
                Want to work with me?
            </button>
        </section>

        <!-- Sign Up Section -->
        <section id="scrollTarget" class="flex justify-center">
            <div class="mockup-window bg-base-300 w-3/4">
                @auth
                    <div class="container px-5 py-12 mx-auto flex flex-wrap flex-col items-center">
                        <div class="lg:w-2/6 md:w-1/2 bg-base-200 rounded-lg p-8 flex flex-col w-full mt-10 md:mt-0 shadow-b shadow-md">
                            <div class="text-lg flex-1 text-center mb-2">Create a profile</div>
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
                @else
                    <!-- Sign Up Form -->
                    <div  class="body-font bg-base-200">
                        <div class="container px-5 py-12 mx-auto flex flex-wrap flex-col items-center">
                            <div class="lg:w-2/6 md:w-1/2 bg-base-300 rounded-lg p-8 flex flex-col w-full mt-10 md:mt-0 shadow-b shadow-md">
                                <div class="text-lg flex-1 mb-5">Sign Up</div>
                                <form method="POST" action="{{route('register')}}">
                                    @csrf
                                    <!-- Full Name Input -->
                                    <div class="relative mb-4">
                                        <label for="name" class="leading-7 text-sm">Full Name</label>
                                        <input type="text" id="name" name="name" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" maxlength="12" placeholder="Your Name" required>
                                    </div>
                                    <!-- Email Input -->
                                    <div class="relative mb-4">
                                        <label for="email" class="leading-7 text-sm">Email</label>
                                        <input type="email" id="email" name="email" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Email" required>
                                    </div>
                                    <!-- Password Input -->
                                    <div class="relative mb-4">
                                        <label for="password" class="leading-7 text-sm">Your Password</label>
                                        <input type="password" id="password" name="password" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" maxlength="12" placeholder="Password" required>
                                    </div>
                                    <!-- Sign Up Button -->
                                    <button class="btn btn-primary w-full" type="submit">Sign Up</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endauth
            </div>
        </section>
    </div>

    <!-- JavaScript -->
    <script>
        let currentIndex = 0;
        const items = document.querySelectorAll('.carousel-item');
        const totalItems = items.length;
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        function updateNavigationButtons() {
            if (currentIndex === 0) {
                prevBtn.classList.add('hidden');
            } else {
                prevBtn.classList.remove('hidden');
            }

            if (currentIndex === totalItems - 1) {
                nextBtn.classList.add('hidden');
            } else {
                nextBtn.classList.remove('hidden');
            }
        }

        function carouselNext() {
            if (currentIndex < totalItems - 1) {
                currentIndex++;
                updateNavigationButtons();
                updateCarousel();
            }
        }

        function carouselPrev() {
            if (currentIndex > 0) {
                currentIndex--;
                updateNavigationButtons();
                updateCarousel();
            }
        }

        function updateCarousel() {
            const width = items[0].offsetWidth;
            const offset = -width * currentIndex;
            document.querySelector('.carousel-inner').style.transform = `translateX(${offset}px)`;
        }

        //scroll down
        document.getElementById('scrollButton').addEventListener('click', function() {
            // Get the target element
            var targetElement = document.getElementById('scrollTarget');

            // Scroll to the target element
            targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });

    </script>
@endsection
