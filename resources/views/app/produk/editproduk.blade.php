@extends('layout.default')
@section('title','Edit Produk')

@section('styles')
 
@endsection

@section('content')

<div class="container mb-3">
	<div class="row">
		<div class="col-md-3">
			<div class="card bitbit-card rounded-0 border border-light">
				<div class="nama_toko card-title mt-2 pl-3 pt-3" style="text-align: center;">
					Toko Bunga Kasih
				</div><hr>
				<div class="my-2 pl-3">
					<h5 class="harga">Produk saya</h5>
					<h5 class="nama-cs">Tambah produk baru</h5>
					<h5 class="harga">Pesan</h5>
				</div><hr>
			</div>
		</div>

		<div class="col-md-9">
			<div class="card">
				<div class="card bitbit-card rounded-0 border border-light">
				@foreach($produk as $p)
					<form action="{{url('/produk/update')}}" method="post" class="p-3">
						<div class="col-md-2">
			        		<a href="{{url('/buka_toko')}}"><i style="color:#71b70b;" class="fas fa-arrow-left"></i></a>
			        	</div> 
						<div class="form-group">
							{{ csrf_field() }}
							<input type="hidden" name="id" value="{{ $p->id }}">
						</div>
				    	<div class="container">
			            	<div class="form-group">
						      	<label class="harga" for="namaproduk">Nama Produk</label>
						      	<input type="text" class="form-control" id="namaproduk" required="required" name="nama_produk" value="{{ $p->nama_produk }}">
						    </div>

						    <div class="form-group">
						      	<label class="harga" for="namaproduk">Deskripsi Produk</label>
						      	<input type="text" class="form-control" id="deskripsi_produk" required="required" name="deskripsi_produk"value="{{ $p->deskripsi_produk }}">
						    </div>

						    <div class="form-group">
						      	<label class="harga" for="namaproduk">stok Produk</label>
						      	<input type="text" class="form-control" id="stok_produk" required="required" name="stok_produk" value="{{ $p->stok_produk }}">
						    </div>

						    <div class="form-group">
						      	<label class="harga" for="namaproduk">Bobot Produk</label>
						      	<input type="text" class="form-control" id="bobot_produk" required="required" name="bobot_produk" value="{{ $p->bobot_produk }}">
						    </div>

						    <div class="form-group">
						      	<label class="harga" for="gambar">URL Gambar Produk</label><br>
			            		<input type="text" class="form-control" id="namaproduk" required="required" name="url_foto_produk" value="{{ $p->foto_produk }}">
						    </div>
						    <label class="harga">Kategori</label><br>
			            	
			            	<div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="benih" name="kategori_produk">
						      	<label class="custom-control-label harga" for="benih">Biji(Benih)</label>
						    </div>
						    <div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="gantung" name="kategori_produk">
						      	<label class="custom-control-label harga" for="gantung">Tanaman hias gantung</label>
						    </div>
						    <div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="buah" name="kategori_produk">
						      	<label class="custom-control-label harga" for="buah">Tanaman hias buah</label>
						    </div>
						    <div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="bunga" name="kategori_produk">
						      	<label class="custom-control-label harga" for="bunga">Tanaman hias bunga</label>
						    </div>
						    <div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="pupuk" name="kategori_produk">
						      	<label class="custom-control-label harga" for="pupuk">Pupuk</label>
						    </div>
						    <div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="air" name="kategori_produk">
						      	<label class="custom-control-label harga" for="air">Tanaman hias air</label>
						    </div>
						    <div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="mediatanam" name="kategori_produk">
						      	<label class="custom-control-label harga" for="mediatanam">Media Tanam</label>
						    </div>
						    <div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="hama" name="kategori_produk">
						      	<label class="custom-control-label harga" for="hama">Pembasmi hama</label>
						    </div>
						    <div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="perkakas" name="kategori_produk">
						      	<label class="custom-control-label harga" for="perkakas">Perkakas Kebun</label>
						    </div>
			            	<div class="form-group mt-2">
						      	<label class="harga" for="harga">Harga Produk</label>
						      	<input type="text" class="form-control" id="harga" required="required"  name="harga_produk" value="{{ $p->harga_produk }}">
						    </div>
				    	</div>
			        	<div align="center">
			        		</label class="labell">
			        		<input type="submit" value="Simpan" class="btn btn-beli">
			        	</div>
			        	
			        </div>
		    	</div>
		    </form>
		</div>	
	</div>
</div>
@endsection