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
          <h2>2.4. Reales  repetidos</h2>
          <p>En esta sección se presenta el caso en que los valores propios son  reales y repetidos, es decir cuando en la ecuación:</p>
          $$|\mathbf{A} - \lambda \mathbf{I}| = 0$$
          <p>hay al menos una raíz es repetida.</p>
          <p>Se dice que un valor propio es de multiplicidad $k$ si es una raíz de multiplicidad $k$ de la
          ecuación anterior. Por ejemplo si</p>
          $$|\mathbf{A} - \lambda \mathbf{I}| = (\lambda-4)^3(\lambda+2)$$
          <p>se tiene que el valor propio 4 tiene multiplicidad 3 y el valor propio -2 tiene multiplicidad 1. </p>   
          <p>Para cada valor propio $\lambda$, la ecuación  para encontrar cada vector propio</p>
          $$(\mathbf{A} -\lambda \mathbf{I})\mathbf{v} = 0$$
          <p>tiene al menos una solución diferente de cero $\mathbf{v}$, de esta manera existe al menos un
          eigenvector asociado a $\lambda$ cualquiera que sea su multiplicidad.</p>
          <p>Debido a esto, un valor propio  de multiplicidad $k\geq 2$ cumple algunas de las dos condiciones siguientes:</p>
          <ul>
            <li>Tiene <i>exactamente</i>  $k$  vectores propios linealmente independientes.</li>
            <li>O tiene <i>menos</i> de $k$ vectores propios linealmente independientes.</li>
          </ul>
          <p>En le primer caso se dice que el  valor propio  es <strong>completo</strong> e implica que se puede encontrar un conjunto completo de vectores propios linealmente independientes necesarios  para formar la solución general del sistema, en el segundo caso se dice que el valor propio es <strong>incompleto</strong>  ya que no se puede encontrar un conjunto completo  de  vectores propios linealmente independientes como es necesario para formar la solución general,  por lo tanto, se procede de forma distinta a encontrar vectores solución linealmente independientes em cada uno de los casos.</p>
          <p>El caso general para resolver sistemas  de  ecuaciones diferenciales de $ n\times n$  que tienen  valores propios  multiplicidad $k\geq 2$ se comentara brevemente mas adelante, en esta sección abordaremos solo sistemas $ 2\times 2$.</p>
          <br><hr><br><br>
          <p>Para los sistemas de $2 \times 2$, se tiene el que la ecuación para calcular los valores propios  $|\mathbf{A} -\lambda \mathbf{I}|=0$  es de segundo grado, por lo tanto se tiene que el valor propio $\lambda $  repetido a lo mas tiene multiplicidad 2.</p>
          <p>Si ese es el caso, primero se procede a verificar si es completo o incompleto, eso se hace resolviendo el siguiente  de ecuaciones  algebraicas con incógnitas $v_1$ y $v_2$ que son las componentes de $\mathbf{v}$.   </p>
          \begin{align*}
          (\mathbf{A} -\lambda \mathbf{I})\mathbf{v} &= \mathbf{0}\\
           \left(  \begin{bmatrix}
          a & b \\
          c & d \\
          \end{bmatrix}
               -\lambda  \begin{bmatrix}
              1 & 0 \\
              0 & 1 \\
              \end{bmatrix}
                  \right) \begin{bmatrix}
                  v_1\\
                  v_2
                  \end{bmatrix} &= 
                      \begin{bmatrix}
                        0\\
                        0
                      \end{bmatrix}\\
          \left(  \begin{bmatrix}
          a & b \\
          c & d \\
          \end{bmatrix}
                - \begin{bmatrix}
                \lambda  & 0 \\
                0 & \lambda  \\
                \end{bmatrix}\right)
                      \begin{bmatrix}
                      v_1\\
                      v_2
                      \end{bmatrix} &= 
                            \begin{bmatrix}
                            0\\
                            0
                            \end{bmatrix}\\
                  \begin{bmatrix}
                  a-\lambda & b & \\
                  c & d-\lambda & \\
                  \end{bmatrix}
                      \begin{bmatrix}
                      v_1\\
                      v_2
                      \end{bmatrix}&= 
                          \begin{bmatrix}
                          0\\
                          0
                          \end{bmatrix}\\
                  \begin{bmatrix}
                  (a-\lambda)v_1 + bv_2  \\
                  cv_1 + (d-\lambda)v_2
                  \end{bmatrix}&=
                          \begin{bmatrix}
                          0\\
                          0
                          \end{bmatrix}
          \end{align*}
          <p>Si se pueden encortar dos vectores propios linealmente independientes que cumplan la ecuación anterior entonces es completo y si solo se puede encentrar un vector propio llenamente independiente entones es incompleto. </p>
          <p>Considerando lo anterior, la solución general  de un sistema de $2\times 2$ dado por $\mathbf{x'}=\mathbf{A}\mathbf{x}$   con valor propio $\lambda$ de multiplicidad 2 (es decir, repetido), se  pude obtener de la siguiente manera:</p>
          <p>Primero se  calcula  el valor propio $\lambda$ de la matriz $\mathbf{A}$ resolviendo  la ecuación: </p>$$\left|\mathbf{A}-\lambda\mathbf{I}\right| = 0$$ 
          <p>Después e procede a verificar si es completo o incompleto resolviendo la ecuación:</p>
          $$(\mathbf{A} -\lambda \mathbf{I})\mathbf{v} = 0$$
          <ul>
            <li>Es <strong>completo</strong> si se pueden encontrar dos vectores $\mathbf{v}_1$ y $\mathbf{v}_2$  linealmente independientes que cumplan la ecuación anterior.</li>
            <li>Es <strong>incompleto</strong> si solo se puede encontrar un vector propio $\mathbf{v}$ linealmente independiente que cumplan la ecuación anterior.</li>
          </ul>
          <p>Esto  distingue  los siguientes casos:  </p> 
          <p><strong>Caso 1: </strong>Si el valor propio $\lambda$ es completo la con vectores propios $\mathbf{v}_1$ y $\mathbf{v}_2$ la solución general es:</p>
          $$\mathbf{x}(t) = c_1\mathbf{x}_1(t) + c_2\mathbf{x}_2(t)$$
          <p>donde </p>
          $$\mathbf{x}_1 (t) = \mathbf{v}_1 e^{\lambda t} , \hspace{2em}
          \mathbf{x}_2 (t) = \mathbf{v}_2 e^{\lambda t} ,\hspace{2em}
          $$
          <p><strong>Caso 2: </strong>Si el valor propio $\lambda$ es incompleto con vector propio $\mathbf{v}$ se  procede de la siguiente manera:  </p>
          <ol>
            <li>
              <p>Se encuentra un vector $\mathbf{u}$ diferente de cero  a partir de la ecuación:</p>
                  \begin{align*}
                  (\mathbf{A} - \lambda \mathbf{I})^{2}\mathbf{u}&= 0
                  \end{align*} 
                  <p>que cumpla</p>
                  \begin{align*}
                  (\mathbf{A} - \lambda \mathbf{I})\mathbf{u}&= \mathbf{v} 
                  \end{align*}
            </li>
            <li>
              <p>Se forman  dos soluciones independientes</p>
              \begin{align*}
              \mathbf{x}_{1}(t)&= \mathbf{v}e^{\lambda t}\\
              \mathbf{x}_{2}(t)&= (\mathbf{v}t + \mathbf{u})e^{\lambda t}
              \end{align*}
            </li>
            <li>
              <p>Se obtiene  la solución general </p>
              \begin{align*}
              \mathbf{x}(t)&= c_{1}\mathbf{x}_{1}(t)+ c_{2}\mathbf{x}_{2}(t)\\
                     &= c_1 \mathbf{v}e^{\lambda t}+c_2(\mathbf{v}t + \mathbf{u})e^{\lambda t}
              \end{align*}
            </li>
          </ol>
          <br><hr><br><br>
          <h2>Ejemplo (Caso 1)</h2>
          <p>Para ejemplificar consideremos el sistema</p>
          \begin{align*}
          x'(t) &= -4x  \\
          y'(t) &=  \ \ \ \ \ \ -4y
          \end{align*}
          <p>Se escribe en la forma matricial $\mathbf{x'}=\mathbf{A}\mathbf{x}$ como:</p>
          $$\begin{bmatrix}
          x'  \\
          y'  \\
          \end{bmatrix}=\begin{bmatrix}
          -4 & 0  \\
           0 & -4  \\
          \end{bmatrix}\begin{bmatrix}
          x  \\
          y  \\
          \end{bmatrix}$$
          <p>por lo tanto, la matriz de coeficientes es</p>
          $$\mathbf{A}=\begin{bmatrix}
          -4 & 0  \\
          0 & -4  \\
          \end{bmatrix}$$
          <h3>Parte 1, Obtener la solución general.</h3>
          <p>Primero se procede a encontrar los valores propios resolviendo la ecuación  $\left|\mathbf{A}-\lambda\mathbf{I}\right| = 0$  como se muestra a continuación  </p>
          \begin{align*}
          \left|\mathbf{A}-\lambda\mathbf{I}\right| &= 0\\
          \left|\begin{bmatrix}
          -4 & 0  \\
          0 & -4  \\
          \end{bmatrix}
          -\lambda\begin{bmatrix}
          1 & 0  \\
          0 & 1  \\
          \end{bmatrix}
          \right|&= 0\\
          \left|\begin{bmatrix}
          -4 & 0  \\
          0 & -4  \\
          \end{bmatrix}
          -\begin{bmatrix}
          \lambda & 0  \\
          0 & \lambda  \\
          \end{bmatrix}
          \right|&= 0\\
          \begin{vmatrix}
          -4-\lambda & 0  \\
          0 & -4-\lambda  \\
          \end{vmatrix}
          &= 0\\
          (-4-\lambda)(-4 -\lambda) - (0)(0) &= 0\\
          (-4 -\lambda)^2&= 0\\
          \end{align*}
          <p>Se sigue  que el  valor propio  es $\lambda =-4$ y como el termino $(-4 -\lambda)$ tiene potencia 2, se tiene que $\lambda$ es de multiplicidad 2. Después se verifica si es completo o incompleto resolviendo la ecuación $(\mathbf{A}-\lambda\mathbf{I})\mathbf{v} = \mathbf{0}$ como se muestra a continuación:</p>
          \begin{align*}
          (\mathbf{A} -\lambda \mathbf{I})\mathbf{v} &= \mathbf{0}\\
          \left(  \begin{bmatrix}
          -4 & 0 \\
          0 & -4 \\
          \end{bmatrix}
              -(-4)  \begin{bmatrix}
              1 & 0 \\
              0 & 1 \\
              \end{bmatrix}\right)
                   \begin{bmatrix}
                  v_1\\
                  v_2
                      \end{bmatrix} &= 
                      \begin{bmatrix}
                      0\\
                      0
                      \end{bmatrix}\\
          \left(  \begin{bmatrix}
          -4 & 0 \\
          0 & -4 \\
          \end{bmatrix}
              + \begin{bmatrix}
              4  & 0 \\
              0 & 4  \\
              \end{bmatrix}\right)
                  \begin{bmatrix}
                  v_1\\
                  v_2
                  \end{bmatrix} &= 
                        \begin{bmatrix}
                        0\\
                        0
                        \end{bmatrix}\\
                \begin{bmatrix}
                0 & 0  \\
                0 & 0  
                \end{bmatrix}
                    \begin{bmatrix}
                    v_1\\
                    v_2
                    \end{bmatrix}&= 
                        \begin{bmatrix}
                        0\\
                        0
                        \end{bmatrix}
          \end{align*}
          <p>Dado que la última expresión se cumple para cualquier  valor que tomen  $v_1$ y $v_2$, basta elegirlos de  manera que formen dos vectores linealmente independientes. Seleccionamos</p>
          $$\mathbf{v}_1=\begin{bmatrix} 1\\0\end{bmatrix}\hspace{5em} \mathbf{v}_2=\begin{bmatrix} 0\\1\end{bmatrix}$$  
          <p>Considerando lo anterior la solución general es:</p>
          $$\mathbf{x}(t) = c_1\mathbf{v}_1 e^{\lambda t}+c_2\mathbf{v}_2 e^{\lambda t}$$
          <p>y sustituyendo los valores queda como </p>
          $$\mathbf{x}(t) = c_1\begin{bmatrix} 1\\0\end{bmatrix} e^{-4t}+
          c_2\begin{bmatrix} 0\\1\end{bmatrix} e^{-4t}$$
          <p>o escrito de otras formas </p>
          <center>
          <table>
            <tr>
              <td>
                \begin{align*}
                \mathbf{x}(t)&=\begin{bmatrix} c_1\\c_2\end{bmatrix} e^{-4t}\\
                \begin{bmatrix}
                x(t)\\
                y(t)
                \end{bmatrix} &= 
                \begin{bmatrix} 
                c_1e^{-4t}
                \\c_2e^{-4t}
                \end{bmatrix}
                \end{align*}
              </td>
            </tr>
          </table>
          </center>
          <br><hr><br><br>
          <h3>Parte 2, Resolver problema de valor inicial</h3>
          <p>Siguiendo con este ejemplo, resolvamos el problema de valor inicial  bajo las condiciones $x(0)=3$ y $y(0)=-2$. Como ya se cuenta con la solución general solo resta encontrar las contantes $c_1$ y $c_2$ de modo que se cumplan las condiciones iniciales. Esto es:</p>
          \begin{align*}
          \mathbf{x}(0) =
          \begin{bmatrix}
          x(0)\\
          y(0)
          \end{bmatrix}&=
              \begin{bmatrix} 
                c_1e^{-4(0)}\\
                c_2e^{-4(0)}
              \end{bmatrix}\\
          \begin{bmatrix}
          3\\
          -2
          \end{bmatrix}&=
              \begin{bmatrix}
              c_1\\
              c_2
              \end{bmatrix}\\
          \end{align*}
          <p>De esta ultima expresión se sigue $c_1=3$ y $c_2=-2$. </p>
          <p>Considerando estos valores, la solución del problema de valor inicial es:</p>
          \begin{align*}
          \mathbf{x}(t) &=
          \begin{bmatrix}
            3e^{-4t}\\
          -2e^{-4t}
          \end{bmatrix}
          \end{align*}
          <p>Que también  se puede escribir en la forma $\mathbf{x}(t)=\begin{bmatrix}x(t)\\y(t)\end{bmatrix}$ como: </p>
          <center>
            <table>
              <tr>
                <td>
                  \begin{align*}
                  x(t)&=3e^{-4t}\\
                  y(t)&=-2e^{-4t}
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
tfin=3                               #Valor final de t para la gráfica 
x(t)= 3*e^(-4*t)    #Solución x(t) encontrada  
y(t)=-2*e^(-4*t)    #Solución y(t) encontrada
###############################################################################
xgraf=plot(x(t), (t, 0, tfin), color ='red', legend_label='$x(t)$', legend_color='red',thickness=3)
ygraf=plot(y(t), (t, 0, tfin), color ='blue', legend_label='$y(t)$', legend_color='blue',thickness=3)
xgraf+ygraf
            </script>
          </div>
          <p>Ahora grafiquemos el diagrama de flujo y también el recorrido determinado por las  funciones $x(t)$ y  $y(t)$ :</p>
          <div class="compute">
            <script type="text/x-sage">
x, y, t= var('x y t')
####################################################################################
A = matrix([[-4, 0], [0, -4]])    # se introduce la matriz del sistema
tfin=2                            #Valor final de t para la gráfica
vi=[0,3,-2]                   #Condicones iniciales 
xx(t)= 3*e^(-4*t)                   #Solución x(t) encontrada  
yy(t)=-2*e^(-4*t)                   #Solución y(t) encontrada
escala=3.5                          #Se puede cambiar la escala de los ejes
######################################################################################
P=parametric_plot((xx(t), yy(t)), (t,0,tfin),axes_labels=['$x(t)$', '$y(t)$'],color='green',thickness=3)
P+=parametric_plot((xx(-t), yy(-t)), (t,0,tfin),color='green',thickness=2)
P+=point((vi[1],vi[2]), color='black',size=30,zorder=4)
ejes=escala*norm(vector([vi[1],vi[2]]))
F = [A[0,0]*x+A[0,1]*y,A[1,0]*x+A[1,1]*y]
Fn = [F[0]/sqrt(F[0]^2 + F[1]^2),F[1]/sqrt(F[0]^2 + F[1]^2)]
P+= plot_vector_field(Fn, (x,-ejes,ejes), (y,-ejes,ejes), axes_labels=['$x(t)$','$y(t)$'])
P.show(frame=True, title='$Recorrido\ y\ Diagrama\ de\ flujo$', xmax = ejes, xmin = -ejes, ymax = ejes, ymin = -ejes, aspect_ratio=1,gridlines=True)
            </script>
          </div> 
          <p>Como se observa, el recorrido  determinado por los puntos  $(x(t), y(t))$  es tangente al diagrama de flujo, por otro lado  el recorrido  es un haz de recta  que converge hacia el origen. Esto se debe a que  $\lambda$  vale -4, entonces  ambas funciones  $x(t)$ y  $y(t)$  tiene el factor $e^{-4t}$ así,  si $t\rightarrow\infty$  implica que  $e^{-4t}\rightarrow0$ y por lo tanto el recorrido dado por  los puntos $(x(t), y(t))$ tienden al origen.</p>
          <p>Lo anterior se  realizo considerando al problemas de valor inicial con condiciones iniciales $(x_0,y_0)=(3,-2)$, para obtener el diagrama de fase  grafiquemos los recorridos correspondientes a $(3,-2)$, $(-1,-4)$, $(3,0)$ y $(3,-3)$.</p>
          <div class="compute">
            <script type="text/x-sage">
x, y, t= var('x y t')
####################################################################################
A = matrix([[-4, 0], [0, -4]])   # se introduce la matriz del sistema
tfin=3               #Valor final de t para la gráfica
dt=0.1                           #incremento de t para la gráfica
VI=[[0,3,-2],[0,1,1], [0,-2,-2], [0,-2,2],[0,3,-3],[0,2,0]] #valores iniciales en la forma[t0,x0,y0]
######################################################################################
ejes=3*max([norm(vector(VI[i]))  for i in range(len(VI))])
F = [A[0,0]*x+A[0,1]*y,A[1,0]*x+A[1,1]*y]
Fn = [F[0]/sqrt(F[0]^2 + F[1]^2),F[1]/sqrt(F[0]^2 + F[1]^2)]
P= plot_vector_field(Fn, (x,-ejes,ejes), (y,-ejes,ejes))
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
          <p>Como se observa,  cada uno de los recorrido también  tiene  la forma de  un haz  de recta que converge hacia el origen,  argumentos similares al caso $(x_0,y_0)=(3,-2)$, se puede concluir  que las  soluciones de los  demás problemas de valor inicial tendrán un comportamientos similar.</p>
          <br><hr><br><br>
          <h2>Ejemplo Caso 2</h2>
          <p>Para ejemplificar consideremos el sistema </p>
          \begin{align*}
          x'(t) &= 4x-3y\\
          y'(t) &= 3x+10y
          \end{align*}
          <p>Se escribe en la forma matricial $\mathbf{x'}=\mathbf{A}\mathbf{x}$ como:</p>
          $$\begin{bmatrix}
          x'  \\
          y'  \\
          \end{bmatrix}=\begin{bmatrix}
          4 & -3  \\
          3 & 10  \\
          \end{bmatrix}\begin{bmatrix}
          x  \\
          y  \\
          \end{bmatrix}$$
          <p>por lo tanto, la matriz de coeficientes es</p>
          $$\mathbf{A}=\begin{bmatrix}
          4 & -3  \\
          3 & 10  \\
          \end{bmatrix}$$
          <h3>Parte 1, Obtener la solución general.</h3>
          <p>Primero se procede a encontrar los valores propios resolviendo la ecuación  $\left|\mathbf{A}-\lambda\mathbf{I}\right| = 0$  como se muestra a continuación </p> 
          \begin{align*}
          \left|\mathbf{A}-\lambda\mathbf{I}\right| &= 0\\
          \left|\begin{bmatrix}
          4 & -3  \\
          3 & 10  \\
          \end{bmatrix}
          -\lambda\begin{bmatrix}
          1 & 0  \\
          0 & 1  \\
          \end{bmatrix}
          \right|&= 0\\
          \left|\begin{bmatrix}
          4 & -3  \\
          3 & 10  \\
          \end{bmatrix}
          -\begin{bmatrix}
          \lambda & 0  \\
          0 & \lambda  \\
          \end{bmatrix}
          \right|&= 0\\
          \begin{vmatrix}
          4-\lambda & -3  \\
          3 & 10-\lambda  \\
          \end{vmatrix}
          &= 0\\
          (4-\lambda)(10 -\lambda) - (-3)(3) &= 0\\
          \lambda^2-14\lambda+49&= 0\\
          \lambda^2-14\lambda+49&= 0\\
          (\lambda-7)^2=0
          \end{align*}
          <p>Se sigue  que el  valor propio  es $\lambda =7$ y como el termino $(\lambda-7)$ tiene potencia 2, se tiene que $\lambda$ es de multiplicidad 2. Después se procede a verificar si es completo o incompleto resolviendo la ecuación $(\mathbf{A}-\lambda\mathbf{I})\mathbf{v} = 0$ como se muestra a continuación:</p>
          \begin{align*}
          (\mathbf{A} -\lambda \mathbf{I})\mathbf{v} &= \mathbf{0}\\
          \left(  \begin{bmatrix}
          4 & -3  \\
          3 & 10  \\
          \end{bmatrix}
          -(7)  \begin{bmatrix}
          1 & 0 \\
          0 & 1 \\
          \end{bmatrix}\right)
          \begin{bmatrix}
          v_1\\
          v_2
          \end{bmatrix} &= 
          \begin{bmatrix}
          0\\
          0
          \end{bmatrix}\\
          \left(  \begin{bmatrix}
          4 & -3  \\
          3 & 10  \\
          \end{bmatrix}
          - \begin{bmatrix}
          7  & 0 \\
          0  & 7  \\
          \end{bmatrix}\right)
          \begin{bmatrix}
          v_1\\
          v_2
          \end{bmatrix} &= 
          \begin{bmatrix}
          0\\
          0
          \end{bmatrix}\\
          \begin{bmatrix}
          -3 & -3 \\
          3 & 3\\
          \end{bmatrix}
          \begin{bmatrix}
          v_{1}\\
          v_{2}
          \end{bmatrix}&=
          \begin{bmatrix}
          0\\
          0
          \end{bmatrix}\\
          \begin{bmatrix}
          -3v_{1} &-&3v_{2} \\
           3v_{1} &+&3v_{2}
          \end{bmatrix}=
          \begin{bmatrix}
          0\\
          0
          \end{bmatrix}
          \end{align*}
          <p>Esto último es equivalente a </p>
          \begin{align*}
          -3v_{1}-3v_{2}=0 \\
           3v_{1}+3v_{2}=0
          \end{align*}
          <p>Si multiplicamos por -1 a alguna de las ecuaciones anteriores,  es fácil ver notar que ambas son equivalentes. Si se da un valor arbitrario a una de las variables , se puede determinar el valor de la  otra incógnita.</p>
          <p>Haciendo $v_{1}=1$ obtenemos</p>
          \begin{align*}
          -3v_{1}-3v_{2}&=0\\
          -3(1)-3v_{2}&=0\\
          -3v_{2}&=3\\
          v_{2}&=-1
          \end{align*}
          <p>Así, un vector propio $\mathbf{v}$ asociado a $\lambda$ queda como: </p> 
          $$\mathbf{v}=\begin{bmatrix}v_{1}\\v_{2}\end{bmatrix}
          =\begin{bmatrix}1\\-1\end{bmatrix}
          $$
          <p>Ahora notemos que los demás vectores que satisfacen la ecuación $(\mathbf{A}-\lambda\mathbf{I})\mathbf{v} = 0$ son en la forma $\begin{bmatrix}c\\-c\end{bmatrix}$  y por lo tanto  linealmente dependientes con $\mathbf{v}=\begin{bmatrix}1\\-1\end{bmatrix}$. Supongamos que existe un vector  que satisface la ecuación anterior pero que no es de la forma $\begin{bmatrix}c\\-c\end{bmatrix}$, si $v_1=r$ es la primera entrada de ese  vector se tiene que cumplir que $-9r-9v_{2}=0$ y por lo tanto $v_2=-r$, entonces dicho vector es $\begin{bmatrix}r\\-r\end{bmatrix}$ que tiene la forma $\begin{bmatrix}c\\-c\end{bmatrix}$ entonces  todos los demás vectores son linealmente dependientes con $\mathbf{v}$</p>
          <p>Considerando las lineas anteriores, se concluye que $\lambda$ es un valor propio de multiplicidad 2   incompleto, por lo tanto se siguen los siguientes paso  para determinar la solución general:</p>
          <ol>
            <li> 
              <p>Se encuentra un vector $\mathbf{u}$ diferente de cero  a partir de la ecuación:</p>
              \begin{align*}
              (\mathbf{A} - \lambda \mathbf{I})^{2}\mathbf{u}&= 0 
              \end{align*}
              <p>que cumpla</p>
              \begin{align*}
              (\mathbf{A} - \lambda \mathbf{I})\mathbf{u}&= \mathbf{v} 
              \end{align*}
            </li>
            <li>
              <p>Se forman  dos soluciones independientes</p>
              \begin{align*}
              \mathbf{x}_{1}(t)&= \mathbf{v}e^{\lambda t}\\
              \mathbf{x}_{2}(t)&= (\mathbf{v}t + \mathbf{u})e^{\lambda t}
              \end{align*}
            </li>
            <li>
              <p>Se obtiene  la solución general </p>
              \begin{align*}
              \mathbf{x}(t)&= c_{1}\mathbf{x}_{1}(t)+ c_{2}\mathbf{x}_{2}(t)\\
              &= c_1 \mathbf{v}e^{\lambda t}+c_2(\mathbf{v}t + \mathbf{u})e^{\lambda t}
              \end{align*}
            </li>
          </ol>
          <p>Primero  se resuelve $(\mathbf{A} - \lambda \mathbf{I})^{2}\mathbf{u}= 0$ como se muestra a continuación:</p>
          \begin{align*}
          (\mathbf{A} - \lambda \mathbf{I})^{2}\mathbf{u}&= \mathbf{0}\\
          \begin{bmatrix}
          a-\lambda & b  \\
          c & d -\lambda \\
          \end{bmatrix}^{2}
          \begin{bmatrix}
          u_{1}\\
          u_{2}
          \end{bmatrix}&=
          \begin{bmatrix}
          0\\
          0
          \end{bmatrix}\\
          \begin{bmatrix}
          4-(7) & -3 \\
          3 & 10-(7)\\
          \end{bmatrix}^{2}
          \begin{bmatrix}
          u_{1}\\
          u_{2}
          \end{bmatrix}&=
          \begin{bmatrix}
          0\\
          0
          \end{bmatrix}\\
          \begin{bmatrix}
          -3 & -3 \\
          3 & 3\\
          \end{bmatrix}^{2}
          \begin{bmatrix}
          u_{1}\\
          u_{2}
          \end{bmatrix}&=
          \begin{bmatrix}
          0\\
          0
          \end{bmatrix}\\
          \begin{bmatrix}
          -3 & -3 \\
          3 & 3\\
          \end{bmatrix}
          \begin{bmatrix}
          -3 & -3 \\
          3 & 3\\
          \end{bmatrix}
          \begin{bmatrix}
          u_{1}\\
          u_{2}
          \end{bmatrix}&=
          \begin{bmatrix}
          0\\
          0
          \end{bmatrix}\\
          \begin{bmatrix}
          (-3)(-3)+(-3)(3)&\ & (-3)(-3)+(-3)(3)  \\
          (3)(-3)+3(3)    &\ & (3)(-3)+3(3) \\
          \end{bmatrix}
          \begin{bmatrix}
          u_{1}\\
          u_{2}
          \end{bmatrix}&=
          \begin{bmatrix}
          0\\
          0
          \end{bmatrix}\\
          \begin{bmatrix}
          0&0\\
          0&0
          \end{bmatrix}
          \begin{bmatrix}
          u_{1}\\
          u_{2}
          \end{bmatrix}&=
          \begin{bmatrix}
          0\\
          0
          \end{bmatrix}\\
          \end{align*}
          <p>Por lo tanto, cuales quiera que sean $u_1$ y $u_2$ cumplirán la ecuación anterior es decir, cualquier vector  $\mathbf{u}=\begin{bmatrix}u_1\\u_2\end{bmatrix}$ cumple $(\mathbf{A}-\lambda\mathbf{I})^{2}\mathbf{u}= 0$. </p>
          <p>Segundo, basta elegir $\mathbf{u}$  que cumpla $(\mathbf{A} - \lambda \mathbf{I})\mathbf{u}= \mathbf{v}$, para  la elección de $\mathbf{u}$ se  realizan las siguientes operaciones:</p>
          \begin{align*}
          (\mathbf{A} - \lambda \mathbf{I})\mathbf{u}&= \mathbf{v}\\
          \begin{bmatrix}
          a-\lambda & b  \\
          c & d -\lambda \\
          \end{bmatrix}
          \begin{bmatrix}
          u_{1}\\
          u_{2}
          \end{bmatrix}&=
          \begin{bmatrix}
          v_1\\
          v_2
          \end{bmatrix}\\
          \begin{bmatrix}
          4-(7) & -3 \\
          3 & 10-(7)\\
          \end{bmatrix}
          \begin{bmatrix}
          u_{1}\\
          u_{2}
          \end{bmatrix}&=
          \begin{bmatrix}
          1\\
          -1
          \end{bmatrix}\\
          \begin{bmatrix}
          -3 & -3 \\
          3 & 3\\
          \end{bmatrix}
          \begin{bmatrix}
          u_{1}\\
          u_{2}
          \end{bmatrix}&=
          \begin{bmatrix}
          1\\
          -1
          \end{bmatrix}\\
          \begin{bmatrix}
          -3u_{1} &-&3u_{2} \\
          3u_{1} &+&3u_{2}
          \end{bmatrix}&=
          \begin{bmatrix}
          1\\
          -1
          \end{bmatrix}
          \end{align*}
          <p>La expresión anterior es equivalente: </p>
          \begin{align*}
          -3u_{1}-3u_{2}=1 \\
           3u_{1}+3u_{2}=-1
          \end{align*}
          <p>Si multiplicamos por -1 a alguna de las ecuaciones anteriores,  es fácil notar que ambas son equivalentes. Si se da un valor arbitrario a una de las variables , se puede determinar el valor de la  otra incógnita.</p>
          <p>Haciendo $u_{1}=0$ obtenemos</p>
          \begin{align*}
            3(0)+3u_{2}&=-1\\
                 3u_{2}&=-1\\
                  u_{2}&=\frac{-1}{3}
          \end{align*}
          <p>Así, un vector $\mathbf{u}$ queda como: </p> 
          $$\mathbf{u}=\begin{bmatrix}u_{1}\\u_{2}\end{bmatrix}
          =\begin{bmatrix}0\\\frac{-1}{3}\end{bmatrix}
          $$
          <p>Tercero, considerando todos los valores obtenidos </p>
          \begin{align*}
          \lambda&=7 &\mathbf{v}&=\begin{bmatrix}1\\-1\end{bmatrix}  &\mathbf{u}&=\begin{bmatrix}0\\\frac{-1}{3}\end{bmatrix}
          \end{align*}
          <p>Se forman  dos soluciones independientes</p>
          \begin{align*}
          \mathbf{x}_{1}(t)&= \mathbf{v}e^{\lambda t} &\mathbf{x}_{2}(t)&= (\mathbf{v}t + \mathbf{u})e^{\lambda t}\\
          \mathbf{x}_{1}(t)&= \begin{bmatrix}1\\-1\end{bmatrix}e^{7t} &\mathbf{x}_{2}(t)&= \left(\begin{bmatrix}1\\-1\end{bmatrix}t + \begin{bmatrix}0\\\frac{-1}{3}\end{bmatrix}\right)e^{7t}\\
          \mathbf{x}_{1}(t)&= \begin{bmatrix}e^{7t}\\-e^{7t}\end{bmatrix} &\mathbf{x}_{2}(t)&= \begin{bmatrix}t\\-t-\frac{1}{3}\end{bmatrix}e^{7t}\\
                           &              &\mathbf{x}_{2}(t)&= \begin{bmatrix}te^{7t}\\ \left(-t-\frac{1}{3}\right)e^{7t}\end{bmatrix}        
          \end{align*}
          <p>Por lo tanto la solución general dada por $\mathbf{x}(t)= c_{1}\mathbf{x}_{1}(t)+ c_{2}\mathbf{x}_{2}(t)$ es: </p>
          <center>
            <table>
              <tr>
                <td>
                  $$\mathbf{x}(t)=c_1 \begin{bmatrix}e^{7t}\\-e^{7t}\end{bmatrix} +c_2 \begin{bmatrix}te^{7t}\\ \left(-t-\frac{1}{3}\right)e^{7t}\end{bmatrix}$$
                </td>
              </tr>
            </table>
          </center>
          <p>Que se puede escribir de las siguientes formas equivalentes:</p>
          <center>
            <table>
              <tr>
                <td>
                  \begin{align*}
                  \mathbf{x}(t)=\begin{bmatrix}
                  x(t)\\
                  y(t)
                  \end{bmatrix} &=
                  \begin{bmatrix} 
                      \left(c_1+c_2t\right)e^{7t}\\
                     -\left(c_1+c_2\left(t+\frac{1}{3}\right)\right)e^{7t} 
                  \end{bmatrix}\\ \\ 
                  x(t)&=\left(c_1+c_2t\right)e^{7t}\\
                  y(t)&= -\left(c_1+c_2\left(t+\frac{1}{3}\right)\right)e^{7t} 
                  \end{align*}
                </td>
              </tr>
            </table>
          </center>
          <br><hr><br><br>
          <h3>Parte 2, Resolver problema de valor inicial</h3>
          <p>Ahora resolvamos el problema de valor inicial  bajo las condiciones $x(0)=2$ y $y(0)=1$. Como ya se cuenta con la solución general solo resta encontrar las contantes $c_1$ y $c_2$ de modo que se cumplan las condiciones iniciales. Esto es:    </p>
          \begin{align*}
          \mathbf{x}(0) =
          \begin{bmatrix}
          x(0)\\
          y(0)
          \end{bmatrix}&=
          \begin{bmatrix}
            \left(c_1+c_2(0)\right)e^{7(0)}\\
          -\left(c_1+c_2\left((0)+\frac{1}{3}\right)\right)e^{7(0)} 
          \end{bmatrix}\\
          \begin{bmatrix}
          2\\
          1
          \end{bmatrix}&=
          \begin{bmatrix}
           c_1\\
          -c_1-\frac{c_2}{3} 
          \end{bmatrix}
          \end{align*}
          <p>Esta ultima expresión  es  un sistema de ecuaciones algebraicas lineales que se puede escribir como:</p>
          \begin{align*}
                  c_1&=2\\
           -c_1-\frac{c_2}{3}&=1 
          \end{align*}
          <p>Sustituyendo $c_1=2$ en la segunda ecuación, se sigue  $c_2=-9$.</p>
          <p>Considerando estos valores encontradas, la solución del problema de valor inicial es:</p>
          \begin{align*}
          \mathbf{x}(t) &=
          \begin{bmatrix}
            \left(2-9t\right)e^{7t}\\
          -\left(2-9\left(t+\frac{1}{3}\right)\right)e^{7t} 
          \end{bmatrix}\\&=
          \begin{bmatrix}
            \left(2-9t\right)e^{7t}\\
          \left(1+9 t \right)e^{7t} 
          \end{bmatrix}
          \end{align*}
          <p>Que también  se puede escribir en la forma $\mathbf{x}(t)=\begin{bmatrix}x(t)\\y(t)\end{bmatrix}$ como: </p>
          <center>
            <table>
              <tr>
                <td>
                  \begin{align*}
                  x(t)&=  \left(2-9t\right)e^{7t}\\
                  y(t)&=\left(1+9 t \right)e^{7t} 
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
tfin=0.4                             #Valor final de t para la gráfica 
x(t)= (2-9*t)*e^(7*t)     #Solución x(t) encontrada  
y(t)= (1+9*t)*e^(7*t)   #Solución y(t) encontrada
###############################################################################
xgraf=plot(x(t), (t, 0, tfin), color ='red', legend_label='$x(t)$', legend_color='red',thickness=3)
ygraf=plot(y(t), (t, 0, tfin), color ='blue', legend_label='$y(t)$', legend_color='blue',thickness=3)
xgraf+ygraf
            </script>
          </div>
          <p>Ahora grafiquemos el diagrama de flujo y también el recorrido determinado por las  funciones $x(t)$ y  $y(t)$ :</p>
          <div class="compute">
            <script type="text/x-sage">
x, y, t= var('x y t')
####################################################################################
A = matrix([[4, -3], [3, 10]])    # se introduce la matriz del sistema
v1=vector([1,-1])                   # vectro propio 
tfin=3                            #Valor final de t para la gráfica
vi=[0,2,1]                    #Condicones iniciales 
xx(t)= (2-9*t)*e^(7*t)           #Solución x(t) encontrada  
yy(t)= (1+9*t)*e^(7*t)         #Solución y(t) encontrada
escala=3.5                         #Se puede cambiar la escala de los ejes
######################################################################################
ejes=escala*max(norm(vector([vi[1],vi[2]])),norm(vector([v1[0],v1[1]])))
P=parametric_plot((xx(t), yy(t)), (t,0,tfin),axes_labels=['$x(t)$', '$y(t)$'],color='green',thickness=3)
P+=parametric_plot((xx(-t), yy(-t)), (t,0,tfin),color='green',thickness=2)
P+=point((vi[1],vi[2]), color='black',size=30,zorder=4)
P+=plot(v1,thickness=3,color='red')+text('$ \mathbf{v}$',(v1[0]+ejes/20,v1[1]+ejes/20),fontsize=12,horizontal_alignment='right',color='red')
P+=line([-sqrt(2)*ejes*v1,sqrt(2)*ejes*v1],linestyle='--',thickness=2, color='red')
F = [A[0,0]*x+A[0,1]*y,A[1,0]*x+A[1,1]*y]
Fn = [F[0]/sqrt(F[0]^2 + F[1]^2),F[1]/sqrt(F[0]^2 + F[1]^2)]
P+= plot_vector_field(Fn, (x,-ejes,ejes), (y,-ejes,ejes), axes_labels=['$x(t)$','$y(t)$'])
P.show(frame=True, title='$Recorrido\ y\ Diagrama\ de\ flujo$', xmax = ejes, xmin = -ejes, ymax = ejes, ymin = -ejes, aspect_ratio=1,gridlines=True)
            </script>
          </div>
          <p>Como se observa, el vector propio $\mathbf{v}=\begin{bmatrix}1\\-1
          \end{bmatrix}$ determina una recta que separa al plano en dos regiones donde el diagrama de flujo tiene geometría similar.</p> 
          <p>El recorrido determinado por los puntos  $(x(t), y(t))$   es tangente al diagrama de flujo y también es tangente a la recta que determina el vector propio en el origen, esto se observa mejor si se disminuye el valor de  $\mathtt{escala}$ en las lineas anteriores.  </p>   
          <p>Por otro lado  el recorrido tiene  la forma de una curva que se aleja del origen  en  la dirección que determina el diagrama de flujo, es decir tiende a hacia $-\infty$ en sentido de las $\mathtt{x}$ y a $+\infty$ en sentido de las $\mathtt{y}$. Esto se debe a que el valor propio $\lambda$  es positivo y ambas funciones  $x(t)$ y  $y(t)$  tiene el factor $e^{7t}$ así,  si $t\rightarrow\infty$  implica que  $e^{7t}\rightarrow\infty$ y como  los otros factores  de $x(t)$ y  $y(t)$,  $\left(2-9t\right)$ y $\left(1+9 t \right)$, para $t$ suficientemente grande tienen  valor negativo y positivo respectivamente, se sigue que $x(t)\rightarrow -\infty$ y  $y(t)\rightarrow +\infty$. </p>
          <p>Lo anterior se  realizo considerando al problemas de valor inicial con condiciones iniciales $(x_0,y_0)=(2,1)$, para obtener el diagrama de fase  grafiquemos los recorridos correspondientes a $(1,2)$, $(-1,3)$, $(2,0)$, $(3,-1)$, $(4,-2)$, $(-1,-2)$, $(1,-3)$, $(-2,0)$, $(-3,1)$ y  $(-4,2)$.</p>
          <div class="compute">
            <script type="text/x-sage">
####################################################################################
A = matrix([[4, -3], [3, 10]])   # se introduce la matriz del sistema
v1=vector([1,-1])                   # vectro propio 
tfin=2               #Valor final de t para la gráfica
dt=0.05                           #incremento de t para la gráfica
VI=[[0,1,2], [0,-1,3], [0,2,0],[0,3,-1],[0,4,-2],[0,-1,-2], [0,1,-3], [0,-2,0],[0,-3,1],[0,-4,2]] #valores iniciales en la forma[t0,x0,y0]
escala=2
######################################################################################
x, y, t= var('x y t')
ejes=escala*max([norm(vector(VI[i]))  for i in range(len(VI))])
P=plot(v1,thickness=3,color='red',zorder=4)+text('$ \mathbf{v}$',(v1[0]+ejes/20,v1[1]+ejes/20),fontsize=12,horizontal_alignment='right',color='red')
P+=line([-sqrt(2)*ejes*v1,sqrt(2)*ejes*v1],linestyle='--',thickness=2, color='red',zorder=4)
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
P+=sum( point((VI[i][1],VI[i][2]), color='red',size=20,zorder=4) for i in range(len(VI)))
P.show(frame=True,axes_labels=['$x(t)$','$y(t)$'] , xmax = ejes, xmin = -ejes, ymax = ejes, ymin = -ejes, aspect_ratio=1,gridlines=True)
            </script>
          </div>
          <p>Como se observa,  cada uno de los recorrido del zona superior delimitada por la recta determinada por $\mathbf{v}$ también  tiene  la misma tendencia que el caso $(x_0,y_0)=(1,-2)$, esto se puede verificar aumentando  el valor de la $\mathtt{escala}$ en las lineas anteriores por lo tanto,  se puede concluir  que las  soluciones de los  demás problemas de valor inicial en esa zona  tendrán un comportamientos similar, $x(t)\rightarrow -\infty$ y  $y(t)\rightarrow +\infty$.</p>
          <p>De forma análoga se puede interpretar las  soluciones en  con valores iniciales en zona inferior y se concluye que $x(t)\rightarrow +\infty$ y  $y(t)\rightarrow -\infty$ para valores iniciales ubicados bajo la recta.   </p>
          <br><hr><br><br>
          <h2>Actividad 1</h2>
          <p>Dados los siguientes sistemas, calcular los valores y vectores propios correspondientes y asociarlos con la respuesta correcta.</p>
          \begin{align*}
          &A&  &B& &C& &D&\\
          x'(t) &=  -5x+4y            &  x'(t) &= 7x -y   &  x'(t) &=  x-3y     & x'(t) &= 5x     \\
          y'(t) &=\ \ \ \ \ \  -5y      &y'(t) &= 4x+3y   &  y'(t) &= 3x+7y     & y'(t) &=\ \ \ 5y    
          \end{align*}
          <center>
            <table>
              <tr>
                <td>
                  $\lambda=4$ <br>
                  $\mathbf{v}=
          \begin{bmatrix}
          1\\ 
          -1\end{bmatrix}$
                </td>
                <td>
                  $\lambda=-5$<br>
                  $\mathbf{v}=
          \begin{bmatrix}
          1\\
          0\end{bmatrix}$
                </td>
                <td>
                  $\lambda=5$<br>
                  $\mathbf{v}=
          \begin{bmatrix}
          1\\
          2\end{bmatrix}$
                </td>
                <td>
                  $\lambda=4$<br>
                  $\mathbf{v}=
          \begin{bmatrix}
          2\\
          1  \end{bmatrix}$
                </td>
                <td>
                  $\lambda=5$<br>
                  $\mathbf{v}=
          \begin{bmatrix}
          1\\
          0  \end{bmatrix}$
                </td>
              </tr>
              <tr>
                <td>
                  <select name="one" id="o1">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="none">Ninguno</option>
              </select>
                </td>
                <td>
                  <select name="two" id="o2">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="none">Ninguno</option>
              </select>
                </td>
                <td>
                   <select name="three" id="o3">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="none">Ninguno</option>
              </select>
                </td>
                <td>
                  <select name="four" id="o4">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="none">Ninguno</option>
              </select>
                </td>
                <td>
                  <select name="five" id="o5">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="none">Ninguno</option>
              </select>
                </td>
              </tr>
            </table>
          </center>
            <button id="ans">Revisar</button>
            <center>
                  <h2 id="ansi"></h2>
            </center>
          <br><hr><br><br>
          <h2>Actividad 2</h2>
          <p>El sistema de ecuaciones diferenciales</p>
          \begin{align*}
          x'(t) &=  7x  -y\\
          y'(t) &=  4x+11y
          \end{align*}
          <p>tiene valor propio $\lambda=9$ con  vectores propio $\mathbf{v}=\begin{bmatrix}1\\ -2\end{bmatrix}$.</p>
          <h2><strong>Tareas</strong></h2>
          <p>Resuelva los las siguientes tareas en su cuaderno, copie  un esbozo de las gráficas en su cuaderno.</p>
          <ol>
            <li>Obtener la solución general.</li><br><br>
            <li>Obtenga la las funciones solución $x(t)$ y $y(t)$  que resuelven el problema de valor inicial $[t0,x0,y0]=[0,1,4]$</li><br><br>
            <li>Después  haga una gráfica  de las soluciones usando la siguiente celda SAGE;</li><br>
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
            </div><br>
            <li>¿Hacia donde tienden los valores de las funciones $x(t)$ y $y(t)$ cuando $t\rightarrow\infty $?</li><br><br>
            <li>
              <p>Mediante las siguientes lineas  en SAGE obtenga el diagrama de fase y de flujo; solo  debe agregar la matiz del sistema mas recorridos correspondientes a la  con otros valores iniciales. La forma en  se escribe una matriz  es:</p>
              $$
              \mathbf{A}=\begin{bmatrix}
              a&b\\
              c&d
              \end{bmatrix}\ \  \text{es}\ \  \mathtt{A = matrix([[a, b], [c, d]])}$$
              <p>Y  para agregar valores iniciales a la lista $\mathtt{VI}=[[0,1,4]]$  solo se  separa  por coma el nuevo valor por ejemplo agregar $\mathtt{[1,2,3]}$ a la lista quedaría como  $\mathtt{VI}=[[0,1,1],[1,2,3]]$.</p>
            </li>
            <div class="compute">
              <script type="text/x-sage">
x, y, t= var('x y t')
####################################################################################
A = matrix([[ , ], [ , ]])       # se introduce la matriz del sistema
tfin=3               #Valor final de t para la gráfica
dt=0.05                          #incremento de t para la gráfica
VI=[[0,1,4]   ]                  #valores iniciales en la forma[t0,x0,y0]
######################################################################################
ejes=3*max([norm(vector(VI[i]))  for i in range(len(VI))])
F = [A[0,0]*x+A[0,1]*y,A[1,0]*x+A[1,1]*y]
Fn = [F[0]/sqrt(F[0]^2 + F[1]^2),F[1]/sqrt(F[0]^2 + F[1]^2)]
P= plot_vector_field(Fn, (x,-ejes,ejes), (y,-ejes,ejes))
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
            <li>¿Hacia donde tienden las funciones solución para cada una de las condiciones iniciales?</li><br><br>
            <li>
              <p>Usando la celda SAGE anterior </p>
              <ul>
                <p>a) ¿Cómo son los diagramas de fase para los sistemas de la <strong>Actividad 1</strong>?</p>
                <p>b) ¿Cómo  es la tendencia de las funciones solución y de su recorrido?</p>
              </ul>
            </li>
          </ol> 
          <a href="tema2-4.php" id="ant">&#8249;</a>
          </div>
   </center>
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

        if(o1val == "C" && o2val == "A" && o3val == "B" && o4val == "none" && o5val == "D"){
          document.getElementById("ansi").innerHTML = "¡Respuesta Correcta!";
          document.getElementById("ansi").style.color = "green";
        }else{
          document.getElementById("ansi").innerHTML = "Intentalo de nuevo.";
          document.getElementById("ansi").style.color = "red";
        }
      });
     })();
   </script>
   <?php 
      include("../arrow.php");
   ?>
   </body>
</html>