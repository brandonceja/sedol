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
            <h2>2.5. Ejercicios</h2>
            <p>Para cada uno de los siguientes sistemas de ecuaciones diferenciales </p>
            <center>
              <table>
                <tr>
                  <td>
                    (1) &emsp;  $x'(t)=0     $ <br>
                    &emsp; $y'(t)=-4x-4y$
                  </td>
                  <td>
                    (2) &emsp; $x'(t)=2x$ <br>
                   &emsp; $y'(t)=2y$
                  </td>
                  <td>
                    (3) &emsp; $x'(t)=-4x-1/3y$ <br>
                  &emsp;  $y'(t)=3x-2y$
                  </td>
                </tr>
                <tr>
                  <td>
                    (4) &emsp;  $x'(t)=-5x+3y$ <br>
                   &emsp; $y'(t)=-6x+4y$ 
                  </td>
                  <td>
                    (5) &emsp; $x'(t)=-2x+6y$ <br>
                   &emsp; $y'(t)=-3x+4y$
                  </td>
                  <td>
                    (6) &emsp;  $x'(t)=-6x-15y$ <br>
                   &emsp; $y'(t)=3x+6y$ 
                  </td>
                </tr>
                <tr>
                  <td>
                    (7) &emsp; $x'(t)=3x-2y$ <br>
                   &emsp; $y'(t)=2x-2y$
                  </td>
                  <td>
                    (8) &emsp; $x'(t)=-4x+y$ <br>
                     &emsp; $y'(t)=-2x-y$ 
                  </td>
                  <td>
                    (9) &emsp; $x'(t)=-x+y$ <br>
                  &emsp;  $y'(t)= x-y$  
                  </td>
                </tr>
                <tr>
                  <td>
                    (10) &emsp; $x'(t)=2x-4/3y$ <br>
                   &emsp; $y'(t)=3x+6y$  
                  </td>
                  <td>
                    (11) &emsp;  $x'(t)=-8x-15y$ <br>
                  &emsp;  $y'(t)=  3x+4y$
                  </td>
                  <td>
                    (12) &emsp;  $x'(t)=5x+2y$ <br>
                  &emsp;  $y'(t)=-4x-y$
                  </td>
                </tr>
              </table>
            </center>
            <p>Realizar las siguientes actividades y responder los cuestionamientos:</p>
            <ol>
              <li>
                <p>Obtener la solución general. </p>
              </li>
              <li>
                <p>Obtenga  las funciones solución $x(t)$ y $y(t)$  que resuelven el problema de valor inicial $[t0,x0,y0]=[0,-2,4]$</p>
                <p>a) Obtenga una gráfica  de las soluciones solución</p>
                <p>b) ¿Hacia donde tienden los valores de las funciones $x(t)$ y $y(t)$ cuando $t\rightarrow\infty$?</p>
              </li>
              <li>
                <p>Bosqueje el diagrama de fase y de flujo, se puede auxiliar del  <strong>Graficador de diagrama de fase</strong> contenido en la sección Recursos SAGE(<a href="../recursos.php">link</a>) para la construcción de las gráficas.</p>
              </li>
              <li>
                <p>En caso de obtener valores  propios reales  (distintos o  con multiplicidad).</p>
                <p>a) ¿Cuál es la tendencia de los recorridos en cada una de las regiones determinadas por los vectores propios.</p>
              </li>
              <li>
                <p>En caso de obtener valores propios  complejos.</p>
                <p>a) ¿Cuál es la tendencia de los recorridos?</p>
                <p>b) ¿Cómo son los recorridos en caso de que las soluciones  tengan  como factor a una función exponencial?</p>
                <p>c) ¿Cómo son los recorridos en caso de que las soluciones son periódicas?</p>
              </li>
            </ol>
            <a href="tema2-5.php" id="ant">&#8249;</a>
         </div>
    </div>
</center>
</body>