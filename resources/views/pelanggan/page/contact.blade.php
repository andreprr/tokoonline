@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-4 align-items-center">
        <div class="col-md-6">
            <div class="content-text">
                Razerfear adalah sebuah perusahaan e-commerce yang berfokus pada menyediakan berbagai perlengkapan Baju kepada pelanggan di seluruh dunia. Didirikan pada tahun 2024, Razerfear telah tumbuh menjadi salah satu destinasi utama bagi para penggemar Baju.
                Perusahaan ini menawarkan berbagai produk berkualitas tinggi, Selain itu, Razerfear juga menyediakan produk-produk terkait seperti merchandise resmi dari merek-merek terkemuka dalam industri Baju.
                Dengan platform e-commerce yang responsif dan ramah pengguna, pelanggan dapat dengan mudah menelusuri katalog produk Razerfear, melakukan pembelian dengan aman, dan menikmati pengalaman belanja yang menyenangkan. Metode pembayaran yang beragam dan layanan pengiriman yang cepat dan andal juga menjadi salah satu keunggulan dari Razerfear dalam melayani pelanggan.
                Selain fokus pada produk dan layanan, Razerfear juga memprioritaskan kepuasan pelanggan. 
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/images/profil.png') }}" style="width:100%" alt="">
        </div>
    </div>

    <div class="d-flex justify-content-lg-between mt-5">
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-users fa-2x"></i>
            <p class="m-0 fs-5">+ 300 Pelanggan</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fas fa-home fa-2x"> </i>
            <p class="m-0 fs-5"> +500 Seller</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fas fa-shirt fa-2x"></i>
            <p class="m-0 fs-5">+ 300 Product</p>
        </div>
    </div>

    <h4 class="text-center mt-md-5 mb-md-2">Contact Us</h4>
    <hr class="mb-5">
    <div class="row  mb-md-5">
        <div class="col-md-5">
            <div class="bg-secondary" style="width: 100%; height:50vh; border-radius:10px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63364.11327102968!2d107.72995527327977!3d-6.978963263489808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c477ab78ea63%3A0x401e8f1fc28c700!2sRancaekek%2C%20Bandung%20Regency%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1711270678956!5m2!1sen!2sid" width="540" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Kritik dan saran</h4>
                </div>
                <div class="card-body">
                    <p class="p-0 mb-5 text-lg-center">Masukan kritik dan saran anda kepada aplikasi kami ini agar kami dapat memberikan
                        apa yang menjadi kebutuhan anda dan kami dapat berkembang lebih baik lagi.
                    </p>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" value=""
                                placeholder="Masukan email Anda">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pesan" placeholder="Masukan Pesan Anda">
                        </div>
                    </div>
                    <button class="btn btn-primary mt-4 w-100"> Kirim pesan anda</button>
                </div>
            </div>
        </div>
    </div>
@endsection
