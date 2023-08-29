@extends('layouts.app')
@section('title', $title)
@section('content')
    <div class="container-faq">
        <h1 style="font-style: normal; font-weight: 800; padding-top: 40px">Frequently Asked Questions</h1>
        <!-- 1 -->
        <section>
            <div class="faq-container">
                <h2 style="font-size: 28px; font-style: normal; font-weight: 700; color: #068113">Tentang Aplikasi</h2>
                <p><span style="font-size: 20px; font-style: normal; font-weight: 700;">Apa itu
                        Titipsini?</span><br>Titipsini adalah aplikasi penitipan berbasis online yang melayani penitipan
                    barang, bangunan maupun kendaraan. Titipsini hadir untuk anda yang bingung ingin menitipkan barang
                    dimana. Titipsini dapat di akses secara mobile melalui smartphone sehingga sangat fleksibel dan dapat di
                    akses di manapun anda berada.</p>
                <p><span style="font-size: 20px; font-style: normal; font-weight: 700;">Apakah Titipsini tersedia di
                        iOS?</span><br>Ya, aplikasi Titipsini tersedia untuk Android dan iOS. Anda bisa mengunduh aplikasi
                    Titipsini di Google Play Store dan Apple App Store.</p>
                <p><span style="font-size: 20px; font-style: normal; font-weight: 700;">Aplikasi Titipsini berbayar atau
                        gratis?</span><br>Titipsini adalah aplikasi penitipan yang GRATIS karena untuk bisa mengakses semua
                    fitur aplikasi yang tersedia tidak akan dikenakan biaya apa pun.</p>
                <p><span style="font-size: 20px; font-style: normal; font-weight: 700;">Apakah Titipsini bisa digunakan
                        secara offline?</span><br>Mohon maaf, Titipsini adalah aplikasi mobile berbasis online yang harus di
                    akses dalam jaringan. Jadi, selama menggunakan aplikasi Titipsini pastikan smartphone anda terhubung
                    dengan internet yang baik.</p>
                <p><span style="font-size: 20px; font-style: normal; font-weight: 700;">Apakah Titipsini bisa digunakan di PC
                        atau komputer?</span><br>Untuk saat ini aplikasi Titipsini hanya tersedia dalam versi mobile dan
                    belum tersedia untuk PC atau komputer. Namun, kami akan terus berupaya mengembangkan aplikasi Titipsini
                    untuk lebih maksimal dalam membantu anda menjaga barang, bangunan maupun kendaraan supaya lebih terjamin
                    keamanannya.</p>
            </div>
        </section>

        <!-- 2 -->
        <section>
            <div class="faq2-container">
                <h2 style="font-size: 28px; font-style: normal; font-weight: 700; color: #068113">Fitur</h2>
                <p><span style="font-size: 20px; font-style: normal; font-weight: 700;">Bagaimana edit
                        profile?</span><br>Anda bisa mengedit profil anda dan mengedit kartu nama anda. Caranya klik pada
                    menu Profil kemudian klik Ubah Profil untuk mengubah nama akun anda dan memasukkan email (opsional).
                    Apabila ingin mengubah kartu nama, klik pada kartu nama anda dan lengkapi kartu nama, kemudian klik
                    Simpan.</p>
            </div>
        </section>

        <!-- 3 -->
        <section>
            <div class="faq3-container">
                <h2 style="font-size: 28px; font-style: normal; font-weight: 700; color: #068113">Keamanan Data</h2>
                <p><span style="font-size: 20px; font-style: normal; font-weight: 700;">Bagaimana ubah email di
                        Titipsini?</span><br>Kami mohon maaf untuk saat ini anda tidak bisa mengubah email di akun Titipsini
                    anda, tetapi anda bisa mengubah password di kartu bisnis anda.</p>
                <p><span style="font-size: 20px; font-style: normal; font-weight: 700;">Apakah saya bisa mengakses data saya
                        kembali jika HP saya hilang/rusak?</span><br>Ya. Semua data anda akan tersimpan di Cloud Server
                    secara aman. Sehingga anda dapat kembali mengakses akun anda walalupun menggunakan perangkat HP berbeda.
                    Anda hanya perlu login menggunakan akun yang sama.</p>
                <p><span style="font-size: 20px; font-style: normal; font-weight: 700;">Apakah data saya aman?</span><br>Ya.
                    Semua data anda akan tersimpan di Cloud Server secara aman. Sehingga anda dapat kembali mengakses akun
                    anda walalupun menggunakan perangkat HP berbeda. Anda hanya perlu login menggunakan nomor yang sama.</p>
            </div>
        </section>

        <!-- 4 -->
        <p style="font-size: 20px;">Pertanyaan anda tidak ada? <a href="/contact"
                style="color: #000; text-decoration: underline !important; font-weight: 700">Tanyakan disini</a></p>
    </div>
@endsection
