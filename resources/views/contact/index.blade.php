@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">
                <h1 style="font-size: 32px; font-style: normal; font-weight: 700; padding-top: 30px">
                    Ingin Menghubungi? Kami Mendengarkan.
                </h1>
                <p style="color: var(--grey-500, #667085); text-align: center; font-size: 16px; font-style: normal; font-weight: 400; line-height: normal; margin-top: 30px">Kami sangat terbuka untuk menerima ide-ide, komentar dan <br>berbagai masukan dari anda. Hubungi kami jika anda memiliki <br> saran dan mengalami kendala.</p>

                <div class="container-contact">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nama" placeholder="Nama Anda">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <input type="email" class="form-control" id="email" placeholder="Alamat Email">
                                    <span class="error-message" id="email-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <div class="custom-select">
                                        <select class="form-control" id="dropdown">
                                            <option value="" disabled selected>Pertanyaan Seputar</option>
                                            <option value="opsi1">Menggunakan Aplikasi</option>
                                            <option value="opsi2">Penyelesaian Masalah</option>
                                            <option value="opsi3">Pencadangan Data</option>
                                            <option value="opsi4">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <textarea class="form-control" id="pesan" rows="8" placeholder="Pertanyaan Anda..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn-kirim">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const emailInput = document.getElementById('email');
        const emailError = document.getElementById('email-error');

        emailInput.addEventListener('input', function () {
            if (!isValidEmail(emailInput.value)) {
                emailError.textContent = 'Gunakan alamat email yang benar.';
                emailInput.classList.add('input-error'); 
            } else {
                emailError.textContent = '';
                emailInput.classList.remove('input-error'); 
            }
        });

        function isValidEmail(email) {
            // Fungsi untuk memvalidasi format email, Anda bisa menggantinya sesuai kebutuhan
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
</script>
@endsection