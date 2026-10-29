@extends('layouts.app')

@section('title', 'Kategori Buku — Ruang Baca')

@section('content')

<style>
    .category-page {
        max-width: 1200px;
        margin: auto;
        padding: 65px 8% 80px;
    }

    .category-header {
        padding-bottom: 30px;
        border-bottom: 1px solid #E8E3D9;
        margin-bottom: 35px;
    }

    .eyebrow {
        color: #8A8B70;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 12px;
    }

    .category-header h1 {
        font-family: Georgia, serif;
        font-size: clamp(36px, 5vw, 52px);
        font-weight: normal;
        letter-spacing: -1.5px;
        margin-bottom: 12px;
    }

    .category-header p {
        color: #827A6D;
        font-size: 15px;
        max-width: 520px;
        line-height: 1.8;
    }

    .category-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 18px;
    }

    .category-card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 170px;
        padding: 24px;
        background: #FFFFFF;
        border: 1px solid #E8E3D9;
        color: #514536;
        text-decoration: none;
        transition: border-color 0.2s, transform 0.2s;
    }

    .category-card:hover {
        border-color: #A5A28C;
        transform: translateY(-3px);
    }

    .category-number {
        color: #8A8B70;
        font-size: 12px;
        letter-spacing: 1px;
    }

    .category-card h2 {
        font-family: Georgia, serif;
        font-size: 24px;
        font-weight: normal;
        margin-top: 24px;
    }

    .category-bottom {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 15px;
        color: #827A6D;
        font-size: 13px;
    }

    .category-arrow {
        color: #514536;
        font-size: 18px;
    }

    .category-empty {
        padding: 45px 20px;
        background: #FFFFFF;
        border: 1px solid #E8E3D9;
        text-align: center;
        color: #827A6D;
    }

    @media (max-width: 850px) {
        .category-page {
            padding: 50px 5% 65px;
        }

        .category-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 500px) {
        .category-page {
            padding: 40px 5% 55px;
        }

        .category-grid {
            grid-template-columns: 1fr;
            gap: 12px;
        }

        .category-card {
            min-height: 140px;
        }
    }
</style>

<section class="category-page">
    <header class="category-header">
        <div class="eyebrow">Jelajahi berdasarkan minat</div>

        <h1>Kategori Buku</h1>

        <p>
            Setiap orang punya selera membaca yang berbeda.
            Pilih kategori dan temukan cerita yang kamu sukai.
        </p>
    </header>

    @if (count($kategori) > 0)
        <div class="category-grid">
            @foreach ($kategori as $index => $namaKategori)
                <a
                    href="/buku?kategori={{ urlencode($namaKategori) }}"
                    class="category-card"
                >
                    <span class="category-number">
                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </span>

                    <div>
                        <h2>{{ $namaKategori }}</h2>

                        <div class="category-bottom">
                            <span>
                                {{ collect($buku)->where('kategori', $namaKategori)->count() }}
                                buku
                            </span>

                            <span class="category-arrow">&rarr;</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    @else
        <div class="category-empty">
            Belum ada kategori buku yang tersedia.
        </div>
    @endif
</section>

@endsection