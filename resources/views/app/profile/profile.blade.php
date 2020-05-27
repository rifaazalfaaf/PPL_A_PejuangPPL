@extends('layout.default')
@section('title','Profile')

@section('styles')
<style>
* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.containerr {
  padding: 5px 20px 15px 20px;
  border-radius: 3px;
  background-color:  #ffffff;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.labell {
  margin-bottom: 10px;
  display: block;
  color:#707070; 
}
.btn-submit {
  width: 120px;
  height: 50px;
  box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);
  background-color: #71b70b;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}
.btn-submit:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

.gambar-user{
	width: 70px;
  height: 70.3px;
  background-color: #93c91c;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
@endsection

@section('content')
<div class="container containerr my-3">
    <form action="/action_page.php">
    	<div class="container">
    		<div class="row">
	        	<div class="col-md-10">
	        		<h3 class="mt-3 Ulasan">Data Diri</h3>		
	        	</div>
	        	<div class="col-md-2">
	        		</label class="labell">
	        		<input type="submit" value="Edit" class="btn btn-submit">		
	        	</div>
	        </div>
	        <div class="row pl-4">
	          	<div class="col-50">
	          		<img class="gambar-user rounded-circle mb-4 mr-3" src="{{asset('img/profileuser.png')}}" alt=""> 
	          		
	            	<label class="labell" for="fname">Nama Lengkap</label>
	            	<input type="text" id="fname" name="firstname">
	            	
	            	<label class="labell" for="username">Username</label>
	            	<input type="text" id="username" name="username">
	            	
	            	<label class="labell" for="jk"> Jenis Kelamin</label>
	            	<input type="text" id="jk" name="jeniskelamin">
	            	
	            	<label class="labell" for="ttl">Tanggal Lahir</label>
	            	<input type="text" id="ttl" name="ttl">
					
					<label class="labell" for="telepon">Telepon</label>
	            	<input type="text" id="telepon" name="telepon">
		    	</div>

	          	<div class="col-50">
	          		<label class="labell" for="email">Email</label>
	                <input type="text" id="email" name="email">

	            	<label class="labell" for="password">Ganti Kata Sandi</label>
	            	<input type="text" id="password" name="password">

	            	<label class="labell" for="alamat">Alamat Saya</label>
	            	<textarea class="form-control" id="alamat" name="alamat"></textarea>
	            	
	            	<label class="labell mt-2" for="kodepos">Kode Pos</label>
	            	<input type="text" id="kodepos" name="kodepos">
	        	</div>
	        </div>
    	</div>
    </form>
</div>
@endsection
	