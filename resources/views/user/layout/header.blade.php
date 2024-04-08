<header class="mb-auto d-flex justify-content-between align-items-center">
    <nav class="nav nav-masthead">
        <a class="nav-link fw-bold py-1 px-0 {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
        <a class="nav-link fw-bold py-1 px-0 {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
    </nav>
    @if(session('logout'))
        <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">{{ session('logout') }}</span>
    @endif
    @if($errors->any())
        @foreach($errors->all() as $error)
            <span class="badge bg-warning-subtle border border-warning-subtle text-warning-emphasis rounded-pill">{{$error}}</span>
        @endforeach
    @endif
    <div>
        @auth()
            <span class="badge d-flex align-items-center p-1 pe-2 text-info-emphasis bg-info-subtle border border-info-subtle rounded-pill">
                <img class="rounded-circle me-1" width="24" height="24" src="../public/storage/img/user.png" alt="avatar">
                {{auth()->user()->name}}
                <span class="vr mx-2"></span>
                <a href="/logout" title="logout"><img src="../public/storage/img/annuler.png" alt="logout"></a>
            </span>
        @else
            <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                Login
            </button>
            <div class="modal fade bg-dark" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content bg-dark text-light rounded-4 shadow">
                        <div class="modal-header p-5 pb-4 border-bottom-0">
                            <h1 class="fw-bold mb-0 fs-2">Login in your account</h1>
                            <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body p-5 pt-0">
                            <form method="POST" action="{{route('login')}}">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input name="email" type="email" class="form-control rounded-3 bg-dark text-light" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput" class="text-secondary">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="password" type="password" class="form-control rounded-3 bg-dark text-light" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword" class="text-secondary">Password</label>
                                </div>
                                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-outline-info" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#RegisterModal">
                Sign up
            </button>
            <div class="modal fade bg-dark" id="RegisterModal" tabindex="-1" aria-labelledby="RegisterModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content bg-dark text-light rounded-4 shadow">
                        <div class="modal-header p-5 pb-4 border-bottom-0">
                            <h1 class="fw-bold mb-0 fs-2">Create an account</h1>
                            <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body p-5 pt-0">
                            <form method="POST" action="{{route('register')}}">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input name="name" type="text" class="form-control rounded-3 bg-dark text-light" id="floatingName" maxlength="12" placeholder="Name">
                                    <label for="floatingName" class="text-secondary">Your Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="email" type="email" class="form-control rounded-3 bg-dark text-light" id="floatingEmail" placeholder="Email">
                                    <label for="floatingEmail" class="text-secondary">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="password" type="password" class="form-control rounded-3 bg-dark text-light" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword" class="text-secondary">Password</label>
                                </div>
                                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-outline-info" type="submit">Sign up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endauth
    </div>
</header>
