


@extends('pemesanan.master');

@push('datatable')
    

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endpush

@section('content')
<section  >
    <div class="container" >
        <div class="d-flex justify-content-center  my-3 " >
            <h1 class="font-sans font-semibold text-gray-500 " >Berikut Merupakan Daftar Pemesanan</h1>
        </div>

        <div class="d-flex justify-content-end  my-3 " >
            <a href="/pemesanan/create" type="button" class="btn btn-info font-semibold ">Lakukan Pemesanan</a>
        </div>

        <div class="d-flex justify-content-center  my-3 " >
            {{-- Table --}}
            <table id="example" class="table  table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Ketua</th>
                        <th>Gunung</th>
                        <th>Jalur yang Dipilih</th>
                        <th>Tanggal Pendakian</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($listpendaki as $key => $item)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$item->nama_ketua}}</td>
                            <td>
                                @if ( $item->gunungs_id == 1 )
                                    Sumbing
                                @elseif( $item->gunungs_id == 2 )
                                    Sindoro
                                @elseif( $item->gunungs_id == 3 )
                                    Slamet
                                @endif
                            </td>
                            <td>{{$item->jalur}}</td>
                            <td>{{$item->tanggal_pendakian}}</td>
                            <td>
                                <div class="d-flex flex-row justify-content-around " >
                                    <div>
                                        <a href="/pemesanan/{{$item->id}}" class="btn btn-primary font-semibold text-white " >Detail</a>
                                    </div>
                                    <div>
                                        <form action="/pemesanan/{{ $item->id }}" method="POST" >
                                            <a href="/pemesanan/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
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
    </div>
</section>
@endsection