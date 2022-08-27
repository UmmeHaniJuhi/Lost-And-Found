<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    <a class="navbar-brand ml-5" href="/">Lost And Found</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    {{ $style = 'font-weight: 600; color: bisque;' }}

    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>

        <div class="d-flex navbar-nav">
            @if ($data == 'home' && session()->has('user'))
                <li class="nav-item">
                    <a class="nav-link" style="{{ $style }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link" href="#">Urgent</a> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/user_dashboard">Dashboard</a>
                </li>
            {{-- @elseif($data == 'urgent')
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="{{ $style }}" href="#">Urgent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li> --}}
            @elseif($data == 'dashboard' && session()->has('user'))
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link" href="#">Urgent</a> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="{{ $style }}" href="/user_dashboard">Dashboard</a>
                </li>
                
            @elseif($data == 'create_post')
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link" href="#">Urgent</a> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/user_dashboard">Dashboard</a>
                </li>
            @elseif($data == 'search_results')
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link" href="#">Urgent</a> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/user_dashboard">Dashboard</a>
                </li>
            {{-- @else
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/user_dashboard">Dashboard</a>
                </li> --}}
            @endif


            @if (session()->has('user') && session('email') == 'azwad@abc.com') 
                &nbsp;&nbsp;
                &nbsp;&nbsp;
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="color: #dfdfdf">
                        {{ session('user') }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                        <li><a class="dropdown-item" href="/admin_posts_dashboard">Admin dashboard</a></li>
                        {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                    </ul>
                    &nbsp;&nbsp;
                </div>
                &nbsp;&nbsp;
                &nbsp;
            @elseif (session()->has('user'))
                &nbsp;&nbsp;
                &nbsp;&nbsp;
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color: #dfdfdf">
                        {{ session('user') }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/logout">Log Out</a>
                    </div>
                    &nbsp;&nbsp;
                </div>
                &nbsp;&nbsp;
                &nbsp;
            @else
                &nbsp;
                &nbsp;&nbsp;
                &nbsp;
                <a href="{{ route('loadLogin') }}" class="btn btn-primary">Log In</a>
                &nbsp;
                &nbsp;
            @endif

        </div>
    </div>
</nav>
