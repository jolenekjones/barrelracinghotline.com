@extends('layouts.front-end-app')
@section('title', 'Horse Profile Page')
@section('content')
<div id='fh5co-main'>
    <!-- Header section --->
    <section>
        <div class="row p-0 m-0">
            <div class="col-lg-12 col-md-12 col-sm-12">
                 <div class="row">
                        <div class="masonry">
                            <div class="row">
                                <div class="col-md-6 gallery-item p-0">
                                    <a    href="{{url('/')}}/assets/img/portfolio_big_1.jpg" data-lightbox="image">
                                        <div class='img-item'  style='background:url({{url('/')}}/assets/img/portfolio_big_1.jpg);
                                            height: 322px; background-size: cover;'>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 gallery-item p-0">
                                    <a
                                        href="{{url('/')}}/assets/img/portfolio_big_2.jpg" data-lightbox="image">
                                        <div class='img-item'  style='background:url({{url('/')}}/assets/img/portfolio_big_2.jpg);    height: 322px;
                             background-size: cover;'></div>
                                    </a>
                                </div>
                                <div class="col-md-4 gallery-item p-0">
                                    <a href="{{url('/')}}/assets/img/portfolio_big_3.jpg"
                                       data-lightbox="image">
                                        <div  class='img-item'   style='background:url({{url('/')}}/assets/img/portfolio_big_3.jpg);    height: 250px;
                                      background-size: cover;'></div>
                                    </a>
                                </div>
                                <div class="col-md-4 gallery-item p-0">
                                    <a href="{{url('/')}}/assets/img/portfolio_big_4.jpg" data-lightbox="image">
                                        <div class='img-item'  style='background:url({{url('/')}}/assets/img/portfolio_big_4.jpg);    height: 250px;
                               background-size: cover;'></div>
                                    </a>
                                </div>
                                <div class="col-md-4 p-0 gallery-item gallery-overlay-container">
                                    <div class='number'>2+</div>
                                    <a href="{{url('/')}}/assets/img/portfolio_big_5.jpg" data-lightbox="image">
                                        <div  class='img-item'  style='background:url({{url('/')}}/assets/img/portfolio_big_5.jpg);    height: 250px;
                             background-size: cover;'></div>
                                    </a>
                                </div>
                                <div class="col-md-8"  style="display: none;">
                                    <a href="{{url('/')}}/assets/img/portfolio_big_2.jpg" data-lightbox="image">
                                    </a>
                                </div>
                                <div class="col-md-8" style="display: none;">
                                    <a href="{{url('/')}}/assets/img/portfolio_big_5.jpg" data-lightbox="image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">

            </div>
        </div>
    </section>
    <!-- Horse Detail section -->
    <section class="horse-pedigree-section">
        <div class="tree-container">
    <div class="tree">
      <div class="generation">
        <div class="person dark" id="p1">NO PRESSURE ON ME</div>
      </div>
      <div class="generation">
        <div class="person" id="p2">sire<br><small>Leo Nick Bar</small></div>
        <div class="person danger" id="p3">dam<br><small>SX FRENCHMANS VANILA</small></div>
      </div>
      <div class="generation">
        <div class="person" id="p4">Dr Nick Bar</div>
        <div class="person danger" id="p5">LIL BIT O BUG</div>
        <div class="person" id="p6">Frenchmans Guy</div>
        <div class="person danger" id="p7">WILLYS ROCKIN</div>
      </div>
      <div class="generation">
          <div class="person" id="p8"><small>Flit Bar</small></div>
        <div class="person  danger" id="p9"><small>Este Tag</small></div>
        <div class="person" id="p10"><small>A SHARP LEO</small></div>
        <div class="person danger" id="p11"><small>WHEELIN BUG</small></div>
        <div class="person" id="p12"><small>Sun Frost</small></div>
        <div class="person danger" id="p13"><small>Frenchmans Lady </small></div>
        <div class="person" id="p14"><small>JET N ROCKET</small></div>
        <div class="person danger" id="p15"><small>JET N ROCKET</small></div>
      </div>

      <!-- SVG Connections -->
      <svg id="connections"></svg>
    </div>
  </div>
    </section>

    <!-- Owner Detail section -->
     @include('front-end.inc._owner_horse_contact')
</div>
        <script>
    function connect(parentId, childId) {
      const parent = document.getElementById(parentId);
      const child = document.getElementById(childId);
      if (!parent || !child) return;

      const svg = document.getElementById("connections");
      const pRect = parent.getBoundingClientRect();
      const cRect = child.getBoundingClientRect();

      const svgRect = svg.getBoundingClientRect();

      const x1 = pRect.left + pRect.width / 2 - svgRect.left;
      const y1 = pRect.top + pRect.height / 2 - svgRect.top;
      const x2 = cRect.left + cRect.width / 2 - svgRect.left;
      const y2 = cRect.top + cRect.height / 2 - svgRect.top;

      const line = document.createElementNS("http://www.w3.org/2000/svg", "line");
      line.setAttribute("x1", x1);
      line.setAttribute("y1", y1);
      line.setAttribute("x2", x2);
      line.setAttribute("y2", y2);
      line.setAttribute("stroke", "#999");
      line.setAttribute("stroke-width", "2");
      svg.appendChild(line);
    }

    window.addEventListener("load", () => {
      const connections = [
        ["p2", "p1"], ["p3", "p1"],
        ["p4", "p2"], ["p5", "p2"],
        ["p6", "p3"], ["p7", "p3"],
        ["p8", "p4"], ["p9", "p4"],
        ["p10", "p5"], ["p11", "p5"],
        ["p12", "p6"], ["p13", "p6"],
        ["p14", "p7"], ["p15", "p7"]
      ];
      connections.forEach(([parent, child]) => connect(parent, child));
    });
    </script>
@endsection
