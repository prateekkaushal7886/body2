<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">

.col-sm-10
{
	box-shadow: 3px 3px 6px 6px rgba(0,0,0,.4);
	background-image: url('2.4.jpg');
	
}



.col-sm-10:hover
{
	box-shadow: 5px 5px 10px 10px rgba(0,0,255,.3);
	background-image: url('6.jpg');
}
p
{
	font-size: 160%;
	font-weight: bold;
}

.thumbnail
{
	box-shadow: 3px 3px 6px 6px rgba(0,0,0,.4);
}




h2
{
	font-weight: bold;
}








.flip {
  -webkit-perspective: 800;   
          perspective: 800;
        position: relative;
        text-align: center;
}
.flip .card.flipped {
  -webkit-transform: rotatey(-180deg);
          transform: rotatey(-180deg);
}
.flip .card {
    width: 270px;
    height: 178px;
    -webkit-transform-style: preserve-3d;
    -webkit-transition: 0.5s;
    transform-style: preserve-3d;
    transition: 0.5s;
    background-color: #fff;
   
}
.flip .card .face {
  -webkit-backface-visibility: hidden ;
    backface-visibility: hidden ;
   z-index: 2;
}
.flip .card .front {
   position: absolute;
   width: 270px;
   z-index: 1;
}
.flip .card .img {
   position: relaitve;
   width: 270px;
   height: 178px;
   z-index: 1;
   border: 2px solid #000;
}
.flip .card .back {
  padding-top: 10%;
  -webkit-transform: rotatey(-180deg);
          transform: rotatey(-180deg);
}
  .inner{margin:0px !important;}

























</style>
 


 <body>
  	<br /><br />
<div class="col-sm-1"></div>
<div class="col-sm-10">
	
<p>
	The Students' Alumni Cell, IIT Kharagpur is a voluntary student body working under the aegis 
                      of the Dean of Alumni Affairs and International Relations. It strives to bridge the gap between 
                      IIT Kharagpur and its esteemed alumni community.<br>
                            <br>
                       The Students' Alumni Cell continuously endeavours to strengthen the relations of 
                       the alumni of this Institute and their alma mater. 
                       It has been instrumental in organising the Annual Alumni Meet, Regional Student Alumni Meet, 
                       regular guest lectures by distinguished alumni in the campus, publishing the annual 
                       literary magazine (Yearnings of Yore) & the annual yearbook.  
                       The Students' Alumni Cell also operates the Student - Alumni Mentorship Programme, My Imprint
                      (Giving Back - Alumni contribution) and organises Alvida (the annual farewell dinner).
</p>



</div> 

<div class="col-sm-1"></div>


<div class="col-sm-4"><br><br></div>
<div class="col-sm-4"><br><br></div>
<div class="col-sm-4"><br /><br></div>






<div class="row">
<div class="col-sm-3">
      <div class="flip">
        <div class="card"> 
          <div class="face front"> 
            <div class="inner"> 
            <div class="thumbnail">

              <img src="10.1.jpg" width="333">
              <div class="caption">
          <h2>Class Gift</h2>
        </div>
        </div>
            </div>
          </div> 
          <div class="face back"> 
            <div class="inner text-center"> 
            <h3>Senior Class Gift</h3>
              <em>The Senior Class Gift, an initiative under the My Imprint Programme saw a large number of graduating students signing up for the programme. The programme gives an opportunity to the graduating batch to give something back to the Institute, the moment they are about to leave the Institute.</em>
              
            </div>
          </div>
        </div>	 
      </div>
    </div>
  <div class="col-sm-3">
      <div class="flip">
        <div class="card"> 
          <div class="face front"> 
            <div class="inner">  
            <div class="thumbnail"> 
              <img src="10.2.jpg" width="315">
               <div class="caption">
          <h2>Mentorship</h2>
        </div>
        </div>
            </div>
          </div> 
          <div class="face back"> 
            <div class="inner text-center"> 
              <h3>Mentorship</h3>
             <em> Students’ Alumni Cell brings to you Student Alumni Mentorship Programme. A plat form to share the valuable experience of our esteemed alumni community with the current students. For more Information, Kindly check out Mentorship Website.</em>
              
            </div>
          </div>
        </div>	 
      </div>
    </div>
  <div class="col-sm-3">
      <div class="flip">
        <div class="card"> 
          <div class="face front"> 
            <div class="inner">  
            <div class="thumbnail"> 
              <img src="10.3.jpg" width="315">
               <div class="caption">
          <h2>Guest Lecture</h2>
        </div>
        </div>
            </div>
          </div> 
          <div class="face back"> 
            <div class="inner text-center"> 
             <h3>Guest Lecture</h3>
              <em>Continuing with its yearlong series of Guest Lectures by eminent alumni, the Students’ Alumni Cell recently organised "Tips from Top", an open house with prominent alumni in the fields of Entrepreneurship, Civil Services and Research.</em>
            </div>
          </div>
        </div>	 
      </div>
    </div>
  <div class="col-sm-3">
      <div class="flip">
        <div class="card"> 
          <div class="face front"> 
            <div class="inner">   
            <div class="thumbnail">
              <img src="10.4.jpg" width="315">
               <div class="caption">
          <h2>Yearbook</h2>
        </div>
        </div>
            </div>
          </div> 
          <div class="face back"> 
            <div class="inner text-center"> 
              <h3>Yearbook</h3>
              <em>The Yearbook is a collection of photographs and memories presented every year at the time of the convocation to the graduating batch by the Students’ Alumni Cell. It is the perfect souvenir for everyone about to leave their home away from home, KGP.</em>
            </div>
          </div>
        </div>	 
      </div>
    </div>
  </div>




  </body>


<script type="text/javascript">
	






	$('.flip').hover(function(){
        $(this).find('.card').toggleClass('flipped');

    });
</script>