
	<div>
	<div class="flex justify-between">
		<h1 class="mb-3">Contact Details</h1>
		</div>
		<div class="">
  <ul class="breadcrumb rounded">
 <!--  <li ><a href="#" class="text-sm">Contact</a></li>
  <li class="text-sm">Contact Details</li> -->
</ul>
</div>
		<div class="shadow-md bg-white border rounded px-5 py-3 my-5">
			<div class="flex border-b">
			<div class="w-1/4  py-4">
				<div><h5>Name</h5></div>
			</div>
			<div class="w-3/4 py-4">
				<p>{{$contacts->fullname}}</p>
			</div>
			</div>
			<div class="flex border-b">
			<div class="w-1/4  py-4">
				<div><h5>Email Id</h5></div>
			</div>
			<div class="w-3/4 py-4">
				<p>{{$contacts->email}}</p>
			</div>
			</div>
			<div class="flex border-b">
			<div class="w-1/4  py-4">
				<div><h5>Contact No</h5></div>
			</div>
			<div class="w-3/4 py-4">
				<p>{{$contacts->contact_no}}</p>
			</div>
			</div>
			<div class="flex border-b">
			<div class="w-1/4  py-4">
				<div><h5>Serve</h5></div>
			</div>
			<div class="w-3/4 py-4">
				<p>{{$contacts->serve_at}}</p>
			</div>
			</div>

			<div class="flex border-b">
			<div class="w-1/4  py-4">
				<div><h5>Role</h5></div>
			</div>
			<div class="w-3/4 py-4">
				<p>{{$contacts->role}}</p>
			</div>
			</div>

			<div class="flex border-b">
			<div class="w-1/4  py-4">
				<div><h5>Select</h5></div>
			</div>
			<div class="w-3/4 py-4">
				<p>{{$contacts->select}}</p>
			</div>
			</div>

			<div class="flex border-b">
			<div class="w-1/4  py-4">
				<div><h5>Submitted Date Time</h5></div>
			</div>
			<div class="w-3/4 py-4">
				<p>{!! $contacts->created_at->format(' j F Y  H:i:s:a') !!}</p>
			</div>
			</div>
		</div>
	</div>

