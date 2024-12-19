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
                  <h3 class="card-title">Reservation Data </h3>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phome</th>
                            <th>Guest</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Message</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                          <tr class="table-warning">
                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td> {{$data->email}} </td>
                            <td> {{$data->phone}} </td>
                            <td> {{$data->guest}} </td>
                            <td> {{$data->date}} </td>
                            <td> {{$data->time}} </td>
                            <td> {{$data->message}} </td>
                            <td><button class="btn btn-warning"><a href="{{url('/deletereservation',$data->id)}}"> Delete </a></button></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>


</div>
@include('admin.adminscript');
    
  </body>
</html>