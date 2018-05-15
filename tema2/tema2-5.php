<?php 
   include("../head.php");
   echo '<link rel="stylesheet" href="../css/style.css">'
 ?>
<body>
  <?php     
      include("../transition-column.php");
   ?>
<center>
    <?php 
      include("../header.php");
    ?>
    <div id="site">
         <div id="content">
         	<h1>Método del eigenvalor para sistemas de $2\times2$</h1>
          <div class="compute">
            <script type="text/x-sage">
x, t = var('x,t')
@interact
def _(        f = input_box(default = x^2/2 - t),
                    t_min = input_box(default = -1.0), 
                    t_max = input_box(default = 6), 
                    t_start = input_box(default = 1), 
                    x_start = input_box(default = -0.1), 
                    step_size = (0.1, (0.001, 1.0))):
    P = desolve_rk4(f,x,ics=[t_start, x_start],ivar=t,end_points=[t_min, t_max], step = step_size, thickness=3)
    p = line(P, thickness = 2, axes_labels = ['$t$','$x$'],)
    x_min = min([P[i][1]] for i in (0..len(P)-1))[0]
    x_max = max([P[i][1]] for i in (0..len(P)-1))[0]
    p += plot_slope_field(f, (t, t_min, t_max), (x, x_min, x_max), headaxislength=3, headlength=3)
    p += arrow(P[int(len(P)/2)], P[int(len(P)/2) + 1], width = 1, arrowsize = 8)
    p += point((t_start, x_start), size=60, color="red")
    p.show()
    pretty_print(html(r"$\displaystyle\frac{dx}{dt} = %s$"  %latex(f)))
            </script>
          </div>
          <a href="tema1-3.php" id="ant">&#8249;</a>
          </div>
   </center>
   <?php 
      include("../arrow.php");
   ?>
   </body>
</html>