<x-module.istansi>
    
    <x-template.button.back-button url="istansi/master-data/dataperusahaan" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Perusahaan
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <dl class="row">
                        <dt class="col-4">Nama</dt>
                        <dl class="col-8">{{ $dataperusahaan->nama_perusahaan }}</dl>             
                        <dt class="col-4">alamat</dt>
                        <dl class="col-8">{{ $dataperusahaan->alamat }}</dl>
                        <dt class="col-4">Telp</dt>
                        <dl class="col-8">{{ $dataperusahaan->no_handphone }}</dl>
                        <dt class="col-4">Email</dt>
                        <dl class="col-8">{{ $dataperusahaan->email }}</dl>
                        <dt class="col-4">Keterangan</dt>
                        <dl class="col-8">{{ $dataperusahaan->keterangan }}</dl>
                    </dl>
                </div>
            </div>
        </div>
    </div>

</x-module.istansi>