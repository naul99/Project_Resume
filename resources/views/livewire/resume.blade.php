<div>
    <section class="resume-section">
        <div class="row">
            <div class="col-lg-6">
                <h6 class="section-subtitle">{{__('msg.RESUME')}}</h6>
                <h2 class="section-title">{{__('msg.EDUCATION')}}</h2>
                <ul class="time-line">
                    @foreach ($edu as $e)
                    <li class="time-line-item">
                        <span class="badge badge-primary">{{$e->time}}</span>
                        <h6 class="time-line-item-title">{{$e->major}}</h6>
                        <p class="time-line-item-subtitle">{{$e->name}}</p>
                        <p class="time-line-item-content">{!!$e->description!!}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6">
                <h6 class="section-subtitle">{{__('msg.RESUME')}}</h6>
                <h2 class="section-title">{{__('msg.Experience')}}</h2>
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
    <section class="clients-section">
        <h6 class="section-subtitle">{{__('msg.WHAT I DO')}}</h6>
        <h2 class="section-title">{{__('msg.CLIENTS')}}</h2>
        <div class="client-logos-wrapper">
            <div class="client-logo"><img src="{{asset("assets/images/Clients_1.svg")}}" alt="logo" class="w-100"></div>
            <div class="client-logo"><img src="{{asset("assets/images/Clients_2.svg")}}" alt="logo" class="w-100"></div>
            <div class="client-logo"><img src="{{asset("assets/images/Clients_3.svg")}}" alt="logo" class="w-100"></div>
            <div class="client-logo"><img src="{{asset("assets/images/Clients_4.svg")}}" alt="logo" class="w-100"></div>
        </div>
    </section>
    <section class="services-section">
        <h6 class="section-subtitle">{{__('msg.WHAT I DO')}}</h6>
        <h2 class="section-title">{{__('msg.SERVICES')}}</h2>
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
    <section class="achievements-section">
        <h6 class="section-subtitle">{{__('msg.WHAT I DO')}}</h6>
        <h2 class="section-title">{{__('msg.ACHIEVEMENTS')}}</h2>
        <div class="achievement-cards-wrapper">
            <div class="media achievement-card">
                <img src="{{asset("assets/images/puzzle.svg")}}" alt="puzzle" class="achievement-card-icon">
                <div class="media-body">
                    <h4 class="achievement-card-title">550+</h4>
                    <p class="achievement-card-description">COMPLETED PROJECTS</p>
                </div>
            </div>
            <div class="media achievement-card">
                <img src="{{asset("assets/images/team.svg")}}" alt="puzzle" class="achievement-card-icon">
                <div class="media-body">
                    <h4 class="achievement-card-title">23K</h4>
                    <p class="achievement-card-description">HAPPY CLIENTS</p>
                </div>
            </div>
            <div class="media achievement-card">
                <img src="{{asset("assets/images/trophy.svg")}}" alt="puzzle" class="achievement-card-icon">
                <div class="media-body">
                    <h4 class="achievement-card-title">55</h4>
                    <p class="achievement-card-description">AWARDS RECIEVED</p>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="testimonial-section">
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
    </section> --}}
</div>
