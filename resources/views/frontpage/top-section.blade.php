<section class="top-section-wrapper">
  <div class="hero-image" style="background-image: url({{$hero_image->url}})">
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
            class="read-more-link">
            {{ $read_more_text  }}
          </a>
        </div>
      </div>
    </div>

  </section>

  {{-- {{dd($advance_protection)}} --}}


  {{-- style="background-image: url({{$hero_image->url}})" --}}
  {{-- <h1 class="test"> {{$main_title}}</h1>
  <h3>{{ $main_sub_title }}</h3>
  <p>{{ $contact_us_text }}</p>
  <p>{{ $read_more_text }}</p>
  <a href="{{ get_field('contact_us_link') }}"> {{ $contact_us_text }} </a>


    <div class="columns is-mobile">
      <div class="column is-6">
        dddddddd
      </div>
        <div class="column is-6">
          2222222
        </div>
    </div> --}}