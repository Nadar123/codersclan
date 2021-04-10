<section class="main-section">
  @foreach (get_field('advance_protection') as $single_item)
    <div class="columns">
      <div class="column is-12 loop-wrapper">
        <div class="inner-wrapper">
          <div class="img-wrapper image-wrap">
            <img
              id='ex1'
              class="image zoom" 
              src="{{$single_item['image']}}" 
              alt="{{ $single_item['image']}}">
          </div>
          <div class="advance-protection-content">
            <h3 class="title">{{ $single_item['title'] }}</h3>
            <p class="text">{{ $single_item['text'] }}</p>
            <a 
              href="{{$single_item['link']}}" 
              class="loop-link">{{ $single_item['link_text'] }}</a>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</section>
  {{-- {{dd($advance_protection)}} --}}
  <div class="image-wrap">
    <div class="image-1"></div>
  </div>