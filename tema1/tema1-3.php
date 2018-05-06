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
            <h2>1.3. Teoremas básicos</h2>
            <h3>1.3.1. Solucion de sedol</h3>
            <p>Una solución de un sistema  de ecuaciones diferenciales de $n$ variables es un conjunto de  $n$  funciones $x_1 (t), x_2 (t), \dots, x_n (t)$ que lo satisfacen en algún intervalo. Particularmente, si se trata de un sistema  de ecuaciones diferenciales lineal y homogéneo en la con forma matricial:</p>
            $$\mathbf{x'}=\mathbf{A} (t)\mathbf{x}$$
            <p>para realizar operaciones con matrices en necesario  escribir  una solución  como un vector, por lo que es necesaria la siguiente definición.</p>
            <br><br><hr><br>
            <p><strong>Definición (Vector solución):</strong></p>
            <p>En un intervalo $I$, un vector solución es cualquier matriz columna</p>
            \[
            \mathbf{x} (t) =
            \begin{bmatrix}
            x_{1}(t)\\
            x_{2}(t)\\
            \vdots \\
            x_{n}(t)
            \end{bmatrix}
            \]
            <p>cuyos elementos son funciones diferenciables que satisfacen,  un sistema de ecuaciones diferenciales en el intervalo.</p>
            <br><hr><br><br>
            <div class="note">
                  <div class="tnote">
                     <p>NOTA</p>
                  </div>
                  <div class="cnote">
                     <p> No confundir los símbolos $\mathbf{x}$ y $\mathbf{x}(t)$. Por un lado $\mathbf{x}$  representa el vector de las funciones <i>incógnitas</i> $x_1, x_2, \dots, x_n$ y $\mathbf{x}(t)$ representa el vector formado por las funciones concretas $x_1 (t), x_2 (t), \dots, x_n (t)$ que conforman la <i>solución</i> del sistema.</p>
                  </div>
               </div>
            <button id="btn-ej1">EJEMPLO</button>
            <div id="ej1" class="ej">
              <p>Dado el sistema $\mathbf{x'}=\mathbf{A}\mathbf{x}$ en su forma matricial</p>
              $$
              \begin{bmatrix}
              x'\\
              y'
              \end{bmatrix}
              =
              \begin{bmatrix}
              4&-3\\
              6&-7
              \end{bmatrix}
              \begin{bmatrix}
              x\\
              y
              \end{bmatrix}
              $$
              <p>veamos que</p>
               $$\mathbf{x}_1(t)=\begin{bmatrix}
              3e^{2t}\\
              2e^{2t}
              \end{bmatrix}$$
              <p>es un vector solución del sistema. </p>
              <p>Para esto basta notar que:</p> 
              $$\mathbf{x'}_1(t)=\begin{bmatrix}
              \frac{d(3e^{2t})}{dt}\\
              \frac{d(2e^{2t})}{dt}
              \end{bmatrix}=\begin{bmatrix}
              6e^{2t}\\
              4e^{2t}
              \end{bmatrix}$$ 
              <p>Y que </p>
              $$\mathbf{A}\mathbf{x}_1(t)=\begin{bmatrix}
              4&-3\\
              6&-7
              \end{bmatrix}
              \begin{bmatrix}
              3e^{2t}\\
              2e^{2t}
              \end{bmatrix}=\begin{bmatrix}
              4(3e^{2t})-3(2e^{2t})\\
              6(3e^{2t})-7(2e^{2t})
              \end{bmatrix}=\begin{bmatrix}
              6e^{2t}\\
              4e^{2t}
              \end{bmatrix}
              =\mathbf{x'}_1(t)$$ 
              <p>Así, $\mathbf{x'}_1(t)=\mathbf{A}\mathbf{x}_1(t)$ por lo tanto, $\mathbf{x}_1(t)$ es una solución de $\mathbf{x'}=\mathbf{A}\mathbf{x}$.</p>
            </div>
            <p><strong>Ejercicio</strong></p>
            <p>Dado el mismo sistema que en el ejemplo: </p>$$
            \begin{bmatrix}
            x'_{1}\\
            x'_{2}
            \end{bmatrix}
            =
            \begin{bmatrix}
            4&-3\\
            6&-7
            \end{bmatrix}
            \begin{bmatrix}
            x_{1}\\
            x_{2}
            \end{bmatrix}$$
            <p>¿Cuál de los siguientes vectores NO es solución del sistema ?</p>
            $$\mathbf{x}_1(t)=\begin{bmatrix}
            3\\
            2
            \end{bmatrix}e^{2t}\ \ \ \ \mathbf{x}_2(t)=\begin{bmatrix}
            e^{-5t}\\
            3e^{-5t}
            \end{bmatrix}\ \ \ \ \mathbf{x}_3(t)=\begin{bmatrix}
            e^{-5t}\\
            2e^{2t}
            \end{bmatrix}$$
            <div>
              <input type="checkbox" class="checks" value="a">  $\mathbf{x}_1(t)$<br>
              <input type="checkbox" class="checks" value="b"> $\mathbf{x}_2(t)$<br>
              <input type="checkbox" class="checks" value="c"> $\mathbf{x}_3(t)$<br><br>
              <button id="ans1">Revisar</button>
               <center>
                  <h2 id="ansi1"></h2>
               </center>
            </div> 
            <h3>1.3.2. Problema de valor inicial</h3>
            <br><br><hr><br>
            <p><strong>Definición (Problema de valor inicial)</strong></p>
            <p>Si $t_0$ denota un punto en un intervalo $I$ y</p>
            $$
            \mathbf{x}(t_0) =
            \begin{bmatrix}
            x_{1}(t_0)\\
            x_{2}(t_0)\\
            \vdots \\
            x_{n}(t_0)
            \end{bmatrix}
             \text{ y } 
            \mathbf{x}_0=
            \begin{bmatrix}
            \gamma_{1}\\
            \gamma_{2}\\
            \vdots \\
            \gamma_{n}
            \end{bmatrix}
            $$
            <p>donde γ , i = 1, 2, \dots , n$ son las constantes dadas. Entonces el problema</p>
            <p>Resolver: $\mathbf{x'}=\mathbf{A}(t)\mathbf{x}+ \mathbf{F}(t)$</p>
            <p>Sujeto a: $\mathbf{x}(t_0)= \mathbf{x}_0$ es un problema de valor inicial en el intervalo.</p>
            <button id="btn-ej2">EJEMPLO</button>
            <div id="ej2" class="ej">
             <p> El sistema de ecuaciones $\mathbf{x'}=\mathbf{A}\mathbf{x}$ dado por</p>
                $$\begin{bmatrix}
                  x'_{1}\\
                  x'_{2}
              \end{bmatrix}
              =
              \begin{bmatrix}
                  4&amp;-3\\
                  6&amp;-7
              \end{bmatrix}
              \begin{bmatrix}
              x_{1}\\
              x_{2}
              \end{bmatrix}$$</span><br /></p>
              <p>Sujeto a la condición <span><strong>x</strong>(<em>t</em><sub>0</sub>)=<strong>x</strong><sub>0</sub></span> donde en <span><em>t</em><sub>0</sub> = 0</span> y <span>${\mathbf{x}}_0=
              \begin{bmatrix}
              4\\
              5\\
              \end{bmatrix}$</span>, es decir:</p>
              <p><br /><span>$$\begin{aligned}
              {\mathbf{x}}(t_0)&amp;={\mathbf{x}}_0\\
              {\mathbf{x}}(0)&amp;={\mathbf{x}}_0\\
              \begin{bmatrix}
              x_{1}(0)\\
              x_{2}(0)\\
              \end{bmatrix} &amp;=\begin{bmatrix}
              4\\
              5\\
              \end{bmatrix}\end{aligned}$$</span><br /></p>
              <p>es un problema de valor inicial}. La solución a este problema de valor inicial es</p>
              $$\mathbf{x}(t)=\begin{bmatrix}
              3e^{2t}+e^{-5t}\\
              2e^{2t}+3e^{-5t}
              \end{bmatrix}$$
              <p>Resuelve $\mathbf{x'}=\mathbf{A}\mathbf{x}$ ya que</p>
              $$\mathbf{A}\mathbf{x}(t)=\begin{bmatrix}
              4&-3\\
              6&-7
              \end{bmatrix}
              \begin{bmatrix}
              3e^{2t}+e^{-5t}\\
              2e^{2t}+3e^{-5t}
              \end{bmatrix}=\begin{bmatrix}
              4(3e^{2t}+e^{-5t})-3(2e^{2t}+3e^{-5t})\\
              6(3e^{2t}+e^{-5t})-7(2e^{2t}+3e^{-5t})
              \end{bmatrix}=\begin{bmatrix}
              6e^{2t}-5e^{-5t}\\
              4e^{2t}-15e^{-5t}
              \end{bmatrix}
              =\mathbf{x'}(t)$$ 
              <p>y esta sujeto a $\mathbf{x}(0)= \mathbf{x}_0$  ya que </p>
              $$\mathbf{x}(0) =\begin{bmatrix}
              3e^{2(0)}+e^{-5(0)}\\
              2e^{2(0)}+3e^{-5(0)}
              \end{bmatrix}=\begin{bmatrix}
              3(1)+1(1)\\
              2(1)+3(1)
              \end{bmatrix} =\begin{bmatrix}
                4\\
                5\\
              \end{bmatrix}$$
            </div>
            <br><hr><br><br>
            <h3>1.3.3. Existencia de una solución única</h3>
            <br><hr><br>
            <p><strong>Teorema (Existencia de una solución única)</strong></p>
            <p>Sean las entradas de las matrices $\mathbf{A}(t)$ y $\mathbf{F}(t)$ funciones continuas en un intervalo común $I$ que contienen el punto $t_0$. Entonces, existe una solución única para el problema de valor inicial en el intervalo.</p>
            <br><hr><br><br>
            <h3>1.3.4. Principio de superposición</h3>
            <p>Sea $\mathbf{x}_1, \mathbf{x}_2, \dots , \mathbf{x}_k$ un conjunto de vectores solución del sistema homogéneo en un intervalo $I$. Entonces, la combinación lineal</p>
            $$c_1\mathbf{x}_1+c_2\mathbf{x}_2+ \dots+c_2\mathbf{x}_k$$
            <p>donde   $c_i , i = 1, 2, \dots , n$ son constantes arbitrarias, es también una solución en el intervalo.</p>
            <h3>1.3.5. Dependencia lineal e independencia lineal</h3>
            <p>Un sistema de ecuaciones diferenciales puede tener mas de un vector solución, estamos interesados principalmente en las soluciones del sistema homogéneo que sean linealmente independientes.</p>
            <br><br><hr><br>
            <p><strong>Definición (Dependencia lineal e independencia lineal)</strong></p>
            <p>Sea $\mathbf{x}_1, \mathbf{x}_2, \dots , \mathbf{x}_k$ un sistema de vectores solución del sistema homogéneo en un intervalo $I$. Decimos que este conjunto es linealmente dependiente en el intervalo si existen constantes $c_1, c_2, \dots , c_k$ que no son todas cero, de tal forma que</p>
            $$c_1\mathbf{x}_1+c_2\mathbf{x}_2+ \dots+c_2\mathbf{x}_k=0$$
            <p>para toda $t$ en el intervalo. Si el conjunto de vectores no es linealmente dependiente en el intervalo, se dice que es linealmente independiente.</p>
            <p>Particularmente para el caso $k= 2$, dos vectores solución $\mathbf{x}_1$ y $\mathbf{x}_2$ son linealmente dependientes si un vector solución es un múltiplo escalar del otro. </p>
            <br><hr><br><br>
            <h3>1.3.6. Criterio para soluciones linealmente independientes (Wronskiano)</h3>
            <p>En una consideración previa relacionada con la teoría de una sola ecuación diferencial ordinaria, pudimos introducir el concepto del determinante wronskiano como una prueba de la independencia lineal. Establecemos el teorema siguiente sin probarlo.</p>
            <br><br><hr><br>
            <p><strong>Teorema (Criterio para soluciones linealmente independientes)</strong></p>
            Sean
            $
            \mathbf{x}_1 =
            \begin{bmatrix}
            x_{11}\\
            x_{21}\\
            \vdots \\
            x_{n1}
            \end{bmatrix} 
            $, 
            $
            \mathbf{x}_2 =
            \begin{bmatrix}
            x_{12}\\
            x_{22}\\
            \vdots \\
            x_{n2}
            \end{bmatrix} 
            $, $\dots $, $
            \mathbf{x}_n =
            \begin{bmatrix}
            x_{1n}\\
            x_{2n}\\
            \vdots \\
            x_{nn}
            \end{bmatrix} 
            $
            <p>$n$ vectores solución del sistema homogéneo  en un intervalo $I$. Entonces el sistema de vectores solución es linealmente independiente en $I$ si, y sólo si, el <i>wronskiano</i></p>
            \[
            W(\mathbf{x}_1, \mathbf{x}_2, . . . , \mathbf{x}_n)=\begin{vmatrix}
            x_{11}&x_{12}&\cdots&x_{1n}\\
            x_{21}&x_{22}&\cdots&x_{2n}\\
            \vdots  &\vdots   &\ddots & \vdots \\
            x_{n1}&x_{n2}&\cdots&x_{nn}
            \end{vmatrix}\neq 0
            \]
            <p>para toda $t$ incluida en el intervalo.</p>
            <br><hr><br><br>
            <p>Es posible demostrar que si $\mathbf{x}_1, \mathbf{x}_2, \dots , \mathbf{x}_k$ son vectores solución de un sistema lineal, entonces para toda $t$ en $I$, bien $W(\mathbf{x}_1, \mathbf{x}_2, . . . , \mathbf{x}_n)\neq 0$  o $W(\mathbf{x}_1, \mathbf{x}_2, . . . , \mathbf{x}_n)=0$. Por lo tanto, si podemos demostrar que $W\neq 0$ para alguna $t_0$ en $I$, entonces $W\neq 0$ para toda $t$, de manera que el conjunto de soluciones es linealmente independiente en el intervalo. </p>
            <h3>1.3.7. Conjunto fundamental de soluciones y solución general</h3>
            <br><br><hr><br>
            <p><strong>Definición (Conjunto fundamental de soluciones)</strong></p>
            <p>Todo conjunto ${\{\mathbf{x}_1, \mathbf{x}_2, \dots , \mathbf{x}_n\}}$ de $n$ vectores solución linealmente independientes del sistema homogéneo en un intervalo $I$ se denomina conjunto fundamental de soluciones en el intervalo.</p>

            <br><br><hr><br>
            <p><strong>Teorema (Existencia de un conjunto fundamental.)</strong></p>
            <p>Existe un conjunto fundamental de soluciones para el sistema homogéneo en un intervalo $I$.</p>
            <br><br><hr><br>
            <p><strong>Teorema (Solución general de sistemas homogéneos)</strong></p>
            <p>Sea $\mathbf{x}_1, \mathbf{x}_2, \dots , \mathbf{x}_n$ un conjunto fundamental de soluciones del sistema homogéneo en un intervalo $I$. Por lo tanto, la solución general del sistema en el intervalo es</p>
            $$\mathbf{x}(t)=c_1\mathbf{x}_1+c_2\mathbf{x}_2+ \dots+c_2\mathbf{x}_k$$
            <p>donde $c_i , i =1, 2,\dots , n$ son constantes arbitrarias.</p>
            <p>Sistemas no homogéneos Para los sistemas no homogéneos, una solución particular $\mathbf{x}_p$ en un intervalo $I$ es cualquier vector, libre de parámetros arbitrarios, cuyos elementos son funciones que satisfacen el sistema.</p>
            <br><br><hr><br>
            <p><strong>Teorema (Solución general de sistemas no homogéneos.)</strong></p>
            <p>Sean $\mathbf{x}_p$ una solución dada del sistema no homogéneo en un intervalo $I$, y</p>
            $$\mathbf{x}_c=c_1\mathbf{x}_1+c_2\mathbf{x}_2+ \dots+c_2\mathbf{x}_k$$
            <p>denote la solución general en el mismo intervalo del sistema homogéneo asociado (5). Luego, la solución general del sistema no homogéneo en el intervalo es</p>
            $$\mathbf{x}(t)=\mathbf{x}_c+\mathbf{x}_p$$
            <p>La solución general $\mathbf{x}_c$ del sistema homogéneo  se denomina función complementaria del sistema no homogéneo.</p>
            <a href="tema1-2.php" id="ant">Anterior</a>
            <a href="tema1-4.php" id="next">Siguiente</a>
          </div>
       </div>
   </center>
 <!-- Examples display-->
   <script>
      (function(){

          function getValue(){
            var checks = document.getElementsByClassName("checks");
            if(!checks[0].checked && !checks[1].checked && checks[2].checked){
               document.getElementById("ansi1").innerHTML = "¡Respuesta Correcta!";
               document.getElementById("ansi1").style.color = "green";
            }else{
               document.getElementById("ansi1").innerHTML = "Intentalo de nuevo.";
               document.getElementById("ansi1").style.color = "red";
            }
         }

          document.getElementById("ans1").addEventListener("click",function(){
            getValue();
         });

         let buttons = ['btn-ej1', 'btn-ej2'];
         let examples = ['ej1', 'ej2'];
         let flags = [];

         buttons.forEach(function(e){
            flags.push(false);
         });

         document.getElementById(buttons[0]).addEventListener("click", function(){
            checkStatus(0,flags[0], examples[0]);
        }); 
         document.getElementById(buttons[1]).addEventListener("click", function(){
            checkStatus(1,flags[1], examples[1]);
        });          

         function checkStatus(id, flag, example){
            if(!flag){
               document.getElementById(example).style.display = 'block';
               flags[id] = true;
            }else{
               document.getElementById(example).style.display = 'none';
               flags[id] = false;
            }
         }
      })();
   </script>
   <?php 
      include("../arrow.php");
   ?>
</body>
</html>