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
            <h2>2.1. Valores propios  y vectores propios</h2>
            <p><strong>Definición (Valores propios  y vectores propios)</strong></p>
            <ul>
              <li>El número $\lambda$  se llama <strong>valor propio</strong> (o eigenvalor) de la matriz $\mathbf{A}$ de tamaño $n\times n$ siempre que</li>
              $$|\mathbf{A}-\lambda \mathbf{I}| = 0$$
              <li>Un <strong>vector propio</strong> (o eigenvector) asociado con el valor propio $\lambda$ es un vector no cero $\mathbf{v}$, tal que</li>
              $$(\mathbf{A} - \lambda \mathbf{I})\mathbf{v} = 0.$$
            </ul>
            <p>Donde $\mathbf{I}$ es la matriz identidad de $n\times n$</p>
            <div class="note">
              <div class="tnote">
                <p>NOTA</p>
              </div>
              <div class="cnote">
                 <p> A un valor propio $\lambda$ le puede corresponder mas de un vector propio. Si $\mathbf{v}$ es uno de sus vectores propios, también lo es $c\mathbf{v}$ donde $c\neq0$, esto se concluye de la multiplicación en cada lado de la ecuación $(\mathbf{A} - \lambda \mathbf{I})\mathbf{v} = 0$ por $c\neq 0$.</p>
              </div>
            </div>
            <strong>Teorema (Soluciones de $\mathbf{x'}=\mathbf{A}\mathbf{x}$ con valores propios).</strong>
            <p>Sea $\lambda$ un valor propio de la matriz de coeficientes $\mathbf{A}$ del sistema lineal de primer orden</p>
            $$\mathbf{x'}=\mathbf{A}\mathbf{x}$$
            <p>Si $\mathbf{v}$ es un vector propio  asociado de $\lambda$, entonces</p>
            $$\mathbf{x}(t) = \mathbf{v} e^{\lambda t}$$
            <p>es una solución no trivial del sistema.</p>
            <br><hr><br><br>
            <p>Regresando al caso particular de sistemas de $2\times 2$, consideremos el sistema </p>
            \begin{align*}
            x'(t) &= ax+by\\
            y'(t) &= cx+dy
            \end{align*}
            <p>con $a,b,c,d$ números reales. Si se escribe en la forma matricial $\mathbf{x'}=\mathbf{A}\mathbf{x}$ queda como:</p>
            $$\begin{bmatrix}
            x'  \\
            y'  \\
            \end{bmatrix}=\begin{bmatrix}
            a & b  \\
            c & d  \\
            \end{bmatrix}\begin{bmatrix}
            x  \\
            y  \\
            \end{bmatrix}$$
            <p>por lo tanto, la matriz de coeficientes es</p>
            $$\mathbf{A}=\begin{bmatrix}
            a & b  \\
            c & d  \\
            \end{bmatrix}$$
            <p>Para obtener los valores propios se tiene que resolver la ecuación $\left|\mathbf{A}-\lambda \mathbf{I}\right| = 0$ para la incógnita $\lambda$, para esto se realizan primero las siguientes operaciones:</p>
            \begin{align*}
            \left|\mathbf{A}-\lambda \mathbf{I}\right| &= 0\\
            \left|\begin{bmatrix}
            a & b  \\
            c & d  \\
            \end{bmatrix}
            -\lambda \begin{bmatrix}
            1 & 0  \\
            0 & 1  \\
            \end{bmatrix}
            \right|&= 0\\
            \left|\begin{bmatrix}
            a & b  \\
            c & d  \\
            \end{bmatrix}
            -\begin{bmatrix}
            \lambda & 0  \\
            0 & \lambda  \\
            \end{bmatrix}
            \right|&= 0\\
            \begin{vmatrix}
            a-\lambda & b  \\
            c & d-\lambda  \\
            \end{vmatrix}
            &= 0\\
            (a-\lambda )(d-\lambda )-bc &= 0\\
            ad-a\lambda -d\lambda +\lambda ^{2}-bc &= 0\\
            ad-(a+d)\lambda +\lambda ^{2}-bc &= 0\\
            \lambda ^{2}-(a+d)\lambda +(ab-bc) &= 0\\
            \end{align*}
            <p>Entonces se tiene  una ecuación de segundo que se puede resolver con  los métodos habituales y las soluciones se puede dividir en tres casos:</p>
            <p><strong>CASO 1: </strong>Dos soluciones reales y distintas.</p>
            <p><strong>CASO 2: </strong>Soluciones complejas conjugadas.</p>
            <p><strong>CASO 3: </strong>Una solución real repetida. </p>
            <p>Debido a que los valores propios se dividen en estos casos,  la obtención de la solución general de sistema de ecuaciones diferenciales también se tratara en forma se parada para cada uno de los  tipos de valores propios que podamos obtener, esto se vera mas adelante, por ahora solo ejemplifiquemos el cálculo de  valores propios considerando las siguientes matrices $\mathbf{A}$ de coeficientes, realicemos las operaciones simultáneamente para obtener sus respectivos valores propios:</p>
            <table class="special-table">
              <tr>
                <th>$\mathbf{A}$</th>
                <th>
                  $ \begin{bmatrix}
                  4 & -3  \\
                  6 & -7  \\
                  \end{bmatrix}$  
                </th>
                <th>
                  $\begin{bmatrix}
                  1 & 2  \\
                  -2 & 1  \\
                  \end{bmatrix}$
                </th>
                <th>
                  $\begin{bmatrix}
                  5 & -1  \\
                  1 & 3  \\
                  \end{bmatrix}$ 
                </th>
            </tr>
              <tr>
                <td>
                  <p>Se realizan las operaciones con las matrices</p>$\mathbf{A}-\lambda \mathbf{I}  $
                </td>
                <td>
                  $ \begin{bmatrix}
                  4 & -3  \\
                  6 & -7  \\
                  \end{bmatrix}
                  -\lambda \begin{bmatrix}
                  1 & 0  \\
                  0 & 1  \\
                  \end{bmatrix}=$ <br><br>
                  $ \begin{bmatrix}
                  4 & -3  \\
                  6 & -7  \\
                  \end{bmatrix}
                  - \begin{bmatrix}
                  \lambda & 0  \\
                  0 & \lambda  \\
                  \end{bmatrix}=$ <br><br>
                  $ \begin{bmatrix}
                  4-\lambda & -3  \\
                  6 & -7 -\lambda \\
                  \end{bmatrix}$  
                </td>
                <td>
                  $\begin{bmatrix}
                  1 & 2  \\
                  -2 & 1  \\
                  \end{bmatrix}
                  -\lambda \begin{bmatrix}
                  1 & 0  \\
                  0 & 1  \\
                  \end{bmatrix}=$  <br><br>
                  $\begin{bmatrix}
                  1 & 2  \\
                  -2 & 1  \\
                  \end{bmatrix}
                  - \begin{bmatrix}
                  \lambda & 0  \\
                  0 & \lambda  \\
                  \end{bmatrix}=$  <br><br>
                  $\begin{bmatrix}
                  1-\lambda & 2  \\
                  -2 & 1 -\lambda \\
                  \end{bmatrix}$  
                </td>
                <td>
                  $\begin{bmatrix}
                  5 & -1  \\
                  1 & 3  \\
                  \end{bmatrix}
                  -\lambda \begin{bmatrix}
                  1 & 0  \\
                  0 & 1  \\
                  \end{bmatrix}=$ <br><br>
                  $\begin{bmatrix}
                  5 & -1  \\
                  1 & 3  \\
                  \end{bmatrix}
                  - \begin{bmatrix}
                  \lambda & 0  \\
                  0 & \lambda  \\
                  \end{bmatrix}=$ <br><br>
                  $\begin{bmatrix}
                  5-\lambda & -1  \\
                  1 & 3-\lambda  \\
                  \end{bmatrix}$
                </td>
              </tr>
              <tr>
                <td>
                  <p>Se calcula el determinante</p>
                  $\left| \mathbf{A}-\lambda \mathbf{I} \right| $ 
                </td>
                <td>
                  $ \begin{vmatrix}
                  4-\lambda & -3  \\
                  6 & -7 -\lambda \\
                  \end{vmatrix}=$ <br><br>
                  $(4-\lambda)(-7 -\lambda) - (-3)(6)=  $ <br><br>
                  $\lambda^2+3\lambda-10$
                </td>
                <td>
                  $\begin{vmatrix}
                  1-\lambda & 2  \\
                  -2 & 1 -\lambda \\
                  \end{vmatrix}=$ <br><br>
                  $(1-\lambda)(1 -\lambda) - (2)(-2)= $ <br><br>
                  $\lambda^2-2\lambda+5$
                </td>
                <td>
                  $\begin{vmatrix}
                  5-\lambda & -1  \\
                  1 & 3-\lambda  \\
                  \end{vmatrix}=$ <br><br>
                  $(5-\lambda)(3 -\lambda) - (-1)(1)= $ <br><br>
                  $\lambda^2-8\lambda+16$
                </td>
              </tr>
              <tr>
                <td>
                  <p>Se resuelve la ecuación</p>
                   $\left| \mathbf{A}-\lambda \mathbf{I} \right|=0 $
                </td>
                <td>
                  $\lambda^2+3\lambda-10=0$<br><br>
                  $\lambda = \frac {-(3) \pm \sqrt {3^2 - 4(-10)}}{2} $<br><br>
                  $\lambda_1 =2 \hspace{2em}  \lambda_2=-5$
                </td>
                <td>
                  $\lambda^2-2\lambda+5=0$<br><br>
                  $x = \frac {-(-2) \pm \sqrt {(-2)^2 - 4(5)}}{2} $<br><br>
                  $\lambda_1 = 1+2i \hspace{1em}  \lambda_2=1-2i$
                </td>
                <td>
                  $\lambda^2-8\lambda+16$=0<br><br>
                  $x = \frac {-(-8) \pm \sqrt {(-8)^2 - 4(16)}}{2} $<br><br>
                  $\lambda_1 =   4  $
                </td>
              </tr>
            </table>
            <p>Una vez encontrado  un valor propio $\lambda$, para encontrar un vector propio asociado se tiene que resolver el sistema dado por</p>
            $$(\mathbf{A} - \lambda \mathbf{I})\mathbf{v} = 0$$
            <p>que equivale a las siguientes formas</p>
            \begin{align*}
            \begin{bmatrix}
            a-\lambda & b  \\
            c & d -\lambda \\
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
            cv_1 + (d -\lambda)v_2 \\
            \end{bmatrix}&=
            \begin{bmatrix}
            0\\
            0
            \end{bmatrix}\\
            (a-\lambda)v_1 + bv_2&=0  \\
            cv_1 + (d -\lambda)v_2&=0\\
            \end{align*}
            <p>La solución de este sistema algebraico que determina el vector  propio $\mathbf{v}=\begin{bmatrix}v_1\\v_2\end{bmatrix}$  se ejemplificara adelante en el proceso de resolución del sistema de ecuaciones diferenciales. </p>  
            <div id="change">
              <a href="tema2-1.php" id="ant">&#8249;</a>
              <a href="tema2-3.php" id="next">&#8250;</a>
            </div>
          </div>
   </center>
   <?php 
      include("../arrow.php");
   ?>
   </body>
</html>