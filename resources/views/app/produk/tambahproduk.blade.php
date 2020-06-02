@extends('layout.default')
@section('title','Tambah Produk')

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
					<form action="/action_page.php" class="p-3">
				    	<div class="container">
			            	<div class="form-group">
						      	<label class="harga" for="namaproduk">Nama Produk</label>
						      	<input type="text" class="form-control" id="namaproduk" name="namaproduk">
						    </div>

						    <div class="form-group">
						      	<label class="harga" for="gambar">Gambar Produk</label><br>
			            		<input type="file" class="form-control-file" id="gambar1" name="gambar1">
			            		<input type="file" class="form-control-file" id="gambar2" name="gambar2">
			            		<input type="file" class="form-control-file" id="gambar3" name="gambar3">
						    </div>
			            	
			            	<div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="benih" name="benih">
						      	<label class="custom-control-label harga" for="benih">Biji(Benih)</label>
						    </div>
						    <div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="gantung" name="gantung">
						      	<label class="custom-control-label harga" for="gantung">Tanaman hias gantung</label>
						    </div>
						    <div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="buah" name="buah">
						      	<label class="custom-control-label harga" for="buah">Tanaman hias buah</label>
						    </div>
						    <div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="bunga" name="bunga">
						      	<label class="custom-control-label harga" for="bunga">Tanaman hias bunga</label>
						    </div>
						    <div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="pupuk" name="pupuk">
						      	<label class="custom-control-label harga" for="pupuk">Pupuk</label>
						    </div>
						    <div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="air" name="air">
						      	<label class="custom-control-label harga" for="air">Tanaman hias air</label>
						    </div>
						    <div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="mediatanam" name="mediatanam">
						      	<label class="custom-control-label harga" for="mediatanam">Media Tanam</label>
						    </div>
						    <div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="hama" name="hama">
						      	<label class="custom-control-label harga" for="hama">Pembasmi hama</label>
						    </div>
						    <div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="perkakas" name="perkakas">
						      	<label class="custom-control-label harga" for="perkakas">Perkakas Kebun</label>
						    </div>
			            	<div class="form-group mt-2">
						      	<label class="harga" for="harga">Harga Produk</label>
						      	<input type="text" class="form-control" id="harga" name="harga">
						    </div>
				    	</div>
						<div class="col-md-2">
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