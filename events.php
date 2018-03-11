<?php require 'header.php' ?>
	<header id="main_menu" class="header navbar-fixed-top">            
                <div class="main_menu_bg" style="background-color:#429bf4">
                    <div class="container">
                        <div class="row">
                            <div class="nave_menu">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <!--<a class="navbar-brand" href="#home">
                                                <img width="65px" height="46px" src="assets/images/logo.png"/>
                                            </a>-->
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->



                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="/ayodhan18">Home</a></li>
                                                <li><a href="#about"> About us</a></li>
                                                <li><a href="/ayodhan18/sponsors.php">Sponsors</a></li>
                                                <li><a href="/ayodhan18/events.php">Events</a></li>
                                                <li><a href="#contact">Contact</a></li>

                                            </ul>


                                        </div>

                                    </div>
                                </nav>
                            </div>	
                        </div>

                    </div>

                </div>
            </header> <!--End of header -->

            <br /><br /><br />
            
            <!--<div class="container" id="events">
            
                <div class="event col-lg-4 col-md-4 col-sm-10 col-xs-10">
                    <div class="row">
                        <img class="img-responsive gameImage" src="assets/images/blog3.jpg" />
                    </div>
                    <p class="gameName"><strong>Cricket</strong></p>
                    <p class="gameText">
                        kdlaskldk;lsakdl;sakldksakdaskldk
                    </p>

                </div>
                
                <div class="event col-lg-4 col-md-4 col-sm-10 col-xs-10">
                    <div class="row">
                        <img class="img-responsive gameImage" src="assets/images/blog3.jpg" />
                    </div>
                    <p class="gameName"><strong>Cricket</strong></p>

                </div>               


            </div>-->

            <div class="row text-center" style="margin-top:5%;">
                <h2 style="font-weight:1000;">All Events</h2>
            </div>

            <hr />

            <div class="container" id="events">
            <div style="background-image:url('assets/images/cricket.jpg')" class="event col-lg-4 col-md-4 col-sm-10 col-xs-10"  data-toggle="modal" data-target="#exampleModal">
                    <div class="row text-center gameName">
                          Cricket
                    </div>
            </div>        
            

            <div style="background-image:url('assets/images/basketball.jpg')" class="event col-lg-4 col-md-4 col-sm-10 col-xs-10"  data-toggle="modal" data-target="#basketballModal">
                    <div class="row text-center gameName">
                          BasketBall
                    </div>
            </div>

            <div style="background-image:url('assets/images/volleyball.jpg')" class="event col-lg-4 col-md-4 col-sm-10 col-xs-10"  data-toggle="modal" data-target="#volleyballModal">
                    <div class="row text-center gameName">
                          VolleyBall
                    </div>
            </div>

            <div style="background-image:url('assets/images/chess.jpg')" class="event col-lg-4 col-md-4 col-sm-10 col-xs-10"  data-toggle="modal" data-target="#chessModal">
                    <div class="row text-center gameName">
                          Chess
                    </div>
            </div>

            <div style="background-image:url('assets/images/football.jpg')" class="event col-lg-4 col-md-4 col-sm-10 col-xs-10"  data-toggle="modal" data-target="#footballModal">
                    <div class="row text-center gameName">
                          FootBall
                    </div>
            </div>    

            <div style="background-image:url('assets/images/athletics.jpg')" class="event col-lg-4 col-md-4 col-sm-10 col-xs-10"  data-toggle="modal" data-target="#athleticsModal">
                    <div class="row text-center gameName">
                          Athletics
                    </div>
            </div>

            <div style="background-image:url('assets/images/kabaddi.jpg')" class="event col-lg-4 col-md-4 col-sm-10 col-xs-10"  data-toggle="modal" data-target="#kabaddiModal">
                    <div class="row text-center gameName">
                          Kabaddi
                    </div>
            </div>


            <div style="background-image:url('assets/images/tennis.jpg')" class="event col-lg-4 col-md-4 col-sm-10 col-xs-10"  data-toggle="modal" data-target="#lawntennisModal">
                    <div class="row text-center gameName">
                          Lawn Tennis
                    </div>
            </div>

            <div style="background-image:url('assets/images/badminton.jpg')" class="event col-lg-4 col-md-4 col-sm-10 col-xs-10"  data-toggle="modal" data-target="#badmintonModal">
                    <div class="row text-center gameName">
                          Badminton
                    </div>
            </div>


            <div style="background-image:url('assets/images/tt.jpg')" class="event col-lg-4 col-md-4 col-sm-10 col-xs-10"  data-toggle="modal" data-target="#tabletennisModal">
                    <div class="row text-center gameName">
                          Table Tennis
                    </div>
            </div>

            </div>

<!-- Modal -->
<div class="modal fade eventModal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cricket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Cricket - more a religion than a game in the country. And no wonder the culture is no different in the institute. A dedicated pitch and ground with flood lights, experienced coaching staff, the cricket players here are exposed to one of the best training facilities. The Intra Mural cricket competitions and CPL provide ample opportunities to show case the talent and thoroughly entertain the cricket lovers in the institute. No exaggeration saying that the team will be one of those opponents you want to defeat.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade eventModal" id="basketballModal" tabindex="-1" role="dialog" aria-labelledby="basketballLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Basket Ball</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Basket ball - 
If there's a game that's the talk of the institute on a daily basis, it's Basket Ball. The institute consists of two outdoor stadiums with synthetic courts and the flood lights make way for some exciting games at nights. The constant upgrading of the amenities and high class training is roping in lots others and this game is set to create new trends in the institute.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade eventModal" id="volleyballModal" tabindex="-1" role="dialog" aria-labelledby="basketballLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">VolleyBall</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Volleyball is one game that defines the true meaning of team work. The institute is engaged in providing world class training to the players and they have showcased it time by time in various competitions across the nation. Currently there are two flood lit courts in the institute.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade eventModal" id="basketballModal" tabindex="-1" role="dialog" aria-labelledby="volleyballLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BasketBall</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade eventModal" id="footballModal" tabindex="-1" role="dialog" aria-labelledby="basketballLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FootBall</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Football is perhaps the most thrilling, revered and demanding game in the contemporary world. Even in the institute a football game in the ground under flood lights by players no less professional with the crowd at their vociferous best is no less a wonderful sight than the coveted clashes in the international leagues. Always emerging as one of the top teams in the Inter NIT competitions, the football team is emerging as a force to reckon.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade eventModal" id="chessModal" tabindex="-1" role="dialog" aria-labelledby="basketballLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chess</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        If there's a game that eludes the prodigies on the planet, it's chess. What more intriguing than a chess board with it's 32 pieces to some of the brilliant minds in the nation? The players from the institute have always dominated the Inter NIT competitions and are eager to showcase their strategies on bigger states. Check into Ayodhan to check mate the kings here
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade eventModal eventModal" id="athleticsModal" tabindex="-1" role="dialog" aria-labelledby="basketballLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Athletics</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        For athletes it's always a battle against time. The players here have involved in many such races against time and continuously brought the best of their efforts. The institute has many flood lit professional tracks and coaching staff solely focusing on athletics. The relentless work ethics and support from the institute has always been awarded with some medal winning performances in the Inter NIT competitions.

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade eventModal" id="kabaddiModal" tabindex="-1" role="dialog" aria-labelledby="basketballLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kabaddi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Kabaddi might be the only game that actually justifies the referring of games as battles. Going alone into the opponent's court, evading the defenders, escaping the fierce jolts, balancing from being toppled and all the while trying to manage an infinitesimal tap on the opponent, ah, this game surely keeps everyone interesting all the time. As is the game, so should be the players. Come to NIT Warangal and make everyone stand on their toes.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade eventModal" id="lawntennisModal" tabindex="-1" role="dialog" aria-labelledby="basketballLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">lawntennis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Certainly the most emerging game in the institute, tennis in the institute is building a fan club of it's own. A game lauded for it's physical, mental and emotional gains, tennis gathers all the required attention and support from the institute. At present there are three synthetic and a mud court in the campus and all are under flood lights. The institute team is also constantly bagging the top slots in the Inter NIT Competitions.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>


<div class="modal fade eventModal" id="tabletennisModal" tabindex="-1" role="dialog" aria-labelledby="basketballLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Table Tennis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Table tennis is a sport that can be mastered only through precise timing, agility and delicacy while handling the ball. Never allowing a breather while playing, table tennis is one of the most played games in the institute owing to the fact that it's an indoor game. The institute has many tennis tables located both at the indoor stadium and the student hostels.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade eventModal" id="badmintonModal" tabindex="-1" role="dialog" aria-labelledby="basketballLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Badminton</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Badminton has always received it's due attention in the institute. Players can always be seeing battling with rackets, trying to touch the shuttlecock in the opponent's court with their power hits. The three courts in the indoor stadium have witnessed numerous clashes and the coaches have been producing many professionals.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php require 'footer.php' ?>