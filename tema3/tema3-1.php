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
        	<h1>Método del eigenvalor para sistemas de $n\times n$</h1>
          <p>Para el caso general de resolver un sistema de ecuaciones diferenciales con coeficientes  reales de $n$ variables, la ecuación  $|\mathbf{A}-\lambda \mathbf{I}| |=0$ de  grado $n$, que es llamada ecuación característica,  se puede factorizar  como:</p>
          $$(-1)^{n} (\lambda - \lambda _{1} )^{k_{1}} (\lambda - \lambda 
          _{2})^{k_{2}} \ldots (\lambda - \lambda _{m})^{k_{m}}= 0$$
          <p>Donde </p>
          $$k_{1}+ k_{2}+ \ldots + k_{m}= n$$
          <p>El número $k_{i}$ se llama <strong>multiplicidad algebraica</strong> del  valor propio $\lambda _{i}$. </p>
          <p>Cada valor propio existen $s_{i}$ vector propios linealmente  independientes. El número $s_{i}$ se llama <strong>multiplicidad geométrica</strong> del valor propio $\lambda _{i}$</p>
          <p>Se demuestra en el álgebra lineal que la multiplicidad geométrica $s_{i}$ no excede la multiplicidad algebraica $k_{i}$, es decir $1\leq s_i \leq k_i$.</p>
          <p>Considerando lo anterior, resulta que la solución del sistema homogéneo depende esencialmente de 
          la multiplicidad de los valores propios. Consideremos los casos posibles que surgen:</p>
          &emsp;&emsp;<h3>1. Caso ($\mathbf{s_{i}= k_{i}= 1}$).</h3>
          <p>Todas las raices  de la ecuación característica  son distintas.</p>
          <p>En este caso cada valor propio $\lambda _{i}$ tiene asociado un  vector propio $\mathbf{v}_{i}$. Estos vectores forman un conjunto de soluciones linealmente independientes</p>
          $$\mathbf{x}_{1}= e^{\lambda _{1}t}\mathbf{v}_{1}, \mathbf{x}_{2}= e^{\lambda _{2}t}\mathbf{v}_{2}, \ldots , 
          \mathbf{x}_{n}= e^{\lambda _{n}t}\mathbf{v}_{n}$$
          <p>Esto es por la independencia lineal de los vectores propios, así el  Wronskiano correspondiente es diferente de cero:</p>
          \begin{align*}
          W \lbrack \mathbf{x}_{1},\mathbf{x}_{2}, \ldots ,\mathbf{x}_{n}\rbrack (t)&= \begin{vmatrix}
          x_{11}(t) & x_{12}(t) & \ldots & x_{1n}(t) \\
          x_{21}(t) & x_{22}(t) & \ldots & x_{2n}(t) \\
          \vdots & \vdots & \ddots & \vdots \\
          x_{n1}(t) & x_{n2}(t) & \ldots & x_{nn}(t) 
          \end{vmatrix}\\
          &= \begin{vmatrix}
          e^{\lambda _{1}t}v_{11} & e^{\lambda _{2}t}v_{12} & \ldots & e^{\lambda 
            _{n}t}v_{1n} \\
          e^{\lambda _{1}t}v_{21} & e^{\lambda _{2}t}v_{22} & \ldots & e^{\lambda 
            _{n}t}v_{2n} \\
          \vdots & \vdots & \ddots & \vdots \\
          e^{\lambda _{1}t}v_{n1} & e^{\lambda _{2}t}v_{n2} & \ldots & e^{\lambda 
            _{n}t}v_{nn} 
          \end{vmatrix}\\
          &= e^{(\lambda _{1} + \lambda _{2} + \ldots + \lambda _{n})t} 
          \begin{vmatrix}
          v_{11} & v_{12} & \ldots & v_{1n} \\
          v_{21} & v_{22} & \ldots & v_{2n} \\
          \vdots & \vdots & \ddots & \vdots \\
          v_{n1} & v_{n2} & \ldots & v_{nn} 
          \end{vmatrix}
          \ne 0
          \end{align*}
          <p>Y la solución general viene dada por</p>
          $$\mathbf{x}(t) = c_{1}e^{\lambda _{1}t}\mathbf{v}_{1} + c_{2}e^{\lambda _{2}t}\mathbf{v}_{2} + \ldots + c_{n} e^{\lambda _{n}t}\mathbf{v}_{n}$$
          <p>donde $c_{1}, c_{2}, \ldots , c_{n}$son constantes arbitrarias.</p>
          <p>Sin embargo, la ecuación característica puede tener raíces complejas. Si todas las entradas de la matriz $\mathbf{A}$ son reales, entonces las raíces complejas aparecen siempre en pares de números conjugados complejos. </p>
          <p>Supongamos que tenemos un par de valores propios complejos $\lambda= p + q i$ y $\bar{\lambda}= p - q i$  con vectores propios $\mathbf{v}$ y $\bar{\mathbf{v}}$ respectivamente. Este par de números complejos conjugados genera  soluciones reales linealmente independientes de la forma:</p>
          \begin{align*}
          \mathbf{x}_1(t) &= \text{Re}[e^{(p + q i)t}\mathbf{v}] = e^{pt} (\mathbf{a} \cos qt - \mathbf{b} \sin qt)\\
          \mathbf{x}_2(t) &= \text{Im}[e^{(p + q i)t}\mathbf{v}] = e^{pt} (\mathbf{b} \cos qt + \mathbf{a} \sin qt)
          \end{align*}
          <p>donde </p>
          $$\mathbf{a}=\text{Re}[\mathbf{v}] \hspace{4em} \text{y} \hspace{4em} \mathbf{b}=\text{Im}[\mathbf{v}]$$
          <p>Así, las partes real e imaginaria de la solución compleja forman un par de soluciones reales.</p>
          &emsp;&emsp;<h3>2. Caso ($\mathbf{s_{i}= k_{i}> 1}$).</h3>
          <p>Este caso es similar al anterior. A pesar de la existencia de valores propios de multiplicidad mayores que 1, podemos encontrar $n$ vectores propios  linealmente independientes.</p>
          <p>En particular, cualquier matriz simétrica con entradas reales que tenga  $n$ valores propios, tendrá $n$ vectores propios. Y la solución general del sistema de $n$ ecuaciones diferenciales puede ser representada como</p>
          \begin{align*}
          \mathbf{x}(t)=
          &\underbrace{c_{11}e^{\lambda _{1} t}v_{1}^{1}+ c_{12}e^{\lambda _{1} 
              t}v_{1}^{2}+ \ldots + c_{1 k_{1}}e^{\lambda _{1} t}v_{1}^{k_{1}}}_{k_{1}} +\\
          &\underbrace{ c_{21}e^{\lambda _{2} t}v_{2}^{1}+ c_{22}e^{\lambda _{2} 
              t}v_{2}^{2}+ \ldots + c_{2k_{2}}e^{\lambda _{2} t}v_{2}^{k_{2}}}_{k_{2}} + \ldots
          \end{align*}
          <p>Donde el total de términos es $n$, y los valores $c_{ij}$ son constantes arbitrarias.</p>
          &emsp;&emsp;<h3>3. Caso ($\mathbf{s_{i}< k_{i}}$).</h3>
          <p>En este caso se  tienen valores propios repetidos,   cuya multiplicidad geométrica es menor que la multiplicidad algebraica.</p>
          <p>Un valor propio $\lambda_{i}$ de multiplicidad algebraica $k_{i}$ puede tener menos de $k_{i}$ vectores propios linealmente independientes.  En este caso,  podemos encontrar vectores linealmente independientes  asociados a $\lambda_i$ denominados  <i>valores propios generalizados</i> y con esto obtener un conjunto de $n$ vectores linealmente independientes para construir el correspondiente sistema fundamental de solución. En general esto se puede realizar de las siguientes maneras:</p>
          <ul>
            <li>
              <p>Construcción de la Solución General de un Sistema de Ecuaciones usando el Método de Coeficientes Indeterminados</p>
            </li>
            <li>
              <p>Construcción de la Solución General de un Sistema de Ecuaciones Usando Formas Jordan. Estas maneras para el caso de $n\times n$ no se expresan en este apartado, aunque ecencialmente en el caso se $2\times 2$ se vio la forma de Jordan para valores propios <i>incompletos</i>.</p>
            </li>
          </ul>

         </div>
    </div>
   </center>
   </body>
</html>