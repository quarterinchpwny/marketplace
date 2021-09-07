@extends('main.NeutralHome')

@section('content')
    <section id="everyday-law">
        <div class="container-fluid">
            <div class="row">
                <h2>Everyday Law </h2>
                <hr style="width: 188px; margin-left: 15px;">
            </div>
            <div class="row justify-content-center" style="padding: 30px 0 0 10px;">

                <div class="col-2 justify-content-end" style="padding-right: 0px;">
                    <img src="{{ URL::to('/') }}/NeutralHome_Graphics/law_video.png" alt="Everyday Law">
                </div>

                <div class="col-5">
                </div>

                <div class="col-5 " >
                    <div id="updates-heading">
                        <div>
                            <p id="title1">"Co-maker ng di nagbayad sa utang,</p>
                        </div>
                        
                        <p id="title2">Tama ba na <br>ikaw ang singilin?"</p>
                        
                    </div>
                    <div id="updates-content">
                        <p id="everyday_content">Nakapirma ka na ba sa loan agreement bilang co-maker?</p>
                        <p id="everyday_content">Ano ang panganib kung ikaw ay pipirma bilang co-maker sa isang loan?</p>
                    </div>
                    <div style="padding-top:30px">
                        <a class="btn" href="#" role="button" id="everyday_seemore">SEE MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection