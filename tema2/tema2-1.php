<?php 
   include("../head.php");
   echo '<link rel="stylesheet" href="../css/style.css">'
 ?>
<body>
<center>
    <?php 
      include("../header.php");
    ?>
    <div id="site">
        <?php  
               include("../column.php");
         ?>
         <div id="content">
         	<h1>2.1 Método del eigenvalor para sistemas de <span>2 × 2</span></h1>
            <p>A continuación se introduce al método de valores propios para construir la solución general de un sistema lineal homogéneo de primer orden con coeficientes constantes de la forma</p>
            <p><br /><span><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span><br /></p>
            <p>donde se sabe que la que es suficiente encontrar <span><em>n</em></span> vectores solución linealmente independientes <span><em>x</em><sub>1</sub>, <em>x</em><sub>2</sub>, …, <em>x</em><sub><em>n</em></sub></span>; la combinación lineal</p>
            <p><br /><span><strong>x</strong>(<em>t</em>)=<em>c</em><sub>1</sub><strong>x</strong><sub>1</sub> + <em>c</em><sub>2</sub><strong>x</strong><sub>2</sub> + ⋯ + <em>c</em><sub><em>n</em></sub><strong>x</strong><sub><em>n</em></sub></span><br /></p>
            <p>con coeficientes arbitrarios será entonces una solución general del sistema.</p>
            <p>Para buscar los <span><em>n</em></span> vectores solución linealmente independientes por analogía al método de raíces características para resolver una sola ecuación homogénea con coeficientes constantes. Es razonable anticipar los vectores solución de la forma</p>
            <p><br /><span>$${\mathbf{x}}(t) =
               \begin{bmatrix}
            x_{1}\\
            x_{2}\\
            \vdots \\
            x_{n}
               \end{bmatrix} 
             =
             \begin{bmatrix}
            v_1e^{\lambda t}\\
            v_2e^{\lambda t}\\
            \vdots \\
            v_1e^{\lambda t}
               \end{bmatrix}
               =   
             \begin{bmatrix}
            v_1\\
            v_2\\
            \vdots \\
            v_1
               \end{bmatrix}e^{\lambda t}
               ={\mathbf{v}}e^{\lambda t}$$</span><br /></p>
            <p>donde <span><em>λ</em>, <em>v</em><sub>1</sub>, <em>v</em><sub>2</sub>, …, <em>v</em><sub><em>n</em></sub></span> son constantes escalares apropiadas. Si se sustituyen cada <br /><span><em>x</em><sub><em>i</em></sub> = <em>v</em><sub><em>i</em></sub><em>e</em><sup><em>λ</em><em>t</em></sup></span><br /> <br /><span><em>x</em>′<sub><em>i</em></sub> = <em>λ</em><em>v</em><sub><em>i</em></sub><em>e</em><sup><em>λ</em><em>t</em></sup></span><br /> <br /><span>(<em>i</em> = 1, 2, ..., <em>n</em>)</span><br /> en <span><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span> , entonces cada término en las ecuaciones resultantes tiene el factor <span><em>e</em><sup><em>λ</em><em>t</em></sup></span>, tal que se pueden cancelar. Esto nos permitirá contar con <span><em>n</em></span> ecuaciones lineales, las cuales -para valores apropiados de <span><em>λ</em></span>- se puede esperar resolver para ciertos valores de los coeficientes <span><em>v</em><sub>1</sub>, <em>v</em><sub>2</sub>, …, <em>v</em><sub><em>n</em></sub></span>, tal que <span><strong>x</strong>(<em>t</em>)=<strong>v</strong><em>e</em><sup><em>λ</em><em>t</em></sup></span> sea, efectivamente, una solución del sistema dado.</p>
            <p>Cuando se sustituye la solución de prueba <span><strong>x</strong>(<em>t</em>)=<strong>v</strong><em>e</em><sup><em>λ</em><em>t</em></sup></span> con derivada <span><strong>x</strong><strong>′</strong>(<em>t</em>)=<em>λ</em><strong>v</strong><em>e</em><sup><em>λ</em><em>t</em></sup></span> en <span><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span> , el resultado es <br /><span><em>λ</em><strong>v</strong><em>e</em><sup><em>λ</em><em>t</em></sup> = <strong>A</strong><strong>v</strong><em>e</em><sup><em>λ</em><em>t</em></sup></span><br /></p>
            <p>Cancelamos el factor escalar diferente de cero <span><em>e</em><sup><em>λ</em><em>t</em></sup></span> para obtener</p>
            <p><br /><span><strong>A</strong><strong>v</strong> = <em>λ</em><strong>v</strong></span><br /> Esto significa que <span><strong>x</strong>(<em>t</em>)=<strong>v</strong><em>e</em><sup><em>λ</em><em>t</em></sup></span> será una solución no trivial de la ecuación siempre que <span><strong>v</strong></span> sea un vector <em>diferente de cero</em> y <span><em>λ</em></span> sea una constante tal que la ecuación <span><strong>A</strong><strong>v</strong> = <em>λ</em><strong>v</strong></span> se cumpla; esto es, el producto de matrices <span><strong>A</strong><strong>v</strong></span> es un múltiplo escalar del vector <span><strong>v</strong></span>.</p>
            <p>La pregunta ahora es: ¿cómo encontrar <span><strong>v</strong></span> y <span><em>λ</em></span>?</p>
            <p>Para responder, notemos que las siguientes implicaciones</p>
            <p><br /><span>$$\begin{aligned}
            {\mathbf{A}}{\mathbf{v}}&amp; = \lambda {\mathbf{v}}\\
            {\mathbf{A}}{\mathbf{v}}- \lambda {\mathbf{v}}&amp;=0\\
            ({\mathbf{A}}- \lambda {\mathbf{I}}){\mathbf{v}}&amp;= 0\end{aligned}$$</span><br /></p>
            <p>Dado <span><em>λ</em></span>, éste es un sistema de <span><em>n</em></span> ecuaciones lineales homogéneas en las incógnitas <span><em>v</em><sub>1</sub>, <em>v</em><sub>2</sub>, …, <em>v</em><sub><em>n</em></sub></span>. Por un teorema estándar del álgebra lineal, tiene una solución no trivial <strong>si y sólo si</strong> el determinante de su matriz de coeficientes se anula; esto es, <strong>si y sólo si</strong> <br /><span><em>d</em><em>e</em><em>t</em>(<strong>A</strong> − <em>λ</em><strong>I</strong>)=|<strong>A</strong> − <em>λ</em><strong>I</strong>|=0</span><br /></p>
            <p>En su formulación más simple, el método del eigenvalor o valor propio para resolver el sistema <span><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span> consiste en encontrar un valor de <span><em>λ</em></span> tal que la ecuación <span>|<strong>A</strong> − <em>λ</em><strong>I</strong>|=0</span> se cumpla, y posteriormente resolver la ecuación <span>(<strong>A</strong> − <em>λ</em><strong>I</strong>)<strong>v</strong> = 0</span> con este valor de <span><em>λ</em></span> para obtener <span><em>v</em><sub>1</sub>, <em>v</em><sub>2</sub>, …, <em>v</em><sub><em>n</em></sub></span>.</p>
            <p>Entonces <span><strong>x</strong>(<em>t</em>)=<strong>v</strong><em>e</em><sup><em>λ</em><em>t</em></sup></span> será <strong>un</strong> vector solución. El nombre del método proviene de la siguiente definición.</p>
             <a href="tema2-2.php" id="next">Siguiente</a>
            </div>
       </div>
   </center>
   </body>
</html>