@extends('layouts.pengunjung')

@section('content')
<div class="row">
    <div class="col-md-8">
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb" style="font-size: 0.85rem;">
                <li class="breadcrumb-item"><a href="{{ route('blog.index') }}" class="text-success text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item text-success">{{ $artikel->kategori->nama_kategori ?? $artikel->kategori_artikel->nama_kategori ?? 'Umum' }}</li>
                <li class="breadcrumb-item text-muted active">{{ Str::limit($artikel->judul, 30) }}</li>
            </ol>
        </nav>

        <div class="card card-custom">
            @if($artikel->gambar)
                <img src="{{ asset('storage/gambar/' . $artikel->gambar) }}" class="img-thumbnail-blog" style="height: 350px;" alt="{{ $artikel->judul }}">
            @else
                <div class="img-thumbnail-blog bg-secondary d-flex align-items-center justify-content-center text-white" style="height: 350px;">Tidak ada gambar</div>
            @endif

            <div class="card-body p-4 p-lg-5">
                <span class="badge-kategori mb-3 d-inline-block">
                    {{ $artikel->kategori->nama_kategori ?? $artikel->kategori_artikel->nama_kategori ?? 'Umum' }}
                </span>
                
                <h2 class="fw-bold mb-4" style="color: #1e293b;">{{ $artikel->judul }}</h2>
                
                <div class="d-flex align-items-center mb-4 pb-4 border-bottom">
                    <div class="avatar me-3" style="width: 45px; height: 45px; font-size: 1.2rem;">{{ substr($artikel->penulis->user_name ?? 'A', 0, 1) }}</div>
                    <div>
                        <div class="fw-bold text-dark">{{ $artikel->penulis->user_name ?? 'Anonim' }}</div>
                        <div class="text-muted" style="font-size: 0.85rem;">{{ \Carbon\Carbon::parse($artikel->created_at)->translatedFormat('d F Y - H:i') }} WIB</div>
                    </div>
                </div>

                <div class="text-secondary" style="line-height: 1.8; font-size: 1rem;">
                    {!! nl2br(e($artikel->isi)) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-custom sticky-top" style="top: 20px;">
            <div class="card-body p-4">
                <h6 class="fw-bold mb-4">Artikel Terkait</h6>
                
                @forelse($artikel_terkait as $terkait)
                <div class="d-flex mb-3 align-items-center">
                    @if($terkait->gambar)
                        <img src="{{ asset('storage/gambar/' . $terkait->gambar) }}" class="img-thumbnail-terkait me-3" alt="thumb">
                    @else
                        <div class="img-thumbnail-terkait bg-light me-3 d-flex align-items-center justify-content-center text-muted" style="font-size: 0.7rem;">No Img</div>
                    @endif
                    
                    <div>
                        <a href="{{ route('blog.show', $terkait->id) }}" class="text-dark fw-bold text-decoration-none" style="font-size: 0.9rem; line-height: 1.2; display: block; margin-bottom: 4px;">
                            {{ Str::limit($terkait->judul, 40) }}
                        </a>
                        <small class="text-muted" style="font-size: 0.75rem;">{{ \Carbon\Carbon::parse($terkait->created_at)->translatedFormat('d M Y') }}</small>
                    </div>
                </div>
                @empty
                <p class="text-muted small">Belum ada artikel terkait.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection