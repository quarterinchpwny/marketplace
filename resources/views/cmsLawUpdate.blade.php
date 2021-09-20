@extends('layouts.cmsnavigation')
@section('content')
  <div class="row row1">
    <div class="col-10">
      <p class="fs-5 fw-bold text-white">Law Update Section</p>
    </div>
    <div class="col-1">
     <button type="button" class="btn text-white addnewbtn" style = "background-color: #9D71BC;"> Preview</button>
    </div>
  </div>
        <div class="row2 container-fluid"  style="height: 580px; background-color:#F8FFFE; ">
        <div class="col-sm-2">
        <a href="{{route ('addNewPostLawUpdate')}}"><button type="button" style = "background-color: #9D71BC; " class="d-flex btn  text-white">Add Post</button></a>
      </div>
            <div class="table-responsive-xl">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                    <th scope="col" width="30%">Title</th>
                    <th scope="col" width="40%">Body</th>
                    <th scope="col" width="30%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($lawupdates as $lawupdate)
                    <tr>
                      <td>{{$lawupdate->title  }}</td>
                      <td>{{$lawupdate->body  }}</td>
                      <td>
                        <div class="btn">
                          <a href=""> <button type="button" class="btn btn-outline-dark btn-sm"><i class="fas fa-eye"></i> View</button></a>  
                          <a href="" ><button type="button" class="btn btn-outline-dark btn-sm"><i class="fas fa-pencil-alt"></i> Edit</button></a> 
                          <a href=""> <button type="button" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash-alt"></i> Delete</button></a>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                
        </div>       

@endsection