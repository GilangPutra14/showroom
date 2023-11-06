@extends('layouts.master_customer')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>

<div id="panorama" style="max-height:500px;"></div>
<script>
pannellum.viewer('panorama', {
    "type": "equirectangular",
    "panorama": "{{ asset('storage/images/tour.jpeg') }}",
    "autoLoad": true
});
</script>

<!-- Hero Section Begin -->
<!-- <section class="hero spad set-bg" data-setbg="{{ asset('img/hero-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero__text">
                    <div class="hero__text__title">
                        <span>MOTOR BEKAS BERKUALITAS !!</span>
                        <h2>Enam Jaya Motor</h2>
                    </div>
                    <div class="hero__text__price">
                        <div class="car-model">Mulai Dari</div>
                        <h2>Rp 4 Juta</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Hero Section End -->

<!-- Car Section Begin -->
<section class="car spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="car__sidebar">
                    <div class="car__search">
                        <h5>Cari Motor</h5>
                        <form action="{{ route('search') }}" method="GET">
                            @csrf
                            <input type="text" placeholder="Search..." name="keyword">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="car__filter">
                        <h5>Filter</h5>
                        <form action="{{ route('filter') }}" method="GET">
                            @csrf
                            <select name="merk">
                                <option data-display="Merk" value="">Semua Merk</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->nama }}</option>
                                @endforeach
                            </select>
                            <select name="kondisi">
                                <option value="">Semua Kondisi</option>
                                <option value="1">Baru</option>
                                <option value="2">Bekas</option>
                            </select>
                            <select name="transmisi">
                                <option value="">Semua Transmisi</option>
                                <option value="Manual">Manual</option>
                                <option value="Otomatis">Otomatis</option>
                            </select>
                            <!-- <select name="kapasitas">
                                <option value="">Semua Kapasitas</option>
                                @for ($i = 1; $i < 10; $i++)
                                    <option value="{{ $i }}">{{ $i }} orang</option>
                                @endfor
                            </select> -->
                            <div class="car__filter__btn">
                                <button type="submit" class="site-btn">Filter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="car__filter__option">
                    <!-- <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="car__filter__option__item">
                                <h6>Show On Page</h6>
                                <select>
                                    <option value="">9 Car</option>
                                    <option value="">15 Car</option>
                                    <option value="">20 Car</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="car__filter__option__item car__filter__option__item--right">
                                <h6>Sort By</h6>
                                <select>
                                    <option value="">Price: Highest Fist</option>
                                    <option value="">Price: Lowest Fist</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                    @foreach ($cars as $car)
                    <!-- kolom penampil motor -->
                         <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                Data Motor Ready <div class="car__item__pic__slider owl-carousel">
                                    <img src="{{ asset('storage/' . $car->image) }}" alt="" style="width: 262px" height="151px">
                                    @if($car->image2)
                                    <img src="{{ asset('storage/' . $car->image2) }}" alt="" style="width: 262px" height="151px">
                                    @endif
                                    @if($car->image3)
                                    <img src="{{ asset('storage/' . $car->image3) }}" alt="" style="width: 262px" height="151px">
                                    @endif
                                    @if($car->image4)
                                    <img src="{{ asset('storage/' . $car->image4) }}" alt="" style="width: 262px" height="151px">
                                    @endif
                                    @if($car->image5)
                                    <img src="{{ asset('storage/' . $car->image5) }}" alt="" style="width: 262px" height="151px">
                                    @endif
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner" style="min-height:180px;">
                                        <div class="label-date">{{ $car->tahun }}</div>
                                        <h5><a href="{{ route('detail', $car->id) }}">{{ $car->nama }}</a></h5>
                                        <p>{{ $car->deskripsi }}</p>
                                        <!-- <ul>
                                            <li><span>{{ $car->isi_silinder }}</span> cc</li>
                                            <li>Auto</li>
                                            <li><span>{{ $car->kapasitas }}</span> Liter</li>
                                        </ul> -->
                                    </div>
                                    <div class="car__item__price">
                                        <a href="{{ route('transactions.create', $car->id) }}"><span class="car-option">Beli</span></a>
                                        <h6>Rp {{ number_format($car->harga, 0, ',', '.') }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $cars->links() }}
            </div>
        </div>
    </div>
</section>
<!-- Car Section End -->
@endsection
