<!DOCTYPE html>
<html lang="en">
<head>

<title>Cari Kereta</title>
@include('layout.head-css')

</head>

<body>

<div class="super_container">
    
    <!-- Header -->

    @include('header')

    <!-- Home -->

	<div class="home_pencarian">
        <div class="pencarian_title">
	        <ul>
		        <li class="pencarian_meta_item">Bandung, Bandung</li>
                <li class="pencarian_meta_item">Gambir, Jakarta</li>
                <li class="ubah_pencarian_meta_item"><a href="beranda">Ubah Pencarian</a></li>
	        </ul>
        </div>
        <div class="pencarian_meta">
		    <ul>
		        <li class="pencarian_meta_item">13 Agustus 2019</li>
		        <li class="pencarian_meta_item">1 Dewasa</li>
		    </ul>
        </div>
    </div>
    
<!-- table -->

<div id="content-wrapper">

<div class="container-fluid">

  <!-- DataTables Example -->
  <div class="card mb-3">
	<div class="card-header">Kami telah menampilkan semua jadwal kereta dari rute <b>{{$asal}}</b> menuju ke <b>{{$tujuan}}</b></div>
	<div class="card-header">Filter</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		  <thead>
			<tr>
			<th>No. Kereta</th>
			  <th>Nama Kereta</th>
			  <th>Tanggal Berangkat</th>
			  <th>Tanggal Tiba</th>
			  <th>Durasi Perjalanan</th>
			  <th>Kelas Kursi</th>
			  <th>Kursi Tersedia</th>
			  <th>Harga Dewasa</th>
			  <th>Harga Anka2</th>
			</tr>
		  </thead>
		  <tbody>
		  		@foreach($kereta['data'] as $jadwal)
		  	  	<tr>
					<td>{{$jadwal['trainNumber']}}</td>
					<td>{{$jadwal['trainName']}}</td>
					<td>{{$jadwal['departureDate']}} - (Jam: {{$jadwal['departureTime']}})</td>
					<td>{{$jadwal['arrivalDate']}} - (Jam: {{$jadwal['arrivalTime']}})</td>
					<td>{{$jadwal['duration']}}</td>
					@foreach($jadwal['seats'] as $seats)
					<td>{{$seats['class']}} - (Grade: {{$seats['grade']}})</td>
					<td>{{$seats['availability']}}</td>
					<td>{{$seats['priceAdult']}}</td>
					<td>{{$seats['priceChild']}}</td>
					@endforeach
				</tr>
				@endforeach
		  </tbody>
		  <tfoot>
			<tr>
			<th>No. Kereta</th>
			  <th>Nama Kereta</th>
			  <th>Tanggal Berangkat</th>
			  <th>Tanggal Tiba</th>
			  <th>Durasi Perjalanan</th>
			  <th>class</th>
			  <th>Kursi Tersedia</th>
			  <th>Harga Dewasa</th>
			  <th>Harga Anka2</th>
			</tr>
		  </tfoot>
		</table>
	  </div>
	</div>
	<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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