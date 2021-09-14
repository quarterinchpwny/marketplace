@extends('layouts.cmsnavigation')
@section('content') 
<div class="row row1">
        <div class="col-10">
            <p class="fs-5 fw-bold text-white">Privacy Policy</p> 
        </div>
        <div class="col-1">
          <button type="button" class="btn text-white addnewbtn" style = "background-color: #9D71BC;"> Preview</button>       
        </div>
    </div>
    <div class="row2 container-fluid"  style="height: 580px; background-color:#F8FFFE; ">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <b>Privacy Policy</b>
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="row container-fluid">
                        <div class="table-responsive">
                            <table class="table table-hover">
                            <thead class="bg-light">
                                <tr >
                                <th scope="col">#</th>
                                <th scope="col">Privacy Policy</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td scope="col" width="70%">
                        
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
                                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>    
                        <div class="row container-fluid">
                            <div class="col-3 offset-11 ">
                            <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-plus-circle"></i> Add New</a>
                            </div>
                        </div>
                        </div>   
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <b>Terms of Use</b>
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body"> <div class="row container-fluid">
                        <div class="table-responsive">
                            <table class="table table-hover">
                            <thead>
                                <tr class="bg-light">
                                <th scope="col">#</th>
                                <th scope="col">Terms of Use</th></th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td></td>
                                    <td>
                                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
                                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
                                    </td>
                                </tr>

                            </tbody>
                            </table>
                        </div>    
                        <div class="row container-fluid">
                            <div class="col-3 offset-11 ">
                                <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-plus-circle"></i> Add New</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <b>Disclaimers</b>
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                    <div class="table-responsive">
                            <table class="table table-hover">
                            <thead>
                                <tr class="bg-light">
                                <th scope="col">#</th>
                                <th scope="col">Disclaimer</th></th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td></td>
                                    <td>
                                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
                                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
                                    </td>
                                </tr>

                            </tbody>
                            </table>
                        </div>    
                        <div class="row container-fluid">
                            <div class="col-3 offset-11 ">
                                <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-plus-circle"></i> Add New</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <b>Informed Consent of Service Performed</b>
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                    <div class="table-responsive">
                            <table class="table table-hover">
                            <thead>
                                <tr class="bg-light">
                                <th scope="col">#</th>
                                <th scope="col">Consent</th></th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td></td>
                                    <td>
                                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
                                        <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
                                    </td>
                                </tr>

                            </tbody>
                            </table>
                        </div>    
                        <div class="row container-fluid">
                            <div class="col-3 offset-11 ">
                                <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-plus-circle"></i> Add New</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>       
@endsection