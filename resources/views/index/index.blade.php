@extends('layouts.app')

@section('content')
<!-- ======= Menu Section ======= -->
    <section id="menu" class="menu" style="padding: 0;">
      <div>

        <div class="section-title" style="position: relative; margin-bottom: 20px;">
          
          <div class="section-title-inner" style="
            background-image: url({{ asset('img/menu-1.jpg')  }});
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 200px;
            position: relative;
            z-index: 0
          ">
          </div>
          <div style="height: 200px; z-index: 1;  background-color: rgba(0,0,0,0.5);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            ">
            
          </div>
            <h2 style="color: white; position: absolute; right: 39%; top: 45px; z-index: 2">
              Check our tasty <span>Menu</span>
              <span style="display: block; font-size: 18px;">All our chicken is Halal</span>
            </h2>
            
        </div>

        <style>
          #menu-filters li {
            display: inline-block;
            vertical-align: top;
          }
        </style>

        <div class="container">
          <div class="row">
            <div class="col-md-8 offset-md-2 d-flex justify-content-center">
              <ul id="menu-flters" style="
                display: inline-block;
                overflow: auto;
                overflow-y: scroll;
                white-space: nowrap;
                width: 100%;
              ">
                <li data-filter="*" class="filterable filter-active">Show All</li>
                <li data-filter=".filter-starters" class="filterable">Starters</li>
                <li data-filter=".filter-salads" class="filterable">Salads</li>
                <li data-filter=".filter-specialty" class="filterable">Specialty</li>
              </ul>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="row menu-container">

                <div class="col-lg-6 menu-item filter-specialty">
                  <div class="menu-content">
                    <h4 class="text-primary">Crab Cake<span>$7.95</span></h4>
                  </div>
                  <div class="menu-ingredients">
                    Lorem, deren, trataro, filede, nerada
                  </div>
                </div>

                <div class="col-lg-6 menu-item filter-starters">
                  <div class="menu-content">
                    <h4 class="text-primary">Crab Cake<span>$7.95</span></h4>
                  </div>
                  <div class="menu-ingredients">
                    A delicate crab cake served on a toasted roll with lettuce and tartar sauce
                  </div>
                </div>

                <div class="col-lg-6 menu-item filter-salads">
                  <div class="menu-content">
                    <h4 class="text-primary">Caesar Selections<span>$8.95</span></h4>
                  </div>
                  <div class="menu-ingredients">
                    Lorem, deren, trataro, filede, nerada
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Menu Section -->

@endsection

@push('scripts')
<script>
  $(document).ready(function() {
  });
</script>
@endpush