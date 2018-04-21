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
            <h1>2.4 Con multiplicidad</h1>
            <p>En esta sección se presenta el caso en que la ecuación característica</p>
            <p><br /><span>|<strong>A</strong> − <em>λ</em><strong>I</strong>|=0</span><br /></p>
            <p><span><strong>NO</strong></span> tiene <span><em>n</em></span> raíces distintas, de este modo cuenta con al menos una raíz repetida.</p>
            <p>Un eigenvalor es de multiplicidad <span<em>k</em></span> si es una raíz de multiplicidad <span><em>k</em></span> de la ecuación anterior. Para cada eigenvalor <span><em>λ</em></span>, la ecuación para encontrar cada eigenvector</p>
            <p><br /><span>(<strong>A</strong> − <em>λ</em><strong>I</strong>)<strong>v</strong> = 0</span><br /></p>
            <p>tiene al menos una solución diferente de cero <span><strong>v</strong></span>, de esta manera existe al menos un eigenvector asociado a <span><em>λ</em></span>.</p>
            <p>De este modo, un eigenvalor de multiplicidad <span><em>k</em> &gt; 1</span> puede cumplir algunas de las dos condiciones siguientes:</p>
            <ul>
            <li><p>Tener <span><em>k</em></span> eigenvectores asociados linealmente independientes.</p></li>
            <li><p>O tener <em>menos</em> de <span><em>k</em></span> eigenvectores asociados linealmente independientes.</p></li>
            </ul>
            <p>En le primer caso se dice que el eigenvalor <em>completo</em> e implica que se puede encontrar un conjunto completo de eigenvectores linealmente independientes necesarios para formar la solución general del sistema homogéneo con coeficientes constantes, en el segundo caso se dice que el eigenvalor es <em>incompleto</em> ya que no se puede encontrar un conjunto completo de <span><em>n</em></span> eigenvectores linealmente independientes, como es necesario para formar la solución general, por lo que se procede de forma distinta a encontrar dos vectores solución linealmente independientes.</p>
            <p>Regresando a los sistemas de <span>2 × 2</span>, como se tiene que el eigenvalor <span><em>λ</em></span> es de multiplicidad 2 primero se procede a verificar si es completo o incompleto, eso se hace resolviendo el siguiente de ecuaciones algebraicas con incógnitas <span><em>v</em><sub>1</sub></span> y <span><em>v</em><sub>2</sub></span>, las componentes de <span><strong>v</strong></span>.</p>
            <p>De esta manera, por lo tanto para obtener los valores propios basta resolver la ecuación</p>
            <p><br /><span>(<strong>A</strong> − <em>λ</em><strong>I</strong>)<strong>v</strong> = 0</span><br /></p>
            <p><br /><span>$$\left(  \begin{bmatrix}
            a &amp; b \\
            c &amp; d \\
            \end{bmatrix}
             -\lambda  \begin{bmatrix}
            1 &amp; 0 \\
            0 &amp; 1 \\
            \end{bmatrix}
            \right) \begin{bmatrix}
            v_1\\
            v_2
            \end{bmatrix} = 0$$</span><br /><br />
            <br /><span>$$\left(  \begin{bmatrix}
            a &amp; b \\
            c &amp; d \\
            \end{bmatrix}
            - \begin{bmatrix}
            \lambda  &amp; 0 \\
            0 &amp; \lambda  \\
            \end{bmatrix}
            \right) \begin{bmatrix}
            v_1\\
            v_2
            \end{bmatrix} = 0$$</span><br /><br />
            <br /><span>$$\begin{bmatrix}
            a-\lambda &amp; b &amp; \\
            c &amp; d-\lambda &amp; \\
            \end{bmatrix}
            \begin{bmatrix}
            v_1\\
            v_2
            \end{bmatrix}
            = 0$$</span><br /></p>
            <p><br /><span>$$\begin{aligned}
            (a-\lambda)v_1 + bv_2&amp;=0  \\
            cv_1 + (d-\lambda)v_2&amp;=0\end{aligned}$$</span><br /></p>
            <p>La posibilidad de encontrar dos vectores propios linealmente independientes <span><em>v</em><sub>1</sub></span> y <span><em>v</em><sub>2</sub></span>, en este caso se dice que es eigenvalor <span><em>λ</em></span> completo y la solución es queda en la forma</p>
            <p><span><em>Y</em><sub><em>g</em></sub>(<em>t</em>)=<em>C</em><sub>1</sub><em>v</em><sub>1</sub><em>e</em><sup><em>λ</em><em>t</em></sup> + <em>C</em><sub>2</sub><em>v</em><sub>2</sub><em>e</em><sup><em>λ</em><em>t</em></sup></span><br />
            </p>
            <p>En caso de encontrar un vector propio de <strong></strong> <span><em>λ</em></span> y no poder o encontrar otro con el cual sea linealmente independiente, se dice que <span><em>λ</em></span> es incompleto y la solución general se encuentra de la siguiente manera:</p>
            <p>Encontrar un eigenvector <span><em>v</em><sub>1</sub></span> de <strong></strong> <span><em>λ</em></span></p>
            <p>Encontrar un vector <span><em>v</em><sub>2</sub></span> diferente de cero de la ecuación</p>
            <p><span>(<em>A</em> − <em>λ</em><em>I</em>)<sup>2</sup><em>v</em><sub>2</sub> = 0</span><br />
            tal que</p>
            <p><span>(<em>A</em> − <em>λ</em><em>I</em>)<em>v</em><sub>2</sub> = <em>v</em><sub>1</sub></span><br />
            Fórmense las dos soluciones independientes</p>
            <p><span><em>Y</em><sub>1</sub>(<em>t</em>)=<em>v</em><sub>1</sub><em>e</em><sup><em>λ</em><em>t</em></sup></span><br />
            <span><em>Y</em><sub>2</sub>(<em>t</em>)=(<em>v</em><sub>1</sub><em>t</em> + <em>v</em><sub>2</sub>)<em>e</em><sup><em>λ</em><em>t</em></sup></span><br />
            Y por lo tanto la solución general es</p>
            <p><span><em>Y</em><sub><em>g</em></sub>(<em>t</em>)=<em>C</em><sub>1</sub><em>Y</em><sub>1</sub>(<em>t</em>)+<em>C</em><sub>2</sub><em>Y</em><sub>2</sub>(<em>t</em>)=<em>C</em><sub>1</sub><em>v</em><sub>1</sub><em>e</em><sup><em>λ</em><em>t</em></sup> + <em>C</em><sub>2</sub>(<em>v</em><sub>1</sub><em>t</em> + <em>v</em><sub>2</sub>)<em>e</em><sup><em>λ</em><em>t</em></sup></span><br />
            </p>
          </div>
       </div>
   </center>
   </body>
</html>