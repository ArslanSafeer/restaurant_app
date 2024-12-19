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

<div class="col-lg-6 stretch-card"> 
                  <div class="card-body">
                  <h3 class="card-title">Users Data </h3>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th>Name </th>
                            <th> Email</th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                          <tr class="table-warning">
                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td> {{$data->email}} </td>
                            @if($data->usertype=="0")
                            <td><button class="btn btn-warning"><a href="{{url('/deleteuser',$data->id)}}"> Delete </a></button></td>
                            @else
                            <td><a> Not Allowed </a></td>
                            @endif
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              
</div>
@include('admin.adminscript')
    
  </body>
</html>
