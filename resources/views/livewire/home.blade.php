<div>
    <section class="intro-section">
        <h2 class="section-title">{{__('msg.Hello')}}, {{$info->name}}</h2>
        <p>
            @switch(Session::get('locale'))
            @case('vi')
                {!! $ove->description_vi !!}
            @break

            @default
                {!! $ove->description_en !!}
        @endswitch
        </p>
        {{-- <a href="#!" class="btn btn-primary btn-hire-me">HIRE ME</a> --}}
    </section>
    <section class="resume-section">
        <div class="row">
            <div class="col-lg-6">
                <h6 class="section-subtitle">RESUME</h6>
                <h2 class="section-title">EDUCATION</h2>
                <ul class="time-line">
                    @foreach ($edu as $e)
                    <li class="time-line-item">
                        <span class="badge badge-primary">{{$e->time}}</span>
                        <h6 class="time-line-item-title">{{$e->major}}</h6>
                        <p class="time-line-item-subtitle">{{$e->name}}</p>
                        <p class="time-line-item-content">{{$e->description}}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6">
                <h6 class="section-subtitle">RESUME</h6>
                <h2 class="section-title">Experience</h2>
                <ul class="time-line">
                    @foreach ($exp as $ex)
                    <li class="time-line-item">
                        <span class="badge badge-primary">{{$ex->time}}</span>
                        <h6 class="time-line-item-title">{{$ex->position}}</h6>
                        <p class="time-line-item-subtitle">{{$ex->name}}</p>
                        <p class="time-line-item-content">{!!$ex->description!!}</p>
                    </li>
                    @endforeach
                    
                </ul>
            </div>
        </div>
    </section>
    <section class="services-section">
        <h6 class="section-subtitle">WHAT I DO</h6>
        <h2 class="section-title">SERVICES</h2>
        <div class="row">
            @foreach ($ser as $se)
            <div class="media service-card col-lg-6">
                <div class="service-icon">
                    <img src="{{asset("assets/images/001-target.svg")}}" alt="target">
                </div>
                <div class="media-body">
                    <h5 class="service-title">{{$se->name}}</h5>
                    <p class="service-description">{{$se->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <section class="testimonial-section">
        <div id="testimonialCarousel" class="testimonial-carousel carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <p class="testimonial-content">Mauris magna sapien, pharetra consectetur fringilla vitae,
                        interdum sed tortor.</p>
                    <img src="{{asset("assets/images/Profile.png")}}" alt="profile" class="testimonial-img">
                    <p class="testimonial-name">Nout Golstein</p>
                </div>
                <div class="carousel-item">
                    <p class="testimonial-content">Mauris magna sapien, pharetra consectetur fringilla vitae,
                        interdum sed tortor.</p>
                    <img src="{{asset("assets/images/Profile.png")}}" alt="profile" class="testimonial-img">
                    <p class="testimonial-name">Nout Golstein</p>
                </div>
                <div class="carousel-item">
                    <p class="testimonial-content">Mauris magna sapien, pharetra consectetur fringilla vitae,
                        interdum sed tortor.</p>
                    <img src="{{asset("assets/images/Profile.png")}}" alt="profile" class="testimonial-img">
                    <p class="testimonial-name">Nout Golstein</p>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#testimonialCarousel" data-slide-to="1"></li>
                <li data-target="#testimonialCarousel" data-slide-to="2"></li>
            </ol>
        </div>
    </section>
</div>