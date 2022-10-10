@extends('layouts.escrow.front')

@section('content')
<!-- Background Video-->
<video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="assets/mp4/bg.mp4" type="video/mp4" /></video>
<!-- Masthead-->
<div class="masthead">
    <div class="masthead-content text-white">
        <div class="container-fluid px-4 px-lg-0">
            <h1 class="fst-italic lh-1 mb-4">Never start a business online without finapp</h1>
            <p class="mb-5">With Escrow.com you can buy and sell anything safely without the risk of chargebacks. Truly secure payments.</p>
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <fieldset class="mb-2">
                    <div class="input-group">
                        <select name="" id="" class="form-control">
                            <option value="seller">I'm selling</option>
                            <option value="buyer">I'm buying</option>
                            <option value="broker">I'm brokering</option>
                        </select>
                        <select name="" id="" class="form-control">
                            <option value="seller">car's, tickets, etc.</option>
                            <option value="buyer">contracted services</option>
                            <option value="broker">Milestones transactions</option>
                            <option value="broker">Antiques</option>
                        </select>
                    </div>
                </fieldset>
                <div class="form-group mb-2">
                    <fieldset>
                        <div class="input-group">
                            <fieldset>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="sizing-addon1">For</span>
                                  </div>
                                  <input type="text" class="form-control" value="800" aria-describedby="sizing-addon1">
                                </div>
                              </fieldset>
                            <select name="" id="" class="form-control">
                                <option value="USD">USD</option>
                                <option value="AUD">AUD</option>
                                <option value="EURO">Euro</option>
                                <option value="CAD">CAD</option>
                                <option value="NGN">NGN</option>
                            </select>
                        </div>
                    </fieldset>
                </div>
                <div class="form-goup">
                    <a href="" class="btn btn-primary">Start Now</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Social Icons-->
<!-- For more icon options, visit https://fontawesome.com/icons?d=gallery&p=2&s=brands-->
<div class="social-icons">
    <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
        <a class="btn btn-dark m-3" href="#!"><i class="fab fa-twitter"></i></a>
        <a class="btn btn-dark m-3" href="#!"><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-dark m-3" href="#!"><i class="fab fa-instagram"></i></a>
    </div>
</div>
@endsection
