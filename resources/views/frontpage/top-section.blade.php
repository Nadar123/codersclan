<section class="top-section-wrapper">
  <div 
    class="hero-image"
    style="background-image: url({{$hero_image->url}}), linear-gradient(89.39deg, #000024 0.53%, #0f006b 53.96%, #0e0066 99.49%);">
    <div class="section-content">
      <h1 class="main-title">{{ $main_title }}</h1>
      <h3 class="sub-title">{{ $main_sub_title }}</h3>
      <div class="read-contact-btn-wrapper">
        <div class="contact-btn-wrap">
          <a 
            href="{{ get_field('contact_us_link') }}" 
            class="contact-link">
            <button class="button contact-btn">{{ $contact_us_text  }}</button>
          </a>
        </div>
        <div class="read-more-wrap">
          <a 
            href="{{ get_field('read_more_link') }}" 
            class="read-more-link"> {{ $read_more_text  }}
          </a>
        </div>
      </div>
    </div>
    <div class="hero-image-mb" style="background-image: url({{ $hero_image_mb->url }});"></div>
  </div>
</section>
  
 {{-- {{ dd($hero_image_mb) }}  --}}