<div class="flex flex-col lg:flex-row justify-between">
   <h1 class="admin-h1 my-3">Contact List</h1>
  
  </div>
     <div class="">
  <ul class="breadcrumb rounded">
 <!--  <li ><a href="#" class="text-sm">Contact</a></li> -->
  <!-- <li class="text-sm">Contact List</li> -->
</ul>
</div>
    <div class="overflow-x-scroll lg:overflow-x-auto md:overflow-x-auto py-5 custom-table">
       
    <table class="table table-hover w-full border">
    <thead class="border-t-2 border-b-2">
      <tr>
        <th>Name</th>
        <th>Email Id</th>
        <th>Contact No</th>
        <th>Select</th>
        <th>Submitted Date Time</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
      <tr>    
        <td>{{$contact->fullname}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->contact_no}}</td>
        <td>{{$contact->select}}</td>
        <td>{{$contact->created_at}}</td>

        
        
    <td><a href="{{url('/siteadmin/contact/viewmessage/'.$contact->id)}}" class="no-underline text-black mr-2 border rounded p-1"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   width="128px" height="128px" viewBox="0 0 128 128" enable-background="new 0 0 128 128" xml:space="preserve" class="w-3 h-3">
<g>
  <g>
    <path d="M8,112V16c0-4.414,3.594-8,8-8h80c4.414,0,8,3.586,8,8v47.031l8-8V16c0-8.836-7.164-16-16-16H16C7.164,0,0,7.164,0,16v96
      c0,8.836,7.164,16,16,16h44v-8H16C11.594,120,8,116.414,8,112z M88,24H24v8h64V24z M88,40H24v8h64V40z M88,56H24v8h64V56z M24,80
      h32v-8H24V80z M125.656,72L120,66.344c-1.563-1.563-3.609-2.344-5.656-2.344s-4.094,0.781-5.656,2.344l-34.344,34.344
      C72.781,102.25,68,108.293,68,110.34L64,128l17.656-4c0,0,8.094-4.781,9.656-6.344l34.344-34.344
      C128.781,80.188,128.781,75.121,125.656,72z M88.492,114.82c-0.453,0.43-2.02,1.488-3.934,2.707l-10.363-10.363
      c1.063-1.457,2.246-2.922,2.977-3.648l25.859-25.859l11.313,11.313L88.492,114.82z"/>
  </g>
</g>
</svg><span class="mx-1 text-xs">View</span></a></td>
      </tr>
      @endforeach
    </tbody>
    @if(count($contacts)==0)
<tr class="border-b">
<td colspan="6">No records found</td>
</tr>
            @endif    
  </table>

  </div>
    

