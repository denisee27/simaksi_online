@extends('pemesanan.master')

@section('content')
    <section  >
        <div class="container" >
            <div class="d-flex justify-content-center  my-3 " >
                <h1 class="font-sans font-semibold text-gray-500 " >Buat Pemesanan Baru</h1>
            </div>

            <div class="d-flex border-0 justify-content-end " >
                <a class="btn btn-primary my-3 " href="/pemesanan" >Kembali</a>
            </div>

            <div class="border-0 d-flex justify-content-between " >

                    @forelse ($gunungs as $gunung)
                        <div class="card" style="width: 18rem;">
                            <img src=" {{ asset('/tivo/images/'.$gunung->poto_gunung ) }} " class="card-img-top" alt="image of gunung">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-center ">Gunung  {{ $gunung->nama }} </h5>
                                <p class="card-text text-center"> {{ Str::limit('Buka', 100)  }} </p>
                                <div class="d-grid gap-2">
                                    <a href="/pemesanan/create/{{ $gunung->id }}" class="btn btn-primary ">Pilih</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div  >  Data Gunung Sedang Kosong </div>
                    @endforelse

                   
               
            </div>
        </div>
    </section>
@endsection
