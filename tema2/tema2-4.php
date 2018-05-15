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
          <h2>2.3. Complejos</h2>
          <p>De forma similar al caso en que los  valores propios sean reales y distintos, cuando son complejos distintos, el método descrito previamente obtiene  también $n$ soluciones linealmente independientes. La cuestión es que los vectores propios asociados a valores propios complejos son comúnmente complejos.</p>
          <p>Para obtener soluciones con valores reales, como la matriz $\mathbf{A}$ tiene sólo entradas reales se implica que los coeficientes en la ecuación$|\mathbf{A} - \lambda \mathbf{I}|=0$ para calcular valores propios  serán todos reales, por lo tanto  se tiene que los valores propios complejos se presentarán en pares conjugados complejos $\lambda=p+qi$ y $\bar{\lambda}=p-qi$.</p>
          <p>Si $\mathbf{v}$ es un vector propio asociado con $\lambda$, tal que</p>
          $$(\mathbf{A} - \lambda \mathbf{I})\mathbf{v} = 0$$
          <p>si conjugamos la expresión  anterior tenemos que </p>
          \begin{align*}
          \overline{(\mathbf{A} - \lambda \mathbf{I})\mathbf{v}} &= \bar{0}\\
          ( \bar{\mathbf{A}} - \bar{\lambda} \bar{\mathbf{I}})\bar{\mathbf{v}} &= 0\\
          (\mathbf{A} - \bar{\lambda} \mathbf{I})\bar{\mathbf{v}} &= 0
          \end{align*}
          <p>donde la última igualdad se da ya que  $\mathbf{A}=\bar{\mathbf{A}}$ e  $\mathbf{I}=\bar{\mathbf{I}}$ (siendo estas matrices reales). De este modo, el conjugado $\bar{\mathbf{v}}$ de $\mathbf{v}$ será un vector propio de  $\bar{\lambda}$.</p>
          <p>El conjugado de un vector se define componente a componente; si</p>
          $$
          \mathbf{v} =
          \begin{bmatrix}
          a_{1}+b_{1}i\\
          a_{2}+b_{2}i\\
          \vdots \\
          a_{n}+b_{n}i
          \end{bmatrix} 
          = 
          \begin{bmatrix}
          a_{1}\\
          a_{2}\\
          \vdots \\
          a_{n}
          \end{bmatrix}
          +
          \begin{bmatrix}
          b_{1}\\
          b_{2}\\
          \vdots \\
          b_{n}
          \end{bmatrix}i
          = \mathbf{a}+\mathbf{b} i
          $$
          <p>entonces $\bar{\mathbf{v}} =\mathbf{a}-\mathbf{b} i$. </p>
          <p>Considerando lo anterior, la solución  con valores propios complejos  $\lambda$ y vector propio complejo  $\mathbf{v}$ es:</p>
          $$\mathbf{x}(t) = \mathbf{v} e^{\lambda t} = \mathbf{v} e^{(p+qi)t} = (\mathbf{a} + \mathbf{b} i)e^{pt} (\cos qt + i \sin qt);$$
          <p>o realizando esto las respectivas operaciones tenemos: </p>
          $$\mathbf{x}(t) = e^{pt} (\mathbf{a} \cos qt - \mathbf{b} \sin qt) + ie^{pt} (\mathbf{b} \cos qt + \mathbf{a} \sin qt).$$
          <p>Debido a que las partes real e imaginaria de una solución de valores complejos son también soluciones, se obtienen así las dos soluciones de con valores reales:</p>
          \begin{align*}
          \mathbf{x}_1(t) &= \text{Re}[\mathbf{x}(t)] = e^{pt} (\mathbf{a} \cos qt - \mathbf{b} \sin qt)\\
          \mathbf{x}_2(t) &= \text{Im}[\mathbf{x}(t)] = e^{pt} (\mathbf{b} \cos qt + \mathbf{a} \sin qt)
          \end{align*}
          <p>asociadas a los eigenvalores conjugados complejos $p  \pm qi$. </p>
          <div class="note">
              <div class="tnote">
                <p>NOTA</p>
              </div>
              <div class="cnote">
                 <p>Se verifica fácilmente que las mismas dos soluciones de valores reales resultan de tomar las partes real e imagina ria de $\bar{\mathbf{v}} e^{\bar{\lambda} t}$.</p>
              </div>
            </div>
            <p>De este modo, la forma de proceder para encontrar estas soluciones es de la siguiente:</p>
            <p><strong>Paso 1:</strong> Encontrar los valores  y vectores propios del sistema. Identifíquese sus partes real e imaginaria. </p>  
            <p><strong>Paso 2:</strong> Escribir de manera explícita, una solución de valor complejo $\mathbf{x}(t)$ asociada con el valor propio complejo $\lambda$;</p>
            <p><strong>Paso 3:</strong> Obténganse las partes real e imaginaria $\mathbf{x}_1(t)$ y $\mathbf{x}_2(t)$ para conseguir dos soluciones de valores reales independientes.</p>
            <br><hr><br><br>
            <p>Particularmente, para el caso de sistemas de $2\times 2$, es suficiente obtener un valor propios $\lambda=p+qi$ y su respectivo vector propio, el cual  puede ser escrito  de las siguientes maneras:</p>
            $$\mathbf{v_1}=
            \begin{bmatrix}a_1+ib_1\\a_2+ib_2\end{bmatrix}=
            \begin{bmatrix}a_1\\a_2\end{bmatrix}+i\begin{bmatrix}b_1\\b_2\end{bmatrix}=
            \mathbf{a}+i\mathbf{b}
            $$
            <p>con esto, la solución general de esta dada por:  </p>  
            $$\mathbf{x}(t) = c_1\mathbf{x}_1(t) + c_2\mathbf{x}_2(t)$$
            <p>donde </p>
            \begin{align*}
            \mathbf{x}_1(t) &=  e^{pt} (\mathbf{a} \cos qt - \mathbf{b} \sin qt)\\
            \mathbf{x}_2(t) &=  e^{pt} (\mathbf{b} \cos qt + \mathbf{a} \sin qt)
            \end{align*}
            <p>y de este modo la  solución general se puede escribir como:</p>
            \begin{align*}
            \mathbf{x}(t) 
            &=c_1\mathbf{x}_1(t) + c_2\mathbf{x}_2(t)\\
            &=c_1e^{pt} (\mathbf{a} \cos qt - \mathbf{b} \sin qt)+c_2e^{pt} (\mathbf{b} \cos qt + \mathbf{a} \sin qt)\\
            &=c_1e^{pt} \left(\begin{bmatrix}a_1\\a_2\end{bmatrix} \cos qt - \begin{bmatrix}b_1\\b_2\end{bmatrix} \sin qt\right)
            +
            c_2e^{pt} \left(\begin{bmatrix}b_1\\b_2\end{bmatrix} \cos qt + \begin{bmatrix}a_1\\a_2\end{bmatrix} \sin qt\right)\\
            &=c_1e^{pt}\left(\begin{bmatrix}a_1\cos qt\\a_2\cos qt\end{bmatrix}  - \begin{bmatrix}b_1\sin qt\\b_2\sin qt\end{bmatrix}\right)
            +
            c_2e^{pt}\left(\begin{bmatrix}b_1\cos qt\\b_2\cos qt\end{bmatrix}  + \begin{bmatrix}a_1\sin qt\\a_2\sin qt\end{bmatrix}\right)\\
            &=c_1e^{pt}\begin{bmatrix}a_1\cos qt -b_1\sin qt\\a_2\cos qt -b_2\sin qt\end{bmatrix}
            +
            c_2e^{pt} \begin{bmatrix}b_1\cos qt+a_1\sin qt\\b_2\cos qt+ a_2\sin qt\end{bmatrix}\\
            &=\begin{bmatrix}
              c_1e^{pt}(a_1\cos qt -b_1\sin qt)+c_2e^{pt}(b_1\cos qt+a_1\sin qt)\\
              c_1e^{pt}(a_2\cos qt -b_2\sin qt)+c_2e^{pt}(b_2\cos qt+ a_2\sin qt)
              \end{bmatrix}
            \end{align*}
            <p>Así, las funciones $x(t)$ y $y(t)$ que conforman la solución $\mathbf{x}(t)=\begin{bmatrix}
            x(t)\\y(t)\end{bmatrix}$  quedan determinadas como: </p>
            \begin{align*}
            x(t)&=c_1e^{pt}(a_1\cos qt -b_1\sin qt)+c_2e^{pt}(b_1\cos qt+a_1\sin qt)\\
            y(t)&=c_1e^{pt}(a_2\cos qt -b_2\sin qt)+c_2e^{pt}(b_2\cos qt+ a_2\sin qt)
            \end{align*}
            <p>donde $c_1$ y $c_2$ son constantes  arbitrarias que, en caso de estarse resolviendo un problema de valor inicial, quedan determinadas. </p> 
            <br><hr><br><br>
            <h2>Ejemplo</h2>
            <p>Para ejemplificar consideremos el sistema </p>
            \begin{align*}
            x'(t) &= -x+4y\\
            y'(t) &= -2x+3y
            \end{align*}
            <p>Se escribe en la forma matricial $\mathbf{x'}=\mathbf{A}\mathbf{x}$ como:</p>
            $$\begin{bmatrix}
            x'  \\
            y'  \\
            \end{bmatrix}=\begin{bmatrix}
            -1 & 4  \\
            -2 & 3  \\
            \end{bmatrix}\begin{bmatrix}
            x  \\
            y  \\
            \end{bmatrix}$$
            <p>por lo tanto, la matriz de coeficientes es</p>
            $$\mathbf{A}=\begin{bmatrix}
            -1 & 4  \\
            -2 & 3  \\
            \end{bmatrix}$$ 
            <h3>Parte 1, Obtener la solución general.</h3>
            <p>Primero se procede a encontrar los valores propios resolviendo la ecuación  $\left|\mathbf{A}-\lambda\mathbf{I}\right| = 0$  como se muestra a continuación  </p>
            \begin{align*}
            \left|\mathbf{A}-\lambda\mathbf{I}\right| &= 0\\
            \left|\begin{bmatrix}
            -1 & 4  \\
            -2 & 3 
            \end{bmatrix}
            -\lambda\begin{bmatrix}
            1 & 0  \\
            0 & 1  \\
            \end{bmatrix}
            \right|&= 0\\
            \left|\begin{bmatrix}
            -1 & 4  \\
            -2 & 3 
            \end{bmatrix}
            -\begin{bmatrix}
            \lambda & 0  \\
            0 & \lambda  \\
            \end{bmatrix}
            \right|&= 0\\
            \begin{vmatrix}
            -1-\lambda & 4  \\
            -2 & 3-\lambda  \\
            \end{vmatrix}
            &= 0\\
            (-1-\lambda)(3 -\lambda) - (4)(-2) &= 0\\
            \lambda^2-2\lambda+5&= 0\\
            \end{align*}
            <p>esta ecuación de segundo grado se puede resolver mediante SAGE  al evaluar las siguientes  lineas que también generan una representación gráfica de lo valores propios en el plano complejo:</p>
            <div class="compute">
              <script type="text/x-sage">
l =var('l')             #Se declara la variable l=lambda 
sol=solve(l^2-2*l+5==0,l) #Se introduce la ecuacion a resolver
##############################################################################################################
pretty_print(html(r"$\lambda_1 = %s$"  %latex(sol[1].rhs())))
pretty_print(html(r"$\lambda_2 = %s$"  %latex(sol[0].rhs())))
VI=[[ real_part(sol[0].rhs()), imag_part(sol[0].rhs())], [ real_part(sol[1].rhs()), imag_part(sol[1].rhs())]]
dd=sum((point((VI[i][0],VI[i][1]),size=30,zorder=4)+text(r"$%s$"%latex(sol[0].rhs()) ,(VI[i][0]+0.1,VI[i][1]+0.1), fontsize=14,horizontal_alignment='left')) for i in range(len(VI)))
ejes=sqrt(max(norm(ComplexNumber(real_part(sol[0].rhs()), imag_part(sol[0].rhs()))),norm(ComplexNumber(real_part(sol[1].rhs()), imag_part(sol[1].rhs())))))
dd.show(frame=True, title='$Valores\ pripios\ \lambda$',axes_labels=['$Re(\lambda)$','$Im(\lambda)$',], xmax = ejes, xmin = -ejes, ymax = ejes, ymin = -ejes, aspect_ratio=1,gridlines=True)
              </script>
            </div>
            <p>Se tiene entonces que los valores propios son $\lambda_1 =1+2i$ y $\lambda_2=1-2i$, seleccionamos alguno  como $\lambda$, en este caso hacemos $\lambda_1=\lambda$,  con esto se procede a encontrar su respectivo vector propio resolviendo sistema $(\mathbf{A} - \lambda\mathbf{I})\mathbf{v} = 0$ como se muestra a continuación:</p>
            $$\begin{bmatrix}
            a-\lambda & b  \\
            c & d -\lambda \\
            \end{bmatrix}
            \begin{bmatrix}
            v_{1}\\
            v_{2}
            \end{bmatrix}=
            \begin{bmatrix}
            0\\
            0
            \end{bmatrix}$$
            $$\begin{bmatrix}
            -1-(1+2i) & 4 \\
            -2 & 3-(1+2i)\\
            \end{bmatrix}
            \begin{bmatrix}
            v_{1}\\
            v_{2}
            \end{bmatrix}=
            \begin{bmatrix}
            0\\
            0
            \end{bmatrix}$$
            $$\begin{bmatrix}
            -2-2i & 4 \\
            -2 & 2-2i\\
            \end{bmatrix}
            \begin{bmatrix}
            v_{1}\\
            v_{2}
            \end{bmatrix}=
            \begin{bmatrix}
            0\\
            0
            \end{bmatrix}$$
            $$\begin{bmatrix}
            (-2-2i)v_{1} &+ &4v_{2} \\
            -2v_{1} &+& (2-2i)v_{2}
            \end{bmatrix}=
            \begin{bmatrix}
            0\\
            0
            \end{bmatrix}$$
            <p>Esto último es equivalente a </p>
            \begin{align*}
            (-2-2i)v_{1} + 4v_{2}&=0\\
            -2v_{1} + (2-2i)v_{2}&=0
            \end{align*}
            <p>Para resolver este sistema usamos método de eliminación, multiplicado u111111111na cada ecuación por el primer coeficiente de la otra resultando lo siguiente:</p>
            \begin{align*}
            -2((-2-2i)v_{1} + 4v_{2})&=-2(0)\\
            (-2-2i)(-2v_{1} + (2-2i)v_{2})&=(-2-2i)(0)
            \end{align*}
            $$\begin{matrix}
            (4+4i)v_{1}  -8v_{2}=0 \\
            (4+4i)v_{1}  -8v_{2}=0
            \end{matrix}$$
            <p>Estas son  ecuaciones equivalentes y, si se le da un valor arbitrario no nulo a una de las variables de cada sistema, se puede determinar el valor de la  otra incógnita.</p>
            <p>Haciendo $v_{1}=2$ obtenemos</p>
            \begin{align*}
            (4+4i)(2)-8v_{2}&=0 \\
            (4+4i)(2)-8v_{2}&=0 \\
                     -8v_{2}&=-2(4+4i)\\
                     v_{2}&=1+i
            \end{align*}
            <p>Así, un vector propio $\mathbf{v}$ asociado a $\lambda$ queda como:  </p>
            $$\mathbf{v}=\begin{bmatrix}v_{1}\\v_{2}\end{bmatrix}
            =\begin{bmatrix}2\\1+i\end{bmatrix}
            =\begin{bmatrix}2\\1\end{bmatrix}+i\begin{bmatrix}0\\1\end{bmatrix}
            $$
            <p>Como se ha denotado a  $\mathbf{v}=\mathbf{a}+i\mathbf{b}$ se tiene que</p>
            $$\mathbf{a}=\begin{bmatrix}2\\1\end{bmatrix}\ \ \ \ \text{y}\ \ \ \ \mathbf{b}=\begin{bmatrix}0\\1\end{bmatrix}$$
            <p>Y como hemos denotado a $\lambda=p+iq$  se tiene que $p=1$ y $q=2$</p>
            <p>Con esto la solución general de esta dada por:   </p> 
            $$\mathbf{x}(t) = c_1\mathbf{x}_1(t) + c_2\mathbf{x}_2(t)$$
            <p>donde </p>
            \begin{align*}
            \mathbf{x}_1(t) &=  e^{pt} (\mathbf{a} \cos qt - \mathbf{b} \sin qt)\\
            \mathbf{x}_2(t) &=  e^{pt} (\mathbf{b} \cos qt + \mathbf{a} \sin qt)
            \end{align*}
            <p>En este caso se tiene: </p>
            \begin{align*}
            \mathbf{x}_1(t) &=  e^{t} \left(\begin{bmatrix}2\\1\end{bmatrix} \cos 2t - \begin{bmatrix}0\\1\end{bmatrix} \sin 2t\right)\\
            \mathbf{x}_2(t) &=  e^{t} \left(\begin{bmatrix}0\\1\end{bmatrix} \cos 2t + \begin{bmatrix}2\\1\end{bmatrix} \sin 2t\right)
            \end{align*}
            <p>o de forma equivalente </p>
            \begin{align*}
            \mathbf{x}_1(t) &=  e^{t} \begin{bmatrix}2\cos 2t\\\cos 2t-\sin 2t\end{bmatrix}\\
            \mathbf{x}_2(t) &=  e^{t} \begin{bmatrix}2\sin 2t\\\cos 2t+\sin 2t\end{bmatrix} 
            \end{align*}
            <p>Por lo tanto la solución general es: </p> 
            <center>
            <table>
              <tr>
                <td>
                  $$\mathbf{x}(t) = c_1e^{t} \begin{bmatrix}2\cos 2t\\\cos 2t-\sin 2t\end{bmatrix}
                  + 
                  c_2e^{t} \begin{bmatrix}2\sin 2t\\\cos 2t+\sin 2t\end{bmatrix}$$
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
                  2e^{t} \left(c_1\cos 2t+c_2  \sin 2t\right)\\
                  e^{t}   \left((c_1+c_2)\cos 2t+(c_2-c_1)\sin 2t \right) 
                  \end{bmatrix}\\ \\ 
                  x(t)&=2e^{t} \left(c_1 \cos 2t+c_2  \sin 2t\right)\\
                  y(t)&=e^{t}   \left((c_1+c_2)\cos 2t+(c_2-c_1)\sin 2t \right) 
                  \end{align*}
                </td>
              </tr>
            </table>
            </center>
            <br><hr><br><br>
            <h3>Parte 2, Resolver problema de valor inicial</h3>
            <p>Siguiendo con este ejemplo, resolvamos el problema de valor inicial  bajo las condiciones $x(0)=1$ y $y(0)=3$. Como ya se cuenta con la solución general solo resta encontrar las contantes $c_1$ y $c_2$ de modo que se cumplan las condiciones iniciales. Esto es:   </p> 
            \begin{align*}
            \mathbf{x}(0) =
            \begin{bmatrix}
            x(0)\\
            y(0)
            \end{bmatrix}&=
            \begin{bmatrix}
            2e^{(0)} \left( c_1 \cos 2(0)+c_2  \sin 2(0) \right)\\
            e^{(0)}   \left( (c_1+c_2)\cos 2(0)+(c_2-c_1)\sin 2(0) \right) 
            \end{bmatrix}\\
            \begin{bmatrix}
            1\\
            3
            \end{bmatrix}&=
            \begin{bmatrix}
            2(1) \left(c_1 (1)+c_2  (0)\right)\\
            (1)  \left((c_1+c_2)(1)+(c_2-c_1)(0) \right) 
            \end{bmatrix}\\
            \begin{bmatrix}
            1\\
            3
            \end{bmatrix}&=
            \begin{bmatrix}
            2 c_1\\
            c_1+c_2 
            \end{bmatrix}
            \end{align*}
            <p>Esta ultima expresión  es  un sistema de ecuaciones algebraicas lineales que se puede escribir como:</p>
            \begin{align*}
            2 c_1&=1\\
            c_1+c_2&=3 
            \end{align*}
            <p>Despejando $c_1$ y sustituyendo en la otra ecuación, se sigue $c_1=\frac{1}{2}$ y $c_2=\frac{5}{2}$. Una forma de verificar  estos resultados es resolver mediante SAGE  el sistema con las siguientes lineas:</p>
            <div class="compute">
              <script type="text/x-sage">
c1,c2=var('c1,c2')      # declaramos que c1 y c2 son variables
eq1=  2*c1==1       # se escribe ecuación 1 
eq2=c1   +c2==3       # se escribe ecuación 2 
solve([eq1,eq2],c1,c2)    # comando para resolver el sistema
              </script>
            </div>
            <p>Considerando estos valores encontradas, la solución del problema de valor inicial es:</p>
            \begin{align*}
            \mathbf{x}(t) &=
            \begin{bmatrix}
            2e^{t} \left(\frac{1}{2}\cos 2t+\frac{5}{2}  \sin 2t\right)\\
            e^{t}   \left((\frac{1}{2}+\frac{5}{2})\cos 2t+(\frac{5}{2}-\frac{1}{2})\sin 2t \right) 
            \end{bmatrix}\\&=
            \begin{bmatrix}
            e^{t} \left(\cos 2t+5\sin 2t\right)\\
            e^{t}   \left(3\cos 2t+2\sin 2t \right) 
            \end{bmatrix}
            \end{align*}
            <p>Que también  se puede escribir en la forma $\mathbf{x}(t)=\begin{bmatrix}x(t)\\y(t)\end{bmatrix}$ : </p>
            <center>
            <table>
              <tr>
                <td>
                  \begin{align*}
                  x(t)&=e^{t} \left(\cos 2t+5\sin 2t\right)\\
                  y(t)&=e^{t}   \left(3\cos 2t+2\sin 2t \right) 
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
tfin=8                               #Valor final de t para la gráfica 
x(t)=(cos(2*t) + 5*sin(2*t))*e^t     #Solución x(t) encontrada  
y(t)=(3*cos(2*t) + 2*sin(2*t))*e^t   #Solución y(t) encontrada
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
A = matrix([[-1, 4], [-2, 3]])    # se introduce la matriz del sistema
tfin=2                            #Valor final de t para la gráfica
vi=[0,1,3]                    #Condicones iniciales 
xx(t)=(cos(2*t) + 5*sin(2*t))*e^t   # fucnción x(t) encontrada
yy(t)=(3*cos(2*t) + 2*sin(2*t))*e^t # fucnción y(t) encontrada
escala=3.5                         #Se puede cambiar la escala de los ejes
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
        <p>Como se observa, el recorrido  determinado por los puntos  $(x(t), y(t))$   es tangente al diagrama de flujo, por otro lado  el recorrido tiene  la forma de  una espiral que   en sentido de las manecillas del reloj  como si emanara del origen. Esto se debe a que la parte real de $\lambda$  es $p=5$ y por  lo tanto ambas funciones  $x(t)$ y  $y(t)$  tiene el factor $e^t$ así,  si $t\rightarrow\infty$  implica que  $e^t\rightarrow\infty$   y como sus otros factores respectivos  $\left(\cos 2t+5\sin 2t\right)$ y $\left(3\cos 2t+2\sin 2t \right) $ son  acotadas se sigue que  la distancia del origen  $(x(t), y(t))$ tiende a infinito cuando $t\rightarrow\infty$. </p>
        <p>Lo anterior también lo podemos visualizar obteniendo una representación gráfica de la trayectoria, el recorrido y las funciones como se puede hacer a continuación mediante SAGE.  </p>    
        <div class="compute">
            <script type="text/x-sage">
A = matrix([[-1, 4], [-2, 3]])  #Aquí se  ponen las entradas de la matriz del sistema 
[t0,x0,y0]=[0,1,3]            #Se pueden modificar las condicones iniciales 
tfin=10                   #Valor final de t para las graficas
#####################################################################################
t = var('t')         
x = function('x')(t)
y = function('y')(t)
f= A[0,0]*x+A[0,1]*y
g= A[1,0]*x+A[1,1]*y
de1 = diff(x,t) == f
de2 = diff(y,t) == g
sol = desolve_system([de1, de2], [x,y], ics=[t0,x0,y0])
x(t)=sol[0].rhs()
y(t)=sol[1].rhs()
xgraf=plot(x(t), (t, t0, tfin), color ='blue', legend_label='$x(t)$', legend_color='blue',axes_labels=['$t$', '$x(t)$'])
ygraf=plot(y(t), (t, t0, tfin), color ='red', legend_label='$y(t)$', legend_color='red',axes_labels=['$t$', '$y(t)$'])
recorrido=parametric_plot((x(t), y(t)), (t, t0, tfin),color ='green', legend_label='$R$',legend_color='green', axes_labels=['$x(t)$', '$y(t)$'])
x, y, t = var('x y t')
F = [A[0,0]*x+A[0,1]*y,A[1,0]*x+A[1,1]*y]
T = desolve_system_rk4(F,[x, y],ics=[t0,x0,y0],ivar=t,end_points=tfin,step=0.1)
X = [ [i,j,0] for i,j,k in T]
Y = [ [i,0,k] for i,j,k in T]
R = [ [0,j,k] for i,j,k in T]
ejex=[min([T[i][1]] for i in (0..len(T)-1))[0],max([T[i][1]] for i in (0..len(T)-1))[0]]
ejey=[min([T[i][2]] for i in (0..len(T)-1))[0],max([T[i][2]] for i in (0..len(T)-1))[0]]
ejet=[min([T[i][0]] for i in (0..len(T)-1))[0],max([T[i][0]] for i in (0..len(T)-1))[0]]
mtxy=[abs(ejet[0]-ejet[1]),abs(ejex[0]-ejex[1]),abs(ejey[0]-ejey[1])]
pro=[mtxy[0]/max(mtxy),mtxy[1]/max(mtxy),mtxy[2]/max(mtxy)]
ipro=[max(mtxy)/mtxy[0],max(mtxy)/mtxy[1],max(mtxy)/mtxy[2]]
rtxy=[3*abs(ejet[0]-ejet[1])/100,3*abs(ejex[0]-ejex[1])/100,3*abs(ejey[0]-ejey[1])/100]
waxr=[max(mtxy[1],mtxy[2]),max(mtxy[0],mtxy[2]),max(mtxy[0],mtxy[1])]
O=point3d((0,0,0),size=10,color='black')
lt=arrow3d((ejet[0],0,0),(ejet[1],0,0),width=ipro[0],head_radius=ipro[0]/10,head_len=rtxy[0])+text3d("t",(ejet[1]+rtxy[0],0,0),fontsize=12)
lx=arrow3d((0,ejex[0],0),(0,ejex[1],0),width=ipro[1],head_radius=ipro[1]/10,head_len=rtxy[1])+text3d("x(t)",(0,ejex[1]+rtxy[1],0),fontsize=12)
ly=arrow3d((0,0,ejey[0]),(0,0,ejey[1]),width=ipro[2],head_radius=ipro[2]/10,head_len=rtxy[2])+text3d("y(t)",(0,0,ejey[1]+rtxy[2]),fontsize=12)
pt=implicit_plot3d(lambda t,x,y: t-(ejet[0]+0.01), (ejet[0],ejet[1]), (ejex[0],ejex[1]), (ejey[0],ejey[1]),color='green',opacity=0.1)
px=implicit_plot3d(lambda t,x,y: x-0.01, (ejet[0],ejet[1]), (ejex[0],ejex[1]), (ejey[0],ejey[1]),color='red',opacity=0.1)
py=implicit_plot3d(lambda t,x,y: y-0.01, (ejet[0],ejet[1]), (ejex[0],ejex[1]), (ejey[0],ejey[1]),color='blue',opacity=0.1)
xx=line3d(X, color='blue',opacity=0.1, thickness=3)
yy=line3d(Y, color='red', opacity=0.1,thickness=3)
tt=line3d(R, color='green', opacity=0.1, thickness=3)
gt=line3d(T, color='purple',  thickness=5)
G=gt+xx+yy+tt+lt+lx+ly+pt+px+py+O         
pretty_print(html(r"$Gráfica\ de\ x(t) = %s$"  %latex(sol[0].rhs())))
xgraf.show()
pretty_print(html(r"$Gráfica\ de\ y(t) = %s$"  %latex(sol[1].rhs())))
ygraf.show()
pretty_print(html(r"$Recorrido\ R$"  ))
recorrido.show() 
pretty_print(html("$Trayectoria\ y\ proyecciones$"  ))
G.show(zoom=1.5)
            </script>
          </div>
          <p>Manipulando la gráfica final, si se enfoca el plano formado por lo ejes $\mathsf{x(t)}$  y $\mathsf{t}$ se  observa que los valores máximos y mínimos de la función $x(t)$ se  van incrementando, de la misma forma si se enfoca el plano formado por lo ejes $ \mathsf{y(t)}$  y $\mathsf{t}$ se  observa que su valores máximos y mínimos   de  la función  $y(t)$ se  van incrementando, cuando enfocamos el plano con ejes $ \mathsf{x(t)y(t)}$  cada uno de los máximos y mínimos se corresponde los puntos mas alejados entre los ejes y el recorrido sobre $ \mathsf{x(t)y(t)}$.   </p>       
          <p>Lo anterior se  realizo considerando al problemas de valor inicial con condiciones iniciales $(x_0,y_0)=(1,-2)$, para obtener el diagrama de fase  grafiquemos los recorridos correspondientes a $(1,-2)$, $(-1,-4)$, $(3,0)$ y $(3,-3)$.</p>
          <div class="compute">
            <script type="text/x-sage">
x, y, t= var('x y t')
####################################################################################
A = matrix([[-1, 4], [-2, 3]])   # se introduce la matriz del sistema
tfin=3               #Valor final de t para la gráfica
dt=0.1                           #incremento de t para la gráfica
VI=[[0,1,3], [0,-2,-2], [0,-2,2],[0,3,-3],[0,2,0]] #valores iniciales en la forma[t0,x0,y0]
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
            <p>Como se observa,  cada uno de los recorrido también  tiene  la forma de  una espiral que   en sentido de las manecillas del reloj  como si emanara del origen, aplicando  los  mismos argumentos  que en el caso $(x_0,y_0)=(1,-2)$, se puede concluir  que las  soluciones de los  demás problemas de valor inicial tendrán un comportamientos similar.</p>
            <br><hr><br><br>
            <h2>Actividad 1</h2>
            <p>Dados los siguientes sistemas, calcular los valores y vectores propios correspondientes y asociarlos con la respuesta correcta.</p>
            \begin{align*}
            &A&  &B& &C& &D&\\
            x'(t) &=  3x-3y     &  x'(t) &= -4x -y    &  x'(t) &= 3x-10y          & x'(t) &= x+5y     \\
            y'(t) &=\frac{10}{3}x-3y      &y'(t) &=  5x-6y    &  y'(t) &= \frac{2}{5}x+3y     & y'(t) &=-2x+3y    
            \end{align*}
            \begin{align*}
&\lambda_1=-5-2i&     &\lambda_1=3-2i&      &\lambda_1=2-3i&      &\lambda_1=-i&      &\lambda_1=5+3i
\\  
&\lambda_2=-5+2i&     &\lambda_2=3+2i&      &\lambda_2=2+3i&      &\lambda_2=i&     &\lambda_2=5-3i 
\\
&\mathbf{v_1}=
\begin{bmatrix}
1\\ 
1+2i  \end{bmatrix}&
              &\mathbf{v_1}=
              \begin{bmatrix}
              1\\
              \frac{i}{5}\end{bmatrix}&
                          &\mathbf{v_1}=
                          \begin{bmatrix}
                          1\\
                          \frac{1}{5}-\frac{3}{5}i  \end{bmatrix}&
                                      &\mathbf{v_1}=
                                      \begin{bmatrix}
                                      3\\
                                      3+i  \end{bmatrix}&
                                                  &\mathbf{v_1}=
                                                  \begin{bmatrix}
                                                  1\\
                                                  5-2i  \end{bmatrix}
                                                  \\
&\mathbf{v_2}=
\begin{bmatrix}
1\\ 
1-2i  \end{bmatrix}&
            &\mathbf{v_2}=
            \begin{bmatrix}
            1\\
            -\frac{i}{5}  \end{bmatrix}&
                        &\mathbf{v_2}=
                        \begin{bmatrix}
                        2\\
                        \frac{1}{5}+\frac{3}{5}i    \end{bmatrix}&
                                    &\mathbf{v_2}=
                                    \begin{bmatrix}
                                    3\\
                                    3-i  \end{bmatrix}&
                                                  &\mathbf{v_2}=
                                                  \begin{bmatrix}
                                                  1\\
                                                  5-2i \end{bmatrix}
\end{align*}
            <center>
              <select name="" id="">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="-">Ninguno</option>
              </select>&emsp;&emsp;
              <select name="" id="">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="-">Ninguno</option>
              </select>&emsp;&emsp;
              <select name="" id="">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="-">Ninguno</option>
              </select>&emsp;&emsp;
              <select name="" id="">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="-">Ninguno</option>
              </select>&emsp;&emsp;
              <select name="" id="">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="-">Ninguno</option>
              </select><br><br>
            </center>
            <br><hr><br><br>
            <h2>Actividad 2</h2>
            <p>El sistema de ecuaciones diferenciales  </p>
            \begin{align*}
            x'(t) &=  -11x+8y\\
            y'(t) &=  -10x+5y
            \end{align*}
            <p>tiene valores propios $\lambda_1=-3-4i$ y $\lambda_2=-3+4i$ con respectivos vectores propios $\mathbf{v_1}=\begin{bmatrix}1\\ 1-\frac{1}{2}i\end{bmatrix}$ y $\mathbf{v_2}=\begin{bmatrix}1\\ 1+\frac{1}{2}i\end{bmatrix}$. </p>
            <h2><strong>Tareas</strong></h2>
            <p>Resuelva los las siguientes tareas en su cuaderno, copie  un esbozo de las gráficas en su cuaderno.</p>
            <ol>
              <li>Obtener la solución general.</li><br><br>
              <li>Obtenga la las funciones solución $x(t)$ y $y(t)$  que resuelven el problema de valor inicial $[t0,x0,y0]=[0,1,1]$</li><br><br>
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
              </div>
              <li>¿Hacia donde tienden los valores de las funciones $x(t)$ y $y(t)$ cuando $t\rightarrow\infty $?</li><br><br>
              <li>
                <p>Mediante las siguientes lineas  en SAGE obtenga el diagrama de fase y de flujo; solo  debe agregar la matiz del sistema mas recorridos correspondientes a la  con otros valores iniciales. La forma en  se escribe una matriz  es:</p>
                $$
                \mathbf{A}=\begin{bmatrix}
                a&b\\
                c&d
                \end{bmatrix}\ \  \text{es}\ \  \mathtt{A = matrix([[a, b], [c, d]])}$$
                <p>Y  para agregar valores iniciales a la lista $\mathtt{VI}=[[0,1,1]]$  solo se  separa  por coma el nuevo valor por ejemplo agregar $\mathtt{[1,2,3]}$ a la lista quedaría como  $\mathtt{VI}=[[0,1,1],[1,2,3]]$.</p>
                <div class="compute">
                  <script type="text/x-sage">
x, y, t= var('x y t')
####################################################################################
A = matrix([[ , ], [ , ]])       # se introduce la matriz del sistema
tfin=3               #Valor final de t para la gráfica
dt=0.05                          #incremento de t para la gráfica
VI=[[0,1,1]   ]                  #valores iniciales en la forma[t0,x0,y0]
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
              </li>
              <li>¿Hacia donde tienden las funciones solución para cada una de las condiciones iniciales?</li><br><br>
              <li>Usando la celda SAGE anterior ¿Cómo son los diagramas de fase para los sistemas de la <strong>Actividad 1</strong>?</li>
            </ol>
            <a href="tema2-3.php" id="ant">Anterior</a>
           <a href="tema2-5.php" id="next">Siguiente</a>
          </div>
   </center>
   <?php 
      include("../arrow.php");
   ?>
   </body>
</html>