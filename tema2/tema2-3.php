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
            <h2>2.2. Reales distintos</h2>
            <p>En general, si los valores propios $\lambda_1, \lambda_2,\dots, \lambda_n$ son reales y distintos, entonces se pueden obtener respectivos vectores  propios asociados $\mathbf{v}_1, \mathbf{v}_2,\dots, \mathbf{v}_n$ los cuales son linealmente independientes. En síntesis,  el método de los valores propios para el caso  en que sean reales y distintos consiste en los siguientes pasos:  </p>
            <p><strong>Paso 1:</strong>Se resuelve la ecuación $\left|\mathbf{A}-\lambda\mathbf{I}\right| = 0$ para encontrar  los valores propios $\lambda_1, \lambda_2,\dots, \lambda_n$ de la matriz $\mathbf{A}$.</p>
            <p><strong>Paso 2:</strong>Se procede a encontrar los $n$ vectores propios linealmente independientes $\mathbf{v}_1, \mathbf{v}_2,\dots, \mathbf{v}_n$ asociados con estos eigenvalores.</p>
            <p><strong>Paso 3:</strong>Se obtienen $n$ soluciones linealmente independientes</p>
            $$
            \mathbf{x}_1 (t) = \mathbf{v}_1 e^{\lambda_1 t} , \hspace{2em}
            \mathbf{x}_2 (t) = \mathbf{v}_2 e^{\lambda_2 t} ,\hspace{2em}
            \dots,\hspace{2em}
            \mathbf{x}_n (t) = \mathbf{v}_n e^{\lambda_n t}
            $$
            <p>De este modo, la solución general de  $\mathbf{x}=\mathbf{A}\mathbf{x}$ esta dada por:</p>
            $$\mathbf{x}(t) = c_1  \mathbf{x}_1 (t) + c_2  \mathbf{x}_2 (t) + \dots + c_n  \mathbf{x}_n (t)$$
            <p>donde $c_1, c_2, \dots, c_n$ son constantes arbitrarias.</p>
            <br><hr><br><br>
            <p>Particularmente, para el caso de sistemas de $2\times 2$, primero se obtiene los valores propios $\lambda_1$ y $\lambda_2$, posteriormente se  obtienen respectivos  vectores propios $\mathbf{v_1}=\begin{bmatrix}v_{11}\\v_{12}\end{bmatrix}$ y $\mathbf{v_2}=\begin{bmatrix}v_{21}\\v_{22}\end{bmatrix}$, con esto la solución general de esta dada por: </p>   
            $$\mathbf{x}(t) = c_1\mathbf{x}_1(t) + c_2\mathbf{x}_2(t)$$
            donde 
            $$\mathbf{x}_1 (t) = \mathbf{v}_1 e^{\lambda_1 t} , \hspace{2em}
            \mathbf{x}_2 (t) = \mathbf{v}_2 e^{\lambda_2 t} ,\hspace{2em}
            $$
            <p>y de este modo la  solución general queda como:</p>
            \begin{align*}
            \mathbf{x}(t) =c_1\mathbf{v}_1 e{^\lambda_1 t}  + c_2\mathbf{v}_2 e^{\lambda_2t}&=
            c_1\begin{bmatrix}v_{11}\\v_{12}\end{bmatrix} e^{\lambda_1 t}  + c_2\begin{bmatrix}v_{21}\\v_{22}\end{bmatrix} e^{\lambda_2 t}\\&=
            \begin{bmatrix}c_1v_{11}e^{\lambda_1 t}\\c_1v_{12}e^{\lambda_1 t}\end{bmatrix}   + \begin{bmatrix}c_2v_{21}e^{\lambda_2 t}\\c_2v_{22}e^{\lambda_2 t}\end{bmatrix}\\&=
            \begin{bmatrix}c_1v_{11}e^{\lambda_1 t}+c_2v_{21}e^{\lambda_2 t}\\
            c_1v_{12}e^{\lambda_1 t}+c_2v_{22}e^{\lambda_2 t}\end{bmatrix}
            \end{align*}
            <p>Así, las funciones $x(t)$ y $y(t)$ que conforman la solución $\mathbf{x}(t)=\begin{bmatrix} x(t)\\y(t)\end{bmatrix}$  quedan determinadas como: </p>
             \begin{align*}
             x(t)&=c_1v_{11}e^{\lambda_1 t}+c_2v_{21}e^{\lambda_2 t}\\
             y(y)&=c_1v_{12}e{^\lambda_1 t}+c_2v_{22}e^{\lambda_2 t}
             \end{align*}
            <p>donde $c_1$ y $c_2$ son constantes  arbitrarias que, en caso de estar resolviendo un problema de valor inicial, quedan determinadas.   </p>
            <br><hr><br><br>
            <h2>Ejemplo</h2>
            <p>Para ejemplificar consideremos el sistema </p>
            \begin{align*}
            x'(t) &= 4x-3y\\
            y'(t) &= 6x-7y
            \end{align*}
            <p>Se escribe en la forma matricial $\mathbf{x'}=\mathbf{A}\mathbf{x}$ como:</p>
            $$\begin{bmatrix}
            x'  \\
            y'  \\
            \end{bmatrix}=\begin{bmatrix}
            4 & -3  \\
            6 & -7  \\
            \end{bmatrix}\begin{bmatrix}
            x  \\
            y  \\
            \end{bmatrix}$$
            <p>por lo tanto, la matriz de coeficientes es</p>
            $$\mathbf{A}=\begin{bmatrix}
            4 & -3  \\
            6 & -7  \\
            \end{bmatrix}$$
            <h3>Parte 1, Obtener la solución general.</h3>
            <p>Primero se procede a encontrar los valores propios resolviendo la ecuación  $\left|\mathbf{A}-\lambda\mathbf{I}\right| = 0$  como se muestra a continuación  </p>
           \begin{align*}
           \left|\mathbf{A}-\lambda\mathbf{I}\right| &= 0\\
           \left|\begin{bmatrix}
           4 & -3  \\
           6 & -7  \\
           \end{bmatrix}
           -\lambda\begin{bmatrix}
           1 & 0  \\
           0 & 1  \\
           \end{bmatrix}
           \right|&= 0\\
           \left|\begin{bmatrix}
           4 & -3  \\
           6 & -7  \\
           \end{bmatrix}
           -\begin{bmatrix}
           \lambda & 0  \\
           0 & \lambda  \\
           \end{bmatrix}
           \right|&= 0\\
           \begin{vmatrix}
           4-\lambda & -3  \\
           6 & -7-\lambda  \\
           \end{vmatrix}
           &= 0\\
           (4-\lambda)(-7 -\lambda) - (-3)(6) &= 0\\
           \lambda^2+3\lambda-10&= 0\\
           \end{align*}
          <p>esta ecuación de segundo grado se puede resolver mediante SAGE  al evaluar las siguientes  lineas que también generan una representación gráfica de lo valores propios en el plano complejo:</p>
          <div class="compute">
            <script type="text/x-sage">
l =var('l')             #Se declara la variable l=lambda 
sol=solve(l^2+3*l-10==0,l)  #Se introduce la ecuacion a resolver
pretty_print(html(r"$\lambda_1 = %s$"  %latex(sol[0].rhs())))
pretty_print(html(r"$\lambda_2 = %s$"  %latex(sol[1].rhs())))
VI=[[ real_part(sol[0].rhs()), imag_part(sol[0].rhs())], [ real_part(sol[1].rhs()), imag_part(sol[1].rhs())]]
dd=sum((point((VI[i][0],VI[i][1]),size=30,zorder=4)+text(r"$%s$"%VI[i][0] ,(VI[i][0]+0.1,VI[i][1]+0.1), fontsize=14,horizontal_alignment='left')) for i in range(len(VI)))
ejes=sqrt(max(norm(ComplexNumber(real_part(sol[0].rhs()), imag_part(sol[0].rhs()))),norm(ComplexNumber(real_part(sol[1].rhs()), imag_part(sol[1].rhs())))))
dd.show(frame=True, title='$Valores\ pripios\ \lambda$',axes_labels=['$Re(\lambda)$','$Im(\lambda)$',], xmax = ejes, xmin = -ejes, ymax = ejes, ymin = -ejes, aspect_ratio=1,gridlines=True)
            </script>
          </div>
          <p>Se tiene entonces que los valores propios son $\lambda_1 =-5$ y $\lambda_2=2$, con esto se procede a encontrar respectivos vectores propios resolviendo sistema $(\mathbf{A} - \lambda \mathbf{I})\mathbf{v} = 0$ para cada uno de valores propios. Esto se hará de forma simultanea para ambos:</p>
          <center>
          <table>
            <tr>
              <th>
                $\lambda_1=-5$
              </th>
              <th>
                $\lambda_2$=2
              </th>
            </tr>
            <tr>
              <td>
                $\begin{bmatrix}
                a-\lambda_1 & b  \\
                c & d -\lambda_1 \\
                \end{bmatrix}
                \begin{bmatrix}
                v_{11}\\
                v_{12}
                \end{bmatrix}=
                \begin{bmatrix}
                0\\
                0
                \end{bmatrix}$
              </td>
              <td>
                $\begin{bmatrix}
                a-\lambda_2 & b  \\
                c & d -\lambda_2 \\
                \end{bmatrix}
                \begin{bmatrix}
                v_{21}\\
                v_{22}
                \end{bmatrix}=
                \begin{bmatrix}
                0\\
                0
                \end{bmatrix}$
              </td>
            </tr>
            <tr>
              <td>
                $\begin{bmatrix}
                4-(-5) & -3 \\
                6 & - 7-(-5)\\
                \end{bmatrix}
                \begin{bmatrix}
                v_{11}\\
                v_{12}
                \end{bmatrix}=
                \begin{bmatrix}
                0\\
                0
                \end{bmatrix}$
              </td>
              <td>
                $\begin{bmatrix}
                4-2 & -3 \\
                6 & - 7-2
                \end{bmatrix}
                \begin{bmatrix}
                v_{21}\\
                v_{22}
                \end{bmatrix}=
                \begin{bmatrix}
                0\\
                0
                \end{bmatrix}$
              </td>
            </tr>
            <tr>
              <td>
                $\begin{bmatrix}
                9 & -3 \\
                6 & -2
                \end{bmatrix}
                \begin{bmatrix}
                v_{11}\\
                v_{12}
                \end{bmatrix}=
                \begin{bmatrix}
                0\\
                0
                \end{bmatrix}$
              </td>
              <td>
                $\begin{bmatrix}
                2 & -3 \\
                6 & -9
                \end{bmatrix}
                \begin{bmatrix}
                v_{21}\\
                v_{22}
                \end{bmatrix}=
                \begin{bmatrix}
                0\\
                0
                \end{bmatrix}$
              </td>
            </tr>
            <tr>
              <td>
                $\begin{bmatrix}
                9v_{11} & -3v_{12} \\
                6v_{11} & -2v_{12}
                \end{bmatrix}=
                \begin{bmatrix}
                0\\
                0
                \end{bmatrix}$
              </td>
              <td>
                $\begin{bmatrix}
                2v_{21} & -3v_{22} \\
                6v_{21} & -9v_{22}
                \end{bmatrix}=
                \begin{bmatrix}
                0\\
                0
                \end{bmatrix}$
              </td>
            </tr>
            <tr>
              <td>
                $\begin{matrix}
                9v_{11} & -3v_{12}=0 \\
                6v_{11} & -2v_{12}=0
                \end{matrix}$
              </td>
              <td>
                $\begin{matrix}
                2v_{21} & -3v_{22}=0 \\
                6v_{21} & -9v_{22}=0
                \end{matrix}$
              </td>
            </tr>
          </table>
        </center>
          <p>Para resolver este sistema usamos método de eliminación, multiplicando cada ecuación por el primer coeficiente de la otra</p>
          <center>
          <table>
            <tr>
              <th>
                $\begin{matrix}
                6(9v_{11}  -3v_{12})=6(0) \\
                9(6v_{11}  -2v_{12})=9(0)
                \end{matrix}$
              </th>
              <th>
                $\begin{matrix}
                6(2v_{21}  -3v_{22})=6(0) \\
                2(6v_{21}  -9v_{22})=2(0)
                \end{matrix}$
              </th>
            </tr>
            <tr>
              <td>
                $\begin{matrix}
                54v_{11}  -18v_{12}=0 \\
                54v_{11}  -18_{12}=0
                \end{matrix}$
              </td>
              <td>
                $\begin{matrix}
                12v_{21}  -18v_{22}=0 \\
                12v_{21}  -18v_{22}=0
                \end{matrix}$
              </td>
            </tr>
          </table>
        </center>
        <p>   Por lo tanto son  ecuaciones equivalentes y, si se le da un valor arbitrario no nulo a una de las variables de cada sistema, se puede determinar el valor de la  otra incógnita. Usaremos el valor  1 solo por simplicidad, pero puede ser cualquiera distinto de cero.  </p>
        <center>
          <table>
            <tr>
              <th>
                <p>Haciendo $v_{12}=1$ obtenemos</p>
                 $$ 54v_{11}  -18=0$$
                 $$ v_{11}=\frac{1}{3} $$
                <p>Así, un vector propio $\mathbf{v}_1$ asociado a $\lambda_1$ queda como: </p> 
                $$\mathbf{v}_1=\begin{bmatrix}v_{11}\\v_{12}\end{bmatrix}=\begin{bmatrix}\frac{1}{3}\\ 1\end{bmatrix}$$
              </th>
              <th>
               <p>Haciendo $v_{22}=1$ obtenemos</p>
                $$12v_{21}  -18=0$$
                $$v_{21}=\frac{3}{2} $$
                <p>Así, un vector propio $\mathbf{v}_2$ asociado a $\lambda_2$ queda como:  </p>
                $$\mathbf{v}_2=\begin{bmatrix}v_{21}\\v_{22}\end{bmatrix}=\begin{bmatrix}\frac{3}{2}\\ 1\end{bmatrix}$$
              </th>
            </tr>
          </table>
          </center>
          <p>Un valor  propio tiene mas de un vector propio asociado, en este caso calculamos uno en cual la primera entrada fuese 1, en general habiendo  encontrado un vector propio, los demás serán vectores colineales a la recta que este determina. De este modo, los vectores propios $\mathbf{v}_1$ y $\mathbf{v}_2$ asociados  cada valor propio  $\lambda_1$ y $\lambda_2$  determinan dos rectas sobre las cuales se pueden graficar  otros vectores propios respectivos como se muestra a continuación.</p>
          <center>
            <img src="../img/2r_1.png" alt="">
            <p>Figura 2.1:</p>
          </center>
          <p>Con esto, obtener la solución es sustituir los valores y vectores propios encontrados en:</p>
          $$\mathbf{x}(t) = c_1\mathbf{x}_1(t) + c_2\mathbf{x}_2(t)$$
          donde 
          $$\mathbf{x}_1 (t) = \mathbf{v}_1 e^{\lambda_1 t} , \hspace{2em}
          \mathbf{x}_2 (t) = \mathbf{v}_2 e^{\lambda_2 t} ,\hspace{2em}
          $$
          <p>En este caso se tiene: </p>
          $$\mathbf{x}_1 (t) = \begin{bmatrix}\frac{1}{3}\\ 1\end{bmatrix} e^{-5 t} , \hspace{2em}
          \mathbf{x}_2 (t) = \begin{bmatrix}\frac{3}{2}\\ 1\end{bmatrix} e^{2 t} , \hspace{2em}$$
          <p>Por lo tanto la solución general es:  </p>
          <center>
          <table>
            <tr>
              <td>  
                $$\mathbf{x}(t) = c_1\begin{bmatrix}\frac{1}{3}\\ 1\end{bmatrix} e^{-5 t} + c_2\begin{bmatrix}\frac{3}{2}\\ 1\end{bmatrix} e^{2 t} , \hspace{2em}$$
              </td>
            </tr>
          </table>
        </center>
        <p>Que se puede escribir de las siguientes formas equivalentes: </p>
        <center>
        <table>
          <tr>
            <td>
              \begin{align*}
              \mathbf{x}(t) &=
              \begin{bmatrix}
              c_1\frac{1}{3}e^{-5 t}+c_2\frac{3}{2}e^{2 t}\\
              c_1 e^{-5t}+c_2e^{2 t}
              \end{bmatrix}\\ \\
                  x(t)&=c_1\frac{1}{3}e^{-5 t}+c_2\frac{3}{2}e^{2 t}\\\\
                  y(t)&=c_1 e^{-5t}+c_2e^{2 t}
              \end{align*}
            </td>
          </tr>
        </table>
        </center>
        <br><hr><br><br>
        <h3>Parte 2, Resolver problema de valor inicial.</h3>
        <p>Siguiendo con este ejemplo, resolvamos el problema de valor inicial  bajo las condiciones $x(0)=1$ y $y(0)=-2$. Como ya se cuenta con la soluciona solo resta encontrar las contantes $c_1$ y $c_2$ de modo que se cumplan las condiciones. Esto es: </p>
         \begin{align*}
        \mathbf{x}(0) =
        \begin{bmatrix}
        x(0)\\
        y(0)
        \end{bmatrix}&=
        \begin{bmatrix}
        c_1\frac{1}{3}e^{-5 (0)}+c_2\frac{3}{2}e^{2 (0)}\\
        c_1 e^{-5(0)}+c_2e^{2 (0)}
        \end{bmatrix}\\
        \begin{bmatrix}
        1\\
        -2
        \end{bmatrix}&=
        \begin{bmatrix}
        \frac{1}{3}c_1+\frac{3}{2}c_2\\
        c_1 +c_2
        \end{bmatrix}
         \end{align*}
        <p>Esta ultima expresión  es  un sistema de ecuaciones algebraicas lineales que se puede escribir como:</p>
        \begin{align*}
          \frac{1}{3}c_1+\frac{3}{2}c_2=1\\
          c_1 +c_1=-2
        \end{align*}
        <p>y se puede resolver mediante SAGE con las siguientes lineas:</p>
        <div class="compute">
            <script type="text/x-sage">
c1,c2=var('c1,c2')      # declaramos que c1 y c2 son variables
eq1=(1/3)*c1+(3/2)*c2==1  # se escribe ecuación 1 
eq2=c1 +c2==-2        # se escribe ecuación 2 
solve([eq1,eq2],c1,c2)    # comando para resolver el sistema
            </script>
        </div>
        <p>Con esto se obtiene que $c_1= \frac{-24}{7}$ y  $c_2 = \frac{10}{7}$ y por lo tanto la solución del problema de valor inicial es</p>
        \begin{align*}
        \mathbf{x}(t) &=
        \begin{bmatrix}
        \left(-\frac{24}{7}\right)\frac{1}{3}e^{-5 t}+\left(\frac{10}{7}\right)\frac{3}{2}e^{2 t}\\
        \left(-\frac{24}{7}\right) e^{-5t}+\left(\frac{10}{7}\right)e^{2 t}
        \end{bmatrix}\\&=
        \begin{bmatrix}
        -\frac{8}{7}e^{-5 t}+\frac{30}{14}e^{2 t}\\
        -\frac{24}{7} e^{-5t}+\frac{10}{7}e^{2 t}
        \end{bmatrix}
        \end{align*}
        <p>Que también  se puede escribir en la forma $\mathbf{x}(t)=\begin{bmatrix}x(t)\\y(t)\end{bmatrix}$ : </p>
        <center>
        <table>
          <tr>
            <td>
              \begin{align*}
              x(t)&=-\frac{8}{7}e^{-5 t}+\frac{30}{14}e^{2 t}\\
              y(t)&=-\frac{24}{7} e^{-5t}+\frac{10}{7}e^{2 t}
              \end{align*}
            </td>
          </tr>
        </table>
        </center>
        <br><hr><br><br>
        <h3>Parte 3, Representaciones gráficas</h3>
        <p>Una primera representación gráfica que podremos obtener de la solución de este problema de valor inicial  es graficando las funciones $x(t)$ y $y(t)$.</p>
        <div class="compute">
            <script type="text/x-sage">
t = var('t')
tfin=5                             #Valor final de t para la gráfica
x(t)=-(8/7)*e^(-5*t)+(30/14)*e^(2*t)
y(t)=-(24/7)*e^(-5*t)+(10/7)*e^(2*t)
xgraf=plot(x(t), (t, 0, tfin), color ='red', legend_label='$x(t)$', legend_color='red',thickness=3)
ygraf=plot(y(t), (t, 0, tfin), color ='blue', legend_label='$y(t)$', legend_color='blue',thickness=3)
xgraf+ygraf
            </script>
        </div>
        <p>Ahora grafiquemos los vectores propios,  el diagrama de flujo y también el recorrido determinado por las  funciones $x(t)$ y  $y(t)$ :</p>
        <div class="compute">
            <script type="text/x-sage">
x, y, t= var('x y t')
####################################################################################
A = matrix([[4, -3], [6, -7]])   # se introduce la matriz del sistema
v1=vector([1/3,1])               # vectro propio 
v2=vector([3/2,1])               #vector propio 2
tfin=1                           #Valor final de t para la gráfica
vi=[0,1,-2]              #Condicones iniciales 
xx(t)=-(8/7)*e^(-5*t)+(30/14)*e^(2*t)  # fucnción x(t) encontrada
yy(t)=-(24/7)*e^(-5*t)+(10/7)*e^(2*t)  # fucnción y(t) encontrada
######################################################################################
P=parametric_plot((xx(t), yy(t)), (t,vi[0],tfin),axes_labels=['$x(t)$', '$y(t)$'],color='green',thickness=3)
P+=parametric_plot((xx(-t), yy(-t)), (t,vi[0],tfin),color='green',thickness=2)
P+=point((vi[1],vi[2]), color='black',size=30,zorder=4)
ejes= ejes=3*max(norm(v2),norm(v1))
F = [A[0,0]*x+A[0,1]*y,A[1,0]*x+A[1,1]*y]
Fn = [F[0]/sqrt(F[0]^2 + F[1]^2),F[1]/sqrt(F[0]^2 + F[1]^2)]
P+=plot(v1,thickness=3,color='red')+text('$ \mathbf{v_1}$',(v1[0],v1[1]), fontsize=12,horizontal_alignment='right',color='red')
P+=plot(v2,thickness=3,color='blue')+text('$\\mathbf{v_2}$',(v2[0],v2[1]), fontsize=12,horizontal_alignment='left',color='blue')
P+=line([-sqrt(2)*ejes*v1,sqrt(2)*ejes*v1],linestyle=':',thickness=3, color='red')
P+=line([-sqrt(2)*ejes*v2,sqrt(2)*ejes*v2],linestyle=':',thickness=3, color='blue')
P+= plot_vector_field(Fn, (x,-ejes,ejes), (y,-ejes,ejes), axes_labels=['$x(t)$','$y(t)$'])
P.show(frame=True, title='$Vectores\ propios\ de\ $', xmax = ejes, xmin = -ejes, ymax = ejes, ymin = -ejes, aspect_ratio=1,gridlines=True)
            </script>
        </div>
        <p>Como se observa, los vectores propios determinan 4 regiones en el plano donde el diagrama de fase muestra una geometría similar. La solución al problema de valor inicial  dado por $(x_0,y_0)=(1,-2)$ se represento graficamente por su recorrido, y como sigue la dirección del diagrama de flujo, se puede observar que los puntos que forman el recorrido se están alejando de la condición inicial, esto en cuadrante  $+x,+y$, es decir  los puntos $(x(t), y(t))\rightarrow (+\infty,+\infty)$.</p>
        <p>Es de esperarse  que la  solución a problemas de valor inicial con condiciones iniciales en la misma región donde esta $(x_0,y_0)=(1,-2)$  tenga una tendencia similar. Para esto grafiquemos los recorridos correspondientes a $(1,-2)$, $(-1,-4)$, $(3,0)$ y $(3,-3)$.</p>
        <div class="compute">
            <script type="text/x-sage">
x, y, t= var('x y t')
####################################################################################
A = matrix([[4, -3], [6, -7]])   # se introduce la matriz del sistema
v1=vector([1/3,1])               # vectro propio 
v2=vector([3/2,1])               #vector propio 2
tfin=2              #Valor final de t para la gráfica
dt=0.1                           #incremento de t para la gráfica
VI=[[0,1,-2], [0,-1,-4], [0,3,0],[0,3,-3]] #valores iniciales en la forma[t0,x0,y0]
######################################################################################
ejes= ejes=3*max(norm(v2),norm(v1))
P=plot(v1,thickness=3,color='red')+text('$ \mathbf{v_1}$',(v1[0],v1[1]), fontsize=12,horizontal_alignment='right',color='red')
P+=plot(v2,thickness=3,color='blue')+text('$\\mathbf{v_2}$',(v2[0],v2[1]), fontsize=12,horizontal_alignment='left',color='blue')
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
        <p>Finamente se puede  agrear mas trayectorias  para formar el diagrama de fase, esto se puede hacer con el mismo código anterior solo agregando mas valores iniciales a la lista  $\mathtt{VI}$  en la forma $\mathtt{[t0,x0,y0]}$ separados por comas. </p>
        <br><hr><br><br>
        <h2>Actividad 1</h2>
        <p>Dados los siguientes sistemas, calcular los valores y vectores propios correspondientes y asociarlos con la respuesta correcta.</p>
        \begin{align*}
        &A&  &B& &C& &D&\\
        x'(t) &= -5x+3y   &  x'(t) &= -x-y    & x'(t) &= -x-2y    &  x'(t) &= 10x-\frac{9}{2}y\\
        y'(t) &= -3x+5y   &  y'(t) &= -2x-2y    & y'(t) &=\ \ -3y   &  y'(t) &=12x-5y
        \end{align*} <br><br>
\begin{align*}
&\lambda_1=-3&      &\lambda_1=-3&      &\lambda_1=-4&      &\lambda_1=3&     &\lambda_1=1
\\  
&\lambda_2=-1&      &\lambda_2=0&     &\lambda_2=4&     &\lambda_2=4&     &\lambda_2=4  
\\
&\mathbf{v_1}=
\begin{bmatrix}
1\\ 
1  \end{bmatrix}&
            &\mathbf{v_1}=
            \begin{bmatrix}
            1\\
            2  \end{bmatrix}&
                        &\mathbf{v_1}=
                        \begin{bmatrix}
                        3\\
                        1  \end{bmatrix}&
                                    &\mathbf{v_1}=
                                    \begin{bmatrix}
                                    3\\
                                    4  \end{bmatrix}&
                                                  &\mathbf{v_1}=
                                                \begin{bmatrix}
                                                  1\\
                                                  2  \end{bmatrix}
\\
&\mathbf{v_2}=
\begin{bmatrix}
1\\
0  \end{bmatrix}&
            &\mathbf{v_2}=
            \begin{bmatrix}
            1\\
            -1  \end{bmatrix}&
                        &\mathbf{v_2}=
                        \begin{bmatrix}
                        1\\
                        3  \end{bmatrix}&
                                      &\mathbf{v_2}=
                                      \begin{bmatrix}
                                      2\\
                                      4  \end{bmatrix}&
                                                  &\mathbf{v_2}=
                                                \begin{bmatrix}
                                                  3\\
                                                  4  \end{bmatrix}
\end{align*}
<center>
  <select name="one" id="o1">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    <option value="none">Ninguno</option>
  </select>
  <select name="two" id="o2">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    <option value="none">Ninguno</option>
  </select>
  <select name="three" id="o3">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    <option value="none">Ninguno</option>
  </select>
  <select name="four" id="o4">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    <option value="none">Ninguno</option>
  </select>
  <select name="five" id="o5">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    <option value="none">Ninguno</option>
  </select><br><br>
</center>
<button id="ans">Revisar</button>
<center>
     <h2 id="ansi"></h2>
</center>
          <br><hr><br><br>
          <h2>Actividad 2</h2>
          <p>El sistema de ecuaciones diferenciales</p>  
          \begin{align*}
          x'(t) &= 5x-6y\\
          y'(t) &= x-2dy
          \end{align*}
          <p>tiene valores propios $\lambda_1=4$ y $\lambda_2=-1$ con respectivos vectores propios $\mathbf{v_1}=\begin{bmatrix}6\\1\end{bmatrix}$ y $\mathbf{v_2}=\begin{bmatrix}1\\1\end{bmatrix}$. </p>
          <h2><strong>Tareas</strong></h2>
          <p>Resuelva los las siguientes tareas en su cuaderno, copie  un esbozo de las gráficas en su cuaderno.</p>
          <ol>
            <li>Obtener la solución  general.</li><br><br>
            <li>Obtenga la las funciones solución $x(t)$ y $y(t)$  que resuelven el problema de valor inicial $[t0,x0,y0]=[0,7,3]$</li><br><br>
            <li>Después  haga una gráfica  de las soluciones usando la siguiente celda SAGE;</li><br><br>
            <div class="compute">
              <script type="text/x-sage">
t = var('t')
x(t)=         #colocar la funcion x(t) encontrada,  use * para productos, 2B se escribe2*B 
y(t)=         #colocar la funcion y(t) encontrada
tfin=       #colocar un numero que sera el valor final de t  para la solución 
xgraf=plot(x(t), (t, 0, tfin), color ='red', legend_label='$x(t)$', legend_color='red',thickness=3)
ygraf=plot(y(t), (t, 0, tfin), color ='blue', legend_label='$y(t)$', legend_color='blue',thickness=3)
xgraf+ygraf
              </script>
            </div>
            <li>¿Hacia donde tienden los valores de las funciones $x(t)$ y $y(t)$ cuando $t\rightarrow\infty $?</li><br><br>
            <li>
              <p>Mediante las siguientes lineas  en SAGE obtenga el diagrama de fase y de flujo; solo  debe agregar la matiz del sistema mas recorridos correspondientes a la  con otros valores iniciales. La forma en  se escribe una matriz  es:</p>
              $$
              \mathbf{A}=\begin{bmatrix}
              a&b\\
              c&d
              \end{bmatrix}\ \  \text{es}\ \  \mathtt{A = matrix([[a, b], [c, d]])}$$
              <p>Y  para agregar valores iniciales a la lista $\mathtt{VI}=[[0,7,3]]$  solo se  separa  por coma el nuevo valor por ejemplo agregar $\mathtt{[1,2,3]}$ a la lista quedaría como  $\mathtt{VI}=[[0,7,3],[1,2,3]]$.</p>
              <div class="compute">
                  <script type="text/x-sage">
x, y, t= var('x y t')
####################################################################################
A = matrix([[  ,  ],[  ,  ]])    #Introdusca la matriz del sistema
v1=vector([  ,  ])               #Introdusca vectro propio 1
v2=vector([  ,  ])               #Introdusca vector propio 2
tfin=2               #Puede Cambiar 
dt=0.1                           #Poede modificar dt, si decrese la grafica es mas precisa y demora mas.
VI=[[0,1,-2]  ]                    #Introdusca mas valores iniciales en la forma [t0,x0,y0], no el vide las comas.
######################################################################################
ejes= ejes=3*max(norm(v2),norm(v1))
P=plot(v1,thickness=3,color='red')+text('$ \mathbf{v_1}$',(v1[0],v1[1]), fontsize=12,horizontal_alignment='right',color='red')
P+=plot(v2,thickness=3,color='blue')+text('$\\mathbf{v_2}$',(v2[0],v2[1]), fontsize=12,horizontal_alignment='left',color='blue')
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
x, y, t= var('x y t')
####################################################################################
A = matrix([[5, -6], [1, -2]])    # se introduce la matriz del sistema
v1=vector([6,1])          # vectro propio 
v2=vector([1,1])          #vector propio 2
tfin=2
dt=0.1                #Valor final de t para la gráfica
VI=[[0,7,3]]            #Se agren los valores iniciales
######################################################################################                             
ejes=3*max(norm(v2),norm(v1))                                                                                
P=plot(v1,thickness=3,color='red')+text('$ \mathbf{v_1}$',(v1[0],v1[1]), fontsize=12,horizontal_alignment='right',color='red')
P+=plot(v2,thickness=3,color='blue')+text('$\\mathbf{v_2}$',(v2[0],v2[1]), fontsize=12,horizontal_alignment='left',color='blue')
P+=line([-sqrt(2)*ejes*v1,sqrt(2)*ejes*v1],linestyle='--',thickness=2, color='red')                                
P+=line([-sqrt(2)*ejes*v2,sqrt(2)*ejes*v2],linestyle='--',thickness=2, color='blue')                               
#                                                                                                                  
F = [A[0,0]*x+A[0,1]*y,A[1,0]*x+A[1,1]*y]                                                                          
Fn = [F[0]/sqrt(F[0]^2 + F[1]^2),F[1]/sqrt(F[0]^2 + F[1]^2)]                                                       
P+= plot_vector_field(Fn, (x,-ejes,ejes), (y,-ejes,ejes))                                                          
#                                                                                                                  
Tp=[desolve_system_rk4(F,[x, y],ics=[VI[i][0],VI[i][1],VI[i][2]],ivar=t,end_points=tfin,step=dt) for i in range(len(VI))]
Tn=[desolve_system_rk4(F,[x, y],ics=[VI[i][0],VI[i][1],VI[i][2]],ivar=t,end_points=-tfin,step=-dt) for i in range(len(VI))]
Rp = [ ([j,k] for i,j,k in Tp[m]) for m in range(len(VI)) ]                                                        
Rn = [ ([j,k] for i,j,k in Tn[m]) for m in range(len(VI)) ]                                                        
P+=sum( line(Rp[i], thickness=2, color='green') for i in range(len(VI)))                                           
P+=sum( line(Rn[i], thickness=1,color='green' ) for i in range(len(VI)))                                           
P+=sum( point((VI[i][1],VI[i][2]), color='red',size=30,zorder=4) for i in range(len(VI)))                          
P.show(frame=True,axes_labels=['$x(t)$','$y(t)$'] , xmax = ejes, xmin = -ejes, ymax = ejes, ymin = -ejes, aspect_ratio=1,gridlines=True)
                  </script>
              </div>
            </li>
            <li>¿Hacia donde tienden las funciones solución para cada una de las zonas determinadas por los vectores propios?</li><br><br>
            <li>Usando la celda SAGE anterior ¿Cómo son los diagramas de fase para los sistemas de la <strong>Actividad 1</strong>?</li>
          </ol>
          <a href="tema2-2.php" id="ant">Anterior</a>
          <a href="tema2-4.php" id="next">Siguiente</a>
        </div>
      <script>
     (function(){

      document.getElementById("ans").addEventListener("click", function(){
        var o1 = document.getElementById("o1");
        var o1val = o1.options[o1.selectedIndex].value;
        var o2 = document.getElementById("o2");
        var o2val = o2.options[o2.selectedIndex].value;
        var o3 = document.getElementById("o3");
        var o3val = o3.options[o3.selectedIndex].value;
        var o4 = document.getElementById("o4");
        var o4val = o4.options[o4.selectedIndex].value;
        var o5 = document.getElementById("o5");
        var o5val = o5.options[o5.selectedIndex].value;
        console.log(o1val);
        console.log(o2val);
        console.log(o3val);
        console.log(o4val);
        console.log(o5val);

        if(o1val == "C" && o2val == "B" && o3val == "A" && o4val == "none" && o5val == "D"){
          document.getElementById("ansi").innerHTML = "¡Respuesta Correcta!";
          document.getElementById("ansi").style.color = "green";
        }else{
          document.getElementById("ansi").innerHTML = "Intentalo de nuevo.";
          document.getElementById("ansi").style.color = "red";
        }
      });
     })();
   </script>
   </center>
   <?php 
      include("../arrow.php");
   ?>
   </body>
</html>