<?php
/*
Template Name: Research and Development
*/
?>

<?php get_header(); ?>
<div class="row">
  <div id="content_pane" class="medium-8 columns">
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
          <div class="myMessage">
            <p>How come you charge so much money for my meds?</p>
            <date><b>John Doe</b></date>
          </div>
        </div>
        <div class="message">
          <div class="fromThem">
            <p>R&D is expensive</p>
            <date><b>BigPharmaBro</b></date>
          </div>
        </div>
        <div class="message">
          <div class="myMessage">
            <p>But this is crazy</p>
            <date><b>John Doe</b></date>
          </div>
        </div>
        <div class="message">
          <div class="fromThem">
            <p>R&D is expensive</p>
            <date><b>BigPharmaBro</b></date>
          </div>
        </div>
        <div class="message">
          <div class="myMessage">
            <p>But most R&D is done with tax dollars and in universities. I already paid for this shit!</p>
            <date><b>John Doe</b></date>
          </div>
        </div>
        <div class="message">
          <div class="fromThem">
            <p>R&D is expensive</p>
            <date><b>BigPharmaBro</b></date>
          </div>
        </div>
        <div class="message">
          <div class="myMessage">
            <p>Dude, what?</p>
            <date><b>John Doe</b></date>
          </div>
        </div>
        <div class="message">
          <div class="fromThem">
            <p>Oh sorry, auto responder was on. What’s up?</p>
            <date><b>BigPharmaBro</b></date>
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
  <p>American taxpayers fund an enormous chunk of the research that leads to the development of new drugs, in the form of public universities, government grants, and the National Institute of Health. <sup>1, 2, 3</sup></p>
<p>Drug corporations commonly claim that it costs $1 billion to bring a new drug to market. But that figure has several problems: first, it’s taken from a single 2003 study from the pharma-funded Tufts Center for the Study of Drug Development. Second, that study relied on R&D costs that drug corporations submitted themselves on a confidential basis. <sup>1</sup> But most importantly, it’s based on shoddy math. A second, independent review of the Tufts Center study in 2011 found that the cost is closer to $55 million - half of what drug corporations claim. <sup>1, 2</sup></p>
<p>In fact, 84% of the initial basic research - the work that lays the foundation for clinical trials and applied research - for developing a new drug is funded by the government, and private universities provide additional, unspecified funding (1, 2). And while drug companies do pay millions each year for development, that money largely goes to clinical trials (testing drugs that could never have been made without that initial basic research), and makes up a fraction of the billions of dollars in profit the pharma industry makes every year. <sup>1, 2, 3</sup> </p>
  <h2>Sources</h2>
  <ol>
  <li>Noah, T. (2011). The Make-Believe Billion. Slate.  http://www.slate.com/articles/business/the_customer/2011/03/the_makebelieve_billion.html</li>
  <li>Light, D.W. and Warburton, R. (2011). Demythologizing the high costs of pharmaceutical research. BioSocieties. http://www.pnhp.org/sites/default/files/docs/2011/Biosocieties_2011_Myths_of_High_Drug_Research_Costs.pdf</li>
  <li>Light, D. (2006). Basic research funds to discover important new drugs: Who contributes how much? Monitoring the Financial Flows for Health Research 2005: Behind the Global Numbers. https://www.researchgate.net/publication/242636013_Basic_research_funds_to_discover_important_new_drugs_Who_contributes_how_much</li>
  </ol>

<button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php get_footer(); ?>
