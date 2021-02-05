<div class="row">
  <div class="col-sm-12 col-lg-8 mb-2">
  </div>
  <div class="col-sm-12 col-lg-4">
    @isset($new_url)
      <a href="{{ $new_url }}" class="btn btn-outline-primary d-block">
        <i class="fas fa-plus"></i>
        {{ $new_btn_name }}
      </a>
    @endisset
  </div>
</div>
