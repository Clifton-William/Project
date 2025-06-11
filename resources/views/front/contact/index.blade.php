@extends('front.layout.kontak')

@push('meta-seo')
    <meta name="description" value="Contact The Fastest and Latest Blog about entertaintment and historical world">
    <meta name="keyword" value="contact bacayuk!, baca yuk, kontak bacayuk">
    <meta property="og:title" content="BacaYuk - Contact" />
    <meta property="og:url" value="{{ url()->current() }}">
    <meta property="og:site_name" content="BacaYuk" />
    <meta property="og:description" value="Contact The Fastest and Latest Blog about entertaintment and historical world">
    <meta property="og:image" value="http://127.0.0.1:8000/front/img/logo.jpg">
@endpush

@section('title', 'CUNY - Contact')

@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8" data-aos="fade-right">
                <!-- Featured blog post-->
                <div class="card mb-4 shadow-sm">
                    <div class="text-center"
                        style="border: 5px solid border-radius: 10px; padding: 10px; display: inline-block;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.9873939745216!2d109.80186867499957!3d-7.242272592764099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7008d54a860ef1%3A0x7158ecba9d2e849f!2sSMK%20Negeri%201%20Pejawaran!5e0!3m2!1sen!2sid!4v1748183572907!5m2!1sen!2sid"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="card-body">
                        <div class="small text-muted" style="margin-top: 15px;">{{ date('d/m/Y') }}</div>
                        <h2 class="card-title"
                            style="font-family: 'Righteous', sans-serif; font-weight: 450; font-size: 35px;">
                            KONTAK BLOG KAMI
                        </h2>
                        <p class="card-text">
                        <p><span style="color: #FE8502;"><strong>Terima kasih telah meluangkan waktu untuk membaca blog
                                    kami.</strong></span> Kami sangat menghargai setiap kunjungan dan perhatian Anda
                            terhadap
                            cerita, informasi, dan inspirasi yang kami bagikan. Setiap tulisan kami hadir dari semangat
                            untuk berbagi, dan kami senang Anda menjadi bagian dari perjalanan ini. Semoga apa yang kami
                            sajikan bisa menambah wawasan, memberi senyum, atau bahkan menginspirasi langkah baru Anda.</p>

                        Jika ada saran, pertanyaan, atau hanya sekadar ingin menyapa
                         silahkan hubungi kami melalui media sosial <span style="color: #FE8502;"><strong>Gmail</strong></span> yang bisa Anda
                                hubungi di bawah ini.
                        Beberapa sudah kami selipkan di header dan footer.
                        </p>
                        {{-- <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap; margin-top: 20px;">
                            <a href="https://wa.me/" class="btn btn-mulai-bacu squishy-bacu"
                                style="margin-right: 20px;" role="button" target="_blank">
                                WhatsApp
                            </a>
                            <a href="https://facebook.com/" class="btn btn-mulai-baca squishy-baca"
                                style="margin-right: 20px;" role="button" target="_blank">
                                Facebook
                            </a>
                            <a href="https://youtube.com/" class="btn btn-mulai-baci squishy-baci" role="button"
                                target="_blank">
                                YouTube
                            </a>
                        </div> --}}

                        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap; margin-top: 20px; margin-bottom: 25px;">
                            {{-- <a href="https://instagram.com/" class="btn btn-mulai-bace squishy-bace" role="button"
                                target="_blank">
                                Instagram
                            </a> --}}
                            <a href="https://mail.google.com/" class="btn btn-mulai-baco squishy-baco" role="button"
                                target="_blank">
                                Gmail
                            </a>
                        </div>

                    </div>
                </div>

            </div>
            <!-- Side widgets-->
            @include('front.layout.side-widget')
        </div>
    </div>
@endsection
