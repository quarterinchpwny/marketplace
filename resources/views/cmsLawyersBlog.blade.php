@extends('layouts.cmsnavigation')
@section('content')
  <div class="row row1">
    <div class="col-10">
      <p class="fs-5 fw-bold text-white">Lawyer's Blog Section</p>
    </div>
    <div class="col-1">
      <button type="button" class="btn text-white addnewbtn" style = "background-color: #9D71BC;"> Preview</button>
    </div>
  </div>
        <div class="row2 container-fluid"  style="height: 580px; background-color:#F8FFFE; ">  
        <div class="row">
                  <div class="col-2">
                    <a href="{{route ('addNewPost')}}"><button type="button" class="btn text-white" style = "background-color: #9D71BC;">Add Post</button></a>
                  </div>
                </div>    
        <div class="table-responsive-xl">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
      
                
                      <th scope="col">Title</th>
                      <th scope="col">Body</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody >
                    @foreach($blogs as $blog)
                      <tr>
                        
                        <td>{{$blog->title  }}</td>
                        <td>{{$blog->body  }}</td>
    
                        <td><div class="btn">
                        <a href="{{route ('blog.view',$blog->blog_id )}}"> <button type="button" class="btn btn-secondary"><i class="fas fa-eye"></i> View</button></a>  
                        
                       
                          <a href="{{route ('blog.edit',$blog->blog_id )}}" >
                            <button type="button" class="btn btn-secondary"><i class="fas fa-pencil-alt"></i> Edit</button></a> 
                          <a href="{{route ('blog.delete',$blog->blog_id )}}"> <button type="button" class="btn btn-secondary"><i class="fas fa-trash-alt"></i> Delete</button></a>
                            
                        </div></td>
                      
                      </tr>
                    @endforeach
            
                   
                  </tbody>
                </table>
                
              </div>
        </div>       

@endsection