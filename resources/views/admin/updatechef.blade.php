<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
  @include('admin.admincss')
  </head>
  <body>
  <div class="container-scroller">
@include('admin.navbar')

<div class="col-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Update chef Record </h3>
                    <form class="forms-sample" action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="">Name</label>
                        <input style="color:white;" type="text" name="name" value="{{$data->name}}" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label for="">Price</label>
                        <input style="color:white;" type="num" name="speciality" value="{{$data->speciality}}" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label>Old Image</label>
                        <img src="/foodimage/{{$data->image}}">
                      </div>
                      <div class="form-group">
                        <label>File Image</label>
                        <input type="file" id="myFile" name="image" required>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">update</button>
                    </form>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
</div>
@include('admin.adminscript')
  </body>
</html>