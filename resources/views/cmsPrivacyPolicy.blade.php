@extends('layouts.cmsnavigation')
@section('content')
    <div class="row">
        <div class="col-9">
            <h5>Privacy Policy</h5>
        </div>
        <div class="col-1">
            <button type="button" class="d-flex btn btn-primary text-white addnewbtn">Preview</button>
        </div>
        <div class="col-2">
            <a href="{{url ('/addNewPost') }}"><button type="button" class=" addnewbtn d-flex btn btn-primary text-white">Add New</button></a>
        </div>
    </div>
    
    <div class="row2 container-fluid "  style="height: 570px; background-color:#F8FFFE; "> 
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Policy</th>
                    <th scope="col">Display</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Terms of Use</td>
                    <td><div class="dropdown">
                        <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Privacy Policy</td>
                    <td><div class="dropdown">
                        <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </div></td>
                    <td>
                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Disclaimer</td>
                    <td><div class="dropdown">
                        <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </div></td>
                    <td>
                    <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Informed Consent of Service Performed</td>
                    <td><div class="dropdown">
                        <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </div></td>
                    <td>
                    <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>


    </div>             
@endsection