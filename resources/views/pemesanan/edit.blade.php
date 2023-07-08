@extends('pemesanan.master');

@section('content')
<form action="/pemesanan/{{$listpendaki->id}}" method="POST">
    @csrf
    @method('put')
    <section class="container" >

            <div class="d-flex flex-row" >
                <div class="w-50 border-0 p-5 overflow-hidden d-flex justify-content-center " >
                    <img style="max-height: 300px; max-width: 300px;" src=" {{ asset('/tivo/images/backgroundSUMBING.jpg') }} " alt="gunug sumbing" sizes="" srcset="">
                </div>
                <div class="w-100 border p-5  " >
                    <h3>Gunung Sumbing</h3>
                    <p> <span class="fw-bold" >  Jalur yang diambil: </span>  <input type="text" class="fw-ligth border" name="jalur" value="{{$listpendaki->jalur}}">
                    </input> </p>

                    <div class="btn btn-primary" >
                        {{$listpendaki->tanggal_pendakian}}
                    </div>

                    <div class="d-flex mb-1 border-0 my-5" >
                    </div>

                    <div>
                        <p><span class="fw-bold" > Nama Ketua :   </span> <input type="text" class="fw-ligth border" name="nama_ketua" value="{{$listpendaki->nama_ketua}}">
                        </input>  </p>
                        <p><span class="fw-bold" > NIK Ketua :   </span> <input type="text" class="fw-ligth border" name="nik_ketua" value="{{$listpendaki->nik_ketua}}">
                        </input>  </p>
                        <div class="form-floating mb-2">
                            <input class="form-control"  id="floatingPhoneNumber1"
                                type="text" class="border-0" name="no_1" value="{{$listpendaki->no_1}}">
                            </input>
                            <label for="floatingPhoneNumber1">Nomor Telepon 1</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input class="form-control"  id="floatingPhoneNumber2"
                            type="text" class="border-0" name="no_2" value="{{$listpendaki->no_2}}">
                        </input>
                            <label for="floatingPhoneNumber2">Nomor Telepon 2</label>
                        </div>

                        <div class="mb-3" >
                            <p><span class="fw-bold" >Alamat Ketua</span></p>
                            <textarea name="alamat" class="form-control "  id="" cols="20" rows="10">{{$listpendaki->alamat}}</textarea>
                        </div>

                        <div class="mb-2" >
                            <p><span class="fw-bold" > Peserta :   </span> <input type="text" class="fw-ligth border" name="peserta" value="{{$listpendaki->peserta}}">
                            </input>  </p>
                            
                        </div>
                        <a href="/pemesanan/{{$listpendaki->id}}" class="btn btn-primary p-2 mb-3" >Kembali</a>
                        <button type="submit" class="btn btn-warning p-2 mb-3">Update</button>
                    </div>
                </div>
            </div>

        
    </section>
</form>
@endsection