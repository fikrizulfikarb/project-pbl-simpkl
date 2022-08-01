<x-module.istansi>

    <x-template.button.back-button url="istansi/master-data/lowongan" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Perusahaan
            </div>
        </div>
        <div class="card-body">
            <div class="row">hghghggh
                <div class="col-md-5">
                    <dl class="row">
                        <dt class="col-md-4">Nama</dt>
                        <dl class="col-md-8">{{ $lowongan->perusahaan->nama_perusahaan }}</dl>
                        <dt class="col-md-4">alamat</dt>
                        <dl class="col-md-8">{{ $lowongan->perusahaan->alamat }}</dl>
                        <dt class="col-md-4">Telp</dt>
                        <dl class="col-md-8">{{ $lowongan->perusahaan->no_handphone }}</dl>
                        <dt class="col-md-4">Email</dt>
                        <dl class="col-md-8">{{ $lowongan->perusahaan->email }}</dl>
                        <dt class="col-md-4">Keterangan</dt>
                        <dl class="col-md-8">{{ $lowongan->perusahaan->keterangan }}</dl>
                        <dt class="col-md-4">Bidang Magang</dt>
                        <dl class="col-md-8">{{ $lowongan->bidang }}</dl>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-left">Profil Mahasiswa</h5>
                            <hr class="no-margin">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        Tempat PKL
                                        <h2>
                                            CV. Deni Suryaz Amazing Man
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <hr class="no-margin">
                            <div class="row">
                                <div class="col-md-6">
                                    <dl>
                                        <dt>Dosen Pembimbing</dt>
                                        <dd>
                                            Bhismo ,S.H,M.Si
                                        </dd>
                                        <dt>NIK/NIP</dt>
                                        <dd>
                                            3042020019/1234567890
                                        </dd>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    <dl>
                                        <dt>Dosen Penguji</dt>
                                        <dd>
                                            Belum Tau
                                        </dd>
                                        <dt>NIK/NIP</dt>
                                        <dd>
                                            Belum Tau
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <hr class="no-margin">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


</x-module.istansi>
