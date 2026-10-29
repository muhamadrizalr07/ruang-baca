@extends('layouts.app')

@section('title', 'Tentang Kami — Ruang Baca')

@section('content')

<style>
    .about-page {
        max-width: 1200px;
        margin: auto;
        padding: 75px 8% 90px;
    }

    .about-label {
        color: #8A8B70;
        font-size: 12px;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 18px;
    }

    .about-hero {
        max-width: 850px;
        margin-bottom: 65px;
    }

    .about-hero h1 {
        font-family: Georgia, serif;
        font-size: clamp(40px, 6vw, 65px);
        line-height: 1.15;
        font-weight: normal;
        letter-spacing: -2px;
        margin-bottom: 25px;
    }

    .about-hero h1 span {
        color: #8A8B70;
        font-style: italic;
    }

    .about-hero p {
        color: #827A6D;
        font-size: 16px;
        line-height: 1.9;
        max-width: 650px;
    }

    .about-divider {
        border: none;
        border-top: 1px solid #E8E3D9;
        margin-bottom: 45px;
    }

    .about-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 65px;
        align-items: start;
    }

    .about-content h2 {
        font-family: Georgia, serif;
        font-size: 30px;
        font-weight: normal;
        margin-bottom: 18px;
    }

    .about-content p {
        color: #827A6D;
        font-size: 15px;
        line-height: 1.9;
        margin-bottom: 15px;
    }

    .about-note {
        padding: 30px;
        background: #EAE4D8;
    }

    .about-note span {
        display: block;
        color: #8A8B70;
        font-size: 12px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        margin-bottom: 15px;
    }

    .about-note p {
        color: #514536;
        font-family: Georgia, serif;
        font-size: 25px;
        line-height: 1.5;
    }

    .about-button {
        display: inline-block;
        margin-top: 15px;
        padding: 12px 20px;
        background: #514536;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        font-size: 13px;
        transition: background 0.2s;
    }

    .about-button:hover {
        background: #6B5B46;
    }

    @media (max-width: 700px) {
        .about-page {
            padding: 50px 5% 65px;
        }

        .about-hero {
            margin-bottom: 45px;
        }

        .about-hero h1 {
            font-size: 43px;
        }

        .about-hero p {
            font-size: 14px;
        }

        .about-content {
            grid-template-columns: 1fr;
            gap: 35px;
        }

        .about-content h2 {
            font-size: 27px;
        }

        .about-note {
            padding: 24px;
        }

        .about-note p {
            font-size: 22px;
        }
    }
</style>

<section class="about-page">
    <header class="about-hero">
        <div class="about-label">Tentang Ruang Baca</div>

        <h1>
            Sebuah ruang untuk menemukan
            <span>cerita.</span>
        </h1>

        <p>
            Ruang Baca adalah katalog buku sederhana yang membantu
            pembaca menjelajahi berbagai bacaan berdasarkan judul,
            penulis, dan kategori.
        </p>
    </header>

    <hr class="about-divider">

    <div class="about-content">
        <div>
            <h2>Mengapa Ruang Baca?</h2>

            <p>
                Setiap buku membawa ide, pengalaman, dan sudut pandang
                yang berbeda. Kami ingin membuat proses menemukan
                bacaan terasa lebih mudah dan menyenangkan.
            </p>

            <p>
                Melalui katalog ini, kamu dapat melihat koleksi buku,
                mengenal informasi setiap buku, dan memilih kategori
                sesuai minat membaca.
            </p>

            <a href="/buku" class="about-button">
                Lihat koleksi buku &rarr;
            </a>
        </div>

        <div class="about-note">
            <span>Prinsip kami</span>

            <p>
                “Membaca bukan sekadar membuka halaman,
                tetapi membuka kemungkinan baru.”
            </p>
        </div>
    </div>
</section>

@endsection