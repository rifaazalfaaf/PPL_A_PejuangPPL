@extends('layout.default')
@section('title','Tambah Jasa')

@section('styles')
 
@endsection

@section('content')

<div class="container mb-3">
	<div class="row">
		<div class="col-md-3">
			<div class="card bitbit-card rounded-0 border border-light">
				<div class="nama_toko card-title mt-2 pl-3 pt-3" style="text-align: center;">
					Sukiman Rivero
				</div><hr>
				<div class="my-2 pl-3">
					<h5 class="nama-cs">Profil Saya</h5>
				</div><hr>
			</div>
		</div>

		<div class="col-md-9">
			<div class="card">
				<div class="card bitbit-card rounded-0 border border-light">
					<form action="{{url('/jasa/store')}}" class="p-3">
						<div class="col-md-2">
			        		<a href="{{url('/')}}"><i style="color:#71b70b;" class="fas fa-arrow-left"></i></a>
			        	</div> 
				    	<div class="container">
			            	<div class="form-group">
						      	<label class="harga" for="namalengkap">Nama Lengkap</label>
						      	<input type="text" class="form-control" id="namalengkap" name="jama_jasa">
						    </div>
							<div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="tukang" name="kategori_jasa">
						      	<label class="custom-control-label harga" for="tukang">Tukang Kebun</label>
						    </div>
						    <div class="custom-control custom-radio custom-control-inline">
						      	<input type="radio" class="custom-control-input" id="arsitektur" name="kategori_jasa">
						      	<label class="custom-control-label harga" for="arsitektur">Arsitektur Taman</label>
						    </div>
						    <div class="form-group">
						      	<label class="harga" for="deskripsi">Deskripsi Jasa</label>
						      	<input type="text" class="form-control" id="deskripsi" name="deskripsi_jasa">
						    </div>
							<div class="form-group">
						      	<label class="harga" for="deskripsi">URL Mahakarya Jasa</label>
						      	<input type="text" class="form-control" id="deskripsi" name="mahakarya">
						    </div>
			            	<div class="form-group mt-2">
						      	<label class="harga" for="harga">Harga Produk</label>
						      	<input type="text" class="form-control" id="harga" name="harga_jasa">
						    </div>
				    	</div>
						<div align="center">
			        		</label class="labell">
			        		<input type="submit" value="Simpan dan Tampilkan" class="btn btn-beli">		
			        	</div>
			        </div>
		    	</div>
		    </form>
		</div>	
	</div>
</div>
@endsection