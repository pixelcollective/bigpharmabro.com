<?php
/*
Template Name: App
*/
?>

<?php get_header(); ?>
<div class="row">
  <div id="content_pane" class="medium-8 columns" data-sticky-container>
    <div class="jphone">
      <div class="jgreybar jwide">
        <div class="jgreytop">&bull;&bull;&bull;&bull;&bull; <a href="http://candylandcouture.b1.jcink.com/index.php?showuser=3717">O98</a> LTE 

          <script type="text/javascript">
              function GetClock(){
              var d=new Date();
              var nhour=d.getHours(),nmin=d.getMinutes(),ap;
              if(nhour==0){ap=" AM";nhour=12;}
              else if(nhour<12){ap=" AM";}
              else if(nhour==12){ap=" PM";}
              else if(nhour>12){ap=" PM";nhour-=12;}

              if(nmin<=9) nmin="0"+nmin;

              document.getElementById('clockbox').innerHTML="<h3>"+nhour+":"+nmin+ap+"</h3>";
              }

              window.onload=function(){
              GetClock();
              setInterval(GetClock,1000);
              }
          </script>
          <div id="clockbox"></div>
          <h4>70%</h4></div>
    
    <h2><span>&lsaquo;</span> Messages</h2>
    <h1>BigPharmaBro</h1>
    <h2>Details</h2>
    
  </div>
<div class="iphone">
  <div class="border">
    <form class="chat">
      <span></span>
      <div class="messages" id="adobewordpress">
      <div class="message">
          <div class="fromThem">
            <p>Got a congressional hearing today</p>
            <date><b>BigPharmaBro</b></date>
          </div>
        </div>
        <div class="message">
          <div class="myMessage">
            <p>Oh man, you nervous?</p>
            <date><b>John Doe</b></date>
          </div>
        </div>
        <div class="message">
          <div class="fromThem">
            <p>LOL</p>
            <date><b>BigPharmaBro</b></date>
          </div>
        </div>
        <div class="message">
          <div class="myMessage">
            <p>?</p>
            <date><b>John Doe</b></date>
          </div>
        </div>
        <div class="message">
          <div class="fromThem">
            <p>Spent like $5,982,500 lobbying politicians this year</p>
            <date><b>BigPharmaBro</b></date>
          </div>
        </div>
        <div class="message">
          <div class="myMessage">
            <p>😕</p>
            <date><b>John Doe</b></date>
          </div>
        </div>
        <div class="message">
          <div class="fromThem">
            <p>If Halliburton is ok I'm definitely gonna be fine</p>
            <date><b>BigPharmaBro</b></date>
          </div>
        </div>
        <div class="message">
          <div class="myMessage">
            <p>You're the worst</p>
            <date><b>John Doe</b></date>
          </div>
        </div>
        <div class="message">
          <div class="fromThem">
            <p>👍</p>
            <date><b>BigPharmaBro</b>2</date>
          </div>
        </div>
        <?php include('parts/mobile-call-to-action.php'); ?>
      </div>
    </form>
  </div>
</div>
</div>
</div>
<?php include('parts/generic-desktop-call-to-action.php'); ?>
</div>

<div class="reveal" id="learnmoremodal" data-reveal>
  <h2>Information</h2>
  <p>Pharmaceuticals and health products (not including insurance) make up the most profitable industry sector in the world, and that sector spends more money on lobbying politicians than any other. <sup>1, 2, 3, 4</sup></p>
  <p>The pharmaceutical lobby has consistently won concessions in regards to Medicare and other insurances’ ability to negotiate drug prices (which is standard in other countries), as well as in regards to FDA oversight of their products; one study found that ever since pharma started making huge donations to the FDA, their review process has sped up, approving substantially more drugs that have later turned out to cause hospitalizations and deaths.<sup>5</sup></p>
  <h2>Sources</h2>
  <ol>
  <li>OpenSecrets.org, Lobbying/Health Products industry profile, 2016. http://www.opensecrets.org/lobby/indusclient.php?id=h04</li>
  <li>OpenSecrets.org, Lobbying by Top Industries, 1993-2016. https://www.opensecrets.org/lobby/top.php?indexType=i</li>
  <li>“Big Pharma,” Drug Watch, accessed April 2016. https://www.drugwatch.com/manufacturer/</li>
  <li>Chen, L. (2015). The Most profitable Industries in 2015. Forbes. http://www.forbes.com/sites/liyanchen/2015/09/23/the-most-profitable-industries-in-2015/#4b2d0a1a7712</li>
  <li>Light, D.W. (2013). Risky Drugs: Why the FDA Cannot be Trusted. Harvard University Center for Ethics blog. http://ethics.harvard.edu/blog/risky-drugs-why-fda-cannot-be-trusted </li>
  </ol>

<button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php get_footer(); ?>
