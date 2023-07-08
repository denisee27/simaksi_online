@extends('pemesanan.master');

@section('content')
    <section class="container" >
        <div class="d-flex justify-content-center  my-3 " >
            <h1 class="font-sans font-semibold text-gray-500 " >Berikut Merupakan Daftar Gunung</h1>
        </div>

        <div class="d-flex justify-content-end  my-3 " >
            <a href="/gunung/create" type="button" class="btn btn-info font-semibold ">Tambah Gunung</a>
        </div>

        <div class="d-flex justify-content-center  my-3 " >
            {{-- Table --}}
            <table id="example" class="table  table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Gunung</th>
                        <th>Deskripsis</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($gunungs as $key => $item)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->deskripsi}}</td>
                            <td>
                                <div class="d-flex flex-row justify-content-around " >
                                    <div>
                                        <a href="/gunung/{{$item->id}}" class="btn btn-primary font-semibold text-white " >Detail</a>
                                    </div>
                                    <div>
                                        <form action="/gunung/{{ $item->id }}" method="POST" >
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Batalkan" class="btn btn-danger font-semibold text-white"  >
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                            <tr>
                            <td>Data Masih Kosong</td>
                            </tr>
                        @endforelse
                </tbody>
               
            </table>
            {{-- Table End --}}
        </div>
    </section>
@endsection