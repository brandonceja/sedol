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
        <?php  
               include("../column.php");
         ?>
         <div id="content">
            <h1>1.1 Teoría básica</h1>
            <h2>1.3 Teoremas básicos</h2>
            <h3>1.3.1 Problema de valor inicial</h3>
            <p>Problema de valor inicial Si <span><em>t</em><sub>0</sub></span> denota un punto en un intervalo <span><em>I</em></span> y</p>
            <p><span>$
            {\mathbf{x}}(t_0) =
            \begin{bmatrix}
            x_{1}(t_0)\\
            x_{2}(t_0)\\
            \vdots \\
            x_{n}(t_0)
            \end{bmatrix}
            $</span> y <span>$
            {\mathbf{x}}_0=
            \begin{bmatrix}
            \gamma_{1}\\
            \gamma_{2}\\
            \vdots \\
            \gamma_{n}
            \end{bmatrix}
            $</span></p>
            <p>donde <span><em>γ</em><em>i</em>, <em>i</em> = 1, 2, …, <em>n</em></span> son las constantes dadas. Entonces el problema</p>
            <p>Resolver: <span><strong>x</strong><strong>′</strong> = <strong>A</strong>(<em>t</em>)<strong>x</strong> + <strong>F</strong>(<em>t</em>)</span></p>
            <p>Sujeto a: <span><strong>x</strong>(<em>t</em><sub>0</sub>)=<strong>x</strong><sub>0</sub></span></p>
            <p>es un problema de valor inicial en el intervalo.</p>
            <button id="btn-ej1">EJEMPLO</button>
            <div id="ej1" class="ej">
              <p>La solución de problema <br /><span>$$\begin{bmatrix}
                  x'_{1}\\
                  x'_{2}
              \end{bmatrix}
              =
              \begin{bmatrix}
                  1&amp;2\\
                  3&amp;4
              \end{bmatrix}
              \begin{bmatrix}
              x_{1}\\
              x_{2}
              \end{bmatrix}$$</span><br /></p>
              <p>Sujeto a la condición <span><strong>x</strong>(<em>t</em><sub>0</sub>)=<strong>x</strong><sub>0</sub></span> donde en <span><em>t</em><sub>0</sub> = 3</span> y <span>${\mathbf{x}}_0=
              \begin{bmatrix}
              4\\
              -1\\
              \end{bmatrix}$</span>, es decir:</p>
              <p><br /><span>$$\begin{aligned}
              {\mathbf{x}}(t_0)&amp;={\mathbf{x}}_0\\
              {\mathbf{x}}(3)&amp;={\mathbf{x}}_0\\
              \begin{bmatrix}
              x_{1}(3)\\
              x_{2}(3)\\
              \end{bmatrix} &amp;=\begin{bmatrix}
              4\\
              -1\\
              \end{bmatrix}\end{aligned}$$</span><br /></p>
              <p>Equivalentemente la canciones son <span><em>x</em><sub>1</sub>(3)=4</span> y <span><em>x</em><sub>2</sub>(3)= − 1</span>. La solución se puede calcular mediante las siguientes lineas el SAGE</p>
              <div class="compute">
                 <script type="text/x-sage">
  A = matrix([[1, 2], [3, 4]])
  t = var('t')
  x_1 = function('x_1')(t)
  x_2 = function('x_2')(t)
  de1 = diff(x_1,t) == A[0,0]*x_1+A[0,1]*x_2
  de2 = diff(x_2,t) == A[1,0]*x_1+A[1,1]*x_2
  ics=[0,4 ,-1 ]
  sol = desolve_system([de1, de2], [x_1,x_2],ics, ivar=t)
  x1=sol[0].rhs()
  x2=sol[1].rhs()
  x11=sageobj(x1._maxima_().exponentialize())
  x22=sageobj(x2._maxima_().exponentialize())
  show(x11.maxima_methods().exponentialize().simplify_full())
  show(x22.maxima_methods().exponentialize().simplify_full())
  show(A.eigenvalues())
  show(A.eigenvectors_right())
  show(A.eigenvectors_left())
  p=det(A-x*identity_matrix(2))
  show(p)
  show(p.expand())
  show(solve(p==0,x))
                 </script>
              </div>
            </div>
            <h3>1.3.2 Existencia de una solución única</h3>
            <p>TEOREMA 1</p>
            <p>Existencia de una solución única</p>
            <p>Sean las entradas de las matrices <span><strong>A</strong>(<em>t</em>)</span> y <span><strong>F</strong>(<em>t</em>)</span> funciones continuas en un intervalo común <span><em>I</em></span> que contienen el punto <span><em>t</em><sub>0</sub></span>. Por lo tanto, existe una solución única para el problema de valor inicial en el intervalo.</p>
            <p>Principio de superposición El siguiente resultado es un principio de superposi- ción para soluciones de sistemas lineales.</p>
            <h3>1.3.3 Principio de superposición</h3>
            <p>TEOREMA 2</p>
            <p>Principio de superposición</p>
            <p>Sea <span><strong>x</strong><sub>1</sub>, <strong>x</strong><sub>2</sub>, …, <strong>x</strong><sub><em>k</em></sub></span> un conjunto de vectores solución del sistema homogéneo en un intervalo <span><em>I</em></span>. Entonces, la combinación lineal <br /><span><em>c</em><sub>1</sub><strong>x</strong><sub>1</sub> + <em>c</em><sub>2</sub><strong>x</strong><sub>2</sub> + … + <em>c</em><sub>2</sub><strong>x</strong><sub><em>k</em></sub></span><br /> donde <span><em>c</em><sub><em>i</em></sub>, <em>i</em> = 1, 2, …, <em>n</em></span> son constantes arbitrarias, es también una solución en el intervalo.</p>
            <p>Dependencia lineal e independencia lineal. Estamos interesados principalmente en las soluciones del sistema homogéneo que sean linealmente independientes</p>
            <h3>1.3.4 Dependencia lineal e independencia lineal</h3>
            <p>DEFINICIÓN 2</p>
            <p>Dependencia lineal e independencia lineal</p>
            <p>Sea <span><strong>x</strong><sub>1</sub>, <strong>x</strong><sub>2</sub>, …, <strong>x</strong><sub><em>k</em></sub></span> un sistema de vectores solución del sistema homogéneo en un intervalo <span><em>I</em></span>. Decimos que este conjunto es linealmente dependiente en el intervalo si existen constantes <span><em>c</em><sub>1</sub>, <em>c</em><sub>2</sub>, …, <em>c</em><sub><em>k</em></sub></span> que no son todas cero, de tal forma que <br /><span><em>c</em><sub>1</sub><strong>x</strong><sub>1</sub> + <em>c</em><sub>2</sub><strong>x</strong><sub>2</sub> + … + <em>c</em><sub>2</sub><strong>x</strong><sub><em>k</em></sub> = 0</span><br /> para toda <span><em>t</em></span> en el intervalo. Si el conjunto de vectores no es linealmente dependiente en el intervalo, se dice que es linealmente independiente.</p>
            <p>El caso <span><em>k</em> = 2</span> tiene que aclararse; dos vectores solución <span><strong>x</strong><sub>1</sub></span> y <span><strong>x</strong><sub>2</sub></span> son linealmente dependientes si uno es un múltiplo constante del otro, y viceversa. Para <span><em>k</em> &gt; 2</span>, un conjunto de vectores solución es linealmente dependiente si podemos expresar al menos un vector solución como una combinación lineal de los vectores restantes.</p>
            <h3>1.3.5 Criterio para soluciones linealmente independientes (Wronskiano)</h3>
            <p>En una consideración previa relacionada con la teoría de una sola ecuación diferencial ordinaria, pudimos introducir el concepto del determinante wronskiano como una prueba de la independencia lineal. Establecemos el teorema siguiente sin probarlo.</p>
            <p>TEOREMA 3</p>
            <p>Criterio para soluciones linealmente independientes</p>
            <p>Sean <span>$
            {\mathbf{x}}_1 =
            \begin{bmatrix}
            x_{11}\\
            x_{21}\\
            \vdots \\
            x_{n1}
            \end{bmatrix} 
            $</span>, <span>$
            {\mathbf{x}}_2 =
            \begin{bmatrix}
            x_{12}\\
            x_{22}\\
            \vdots \\
            x_{n2}
            \end{bmatrix} 
            $</span>, <span>…</span>, <span>$
            {\mathbf{x}}_n =
            \begin{bmatrix}
            x_{1n}\\
            x_{2n}\\
            \vdots \\
            x_{nn}
            \end{bmatrix} 
            $</span></p>
            <p><span><em>n</em></span> vectores solución del sistema homogéneo en un intervalo <span><em>I</em></span>. Entonces el sistema de vectores solución es linealmente independiente en <span><em>I</em></span> si, y sólo si, el <strong>wronskiano</strong></p>
            <p><br /><span>$$W({\mathbf{x}}_1, {\mathbf{x}}_2, . . . , {\mathbf{x}}_n)=\begin{vmatrix}
            x_{11}&amp;x_{12}&amp;\cdots&amp;x_{1n}\\
            x_{21}&amp;x_{22}&amp;\cdots&amp;x_{2n}\\
            \vdots  &amp;\vdots     &amp;\ddots &amp; \vdots \\
            x_{n1}&amp;x_{n2}&amp;\cdots&amp;x_{nn}
            \end{vmatrix}\neq 0$$</span><br /></p>
            <p>para toda <span><em>t</em></span> incluida en el intervalo.</p>
            <p>Es posible demostrar que si <span><strong>x</strong><sub>1</sub>, <strong>x</strong><sub>2</sub>, …, <strong>x</strong><sub><em>k</em></sub></span> son vectores solución de un sistema lineal, entonces para toda <span><em>t</em></span> en <span><em>I</em></span>, bien <span><em>W</em>(<strong>x</strong><sub>1</sub>, <strong>x</strong><sub>2</sub>, ..., <strong>x</strong><sub><em>n</em></sub>)≠0</span> o <span><em>W</em>(<strong>x</strong><sub>1</sub>, <strong>x</strong><sub>2</sub>, ..., <strong>x</strong><sub><em>n</em></sub>)=0</span>. Por lo tanto, si podemos demostrar que <span><em>W</em> ≠ 0</span> para alguna <span><em>t</em><sub>0</sub></span> en <span><em>I</em></span>, entonces <span><em>W</em> ≠ 0</span> para toda <span><em>t</em></span>, de manera que el conjunto de soluciones es linealmente independiente en el intervalo.</p>
            <h3>1.3.6 Conjunto fundamental de soluciones y solución general</h3>
            <p>DEFINICIÓN 3</p>
            <p>Conjunto fundamental de soluciones</p>
            <p>Todo conjunto <span><strong>x</strong><sub>1</sub>, <strong>x</strong><sub>2</sub>, …, <strong>x</strong><sub><em>n</em></sub></span> de <span><em>n</em></span> vectores solución linealmente independientes del sistema homogéneo en un intervalo <span><em>I</em></span> se denomina conjunto fundamental de soluciones en el intervalo.</p>
            <p>TEOREMA 4</p>
            <p>Existencia de un conjunto fundamental.</p>
            <p>Existe un conjunto fundamental de soluciones para el sistema homogéneo en un intervalo <span><em>I</em></span>.</p>
            <p>TEOREMA 5</p>
            <p>Solución general: sistemas homogéneos</p>
            <p>Sea <span><strong>x</strong><sub>1</sub>, <strong>x</strong><sub>2</sub>, …, <strong>x</strong><sub><em>n</em></sub></span> un conjunto fundamental de soluciones del sistema homogéneo en un intervalo <span><em>I</em></span>. Por lo tanto, la solución general del sistema en el intervalo es <br /><span><strong>x</strong>(<em>t</em>)=<em>c</em><sub>1</sub><strong>x</strong><sub>1</sub> + <em>c</em><sub>2</sub><strong>x</strong><sub>2</sub> + … + <em>c</em><sub>2</sub><strong>x</strong><sub><em>k</em></sub></span><br /> donde <span><em>c</em><sub><em>i</em></sub>, <em>i</em> = 1, 2, …, <em>n</em></span> son constantes arbitrarias.</p>
            <p>Sistemas no homogéneos Para los sistemas no homogéneos, una solución particular <span><strong>x</strong><sub><em>p</em></sub></span> en un intervalo <span><em>I</em></span> es cualquier vector, libre de parámetros arbitrarios, cuyos elementos son funciones que satisfacen el sistema.</p>
            <p>TEOREMA 8.6 Solución general: sistemas no homogéneos</p>
            <p>Sean <span><strong>x</strong><sub><em>p</em></sub></span> una solución dada del sistema no homogéneo en un intervalo <span><em>I</em></span>, y <br /><span><strong>x</strong><sub><em>c</em></sub> = <em>c</em><sub>1</sub><strong>x</strong><sub>1</sub> + <em>c</em><sub>2</sub><strong>x</strong><sub>2</sub> + … + <em>c</em><sub>2</sub><strong>x</strong><sub><em>k</em></sub></span><br /> denote la solución general en el mismo intervalo del sistema homogéneo asociado (5). Luego, la solución general del sistema no homogéneo en el intervalo es <br /><span><strong>x</strong>(<em>t</em>)=<strong>x</strong><sub><em>c</em></sub> + <strong>x</strong><sub><em>p</em></sub></span><br /> La solución general <span><strong>x</strong><sub><em>c</em></sub></span> del sistema homogéneo se denomina función complementaria del sistema no homogéneo.</p>
          </div>
       </div>
   </center>
 <!-- Examples display-->
   <script>
      (function(){
         let buttons = ['btn-ej1'];
         let examples = ['ej1'];
         let flags = [];

         buttons.forEach(function(e){
            flags.push(false);
         });

         document.getElementById(buttons[0]).addEventListener("click", function(){
            checkStatus(0,flags[0], examples[0]);
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
</body>
</html>