@extends('pemesanan.master')

@section('content')
    <section class="container" >
        <div class="d-flex justify-content-end " >
          <a href="/pemesanan/create" class="btn btn-primary my-3 " >Kembali</a>
        </div>
        <div class="d-flex  flex-row" >
            <div class="w-100 border-0 p-3 overflow-hidden d-flex justify-content-center " >
                <a href="#https://www.freepnglogos.com/pics/mountain" title="Image from freepnglogos.com"><img src="https://www.freepnglogos.com/uploads/mountain-png/mountain-png-mountainpng-5.png" width="400" alt="mountain png mountainpng" /></a>
            </div>
            <div class="w-100 border p-3  " >
                <h3 class="mb-4" >Pengisian Data Simaksi</h3>
                <form method="POST" action="/pemesanan/{{ $gunung_id }}"  >
                    @csrf
                    <div class="mb-3">
                      <label for="inputjalur" class="form-label">Jalur Pendakian Gunung</label>
                      <select name="jalur" id="inputjalur" class="form-select" aria-label="Default select example">
                        <option selected disabled >Jalur</option>

                        @foreach ($jalurs as $jalur)
                          <option value="{{ $jalur->nama_jalur }}"> {{ $jalur->nama_jalur }} - Rp.{{ $jalur->harga }} ,00 </option>     
                        @endforeach
                      </select>
                      @error('jalur')
                      <div class="alert alert-danger">
                          {{ $message }}
                      </div>
                  @enderror
                    </div>
                    <div class="mb-3">
                      <label for="inputTanggal" class="form-label">Tanggal Pendakian</label>
                      <input name="tanggal_pendakian" type="date" class="form-control" id="inputTanggal">
                      @error('inputTanggal')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
            </div>
        </div>
        <div class="d-flex flex-column my-3 " >
            <div class="w-100 border p-3  " >

                <h3 class="mb-4" >Detail Pengisian</h3>

                    <div class="mb-3">
                      <label for="input_ketua" class="form-label">Nama Ketua</label>
                      <input name="nama_ketua" type="text" class="form-control" id="input_ketua">
                      @error('input_ketua')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="input_nik" class="form-label">NIK Ketua</label>
                      <input name="nik_ketua" type="text" class="form-control" id="input_nik">
                      @error('input_nik')
                      <div class="alert alert-danger">
                          {{ $message }}
                      </div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="input_tel_1" class="form-label">Nomor Telepon 1</label>
                        <input name="no_1" type="text" class="form-control" id="input_tel_1">
                        @error('input_tel_1')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                      @enderror
                      </div>
                      <div class="mb-3">
                        <label for="input_tel_2" class="form-label">Nomor Telepon 2</label>
                        <input name="no_2" type="text" class="form-control" id="input_tel_2">
                        @error('input_tel_2')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="alamat">Alamat Ketua </label>  
                        <div class="form-floating">
                            <textarea class="form-control  "  name="alamat"  placeholder="Leave a comment here" id="input_alamat_ketua"></textarea>
                            @error('alamat')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="input_peserta" class="form-label">Peserta</label>
                        <input name="peserta" type="text" class="form-control" id="input_peserta">
                        @error('input_peserta')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                      
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            
        </div>

    </section>
@endsection
