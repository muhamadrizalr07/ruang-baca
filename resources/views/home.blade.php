@extends('layouts.app')

@section('title', 'Beranda — Ruang Baca')

@section('content')

<style>
    .hero {
        padding: 90px 8% 80px;
        display: grid;
        grid-template-columns: 1.2fr 0.8fr;
        align-items: center;
        gap: 60px;
        max-width: 1440px;
        margin: auto;
    }

    .hero-label {
        display: inline-block;
        color: #827A6D;
        font-size: 12px;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 22px;
    }

    .hero h1 {
        font-family: Georgia, serif;
        font-size: clamp(42px, 5vw, 68px);
        line-height: 1.12;
        font-weight: normal;
        letter-spacing: -2px;
        max-width: 600px;
        margin-bottom: 22px;
    }

    .hero h1 span {
        color: #8A8B70;
        font-style: italic;
    }

    .hero p {
        color: #827A6D;
        font-size: 16px;
        max-width: 430px;
        margin-bottom: 30px;
        line-height: 1.8;
    }

    .hero-button {
        display: inline-block;
        padding: 13px 22px;
        background: #514536;
        color: white;
        text-decoration: none;
        font-size: 14px;
        border-radius: 4px;
        transition: background 0.2s;
    }

    .hero-button:hover {
        background: #6B5B46;
    }

    .hero-visual {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 330px;
        background: #EAE4D8;
        border-radius: 3px;
        padding: 35px;
    }

    .book-stack {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        transform: rotate(-3deg);
    }

    .book-stack img {
        width: 130px;
        height: 195px;
        object-fit: cover;
        box-shadow: 5px 8px 15px rgba(0, 0, 0, 0.12);
    }

    .book-stack img:nth-child(2) {
        transform: translateY(-22px) rotate(5deg);
    }

    .section {
        padding: 65px 8%;
        background: #FFFFFF;
    }

    .section-heading {
        display: flex;
        justify-content: space-between;
        align-items: end;
        gap: 20px;
        margin-bottom: 30px;
    }

    .section-heading h2 {
        font-family: Georgia, serif;
        font-size: 34px;
        font-weight: normal;
        letter-spacing: -1px;
    }

    .section-heading p {
        color: #827A6D;
        font-size: 14px;
        margin-top: 5px;
    }

    .view-all {
        color: #514536;
        text-decoration: none;
        font-size: 13px;
        white-space: nowrap;
    }

    .view-all:hover {
        text-decoration: underline;
    }

    .book-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 28px;
    }

    .book-card {
        min-width: 0;
    }

    .book-cover {
        width: 100%;
        aspect-ratio: 3 / 4;
        object-fit: cover;
        display: block;
        background: #F0ECE4;
        margin-bottom: 14px;
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
        margin: 4px 0;
    }

    .book-author {
        color: #827A6D;
        font-size: 13px;
    }

    .book-link {
        display: block;
        color: inherit;
        text-decoration: none;
    }

    .book-link:hover .book-title {
        text-decoration: underline;
    }

    .quote-section {
        padding: 65px 8%;
        text-align: center;
    }

    .quote-section p {
        font-family: Georgia, serif;
        font-size: clamp(24px, 3vw, 36px);
        font-style: italic;
        max-width: 700px;
        margin: auto;
        line-height: 1.5;
    }

    .quote-section span {
        display: block;
        color: #827A6D;
        font-family: Arial, sans-serif;
        font-size: 12px;
        font-style: normal;
        letter-spacing: 1px;
        margin-top: 18px;
        text-transform: uppercase;
    }

    @media (max-width: 900px) {
        .hero {
            padding: 65px 5%;
            gap: 30px;
        }

        .hero-visual {
            min-height: 260px;
            padding: 20px;
        }

        .book-stack img {
            width: 100px;
            height: 155px;
        }

        .section,
        .quote-section {
            padding: 50px 5%;
        }

        .book-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 30px 20px;
        }
    }

    @media (max-width: 600px) {
        .hero {
            grid-template-columns: 1fr;
            padding: 55px 5%;
            gap: 35px;
        }

        .hero h1 {
            font-size: 46px;
        }

        .hero p {
            font-size: 14px;
        }

        .hero-visual {
            min-height: 250px;
        }

        .section-heading {
            align-items: start;
        }

        .section-heading h2 {
            font-size: 28px;
        }

        .book-grid {
            gap: 26px 14px;
        }

        .book-title {
            font-size: 17px;
        }
    }
</style>

<section class="hero">
    <div>
        <span class="hero-label">Ruang untuk membaca</span>

        <h1>
            Setiap buku punya <span>cerita.</span>
        </h1>

        <p>
            Dari cerita yang menghibur hingga gagasan yang mengubah
            cara pandang. Temukan bacaan yang cocok untukmu.
        </p>

        <a href="/buku" class="hero-button">
            Jelajahi koleksi &rarr;
        </a>
    </div>

    <div class="hero-visual">
        <div class="book-stack">
            <img
                src="https://covers.openlibrary.org/b/isbn/9780735211292-L.jpg"
                alt="Sampul buku Atomic Habits"
            >
            <img
                src="https://m.media-amazon.com/images/S/compressed.photo.goodreads.com/books/1548033656i/42861019.jpg"
                alt="Sampul buku Filosofi Teras"
            >
            <img
                src="https://covers.openlibrary.org/b/isbn/9786024246945-L.jpg"
                alt="Sampul buku Laut Bercerita"
            >
        </div>
    </div>
</section>

<section class="section">
    <div class="section-heading">
        <div>
            <h2>Pilihan bacaan</h2>
            <p>Beberapa buku untuk memulai perjalananmu.</p>
        </div>

        <a href="/buku" class="view-all">
            Lihat semua &rarr;
        </a>
    </div>

    <div class="book-grid">
    @foreach (array_slice($buku, 0, 4) as $item)
        <article class="book-card">
            <a href="/buku/{{ $item['id'] }}" class="book-link">
                <img
                    src="{{ $item['cover'] }}"
                    alt="Sampul {{ $item['judul'] }}"
                    class="book-cover"
                    loading="lazy"
                >

                <span class="book-category">
                    {{ $item['kategori'] }}
                </span>

                <h3 class="book-title">
                    {{ $item['judul'] }}
                </h3>

                <p class="book-author">
                    {{ $item['penulis'] }}
                </p>
            </a>
        </article>
    @endforeach
</div>

<section class="quote-section">
    <p>
        “Membaca adalah perjalanan, tanpa harus meninggalkan tempat.”
    </p>
    <span>Ruang Baca</span>
</section>

@endsection