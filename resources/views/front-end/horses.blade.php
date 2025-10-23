@extends('layouts.front-end-app')
@section('title', 'Horse Profile Page')
@section('content')
@php
$total_trees = [];
$allConnections =[];
@endphp
<div id="fh5co-main">
    <section id="feature-horses-section" class="content-section p-5">
        <div class="section-heading">
            <h2 class="fh5co-heading animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                Horses <span></span>
            </h2>
        </div>
        <div id="blog" class="content-section p-0">
            <div class="section-content">
                <div class="tabs-content">
                    <div class="wrapper">
                        <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                            <li><a href="#tab1" class="active">Proven 1D-2D Horses</a></li>
                            <li><a href="#tab2">Prospects</a></li>
                            <li><a href="#tab3">Solid 3D Horses</a></li>
                            <li><a href="#tab4">Kid & Granny </a></li>
                        </ul>
                        <section id="first-tab-group" class="tabgroup">
                            <div id="tab1">
                                <ul>
                                    <li>
                                        <div class="item row m-0">
                                            <div class='col-lg-9 col-md-9 col-sm-12  gallery-overlay-container'>
                                                <img src="{{url('/')}}/assets/img/blog_1.jpg" alt="">
                                                <div class="number">5+</div>
                                            </div>
                                            <div class='col-lg-3 col-md-3 col-sm-12 col-sm-12'>
                                                <div class="text-content">
                                                    <div class=" p-0">
                                                        <h1 class="horse-name horsenametruncate mt-2 mb-0">
                                                            <a class="text-decoration-none"
                                                               href="{{url('/horse-details/16185')}}">Designed By Charly </a>
                                                        </h1>
                                                        <p class="horses-sire-dam-ds text-capitalize mb-0">
                                                            2022 Brown Stallion
                                                        </p>
                                                        <p class="horses-sire-dam-ds text-dark text-uppercase mb-0">
                                                            Slye By Design  x<br>
                                                            Misscharlypotatoes12<br>
                                                        </p>
                                                    </div>
                                                    <div class="accent-button button mt-2">
                                                        <a href="{{url('/horse-details/12345')}}">Continue Reading</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item row">
                                            <div class='col-lg-9 col-md-9 col-sm-12  gallery-overlay-container'>
                                                <img src="{{url('/')}}/assets/img/blog_2.jpg" alt="">
                                                <div class="number">5+</div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-sm-12 text-content">
                                                <div class=" p-0">
                                                    <h1 class="horse-name horsenametruncate mt-2 mb-0">
                                                        <a class="text-decoration-none"
                                                           href="{{url('/horse-details/16185')}}">Designed By Charly </a>
                                                    </h1>
                                                    <p class="horses-sire-dam-ds text-capitalize mb-0">
                                                        2022 Brown Stallion
                                                    </p>
                                                    <p class="horses-sire-dam-ds text-dark text-uppercase mb-0">
                                                        Slye By Design  x<br>
                                                        Misscharlypotatoes12<br>
                                                    </p>
                                                </div>
                                                <div class="accent-button button mt-2">
                                                    <a href="{{url('/horse-details/12345')}}">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab2">
                                <ul>
                                    <li>
                                        <div class="item row">
                                            <div class='col-lg-9 col-md-9 col-sm-12  gallery-overlay-container'>
                                                <img src="{{url('/')}}/assets/img/blog_3.jpg" alt="">
                                                <div class="number">5+</div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-sm-12 text-content">
                                                <div class=" p-0">
                                                    <h1 class="horse-name horsenametruncate mt-2 mb-0">
                                                        <a class="text-decoration-none"
                                                           href="{{url('/horse-details/16185')}}">Designed By Charly </a>
                                                    </h1>
                                                    <p class="horses-sire-dam-ds text-capitalize mb-0">
                                                        2022 Brown Stallion
                                                    </p>
                                                    <p class="horses-sire-dam-ds text-dark text-uppercase mb-0">
                                                        Slye By Design  x<br>
                                                        Misscharlypotatoes12<br>
                                                    </p>
                                                </div>
                                                <div class="accent-button button mt-2">
                                                    <a href="{{url('/horse-details/12345')}}">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item row">
                                            <div class='col-lg-9 col-md-9 col-sm-12  gallery-overlay-container'>
                                                <img src="{{url('/')}}/assets/img/blog_1.jpg" alt="">
                                                <div class="number">5+</div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-sm-12 text-content">
                                                <div class=" p-0">
                                                    <h1 class="horse-name horsenametruncate mt-2 mb-0">
                                                        <a class="text-decoration-none"
                                                           href="{{url('/horse-details/16185')}}">Designed By Charly </a>
                                                    </h1>
                                                    <p class="horses-sire-dam-ds text-capitalize mb-0">
                                                        2022 Brown Stallion
                                                    </p>
                                                    <p class="horses-sire-dam-ds text-dark text-uppercase mb-0">
                                                        Slye By Design  x<br>
                                                        Misscharlypotatoes12<br>
                                                    </p>
                                                </div>
                                                <div class="accent-button button mt-2">
                                                    <a href="{{url('/horse-details/12345')}}">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item row">
                                            <div class='col-lg-9 col-md-9 col-sm-12  gallery-overlay-container'>
                                                <img src="{{url('/')}}/assets/img/blog_2.jpg" alt="">
                                                <div class="number">5+</div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 text-content">
                                                <div class=" p-0">
                                                    <h1 class="horse-name horsenametruncate mt-2 mb-0">
                                                        <a class="text-decoration-none"
                                                           href="{{url('/horse-details/16185')}}">Designed By Charly </a>
                                                    </h1>
                                                    <p class="horses-sire-dam-ds text-capitalize mb-0">
                                                        2022 Brown Stallion
                                                    </p>
                                                    <p class="horses-sire-dam-ds text-dark text-uppercase mb-0">
                                                        Slye By Design  x<br>
                                                        Misscharlypotatoes12<br>
                                                    </p>
                                                </div>
                                                <div class="accent-button button mt-2">
                                                    <a href="{{url('/horse-details/12345')}}">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab3">
                                <ul>
                                    <li>
                                        <div class="item row">
                                            <div class='col-lg-9 col-md-9 col-sm-12  gallery-overlay-container'>
                                                <img src="{{url('/')}}/assets/img/blog_2.jpg" alt="">
                                                <div class="number">5+</div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 text-content">
                                                <div class=" p-0">
                                                    <h1 class="horse-name horsenametruncate mt-2 mb-0">
                                                        <a class="text-decoration-none"
                                                           href="{{url('/horse-details/16185')}}">Designed By Charly </a>
                                                    </h1>
                                                    <p class="horses-sire-dam-ds text-capitalize mb-0">
                                                        2022 Brown Stallion
                                                    </p>
                                                    <p class="horses-sire-dam-ds text-dark text-uppercase mb-0">
                                                        Slye By Design  x<br>
                                                        Misscharlypotatoes12<br>
                                                    </p>
                                                </div>
                                                <div class="accent-button button mt-2">
                                                    <a href="{{url('/horse-details/12345')}}">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item row">
                                            <div class='col-lg-9 col-md-9 col-sm-12  gallery-overlay-container'>
                                                <img src="{{url('/')}}/assets/img/blog_1.jpg" alt="">
                                                <div class="number">5+</div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 text-content">
                                                <div class=" p-0">
                                                    <h1 class="horse-name horsenametruncate mt-2 mb-0">
                                                        <a class="text-decoration-none"
                                                           href="{{url('/horse-details/16185')}}">Designed By Charly </a>
                                                    </h1>
                                                    <p class="horses-sire-dam-ds text-capitalize mb-0">
                                                        2022 Brown Stallion
                                                    </p>
                                                    <p class="horses-sire-dam-ds text-dark text-uppercase mb-0">
                                                        Slye By Design  x<br>
                                                        Misscharlypotatoes12<br>
                                                    </p>
                                                </div>
                                                <div class="accent-button button mt-2">
                                                    <a href="{{url('/horse-details/12345')}}">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item row">
                                            <div class='col-lg-9 col-md-9 col-sm-12  gallery-overlay-container'>
                                                <img src="{{url('/')}}/assets/img/blog_3.jpg" alt="">
                                                <div class="number">5+</div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 text-content">
                                                <div class=" p-0">
                                                    <h1 class="horse-name horsenametruncate mt-2 mb-0">
                                                        <a class="text-decoration-none"
                                                           href="{{url('/horse-details/16185')}}">Designed By Charly </a>
                                                    </h1>
                                                    <p class="horses-sire-dam-ds text-capitalize mb-0">
                                                        2022 Brown Stallion
                                                    </p>
                                                    <p class="horses-sire-dam-ds text-dark text-uppercase mb-0">
                                                        Slye By Design  x<br>
                                                        Misscharlypotatoes12<br>
                                                    </p>
                                                </div>
                                                <div class="accent-button button mt-2">
                                                    <a href="{{url('/horse-details/12345')}}">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab4">
                                <ul>
                                    <li>
                                        <div class="item row">
                                            <div class='col-lg-9 col-md-9 col-sm-12  gallery-overlay-container'>
                                                <img src="{{url('/')}}/assets/img/blog_1.jpg" alt="">
                                                <div class="number">5+</div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 text-content">
                                                <div class=" p-0">
                                                    <h1 class="horse-name horsenametruncate mt-2 mb-0">
                                                        <a class="text-decoration-none"
                                                           href="{{url('/horse-details/16185')}}">Designed By Charly </a>
                                                    </h1>
                                                    <p class="horses-sire-dam-ds text-capitalize mb-0">
                                                        2022 Brown Stallion
                                                    </p>
                                                    <p class="horses-sire-dam-ds text-dark text-uppercase mb-0">
                                                        Slye By Design  x<br>
                                                        Misscharlypotatoes12<br>
                                                    </p>
                                                </div>
                                                <div class="accent-button button mt-2">
                                                    <a href="{{url('/horse-details/12345')}}">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item row">
                                            <div class='col-lg-9 col-md-9 col-sm-12  gallery-overlay-container'>
                                                <img src="{{url('/')}}/assets/img/blog_3.jpg" alt="">
                                                <div class="number">5+</div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12  text-content">
                                                <div class=" p-0">
                                                    <h1 class="horse-name horsenametruncate mt-2 mb-0">
                                                        <a class="text-decoration-none"
                                                           href="{{url('/horse-details/16185')}}">Designed By Charly </a>
                                                    </h1>
                                                    <p class="horses-sire-dam-ds text-capitalize mb-0">
                                                        2022 Brown Stallion
                                                    </p>
                                                    <p class="horses-sire-dam-ds text-dark text-uppercase mb-0">
                                                        Slye By Design  x<br>
                                                        Misscharlypotatoes12<br>
                                                    </p>
                                                </div>
                                                <div class="accent-button button mt-2">
                                                    <a href="{{url('/horse-details/12345')}}">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item row">
                                            <div class='col-lg-9 col-md-9 col-sm-12  gallery-overlay-container'>
                                                <img src="{{url('/')}}/assets/img/blog_2.jpg" alt="">
                                                <div class="number">5+</div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 text-content">
                                                <div class=" p-0">
                                                    <h1 class="horse-name horsenametruncate mt-2 mb-0">
                                                        <a class="text-decoration-none"
                                                           href="{{url('/horse-details/16185')}}">Designed By Charly </a>
                                                    </h1>
                                                    <p class="horses-sire-dam-ds text-capitalize mb-0">
                                                        2022 Brown Stallion
                                                    </p>
                                                    <p class="horses-sire-dam-ds text-dark text-uppercase mb-0">
                                                        Slye By Design  x<br>
                                                        Misscharlypotatoes12<br>
                                                    </p>
                                                </div>
                                                <div class="accent-button button mt-2">
                                                    <a href="{{url('/horse-details/12345')}}">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Total trees must match PHP $total_trees
        // const totalTrees = [{ $total_trees }]];
        //const connections = @json($allConnections);
        for (let tree = 0; tree < totalTrees; tree++) {

            const treeConnections = connections[tree];
            console.log(treeConnections)
            const svg = document.getElementById(`connections-${tree}`);

            if (!svg)
                continue;

            svg.innerHTML = ''; // Clear previous content
            svg.setAttribute("width", "100%");
            svg.setAttribute("height", "100%");
            svg.style.position = "absolute";
            svg.style.top = 0;
            svg.style.left = 0;

            treeConnections.forEach(([childId, parentId]) => {
                const childEl = document.getElementById(childId);
                const parentEl = document.getElementById(parentId);

                if (childEl && parentEl) {
                    const childRect = childEl.getBoundingClientRect();
                    const parentRect = parentEl.getBoundingClientRect();

                    const svgRect = svg.getBoundingClientRect();

                    const x1 = parentRect.left + parentRect.width / 2 - svgRect.left;
                    const y1 = parentRect.bottom - svgRect.top;
                    const x2 = childRect.left + childRect.width / 2 - svgRect.left;
                    const y2 = childRect.top - svgRect.top;

                    const line = document.createElementNS("http://www.w3.org/2000/svg", "line");
                    line.setAttribute("x1", x1);
                    line.setAttribute("y1", y1);
                    line.setAttribute("x2", x2);
                    line.setAttribute("y2", y2);
                    line.setAttribute("stroke", "#aaa");
                    line.setAttribute("stroke-width", "2");
                    svg.appendChild(line);
            }
            });
        }
    });
</script>

@endsection
