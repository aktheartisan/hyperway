@include('admin/section/header')

<div class="content-wrapper">
	<div class="container-xxl flex-grow-1 container-p-y">


<style type="text/css">
	.spca{
		padding: 20px;
		background-color: rgba(152, 177, 179, 0.4);
/*		filter: blur(5px);*/
		color: black;
	}
</style>

<div class="row">

	<div class="col-md-6">
		<div class="card spca">
			<div class="row">
				<div class="col-md-6">
					<img src="{{url('public/img/hih.png')}}" />
				</div>
				<div class="col-md-6">
					<span>Road transport carries ~87% of India’s total passenger traffic and more than 60% of its freight.</span>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="card spca">
			<div class="row">
				<div class="col-md-6">
					<img src="{{url('public/img/ran.png')}}" style="width:128px;height: 128px;" />
				</div>
				<div class="col-md-6">
					<span>In 1998 India launched National Highways Development Project India's road network is the second-largest, after the United States.</span>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-6" style="margin:30px 0 0 0;">
		<div class="card spca">
			<div class="row">
				<div class="col-md-6">
					<img src="{{url('public/img/tra.jpg')}}" style="width:100%;height: 160px;" />
				</div>
				<div class="col-md-6">
					<span> India's rail network is the fourth largest and second busiest in the world, transporting 8.09 billion passengers and 1.20 billion tonnes of freight annually, as of 2020.</span>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-6" style="margin:30px 0 0 0;">
		<div class="card spca">
			<div class="row">
				<div class="col-md-6">
					<img src="{{url('public/img/kat.jpg')}}" style="width:150px;height: 150px;object-fit: cover;" />
				</div>
				<div class="col-md-6">
					<span>Until 1990, international aviation was restricted to the four major metros of India New Delhi(Palam), Bombay(Santa Cruz), Madras(Meenambakkam), and Calcutta(Dum Dum) with  Thiruvananthapuram Airport.</span>
				</div>
			</div>
		</div>
	</div>

</div>
		

	</div>
</div>

@include('admin/section/footer')
            
