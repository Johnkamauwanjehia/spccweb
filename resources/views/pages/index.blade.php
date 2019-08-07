@extends('layouts.pages')

@section('content')
<!-- Hero Section -->
<section class="section hero">
  <div class="content">
    <h1 class="headline">Excellence.</h1>
    <p class="description">Committed to delivering quality education</p>
    <a href="/enroll" class="btn">be a spcnian</a>
  </div>
  <div class="image">
    <img src="{{ asset('spccweb/img/hero.jpg') }}" alt="SPCC Caloocan School Building" />
  </div>
  <canvas class="particles-background"></canvas>
</section>
<!-- end Hero Section -->

<!-- Upcoming Events Section -->
<section class="section upcoming-events">
  <div class="content">
    <div class="title">
      <h2 class="headline">Upcoming Events</h2>
      <div class="pagination">
        <a href="#">
          <i class="fa fa-3x fa-angle-left"></i>
        </a>
        <a href="#">
          <i class="fa fa-3x fa-angle-right"></i>
        </a>
      </div>
    </div>
    <div class="card">
      <h3 class="date">20 May</h3>
      <p class="event">Start of Enrollment</p>
    </div>
    <div class="card">
      <h3 class="date">22 Jun</h3>
      <p class="event">End of Enrollment</p>
    </div>
    <div class="card">
      <h3 class="date">24 Jun</h3>
      <p class="event">Start of Classes</p>
    </div>
    <div class="card">
      <h3 class="date">08 Sep</h3>
      <p class="event">Prelims Examination</p>
    </div>
  </div>
</section>
<!-- end Upcoming Events Section -->

<!-- About Section -->
<section class="section about-brief">
  <div class="content">
    <h2 class="headline">Systems Plus Computer College</h2>
    <h3 class="sub-headline">Caloocan Campus</h3>
    <p class="description">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
      ut labore et dolore magna aliqua. Nam aliquam sem et tortor consequat id porta nibh
      venenatis. Ut labore et dolore magna aliqua. Nam aliquam sem et tortor consequat id porta
      nibh venenatis.
    </p>
    <a href="/about" class="link">Learn More</a>
  </div>
  <div class="image">
    <img src="{{ asset('spccweb/img/spcnian.jpg') }}" alt="SPCC flag ceremony" />
  </div>

  <div class="bg">
    <img src="{{ asset('spccweb/img/circle-pattern.svg') }}" class="circle-pattern-big" />
  </div>
</section>
<!-- end About Section -->

<!-- Programs Section -->
<section class="section programs">
  <div class="content">
    <h2 class="headline">Program of Study</h2>
    <ul>
      <li class="level-1">
        <span>Basic Education Department</span>
        <ul>
          <li>Pre-elementary</li>
          <li>Elementary</li>
          <li>Junior High School</li>
          <li>
            Senior High School
            <ul class="strands">
              <li>
                STEM, ABM, GAS, HUMSS, ICT, HE
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="level-1">
        <span>College Department</span>
        <ul>
          <li>B.S. in Information Technology</li>
          <li>Associate in Computer Technology</li>
          <li>Associate in Hotel and Restaurant Management</li>
        </ul>
      </li>
    </ul>
  </div>

  <div class="bg">
    <img src="{{ asset('spccweb/img/circle-pattern-white.svg') }}" class="circle-pattern-small" />
    <img src="{{ asset('spccweb/img/circle-pattern-white.svg') }}" class="circle-pattern-big" />
  </div>
</section>
<!-- end Programs Section -->

<!-- Latest News Section -->
<section class="section latest-news">
  <h2 class="headline">Latest News</h2>
  <article>
    <img src="{{ asset('spccweb/img/news/news1.jpg') }}" />
    <h3>
      <a href="article.html" class="title">
        S.Y. 2019-2020 School Opening
      </a>
    </h3>
    <div class="meta">
      Admin
      <span class="publish-date">Jun 24, 2019</span>
    </div>
    <div class="article-content">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt...
      </p>
      <a href="article.html" class="link">Read More</a>
    </div>
  </article>
  <article>
    <img src="{{ asset('spccweb/img/news/news2.jpg') }}" />
    <h3>
      <a href="article.html" class="title">
        Basketball: ADU vs SPCC
      </a>
    </h3>
    <div class="meta">
      Admin
      <span class="publish-date">Mar 17, 2019</span>
    </div>
    <div class="article-content">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt...
      </p>
      <a href="article.html" class="link">Read More</a>
    </div>
  </article>
  <article>
    <img src="{{ asset('spccweb/img/news/news3.jpg') }}" />
    <h3>
      <a href="article.html" class="title">
        Blessing and Opening of the New Gymnasium
      </a>
    </h3>
    <div class="meta">
      Admin
      <span class="publish-date">Dec 17, 2018</span>
    </div>
    <div class="article-content">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt...
      </p>
      <a href="article.html" class="link">Read More</a>
    </div>
  </article>

  <div class="bg">
    <img src="{{ asset('spccweb/img/circle-pattern.svg') }}" class="circle-pattern-small-top" />
    <img src="{{ asset('spccweb/img/circle-pattern.svg') }}" class="circle-pattern-big-top" />
    <img src="{{ asset('spccweb/img/circle-pattern.svg') }}" class="circle-pattern-small" />
    <img src="{{ asset('spccweb/img/circle-pattern.svg') }}" class="circle-pattern-big" />
  </div>
</section>
<!-- end Latest News Section-->
@endsection