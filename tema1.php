<?php 
   include("head.php");
 ?>
<body>
<center>
    <?php 
      include("header.php");
    ?>
    <div id="site">
        <?php  
               include("column.php");
         ?>
         <div id="content">
            <h1>Teoría básica</h1>
            <h2>Definiciones preliminares</h2>
            <h3>Sistema de primer orden:</h3>
            <p>Dado un sistema de <span><em>n</em></span> ecuaciones de primer orden tal como <br/><span>
            $$\begin{aligned}
            \frac{dx_1}{dt}&amp;= g_1(t, x_1, x_2, \cdots, x_n)\\
            \frac{dx_2}{dt}&amp;= g_2(t, x_1, x_2, \cdots, x_n)\\
            &amp;\hspace{4em} \vdots \\
            \frac{dx_n}{dt}&amp;= g_n(t, x_1, x_2, \cdots, x_n)\end{aligned}$$</span><br /> se denomina sistema de primer orden.</p>
            <button id="btn-ej1">EJEMPLO</button>
            <div id="ej1" class="ej">
               <p>Este es un sistema de <span>3</span> ecuaciones de <strong>primer orden</strong> <br /><span>
               $$\begin{aligned}
               \frac{dx_1}{dt}= g_1(t, x_1, x_2, x_3)&amp;=t x_1 x_2 x_3\\
               \frac{dx_2}{dt}= g_2(t, x_1, x_2, x_3)&amp;=t+ x_1+ x_2+ x_3\\
               \frac{dx_3}{dt}= g_3(t, x_1, x_2, x_3)&amp;=\sin(t)+ x_2- 5x_3^2\end{aligned}$$</span><br /> se denomina sistema de primer orden ya las derivadas que aparecen son a lo mas de primer orden.</p>
            </div>
            <h3>Sistemas lineales de primer orden:</h3>
            <p>Cuando cada una de las funciones <span><em>g</em><sub>1</sub>, <em>g</em><sub>2</sub>, …, <em>g</em><sub><em>n</em></sub></span> de la expresión es lineal sobre variables independientes <span><em>x</em><sub>1</sub>, <em>x</em><sub>2</sub>, …, <em>x</em><sub><em>n</em></sub></span>, obtenemos la forma normal de un sistema de primer orden de las ecuaciones lineales: <br /><span>
            $$\begin{aligned}
            \frac{dx_1}{dt}&amp;=a_{11}(t)x_1+a_{12}(t)x_2+\cdots+a_{1n}(t)x_n+f_1(t)\\
            \frac{dx_2}{dt}&amp;=a_{21}(t)x_1+a_{22}(t)x_2+\cdots+a_{2n}(t)x_n+f_2(t)\\
            &amp;\hspace{8em} \vdots \\
            \frac{dx_n}{dt}&amp;=a_{n1}(t)x_1+a_{n2}(t)x_2+\cdots+a_{nn}(t)x_n+f_n(t)\end{aligned}$$</span><br /> A un sistema de la forma presentada anterior se le llama simplemente sistema lineal.</p>
            <button id="btn-ej2">EJEMPLO</button>
            <div id="ej2" class="ej">
               <p>A continuación cada una de las funciones <span><em>g</em><sub>1</sub>, <em>g</em><sub>2</sub>, …, <em>g</em><sub><em>n</em></sub></span> es lineal sobre <span><em>x</em><sub>1</sub>, <em>x</em><sub>2</sub>, …, <em>x</em><sub><em>n</em></sub></span> es decir, el máximo grado solo de las <span><em>x</em><sub><em>i</em></sub></span> es uno. No hay expresiones del tipo <span><em>x</em><sub>2</sub><sup>5</sup></span> o <span>sin(<em>x</em><sub>1</sub> + <em>x</em><sub>2</sub>)</span>, las funciones <span><em>f</em><sub><em>i</em></sub>(<em>t</em>)</span> y <span><em>a</em><sub><em>i</em><em>j</em></sub>(<em>t</em>)</span> pueden son no ser lineales. <br /><span>
               $$\begin{aligned}
               \frac{dx_1}{dt}&amp;=3x_1+tx_2+5x_3+\exp(t)\\
               \frac{dx_2}{dt}&amp;=x_1+x_2+x_3\\
               \frac{dx_3}{dt}&amp;=\sin(t)x_1+7x_2+x_3+t^3\\\end{aligned}$$</span><br /> A un sistema de la forma presentada anterior se le llama simplemente sistema lineal.</p>
               <p>NOTA:Asumimos que tanto los coeficientes <span><em>a</em><sub><em>i</em><em>j</em></sub>(<em>t</em>)</span> como las funciones <span><em>f</em><sub><em>i</em></sub>(<em>t</em>)</span> son continuas en un intervalo común <span><em>I</em></span>.</p>
            </div>
            <h3>Sistemas lineales de primer orden homogéneo</h3>
            <p>Cuando las funciones <span><em>f</em><sub><em>i</em></sub>(<em>t</em>)</span> con <span><em>i</em> = 1, 2, …, <em>n</em></span>, se dice que el sistema lineal es homogéneo; de lo contrario será no homogéneo. Es decir un sistema en la siguiente forma es homogéneo. <br /><span>
            $$\begin{aligned}
            \frac{dx_1}{dt}&amp;=a_{11}(t)x_1+a_{12}(t)x_2+\cdots+a_{1n}(t)x_n\\
            \frac{dx_2}{dt}&amp;=a_{21}(t)x_1+a_{22}(t)x_2+\cdots+a_{2n}(t)x_n\\
            &amp;\hspace{8em} \vdots \\
            \frac{dx_n}{dt}&amp;=a_{n1}(t)x_1+a_{n2}(t)x_2+\cdots+a_{nn}(t)x_n\end{aligned}$$</span><br /></p>
            <button id="btn-ej3">EJEMPLO</button>
            <div id="ej3" class="ej">
               <p>Aquí las funciones <span><em>f</em><sub><em>i</em></sub>(<em>t</em>)</span> (las que no tienen <span><em>x</em><sub><em>i</em></sub></span>) con <span><em>i</em> = 1, 2, …, <em>n</em></span> son todas cero o no aparecen y el sistema es lineal, por lo tanto se dice que es sistema lineal es homogéneo <br /><span>
                  $$\begin{aligned}
               \frac{dx_1}{dt}&amp;=3x_1+tx_2+5x_3\\
               \frac{dx_2}{dt}&amp;=x_1+x_2+x_3\\
               \frac{dx_3}{dt}&amp;=\sin(t)x_1+7x_2+x_3\\\end{aligned}$$</span><br /></p>
            </div>
            <h3>Sistemas lineales de primer orden con coeficientes constantes</h3>
            <p>Particularmente, si en un sistema homogéneo todas las funciones <span><em>a</em><sub><em>i</em><em>j</em></sub>(<em>t</em>)</span> son constantes <span><em>a</em><sub><em>i</em><em>j</em></sub></span> reales, se llama <em>Sistemas lineal homogéneo de primer orden con coeficientes constantes</em>. En este curso trataremos solo este tipo de sistemas de ecuaciones diferenciales, es decir aquellos dados por: <br /><span>
            $$\begin{aligned}
            \frac{dx_1}{dt}&amp;=a_{11}x_1+a_{12}x_2+\cdots+a_{1n}x_n\\
            \frac{dx_2}{dt}&amp;=a_{21}x_1+a_{22}x_2+\cdots+a_{2n}x_n\\
            &amp;\hspace{8em} \vdots \\
            \frac{dx_n}{dt}&amp;=a_{n1}(t)x_1+a_{n2}x_2+\cdots+a_{nn}x_n\end{aligned}$$</span><br /></p>
            <button id="btn-ej4">EJEMPLO</button>
            <div id="ej4" class="ej">
               <p>Todas las funciones <span><em>a</em><sub><em>i</em><em>j</em></sub>(<em>t</em>)</span> son constantes <span><em>a</em><sub><em>i</em><em>j</em></sub></span> reales, se llama <em>Sistemas lineal homogéneo de primer orden con coeficientes constantes</em>. <br /><span>$$\begin{aligned}
               x'_1&amp;=2x_1+7x_2+8x_3\\
               x'_2&amp;=3x_1+6x_2+10x_3\\
               x'_3&amp;=4x_1+5x_2+\pi x_3\end{aligned}$$</span><br /> o uno de dos incógnitas... <br /><span class="math display">$$\begin{aligned}
               x'_1&amp;=4x_1+x_2\\
               x'_2&amp;=7x_1+3x_2\end{aligned}$$</span><br /></p>
            </div>
            <h2>Forma matricial</h2>
            <h3>Representaciones matriciales de sistemas lineales con coeficientes constantes</h3>
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
            <button id="btn-ej5">EJEMPLO 1</button>
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
            <button id="btn-ej6">EJEMPLO 2</button>
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
            <h3>Representaciones matriciales de sistemas lineales con coeficientes constantes</h3>
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
            <button id="btn-ej7">EJEMPLO</button>
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
            <button id="btn-ej8">EJEMPLO</button>
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
            <!-- Checked -->
            <h2>Teoremas básicos</h2>
            <h3 id="problema-de-valor-inicial">Problema de valor inicial</h3>
            <p>Problema de valor inicial Si <span class="math inline"><em>t</em><sub>0</sub></span> denota un punto en un intervalo <span class="math inline"><em>I</em></span> y</p>
            <p><span class="math inline">$
            {\mathbf{x}}(t_0) =
            \begin{bmatrix}
            x_{1}(t_0)\\
            x_{2}(t_0)\\
            \vdots \\
            x_{n}(t_0)
            \end{bmatrix}
            $</span> y <span class="math inline">$
            {\mathbf{x}}_0=
            \begin{bmatrix}
            \gamma_{1}\\
            \gamma_{2}\\
            \vdots \\
            \gamma_{n}
            \end{bmatrix}
            $</span></p>
            <p>donde <span class="math inline"><em>γ</em><em>i</em>, <em>i</em> = 1, 2, …, <em>n</em></span> son las constantes dadas. Entonces el problema</p>
            <p>Resolver: <span class="math inline"><strong>x</strong><strong>′</strong> = <strong>A</strong>(<em>t</em>)<strong>x</strong> + <strong>F</strong>(<em>t</em>)</span></p>
            <p>Sujeto a: <span class="math inline"><strong>x</strong>(<em>t</em><sub>0</sub>)=<strong>x</strong><sub>0</sub></span></p>
            <p>es un problema de valor inicial en el intervalo.</p>
            <p>EJEMPLO</p>
            <p>La solución de problema <br /><span class="math display">$$\begin{bmatrix}
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
            <p>Sujeto a la condición <span class="math inline"><strong>x</strong>(<em>t</em><sub>0</sub>)=<strong>x</strong><sub>0</sub></span> donde en <span class="math inline"><em>t</em><sub>0</sub> = 3</span> y <span class="math inline">${\mathbf{x}}_0=
            \begin{bmatrix}
            4\\
            -1\\
            \end{bmatrix}$</span>, es decir:</p>
            <p><br /><span class="math display">$$\begin{aligned}
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
            <h3 id="existencia-de-una-solución-única">Existencia de una solución única</h3>
            <p>TEOREMA 1</p>
            <p>Existencia de una solución única</p>
            <p>Sean las entradas de las matrices <span class="math inline"><strong>A</strong>(<em>t</em>)</span> y <span class="math inline"><strong>F</strong>(<em>t</em>)</span> funciones continuas en un intervalo común <span class="math inline"><em>I</em></span> que contienen el punto <span class="math inline"><em>t</em><sub>0</sub></span>. Por lo tanto, existe una solución única para el problema de valor inicial en el intervalo.</p>
            <p>Principio de superposición El siguiente resultado es un principio de superposi- ción para soluciones de sistemas lineales.</p>
            <h3 id="principio-de-superposición">Principio de superposición</h3>
            <p>TEOREMA 2</p>
            <p>Principio de superposición</p>
            <p>Sea <span class="math inline"><strong>x</strong><sub>1</sub>, <strong>x</strong><sub>2</sub>, …, <strong>x</strong><sub><em>k</em></sub></span> un conjunto de vectores solución del sistema homogéneo en un intervalo <span class="math inline"><em>I</em></span>. Entonces, la combinación lineal <br /><span class="math display"><em>c</em><sub>1</sub><strong>x</strong><sub>1</sub> + <em>c</em><sub>2</sub><strong>x</strong><sub>2</sub> + … + <em>c</em><sub>2</sub><strong>x</strong><sub><em>k</em></sub></span><br /> donde <span class="math inline"><em>c</em><sub><em>i</em></sub>, <em>i</em> = 1, 2, …, <em>n</em></span> son constantes arbitrarias, es también una solución en el intervalo.</p>
            <p>Dependencia lineal e independencia lineal. Estamos interesados principalmente en las soluciones del sistema homogéneo que sean linealmente independientes</p>
            <h3 id="dependencia-lineal-e-independencia-lineal">Dependencia lineal e independencia lineal</h3>
            <p>DEFINICIÓN 2</p>
            <p>Dependencia lineal e independencia lineal</p>
            <p>Sea <span class="math inline"><strong>x</strong><sub>1</sub>, <strong>x</strong><sub>2</sub>, …, <strong>x</strong><sub><em>k</em></sub></span> un sistema de vectores solución del sistema homogéneo en un intervalo <span class="math inline"><em>I</em></span>. Decimos que este conjunto es linealmente dependiente en el intervalo si existen constantes <span class="math inline"><em>c</em><sub>1</sub>, <em>c</em><sub>2</sub>, …, <em>c</em><sub><em>k</em></sub></span> que no son todas cero, de tal forma que <br /><span class="math display"><em>c</em><sub>1</sub><strong>x</strong><sub>1</sub> + <em>c</em><sub>2</sub><strong>x</strong><sub>2</sub> + … + <em>c</em><sub>2</sub><strong>x</strong><sub><em>k</em></sub> = 0</span><br /> para toda <span class="math inline"><em>t</em></span> en el intervalo. Si el conjunto de vectores no es linealmente dependiente en el intervalo, se dice que es linealmente independiente.</p>
            <p>El caso <span class="math inline"><em>k</em> = 2</span> tiene que aclararse; dos vectores solución <span class="math inline"><strong>x</strong><sub>1</sub></span> y <span class="math inline"><strong>x</strong><sub>2</sub></span> son linealmente dependientes si uno es un múltiplo constante del otro, y viceversa. Para <span class="math inline"><em>k</em> &gt; 2</span>, un conjunto de vectores solución es linealmente dependiente si podemos expresar al menos un vector solución como una combinación lineal de los vectores restantes.</p>
            <h3 id="criterio-para-soluciones-linealmente-independientes-wronskiano">Criterio para soluciones linealmente independientes (Wronskiano)</h3>
            <p>En una consideración previa relacionada con la teoría de una sola ecuación diferencial ordinaria, pudimos introducir el concepto del determinante wronskiano como una prueba de la independencia lineal. Establecemos el teorema siguiente sin probarlo.</p>
            <p>TEOREMA 3</p>
            <p>Criterio para soluciones linealmente independientes</p>
            <p>Sean <span class="math inline">$
            {\mathbf{x}}_1 =
            \begin{bmatrix}
            x_{11}\\
            x_{21}\\
            \vdots \\
            x_{n1}
            \end{bmatrix} 
            $</span>, <span class="math inline">$
            {\mathbf{x}}_2 =
            \begin{bmatrix}
            x_{12}\\
            x_{22}\\
            \vdots \\
            x_{n2}
            \end{bmatrix} 
            $</span>, <span class="math inline">…</span>, <span class="math inline">$
            {\mathbf{x}}_n =
            \begin{bmatrix}
            x_{1n}\\
            x_{2n}\\
            \vdots \\
            x_{nn}
            \end{bmatrix} 
            $</span></p>
            <p><span class="math inline"><em>n</em></span> vectores solución del sistema homogéneo en un intervalo <span class="math inline"><em>I</em></span>. Entonces el sistema de vectores solución es linealmente independiente en <span class="math inline"><em>I</em></span> si, y sólo si, el <strong>wronskiano</strong></p>
            <p><br /><span class="math display">$$W({\mathbf{x}}_1, {\mathbf{x}}_2, . . . , {\mathbf{x}}_n)=\begin{vmatrix}
            x_{11}&amp;x_{12}&amp;\cdots&amp;x_{1n}\\
            x_{21}&amp;x_{22}&amp;\cdots&amp;x_{2n}\\
            \vdots  &amp;\vdots     &amp;\ddots &amp; \vdots \\
            x_{n1}&amp;x_{n2}&amp;\cdots&amp;x_{nn}
            \end{vmatrix}\neq 0$$</span><br /></p>
            <p>para toda <span class="math inline"><em>t</em></span> incluida en el intervalo.</p>
            <p>Es posible demostrar que si <span class="math inline"><strong>x</strong><sub>1</sub>, <strong>x</strong><sub>2</sub>, …, <strong>x</strong><sub><em>k</em></sub></span> son vectores solución de un sistema lineal, entonces para toda <span class="math inline"><em>t</em></span> en <span class="math inline"><em>I</em></span>, bien <span class="math inline"><em>W</em>(<strong>x</strong><sub>1</sub>, <strong>x</strong><sub>2</sub>, ..., <strong>x</strong><sub><em>n</em></sub>)≠0</span> o <span class="math inline"><em>W</em>(<strong>x</strong><sub>1</sub>, <strong>x</strong><sub>2</sub>, ..., <strong>x</strong><sub><em>n</em></sub>)=0</span>. Por lo tanto, si podemos demostrar que <span class="math inline"><em>W</em> ≠ 0</span> para alguna <span class="math inline"><em>t</em><sub>0</sub></span> en <span class="math inline"><em>I</em></span>, entonces <span class="math inline"><em>W</em> ≠ 0</span> para toda <span class="math inline"><em>t</em></span>, de manera que el conjunto de soluciones es linealmente independiente en el intervalo.</p>
            <h3 id="conjunto-fundamental-de-soluciones-y-solución-general">Conjunto fundamental de soluciones y solución general</h3>
            <p>DEFINICIÓN 3</p>
            <p>Conjunto fundamental de soluciones</p>
            <p>Todo conjunto <span class="math inline"><strong>x</strong><sub>1</sub>, <strong>x</strong><sub>2</sub>, …, <strong>x</strong><sub><em>n</em></sub></span> de <span class="math inline"><em>n</em></span> vectores solución linealmente independientes del sistema homogéneo en un intervalo <span class="math inline"><em>I</em></span> se denomina conjunto fundamental de soluciones en el intervalo.</p>
            <p>TEOREMA 4</p>
            <p>Existencia de un conjunto fundamental.</p>
            <p>Existe un conjunto fundamental de soluciones para el sistema homogéneo en un intervalo <span class="math inline"><em>I</em></span>.</p>
            <p>TEOREMA 5</p>
            <p>Solución general: sistemas homogéneos</p>
            <p>Sea <span class="math inline"><strong>x</strong><sub>1</sub>, <strong>x</strong><sub>2</sub>, …, <strong>x</strong><sub><em>n</em></sub></span> un conjunto fundamental de soluciones del sistema homogéneo en un intervalo <span class="math inline"><em>I</em></span>. Por lo tanto, la solución general del sistema en el intervalo es <br /><span class="math display"><strong>x</strong>(<em>t</em>)=<em>c</em><sub>1</sub><strong>x</strong><sub>1</sub> + <em>c</em><sub>2</sub><strong>x</strong><sub>2</sub> + … + <em>c</em><sub>2</sub><strong>x</strong><sub><em>k</em></sub></span><br /> donde <span class="math inline"><em>c</em><sub><em>i</em></sub>, <em>i</em> = 1, 2, …, <em>n</em></span> son constantes arbitrarias.</p>
            <p>Sistemas no homogéneos Para los sistemas no homogéneos, una solución particular <span class="math inline"><strong>x</strong><sub><em>p</em></sub></span> en un intervalo <span class="math inline"><em>I</em></span> es cualquier vector, libre de parámetros arbitrarios, cuyos elementos son funciones que satisfacen el sistema.</p>
            <p>TEOREMA 8.6 Solución general: sistemas no homogéneos</p>
            <p>Sean <span class="math inline"><strong>x</strong><sub><em>p</em></sub></span> una solución dada del sistema no homogéneo en un intervalo <span class="math inline"><em>I</em></span>, y <br /><span class="math display"><strong>x</strong><sub><em>c</em></sub> = <em>c</em><sub>1</sub><strong>x</strong><sub>1</sub> + <em>c</em><sub>2</sub><strong>x</strong><sub>2</sub> + … + <em>c</em><sub>2</sub><strong>x</strong><sub><em>k</em></sub></span><br /> denote la solución general en el mismo intervalo del sistema homogéneo asociado (5). Luego, la solución general del sistema no homogéneo en el intervalo es <br /><span class="math display"><strong>x</strong>(<em>t</em>)=<strong>x</strong><sub><em>c</em></sub> + <strong>x</strong><sub><em>p</em></sub></span><br /> La solución general <span class="math inline"><strong>x</strong><sub><em>c</em></sub></span> del sistema homogéneo se denomina función complementaria del sistema no homogéneo.</p>
          </div>
       </div>
   </center>
 <!-- Examples display-->
   <script>
      (function(){
         let buttons = ["btn-ej1","btn-ej2","btn-ej3","btn-ej4","btn-ej5","btn-ej6","btn-ej7","btn-ej8"];
         let examples = ["ej1","ej2","ej3","ej4","ej5","ej6","ej7","ej8"];
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
         document.getElementById(buttons[4]).addEventListener("click", function(){
            checkStatus(4,flags[4], examples[4]);
         });
         document.getElementById(buttons[5]).addEventListener("click", function(){
            checkStatus(5,flags[5], examples[5]);
         });
         document.getElementById(buttons[6]).addEventListener("click", function(){
            checkStatus(6,flags[6], examples[6]);
         });
         document.getElementById(buttons[7]).addEventListener("click", function(){
            checkStatus(7,flags[7], examples[7]);
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