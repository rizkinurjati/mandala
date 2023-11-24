@extends('layouts.frontend')

@section('content')
<div class="container">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="{{ asset('frontend/images/BG2.png') }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Program pembekalan PKL dan Magang</h5>
                <p>
                  Sejak tahun 2000 Mandala di percaya oleh banyak Instansi pendidikan terutama SMK untuk memberikan pembekalan 
                  dan mentoring kepada siswa sebagai skill dan portofolio yang Bermanfaat untuk dunia kerja.
                </p>
              </div>
            </div>
        <div class="carousel-item">
          <img src="{{ asset('frontend/images/BG1.png') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Maintennce dan Pemasangan Jaringan</h5>
            <p>
              Kami menyediakan jasa untuk penyetelan dan perbaikan jaringan dengan banyaknya client kami dari berbagai perusahaan dan perorangan 
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('frontend/images/BG3.png') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Servis Laptop dan Komputer</h5>
            <p>
              Kami menyediakan jasa perbaikan dan maintenance Laptop dan Komputer, beridiri dari tahun 2000 membuat kami dipercaya oleh banyak client terutama di Kabupaten Cianjur
            </p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
  </div>
</div>
<div class="container content-top">
  <h3 class="pt-4 pb-2 text-center" style="font-weight: bold; color:#ad8989"> Kenapa harus Mandala Computer?</h3>
  <div class="row px-4 py-4">
      <div class="col-xl-3 col-md-6 mb-4 text-center">
        <i class="fa fa-tools fa-5x" style="color: #a45050"></i>
        <h6 class="h6-content pt-2">Trusted Services</h6>
        <p style="font-size: 12px; color:#ad8989">Kami memberikan jaminan pelayanan terhadap client kami, kami dipercaya dari tahun 2000 sampai sekarang sebagai
          tempat penyedia jasa perbaikan laptop dan penunjang IT terbaik.
        </p>
      </div>
      <div class="col-xl-3 col-md-6 mb-4 text-center">
          <i class="fas fa-graduation-cap fa-5x" style="color: #a45050"></i>
          <h6 class="h6-content pt-2">PKL & Intership Program</h6>
          <p style="font-size: 12px; color:#ad8989"> Sejak tahun 2000 Mandala di percaya oleh banyak Instansi pendidikan terutama SMK untuk memberikan pembekalan 
              dan mentoring kepada siswa sebagai skill dan portofolio yang bermanfaat di dunia kerja.
          </p>
      </div>
      <div class="col-xl-3 col-md-6 mb-4 text-center">
          <i class="fas fa-project-diagram fa-5x" style="color: #a45050"></i>
          <h6 class="h6-content pt-2">Maintenance & Pemasangan Jaringan</h6>
          <p style="font-size: 12px; color:#ad8989"> Kami menyediakan jasa untuk penyetelan dan perbaikan jaringan dengan banyaknya client kami dari berbagai perusahaan dan perorangan 
          </p>
      </div>
      <div class="col-xl-3 col-md-6 mb-4 text-center">
          <i class="fas fa-history fa-5x" style="color: #a45050"></i>
          <h6 class="h6-content pt-2">Hadir dari tahun 2000</h6>
          <p style="font-size: 12px; color:#ad8989"> 
              Kredibilitas dan kepercayaan dari masyarakat membuat kami dipercaya dari tahun 2000 sebagai perusahaan penyedia jasa untuk kebutuhan IT terbaik 
              di kota Cianjur
          </p>
      </div>
  </div>
</div>
<div class="container comment-content">
  <h3 class="pt-4 pb-2 text-center" style="font-weight: bold; color:#ddc5c5"> Sharing & Testimoni</h3>
  <div class="container text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
              <div class="row">
                @foreach ($data as $key => $item)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                  <div class="col-xl-3 col-md-6 mb-4 py-4">
                    <div class="card text-center text-white mx-2" style="border-color:#ad8989; background-color:transparent">
                        @if ( $item->foto)
                        <img class="rounded-circle  mx-auto py-2" src="{{ Storage::url($item->foto) }}" alt="" srcset="" width="100px" height="100px">
                        @else
                        <img class="rounded-circle  mx-auto py-2" src="{{ asset('frontend/images/5856.jpg') }}" alt="" srcset="" width="100px" height="100px">
                        @endif
                        <h6 class="h6-content pt-2"> {{ $item->nama_lengkap }} </h6>
                        <p style="margin-top:-10px;font-size: 11px; color:#ddc5c5;">{{ $item->pekerjaan }} - {{ $item->instansi }} </p>
                        <p style="font-weight: bold; color:#FCFF7D">Terbaik <i class="fas fa-thumbs-up"></i> +{{$item->rate}} </p>
                        <p style="font-size: 12px;">
                            {{ $item->komentar }}
                        </p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

  <hr style="border-color: #ffffff">
  <h3 class="pt-4 pb-2 text-center" style="font-weight: bold; color:#ddc5c5"> Tulis testimoni anda!</h4>
  <form action="{{ route('store.testimoni') }}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="row text-white">
          <div class="col-lg-6">
              <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control md-w-25" id="nama_lengkap" placeholder="nama lengkap" name="nama_lengkap">
              </div>
                @error('nama_lengkap')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
              <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" class="form-control md-w-25" id="pekerjaan" placeholder="pekerjaan" name="pekerjaan">
              </div>
                @error('pekerjaan')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
              <div class="form-group">
                <label for="instansi">Instansi</label>
                <input type="text" class="form-control md-w-25" id="instansi" placeholder="instansi" name="instansi">
              </div>
                @error('instansi')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
              <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" class="form-control md-w-25" id="foto" placeholder="nama foto" name="foto">
              </div>
                @error('foto')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
              <div class="form-group">
              <label for="rate">Rating anda !</label>
                  <select class="form-control md-w-25" id="rate" name="rate">
                      <option value="1"> 1 </option>
                      <option value="2"> 2 </option>
                      <option value="3"> 3 </option>
                      <option value="4"> 4 </option>
                      <option value="5"> 5 </option>
                  </select>
              </div>
                @error('rate')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
              <div class="form-group">
                  <label for="komentar">Tulis Komentar !</label>
                  <textarea class="form-control" id="komentar" rows="3" name="komentar"></textarea>
              </div>
                @error('komentar')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
              <div class="form-group">
                  <button class="btn btn-primary" type="submit"> Submit </button>
              </div>
          </div>
      </div>
  </form>
</div>
@endsection

@push('after-script')
  <script>
   $('#recipeCarousel').carousel({
      interval :2000
    });

    $('.carousel .carousel-item').each(function(){
        var next = $(this).next();
        if (!next.length) {
        next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        
        for (var i=0;i<2;i++) {
            next=next.next();
            if (!next.length) {
              next = $(this).siblings(':first');
            }
            
            next.children(':first-child').clone().appendTo($(this));
          }
    });
  </script>
@endpush