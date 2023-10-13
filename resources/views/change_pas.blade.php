@include('admin/section/header')

<style type="text/css">
	.deca{
		padding: 50px;
	}
</style>
<div class="content-wrapper">
	<div class="container-xxl flex-grow-1 container-p-y">
		<div class="card deca">
			<h4>Change Your Password</h4>
			<form action="{{ route('password.update') }}" method="post" autocomplete="off">
				@csrf
				@method('put')
				<label class="form-label">Current Password</label>
				<input type="text" class="form-control" id="defaultFormControlInput"  placeholder="Heading" name="current_password" />

				<label class="form-label">New Password</label>
				<input type="text" class="form-control" id="defaultFormControlInput"  placeholder="Heading" name="password" />

				<label class="form-label">Confirm Password</label>
				<input type="text" class="form-control" id="defaultFormControlInput"  placeholder="Heading" name="password_confirmation" />

				<button type="submit" class="btn btn-primary active mt-2">Submit</button>
			</form>
		</div>
	</div>
</div>
@include('admin/section/validation')
@include('admin/section/session')
@include('admin/section/footer')