@extends('frontmaster')

@section('title')
Welcome To Drumcondra FC: One Club - One Community
@endsection
@section('content')
<section class="news_and_fixtures">

        <div class="news_and_fixtures-news carousel">
            @if($articles)
            @foreach($articles as $article)
        <a href="/newsitem/{{$article->id}}">
                <div class="slide fade">
                    @if($article->img)
                <img src="{{$article->img}}" class="slide-img">
                    @else
                    <img src="{{$article->img}}" alt="" class="slide-img">
                    @endif
                    <h1 class="slide-headline from-left">
                        {{$article->title}}
                    </h1>
                    <p class="slide-text">
                        {{$article->headline}}
                    </p>
                </div>
            </a>
            @endforeach
            @endif
            <!--
            <div class="slide fade">
                <img src="http://placehold.it/500x500" alt="" class="slide-img">
                <h1 class="slide-headline from-left">News Item 2</h1>
                <p class="slide-text">This is subtext</p>
            </div>
            <div class="slide fade">
                <img src="http://placehold.it/600x600" alt="" class="slide-img">
                <h1 class="slide-headline from-left">News Item 3</h1>
                <p class="slide-text">This is subtext</p>
            </div>
            -->

        </div>



        <div class="news_and_fixtures-fixtures">
            <div class="fixture1">

                <h1>
                    <a href="/fixtures"> Fixtures
                        <i class="fas fa-forward"></i>
                    </a>
                </h1>
                <div class="card card-small border-top-navy">
                    <div class="card-header">
                        @foreach($featured_fixtures as $fix)
                        <div class="card-header-details">
                            <h3>
                                {{$fix->date}}
                            </h3>
                            <br>
                            <!-- <h4>Division X</h4> -->
                            <h2>
                               {{$fix->squad}}
                            </h2>
                        </div>
                        <div class="card-header-image">
                            <i class="fas fa-calendar-alt navy-text "></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="team1">
                            {{$fix->home_team}}
                        </div>
                        <div class="vs">
                            V's
                        </div>
                        <div class="team2">
                            {{$fix->away_team}}
                        </div>
                    </div>
                    <div class="card-action">
                        <p>
                            <h2>Location:
                                {{$fix->location}}
                            </h2>
                            <h3>Time:
                                {{$fix->time}}
                            </h3>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="fixture2">
                <h1>
                    @foreach ($featured_results as $res)
                    <a href="/results"> Results </a>
                    {{-- <a href="#" alt="More Fixtures and Results"> --}}
                        <i class="fas fa-forward"></i>
                    </a>
                </h1>
                <div class="card card-small navy white-text border-top-yellow">
                    <div class="card-header">
                        <div class="card-header-details">
                            <h3>
                                {{$res->date}}
                            </h3>
                            <br>
                            <!--<h4>Division X</h4>-->
                            <h2>
                                {{$res->squad}}
                            </h2>
                        </div>
                        <div class="card-header-image">
                            <i class="fas fa-trophy yellow-text "></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="team1">
                            {{$res->home_team}}
                        </div>
                        <div class="vs">
                            V's
                        </div>
                        <div class="team2">
                            {{$res->away_team}}
                        </div>
                    </div>
                    <div class="card-footer">
                        <div>
                            {{$res->home_team_score}}
                        </div>
                        <div> - </div>
                        <div>
                            {{$res->away_team_score}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </section>
    <div class="news_and_ads-background">

    </div>
    <section class="news_and_ads">
			<div class="news_and_ads-news">
				<h1>Latest News</h1>
				@foreach ($articles as $article)
				<div class="card card-large border-top-navy">
					<div class="card-image">
                        @if($article->img)
						<img src="/{{$article->img}}" alt="">
						@else
						<img src="/
                        {{$article->img}}}" alt="">
						@endif
					</div>
					<div class="card-content card-content-plain">
						<h4>
							{{$article->title}}
						</h4>
						<p>
							{{$article->headline}}
						</p>
					</div>
					<div class="card-footer">
                    <a href="newsitem/{{$article->id}}">Read More</a>
					</div>
                </div>
				 @endforeach
				<!--
				<div class="card card-large border-top-navy">
					<div class="card-image">
						<img src="http://placehold.it/200x200" alt="">
					</div>
					<div class="card-content card-content-plain">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt quaerat laborum dolores ratione quae ipsa.</p>
					</div>
					<div class="card-footer">
						<a href="#">Read More</a>
					</div>
				</div>
				<div class="card card-large border-top-navy">
					<div class="card-image">
						<img src="http://placehold.it/200x200" alt="">
					</div>
					<div class="card-content card-content-plain">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat corporis corrupti at in expedita consequatur.</p>
					</div>
					<div class="card-footer">
						<a href="#">Read More</a>
					</div>
				</div>
				<div class="card card-large border-top-navy">
					<div class="card-image">
						<img src="http://placehold.it/200x200" alt="">
					</div>
					<div class="card-content card-content-plain">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat corporis corrupti at in expedita consequatur.</p>
					</div>
					<div class="card-footer">
						<a href="#">Read More</a>
					</div>
				</div>
				<div class="card card-large border-top-navy">
					<div class="card-image">
						<img src="http://placehold.it/200x200" alt="">
					</div>
					<div class="card-content card-content-plain">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat corporis corrupti at in expedita consequatur.</p>
					</div>
					<div class="card-footer">
						<a href="#">Read More</a>
					</div>
				</div>
				<div class="card card-large border-top-navy">
					<div class="card-image">
						<img src="http://placehold.it/200x200" alt="">
					</div>
					<div class="card-content card-content-plain">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat corporis corrupti at in expedita consequatur.</p>
					</div>
					<div class="card-footer">
						<a href="#">Read More</a>
					</div>
				</div>
				-->



				<div class="news_and_ads-news-action">
					<a href="/news">More News</a>
				</div>
			</div>

			<div class="news_and_ads-ads">
                <div class="news_and_ads-ads_title">Sponsors</div>
				<div class="card border-navy sponsor-card">
					<div class="sponsor-card-img">
                        <a href="http://www.rocketchipwebsolutions.ie" target="_blank"><img src="/images/color_logo_transparent.png" alt=""></a>
                    </div>
				</div>
				<div class="card border-navy">
					Sponsor Two
				</div>
				<div class="card border-navy">
					Sponsor Three
				</div>

			</div>

        </section>
@endsection