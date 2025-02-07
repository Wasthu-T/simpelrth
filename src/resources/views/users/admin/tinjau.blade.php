@extends('users.layout.main')

@section('container-user')
<div class="card w-100 mb-4">

    <div class="overflow-auto mt-3" style="max-height: 400px;">
        <!-- Foto Rth -->
        @if($fotos && count($fotos) > 0)
        <h5 class="card-title">Foto RTH : </h5>
        <div class="row">
            @php
            $index = 1;
            @endphp

            @foreach($fotos as $foto)
            @php
            $fileExtension = pathinfo(asset('/storage/' . $foto->ftphn), PATHINFO_EXTENSION);
            @endphp
            @if(in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg', 'webp']))
            <div class="col-12 col-md-4 col-lg-3 mb-3">
                <img src="{{ asset('/storage/' . $foto->ftphn) }}" class="img-thumbnail" alt="fotorth" width="100%">
            </div>
            @elseif($fileExtension === 'pdf')
            <div class="col-12 col-md-4 col-lg-3 mb-3">
                <button data-bs-toggle="modal" data-bs-target="#pdfModal" data-pdf="{{ asset('/storage/' . $foto->ftphn) }}" class="btn btn-success w-100">
                    <i class="bi bi-file-earmark-pdf-fill"></i> Lihat Pdf {{ $index }}
                </button>
            </div>

            @php
            $index ++;
            @endphp
            @endif
            @endforeach
        </div>
        @endif

        <!-- Lampiran Rekomendasi Kapanewon -->
        @if($lms && count($lms) > 0)
        <h5 class="card-title">Lampiran Rekomendasi Kapanewon : </h5>
        <div class="row">
            @php
            $index = 1;
            @endphp
            @foreach($lms as $lmrec)
            @php
            $fileExtension = pathinfo(asset('/storage/' . $lmrec), PATHINFO_EXTENSION);
            @endphp
            @if(in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg', 'webp']))
            <div class="col-12 col-md-4 col-lg-3 mb-3">
                <img src="{{ asset('/storage/' . $lmrec) }}" class="img-thumbnail" alt="lmrec" width="100%">
            </div>
            @elseif($fileExtension === 'pdf')
            <div class="col-12 col-md-4 col-lg-3 mb-3">
                <button data-bs-toggle="modal" data-bs-target="#pdfModal" data-pdf="{{ asset('/storage/' . $lmrec) }}" class="btn btn-success w-100">
                    <i class="bi bi-file-earmark-pdf-fill"></i> Lihat Pdf {{ $index }}
                </button>
            </div>
            @php
            $index ++;
            @endphp
            @endif
            @endforeach
        </div>
        @endif

        <!-- Foto KTP -->
        <div class="card-body">
            @if($fotoktp != null)
            @php
            $fileExtension = pathinfo(asset('/storage/' . $fotoktp), PATHINFO_EXTENSION);
            @endphp
            <h5 class="card-title">Foto KTP : </h5>
            @if(in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg', 'webp']))
            <div class="mb-3">
                <img src="{{ asset('/storage/' . $fotoktp) }}" class="img-thumbnail" alt="fotoktp" width="50%">
            </div>
            @elseif($fileExtension === 'pdf')
            <div class="mb-3">
                <button data-bs-toggle="modal" data-bs-target="#pdfModal" data-pdf="{{ asset('/storage/' . $fotoktp) }}" class="btn btn-success">
                    <i class="bi bi-file-earmark-pdf-fill"></i> Lihat Pdf KTP
                </button>
            </div>
            @endif
            @endif
        </div>

        <!-- Foto Survei -->
        @if($surveis && count($surveis) > 0)
        @php
        $index = 1;
        @endphp
        <h5 class="card-title">Foto Survei : </h5>
        <div class="row">
            @foreach($surveis as $survei)
            @php
            $fileExtension = pathinfo(asset('/storage/' . $survei), PATHINFO_EXTENSION);
            @endphp
            @if(in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg', 'webp']))
            <div class="col-12 col-md-4 col-lg-3 mb-3">
                <img src="{{ asset('/storage/' . $survei) }}" class="img-thumbnail" alt="survei" width="100%">
            </div>
            @elseif($fileExtension === 'pdf')
            <div class="col-12 col-md-4 col-lg-3 mb-3">
                <button data-bs-toggle="modal" data-bs-target="#pdfModal" data-pdf="{{ asset('/storage/' . $survei) }}" class="btn btn-success w-100">
                    <i class="bi bi-file-earmark-pdf-fill"></i> Lihat Pdf {{ $index }}
                </button>
            </div>
            @php
            $index ++;
            @endphp
            @endif
            @endforeach
        </div>
        @endif

        <!-- Rekomendasi -->
        @if($suratrth && count($suratrth) > 0)
        @php
        $index = 1;
        @endphp
        <h5 class="card-title">Rekomendasi : </h5>
        <div class="row">
            @foreach($suratrth as $surat)
            @php
            $fileExtension = pathinfo(asset('/storage/' . $surat), PATHINFO_EXTENSION);
            @endphp
            @if(in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg', 'webp']))
            <div class="col-12 col-md-4 col-lg-3 mb-3">
                <img src="{{ asset('/storage/' . $surat) }}" class="img-thumbnail" id="surat" alt="surat" width="100%">
            </div>
            @elseif($fileExtension === 'pdf')
            <div class="col-12 col-md-4 col-lg-3 mb-3">
                <button data-bs-toggle="modal" data-bs-target="#pdfModal" data-pdf="{{ asset('/storage/' . $surat) }}" class="btn btn-success w-100">
                    <i class="bi bi-file-earmark-pdf-fill"></i> Lihat Pdf {{ $index }}
                </button>
            </div>
            @php
            $index ++;
            @endphp
            @endif
            @endforeach
        </div>
        @endif

        <!-- Foto Pelaksana -->
        @if($pelaksanas && count($pelaksanas) > 0)
        @php
        $index = 1;
        @endphp
        <h5 class="card-title">Foto Pelaksana : </h5>
        <div class="row">
            @foreach($pelaksanas as $pelaksana)
            @php
            $fileExtension = pathinfo(asset('/storage/' . $pelaksana), PATHINFO_EXTENSION);
            @endphp
            @if(in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg', 'webp']))
            <div class="col-12 col-md-4 col-lg-3 mb-3">
                <img src="{{ asset('/storage/' . $pelaksana) }}" class="img-thumbnail" alt="pelaksana" width="100%">
            </div>
            @elseif($fileExtension === 'pdf')
            <div class="col-12 col-md-4 col-lg-3 mb-3">
                <button data-bs-toggle="modal" data-bs-target="#pdfModal" data-pdf="{{ asset('/storage/' . $pelaksana) }}" class="btn btn-success w-100">
                    <i class="bi bi-file-earmark-pdf-fill"></i> Lihat Pdf {{ $index }}
                </button>
            </div>
            @php
            $index ++;
            @endphp
            @endif
            @endforeach
        </div>
        @endif
    </div>

    <!-- Modal -->
    <div class="modal fade mt-5" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pdfModalLabel">PDF Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <embed id="pdfEmbed" src="" type="application/pdf" width="100%" height="400px" />
                </div>
            </div>
        </div>
    </div>
    @if($data)
    <div class="card-body">
        <h5 class="card-title">Kode : {{$data->slug}}</h5>
        <div class="position-relative m-4">
            <div class="container mt-5">
                @php
                $progressWidth = 0;
                $step1Color = 'btn-secondary';
                $step2Color = 'btn-secondary';
                $step3Color = 'btn-secondary';
                $step4Color = 'btn-secondary';
                $step5Color = 'btn-secondary';
                $step6Color = 'btn-secondary';
                $progresscolor = 'bg-danger';

                switch($data->status) {
                case 0:
                $progressWidth = 0;
                $step1Color = 'btn-danger';
                $progresscolor = 'bg-danger';
                break;
                case 1:
                $progressWidth = 20;
                $step1Color = 'btn-danger';
                $step2Color = 'btn-danger';
                $progresscolor = 'bg-danger';
                break;
                case 2:
                $progressWidth = 40;
                $step1Color = 'btn-primary';
                $step2Color = 'btn-primary';
                $step3Color = 'btn-primary';
                $progresscolor = 'bg-primary';
                break;
                case 3:
                $progressWidth = 60;
                $step1Color = 'btn-primary';
                $step2Color = 'btn-primary';
                $step3Color = 'btn-primary';
                $step4Color = 'btn-primary';
                $progresscolor = 'bg-primary';
                break;
                case 4.1:
                case 4.2:
                case 4.3:
                $progressWidth = 80;
                $step1Color = 'btn-primary';
                $step2Color = 'btn-primary';
                $step3Color = 'btn-primary';
                $step4Color = 'btn-primary';
                $step5Color = 'btn-primary';
                $progresscolor = 'bg-primary';
                break;
                case 5:
                $progressWidth = 100;
                $step1Color = 'btn-success';
                $step2Color = 'btn-success';
                $step3Color = 'btn-success';
                $step4Color = 'btn-success';
                $step5Color = 'btn-success';
                $step6Color = 'btn-success';
                $progresscolor = 'bg-success';
                break;
                case 6:
                $progressWidth = 100;
                $step1Color = 'btn-primary';
                $step2Color = 'btn-primary';
                $step3Color = 'btn-primary';
                $step4Color = 'btn-primary';
                $step5Color = 'btn-primary';
                $step6Color = 'btn-primary';
                $progresscolor = 'bg-primary';
                break;
                default:
                $progressWidth = 0;
                break;
                }
                @endphp
                <div class="position-relative">
                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="{{ $progressWidth }}" aria-valuemin="0" aria-valuemax="100" style="height: 1px;">
                        <div class="progress-bar {{ $progresscolor }}" id="progress-bar" style="width: {{ $progressWidth }}%;"></div>
                    </div>
                    <button type="button" data-bs-trigger="hover focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Data kurang lengkap/salah" class="position-absolute top-0 start-0 translate-middle btn btn-sm rounded-pill {{ $step1Color }}" style="width: 2rem; height:2rem;">1</button>
                    <button type="button" data-bs-trigger="hover focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Menunggu diproses" class="position-absolute top-0 start-20 translate-middle btn btn-sm rounded-pill {{ $step2Color }}" style="width: 2rem; height:2rem;">2</button>
                    <button type="button" data-bs-trigger="hover focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Sedang diditinjau" class="position-absolute top-0 start-40 translate-middle btn btn-sm rounded-pill {{ $step3Color }}" style="width: 2rem; height:2rem;">3</button>
                    <button type="button" data-bs-trigger="hover focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Menunggu surat rekomendasi" class="position-absolute top-0 start-60 translate-middle btn btn-sm rounded-pill {{ $step4Color }}" style="width: 2rem; height:2rem;">4</button>
                    <button type="button" data-bs-trigger="hover focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Sedang dilaksanakan" class="position-absolute top-0 start-80 translate-middle btn btn-sm rounded-pill {{ $step5Color }}" style="width: 2rem; height:2rem;">5</button>
                    <button type="button" data-bs-trigger="hover focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Selesai" class="position-absolute top-0 start-100 translate-middle btn btn-sm rounded-pill {{ $step6Color }}" style="width: 2rem; height:2rem;">6</button>
                </div>

            </div>
        </div>
        @if($data->status == 0)
        <h5 class="text-danger">Data kurang lengkap/salah</h5>
        @elseif($data->status == 1)
        <h5 class="text-danger">Menunggu diproses</h5>
        @elseif($data->status == 2)
        <h5 class="text-primary">Sedang ditinjau</h5>
        @elseif($data->status == 3)
        <h5 class="text-primary">Menunggu surat rekomendasi</h5>
        @elseif($data->status == 4.1 || $data->status == 4.2 || $data->status == 4.3)
        <h5 class="text-primary">Sedang dilaksanakan</h5>
        @elseif($data->status == 5)
        <h5 class="text-success">Selesai</h5>
        @elseif($data->status == 6)
        <h5 class="text-primary">Status jalan {{$data->istansi}}</h5>
        <p class="text-danger">Tidak dapat dilanjuti dikarenakan jalan {{$data->istansi}}</p>
        @else
        <h5 class="text-danger">Error silahkan menghubungi admin</h5>
        @endif
        @if(session()->has('status'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <strong>{{ session('status') }} </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->has('statusgagal'))
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <strong>{{ session('statusgagal') }} </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->has('gagal'))
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <strong>{{ session('gagal') }} </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <td colspan="2">
                        <h5>Data pemohon :</h5>
                    </td>
                </tr>
                @if($data->note != null)
                <tr>
                    <td class="text-danger">Kekurangan data :</td>
                    <td class="text-danger">: {{$data->note}}</td>
                </tr>
                @endif
                <tr>
                    <td>NIK</td>
                    <td>: {{$data->nik}}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>: {{ $datauser->nm_lengkap }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: {{ $datauser->email }}</td>
                </tr>
                <tr>
                    <td>No Hp</td>
                    <td>: {{ $datauser->no_hp }}</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h5>Data permohonan :</h5>
                    </td>
                </tr>
                <tr>
                    <td>Lintang</td>
                    <td>: {{$data->lat}}</td>
                </tr>
                <tr>
                    <td>Bujur</td>
                    <td>: {{$data->long}}</td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>: {{$data->alasan}}</td>
                </tr>
                <tr>
                    <td>Lokasi</td>
                    <td>: {{$data->loc_phntts}}</td>
                </tr>
                @if($data->status != 6)
                <tr>
                    <td>Lokasi Peta RTH</td>
                    <td>: {{$data->loc_phnpt}}</td>
                </tr>
                <tr>
                    <td>Hasil survei</td>
                    <td>: {{$data->survei}}</td>
                </tr>
                <tr>
                    <td>Dibuat</td>
                    <td>: {{$data->created_at->format('d/m/Y H:i:s')}} WIB</td>
                </tr>
                <tr>
                    <td>Mulai survei</td>
                    @if($data->tgl_survei != null)
                    <td>: {{ date('d/m/Y', strtotime($data->tgl_survei)) }}</td>
                    @else
                    <td>: </td>
                    @endif
                </tr>
                <tr>
                    <td>Diupdate</td>
                    <td>: {{$data->updated_at->format('d/m/Y H:i:s')}} WIB</td>
                </tr>
                <tr>
                    <td>Pelaksana</td>
                    <td>: {{ $data->istansi }}</td>
                </tr>
                <tr>
                    <td>Pelaksanaan</td>
                    @if($data->tgl_pelaksanaan != null)
                    <td>: {{ date('d/m/Y', strtotime($data->tgl_pelaksanaan)) }}</td>
                    @else
                    <td>: </td>
                    @endif
                </tr>
                @else
                <tr>
                    <td>Dibuat</td>
                    <td>: {{$data->created_at->format('d/m/Y H:i:s')}} WIB</td>
                </tr>
                <tr>
                    <td>Diupdate</td>
                    <td>: {{$data->updated_at->format('d/m/Y H:i:s')}} WIB</td>
                </tr>
                @endif

            </tbody>
        </table>


    </div>
    @else
    <div class="text-danger">
        Data tidak ditemukan
    </div>
    @endif

    <div class="justify-content-between d-sm-flex flex-row mb-3 mx-3">
        <div class="mb-2">
            <a href="{{ $backUrl }}" class=" text-decoration-none">
                <button type="button" class="btn btn-outline-success w-100">Kembali</button>
            </a>
        </div>
        <div class="mb-2">
            <a class="text-decoration-none " href="https://www.google.com/maps?q={{$data->lat}},{{$data->long}}" target="_blank">
                <button type="button" class="btn btn-outline-success w-100">
                    Google Map
                </button>
            </a>
        </div>
        @if($data->status == 5 || $data->status == 6)
        <div>
            <p class="text-body-secondary">Selesai</p>
        </div>
        @elseif(auth()->user()->akses_lvl == "2" && in_array($data->status, [4.1, 4.2, 4.3]))
        <div>
            <p class="text-body-secondary">Menunggu UPTDKPP</p>
        </div>
        @else
        <div class="mb-2">
            <a href="/{{ $nextUrl }}" class="text-decoration-none">
                <button type="button" class="btn btn-outline-success w-100">Lanjut</button>
            </a>
        </div>
        @endif
    </div>
</div>
<script src="/js/pdfreader.js"></script>
@endsection