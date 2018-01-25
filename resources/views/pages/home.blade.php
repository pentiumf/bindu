@extends('layouts.web')



@section('content')
<!-- Carousel -->
<div id="homeCarousel" class="owl-carousel">
    <div class="item" style="background-image: url(https://kylebstiff.files.wordpress.com/2013/05/christ-the-redeemer-large.jpg);">
      <h1>Brazil</h1>
    </div>

    <div class="item" style="background-image: url(https://www.monstersandcritics.com/lists/wp-content/uploads/2015/03/Seven-Wonders-of-the-World-Taj-Mahal-1024x630.png);">
      <h1>India</h1>
    </div>

    <div class="item" style="background-image: url(https://i.ytimg.com/vi/3aY9Se-J2ww/maxresdefault.jpg);">
      <h1>Egypt</h1>
    </div>

    <div class="item" style="background-image: url(http://travel.home.sndimg.com/content/dam/images/travel/fullset/2015/10/12/new-seven-wonders-machu-picchu.jpg.rend.hgtvcom.1280.960.suffix/1491581548990.jpeg);">
      <h1>Peru</h1>
    </div>

    <div class="item" style="background-image: url(http://doonup.com/wp-content/uploads/2017/10/The-Roman-Colosseum-Italy-slider.jpg);">
      <h1>Rome</h1>
    </div>
</div>
<!-- Carousel -->

<!-- Finder -->
<div id="FindSearchWrap">
    <div id="finderHeader">
      <h2>Book Now</h2>
    </div>
    <div class="home-tab-pannel">

      <ul class="clearfix">
        <li id="tab-li-first" class="find-tab current-flight-tab" data-find="find-2"><i class="fa fa-plane" aria-hidden="true"></i> Flight</li>
        <li class="find-tab" data-find="find-1"> <i class="fa fa-bed" aria-hidden="true"></i> Hotel</li>
      </ul>

    </div>

    <div class="finder-wrapper">

    <div id="find-1" class="finder clearfix">

    <div class="find-hotel-destination">
    <span>Destination</span>
    <input type="text" name="destination" placeholder="Enter Destination">
    </div>

    <div class="find-hotel-group-date">

    <div class="input-daterange input-group all-datepicker" id="hotel-datepicker">
    <div class="form-item">
      <label>Check In</label><span class="fontawesome-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
      <input class="input-sm form-control" type="text" id="hotel-start-date" name="start" placeholder="Select check in date" data-date-format="DD, MM d"/><span id="hotel-date-depart" class="date-text date-depart"></span>
    </div>
    <div class="form-item">
      <label>Check Out</label><span class="fontawesome-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
      <input class="input-sm form-control" type="text" id="hotel-end-date" name="end" placeholder="Select check out date" data-date-format="DD, MM d"/><span id="hotel-date-return" class="date-text date-return"></span>
    </div>
    </div>

    </div>

    <div class="find-hotel-group-select">


    <div class="selectholder">
    <label for="projectcompletion">Adult</label>
    <select name="rooms" id="rooms">
      <option value="0">0</option>
      <option value="1" selected>1</option>
      <option value="2">2</option>
      <option value="2">3</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">No rush</option>
    </select>
    </div>


    <div class="selectholder">
      <label for="projectcompletion">Child</label>
      <select name="adult" id="adult">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="2">3</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">No rush</option>
      </select>
    </div>

    <div class="selectholder">
      <label for="projectcompletion">Infants</label>
      <select name="adult" id="child">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="2">3</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">No rush</option>
      </select>
    </div>

    <div class="searchholder">
      <button type="submit" data-hover="SEARCH NOW" class="btn btn-slide"><span class="text">SEARCH NOW</span><span class="icons fa fa-long-arrow-right"></span></button>
    </div>

    </div>

    </div>

    <div id="find-2" class="finder current-finder  clearfix">


    <div class="find-hotel-destination flightFor">
    <span>Flying From</span>
    <input type="text" name="destination" placeholder="Enter Destination">
    </div>

    <div class="find-hotel-destination flightFor">
    <span>Flying To</span>
    <input type="text" name="destination" placeholder="Enter Destination">
    </div>

    <div id="flightDate" class="find-hotel-group-date">

    <div class="input-daterange input-group all-datepicker" id="flight-datepicker">
    <div class="form-item">
      <label>Departing</label><span class="fontawesome-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
      <input class="input-sm form-control" type="text" id="flight-start-date" name="start" placeholder="Select departing date" data-date-format="DD, MM d"/><span id="flight-date-depart" class="date-text date-depart"></span>
    </div>
    <div class="form-item">
      <label>Returning</label><span class="fontawesome-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
      <input class="input-sm form-control" type="text" id="flight-end-date" name="end" placeholder="Select returning date" data-date-format="DD, MM d"/><span id="flight-date-return" class="date-text date-return"></span>
    </div>
    </div>

    </div>

    <div class="find-hotel-group-select ofFlight">


    <div class="selectholder">
      <label for="projectcompletion">Adult</label>
      <select name="adult" id="adult">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="2">3</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">No rush</option>
      </select>
    </div>

    <div class="selectholder">
      <label for="projectcompletion">Child</label>
      <select name="adult" id="child">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="2">3</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">No rush</option>
      </select>
    </div>

    <div class="selectholder">
      <label for="projectcompletion">Infant</label>
      <select name="infant" id="infant">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="2">3</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">No rush</option>
      </select>
    </div>

    <div class="searchholder">
      <button type="submit" data-hover="SEARCH NOW" class="btn btn-slide"><span class="text">SEARCH NOW</span><span class="icons fa fa-long-arrow-right"></span></button>
    </div>

    </div>

    </div>

    </div>
    </div>
</div>
<!-- End Finer -->

<!-- Top Tour Packages -->
<div class="home-tours">

  <div class="home-tours-wrapper clearfix">

    <div class="group-title">
      <div class="sub-title">
          <p class="text">BOOK AND GO</p>
          <i class="fa fa-male"></i>
      </div>
      <h2 class="main-title">Top Tour Destinations</h2>
    </div>

    <div class="tours-layout">
          <div class="image-wrapper">
              <a href="tour-view.html" class="link"><img src="https://www.visitdubai.com/-/media/optimised-images/itineraries/24%20hours%20in%20dubai/dubai-in-24-hours-panel-desktop.jpg" alt="" class="img-responsive"></a>
              <div class="title-wrapper"><a href="tour-view.html" class="title">dubai</a><i class="icons flaticon-circle"></i></div>
          </div>
          <div class="content-wrapper">
              <ul class="list-info list-inline list-unstyled">
                  <li><a href="homepage-03.html#" class="link"><i class="icons fa fa-eye"></i><span class="text number">234</span></a></li>
                  <li><a href="homepage-03.html#" class="link"><i class="icons fa fa-heart"></i><span class="text number">234</span></a></li>
                  <li><a href="homepage-03.html#" class="link"><i class="icons fa fa-comment"></i><span class="text number">234</span></a></li>
              </ul>
              <div class="content">
                  <div class="title">
                      <div class="price"><sup>$</sup><span class="number">250</span></div>
                      <p class="for-price">3 days 2 nights</p>
                  </div>
                  <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus ultrices purus, volutpat.</p>
                  <div class="group-btn-tours"><a href="tour-view.html" class="left-btn">book now</a></div>
              </div>
          </div>
      </div>


      <div class="tours-layout">
            <div class="image-wrapper">
                <a href="tour-view.html" class="link"><img src="http://www.telegraph.co.uk/content/dam/Travel/Destinations/Asia/Maldives/Maldives%20lead-xlarge.jpg" alt="" class="img-responsive"></a>
                <div class="title-wrapper"><a href="tour-view.html" class="title">Maldives</a><i class="icons flaticon-circle"></i></div>
            </div>
            <div class="content-wrapper">
                <ul class="list-info list-inline list-unstyled">
                    <li><a href="homepage-03.html#" class="link"><i class="icons fa fa-eye"></i><span class="text number">234</span></a></li>
                    <li><a href="homepage-03.html#" class="link"><i class="icons fa fa-heart"></i><span class="text number">234</span></a></li>
                    <li><a href="homepage-03.html#" class="link"><i class="icons fa fa-comment"></i><span class="text number">234</span></a></li>
                </ul>
                <div class="content">
                    <div class="title">
                        <div class="price"><sup>$</sup><span class="number">250</span></div>
                        <p class="for-price">3 days 2 nights</p>
                    </div>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus ultrices purus, volutpat.</p>
                    <div class="group-btn-tours"><a href="tour-view.html" class="left-btn">book now</a></div>
                </div>
            </div>
        </div>


        <div class="tours-layout">
              <div class="image-wrapper">
                  <a href="tour-view.html" class="link"><img src="http://www.visiontours.com.au/wp-content/uploads/2014/08/foto1.jpg" alt="" class="img-responsive"></a>
                  <div class="title-wrapper"><a href="tour-view.html" class="title">india</a><i class="icons flaticon-circle"></i></div>
              </div>
              <div class="content-wrapper">
                  <ul class="list-info list-inline list-unstyled">
                      <li><a href="homepage-03.html#" class="link"><i class="icons fa fa-eye"></i><span class="text number">234</span></a></li>
                      <li><a href="homepage-03.html#" class="link"><i class="icons fa fa-heart"></i><span class="text number">234</span></a></li>
                      <li><a href="homepage-03.html#" class="link"><i class="icons fa fa-comment"></i><span class="text number">234</span></a></li>
                  </ul>
                  <div class="content">
                      <div class="title">
                          <div class="price"><sup>$</sup><span class="number">250</span></div>
                          <p class="for-price">3 days 2 nights</p>
                      </div>
                      <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus ultrices purus, volutpat.</p>
                      <div class="group-btn-tours"><a href="tour-view.html" class="left-btn">book now</a></div>
                  </div>
              </div>
          </div>


          <div class="home-more-tours">
            <a href="{{route('home.tours')}}" class="transparent-btn">more tours</a>
          </div>

</div>
</div>
<!-- Top Tour Packages -->

<!-- Top Hotel Packages -->
<div class="hotels">
  <div class="home-hotels-wrapper clearfix">

    <div class="group-title">
      <div class="sub-title">
          <p class="text">GUARANTEED QUALITY</p><i class="icons flaticon-people"></i>
        </div>
      <h2 class="main-title">hotels</h2>
    </div>


    <div class="hotels-layout">
        <div class="image-wrapper">
            <a href="hotel-view.html" class="link"><img src="https://images4.kenwoodtravel.co.uk/thumbs/138x80/images/properties/1878/M%C3%B6venpick-Hotel-Ibn-Battuta-Gate-Dubai-Oceana-Beach-Club---private-beach.jpg" alt="" class="img-responsive"></a>
            <div class="title-wrapper"><a href="hotel-view.html" class="title">Mövenpick Hotel</a>
                <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-80"><strong class="rating">5.00</strong> out of 5</span></div>
            </div>
            <!-- <div class="label-sale">
                <p class="text">sale</p>
                <p class="number">35%</p>
            </div> -->
        </div>
        <div class="content-wrapper">
            <div class="content">
                <div class="title">
                    <div class="price"><sup>$</sup><span class="number">30</span></div>
                    <p class="for-price">for person per night</p>
                </div>
                <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus lorem ipsum dolor consectete.</p>
                <div class="group-btn-tours"><a href="hotel-view.html" class="left-btn">book now</a></div>
            </div>
        </div>
    </div>

    <div class="hotels-layout">
        <div class="image-wrapper">
            <a href="hotel-view.html" class="link"><img src="https://traveldeals.company/wp-content/uploads/2017/11/The_Oberoi_Amarvilas_India_1.jpg" alt="" class="img-responsive"></a>
            <div class="title-wrapper"><a href="hotel-view.html" class="title">The Oberoi Amarvilas</a>
                <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-80"><strong class="rating">5.00</strong> out of 5</span></div>
            </div>
            <div class="label-sale">
                <p class="text">sale</p>
                <!-- <p class="number">35%</p> -->
            </div>
        </div>
        <div class="content-wrapper">
            <div class="content">
                <div class="title">
                    <div class="price"><sup>$</sup><span class="number">30</span></div>
                    <p class="for-price">for person per night</p>
                </div>
                <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus lorem ipsum dolor consectete.</p>
                <div class="group-btn-tours"><a href="hotel-view.html" class="left-btn">book now</a></div>
            </div>
        </div>
    </div>

    <div class="hotels-layout">
        <div class="image-wrapper">
            <a href="hotel-view.html" class="link"><img src="http://www.telegraph.co.uk/content/dam/Travel/hotels/articles/fifty-best-hotels/four-seasons-gresham-palace-xlarge.jpg" alt="" class="img-responsive"></a>
            <div class="title-wrapper"><a href="hotel-view.html" class="title">Four Seasons Hotel</a>
                <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-80"><strong class="rating">5.00</strong> out of 5</span></div>
            </div>
            <div class="label-sale">
                <p class="text">sale</p>
                <!-- <p class="number">35%</p> -->
            </div>
        </div>
        <div class="content-wrapper">
            <div class="content">
                <div class="title">
                    <div class="price"><sup>$</sup><span class="number">30</span></div>
                    <p class="for-price">for person per night</p>
                </div>
                <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus lorem ipsum dolor consectete.</p>
                <div class="group-btn-tours"><a href="hotel-view.html" class="left-btn">book now</a></div>
            </div>
        </div>
    </div>

    <div class="hotels-layout">
        <div class="image-wrapper">
            <a href="hotel-view.html" class="link"><img src="https://awscloudfront.kempinski.com/1116/_hab1211.jpg;width=1920;height=1080;mode=crop;anchor=middlecenter;autorotate=true;quality=90;scale=both;progressive=true;encoder=freeimage" alt="" class="img-responsive"></a>
            <div class="title-wrapper"><a href="hotel-view.html" class="title">kempinski hotel</a>
                <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-80"><strong class="rating">5.00</strong> out of 5</span></div>
            </div>
            <div class="label-sale">
                <p class="text">sale</p>
                <!-- <p class="number">35%</p> -->
            </div>
        </div>
        <div class="content-wrapper">
            <div class="content">
                <div class="title">
                    <div class="price"><sup>$</sup><span class="number">30</span></div>
                    <p class="for-price">for person per night</p>
                </div>
                <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus lorem ipsum dolor consectete.</p>
                <div class="group-btn-tours"><a href="hotel-view.html" class="left-btn">book now</a></div>
            </div>
        </div>
    </div>

    <div class="home-more-tours">
      <a href="" class="transparent-btn">more hotels</a>
    </div>


  </div>
</div>
<!-- Top Hotel Packages -->

<!-- Home Criuese -->
<div class="home-cruises">
  <div class="home-cruies-caption">
    <a href="#">learn more</a>
  </div>
</div>
<!-- Home Criuese -->

<!-- testinomials -->
<div class="travelers">
  <div class="group-title">
    <div class="sub-title">
        <p class="text">RELAX AND ENJOY</p><i class="fa fa-male"></i>
      </div>
    <h2 id="mainTilteTravel" class="main-title">BINDU HAPPY TRAVELERS</h2>
  </div>


  <div id="travelHome" class="owl-carousel">

    <div class="traveler">
        <div class="cover-image"><img src="https://res.cloudinary.com/hjp6lmmoa/image/upload/v1507552375/cover-image-3_wpgbv7.jpg" alt=""></div>
        <div class="wrapper-content">
            <div class="avatar"><img src="https://res.cloudinary.com/hjp6lmmoa/image/upload/v1507552367/avatar-3_tijgyq.jpg" alt="" class="img-responsive"></div>
            <p class="name">Sandara park</p>
            <p class="address">roma, italy</p>
            <p class="description">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."</p>
        </div>
    </div>

    <div class="traveler">
        <div class="cover-image"><img src="https://res.cloudinary.com/hjp6lmmoa/image/upload/v1507552375/cover-image-3_wpgbv7.jpg" alt=""></div>
        <div class="wrapper-content">
            <div class="avatar"><img src="https://res.cloudinary.com/hjp6lmmoa/image/upload/v1507552367/avatar-3_tijgyq.jpg" alt="" class="img-responsive"></div>
            <p class="name">Sandara park</p>
            <p class="address">roma, italy</p>
            <p class="description">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."</p>
        </div>
    </div>

    <div class="traveler">
        <div class="cover-image"><img src="https://res.cloudinary.com/hjp6lmmoa/image/upload/v1507552375/cover-image-3_wpgbv7.jpg" alt=""></div>
        <div class="wrapper-content">
            <div class="avatar"><img src="https://res.cloudinary.com/hjp6lmmoa/image/upload/v1507552367/avatar-3_tijgyq.jpg" alt="" class="img-responsive"></div>
            <p class="name">Sandara park</p>
            <p class="address">roma, italy</p>
            <p class="description">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."</p>
        </div>
    </div>

  </div>
</div>
<!-- testimonials -->


@stop
