  <section class="icons-section">
  <div class="columns">
    <div class="column is-12">
      <div class="inner-warpper">
      @foreach (get_field('icons_rpt') as $icon_rpt)
      <div class="icon-box">
        <div class="icon-main-wrap">
          <figure class="icon-wrapper">
            <img class="small-icon" src="{{$icon_rpt['icon']}}" alt="{{ $icon_rpt['icon_title'] }}">    
          </figure>
        </div>
        <div class="advance-protection-content">
          <h3 class="title">{{ $icon_rpt['icon_title'] }}</h3>
          <p class="text">{{ $icon_rpt['icon_text'] }}</p>
          <a 
          href="{{$icon_rpt['icon_link']}}" 
          class="loop-link">
          <button id="submit-btn" class="button">{{ $icon_rpt['icon_link_text'] }}</button>
        </a>
        </div>
      </div>
      @endforeach
      </div>
    </div>
  </div>
</section>
  {{-- {{dd($icons_rpt)}} --}}

		