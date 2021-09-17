@extends('layouts.cmsnavigation')
@section('content')
    <div class="row row1">
        <div class="col-10"></div>
        <div class="col-1">
            <button type="button" class="btn text-white addnewbtn" style = "background-color: #9D71BC;"> Preview</button>       
        </div>
    </div>
    <div class="row row2 container-fluid"  style="height: 570px; background-color:#F8FFFE; margin-left: 5px; ">
        <div class="col-xl container-fluid texteditor" style="width: 300px;">
            <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/decoupled-document/ckeditor.js"></script>
            <h5>Edit Post</h5>
    
           <form method="post" action ="{{ route('blog.update', $blog->blog_id)}}" >
               @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="title" value="{{$blog->title}}" placeholder="title">
                    <label for="floatingInput"> Enter title here</label>
                </div> 
                <div class="form-floating mb-3">
                    <textarea name="body" > 
                        {{$blog->body}}
                    </textarea>
                </div>
                    <button type = "submit"> Submit</button>

           </form>  

            <!--  
            <div id="editor">
                <p>Add text here.</p>
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
                </script>-->
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
        </div>     
    </div>              
@endsection