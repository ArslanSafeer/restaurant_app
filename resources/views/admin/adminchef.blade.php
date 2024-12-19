<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  <div class="container-scroller">
  @include('admin.admincss')
  </head>
  <body>
@include('admin.navbar')


<div class="col-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Enter Food Chef </h3>
                    <form class="forms-sample" action="{{url('uploadchef')}}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="">Name</label>
                        <input style="color:white;" type="text" name="name" class="form-control" required placeholder="chef name">
                      </div>
                      <div class="form-group">
                        <label for="">Speciality</label>
                        <input style="color:white;" type="text" name="speciality" class="form-control" required placeholder="enter speciality">
                      </div>
                      <div class="form-group">
                        <label>File Image</label>
                        <input type="file" name="image" required>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form><br>
                    <h3 class="card-title">Chef Data </h3>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th>Name </th>
                            <th>Speciality</th>
                            <th>Image</th>
                            <th>Delete</th>
                            <th>Update</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                          <tr class="table-warning">
                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->speciality}}</td>
                            <td><img src="/foodimage/{{$data->image}}"></td>
                            <td><button class="btn btn-warning"><a href="{{url('/deletechef',$data->id)}}"> Delete </a></button></td>
                            <td><button class="btn btn-warning"><a href="{{url('/updatechef',$data->id)}}"> update </a></button></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                  </div>
                </div>
              </div>

</div>
@include('admin.adminscript')
    
  </body>
</html>