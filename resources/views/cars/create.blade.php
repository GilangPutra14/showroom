@extends('layouts.master')

@section('content')
<div class="py-4 px-3 px-md-4">
    <div class="mb-3 mb-md-4 d-flex justify-content-between">
        <div class="h3 mb-0">Tambah Motor Baru</div>
    </div>

    <div class="card mb-3 mb-md-4">
        <div class="card-body">
            <!-- Breadcrumb -->
            <nav class="d-none d-md-block" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Data Motor</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Motor Baru</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->
            
            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">Form Motor Baru</div>
            </div>


            <!-- Form -->
            <div>
                <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="nama">Nama Motor</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="brand_id">Merk Motor</label>
                            <select class="form-control" name="brand_id" id="brand_id">
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-12">
                            <label for="deskripsi">Deskripsi Motor</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="tahun">Tahun Keluaran</label>
                                <input type="year" class="form-control" id="tahun" name="tahun">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga Jual</label>
                                <input type="text" class="form-control" id="harga" name="harga">
                            </div>
                            <div class="form-group">
                                <label for="transmisi">Transmisi</label>
                                <select class="form-control" id="transmisi" name="transmisi">
                                    <option value="Manual">Manual</option>
                                    <option value="Otomatis">Otomatis</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="image">Foto Motor</label>
                                <input type="file" class="form-control" id="image" name="image">
                                <input type="file" class="form-control" id="image2" name="image2">
                                <input type="file" class="form-control" id="image3" name="image3">
                                <input type="file" class="form-control" id="image4" name="image4">
                                <input type="file" class="form-control" id="image5" name="image5">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="1">Baru</option>
                                <option value="2">Bekas</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <!-- <div class="form-group col-12 col-md-6">
                            <label for="isi_silinder">Isi Silinder (cc)</label>
                            <input type="number" class="form-control" id="isi_silinder" name="isi_silinder">
                        </div> -->
                        <div class="form-group col-12 col-md-6">
                            <label for="transmisi">Transmisi</label>
                            <select class="form-control" id="transmisi" name="transmisi">
                                <option value="Manual">Manual</option>
                                <option value="Otomatis">Otomatis</option>
                            </select>
                        </div>
                    </div> 
                   <!-- <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="tenaga">Tenaga (satuan rpm)</label>
                            <input type="number" class="form-control" id="tenaga" name="tenaga">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="torsi">Torsi (satuan rpm)</label>
                            <input type="number" class="form-control" id="torsi" name="torsi">
                        </div>
                    </div> -->
                    <!-- <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="bahan_bakar">Bahan Bakar</label>
                            <input type="text" class="form-control" id="bahan_bakar" name="bahan_bakar">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="kapasitas">Kapasitas (orang)</label>
                            <input type="number" class="form-control" id="kapasitas" name="kapasitas">
                        </div>
                    </div> -->
                    <!-- <div class="form-row">
                        <div class="form-group col-12 col-md-4">
                            <label for="panjang">Panjang (satuan mm)</label>
                            <input type="number" class="form-control" id="panjang" name="panjang">
                        </div>
                        <div class="form-group col-12 col-md-4">
                            <label for="lebar">Lebar (satuan mm)</label>
                            <input type="number" class="form-control" id="lebar" name="lebar">
                        </div>
                        <div class="form-group col-12 col-md-4">
                            <label for="tinggi">Tinggi (satuan mm)</label>
                            <input type="number" class="form-control" id="tinggi" name="tinggi">
                        </div>
                    </div> -->
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
                
            </div>
            <!-- End Form -->
        </div>
    </div>
</div> 
@endsection