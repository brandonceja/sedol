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
            <h1>1.1 Teoría básica</h1>
            <h2>1.2 Forma matricial</h2>
            <h3>1.2.1 Representaciones matriciales de sistemas lineales con coeficientes constantes</h3>
            <p>Los símbolos <span><strong>x</strong></span>, <span><strong>x</strong><strong>′</strong></span>, <span><strong>A</strong>(<em>t</em>)</span> y <span><strong>F</strong>(<em>t</em>)</span> denotan las matrices respectivas</p>
            <p><br /><span>
            $${\mathbf{x}}=
               \begin{bmatrix}
            x_{1}\\
            x_{2}\\
            \vdots \\
            x_{n}
               \end{bmatrix}
             {\mathbf{x'}}=
               \begin{bmatrix}
            x'_{1}\\
            x'_{2}\\
            \vdots \\
            x'_{n}
               \end{bmatrix}
             \mathbf{A}(t) =
               \begin{bmatrix}
            a_{11}(t)&amp;a_{12}(t)&amp;\cdots&amp;a_{1n}(t)\\
            a_{21}(t)&amp;a_{22}(t)&amp;\cdots&amp;a_{2n}(t)\\
            \vdots  &amp;\vdots     &amp;\ddots &amp; \vdots \\
            a_{n1}(t)&amp;a_{n2}(t)&amp;\cdots&amp;a_{nn}(t)
               \end{bmatrix}
             \mathbf{F}(t) =
               \begin{bmatrix}
            f_{1}(t)\\
            f_{2}(t)\\
            \vdots \\
            f_{n}(t)
               \end{bmatrix}$$</span><br /></p>
            <button id="btn-ej1">EJEMPLO 1</button>
            <div id="ej5" class="ej">
               <p>Aquí los símbolos <span><strong>x</strong></span>, <span><strong>x</strong><strong>′</strong></span>, <span><strong>A</strong>(<em>t</em>)</span> y <span><strong>F</strong>(<em>t</em>)</span> denotan lo siguiente:</p>
               <p><br /><span>
               $${\mathbf{x}}=
                  \begin{bmatrix}
               x_{1}\\
               x_{2}\\
               x_{3}
                  \end{bmatrix}
                {\mathbf{x'}}=
                  \begin{bmatrix}
               x'_{1}\\
               x'_{2}\\
               x'_{3}
                  \end{bmatrix}
                \mathbf{A}(t) =
                  \begin{bmatrix}
               3&amp;t&amp;5\\
               1&amp;1&amp;1\\
               \sin(t)&amp;7&amp;1
                  \end{bmatrix}
                \mathbf{F}(t) =
                  \begin{bmatrix}
               \exp(t)\\
               0\\
               t^3
                  \end{bmatrix}$$</span><br /></p>
               <p>con lo que se podrá denotar el sistema. <br /><span>
               $$\begin{aligned}
               x'_1&amp;=3x_1+tx_2+5x_3+\exp(t)\\
               x'_2&amp;=x_1+x_2+x_3\\
               x'_3&amp;=\sin(t)x_1+7x_2+x_3+t^3\\\end{aligned}$$</span><br /></p>
               <p>Con esta notación, un <strong>sistema de ecuaciones diferenciales lineal y de primer orden</strong> se puede expresar como <br /><span>$$\begin{bmatrix}
               x'_{1}\\
               x'_{2}\\
               \vdots \\
               x'_{n}
                  \end{bmatrix}
               =
                  \begin{bmatrix}
               a_{11}(t)&amp;a_{12}(t)&amp;\cdots&amp;a_{1n}(t)\\
               a_{21}(t)&amp;a_{22}(t)&amp;\cdots&amp;a_{2n}(t)\\
               \vdots  &amp;\vdots     &amp;\ddots &amp; \vdots \\
               a_{n1}(t)&amp;a_{n2}(t)&amp;\cdots&amp;a_{nn}(t)
                  \end{bmatrix}
                  \begin{bmatrix}
               x_{1}\\
               x_{2}\\
               \vdots \\
               x_{n}
                  \end{bmatrix}
                  +
                  \begin{bmatrix}
               f_{1}(t)\\
               f_{2}(t)\\
               \vdots \\
               f_{n}(t)
                  \end{bmatrix}$$</span><br /> O de forma abreviada <br /><center><span><strong>x</strong><strong>′</strong> = <strong>A</strong>(<em>t</em>)<strong>x</strong> + <strong>F</strong>(<em>t</em>)</span></center><br /> y respectivamente los otros tipos de sistemas.</p>
            </div>
            <button id="btn-ej2">EJEMPLO 2</button>
            <div id="ej6" class="ej">
               <p>Con esta notación el <strong>sistema de ecuaciones diferenciales lineal y de primer orden</strong> <br /><span>$$\begin{aligned}
               x'_1&amp;=3x_1+tx_2+5x_3+\exp(t)\\
               x'_2&amp;=x_1+x_2+x_3\\
               x'_3&amp;=\sin(t)x_1+7x_2+x_3+t^3\\\end{aligned}$$</span><br /> se puede expresar como <br /><span>$$\begin{bmatrix}
               x'_{1}\\
               x'_{2}\\
               x'_{3}
                  \end{bmatrix}
               =
                  \begin{bmatrix}
               3&amp;t&amp;5\\
               1&amp;1&amp;1\\
               \sin(t)&amp;7&amp;1
                  \end{bmatrix}
                   \begin{bmatrix}
               x_{1}\\
               x_{2}\\
               x_{3}
                  \end{bmatrix}
               +
                  \begin{bmatrix}
               \exp(t)\\
               0\\
               t^3
                  \end{bmatrix}$$</span><br /></p>
            </div>
            <h3>1.2.2 Representaciones matriciales de sistemas lineales con coeficientes constantes</h3>
            <p>Sistema lineal homogéneo: <br /><center><span><strong>x</strong><strong>′</strong> = <strong>A</strong>(<em>t</em>)<strong>x</strong></span></center><br /> Sistema lineal homogéneo con coeficientes constantes: <br /><center><span><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span></center><br /> que es equivalente a lo siguiente <br /><span>
            $$\begin{bmatrix}
            x'_{1}\\
            x'_{2}\\
            \vdots \\
            x'_{n}
               \end{bmatrix}
            =
               \begin{bmatrix}
            a_{11}&amp;a_{12}&amp;\cdots&amp;a_{1n}\\
            a_{21}&amp;a_{22}&amp;\cdots&amp;a_{2n}\\
            \vdots  &amp;\vdots     &amp;\ddots &amp; \vdots \\
            a_{n1}&amp;a_{n2}&amp;\cdots&amp;a_{nn}
               \end{bmatrix}
               \begin{bmatrix}
            x_{1}\\
            x_{2}\\
            \vdots \\
            x_{n}
               \end{bmatrix}$$</span><br /></p>
            <button id="btn-ej3">EJEMPLO</button>
            <div id="ej7" class="ej">
               <p>Sistema lineal homogéneo con coeficientes constantes: <br /><center><span><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span><br /> </center><br /><span>$$\begin{bmatrix}
               x'_{1}\\
               x'_{2}\\
               x'_{3}
                  \end{bmatrix}
               =
                  \begin{bmatrix}
               2&amp;7&amp;8\\
               3&amp;6&amp;10\\
               4&amp;5&amp;\pi
                  \end{bmatrix}
                   \begin{bmatrix}
               x_{1}\\
               x_{2}\\
               x_{3}
                  \end{bmatrix}$$</span><br /> Donde <br /><span>$${\mathbf{x}}=
                  \begin{bmatrix}
               x_{1}\\
               x_{2}\\
               x_{3}
                  \end{bmatrix}
                {\mathbf{x'}}=
                  \begin{bmatrix}
               x'_{1}\\
               x'_{2}\\
               x'_{3}
                  \end{bmatrix}
                \mathbf{A}(t) =
                  \begin{bmatrix}
               2&amp;7&amp;8\\
               3&amp;6&amp;10\\
               4&amp;5&amp;\pi
                  \end{bmatrix}$$</span><br /></p>
            </div>
            <p>DEFINICIÓN: Vector solución</p>
            <p>En un intervalo <span><em>I</em></span>, un vector solución es cualquier matriz columna <br /><span>
            $${\mathbf{x}}(t) =
              \begin{bmatrix}
            x_{1}(t)\\
            x_{2}(t)\\
            \vdots \\
            x_{n}(t)
               \end{bmatrix}$$</span><br /> cuyos elementos son funciones diferenciables que satisfacen, un sistema de ecuaciones diferenciales en el intervalo.</p>
            <button id="btn-ej4">EJEMPLO</button>
            <div id="ej8" class="ej">
               <p>Dado el sistema <span><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span> en su forma matricial <span>$
                   \begin{bmatrix}
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
                  \end{bmatrix}
               $</span> veamos que <span>
               ${\mathbf{x}}_1=\begin{bmatrix}
               3e^{2t}\\
               2e^{2t}
                  \end{bmatrix}$</span> es solución. Basta notar que: <br /><span>
                  $${\mathbf{x'}}_1=\begin{bmatrix}
               \frac{d(3e^{2t})}{dt}\\
               \frac{d(2e^{2t})}{dt}
                  \end{bmatrix}=\begin{bmatrix}
               6e^{2t}\\
               4e^{2t}
                  \end{bmatrix}$$</span><br /> Y que <br /><span>
                     $${\mathbf{A}}{\mathbf{x}}_1=\begin{bmatrix}
               4&amp;-3\\
               6&amp;-7
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
                  \end{bmatrix}$$</span><br /> Así, <span><strong>x</strong><strong>′</strong><sub>1</sub> = <strong>A</strong><strong>x</strong><sub>1</sub></span> por lo tanto, <span><strong>x</strong><sub>1</sub></span> es una solución de <span><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span>.</p>
            </div>
            <p>PONER EJEMPLO DE SOLUCIÓN DE UN SEDOL</p>
            <p><strong>Ejercicio 1</strong></p>
            <p>Dado el siguiente sistema de ecuaciones diferenciales, seleccione las opciones correctas.</p>
            <p><span>
               $$\begin{aligned}
               \frac{dx_1}{dt}=e^{t}x_1+tx_2+5x_3\\
               \frac{dx_2}{dt}= x_1+tx_2+x_3\\
               \frac{dx_3}{dt}=x_1+7x_2+\sin(t)x_3
               \end{aligned}$$
            </span></p>
            <form action="./include/answers.inc.php" method="POST">
              <input type="checkbox" name="answer1" value="a"> Es de primer orden.<br>
              <input type="checkbox" name="answer1" value="b"> Es de lineal y de primer orden.<br>
              <input type="checkbox" name="answer1" value="c"> Es homogéneo.<br>
              <input type="checkbox" name="answer1" value="d"> Es de coeficientes constantes.<br><br>
              <input type="submit" value="Revisar">
            </form> 
            <p><strong>Ejercicio 2</strong></p>
            <p>Dado el siguiente sistema de ecuaciones diferenciales, seleccione las opciones correctas. <br /><span>
            $$\begin{bmatrix}
            x'_{1}\\
            x'_{2}\\
            x'_{3}
            \end{bmatrix}
            =
            \begin{bmatrix}
            t^2&amp;t&amp;1\\
            2&amp;1&amp;0\\
            \sin(t)&amp;\cos(t)&amp;\tan(t)
            \end{bmatrix}
            \begin{bmatrix}
            x_{1}\\
            x_{2}\\
            x_{3}
            \end{bmatrix}
            +
            \begin{bmatrix}
            0\\
            0\\
            1
            \end{bmatrix}$$</span><br /></p>
            <form action="./include/answers.inc.php" method="POST">
              <input type="checkbox" name="answer2" value="a"> Es de primer orden.<br>
              <input type="checkbox" name="answer2" value="b"> Es de lineal y de primer orden.<br>
              <input type="checkbox" name="answer2" value="c"> Es homogéneo.<br>
              <input type="checkbox" name="answer2" value="d"> Es de coeficientes constantes.<br><br>
              <input type="submit" value="Revisar">
            </form> 
            <p><strong>Ejercicio 3</strong></p>
            <p>Dado el siguiente sistema de ecuaciones diferenciales, seleccione las opciones correctas.</p>
            <p><span>
               $$\begin{aligned}
               $\frac{dx_1}{dt}=x_1+2x_2$ \\
               $\frac{dx_2}{dt} =3x_2+4x_1$
               \end{aligned}$$
            </span></p>
            <form action="./include/answers.inc.php" method="POST">
              <input type="checkbox" name="answer3" value="a"> Es de primer orden.<br>
              <input type="checkbox" name="answer3" value="b"> Es de lineal y de primer orden.<br>
              <input type="checkbox" name="answer3" value="c"> Es homogéneo.<br>
              <input type="checkbox" name="answer3" value="d"> Es de coeficientes constantes.<br><br>
              <input type="submit" value="Revisar">
            </form> 
            <p>¿Cuál de las siguientes es su notación matricial? <br /><span>
            $$ a) \begin{bmatrix}
            x'_{1}\\
            x'_{2}
            \end{bmatrix}
            =
            \begin{bmatrix}
            1&amp;2\\
            4&amp;3
            \end{bmatrix}
            \begin{bmatrix}
            x_{1}\\
            x_{2}
            \end{bmatrix}  
            \hspace{1em} b) \begin{bmatrix}
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
            \end{bmatrix}   
            \hspace{1em} c) \begin{bmatrix}
            x'_{1}\\
            x'_{2}
            \end{bmatrix}
            =
            \begin{bmatrix}
            1&amp;4\\
            3&amp;2
            \end{bmatrix}
            \begin{bmatrix}
            x_{1}\\
            x_{2}
            \end{bmatrix}
            +
            \begin{bmatrix}
            0\\
            0
            \end{bmatrix}$$</span><br /></p>
            <form action="./include/answers.inc.php" method="POST">
              <input type="checkbox" name="answer4" value="a"> Opción a.<br>
              <input type="checkbox" name="answer4" value="b"> Opción b.<br>
              <input type="checkbox" name="answer4" value="c"> Opción c.<br>
              <input type="submit" value="Revisar">
            </form> 
            <a href="tema1-3.php" id="next">Siguiente</a>
        </div>
   </center>
 <!-- Examples display-->
   <script>
      (function(){
         let buttons = ["btn-ej1","btn-ej2","btn-ej3","btn-ej4"];
         let examples = ["ej1","ej2","ej3","ej4"];
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
         document.getElementById(buttons[2]).addEventListener("click", function(){
            checkStatus(2,flags[2], examples[2]);
         });
         document.getElementById(buttons[3]).addEventListener("click", function(){
            checkStatus(3,flags[3], examples[3]);
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