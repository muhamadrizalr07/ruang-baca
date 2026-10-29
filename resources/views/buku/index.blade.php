@extends('layouts.app')

@section('title', 'Koleksi Buku — Ruang Baca')

@section('content')

<style>
    .collection {
        max-width: 1440px;
        margin: auto;
        padding: 65px 8% 80px;
    }

    .collection-header {
        padding-bottom: 30px;
        border-bottom: 1px solid #E8E3D9;
        margin-bottom: 30px;
    }

    .eyebrow {
        color: #8A8B70;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 12px;
    }

    .collection-header h1 {
        font-family: Georgia, serif;
        font-size: clamp(36px, 5vw, 52px);
        font-weight: normal;
        letter-spacing: -1.5px;
        margin-bottom: 12px;
    }

    .collection-header p {
        color: #827A6D;
        font-size: 15px;
        max-width: 520px;
    }

    .filter-area {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 18px;
        margin-bottom: 35px;
    }

    .filter-list {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .filter-link {
        display: inline-block;
        padding: 8px 15px;
        border: 1px solid #E2DCCF;
        border-radius: 4px;
        color: #827A6D;
        text-decoration: none;
        font-size: 13px;
        transition: 0.2s;
    }

    .filter-link:hover,
    .filter-link.active {
        background: #514536;
        border-color: #514536;
        color: white;
    }

    .book-count {
        color: #827A6D;
        font-size: 13px;
    }

    .book-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 38px 24px;
    }

    .book-card {
        min-width: 0;
    }

    .book-link {
        color: inherit;
        text-decoration: none;
    }

    .book-cover {
        display: block;
        width: 100%;
        aspect-ratio: 3 / 4;
        object-fit: cover;
        background: #EEE9DF;
        margin-bottom: 14px;
        transition: opacity 0.2s;
    }

    .book-link:hover .book-cover {
        opacity: 0.88;
    }

    .book-category {
        color: #8A8B70;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .book-title {
        font-family: Georgia, serif;
        font-size: 19px;
        font-weight: normal;
        line-height: 1.4;
        margin: 5px 0;
    }

    .book-author {
        color: #827A6D;
        font-size: 13px;
    }

    .empty-state {
        padding: 55px 20px;
        text-align: center;
        background: #FFFFFF;
        border: 1px solid #E8E3D9;
    }

    .empty-state h2 {
        font-family: Georgia, serif;
        font-size: 25px;
        font-weight: normal;
        margin-bottom: 10px;
    }

    .empty-state p {
        color: #827A6D;
        font-size: 14px;
        margin-bottom: 20px;
    }

    .back-link {
        display: inline-block;
        color: #514536;
        font-size: 14px;
        text-decoration: underline;
    }

    @media (max-width: 1000px) {
        .collection {
            padding: 50px 5% 65px;
        }

        .book-grid {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
    }

    @media (max-width: 650px) {
        .collection {
            padding: 40px 5% 55px;
        }

        .book-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 28px 15px;
        }

        .book-title {
            font-size: 17px;
        }

        .filter-area {
            align-items: flex-start;
            flex-direction: column;
        }
    }
</style>

<section class="collection">
    <header class="collection-header">
        <div class="eyebrow">Perpustakaan Ruang Baca</div>
        <h1>Koleksi Buku</h1>
        <p>
            Temukan bacaan yang sesuai dengan minatmu,
            mulai dari pengembangan diri hingga cerita horor.
        </p>
    </header>

    <div class="filter-area">
        <div class="filter-list">
            <a
                href="/buku"
                class="filter-link {{ !request('kategori') ? 'active' : '' }}"
            >
                Semua Buku
            </a>

            @foreach (collect($buku)->pluck('kategori')->unique()->sort()->values() as $kategori)
                <a
                    href="/buku?kategori={{ urlencode($kategori) }}"
                    class="filter-link {{ request('kategori') === $kategori ? 'active' : '' }}"
                >
                    {{ $kategori }}
                </a>
            @endforeach
        </div>

        <div class="book-count">
            {{ count($buku) }} buku ditemukan
        </div>
    </div>

    @if (count($buku) > 0)
        <div class="book-grid">
            @foreach ($buku as $item)
                <article class="book-card">
                    <a href="/buku/{{ $item['id'] }}" class="book-link">
                        <img
                            src="{{ $item['cover'] }}"
                            alt="Sampul {{ $item['judul'] }}"
                            class="book-cover"
                            loading="lazy"
                        >

                        <div class="book-category">
                            {{ $item['kategori'] }}
                        </div>

                        <h2 class="book-title">
                            {{ $item['judul'] }}
                        </h2>

                        <p class="book-author">
                            {{ $item['penulis'] }}
                        </p>
                    </a>
                </article>
            @endforeach
        </div>
    @else
        <div class="empty-state">
            <h2>Buku belum ditemukan</h2>
            <p>Belum ada buku dalam kategori yang dipilih.</p>
            <a href="/buku" class="back-link">Lihat semua buku</a>
        </div>
    @endif
</section>

@endsection