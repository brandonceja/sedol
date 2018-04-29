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
            <h1>Teoría básica</h1>
            <h2>1.2. Forma matricial</h2>
            <h3>1.2.1. Representaciones matriciales de sistemas lineales</h3>
            <p>Dado el sistemas lineal de primer orden en la forma normal:</p>
            \begin{align*}
            x'_1&=a_{11}(t)x_1+a_{12}(t)x_2+\cdots+a_{1n}(t)x_n+f_1(t)\\
            x'_2&=a_{21}(t)x_1+a_{22}(t)x_2+\cdots+a_{2n}(t)x_n+f_2(t)\\
            &\hspace{8em} \vdots \\
            x'_n&=a_{n1}(t)x_1+a_{n2}(t)x_2+\cdots+a_{nn}(t)x_n+f_n(t)
            \end{align*}
            <p>Se puede denotar con los símbolos $\mathbf{x}$, $\mathbf{x'}$,  $\mathbf{A} (t)$ y $\mathbf{F}(t)$ las matrices siguientes:</p>
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
            \end{bmatrix}$$<br/>
            <p>Con esta notación, se puede escribir el sistema de ecuaciones diferenciales lineal y de primer orden como: </p>
            \[
               \begin{bmatrix}
            x'_{1}\\
            x'_{2}\\
            \vdots \\
            x'_{n}
               \end{bmatrix}
            =
               \begin{bmatrix}
            a_{11}(t)&a_{12}(t)&\cdots&a_{1n}(t)\\
            a_{21}(t)&a_{22}(t)&\cdots&a_{2n}(t)\\
            \vdots   &\vdots     &\ddots  & \vdots \\
            a_{n1}(t)&a_{n2}(t)&\cdots&a_{nn}(t)
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
               \end{bmatrix}
            \]
            <p>O de forma abreviada</p>
            $$ \mathbf{x'}=\mathbf{A} (t)\mathbf{x} +\mathbf{F}(t)$$
            <p>la cual  es la forma matricial del sistema.  Esta notación es equivalente a la forma  normal, ya que si realizamos las siguientes  operaciones con las matrices</p>
            \[
            \begin{bmatrix}
            x'_{1}\\
            x'_{2}\\
            \vdots \\
            x'_{n}
            \end{bmatrix}
            =
            \begin{bmatrix}
            a_{11}(t)x_1+a_{12}(t)x_2+\cdots+a_{1n}(t)x_n\\
            a_{21}(t)x_1+a_{22}(t)x_2+\cdots+a_{2n}(t)x_n\\
            \hspace{2em} \vdots \\
            a_{n1}(t)x_1+a_{n2}(t)x_2+\cdots+a_{nn}(t)x_n
            \end{bmatrix}
            +
            \begin{bmatrix}
            f_{1}(t)\\
            f_{2}(t)\\
            \vdots \\
            f_{n}(t)
            \end{bmatrix}
            \]


            \[
            \begin{bmatrix}
            x'_{1}\\
            x'_{2}\\
            \vdots \\
            x'_{n}
            \end{bmatrix}
            =
            \begin{bmatrix}
            a_{11}(t)x_1+a_{12}(t)x_2+\cdots+a_{1n}(t)x_n+f_1(t)\\
            a_{21}(t)x_1+a_{22}(t)x_2+\cdots+a_{2n}(t)x_n+f_2(t)\\
            \hspace{-1em} \vdots \\
            a_{n1}(t)x_1+a_{n2}(t)x_2+\cdots+a_{nn}(t)x_n+f_n(t)
            \end{bmatrix}
            \]
            <p>se observa que son equivalentes  entrada con entrada. </p>
            <button id="btn-ej1">EJEMPLO</button>
            <div id="ej1" class="ej">
               <p>Con esta notación el <i>sistema de ecuaciones diferenciales lineal y de primer orden</i></p>
               \begin{align*}
               x'_1&=3x_1+tx_2+5x_3+\exp(t)\\
               x'_2&=x_1+x_2+x_3\\
               x'_3&=\sin(t)x_1+7x_2+x_3+t^3\\
               \end{align*}
               <p>se puede expresar como  $ \mathbf{x'}=\mathbf{A} (t)\mathbf{x} +\mathbf{F}(t)$ haciendo</p> 
               \[
               \mathbf{x} =
               \begin{bmatrix}
               x_{1}\\
               x_{2}\\
               x_{3}
               \end{bmatrix}
               \mathbf{x'} =
               \begin{bmatrix}
               x'_{1}\\
               x'_{2}\\
               x'_{3}
               \end{bmatrix}
               \mathbf{A}(t) =
               \begin{bmatrix}
               3&t&5\\
               1&1&1\\
               \sin(t)&7&1
               \end{bmatrix}
               \mathbf{F}(t) =
               \begin{bmatrix}
               \exp(t)\\
               0\\
               t^3
               \end{bmatrix}
               \]
               <p>el sistema queda como</p>
               \[
                   \begin{bmatrix}
               x'_{1}\\
               x'_{2}\\
               x'_{3}
                  \end{bmatrix}
               =
                  \begin{bmatrix}
               3&t&5\\
               1&1&1\\
               \sin(t)&7&1
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
                  \end{bmatrix}
               \]
               <p>Y si realizamos las operaciones  con las matrices</p>
               \[
               \begin{bmatrix}
               x'_{1}\\
               x'_{2}\\
               x'_{3}
               \end{bmatrix}
               =
               \begin{bmatrix}
               3x_1+tx_2+5x_3\\
               x_1+x_2+x_3\\
               \sin(t)x_1+7x_2+x_3
               \end{bmatrix}
               +
               \begin{bmatrix}
               \exp(t)\\
               0\\
               t^3
               \end{bmatrix}
               \]
               \[
               \begin{bmatrix}
               x'_{1}\\
               x'_{2}\\
               x'_{3}
               \end{bmatrix}
               =
               \begin{bmatrix}
               3x_1+tx_2+5x_3+\exp(t)\\
               x_1+x_2+x_3\\
               \sin(t)x_1+7x_2+x_3+t^3
               \end{bmatrix}
               \]
               <p>Que es equivalente a la forma normal del inicio.</p>
            </div>
            <h3>1.2.2. Representaciones matriciales de sistemas lineales con coeficientes constantes</h3>
            <p>En la representación matricial de un  sistema lineal homogéneo  se tiene que $\mathbf{F}(t)=0$ y resulta:</p>
            $$ \mathbf{x'}=\mathbf{A} (t)\mathbf{x}$$
            <p>Si el sistema lineal homogéneo con coeficientes constantes su representación matricial es: </p>
            $$ \mathbf{x'}=\mathbf{A} \mathbf{x}$$
            <p>donde $\mathbf{A}$  es una matriz con entradas constantes dando la si siguiente forma equivalente:</p>
            \[
               \begin{bmatrix}
            x'_{1}\\
            x'_{2}\\
            \vdots \\
            x'_{n}
               \end{bmatrix}
            =
               \begin{bmatrix}
            a_{11}&a_{12}&\cdots&a_{1n}\\
            a_{21}&a_{22}&\cdots&a_{2n}\\
            \vdots   &\vdots     &\ddots  & \vdots \\
            a_{n1}&a_{n2}&\cdots&a_{nn}
               \end{bmatrix}
               \begin{bmatrix}
            x_{1}\\
            x_{2}\\
            \vdots \\
            x_{n}
               \end{bmatrix}
            \]
            <button id="btn-ej2">EJEMPLO</button>
            <div id="ej2" class="ej">
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
                \mathbf{A} =
                  \begin{bmatrix}
               2&amp;7&amp;8\\
               3&amp;6&amp;10\\
               4&amp;5&amp;\pi
                  \end{bmatrix}$$</span><br /></p>
            </div>
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
               \begin{aligned}
               \frac{dx_1}{dt}=x_1+2x_2 \\
               \frac{dx_2}{dt} =3x_2+4x_1
               \end{aligned}
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
         let buttons = ["btn-ej1","btn-ej2"];
         let examples = ["ej1","ej2"];
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
</body>
</html>