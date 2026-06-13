@extends('layouts.pengunjung')

@section('content')
<div class="row">
    <div class="col-md-8">
        @forelse($artikel as $item)
        <div class="card card-custom">
            @if($item->gambar)
                <img src="{{ asset('storage/gambar/' . $item->gambar) }}" class="img-thumbnail-blog" alt="{{ $item->judul }}">
            @else
                <div class="img-thumbnail-blog bg-secondary d-flex align-items-center justify-content-center text-white">Tidak ada gambar</div>
            @endif

            <div class="card-body p-4">
                <span class="badge-kategori mb-3 d-inline-block">
                    {{ $item->kategori->nama_kategori ?? $item->kategori_artikel->nama_kategori ?? 'Umum' }}
                </span>
                
                <h3 class="fw-bold mb-3" style="color: #1e293b;">{{ $item->judul }}</h3>
                
                <div class="d-flex align-items-center mb-3">
                    <div class="avatar me-2">{{ substr($item->penulis->user_name ?? 'A', 0, 1) }}</div>
                    <div class="text-muted" style="font-size: 0.85rem;">
                        <span class="fw-bold text-dark">{{ $item->penulis->user_name ?? 'Anonim' }}</span> &bull; 
                        {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d M Y') }}
                    </div>
                </div>

                <p class="text-secondary mb-4" style="line-height: 1.6; font-size: 0.95rem;">
                    {{ Str::limit(strip_tags($item->isi), 180) }}
                </p>
                
                <a href="{{ route('blog.show', $item->id) }}" class="btn-kelanjutannya">Baca kelanjutannya &rarr;</a>
            </div>
        </div>
        @empty
        <div class="alert alert-info">Belum ada artikel.</div>
        @endforelse
    </div>

    <div class="col-md-4">
        <div class="card card-custom sticky-top" style="top: 20px;">
            <div class="card-body p-4">
                <h6 class="fw-bold mb-4">Kategori Artikel</h6>
                <div class="list-group list-group-flush">
                    <a href="{{ route('blog.index') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 mb-2 rounded {{ !request('kategori') ? 'bg-light fw-bold text-dark' : 'text-secondary' }}">
                        <span>Semua Artikel</span>
                        <span class="badge bg-light text-secondary border rounded-circle">{{ $kategori->sum('artikel_count') }}</span>
                    </a>
                    
                    @foreach($kategori as $kat)
                    <a href="{{ route('blog.index', ['kategori' => $kat->id]) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 mb-2 rounded {{ request('kategori') == $kat->id ? 'bg-light fw-bold text-success' : 'text-secondary' }}">
                        <span>
                            @if(request('kategori') == $kat->id)
                                <span class="text-success me-2">&bull;</span>
                            @endif
                            {{ $kat->nama_kategori }}
                        </span>
                        <span class="badge bg-light text-secondary border rounded-circle">{{ $kat->artikel_count }}</span>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection