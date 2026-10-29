<?php

namespace App\Http\Controllers;

class BukuController extends Controller
{
    private $buku = [
        [
            'id' => 1,
            'judul' => 'Atomic Habits',
            'penulis' => 'James Clear',
            'kategori' => 'Pengembangan Diri',
            'tahun' => 2018,
            'deskripsi' => 'Buku tentang membangun kebiasaan baik melalui perubahan kecil yang konsisten.',
            'cover' => 'https://image.gramedia.net/rs:fit:0:0/f:webp/plain/https://cdn.gramedia.com/uploads/items/9786020633176_.Atomic_Habit.jpg',
        ],
        [
            'id' => 2,
            'judul' => 'Filosofi Teras',
            'penulis' => 'Henry Manampiring',
            'kategori' => 'Filsafat',
            'tahun' => 2018,
            'deskripsi' => 'Pengantar filsafat Stoisisme untuk menghadapi kehidupan sehari-hari.',
            'cover' => 'https://m.media-amazon.com/images/S/compressed.photo.goodreads.com/books/1548033656i/42861019.jpg',

        ],
        [
            'id' => 3,
            'judul' => 'Laut Bercerita',
            'penulis' => 'Leila S. Chudori',
            'kategori' => 'Fiksi',
            'tahun' => 2017,
            'deskripsi' => 'Novel tentang persahabatan, keluarga, dan perjuangan menghadapi kehilangan.',
            'cover' => 'https://image.gramedia.net/rs:fit:0:0/f:webp/plain/https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.png',
        ],
        [
            'id' => 4,
            'judul' => 'Bumi Manusia',
            'penulis' => 'Pramoedya Ananta Toer',
            'kategori' => 'Sastra',
            'tahun' => 1980,
            'deskripsi' => 'Kisah Minke dalam menghadapi ketidakadilan pada masa kolonial.',
            'cover' => 'https://image.gramedia.net/rs:fit:0:0/f:webp/plain/https://cdn.gramedia.com/uploads/product-metas/zmr2-dac-e.jpg',
        ],
        [
            'id' => 5,
            'judul' => 'Laskar Pelangi',
            'penulis' => 'Andrea Hirata',
            'kategori' => 'Fiksi',
            'tahun' => 2005,
            'deskripsi' => 'Kisah perjuangan anak-anak Belitung dalam mengejar pendidikan.',
            'cover' => 'https://m.media-amazon.com/images/S/compressed.photo.goodreads.com/books/1489732961i/1362193.jpg',
        ],
        [
            'id' => 6,
            'judul' => 'Clean Code',
            'penulis' => 'Robert C. Martin',
            'kategori' => 'Teknologi',
            'tahun' => 2008,
            'deskripsi' => 'Prinsip dan praktik menulis kode program yang bersih dan mudah dirawat.',
            'cover' => 'https://m.media-amazon.com/images/I/71t7she7s2L._AC_UF894,1000_QL80_.jpg',
        ],

        
        [
            'id' => 7,
            'judul' => 'Danur',
            'penulis' => 'Risa Saraswati',
            'kategori' => 'Horor',
            'tahun' => 2011,
            'deskripsi' => 'Kisah horor yang terinspirasi dari pengalaman Risa Saraswati.',
            'cover' => 'https://bukukita.com/babacms/displaybuku/83146_f.jpg',
        ],
        [
            'id' => 8,
            'judul' => 'KKN di Desa Penari',
            'penulis' => 'SimpleMan',
            'kategori' => 'Horor',
            'tahun' => 2019,
            'deskripsi' => 'Kisah misteri yang mengikuti pengalaman sekelompok mahasiswa saat menjalani KKN.',
            'cover' => 'https://www.gramedia.com/blog/content/images/2019/10/cover---kkn-di-desa-penari-oke.jpg',
        ],
        [
            'id' => 9,
            'judul' => 'The Shining',
            'penulis' => 'Stephen King',
            'kategori' => 'Horor',
            'tahun' => 1977,
            'deskripsi' => 'Novel horor psikologis tentang keluarga yang tinggal di sebuah hotel terpencil.',
            'cover' => 'https://image.gramedia.net/rs:fit:0:0/f:webp/plain/https://cdn.gramedia.com/uploads/product-metas/g9t217iec8.jpg',
        ],

    ];

    public function getBuku()
    {
    return $this->buku;
    }
    
    public function index()
    {
        $buku = $this->buku;

        if (request()->filled('kategori')) {
            $buku = array_filter($buku, function ($item) {
                return $item['kategori'] === request('kategori');
            });
        }

        return view('buku.index', compact('buku'));
    }


        public function show($id)
    {
        $item = collect($this->buku)->firstWhere('id', (int) $id);

        if (!$item) {
            abort(404);
        }

        return view('buku.show', compact('item'));
    }

    
        public function kategori()
    {
        $kategori = collect($this->buku)
            ->pluck('kategori')
            ->unique()
            ->values();

        $buku = $this->buku;

        return view('kategori', compact('kategori', 'buku'));
    }

}


