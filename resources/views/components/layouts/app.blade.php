<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Resume' }}</title>
        <link href="https://fonts.googleapis.com/css?family=Mukta:300,400,500,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/vendors/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="assets/css/live-resume.css">
    </head>
    <body>
       
        <header>
            <button class="btn btn-white btn-share ml-auto mr-3 ml-md-0 mr-md-auto"><img src="assets/images/share.svg" alt="share" class="btn-img">
                SHARE</button>
            <nav class="collapsible-nav" id="collapsible-nav">
                <a wire:navigate href="/" class="nav-link {{ request()->is('/') ? 'active' : ''}}">HOME</a>
                <a wire:navigate href="{{route('resume')}}" class="nav-link {{ request()->is('resume') ? 'active' : ''}}">RESUME</a>
                <a wire:navigate href="{{route('portfolio')}}" class="nav-link {{ request()->is('portfolio') ? 'active' : ''}}">PORTFOLIO</a>
                <a wire:navigate href="{{route('blog')}}" class="nav-link {{ request()->is('blog') ? 'active' : ''}}">BLOG</a>
                {{-- <a href="contact.html" class="nav-link">CONTACT</a> --}}
            </nav>
            <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav"
                data-target="collapsible-nav"><img src="assets/images/hamburger.svg" alt="hamburger"></button>
        </header>
        <div class="content-wrapper">
            <aside>
                <div class="profile-img-wrapper">
                    <img src="{{$info->photo}}" alt="profile">
                </div>
                <h1 class="profile-name">{{$info->name}}</h1>
                <div class="text-center">
                    <span class="badge badge-white badge-pill profile-designation">{{$info->position}}</span>
                </div>
                <nav class="social-links">
                    <a href="#!" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#!" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#!" class="social-link"><i class="fab fa-behance"></i></a>
                    <a href="#!" class="social-link"><i class="fab fa-dribbble"></i></a>
                    <a href="#!" class="social-link"><i class="fab fa-github"></i></a>
                </nav>
                <div class="widget">
                    <h5 class="widget-title">personal information</h5>
                    <div class="widget-content">
                        <p>BIRTHDAY : {{$info->birthday}}</p>
                        <p>WEBSITE : {{$info->website}}</p>
                        <p>PHONE : {{$info->phone}}</p>
                        <p>MAIL : {{$info->email}}</p>
                        <p>Location : {{$info->location}}</p>
                        <button onclick="location.href='{{$info->cv}}';" class="btn btn-download-cv btn-primary rounded-pill"> <img src="assets/images/download.svg" alt="download"
                            class="btn-img">DOWNLOAD CV </button>
                    </div>
                </div>
                <div class="widget card">
                    <div class="card-body">
                        <div class="widget-content">
                            <h5 class="widget-title card-title">LANGUAGES</h5>
                            <p>{{$info->languages}}</p>
                            
                        </div>
                    </div>
                </div>
                <div class="widget card">
                    <div class="card-body">
                        <div class="widget-content">
                            <h5 class="widget-title card-title">INTERESTS</h5>
                            <p>{!!$info->interests!!}</p>
                        </div>
                    </div>
                </div>
            </aside>
            <main>
                {{ $slot }}
                <footer>LiveWire 3 @ <a href="javascript:void(0);" rel="noopener noreferrer"></a>. All Rights Reserved {{ now()->format('Y') }}</footer>
            </main>
        </div>
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendors/@popperjs/core/dist/umd/popper-base.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/live-resume.js"></script>
    </body>
</html>
