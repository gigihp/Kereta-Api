<!DOCTYPE html>
<html lang="en">
<head>

<title>Pesan Sekarang</title>
@include('layout.head-css')

</head>

<body>

<div class="super_container">
    
    <!-- Header -->

    @include('header')

<!-- Home -->

<div class="container">
	<div class="home_pesan">
        <div class="pesan_title">
	        <ul>
		        <li class="pencarian_meta_item">Perjalanan Pergi</li>
                <li class="pencarian_meta_item">Argo Parahyangan</li>
                <li class="pencarian_meta_item">13 Agustus 2020</li>
	        </ul>
        </div>
    </div>
</div>
<div class="container">
	<div class="home_bayar">
        <div class="container">
            <div class="row">
                <div class="home_informasi col-lg-7">
                    <div class="pesan_meta_item">informasi kontak yang dapat dihubungi</div>
                </div>
                <div class="home_informasi col-lg-4">
                    <div class="pesan_meta">
                        <ul>
                            <li class="pesan_meta_item">GAMBIR</li>
                            <li class="pesan_meta_item">></li>
                            <li class="pesan_meta_item">BANDUNG</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    

<!-- About -->
	<div class="cta">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					
					<!-- About - Image -->

					<div class="about_image">
						<img src="{{url('tiketkai/images/download.png')}}" alt="">
					</div>

				</div>

				<div class="col-lg-5">
					
                <div class="col-lg- footer_column">
                    <div class="footer_col">
                        <div class="footer_title" style="font-size: 19px;">kemudahan pesanan dalam genggaman !</div>
                        <div class="footer_content footer_contact">
                            <ul class="contact_info_list">
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="{{url('tiketkai/images/success.svg')}}" alt=""></div></div>
                                    <div style="color: white; font-size: 16px;">Pemesanan tiket kereta api lebih Mudah</div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="{{url('tiketkai/images/success.svg')}}" alt=""></div></div>
                                    <div style="color: white; font-size: 16px;">Layanan reservasi H-90</div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="{{url('tiketkai/images/success.svg')}}" alt=""></div></div>
                                    <div style="color: white; font-size: 16px;">Reservasi kapan saja dengan harga terbaik</div>
                                </li>
                            </ul>
                            <div class="">
                                <button class="button_download"><a href="#">DOWNLOAD APLIKASI <i class="fa fa-arrow-right"></i></a></button>
                            </div>
                        </div>
                    </div>
                </div>

				</div>
			</div>
		</div>
	</div>
    
    <!-- Footer -->

    @include('footer')

</div>

@include('layout.js')

</body>

</html>