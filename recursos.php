<?php 
   include("./head.php");
   echo '<link rel="stylesheet" href="../css/style.css">'
 ?>
<body>
  <?php     
      include("./transition-column.php");
   ?>
<center>
    <?php 
      include("./header.php");
    ?>
    <div id="site">
         <div id="content">
          <h1>Recursos SAGE</h1>
          <h2>Calculadoras y Graficadores</h2>
          <h3>Calcular soluciones de una ecuación de una variable</h3>
          <div class="compute">
           <script type="text/x-sage">
l =var('l')                 #Se declara la variable l=lambda
ecuacion=         #Se introduce la ecuacion  igualada a cero, por ejemplo l^2-2*l+5 
#################################################################################################
sol=solve( ecuacion==0,l)   
sol
           </script>
          </div>
          <h3>Calcular soluciones de una sistema algebraico de $2\times 2$.}</h3>
          <div class="compute">
           <script type="text/x-sage">
c1,c2=var('c1,c2')      # declaramos que c1 y c2 son variables
eq1=              # se escribe ecuación 1 
eq2=            # se escribe ecuación 2 
###########################################################################################
solve([eq1,eq2],c1,c2)    # comando para resolver el sistema
            </script>
          </div>
          <h3>Calculadora y Graficador de valores propios</h3>
          <div class="compute">
           <script type="text/x-sage">
A = matrix([[ , ],[ , ]])    #Introdusca la matriz del sistema
#############################################################################################################
sol=A.eigenvalues()
pretty_print(html(r"$\lambda_1 = %s$"  %latex(sol[1])))
pretty_print(html(r"$\lambda_2 = %s$"  %latex(sol[0])))
VI=[[ real_part(sol[0]), imag_part(sol[0])], [ real_part(sol[1]), imag_part(sol[1])]]
dd=sum((point((VI[i][0],VI[i][1]),size=30,zorder=4)+text(r"$%s$"%latex(sol[i]) ,(VI[i][0]+0.1,VI[i][1]+0.1), fontsize=14,horizontal_alignment='left')) for i in range(len(VI)))
ejes=sqrt(max(norm(ComplexNumber(real_part(sol[0]), imag_part(sol[0]))),norm(ComplexNumber(real_part(sol[1]), imag_part(sol[1])))))
dd.show(frame=True, title='$Valores\ pripios\ \lambda$',axes_labels=['$Re(\lambda)$','$Im(\lambda)$',], xmax = ejes, xmin = -ejes, ymax = ejes, ymin = -ejes, aspect_ratio=1,gridlines=True)
           </script>
          </div>
          <h3>Lineas para calcular  valores, vectores propios y su multiplicidad</h3>
          <p>Devuelve una lista de ternas que se lee como</p>
          $$\mathtt{[(valor\ propios,\ vector\  propio,\ multiplicidad), ...]}$$ 
          <div class="compute">
           <script type="text/x-sage">
A = matrix([[ , ],[ , ]])    #Introdusca la matriz del sistema
A.eigenvectors_right()
          </script>
          </div>
          <h3>Lineas para obtener de un sistema de ecuaciones diferenciales con coeficientes y lineal.</h3>
          <div class="compute">
           <script type="text/x-sage">
t = var('t')
x = function('x')(t)
y = function('y')(t)
f =                                 #Se introduce pimera ecuacion diferencial, por ejemplo  -x +4*y 
g =                                 #Se introduce segunda ecuacion diferencial, por ejemplo   -2*x +3*y
[t0,x0,y0]=[ , , ]                  #Se introducen las condiciones iniciales , por ejemplo [0,1,1]      
sol = desolve_system([diff(x,t) == f, diff(y,t) == g], [x,y], ics=[t0,x0,y0])
ss=[sol[0],sol[1]]
ss
          </script>
          </div>
          <h3>Graficador de una funciones de una  variable.</h3>
          <div class="compute">
           <script type="text/x-sage">
t = var('t')              #se declara la variable t
x(t)=           #se introduce la funcion x de variable t
ti=                       # se coloca valor inicial de t para graficar  
tf=                       # se coloca valor inicial de t para graficar  
###############################################################################################
plot(x(t), (t, ti, tf), color ='red', legend_label='$x(t)$', legend_color='red',thickness=3)
           </script>
          </div>
          <h3>Graficador de dos funciones de una  variable.</h3>
          <div class="compute">
           <script type="text/x-sage">
t = var('t')              #se declara la variable t
x(t)=           #se introduce la funcion x de variable t
y(t)=           #se introduce la funcion y de variable t 
ti=                       # se coloca valor inicial de t para graficar  
tf=                       # se coloca valor inicial de t para graficar
###############################################################################################
P=plot(x(t), (t,ti, tf), color ='red', legend_label='$x(t)$', legend_color='red',thickness=3)
P+=plot(y(t), (t,ti, tf), color ='blue', legend_label='$y(t)$', legend_color='blue',thickness=3)
P
            </script>
          </div>
          <h3>Graficador de la trayectoria dada por las funciones $x(t)$ y  $y(t)$.</h3>
          <div class="compute">
           <script type="text/x-sage">
from sage.manifolds.utilities import set_axes_labels    
t = var('t')              #se declara la variable t
x(t)=           #se introduce la funcion x de variable t
y(t)=           #se introduce la funcion y de variable t 
ti=                       # se coloca valor inicial de t para graficar  
tf=                       # se coloca valor inicial de t para graficar
###############################################################################################
parametric_plot3d((t, x(t), y(t)), (t,ti, tf),color='purple',thickness=6) 
            </script>
          </div>
          <h3>Graficador del recorrido dado por las funciones $x(t)$ y  $y(t)$.</h3>
          <div class="compute">
           <script type="text/x-sage">
t = var('t')              #se declara la variable t
x(t)=           #se introduce la funcion x de variable t
y(t)=           #se introduce la funcion y de variable t 
ti=                       # se coloca valor inicial de t para graficar  
tf=                       # se coloca valor inicial de t para graficar
###############################################################################################
parametric_plot((x(t), y(t)), (t,ti, tf),axes_labels=['$x(t)$', '$y(t)$'],color='green',thickness=5)
          </script>
          </div>
          <h3>Graficador de diagrama de fase, diagrama de direcciones y vectores propios si son reales.</h3>
          <p>La forma en  se escribe una matriz  es:</p>
          $$
          \mathbf{A}=\begin{bmatrix}
          a&b\\
          c&d
          \end{bmatrix}\ \  \text{es}\ \  \mathtt{A = matrix([[a, b], [c, d]])}$$
          <p>Los Vectores propios se introducen en la forma:</p>
          $$
          \mathbf{v}=\begin{bmatrix}
          r\\
          s
          \end{bmatrix}\ \  \text{es}\ \  \mathtt{v = vector([r, s])}$$
          <p>Y  para agregar valores iniciales a la lista $\mathtt{VI}=[   ]$  solo se introducen separados por  comas ejemplo agregar $\mathtt{[0,7,3]}$  y $\mathtt{[1,2,3]}$ a la lista $\mathtt{VI}$ quedaría como  $\mathtt{VI}=[[0,7,3],[1,2,3]]$.</p>
          <div class="compute">
           <script type="text/x-sage">
A = matrix([[ , ],[ , ]])    #Introdusca la matriz del sistema
v1=vector([ , ])               #Introdusca vectro propio 1, si es complejo colocar ceros en ambas entras
v2=vector([ , ])               #Introdusca vector propio 2, si es complejo o  repetido colocar ceros en ambas entras
tfin=                    #VAlor final de t para gráfica 
dt=0.1                         #Puede modificar dt, si decrese la grafica es mas precisa y demora mas.
VI=[   ]                  #Introdusca mas valores iniciales en la forma [t0,x0,y0], no el vide las comas.
escala=1            #Es el zoom  para visualizar las gráficas
######################################################################################
x, y, t= var('x y t')
mvec=max(norm(v2),norm(v1))
mvi=max(norm(vector([VI[i][1],VI[i][2]])) for i in range(len(VI)))
ejes=escala*max(mvec,mvi)
P=plot(v1,thickness=3,color='red')
P+= text('$ \mathbf{v_1}$',(v1[0],v1[1]), fontsize=12,horizontal_alignment='right',color='red')
P+=plot(v2,thickness=3,color='blue')
P+=text('$\\mathbf{v_2}$',(v2[0],v2[1]), fontsize=12,horizontal_alignment='left',color='blue')
P+=line([-sqrt(2)*ejes*v1,sqrt(2)*ejes*v1],linestyle='--',thickness=2, color='red')
P+=line([-sqrt(2)*ejes*v2,sqrt(2)*ejes*v2],linestyle='--',thickness=2, color='blue')
#
F = [A[0,0]*x+A[0,1]*y,A[1,0]*x+A[1,1]*y]
Fn = [F[0]/sqrt(F[0]^2 + F[1]^2),F[1]/sqrt(F[0]^2 + F[1]^2)]
P+= plot_vector_field(Fn, (x,-ejes,ejes), (y,-ejes,ejes))
#
Tp=[desolve_system_rk4(F,[x, y],ics=[VI[i][0],VI[i][1],VI[i][2]],ivar=t,end_points=tfin,step=dt) for i in range(len(VI))]
Tn=[desolve_system_rk4(F,[x, y],ics=[VI[i][0],VI[i][1],VI[i][2]],ivar=t,end_points=-tfin,step=-dt) for i in range(len(VI))]
Rn = [ ([j,k] for i,j,k in Tn[m]) for m in range(len(VI)) ]
Rp = [ ([j,k] for i,j,k in Tp[m]) for m in range(len(VI)) ]
P+=sum( line(Rp[i], thickness=2, color='green') for i in range(len(VI)))
P+=sum( line(Rn[i], thickness=1,color='green' ) for i in range(len(VI)))
P+=sum( point((VI[i][1],VI[i][2]), color='red',size=30,zorder=4) for i in range(len(VI)))
P.show(frame=True,axes_labels=['$x(t)$','$y(t)$'] , xmax = ejes, xmin = -ejes, ymax = ejes, ymin = -ejes, aspect_ratio=1,gridlines=True)
            </script>
          </div>
          <h2>Recursos electrónicos</h2>
          <h3>Páginas de interés</h3>
          <p>Página oficial</p>
          <p><a href="http://www.sagemath.org/">http://www.sagemath.org/</a></p>
          <p>Tutorial de Sage en español.</p>
          <p><a href="http://doc.sagemath.org/html/es/tutorial/">http://doc.sagemath.org/html/es/tutorial/</a></p>
          <p>Descarga SAGE, es software libre disponible  para distintos sistemas operativos. </p>
          <p><a href="http://www.sagemath.org/download.html ">http://www.sagemath.org/download.html</a></p>
          <p>Documentacion de SAGE, varios idiomas, lo mas completo esta en ingles.</p>
          <p><a href="http://doc.sagemath.org/">http://doc.sagemath.org/ </a></p>
          <p>Foro de preguntas y respuestas en torno a SAGE (Ingles). </p>
          <p><a href="https://ask.sagemath.org/questions/">https://ask.sagemath.org/questions/</a></p>
          <p>Selda SAGE en linea.</p>
          <p><a href="https://sagecell.sagemath.org/">https://sagecell.sagemath.org/</a></p>
          <h3>Tutoriales PDF</h3>
          <p><a href="http://sedolanton.com/pdf/Beezer%20R.%20(sf).%20Sage%20Quick%20Reference_%20Linear%20Algebra.pdf">Beezer R. (sf). Sage Quick Reference: Linear Algebra</a></p>
          <p><a href="http://sedolanton.com/pdf/Joyner%20D.%20et%20al%20(2006).pdf">Joyner D. et al (2006). Solving ordinary differential equations.</a></p>
          <p><a href="http://sedolanton.com/pdf/Joyner%20D.%20y%20Hampton%20M.(2009)..pdf">Joyner D. y Hampton M.(2009). Introductory Differential Equations using Sage</a></p>
          <p><a href="http://sedolanton.com/pdf/T%C3%A1bara%20J.(2009).pdf">Tábara J.(2009) Matemáticas Elementales con Sage</a></p>
          <p><a href="http://sedolanton.com/pdf/UAM%20(2014).pdf">UAM (2014). Notas para  grado en Matemáticas -Python (SAGE)-Laboratorio.</a></p>
          <p><a href="http://sedolanton.com/pdf/Varona%20J.(2010).pdf">Varona J.(2010). Una visita rápida a SAGE</a></p>
          <p><a href="http://sedolanton.com/pdf/Yanajara%20H.%20(Trad).pdf">Yanajara H. (Trad). Manual de SAGE para principiantes</a></p>
          <p><a href="http://sedolanton.com/pdf/Zimmermann%20P%20et%20al.(2017).pdf">Zimmermann P et al.(2017). Differential Equations and Recurrences. En Zimmermann P et al.(2017), Mathematical Computation with SageMath (pp. 213-230).</a></p>
         </div>
    </div>
</center>
</body>