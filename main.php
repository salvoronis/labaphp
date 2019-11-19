<html>
 <head>
   <title>piha</title>
   <style type="text/css">
     #header {
       font-family: cursive;
       font-size: 20pt;
       color: green;
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
     }

     .graph .grid {
       stroke: #ccc;
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
       fill: red;
       stroke-width: 1;
       opacity: 50%;
     }

     .top div {
       display: inline-block;
     }
   </style>
 </head>
 <body>
   <!--<?php echo "suck"; ?>-->
   <div id="header">
     Яремко Роман Группа: R3236(P3202) Вариант: 202023
   </div>
   <div class="top">
         <div id="svg">
           <svg version="1.2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="graph" aria-labelledby="title" role="img">
             <title id="title">A line chart showing some information</title>
             <g class="grid x-grid" id="xGrid">
               <line x1="220" x2="220" y1="20" y2="420"></line>
               <polygon points="220,0 215,20 225,20" stroke="#ccc" fill="#ccc"></polygon>
             </g>
             <g class="grid y-grid" id="yGrid">
               <line x1="20" x2="420" y1="220" y2="220"></line>
               <polygon points="420,215 420,225 440,220" stroke="#ccc" fill="#ccc"></polygon>
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
              <a href="#">
                 <rect x="120" y="220" width="100" height="200"/>
                 <polygon points="220,120 120,220 220,220"></polygon>
                 <path d="M 220 320 A 100 100, 90, 0, 0, 320 220 L 220 220 Z"></path>
              </a>
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
                 <td><input type="checkbox" name="radius" value="1"></td>
                 <td><input type="checkbox" name="radius" value="1.5"></td>
                 <td><input type="checkbox" name="radius" value="2"></td>
                 <td><input type="checkbox" name="radius" value="2.5"></td>
                 <td><input type="checkbox" name="radius" value="3"></td>
               </tr>
             </table>
             <input type="submit">
           </form>
         </div>
   </div>
   <div>
     <table>
       <tr>
         <td>№</td>
         <td>Попадание</td>
         <td>Время</td>
         <td>Время работы скрипта</td>
       </tr>
       <tr>
         <td>1</td>
         <td>true</td>
         <td>24:61</td>
         <td>1 sec</td>
       </tr>
     </table>
   </div>
 </body>
</html>
