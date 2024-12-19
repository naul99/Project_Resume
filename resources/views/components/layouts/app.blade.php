<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Resume' }}</title>
    <link href="https://fonts.googleapis.com/css?family=Mukta:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendors/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/live-resume.css') }}">
    <style>
        .select-lang> ::-webkit-scrollbar {
            display: none;
            /* Chrome Safari */
        }
        .select-lang .options {
            background: transparent !important;
        }
        .select-lang::after {
            content: "▼";
            font-size: 0.7em;
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translate(0, -50%);
            color: white;
        }
        .select-lang:hover::after {
            top: 15%;
            transform: translate(0, -15%);
        }

        .select-lang:hover {
            overflow: visible;
           
        }

        .select-lang:hover .options .option {
            padding: 0 0 5px 0;
        }

        .select-lang:hover .options .option:last-child {
            padding: 0 0 0 0;
        }

        .select-lang:hover .options .option label {
            display: inline-block;
            cursor: pointer
        }

        .select-lang .options .option img {
            width: 3.25rem;
        }

        .select-lang .options .option label {
            display: none;
        }

        .select-lang .options .option input {
            width: 0;
            height: 0;
            overflow: hidden;
            margin: 0;
            padding: 0;
            float: left;
            display: inline-block;
            position: absolute;
            visibility: hidden;
        }

        .select-lang .options .option input:checked+label {
            display: block;
            width: 100%;
        }

        .select-lang:hover .options .option input+label {
            display: block;
        }
    </style>
</head>

<body>
    <header>
        <div class="ml-auto mr-3 ml-md-0 mr-md-auto">
            <div id="country-select">
                <div class="select-lang">
                    <div class="options">
                        <div class="option" id="lang1">
                            <input type="radio" name="flag" id="en" {{ Session::get('locale','en') === 'en' ? 'checked' : '' }} />
                            <label for="en">
                                <img src="{{ asset('assets/images/Flag_of_the_United_States.svg.webp') }}"
                                    alt="" />
                            </label>
                        </div>
                        <div class="option" id="lang2">
                            <input type="radio" name="flag" id="vi" {{ Session::get('locale','en') === 'vi' ? 'checked' : '' }}/>
                            <label for="vi">
                                <img src="{{ asset('assets/images/Flag_of_Vietnam.svg.png') }}"
                                    alt="" />
                            </label>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>

        <nav class="collapsible-nav" id="collapsible-nav">
            <a wire:navigate href="{{ route('home') }}"
                class="nav-link {{ request()->is('/') ? 'active' : '' }}">{{__('msg.HOME')}}</a>
            <a wire:navigate href="{{ route('resume') }}"
                class="nav-link {{ request()->is('resume') ? 'active' : '' }}">{{__('msg.RESUME')}}</a>
            <a wire:navigate href="{{ route('portfolio') }}"
                class="nav-link {{ request()->is('portfolio') ? 'active' : '' }}">{{__('msg.PORTFOLIO')}}</a>
            <a wire:navigate href="{{ route('blog') }}"
                class="nav-link {{ request()->is('blog') ? 'active' : '' }}">{{__('msg.BLOG')}}</a>
            {{-- <a href="contact.html" class="nav-link">CONTACT</a> --}}
        </nav>
        <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav"
            data-target="collapsible-nav"><img src="{{ asset('assets/images/hamburger.svg') }}"
                alt="hamburger"></button>
    </header>
    <div class="content-wrapper">
        <aside>
            <div class="profile-img-wrapper">
                <img src="{{ $info->photo }}" alt="profile">
            </div>
            <h1 class="profile-name">{{ $info->name }}</h1>
            <div class="text-center">
                <span class="badge badge-white badge-pill profile-designation">
                    @switch(Session::get('locale'))
                        @case('vi')
                            {!! $info->position_vi !!}
                        @break

                        @default
                            {!! $info->position_en !!}
                    @endswitch
                </span>
            </div>
            <nav class="social-links">
                <a href="#!" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#!" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#!" class="social-link"><i class="fab fa-behance"></i></a>
                <a href="#!" class="social-link"><i class="fab fa-dribbble"></i></a>
                <a href="#!" class="social-link"><i class="fab fa-github"></i></a>
            </nav>
            <div class="widget">
                <h5 class="widget-title">{{__('msg.personal information')}}</h5>
                <div class="widget-content">
                    <p>{{__('msg.BIRTHDAY')}} : {{ $info->birthday }}</p>
                    <p>{{__('msg.WEBSITE')}} : {{ $info->website }}</p>
                    <p>{{__('msg.PHONE')}} : {{ $info->phone }}</p>
                    <p>{{__('msg.MAIL')}} : {{ $info->email }}</p>
                    <p>{{__('msg.Location')}} : {{ $info->location }}</p>
                    <button onclick="location.href='{{ $info->cv }}';"
                        class="btn btn-download-cv btn-primary rounded-pill"> <img
                            src="{{ asset('assets/images/download.svg') }}" alt="download" class="btn-img">{{__('msg.DOWNLOAD CV')}}
                    </button>
                </div>
            </div>
            <div class="widget card">
                <div class="card-body">
                    <div class="widget-content">
                        <h5 class="widget-title card-title">{{__('msg.LANGUAGES')}}</h5>
                        <p>
                            @switch(Session::get('locale'))
                                @case('vi')
                                    {!! $info->languages_vi !!}
                                @break

                                @default
                                    {!! $info->languages_en !!}
                            @endswitch
                        </p>

                    </div>
                </div>
            </div>
            <div class="widget card">
                <div class="card-body">
                    <div class="widget-content">
                        <h5 class="widget-title card-title">{{__('msg.INTERESTS')}}</h5>
                        <p>
                            @switch(Session::get('locale'))
                                @case('vi')
                                    {!! $info->interests_vi !!}
                                @break

                                @default
                                    {!! $info->interests_en !!}
                            @endswitch
                        </p>
                    </div>
                </div>
            </div>
        </aside>
        <main>
            {{ $slot }}
            <footer>Admin<a href="javascript:void(0);" rel="noopener noreferrer"></a>. All Rights Reserved
                {{ now()->format('Y') }}</footer>
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/@popperjs/core/dist/umd/popper-base.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/live-resume.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $('#en').click(function() {
            $('#en').addClass('active');
            $('#vi').removeClass('active');
            $("#lang2").toggle("slow", function() {});
            $('.select-lang').attr('style', 'height:30px');
            window.location.href = '/language/en';
        })
        $('#vi').click(function() {
            $('#vi').addClass('active');
            $('#en').removeClass('active');
            $("#lang1").toggle("slow", function() {});
            $('.select-lang').attr('style', 'height:30px');
            window.location.href = '/language/vi';
        })
      
    </script>
</body>

</html>
