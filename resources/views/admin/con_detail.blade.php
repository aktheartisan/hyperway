@include('admin/section/header')

<style type="text/css">
  .cade{
    padding: 40px;
  }.cade h4{
    text-align:center;
  }
</style>
<div class="container">
  <div class="card cade">
    <h4>Change Contact Details</h4>
    <form action="{{url('address_up')}}" method="post">
      @csrf
      @foreach($add as $a)
      <label>Address</label>
      <input type="hidden" value="{{$a->id}}" name="id">
      <textarea type="text" value="{{$a->address}}" class="form-control" name="add">{{$a->address}}</textarea><br>
      <label>Email</label>
      <input type="email" value="{{$a->email}}" class="form-control" name="email"><br>
      <label>Phone Number</label>
      <input type="text" value="{{$a->phone}}" class="form-control" name="phone"><br>
      <button type="submit" class="btn btn-warning">Change</button>
      @endforeach
    </form>
  </div>
</div>

@include('admin/section/validation')
  @include('admin/section/session')
   @include('admin/section/footer')