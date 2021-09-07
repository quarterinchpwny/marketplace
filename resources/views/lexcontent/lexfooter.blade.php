@extends('main.NeutralHome')

@section('content')
<!-- footer -->
             <!-- footer -->
             <section id="footer">
        <div class="container-fluid .padding-0">
            <div class="row" id="footer_top" >
                <div class="col-6" id="footer_logo">
                    <div>
                        <img src="{{ URL::to('/') }}/NeutralHome_Graphics/Rizal_Law_Office_Logo.png" alt="footer logo" height="90px" style="margin-top: 90px;">
                    </div>
                    <div id="footer-subhead">
                        <p><i>Lorem ipsum dolor</i></p>
                    </div>
                </div>

                <div class="col-2" id="footer_terms">
                    <h4>Terms of Use</h4>
                    <h4>Privacy Policy</h4>
                    <h4>Informed Consent of<br>Service Performed</h4>
                    <h4>Disclaimer</h4>
                </div>

                <div class="col-2" id="footer_address">
                    <h3>Address</h3>
                    <p>LexMeet, Inc.
                    <br>Unit 608, 6th floor
                    <br>AIC Burgundy Empire Tower
                    <br>ADB Avenue corner Garnet Road
                    <br>Ortigas Center, Pasig City</p>
                </div>

                <div class="col-2" id="footer_contact">
                    <h3>Contact Us</h3>
                    <p>(02) 8-451-1594</p>
                    <p>contact@rizallawoffice.com</p>
                        <a href="#" class="text-decoration-none">
                            <img src="{{ URL::to('/') }}/NeutralHome_Graphics/fb_icon.png" alt="" style="max-height: 33px;">
                        </a>
                        <a href="#" class="text-decoration-none">
                            <img src="{{ URL::to('/') }}/NeutralHome_Graphics/twitter_icon.png" alt="" style="max-height: 33px;">
                        </a>
                        <a href="/" class="text-decoration-none">
                            <img src="{{ URL::to('/') }}/NeutralHome_Graphics/LinkedIN_icon.png" alt="" style="max-height: 33px;">
                        </a>
                        <a href="/" class="text-decoration-none">
                            <img src="{{ URL::to('/') }}/NeutralHome_Graphics/Instagram_icon.png" alt="" style="max-height: 33px;">
                        </a>
                        <a href="/" class="text-decoration-none">
                            <img src="{{ URL::to('/') }}/NeutralHome_Graphics/Twitter_icon.png" alt="" style="max-height: 33px;">
                        </a>
                </div>
            </div>
            <div class="row" id="footer_bottom">
                <div>
                    Powered by &nbsp; <img src="{{ URL::to('/') }}/NeutralHome_Graphics/LM_white_logo.png" alt="" width="100px">
                </div>
            </div>    
        </div>
    </section>
@endsection