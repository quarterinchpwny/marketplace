@extends('layouts.cmsnavigation')
@section('content')
<div class="row  ">
    <div class="col-sm-1 previewbutton">
         <button type="button" class="d-flex btn btn-primary text-white">Preview</button>
    </div>
</div>

<div class="row row2 container-fluid"  style="height: 580px; background-color:#F8FFFE; margin-left: 5px; ">
    <div class="col-xl container-fluid texteditor" style="width: 300px;">
        <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/decoupled-document/ckeditor.js"></script>
            <h5>Add New Post</h5>
            <label for="colFormLabel" class="col-sm-9 col-form-label">Select Law Update Photo:</label>
            <div class="col-sm-9">
                <input class="form-control" type="file" id="formFile">
            </div>
            <div class="form-floating mb-3" style="margin-top: 15px" >
                <input type="text" class="form-control" id="floatingInput" placeholder="title">
                <label for="floatingInput"> Enter title here</label>
            </div>

            <!-- The toolbar will be rendered in this container. -->
            <div id="toolbar-container" style="max-height: 500px;"> </div>

            <!-- This container will become the editable. -->
            <div id="editor">
                <p>This is the initial editor content.</p>
            </div>
              
            <script>
                DecoupledEditor
                    .create( document.querySelector( '#editor' ) )
                        .then( editor => {
                            const toolbarContainer = document.querySelector( '#toolbar-container' );

                            toolbarContainer.appendChild( editor.ui.view.toolbar.element );
                        } )
                        .catch( error => {
                            console.error( error );
                        } );
            </script>
        </div>
        <div class="col-8 container-fluid " style="width: 300px;">
                <div class="row">
                    <div class="row row-options container-fluid ">
                        <div class="row ">
                            <h6>Publish</h6>

                        </div>
                      
                        <div class="col-sm-7">
                            <button type="button" class="btn btn-primary btn-sm">SAVE AS DRAFT</button>
                            </div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-primary btn-sm">PREVIEW</button>
                            </div>
                        </div>
                       
                    </div>

                    <div class="row">
    
                    </div>


                </div>
                
                
            </div>
           
        </div>              
@endsection