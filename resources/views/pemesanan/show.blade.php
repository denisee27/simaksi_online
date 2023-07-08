@extends('pemesanan.master');

@section('content');
    <section class="container" >

        <div class="d-flex flex-row" >
            <div class="w-50 border-0 p-5 overflow-hidden d-flex justify-content-center " >
                <img style="max-height: 300px; max-width: 300px;" src=" {{ asset('/tivo/images/backgroundSUMBING.jpg') }} " alt="gunug sumbing" sizes="" srcset="">
            </div>
            <div class="w-100 border p-5  " >
                <h3>Gunung Sumbing</h3>
                <p> <span class="fw-bold" >  Jalur yang diambil: </span>  {{$listpendaki->jalur}} </p>

                <div class="btn btn-primary" >
                    {{$listpendaki->tanggal_pendakian}}
                </div>

                <div class="d-flex mb-1 border-0 my-5" >
                </div>

                <div>
                    <p><span class="fw-bold" > Nama Ketua :   </span> {{$listpendaki->nama_ketua}}  </p>
                    <p><span class="fw-bold" > NIK Ketua :   </span> {{$listpendaki->nik_ketua}}  </p>
                    <div class="form-floating mb-2">
                        <div class="form-control"  id="floatingPhoneNumber1" >
                            {{$listpendaki->no_1}}
                        </div>
                        <label for="floatingPhoneNumber1">Nomor Telepon 1</label>
                    </div>

                    <div class="form-floating mb-2">
                        <div class="form-control"  id="floatingPhoneNumber2" >
                            {{$listpendaki->no_2}}
                        </div>
                        <label for="floatingPhoneNumber2">Nomor Telepon 2</label>
                    </div>

                    <div class="mb-3" >
                        <p><span class="fw-bold" >Alamat Ketua</span></p>
                        <textarea name="" class="form-control "  id="" cols="20" rows="10">{{$listpendaki->alamat}}</textarea>
                    </div>

                    <div class="mb-2" >
                        <p><span class="fw-bold" > Peserta :   </span> {{$listpendaki->peserta}}  </p>
                    </div>
                    <a href="/pemesanan" class="btn btn-primary p-2 mb-3" >Kembali</a>
                    <a href="/pemesanan/{{ $listpendaki->id }}/pdf" class="btn btn-primary p-2 mb-3" >Download PDF</a>
                </div>
            </div>
        </div>
    </section>
@endsection