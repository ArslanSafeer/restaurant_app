<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.admincss')
  </head>
  <body>
  <div class="container-scroller">
@include('admin.navbar')


<div class="col-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Enter Food </h3>
                    <form class="forms-sample" action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="">Title</label>
                        <input style="color:white;" type="text" name="title" class="form-control" required placeholder="title">
                      </div>
                      <div class="form-group">
                        <label for="">Price</label>
                        <input style="color:white;" type="num" name="price" class="form-control" required placeholder="price">
                      </div>
                      <div class="form-group">
                        <label>File Image</label>
                        <input type="file" id="myFile" name="image" required>
                      </div>
                      <div class="form-group">
                        <label for="">Description</label>
                        <input style="color:white;" type="text" name="description" class="form-control" required placeholder="Description">
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form><br>
                    <h3 class="card-title">Food Data </h3>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th>Title </th>
                            <th> Price</th>
                            <th>Description </th>
                            <th>Image</th>
                            <th>Delete</th>
                            <th>Update</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                          <tr class="table-warning">
                            <td>{{$data->id}}</td>
                            <td>{{$data->title}}</td>
                            <td>{{$data->price}}</td>
                            <td>{{$data->description}}</td>
                            <td><img src="/foodimage/{{$data->image}}"></td>
                            <td><button class="btn btn-warning"><a href="{{url('/deletefood',$data->id)}}"> Delete </a></button></td>
                            <td><button class="btn btn-warning"><a href="{{url('/updatefood',$data->id)}}"> update </a></button></td>
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