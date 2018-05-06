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
            <h1>Teoría básica</h1>
            <h2>1.4. Representaciones gráficas, sistemas de 2x2.</h2>
            <p>Se pueden obtener diferentes representaciones gráficas sobre las soluciones, estas representaciones  nos pueden brindar información acerca de algunas características que tendrían las soluciones,  para esto se introducen las siguientes definiciones.</p>
            <br><br><hr><br>
            <p><strong>Definiciones:</strong></p>
            <p>Consideremos el sistema lineal  escrito en la forma </p>
            \begin{align*}
            \mathbf{x}'(t) &= F(x, y)\\
            \textbf{y}'(t) &= G(x, y)
            \end{align*}
            <p>donde $F(x,y)=ax+by$ y $G(x,y)= cy+dy$ y el problema de valor inicial respectivo con la condición  $x(t_0)=x_0$, $y(t_0)= y_0$. La solución general de este problema cosiste en un vector solución formado por dos  funciones $x(t)$ y $y(t)$  escrito en la forma: </p>
            $$\mathbf{x}(t)= \begin{bmatrix}
              x(t) \\
              y(t)
            \end{bmatrix}$$
            <ul>
              <li>Se llama <i>trayectoria</i> que  parte de $(x_0,y_0)$, a la función </li>
              $$\tau : I\rightarrow \mathbb{R}^2,\ \ \  \tau(t)=(x(t), y(t)),$$
              <p>donde $I$ es un intervalo de existencia que entrega el teorema de existencia y unicidad para este tipo de sistemas.</p>
              <li>Se llama <i>recorrido</i> $R$ de esta trayectoria al conjunto imagen o recorrido de la función $\tau$, es decir:</li>
              $$R =\{ (x(t), y(t)) \in \mathbb{R}^2 | t \in I \} $$
              <li>Se denomina <i>diagrama de fases</i> de este sistema a una colección de recorridos de las trayectorias para un número representativo de condiciones iniciales.</li>
              <li>Se denomina <i>diagrama de flujo</i> al campo que se construye al graficar en una colección de puntos $(x,y)$ representativos el vector $(F(x, y),G(x,y))$</li>
            </ul>
            <br><hr><br><br>
            <p>Para obtener  estas representaciones gráficas nos auxiliaremos en un software matemático  llamado SAGE que  permite evaluar lineas de comandos dentro de esta misma pagina web, las lineas están predeterminadas para seguir los ejemplos que veremos pero se pueden modificar para obtener  representaciones gráficas de otros casos, lo que se escribe despues del símbolo $\#$ son comentarios que SAGE no se evalúa al ejecutarse.</p>
            <p>Para ejemplificar consideremos el siguiente  sistema lineal</p>
            \begin{align*}
            x'(t) &= x+2y\\
            y'(t) &= -2x+y
            \end{align*}
            <p>la solución del problema de valor inicial  sujeto a las condiciones $x(0)=1$ y $y(0)=1$ es</p>
            \begin{align*}
            x(t) &=e^t(\cos(2t)+\sin(2t))\\
            y(t) &=e^t(\cos(2t)-\sin(2t))
            \end{align*}
            <h3>1.4.1. Gráfica de la soluciones $x(t)$ y $y(t)$ como funciones de $t$.</h3>
            <p>Una primera representación gráfica que podemos tener sobre las soluciones de este sistema es gratificando de forma habitual las funciones $x(t)$ y $y(t)$.</p>
            <p>Para obtener la gráfica de $x(t)$ se pueden introducir  las siguientes lineas </p>
            <div class="compute">
                 <script type="text/x-sage">
t = var('t')            #se declara la variable t
x(t)=e^t*(cos(2*t)+sin(2*t))  #se introduce la funcion a grafica
xgraf=plot(x(t), (t, 0, 5), color ='red', legend_label='$x(t)$', legend_color='red',thickness=3)
xgraf
                 </script>
            </div>
            <p>Para $y(t)$ se hace de forma  similar </p>
            <div class="compute">
                 <script type="text/x-sage">
t = var('t')
y(t)=e^t*(cos(2*t)-sin(2*t))
ygraf=plot(y(t), (t, 0, 5), color ='blue', legend_label='$y(t)$', legend_color='blue',thickness=3)
ygraf
                 </script>
            </div>
            <p>sin embargo, también se pueden graficar ambas en un mismo plano </p>
            <div class="compute">
                 <script type="text/x-sage">
t = var('t')
x(t)=e^t*(cos(2*t)+sin(2*t))
y(t)=e^t*(cos(2*t)-sin(2*t))
xgraf=plot(x(t), (t, 0, 5), color ='red', legend_label='$x(t)$', legend_color='red',thickness=3)
ygraf=plot(y(t), (t, 0, 5), color ='blue', legend_label='$y(t)$', legend_color='blue',thickness=3)
xgraf+ygraf
                 </script>
            </div>
            <h3>1.4.2 Gráfica de la trayectoria.</h3>
            <p>En este caso la trayectoria que parte desde $(x_0,y_0)=(1,1)$ es la función $\tau : \mathbb{R}\rightarrow \mathbb{R}^2$ dada por</p>
            $$\tau(t)=(e^t(\cos(2t)+\sin(2t)), e^t(\cos(2t)-\sin(2t)))$$
            <p>la gráfica de esta trayectoria es  el conjunto  de puntos en el espacio dados por </p>
            $$(t,e^t(\cos(2t)+\sin(2t)), e^t(\cos(2t)-\sin(2t)))$$
            <p>, para esto podemos usaremos  las siguientes linea:</p>
            <div class="compute">
                 <script type="text/x-sage">
from sage.manifolds.utilities import set_axes_labels    
t = var('t')
x(t)=e^t*(cos(2*t)+sin(2*t))
y(t)=e^t*(cos(2*t)-sin(2*t))
graf=parametric_plot3d((t, x(t), y(t)), (t,0,5),color='purple',thickness=5) #Gráfica de funciones parametricas
set_axes_labels(graf, 't', 'x', 'y')
                 </script>
            </div>
            <h3>1.4.3. Recorrido</h3>
            <p>Obsérvese  que la gráfica de la función $x(t)$ se hace en el plano tx, las de $y(t)$ se hacen en el plano ty y la trayectoria es una representación en el espacio txy. La gracia del recorrido $R$  de la trayectoria esta contenido en el plano xy, en este caso el conjunto de puntos dados por </p>
            $$(e^t(cos(2t)+sin(2t)), e^t(cos(2t)-sin(2t)))$$
            <div class="compute">
                 <script type="text/x-sage">
t = var('t')
x(t)=e^t*(cos(2*t)+sin(2*t))
y(t)=e^t*(cos(2*t)-sin(2*t))
parametric_plot((x(t), y(t)), (t,0,5),axes_labels=['$x(t)$', '$y(t)$'],color='green',thickness=3)
                 </script>
            </div>
            <h3>1.4.4. Relación entre las gráficas de las  soluciones, la trayectoria y el recorrido.</h3>
            <p>La forma en que se relacionan la gráfica de la trayectoria  $\tau(t)$, las gráficas de individuales de  $x(t)$ y $y(t)$  y el el recorrido $R$ es que la gráficas individuales son proyecciones de la gráfica  de la trayectoria sobre el plano tx y ty respectivamente, y la proyección de la trayectoria sobre el plano xy es el recorrido $R$ como se ilustra a continuación.</p>
            <div class="compute">
                 <script type="text/x-sage">
A = matrix([[1, 2], [-2, 1]]) #Aquí se  ponen las entradas de la matriz del sistema 
[t0,x0,y0]=[0,1,1]        #Se pueden modificar las condicones iniciales 
tfin=5              #Valor final de t para las graficas
t = var('t')          #En adelante no es recomendable modificar el codigo
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
            <p>Una vez ejecutado se puede  manipular la posición de la gráfica final de la trayectoria para  hacer notar que condicen con las proyecciones de las gráficas de $x(t)$, $y(t)$ y del recorrido $R$.</p>
            <h3>1.4.5. Diagrama de fase</h3>
            <p>Por otro lado, el diagrama de fases de este sistema se puede obtener graficando una colección de recorridos de las trayectorias para un número representativo de condiciones iniciales. Por ejemplo se pueden graficar los recorridos correspondientes a las condiciones iniciales $(t_0,x_0,y_0)$ dadas por  $(0,1,1)$, $(3,2,1)$, $(0,1,-1)$, $(0,-1,1)$ y $(0,-1,-1)$ mediante las siguientes lineas en SAGE.</p>
            <div class="compute">
                 <script type="text/x-sage">
x, y, t = var('x y t')         
A = matrix([[1, 2], [-2, 1]])
tfin=5
dt=0.1                    #dt decrese la grafica es mas precisa y demora mas. 
ejes=4
VI=[[0,1,1], [3,2,1], [0,1,-1], [0,-1,1] , [0,-1,-1]] #lista de valores iniciales [t0,x0,y0] modificabel
F = [A[0,0]*x+A[0,1]*y,A[1,0]*x+A[1,1]*y]
Tp=[desolve_system_rk4(F,[x, y],ics=VI[i],ivar=t,end_points=tfin,step=dt) for i in range(len(VI))]
Rp = [ ([j,k] for i,j,k in Tp[m]) for m in range(len(VI))]
dfp=sum( line(Rp[i], thickness=3) for i in range(len(VI)))
Tn=[desolve_system_rk4(F,[x, y],ics=VI[i],ivar=t,end_points=-tfin,step=-dt) for i in range(len(VI))]
Rn = [ ([j,k] for i,j,k in Tn[m]) for m in range(len(VI))]
dfn=sum( line(Rn[i], thickness=3) for i in range(len(VI)))
P = point(([j,k] for i,j,k in VI), color='red',size=30,zorder=4)
(dfp+dfn+P).show(frame=True, title='$Diagrama\ de\ Fase\ y\ Diagrama\ de\ Flujo$',axes_labels=['$x(t)$','$y(t)$'], xmax = ejes, xmin = -ejes, ymax = ejes, ymin = -ejes, aspect_ratio=1)
                  </script>
            </div>
            <h3>1.4.6. Diagrama de flujo.</h3>
            <p>Siguiendo con el ejemplo,  para obtener una representación gráfica del diagrama de flujo sobre  cada punto $(x,y)$ se coloca un vector  con la dirección  que  describe $(F(x, y),G(x,y))$, en este caso  a  cada punto $(x,y)$ se relaciona con la dirección del vector $(x + 2y, -2x + y)$. Mediante el software SAGE se puede obtener el diagrama de flujo mediten las siguientes lineas</p>
            <div class="compute">
                 <script type="text/x-sage">
x, y, t = var('x y t')    #Declaración de las variables 
ejes=4            #Magnitud de los ejes
F = [A[0,0]*x+A[0,1]*y,A[1,0]*x+A[1,1]*y]
mF = sqrt(F[0]^2 + F[1]^2)
F_unit = [F[0]/mF, F[1]/mF] 
dd = plot_vector_field(F_unit, (x,-ejes,ejes), (y,-ejes,ejes))
dd.show(frame=True, title='$Diagrama\ de\ Flujo$',axes_labels=['$x(t)$','$y(t)$'], xmax = ejes, xmin = -ejes, ymax = ejes, ymin = -ejes, aspect_ratio=1)
                 </script>
            </div>
            <p>La construcción de  este diagrama consiste en  trazar desde cada punto $(x,y)$ el vector $(F(x,y),G(x,y))$, por ejemplo  a partir del punto (0,1) se traza el vector $((0) + 2(1), -2(0) + (1))=(2, 1)$,   de la misma forma se puede calcular la siguiente tabla.</p>
            <center>
              <table class="tab">
                <tr>
                  <td>$(x,y)$</td>
                  <td>$(F(x,y),G(x,y))$</td>
                </tr>
                <tr>
                  <td>(1,1)</td>
                  <td>(3, -1)</td>
                </tr>
                <tr>
                  <td>(0,1)</td>
                  <td>(2, 1)</td>
                </tr>
                <tr>
                  <td>(1,-1)</td>
                  <td>(-1, -3)</td>
                </tr>
                <tr>
                  <td>(-1,1)</td>
                  <td>(1, 3)</td>
                </tr>
                <tr>
                  <td>(-1,-1)</td>
                  <td>(-3, 1)</td>
                </tr>
            </table>
          </center>
          <p>Ya con esos datos se pueden graficar los vectores  produciendo una imagen como la siguiente:</p>
          <center>
            <img src="../img/diaDire1.png" alt="">
            <p>Figura 1.1:</p>
          </center>
          <p>Después se normalizan los vectores, es decir se trazan vectores con la misma dirección y todos  de magnitud 1, esto  se hace dividiendo cada entrada de cada vector entre su respectiva magnitud $\sqrt{F(x,y)^2+G(x,y)^2}$, por ejemplo  el vector $(2, 1)$ se divide cada una de sus entradas entre su  magnitud $\sqrt{2^2+1^2}=\sqrt{3}$ lo que resulta  $(\frac{2}{\sqrt{3}},\frac{1}{\sqrt{3}})$. Haciendo esto mismo para los demas vectores obtenemos la siguiente imagen. </p>
          <center>
            <img src="../img/diaDire2.png" alt="">
            <p>Figura 1.2:</p>
          </center>
          <p>Ahora, dichos vectores normalizados se puede poner con la magnitud que se requiera de forma que no se intersequen dos vectores, por ejemplo si multiplicamos cada entrada del vector por $\frac{1}{2}$ , el vector resultante  $(\frac{2}{2\sqrt{3}}, \frac{1}{2\sqrt{3}})$ tiene la magnitud $\frac{1}{2}$. Haciendo  esto con mas puntos $(x,y)$  obtenemos mas vectores que conforman el diagrama de flujo  como se ilustra a continuación.</p>
          <center>
            <img src="../img/diaDire3.png" alt="">
            <p>Figura 1.3:</p>
          </center>
          <h3>1.4.7. Relación entre el diagrama de flujo y el diagrama de fase.</h3>
          <p>Finalmente, con respecto a la relación entre el diagrama de fase y  el diagrama de flujo, notemos que por regla de la cadena:</p>
          $$\frac{dy}{dt}=\frac{dy}{dx}\frac{dx}{dt}$$
          <p>entonces</p>
          $$\frac{dy}{dx}=\frac{y'}{x'}=\frac{G(x,y)}{F(x,y)}$$
          <p>Por tanto  cada  recorrido es tangente al diagrama de flujo y por lo tanto cada recorrido del diagrama de fase es tangente al diagrama del flujo como se muestra a continuación.</p>
          <div class="compute">
                 <script type="text/x-sage">
x, y, t = var('x y t')
A=matrix([[1, 2], [-2, 1]])   #Se introduce la Matriz del sistema
tfin=5              #Valor final de t para la gráfica
r=0.1             #Radio de inicio de los recorridos predeterminados  
n=5               #Numero de Recorridos  predeterminados
dt=0.1                #dt decrese la grafica es mas precisa y demora mas. 
VI=[[1,1], [2,1], [1,-1], [-1,1] , [-1,-1]]   #Valores iniciales que graficar recorridos extras   
vi=[ [r*cos(i*2*pi/n).n(digits=3), r*sin(i*2*pi/n).n(digits=3)] for  i in (0..n-1)]
xy0=vi+VI
F = [A[0,0]*x+A[0,1]*y,A[1,0]*x+A[1,1]*y]
Tp=[desolve_system_rk4(F,[x, y],ics=[0,xy0[i][0],xy0[i][1]],ivar=t,end_points=tfin,step=dt) for i in range(len(xy0))]
Tn=[desolve_system_rk4(F,[x, y],ics=[0,xy0[i][0],xy0[i][1]],ivar=t,end_points=-tfin,step=-dt) for i in range(len(xy0))]
Rn = [ ([j,k] for i,j,k in Tn[m]) for m in range(len(xy0)) ]
Rp = [ ([j,k] for i,j,k in Tp[m]) for m in range(len(xy0)) ]
dfp=sum( line(Rp[i], thickness=3, title='$Diagrama\ de\ Fase\ y\ Diagrama\ de\ Flujo$') for i in range(len(xy0)))
dfn=sum( line(Rn[i], thickness=3, title='$Diagrama\ de\ Fase\ y\ Diagrama\ de\ Flujo$') for i in range(len(xy0)))
p = point(VI, color='red',size=30,zorder=4)
mF = sqrt(F[0]^2 + F[1]^2)
F_unit = [F[0]/mF, F[1]/mF] 
dd = plot_vector_field(F_unit, (x,-4,4), (y,-4,4), axes_labels=['$x(t)$','$y(t)$'], xmax = 4, xmin = -4, ymax = 4, ymin = -4, aspect_ratio=1)
dfp+dfn+dd+p
                 </script>
          </div>
          <a href="tema1-3.php" id="ant">Anterior</a>
        </div>
       </div>
   </center>
   <?php 
      include("../arrow.php");
   ?>
  </body>
</html>