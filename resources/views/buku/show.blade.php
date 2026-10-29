@extends('layouts.app')

@section('title', $item['judul'] . ' — Ruang Baca')

@section('content')

<style>
    .detail-page {
        max-width: 1200px;
        margin: auto;
        padding: 60px 8% 80px;
    }

    .breadcrumb {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #827A6D;
        font-size: 13px;
        margin-bottom: 40px;
    }

    .breadcrumb a {
        color: #827A6D;
        text-decoration: none;
    }

    .breadcrumb a:hover {
        color: #514536;
    }

    .detail-layout {
        display: grid;
        grid-template-columns: 320px minmax(0, 1fr);
        gap: 65px;
        align-items: start;
    }

    .cover-wrapper {
        padding: 25px;
        background: #EAE4D8;
        text-align: center;
    }

    .detail-cover {
        display: block;
        width: 100%;
        max-width: 270px;
        aspect-ratio: 3 / 4;
        object-fit: cover;
        margin: auto;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    }

    .detail-info {
        padding-top: 10px;
    }

    .detail-category {
        display: inline-block;
        color: #8A8B70;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 18px;
    }

    .detail-info h1 {
        font-family: Georgia, serif;
        font-weight: normal;
        font-size: clamp(36px, 5vw, 54px);
        line-height: 1.15;
        letter-spacing: -1.5px;
        margin-bottom: 12px;
    }

    .detail-author {
        color: #827A6D;
        font-size: 16px;
        margin-bottom: 30px;
    }

    .detail-divider {
        border: none;
        border-top: 1px solid #E2DCCF;
        margin-bottom: 28px;
    }

    .detail-label {
        color: #827A6D;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
    }

    .detail-description {
        color: #625849;
        font-size: 15px;
        line-height: 1.9;
        margin-bottom: 30px;
        max-width: 600px;
    }

    .detail-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 35px;
        margin-bottom: 35px;
    }

    .meta-value {
        font-family: Georgia, serif;
        font-size: 20px;
    }

    .back-button {
        display: inline-block;
        padding: 12px 20px;
        background: #514536;
        color: white;
        text-decoration: none;
        font-size: 13px;
        border-radius: 4px;
        transition: background 0.2s;
    }

    .back-button:hover {
        background: #6B5B46;
    }

    @media (max-width: 700px) {
        .detail-page {
            padding: 35px 5% 55px;
        }

        .breadcrumb {
            margin-bottom: 28px;
        }

        .detail-layout {
            grid-template-columns: 1fr;
            gap: 35px;
        }

        .cover-wrapper {
            max-width: 340px;
            width: 100%;
            margin: auto;
        }

        .detail-cover {
            max-width: 230px;
        }

        .detail-info {
            padding-top: 0;
        }

        .detail-info h1 {
            font-size: 38px;
        }
    }
</style>

<section class="detail-page">
    <div class="breadcrumb">
        <a href="/">Beranda</a>
        <span>/</span>
        <a href="/buku">Koleksi Buku</a>
        <span>/</span>
        <span>{{ $item['judul'] }}</span>
    </div>

    <div class="detail-layout">
        <div class="cover-wrapper">
            <img
                src="{{ $item['cover'] }}"
                alt="Sampul {{ $item['judul'] }}"
                class="detail-cover"
            >
        </div>

        <div class="detail-info">
            <span class="detail-category">
                {{ $item['kategori'] }}
            </span>

            <h1>{{ $item['judul'] }}</h1>

            <p class="detail-author">
                Oleh {{ $item['penulis'] }}
            </p>

            <hr class="detail-divider">

            <div class="detail-label">Tentang buku ini</div>

            <p class="detail-description">
                {{ $item['deskripsi'] }}
            </p>

            <div class="detail-meta">
                <div>
                    <div class="detail-label">Tahun terbit</div>
                    <div class="meta-value">{{ $item['tahun'] }}</div>
                </div>

                <div>
                    <div class="detail-label">Kategori</div>
                    <div class="meta-value">{{ $item['kategori'] }}</div>
                </div>
            </div>

            <a href="/buku" class="back-button">
                &larr; Kembali ke koleksi
            </a>
        </div>
    </div>
</section>

@endsection