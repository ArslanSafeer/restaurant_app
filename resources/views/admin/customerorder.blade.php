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
                  <h3 class="card-title">Orders Data </h3>
                  <div class="search-container" style="color:black;">
                    <form action="{{url('/search')}}" method="get">
                    <input type="text" value="search" name="search">
                    <button type="submit" class="btn btn-success">search</button>
                    </form>
                  </div><br>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Customer Name</th>
                            <th> Phone</th>
                            <th> Address</th>
                            <th>Food Name </th>
                            <th> Price</th>
                            <th> Quantity</th>
                            <th> Total Price</th>
                            <th> Delete </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                          <tr class="table-warning">
                            <td>{{$data->id}}</td>
                            <td> {{$data->name}} </td>
                            <td> {{$data->phone}} </td>
                            <td> {{$data->address}} </td>
                            <td>{{$data->foodname}}</td>
                            <td> {{$data->price}} </td>
                            <td> {{$data->quantity}} </td>
                            <td> {{$data->price*$data->quantity}} </td>
                            <td><button class="btn btn-warning"><a href="{{url('/deleteorder',$data->id)}}"> Delete </a></button></td>
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