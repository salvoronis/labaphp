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
     }
   </style>
 </head>
 <body>
   <?php echo "suck"; ?>
   <div id="header">
     Яремко Роман Группа: R3236(P3202) Вариант: 202023
   </div>
   <div id="svg">
     <svg version="1.2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="graph" aria-labelledby="title" role="img">
       <title id="title">A line chart showing some information</title>
       <g class="grid x-grid" id="xGrid">
         <line x1="395" x2="395" y1="5" y2="375"></line>
       </g>
       <g class="grid y-grid" id="yGrid">
         <line x1="90" x2="700" y1="185" y2="185"></line>
       </g>
       <g class="labels x-labels">
         <text x="100" y="190">-r</text>
         <text x="246" y="190">-r/2</text>
         <text x="392" y="190">0</text>
         <text x="538" y="190">r/2</text>
         <text x="684" y="190">r</text>
         <text x="710" y="190" class="label-title">x</text>
       </g>
       <g class="labels y-labels">
         <text x="395" y="15">r</text>
         <text x="395" y="131">r/2</text>
         <text x="395" y="248">-r/2</text>
         <text x="395" y="373">-r</text>
         <text x="395" y="5" class="label-title">y</text>
       </g>
       <g class="data" data-setname="Our first data set">
         <circle cx="90" cy="192" data-value="100.2" r="10"></circle>
        <a href="#">
           <rect x="295" y="185" width="100" height="200"/>
        </a>
       </g>
     </svg>
   </div>
 </body>
</html>
