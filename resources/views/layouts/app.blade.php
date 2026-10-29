<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ruang Baca')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --cream: #F8F6F0;
            --white: #FFFFFF;
            --brown: #514536;
            --muted: #827A6D;
            --border: #E8E3D9;

            /* Lebar isi 1200px + padding kiri/kanan 24px.
               Samakan nilai ini dengan container di halaman konten. */
            --container: 1248px;
        }

        body {
            background: var(--cream);
            color: var(--brown);
            font-family: Arial, sans-serif;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Wrapper yang dipakai bersama: navbar, konten, footer */
        .container {
            width: 100%;
            max-width: var(--container);
            margin: 0 auto;
            padding-left: 24px;
            padding-right: 24px;
        }

        /* Navbar */
        nav {
            position: sticky;
            top: 0;
            z-index: 100;
            width: 100%;
            background: rgba(248, 246, 240, 0.97);
            border-bottom: 1px solid var(--border);
        }

        .nav-inner {
            display: grid;
            grid-template-columns: 1fr auto 1fr; /* menu tepat di tengah */
            align-items: center;
            gap: 24px;
            padding-top: 18px;
            padding-bottom: 18px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: #51402F;
            font-family: Georgia, serif;
            font-size: 24px;
            font-weight: bold;
            justify-self: start;
        }

        .logo-img {
            width: 50px;
            height: 50px;
            object-fit: contain;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav-links a {
            color: var(--muted);
            text-decoration: none;
            font-size: 14px;
            transition: color 0.2s ease;
        }

        .nav-links a:hover {
            color: var(--brown);
        }

        .nav-cta {
            justify-self: end;
            padding: 10px 17px;
            background: var(--brown);
            color: var(--white);
            border-radius: 5px;
            text-decoration: none;
            font-size: 13px;
            white-space: nowrap;
            transition: background 0.2s ease;
        }

        .nav-cta:hover {
            background: #6B5B46;
        }

        /* Konten */
        main {
            flex: 1;
            width: 100%;
        }

        /* Footer */
        footer {
            border-top: 1px solid var(--border);
            color: var(--muted);
            font-size: 12px;
            text-align: center;
        }

        footer .container {
            padding-top: 22px;
            padding-bottom: 22px;
        }

        /* Responsif */
        @media (max-width: 850px) {
            .container {
                padding-left: 5%;
                padding-right: 5%;
            }

            .nav-inner {
                gap: 16px;
                padding-top: 16px;
                padding-bottom: 16px;
            }

            .logo {
                font-size: 22px;
            }

            .nav-links {
                gap: 16px;
            }

            .nav-links a {
                font-size: 13px;
            }

            .nav-cta {
                padding: 9px 12px;
                font-size: 12px;
            }
        }

        @media (max-width: 600px) {
            .nav-inner {
                grid-template-columns: 1fr auto;
                gap: 14px;
            }

            .nav-links {
                grid-column: 1 / -1;
                grid-row: 2;
                justify-content: space-between;
                gap: 8px;
                padding-top: 10px;
                border-top: 1px solid var(--border);
            }

            .nav-links a {
                font-size: 12px;
            }

            footer .container {
                padding-top: 20px;
                padding-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="container nav-inner">
            <a href="/" class="logo">
                <img
                    src="{{ asset('images/logo-ruang-baca.png') }}"
                    alt="Logo Ruang Baca"
                    class="logo-img"
                >
                <span>ruang baca.</span>
            </a>

            <div class="nav-links">
                <a href="/">Beranda</a>
                <a href="/buku">Koleksi Buku</a>
                <a href="/kategori">Kategori</a>
                <a href="/tentang">Tentang</a>
            </div>

            <a href="/buku" class="nav-cta">
                Jelajahi Buku &rarr;
            </a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            &copy; {{ date('Y') }} Ruang Baca. Dibuat untuk para pencinta buku.
        </div>
    </footer>
</body>
</html>