<!-- Home Section Start -->
<section class="home active section" id="home">
    <div class="container">
        <div class="row">
            <div class="home-info padd-15">
                <h3 class="hello">
                    Hello, my name is <span class="name">{{ $about ? $about->full_name : 'Zikru Khairil Ahmady' }}</span>
                </h3>
                <h3 class="my-profession">
                    I'm a <span class="typing">{{ $about ? $about->designation : 'UI / UX' }}</span>
                </h3>
                <p>
                    {!! $about
                        ? $about->short_description
                        : 'Ubah apa yang kau bisa ubah sekarang jangan tunggu hari esok, hari ini adalah hari emasmu' !!}
                </p>
                @if ($about)
                    <a href="{{ asset('storage/cv_file/') }}/{{ $about->cv_file }}" class="btn" download>Download
                        CV</a>
                @else
                    <a href="{{ asset('public-assets/cv_file.pdf') }}" class="btn" download>Download
                        CV</a>
                @endif
            </div>
            <div class="home-img padd-15">
                @if ($about)
                    <img src="{{ asset('storage/about_image/') }}/{{ $about->image }}" alt="" />
                @else
                    <img src="{{ asset('public-assets/images/') }}" alt="" />
                @endif
            </div>
        </div>

        {{-- Alert Box --}}
        <div class="row padd-15">
            {{-- Success Message --}}
            @if (session('msg'))
                <div class="alert-box">
                    <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        <strong>Holy guacamole!</strong> {{ session('msg') }}
                    </div>
                </div>
            @endif
            {{-- Error Message --}}
            @if ($errors->any())
                <div class="alert-box">
                    <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        <strong>Holy guacamole!</strong> Message failed to send.
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
<!-- Home Section End -->
