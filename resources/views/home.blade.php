@extends('layouts.default')
@section('content')

<!-- //////////////////////////////////// CONTAINER ////////////////////////////////////-->
<div class="content-wrapper">
  <div class="content-body">
    <main><!-- Header: 3D Animation -->
<section class="head-area" id="head-area">
<div></div>
<div class="head-content d-flex align-items-center">
    <div class="container">
      <div class="banner-wrapper">

            <div class="row align-items-right">
                <div class="col-lg-12 col-md-12">
                    <div class="banner-content">
                      <div id="svg-animation">
                         <img src="{{ asset('images/logo.png') }}" style="width:40%;height:40%;display: block;margin-left: auto;margin-right: auto">
                      </div>

                        <h1 class="best-template animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.5s" style="color:red;margin-top:20px;font-weight:bold">The legend of Momotaro </h1>
                        <h5 class="d-block white animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.6s" style="color:red;font-weight:bold">MOMOTARO INU</h5>
                        <div class="mt-5 text-center">
                          <a href="https://t.me/MomotaroInuErc20" class="btn btn-lg btn-gradient-orange btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;background:red">MAIN CHANNEL</a>
                          <a href="https://medium.com/@DaichiMm/momotaro-inu-%E6%A1%83%E5%A4%AA%E9%83%8E-528644c112f7" class="btn btn-lg btn-gradient-orange btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;background:red">MEDIUM</a>
                          <a href="https://www.dextools.io/app/en/ether/pair-explorer/0xe718bac6b0a0c6820664ddce3fe6ff198d5f3085" class="btn btn-lg btn-gradient-orange btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;background:red">DEXTOOLS</a>
                        </div>
                        <h5 class="d-block white animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.6s" style="color:red;font-weight:bold;margin-top:20px;background:aliceblue">LOW TAX : 3% tax fee</h5>
                        <h5 class="d-block white animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.6s" style="color:red;font-weight:bold;margin-top:20px;background:aliceblue">LOW SUPPLY : 5.000.000 $Momotaro</h5>
                        <h5 class="d-block white animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.6s" style="color:red;font-weight:bold;margin-top:20px;background:aliceblue">3% Max Wallet | 3% Max Transaction</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Header: 3D Animation -->

    </main>
  </div>
</div>
<!-- //////////////////////////////////// FOOTER ////////////////////////////////////-->

<script type="text/javascript">

  function copyContract() {
    var copyText = document.getElementById("smartcontractaddress");

    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    document.execCommand("copy");

    alert("Text copied to clipboard");
  }

</script>

@stop
