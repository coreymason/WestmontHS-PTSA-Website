<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Westmont PTSA</title>
  <meta name="description" content=""/>
  <meta name="keywords" content="" />
  <meta name="author" content="Corey Mason"/>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <meta property="og:title" content=""/>
  <meta property="og:description" content=""/>
  <meta property="og:type" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:image" content=""/>

  <link href="style.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
  <header>
    <div class="container-fluid">
      <div class="row">
        <div class="navigation">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="#home">Home</a></li>
                <li><a href="#">Bulletin</a></li>
                <li><a href="#">About Us</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <div id="home">
    <div id="slider" class="sl-slider-wrapper">
      <div class="sl-slider">
        <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
          <div class="sl-slide-inner">
            <div class="deco" data-icon="P"></div>
            <h2>A bene placito</h2>
            <blockquote><p>You have just dined, and however scrupulously the slaughterhouse is concealed in the graceful distance of miles, there is complicity.</p><cite>Ralph Waldo Emerson</cite></blockquote>
          </div>
        </div>

        <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
          <div class="sl-slide-inner">
            <div class="deco" data-icon="T"></div>
            <h2>Regula aurea</h2>
            <blockquote><p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p><cite>Albert Schweitzer</cite></blockquote>
          </div>
        </div>

        <div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
          <div class="sl-slide-inner">
            <div class="deco" data-icon="S"></div>
            <h2>Dum spiro, spero</h2>
            <blockquote><p>Thousands of people who say they 'love' animals sit down once or twice a day to enjoy the flesh of creatures who have been utterly deprived of everything that could make their lives worth living and who endured the awful suffering and the terror of the abattoirs.</p><cite>Dame Jane Morris Goodall</cite></blockquote>
          </div>
        </div>

        <div class="sl-slide bg-4" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
          <div class="sl-slide-inner">
            <div class="deco" data-icon="A"></div>
            <h2>Donna nobis pacem</h2>
            <blockquote><p>The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.</p><cite>Michael Klaper M.D.</cite></blockquote>
          </div>
        </div>
      </div>

      <nav id="nav-arrows" class="nav-arrows">
        <span class="nav-arrow-prev">Previous</span>
        <span class="nav-arrow-next">Next</span>
      </nav>

      <nav id="nav-dots" class="nav-dots">
        <span class="nav-dot-current"></span>
        <span></span>
        <span></span>
        <span></span>
      </nav>
    </div>
  </div>

  <footer>

  </footer>

  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js"></script>
  <script src="js/jquery.ba-cond.min.js"></script>
  <script src="js/jquery.slitslider.js"></script>
  <script type="text/javascript">
    $(function() {

      var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        $nav = $( '#nav-dots > span' ),
        slitslider = $( '#slider' ).slitslider( {
          onBeforeChange : function( slide, pos ) {

            $nav.removeClass( 'nav-dot-current' );
            $nav.eq( pos ).addClass( 'nav-dot-current' );

          }
        } ),

        init = function() {

          initEvents();

        },
        initEvents = function() {

          // add navigation events
          $navArrows.children( ':last' ).on( 'click', function() {

            slitslider.next();
            return false;

          } );

          $navArrows.children( ':first' ).on( 'click', function() {

            slitslider.previous();
            return false;

          } );

          $nav.each( function( i ) {

            $( this ).on( 'click', function( event ) {

              var $dot = $( this );

              if( !slitslider.isActive() ) {

                $nav.removeClass( 'nav-dot-current' );
                $dot.addClass( 'nav-dot-current' );

              }

              slitslider.jump( i + 1 );
              return false;

            } );

          } );

        };

        return { init : init };

      })();

      Page.init();

    });
  </script>

</body>
</html>
