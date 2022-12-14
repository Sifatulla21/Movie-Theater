@extends('admin.layouts.master')
@section('main_content')
<section class="container-fluid" style="padding:0;max-height:200px;display:inline;opacity: 0.7;z-index:3">
	<img src="{{ asset('assets/logo/chef.jpg') }}" style="width:100%;height: 200px;">
</section>

<section class="container-fluid bg-transparent" style="z-index: 9">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mx-auto">
				<div class="d-flex justify-content-between align-items-center">
					<img style="margin-top: -18px;" class="img-fluid rounded-circle" src="{{ asset('assets/logo/bro.jpg') }}" width="200" height="200">
					<div>
						<a href="editprofile.php" class="btn btn-secondary">Edit Profile</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<hr>
<section class="container-fluid">
	<div class="row">
		<div class="col-md-4 mx-auto">
			<p class="h2 mt-2 text-center text-info">Profile Information</p>
            <hr>
			<table class="table table-hover">
			  	<tbody>
				    <tr>
				      <td>Name :</td>
				      <td><?php echo Session::get('cmrname'); ?></td>
				    </tr>
				    <tr>
				      <td>Nickname :</td>
				      <td><?php echo Session::get('username'); ?></td>
				    </tr>
				    <tr>
				      <td>Email :</td>
				      <td><?php echo Session::get('email'); ?></td>
				    </tr>
				    <tr>
				      <td>Gender :</td>
				      <td>
				      	<?php 
				      		$gndr = Session::get('gender');
				      		if($gndr == 'm'){
				      			echo 'Male';
				      		}elseif($gndr == 'f'){
				      			echo 'Female';
				      		}
				  		?>
				  	</td>
				    </tr>
				    <tr>
				      <td>Phone :</td>
				      <td><?php echo Session::get('phone'); ?></td>
				    </tr>
			  	</tbody>
			</table>
		</div>
	</div>
</section>
@endsection