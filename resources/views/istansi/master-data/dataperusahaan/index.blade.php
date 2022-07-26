<x-module.istansi>

    <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Data Perusahaan
    </h5>

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Perusahaan
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead class="bg-dark">
                    <th style="width : 1%">No</th>
                    <th width="100px">Aksi</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jumlah Lowongan</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_dataperusahaan as $dataperusahaan)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="istansi/master-data/dataperusahaan"
                                        id="{{ $dataperusahaan->id }}" title="lihat detail" />
                                    {{-- <x-template.button.edit-button url="istansi/master-data/dataperusahaan"
                                        id="{{ $dataperusahaan->id }}"/>
                                    <x-template.button.delete-button url="istansi/master-data/dataperusahaan"
                                        id="{{ $dataperusahaan->id }}"/> --}}
                                </div>
                            </td>
                            <td>{{ $dataperusahaan->nama_perusahaan }}</td>
                            <td>{{ $dataperusahaan->alamat }}</td>
                            <td>{{ 2 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.istansi>
