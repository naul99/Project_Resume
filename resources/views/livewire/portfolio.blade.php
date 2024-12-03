<div>
    <section class="portfolio-section">
        <h2 class="section-title">PORTFOLIO</h2>
        
        <div class="portfolio-wrapper">
            @foreach ($port as $p)
            <figure class="portfolio-item hover-box">
                <a href="{{$p->url}}" target="_blank" rel="noopener noreferrer">
                    <img src="{{$p->image}}" alt="project" class="portfolio-item-img">
                </a>
                <figcaption class="portfolio-item-details overlay">
                    <h5 class="portfolio-item-title">{{$p->name}}</h5>
                    <p class="portfolio-item-description">{{$p->description}}</p>
                </figcaption>    
           
            </figure>
            @endforeach
        </div>

    </section>
</div>
