<!DOCTYPE html>
<html>
 <head lang="en" xmlns:https="http://www.w3.org/1999/xhtml">
   <meta charset="UTF-8">
   <title>piha</title>
   <style type="text/css">
     #header {
       font-family: cursive;
       font-size: 20pt;
       color: #576333;
       padding-bottom: 20px;
     }
     #svg {
       width: 900px;
       background-color: inherit;
     }
     .graph .labels.x-labels {
       text-anchor: middle;
     }

     .graph .labels.y-labels {
       text-anchor: end;
     }

     .graph {
       height: 540px;
       width: 510px;
       border: 2px solid black;
       background: #e3d9da;
     }

     .graph .grid {
       sstroke: #acb299;
       stroke: black;
       stroke-dasharray: 0;
       stroke-width: 1;
     }

     .labels {
       font-size: 13px;
     }

     .label-title {
       font-weight: bold;
       text-transform: uppercase;
       font-size: 12px;
       fill: black;
     }

     .data {
       fill: #bb4b64 ;
       stroke-width: 1;
       opacity: 60%;
     }

     .top div {
       display: inline-block;
     }

     #resultSet {
       border-collapse: collapse;
     }
     #tableHead {
       border-bottom: 3px solid #B9B29F;
       padding: 10px;
       text-align: left;
     }
     .tableCell {
       padding: 10px;
     }
     .tableCell:nth-child(odd) {
       background: white;
     }
     .tableCell:nth-child(even) {
       background: #acb299;
     }
     .tableCell td {
       padding-left: 5px;
     }
   </style>
   <script src="http://code.jquery.com/jquery-latest.js"></script>
   <script src="lib/date.format.js"></script>
   <script type="text/javascript">
     $(function(){
       var counter = 0;
       $(".graph").on('click', function(e){
           e.preventDefault();
           $.ajax({
             type: "POST",
             url: "table.php",
             data: 'attrib='+$(e.target).attr("class"),
             success: function(response){
               var answer = response.split(" ");
               counter++;
               addToTable(answer[1], answer[2]);
               }
           });
       });

       function addToTable (hit, stime){
         $("#resultSet tr:last").after('<tr class="tableCell"><td>'+counter+'</td><td>'+hit+'</td><td>'+new Date().format("dd mmm HH:MM:ss")+'</td><td>'+stime+'</td></tr>');
       }


       $('.radcheck').click(function(){
         $('.radcheck').removeAttr('checked','checked');
         $(this).prop('checked', true);
       });
     });

    function pognali(){
      var sos = 0;
      var yok = false;
      var radius = 0;
      let xar = new Array();
      var minx;
      var maxx;
      var xdim = $('.xdim').each(function(){
         if ($(this).prop('checked') == true){
           sos++;
           xar.push($(this).val());
           maxx = Math.max.apply(Math, xar);
           minx = Math.min.apply(Math, xar);
         }
       });

      var ydim = $('#ydim').val();
      var reg = /^-?[0-5]..-?[0-5]$/
      yok = reg.test(ydim);
      var dig = ydim.split('..');
      if (yok && (dig[0]<dig[1])) {
        yok = true;
      } else {
        yok = false;
      }

      $('.radcheck').each(function(){
        if ($(this).prop('checked') == true){
          radius = $(this).val();
        }
      });


      if ((sos < 2) || !yok){
        $('.form').after('<div id="kotae">Data error</div>');
      } else {
        $('#kotae').remove();
        doIT(maxx, minx, dig[0], dig[1]);
        doFig(radius)
      }
     }

     function doIT(maxx, minx, miny, maxy){
       var point = 20;
       for (var i = -5; i < 6; i++) {
         if (minx == i) {
           minx = point;
         }
         if (maxx == i) {
           maxx = point;
         }
         if (miny == i) {
           miny = point;
         }
         if (maxy == i){
           maxy = point;
         }
         point+=50;
       }
       $('#xline').attr('x1',minx);
       $('#xline').attr('x2',maxx);
       $('#xtrig').attr('points', maxx+',265 '+maxx+',275 '+(maxx+20)+',270');
       $('#xp').attr('x', maxx+10);
       $('#yline').attr('y1',miny);
       $('#yline').attr('y2',maxy);
       $('#ytrig').attr('points', '270,'+(miny-20)+' 265,'+miny+' 275,'+miny);
       $('#yp').attr('y',miny-10);
     }

     function doFig(r){
       r*=50;
       var rh = r/2;
       var ostRec = 195+(75-rh);
       var poly = 270-rh;
       var ring = 270+rh;
       var pointy = 270-r;
       $('rect').attr('x', ostRec);
       $('rect').attr('width', rh);
       $('rect').attr('height', r);
       $('#triangle').attr('points', '270,'+poly+' '+poly+',270 270,270');
       $('path').attr('d','M 270 '+ring+' A '+rh+' '+rh+', 90, 0, 0, '+ring+' 270 L 270 270 Z');
       $('.ypoint').each(function(index){
         var kuda = (index*rh)+pointy;
         $(this).attr('y',kuda);
       });
       $('.xpoint').each(function(index){
         var kuda = (index*rh)+pointy;
         $(this).attr('x',kuda);
       });
     }
   </script>
 </head>
 <body>
   <div id="header">
     Яремко Роман Группа: R3236(P3202) Вариант: 202023
   </div>
   <div class="top">
         <div id="svg">
           <svg version="1.2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="graph" aria-labelledby="title" role="img">
             <title id="title">хех лол</title>
             <g class="grid x-grid" id="xGrid">
               <line id="yline" x1="270" x2="270" y1="20" y2="520"></line>
               <polygon id="ytrig" points="270,0 265,20 275,20" stroke="#acb299" fill="#acb299"></polygon>
             </g>
             <g class="grid y-grid" id="yGrid">
               <line fill="black" id="xline" x1="20" x2="420" y1="270" y2="270"></line>
               <polygon id="xtrig" points="420,265 420,275 440,270" stroke="#acb299" fill="#acb299"></polygon>
             </g>
             <g class="labels x-labels">
               <text class="xpoint" x="120" y="270">-r</text>
               <text class="xpoint" x="195" y="270">-r/2</text>
               <text class="xpoint" x="270" y="270">0</text>
               <text class="xpoint" x="345" y="270">r/2</text>
               <text class="xpoint" x="420" y="270">r</text>
               <text id="xp" x="430" y="265" class="label-title">x</text>
             </g>
             <g class="labels y-labels">
               <text class="ypoint" x="270" y="120">r</text>
               <text class="ypoint" x="270" y="195">r/2</text>
               <text class="ypoint" x="270" y="270"></text>
               <text class="ypoint" x="270" y="345">-r/2</text>
               <text class="ypoint" x="270" y="420">-r</text>
               <text id="yp" x="270" y="10" class="label-title">y</text>
             </g>
             <g class="data" data-setname="Our first data set">
                 <rect class="meichu" x="195" y="270" width="75" height="150"/>
                 <polygon id="triangle" class="meichu" points="270,195 195,270 270,270"></polygon>
                 <path class="meichu" fill="gray" d="M 270 345 A 75 75, 90, 0, 0, 345 270 L 270 270 Z"></path>
             </g>
           </svg>
         </div>
         <div class="form">
           <form>
             <table>
               <tr>
                 <td></td>
                 <td>-5</td>
                 <td>-4</td>
                 <td>-3</td>
                 <td>-2</td>
                 <td>-1</td>
                 <td>0</td>
                 <td>1</td>
                 <td>2</td>
                 <td>3</td>
               </tr>
               <tr>
                 <td>x</td>
                 <td><input type="checkbox" class="xdim" value="-5"></td>
                 <td><input type="checkbox" class="xdim" value="-4"></td>
                 <td><input type="checkbox" class="xdim" value="-3"></td>
                 <td><input type="checkbox" class="xdim" value="-2"></td>
                 <td><input type="checkbox" class="xdim" value="-1"></td>
                 <td><input type="checkbox" class="xdim" value="0"></td>
                 <td><input type="checkbox" class="xdim" value="1"></td>
                 <td><input type="checkbox" class="xdim" value="2"></td>
                 <td><input type="checkbox" class="xdim" value="3"></td>
               </tr>
             </table>
             <p>y</p><input id="ydim" type="text" name="ydim" placeholder="(-5..5)">
             <table>
               <tr>
                 <td></td>
                 <td>1</td>
                 <td>1.5</td>
                 <td>2</td>
                 <td>2.5</td>
                 <td>3</td>
               </tr>
               <tr>
                 <td>R</td>
                 <td><input class="radcheck" type="checkbox" name="radius" value="1"></td>
                 <td><input class="radcheck" type="checkbox" name="radius" value="1.5"></td>
                 <td><input class="radcheck" type="checkbox" name="radius" value="2"></td>
                 <td><input class="radcheck" type="checkbox" name="radius" value="2.5"></td>
                 <td><input class="radcheck" type="checkbox" name="radius" value="3" checked></td>
               </tr>
             </table>
             <input id="butt" type="button" onclick="pognali();">
           </form>
         </div>
   </div>
   <div>
     <table id="resultSet">
       <tr id="tableHead">
         <th>№</th>
         <th>Попадание</th>
         <th>Время</th>
         <th>Время работы скрипта</th>
       </tr>
     </table>
   </div>
 </body>
</html>
