@extends('layouts.cmsnavigation')
@section('content')
<div class="row">
            <div class="col-sm-1">
            <button type="button" class="d-flex btn btn-primary text-white">Preview</button>
            </div>
            <div class="col-sm-2">
            <a href="{{url ('/addNewPost') }}"><button type="button" class="d-flex btn btn-primary text-white">Add Post</button></a>
          </div>
        </div>
        <div class="row2 container-fluid"  style="height: 580px; background-color:#F8FFFE; ">
           
            
            <div class="table-responsive-xl">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">ID</th>
                      <th scope="col">Title</th>
                      <th scope="col">Author</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td><div class="btn">
                        <button type="button" class="btn btn-primary"><i class="fas fa-eye"></i> View</button>
                        <button type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Edit</button>
                        <button type="button" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Delete</button>
                      </div></td>
                     
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td><div class="btn">
                        <button type="button" class="btn btn-primary"><i class="fas fa-eye"></i> View</button>
                        <button type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Edit</button>
                        <button type="button" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Delete</button>
                      </div>
                    </td>
                      
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td><div class="btn">
                        <button type="button" class="btn btn-primary"><i class="fas fa-eye"></i> View</button>
                        <button type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Edit</button>
                        <button type="button" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Delete</button>
                      </div></td>
                   
                    </tr>
                  </tbody>
                </table>
              </div>
        </div>       

@endsection