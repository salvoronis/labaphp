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
       height: 500px;
       width: 800px;
       border: 2px solid black;
       background: #e3d9da;
     }

     .graph .grid {
       stroke: #acb299;
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
               <line x1="220" x2="220" y1="20" y2="420"></line>
               <polygon points="220,0 215,20 225,20" stroke="#acb299" fill="#acb299"></polygon>
             </g>
             <g class="grid y-grid" id="yGrid">
               <line x1="20" x2="420" y1="220" y2="220"></line>
               <polygon points="420,215 420,225 440,220" stroke="#acb299" fill="#acb299"></polygon>
             </g>
             <g class="labels x-labels">
               <text x="20" y="220">-r</text>
               <text x="120" y="220">-r/2</text>
               <text x="220" y="220">0</text>
               <text x="320" y="220">r/2</text>
               <text x="420" y="220">r</text>
               <text x="430" y="215" class="label-title">x</text>
             </g>
             <g class="labels y-labels">
               <text x="220" y="20">r</text>
               <text x="220" y="120">r/2</text>
               <text x="220" y="320">-r/2</text>
               <text x="220" y="420">-r</text>
               <text x="230" y="10" class="label-title">y</text>
             </g>
             <g class="data" data-setname="Our first data set">
                 <rect class="meichu" x="120" y="220" width="100" height="200"/>
                 <polygon class="meichu" points="220,120 120,220 220,220"></polygon>
                 <path class="meichu" d="M 220 320 A 100 100, 90, 0, 0, 320 220 L 220 220 Z"></path>
             </g>
           </svg>
         </div>
         <div class="form">
           <form action="main.php" method="get">
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
                 <td><input type="checkbox" name="xdim" value="-5"></td>
                 <td><input type="checkbox" name="xdim" value="-4"></td>
                 <td><input type="checkbox" name="xdim" value="-3"></td>
                 <td><input type="checkbox" name="xdim" value="-2"></td>
                 <td><input type="checkbox" name="xdim" value="-1"></td>
                 <td><input type="checkbox" name="xdim" value="0"></td>
                 <td><input type="checkbox" name="xdim" value="1"></td>
                 <td><input type="checkbox" name="xdim" value="2"></td>
                 <td><input type="checkbox" name="xdim" value="3"></td>
               </tr>
             </table>
             <p>y</p><input type="text" name="ydim" placeholder="(-5..5)">
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
                 <td><input class="radcheck" type="checkbox" name="radius" value="2" checked></td>
                 <td><input class="radcheck" type="checkbox" name="radius" value="2.5"></td>
                 <td><input class="radcheck" type="checkbox" name="radius" value="3"></td>
               </tr>
             </table>
             <input type="submit">
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
