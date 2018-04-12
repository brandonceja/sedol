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
            <h1 id="teoría-básica">Teoría básica</h1>
            <h2 id="definiciones-preliminares">Definiciones preliminares</h2>
            <h3 id="sistema-de-primer-orden">Sistema de primer orden:</h3>
            <p>Dado un sistema de <span class="math inline"><em>n</em></span> ecuaciones de primer orden tal como <br /><span class="math display">$$\begin{aligned}
            \frac{dx_1}{dt}&amp;= g_1(t, x_1, x_2, \cdots, x_n)\\
            \frac{dx_2}{dt}&amp;= g_2(t, x_1, x_2, \cdots, x_n)\\
            &amp;\hspace{4em} \vdots \\
            \frac{dx_n}{dt}&amp;= g_n(t, x_1, x_2, \cdots, x_n)\end{aligned}$$</span><br /> se denomina sistema de primer orden.</p>
            <p>EJEMPLO</p>
            <p>Este es un sistema de <span class="math inline">3</span> ecuaciones de <strong>primer orden</strong> <br /><span class="math display">$$\begin{aligned}
            \frac{dx_1}{dt}= g_1(t, x_1, x_2, x_3)&amp;=t x_1 x_2 x_3\\
            \frac{dx_2}{dt}= g_2(t, x_1, x_2, x_3)&amp;=t+ x_1+ x_2+ x_3\\
            \frac{dx_3}{dt}= g_3(t, x_1, x_2, x_3)&amp;=\sin(t)+ x_2- 5x_3^2\end{aligned}$$</span><br /> se denomina sistema de primer orden ya las derivadas que aparecen son a lo mas de primer orden.</p>
            <h3 id="sistemas-lineales-de-primer-orden">Sistemas lineales de primer orden:</h3>
            <p>Cuando cada una de las funciones <span class="math inline"><em>g</em><sub>1</sub>, <em>g</em><sub>2</sub>, …, <em>g</em><sub><em>n</em></sub></span> de la expresión es lineal sobre variables independientes <span class="math inline"><em>x</em><sub>1</sub>, <em>x</em><sub>2</sub>, …, <em>x</em><sub><em>n</em></sub></span>, obtenemos la forma normal de un sistema de primer orden de las ecuaciones lineales: <br /><span class="math display">$$\begin{aligned}
            \frac{dx_1}{dt}&amp;=a_{11}(t)x_1+a_{12}(t)x_2+\cdots+a_{1n}(t)x_n+f_1(t)\\
            \frac{dx_2}{dt}&amp;=a_{21}(t)x_1+a_{22}(t)x_2+\cdots+a_{2n}(t)x_n+f_2(t)\\
            &amp;\hspace{8em} \vdots \\
            \frac{dx_n}{dt}&amp;=a_{n1}(t)x_1+a_{n2}(t)x_2+\cdots+a_{nn}(t)x_n+f_n(t)\end{aligned}$$</span><br /> A un sistema de la forma presentada anterior se le llama simplemente sistema lineal.</p>
            <p>EJEMPLO</p>
            <p>A continuación cada una de las funciones <span class="math inline"><em>g</em><sub>1</sub>, <em>g</em><sub>2</sub>, …, <em>g</em><sub><em>n</em></sub></span> es lineal sobre <span class="math inline"><em>x</em><sub>1</sub>, <em>x</em><sub>2</sub>, …, <em>x</em><sub><em>n</em></sub></span> es decir, el máximo grado solo de las <span class="math inline"><em>x</em><sub><em>i</em></sub></span> es uno. No hay expresiones del tipo <span class="math inline"><em>x</em><sub>2</sub><sup>5</sup></span> o <span class="math inline">sin(<em>x</em><sub>1</sub> + <em>x</em><sub>2</sub>)</span>, las funciones <span class="math inline"><em>f</em><sub><em>i</em></sub>(<em>t</em>)</span> y <span class="math inline"><em>a</em><sub><em>i</em><em>j</em></sub>(<em>t</em>)</span> pueden son no ser lineales. <br /><span class="math display">$$\begin{aligned}
            \frac{dx_1}{dt}&amp;=3x_1+tx_2+5x_3+\exp(t)\\
            \frac{dx_2}{dt}&amp;=x_1+x_2+x_3\\
            \frac{dx_3}{dt}&amp;=\sin(t)x_1+7x_2+x_3+t^3\\\end{aligned}$$</span><br /> A un sistema de la forma presentada anterior se le llama simplemente sistema lineal.</p>
            <p>NOTA:Asumimos que tanto los coeficientes <span class="math inline"><em>a</em><sub><em>i</em><em>j</em></sub>(<em>t</em>)</span> como las funciones <span class="math inline"><em>f</em><sub><em>i</em></sub>(<em>t</em>)</span> son continuas en un intervalo común <span class="math inline"><em>I</em></span>.</p>
            <h3 id="sistemas-lineales-de-primer-orden-homogéneo">Sistemas lineales de primer orden homogéneo</h3>
            <p>Cuando las funciones <span class="math inline"><em>f</em><sub><em>i</em></sub>(<em>t</em>)</span> con <span class="math inline"><em>i</em> = 1, 2, …, <em>n</em></span>, se dice que el sistema lineal es homogéneo; de lo contrario será no homogéneo. Es decir un sistema en la siguiente forma es homogéneo. <br /><span class="math display">$$\begin{aligned}
            \frac{dx_1}{dt}&amp;=a_{11}(t)x_1+a_{12}(t)x_2+\cdots+a_{1n}(t)x_n\\
            \frac{dx_2}{dt}&amp;=a_{21}(t)x_1+a_{22}(t)x_2+\cdots+a_{2n}(t)x_n\\
            &amp;\hspace{8em} \vdots \\
            \frac{dx_n}{dt}&amp;=a_{n1}(t)x_1+a_{n2}(t)x_2+\cdots+a_{nn}(t)x_n\end{aligned}$$</span><br /></p>
            <p>EJEMPLO</p>
            <p>Aquí las funciones <span class="math inline"><em>f</em><sub><em>i</em></sub>(<em>t</em>)</span> (las que no tienen <span class="math inline"><em>x</em><sub><em>i</em></sub></span>) con <span class="math inline"><em>i</em> = 1, 2, …, <em>n</em></span> son todas cero o no aparecen y el sistema es lineal, por lo tanto se dice que es sistema lineal es homogéneo <br /><span class="math display">$$\begin{aligned}
            \frac{dx_1}{dt}&amp;=3x_1+tx_2+5x_3\\
            \frac{dx_2}{dt}&amp;=x_1+x_2+x_3\\
            \frac{dx_3}{dt}&amp;=\sin(t)x_1+7x_2+x_3\\\end{aligned}$$</span><br /></p>
            <h3 id="sistemas-lineales-de-primer-orden-con-coeficientes-constantes">Sistemas lineales de primer orden con coeficientes constantes</h3>
            <p>Particularmente, si en un sistema homogéneo todas las funciones <span class="math inline"><em>a</em><sub><em>i</em><em>j</em></sub>(<em>t</em>)</span> son constantes <span class="math inline"><em>a</em><sub><em>i</em><em>j</em></sub></span> reales, se llama <em>Sistemas lineal homogéneo de primer orden con coeficientes constantes</em>. En este curso trataremos solo este tipo de sistemas de ecuaciones diferenciales, es decir aquellos dados por: <br /><span class="math display">$$\begin{aligned}
            \frac{dx_1}{dt}&amp;=a_{11}x_1+a_{12}x_2+\cdots+a_{1n}x_n\\
            \frac{dx_2}{dt}&amp;=a_{21}x_1+a_{22}x_2+\cdots+a_{2n}x_n\\
            &amp;\hspace{8em} \vdots \\
            \frac{dx_n}{dt}&amp;=a_{n1}(t)x_1+a_{n2}x_2+\cdots+a_{nn}x_n\end{aligned}$$</span><br /></p>
            <p>EJEMPLO</p>
            <p>Todas las funciones <span class="math inline"><em>a</em><sub><em>i</em><em>j</em></sub>(<em>t</em>)</span> son constantes <span class="math inline"><em>a</em><sub><em>i</em><em>j</em></sub></span> reales, se llama <em>Sistemas lineal homogéneo de primer orden con coeficientes constantes</em>. <br /><span class="math display">$$\begin{aligned}
            x'_1&amp;=2x_1+7x_2+8x_3\\
            x'_2&amp;=3x_1+6x_2+10x_3\\
            x'_3&amp;=4x_1+5x_2+\pi x_3\end{aligned}$$</span><br /> o uno de dos incógnitas... <br /><span class="math display">$$\begin{aligned}
            x'_1&amp;=4x_1+x_2\\
            x'_2&amp;=7x_1+3x_2\end{aligned}$$</span><br /></p>
            <h2 id="forma-matricial">Forma matricial</h2>
            <h3 id="representaciones-matriciales-de-sistemas-lineales-con-coeficientes-constantes">Representaciones matriciales de sistemas lineales con coeficientes constantes</h3>
            <p>Los símbolos <span class="math inline"><strong>x</strong></span>, <span class="math inline"><strong>x</strong><strong>′</strong></span>, <span class="math inline"><strong>A</strong>(<em>t</em>)</span> y <span class="math inline"><strong>F</strong>(<em>t</em>)</span> denotan las matrices respectivas</p>
            <p><br /><span class="math display">$${\mathbf{x}}=
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
            <p>EJEMPLO</p>
            <p>Aquí los símbolos <span class="math inline"><strong>x</strong></span>, <span class="math inline"><strong>x</strong><strong>′</strong></span>, <span class="math inline"><strong>A</strong>(<em>t</em>)</span> y <span class="math inline"><strong>F</strong>(<em>t</em>)</span> denotan lo siguiente:</p>
            <p><br /><span class="math display">$${\mathbf{x}}=
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
            <p>con lo que se podrá denotar el sistema. <br /><span class="math display">$$\begin{aligned}
            x'_1&amp;=3x_1+tx_2+5x_3+\exp(t)\\
            x'_2&amp;=x_1+x_2+x_3\\
            x'_3&amp;=\sin(t)x_1+7x_2+x_3+t^3\\\end{aligned}$$</span><br /></p>
            <p>Con esta notación, un <strong>sistema de ecuaciones diferenciales lineal y de primer orden</strong> se puede expresar como <br /><span class="math display">$$\begin{bmatrix}
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
               \end{bmatrix}$$</span><br /> O de forma abreviada <br /><span class="math display"><strong>x</strong><strong>′</strong> = <strong>A</strong>(<em>t</em>)<strong>x</strong> + <strong>F</strong>(<em>t</em>)</span><br /> y respectivamente los otros tipos de sistemas.</p>
            <p>EJEMPLO</p>
            <p>Con esta notación el <strong>sistema de ecuaciones diferenciales lineal y de primer orden</strong> <br /><span class="math display">$$\begin{aligned}
            x'_1&amp;=3x_1+tx_2+5x_3+\exp(t)\\
            x'_2&amp;=x_1+x_2+x_3\\
            x'_3&amp;=\sin(t)x_1+7x_2+x_3+t^3\\\end{aligned}$$</span><br /> se puede expresar como <br /><span class="math display">$$\begin{bmatrix}
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
            <h3 id="representaciones-matriciales-de-sistemas-lineales-con-coeficientes-constantes-1">Representaciones matriciales de sistemas lineales con coeficientes constantes</h3>
            <p>Sistema lineal homogéneo: <br /><span class="math display"><strong>x</strong><strong>′</strong> = <strong>A</strong>(<em>t</em>)<strong>x</strong></span><br /> Sistema lineal homogéneo con coeficientes constantes: <br /><span class="math display"><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span><br /> que es equivalente a lo siguiente <br /><span class="math display">$$\begin{bmatrix}
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
            <p>EJEMPLO</p>
            <p>Sistema lineal homogéneo con coeficientes constantes: <br /><span class="math display"><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span><br /> <br /><span class="math display">$$\begin{bmatrix}
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
               \end{bmatrix}$$</span><br /> Donde <br /><span class="math display">$${\mathbf{x}}=
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
            <p>DEFINICIÓN: Vector solución</p>
            <p>En un intervalo <span class="math inline"><em>I</em></span>, un vector solución es cualquier matriz columna <br /><span class="math display">$${\mathbf{x}}(t) =
               \begin{bmatrix}
            x_{1}(t)\\
            x_{2}(t)\\
            \vdots \\
            x_{n}(t)
               \end{bmatrix}$$</span><br /> cuyos elementos son funciones diferenciables que satisfacen, un sistema de ecuaciones diferenciales en el intervalo.</p>
            <p>EJEMPLO</p>
            <p>Dado el sistema <span class="math inline"><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span> en su forma matricial <span class="math inline">$
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
            $</span> veamos que <span class="math inline">${\mathbf{x}}_1=\begin{bmatrix}
            3e^{2t}\\
            2e^{2t}
               \end{bmatrix}$</span> es solución. Basta notar que: <br /><span class="math display">$${\mathbf{x'}}_1=\begin{bmatrix}
            \frac{d(3e^{2t})}{dt}\\
            \frac{d(2e^{2t})}{dt}
               \end{bmatrix}=\begin{bmatrix}
            6e^{2t}\\
            4e^{2t}
               \end{bmatrix}$$</span><br /> Y que <br /><span class="math display">$${\mathbf{A}}{\mathbf{x}}_1=\begin{bmatrix}
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
               \end{bmatrix}$$</span><br /> Así, <span class="math inline"><strong>x</strong><strong>′</strong><sub>1</sub> = <strong>A</strong><strong>x</strong><sub>1</sub></span> por lo tanto, <span class="math inline"><strong>x</strong><sub>1</sub></span> es una solución de <span class="math inline"><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span>.</p>
            <p>PONER EJEMPLO DE SOLUCIÓN DE UN SEDOL</p>
            <p><strong>Ejercicio 1</strong></p>
            <p>Dado el siguiente sistema de ecuaciones diferenciales, seleccione las opciones correctas.</p>
            <p><span>ll</span> <span class="math inline">$\frac{dx_1}{dt}=e^{t}x_1+tx_2+5x_3$</span> &amp;</p>
            <p>Es de primer orden.<br />
            <span class="math inline">$\frac{dx_2}{dt}= x_1+tx_2+x_3      $</span> &amp;</p>
            <p>Es de lineal y de primer orden.<br />
            <span class="math inline">$\frac{dx_3}{dt}=x_1+7x_2+\sin(t)x_3$</span> &amp;</p>
            <p>Es homogéneo.<br />
            &amp;</p>
            <p>Es de coeficientes constantes.</p>
            <p><strong>Ejercicio 2</strong></p>
            <p>Dado el siguiente sistema de ecuaciones diferenciales, seleccione las opciones correctas. <br /><span class="math display">$$\begin{bmatrix}
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
            <p><span>ll</span></p>
            <p>Es de primer orden. &amp;</p>
            <p>Es de lineal y de primer orden.<br />
            </p>
            <p>Es homogéneo. &amp;</p>
            <p>Es de coeficientes constantes.</p>
            <p><strong>Ejercicio 3</strong></p>
            <p>Dado el siguiente sistema de ecuaciones diferenciales, seleccione las opciones correctas.</p>
            <p><span>ll</span> &amp;</p>
            <p>Es de primer orden.<br />
            <span class="math inline">$\frac{dx_1}{dt}=x_1+2x_2$</span> &amp;</p>
            <p>Es de lineal y de primer orden.<br />
            <span class="math inline">$\frac{dx_2}{dt} =3x_2+4x_1$</span> &amp;</p>
            <p>Es homogéneo.<br />
            &amp;</p>
            <p>Es de coeficientes constantes.</p>
            <p>¿Cuál de las siguientes es su notación matricial? <br /><span class="math display">$$\begin{bmatrix}
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
            \hspace{1em} \begin{bmatrix}
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
            \hspace{1em} \begin{bmatrix}
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
            <h2 id="teoremas-básicos">Teoremas básicos</h2>
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
            <p>Equivalentemente la canciones son <span class="math inline"><em>x</em><sub>1</sub>(3)=4</span> y <span class="math inline"><em>x</em><sub>2</sub>(3)= − 1</span>. La solución se puede calcular mediante las siguientes lineas el SAGE</p>
            <pre><code>A = matrix([[1, 2], [3, 4]])
            t = var(&#39;t&#39;)
            x_1 = function(&#39;x_1&#39;)(t)
            x_2 = function(&#39;x_2&#39;)(t)
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
            show(solve(p==0,x))</code></pre>
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
            <h1 id="método-del-eigenvalor-para-sistemas-de-2times-2">Método del eigenvalor para sistemas de <span class="math inline">2 × 2</span></h1>
            <p>A continuación se introduce al método de valores propios para construir la solución general de un sistema lineal homogéneo de primer orden con coeficientes constantes de la forma</p>
            <p><br /><span class="math display"><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span><br /></p>
            <p>donde se sabe que la que es suficiente encontrar <span class="math inline"><em>n</em></span> vectores solución linealmente independientes <span class="math inline"><em>x</em><sub>1</sub>, <em>x</em><sub>2</sub>, …, <em>x</em><sub><em>n</em></sub></span>; la combinación lineal</p>
            <p><br /><span class="math display"><strong>x</strong>(<em>t</em>)=<em>c</em><sub>1</sub><strong>x</strong><sub>1</sub> + <em>c</em><sub>2</sub><strong>x</strong><sub>2</sub> + ⋯ + <em>c</em><sub><em>n</em></sub><strong>x</strong><sub><em>n</em></sub></span><br /></p>
            <p>con coeficientes arbitrarios será entonces una solución general del sistema.</p>
            <p>Para buscar los <span class="math inline"><em>n</em></span> vectores solución linealmente independientes por analogía al método de raíces características para resolver una sola ecuación homogénea con coeficientes constantes. Es razonable anticipar los vectores solución de la forma</p>
            <p><br /><span class="math display">$${\mathbf{x}}(t) =
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
            <p>donde <span class="math inline"><em>λ</em>, <em>v</em><sub>1</sub>, <em>v</em><sub>2</sub>, …, <em>v</em><sub><em>n</em></sub></span> son constantes escalares apropiadas. Si se sustituyen cada <br /><span class="math display"><em>x</em><sub><em>i</em></sub> = <em>v</em><sub><em>i</em></sub><em>e</em><sup><em>λ</em><em>t</em></sup></span><br /> <br /><span class="math display"><em>x</em>′<sub><em>i</em></sub> = <em>λ</em><em>v</em><sub><em>i</em></sub><em>e</em><sup><em>λ</em><em>t</em></sup></span><br /> <br /><span class="math display">(<em>i</em> = 1, 2, ..., <em>n</em>)</span><br /> en <span class="math inline"><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span> , entonces cada término en las ecuaciones resultantes tiene el factor <span class="math inline"><em>e</em><sup><em>λ</em><em>t</em></sup></span>, tal que se pueden cancelar. Esto nos permitirá contar con <span class="math inline"><em>n</em></span> ecuaciones lineales, las cuales -para valores apropiados de <span class="math inline"><em>λ</em></span>- se puede esperar resolver para ciertos valores de los coeficientes <span class="math inline"><em>v</em><sub>1</sub>, <em>v</em><sub>2</sub>, …, <em>v</em><sub><em>n</em></sub></span>, tal que <span class="math inline"><strong>x</strong>(<em>t</em>)=<strong>v</strong><em>e</em><sup><em>λ</em><em>t</em></sup></span> sea, efectivamente, una solución del sistema dado.</p>
            <p>Cuando se sustituye la solución de prueba <span class="math inline"><strong>x</strong>(<em>t</em>)=<strong>v</strong><em>e</em><sup><em>λ</em><em>t</em></sup></span> con derivada <span class="math inline"><strong>x</strong><strong>′</strong>(<em>t</em>)=<em>λ</em><strong>v</strong><em>e</em><sup><em>λ</em><em>t</em></sup></span> en <span class="math inline"><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span> , el resultado es <br /><span class="math display"><em>λ</em><strong>v</strong><em>e</em><sup><em>λ</em><em>t</em></sup> = <strong>A</strong><strong>v</strong><em>e</em><sup><em>λ</em><em>t</em></sup></span><br /></p>
            <p>Cancelamos el factor escalar diferente de cero <span class="math inline"><em>e</em><sup><em>λ</em><em>t</em></sup></span> para obtener</p>
            <p><br /><span class="math display"><strong>A</strong><strong>v</strong> = <em>λ</em><strong>v</strong></span><br /> Esto significa que <span class="math inline"><strong>x</strong>(<em>t</em>)=<strong>v</strong><em>e</em><sup><em>λ</em><em>t</em></sup></span> será una solución no trivial de la ecuación siempre que <span class="math inline"><strong>v</strong></span> sea un vector <em>diferente de cero</em> y <span class="math inline"><em>λ</em></span> sea una constante tal que la ecuación <span class="math inline"><strong>A</strong><strong>v</strong> = <em>λ</em><strong>v</strong></span> se cumpla; esto es, el producto de matrices <span class="math inline"><strong>A</strong><strong>v</strong></span> es un múltiplo escalar del vector <span class="math inline"><strong>v</strong></span>.</p>
            <p>La pregunta ahora es: ¿cómo encontrar <span class="math inline"><strong>v</strong></span> y <span class="math inline"><em>λ</em></span>?</p>
            <p>Para responder, notemos que las siguientes implicaciones</p>
            <p><br /><span class="math display">$$\begin{aligned}
            {\mathbf{A}}{\mathbf{v}}&amp; = \lambda {\mathbf{v}}\\
            {\mathbf{A}}{\mathbf{v}}- \lambda {\mathbf{v}}&amp;=0\\
            ({\mathbf{A}}- \lambda {\mathbf{I}}){\mathbf{v}}&amp;= 0\end{aligned}$$</span><br /></p>
            <p>Dado <span class="math inline"><em>λ</em></span>, éste es un sistema de <span class="math inline"><em>n</em></span> ecuaciones lineales homogéneas en las incógnitas <span class="math inline"><em>v</em><sub>1</sub>, <em>v</em><sub>2</sub>, …, <em>v</em><sub><em>n</em></sub></span>. Por un teorema estándar del álgebra lineal, tiene una solución no trivial <strong>si y sólo si</strong> el determinante de su matriz de coeficientes se anula; esto es, <strong>si y sólo si</strong> <br /><span class="math display"><em>d</em><em>e</em><em>t</em>(<strong>A</strong> − <em>λ</em><strong>I</strong>)=|<strong>A</strong> − <em>λ</em><strong>I</strong>|=0</span><br /></p>
            <p>En su formulación más simple, el método del eigenvalor o valor propio para resolver el sistema <span class="math inline"><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span> consiste en encontrar un valor de <span class="math inline"><em>λ</em></span> tal que la ecuación <span class="math inline">|<strong>A</strong> − <em>λ</em><strong>I</strong>|=0</span> se cumpla, y posteriormente resolver la ecuación <span class="math inline">(<strong>A</strong> − <em>λ</em><strong>I</strong>)<strong>v</strong> = 0</span> con este valor de <span class="math inline"><em>λ</em></span> para obtener <span class="math inline"><em>v</em><sub>1</sub>, <em>v</em><sub>2</sub>, …, <em>v</em><sub><em>n</em></sub></span>.</p>
            <p>Entonces <span class="math inline"><strong>x</strong>(<em>t</em>)=<strong>v</strong><em>e</em><sup><em>λ</em><em>t</em></sup></span> será <strong>un</strong> vector solución. El nombre del método proviene de la siguiente definición.</p>
            <h2 id="eigenvalores-y-eigenvectores">Eigenvalores y eigenvectores</h2>
            <p>DEFINICIÓN</p>
            <p>Eigenvalores y eigenvectores El número <span class="math inline"><em>λ</em></span> (cero o diferente de cero) se llama eigenvalor de la matriz <span class="math inline"><strong>A</strong></span> de tamaño <span class="math inline"><em>n</em> × <em>n</em></span> siempre que <br /><span class="math display">|<strong>A</strong> − <em>λ</em><strong>I</strong>|=0</span><br /></p>
            <p>Un eigenvector asociado con el eigenvalor l es un vector no cero v por consiguiente Av 5 lv, tal que <br /><span class="math display">(<strong>A</strong> − <em>λ</em><strong>I</strong>)<strong>v</strong> = 0.</span><br /></p>
            <p>Nótese que si <span class="math inline"><strong>v</strong></span> es un eigenvector asociado con el eigenvalor <span class="math inline"><em>λ</em></span>, de la misma manera es cualquier múltiplo escalar constante diferente de cero <span class="math inline"><em>c</em><strong>v</strong></span> de <span class="math inline"><strong>v</strong></span>; esto se concluye de la multiplicación de cada lado de la ecuación anterior por <span class="math inline"><em>c</em> ≠ 0</span>.</p>
            <p>TEOREMA 1</p>
            <p>Soluciones de <span class="math inline"><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span> con eigenvalores Sea <span class="math inline"><em>λ</em></span> un eigenvalor (constante) de la matriz de coeficientes <span class="math inline"><strong>A</strong></span> del sistema lineal de primer orden <br /><span class="math display"><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span><br /></p>
            <p>Si <span class="math inline"><strong>v</strong></span> es un eigenvector asociado de <span class="math inline"><em>λ</em></span>, entonces</p>
            <p><br /><span class="math display"><strong>x</strong>(<em>t</em>)=<strong>v</strong><em>e</em><sup><em>λ</em><em>t</em></sup></span><br /></p>
            <p>es una solución no trivial del sistema.</p>
            <h2 id="reales-distintos">2 Reales distintos</h2>
            <p>Si los eigenvalores <span class="math inline"><em>λ</em><sub>1</sub>, <em>λ</em><sub>2</sub>, …, <em>λ</em><sub><em>n</em></sub></span> son reales y distintos, entonces se pueden obtener los eigenvectores asociados <span class="math inline"><strong>v</strong><sub>1</sub>, <strong>v</strong><sub>2</sub>, …, <strong>v</strong><sub><em>n</em></sub></span>. En este caso, puede demostrarse que los vectores de la solución particular dada por el siguiente método y son siempre linealmente independientes.</p>
            <p>1. Primero se resuelve la ecuación característica dada por dddd para encontrar los eigenvalores <span class="math inline"><em>λ</em><sub>1</sub>, <em>λ</em><sub>2</sub>, …, <em>λ</em><sub><em>n</em></sub></span> de la matriz <span class="math inline"><strong>A</strong></span>.</p>
            <p>2. Luego se procede a encontrar los <span class="math inline"><em>n</em></span> eigenvectores linealmente independientes <span class="math inline"><strong>v</strong><sub>1</sub>, <em>v</em>2, …, <strong>v</strong><sub><em>n</em></sub></span> asociados con estos eigenvalores.</p>
            <p>3. Se obtienen <span class="math inline"><em>n</em></span> soluciones linealmente independientes <br /><span class="math display">$${\mathbf{x}}_1 (t) = {\mathbf{v}}_1 e\lambda_1 t , \hspace{2em}
            {\mathbf{x}}_2 (t) = {\mathbf{v}}_2 e\lambda_2 t ,\hspace{2em}
            \dots,\hspace{2em}
            {\mathbf{x}}_n (t) = {\mathbf{v}}_n e\lambda_n t$$</span><br /></p>
            <p>En este caso, la solución general de <span class="math inline"><strong>x</strong> = <strong>A</strong><strong>x</strong></span> es una combinación lineal <br /><span class="math display"><strong>x</strong><sub>(</sub><em>t</em>)=<em>c</em><sub>1</sub><strong>x</strong><sub>1</sub>(<em>t</em>)+<em>c</em><sub>2</sub><strong>x</strong><sub>2</sub>(<em>t</em>)+…+<em>c</em><sub><em>n</em></sub><strong>x</strong><sub><em>n</em></sub>(<em>t</em>)</span><br /> de estas <span class="math inline"><em>n</em></span> soluciones.</p>
            <h2 id="complejos">Complejos</h2>
            <p>Si algunos de los eigenvalores son complejos, con tal que sean distintos, el método descrito previamente obtiene de todas maneras <span class="math inline"><em>n</em></span> soluciones linealmente independientes. La única complicación es que los eigenvectores asociados con eigenvalores complejos son comúnmente complejos, de tal manera que se tendrán soluciones con valores complejos. Para obtener soluciones con valores reales, obsérvese que -debido a que se asume que la matriz <span class="math inline"><strong>A</strong></span> tiene sólo entradas reales- los coeficientes en la ecuación característica en serán todos reales. En consecuencia, cualesquiera eigenvalores complejos se presentarán en pares conjugados complejos. Supóngase entonces que <span class="math inline"><em>λ</em> = <em>p</em> + <em>q</em><em>i</em></span> y <span class="math inline">$\bar{\lambda}=p-qi$</span> son un par de eigenvalores de este tipo.</p>
            <p>Si <span class="math inline"><strong>v</strong></span> es un eigenvector asociado con <span class="math inline"><em>λ</em></span>, tal que</p>
            <p><br /><span class="math display">(<strong>A</strong> − <em>λ</em><strong>I</strong>)<strong>v</strong> = 0</span><br /></p>
            <p>entonces, tomando en esta ecuación el complejo conjugado, se llega a <br /><span class="math display">$$({\mathbf{A}}- \bar{\lambda} {\mathbf{I}})\bar{{\mathbf{v}}} = 0$$</span><br /> puesto que <span class="math inline">${\mathbf{A}}=\bar{{\mathbf{A}}}$</span> e <span class="math inline">${\mathbf{I}}=\bar{{\mathbf{I}}}$</span> (siendo estas matrices reales) y el conjugado de un producto complejo es el producto de los conjugados de los factores. De este modo, el conjugado <span class="math inline">$\bar{{\mathbf{v}}}$</span> de <span class="math inline"><strong>v</strong></span> será un eigenvector asociado a <span class="math inline"><em>λ</em></span>. Por supuesto, el conjugado de un vector se define componente a componente; si</p>
            <p><br /><span class="math display">$${\mathbf{v}}=
            \begin{bmatrix}
            a_{1}+b_{1}i\\
            a_{2}+b_{2}i\\
            \vdots \\
            a_{n}+b_{n}i
            \end{bmatrix} 
            = 
            \begin{bmatrix}
            a_{1}\\
            a_{2}\\
            \vdots \\
            a_{n}
            \end{bmatrix}
            +
            \begin{bmatrix}
            b_{1}\\
            b_{2}\\
            \vdots \\
            b_{n}
            \end{bmatrix}i
            = {\mathbf{a}}+{\mathbf{b}}i$$</span><br /></p>
            <p>entonces <span class="math inline">$\bar{{\mathbf{v}}} ={\mathbf{a}}-{\mathbf{b}}i$</span>. La solución con valores complejos asociada con <span class="math inline"><em>λ</em></span> y <span class="math inline"><strong>v</strong></span> es por tanto</p>
            <p><br /><span class="math display"><strong>x</strong>(<em>t</em>)=<strong>v</strong><em>e</em><sup><em>λ</em><em>t</em></sup> = <strong>v</strong><em>e</em><sup>(<em>p</em> + <em>q</em><em>i</em>)<em>t</em></sup> = (<strong>a</strong> + <strong>b</strong><em>i</em>)<em>e</em><sup><em>p</em><em>t</em></sup>(cos<em>q</em><em>t</em> + <em>i</em>sin<em>q</em><em>t</em>);</span><br /></p>
            <p>esto es, <br /><span class="math display"><strong>x</strong>(<em>t</em>)=<em>e</em><sup><em>p</em><em>t</em></sup>(<strong>a</strong>cos<em>q</em><em>t</em> − <strong>b</strong>sin<em>q</em><em>t</em>)+<em>i</em><em>e</em><sup><em>p</em><em>t</em></sup>(<strong>b</strong>cos<em>q</em><em>t</em> + <strong>a</strong>sin<em>q</em><em>t</em>).</span><br /></p>
            <p>Debido a que las partes real e imaginaria de una solución de valores complejos son también soluciones, se obtienen así las dos soluciones de valores reales</p>
            <p><br /><span class="math display">$${\mathbf{x}}1(t) = \text{Re}[x(t)] = e^{pt} ({\mathbf{a}}\cos qt - {\mathbf{b}}\sen qt),$$</span><br /> <br /><span class="math display">$${\mathbf{x}}2(t) = \text{Im}[x(t)] = e^{pt} ({\mathbf{b}}\cos qt + {\mathbf{a}}\sen qt)$$</span><br /></p>
            <p>asociadas a los eigenvalores conjugados complejos <span class="math inline"><em>p</em> ± <em>q</em><em>i</em></span>. Es fácil verificar que las mismas dos soluciones de valores reales resultan de tomar las partes real e imagina ria de <span class="math inline">$\bar{{\mathbf{v}}} e^{\bar{\lambda} t}$</span>. Más que memorizar las fórmulas anteriores, es preferible, en un ejemplo específico, proceder de la siguiente manera:</p>
            <p>Encuéntrese primero, de manera explícita, una solución de valor complejo <span class="math inline"><strong>x</strong>(<em>t</em>)</span> asociada con el eigenvalor complejo <span class="math inline"><em>λ</em></span>;</p>
            <p>Posteriormente, obténganse las partes real e imaginaria <span class="math inline"><strong>x</strong><sub>1</sub>(<em>t</em>)</span> y <span class="math inline"><strong>x</strong><sub>2</sub>(<em>t</em>)</span> para conseguir dos soluciones de valores reales independientes, correspondientes a los dos eigenvalores complejos conjugados <span class="math inline"><em>λ</em></span> y <span class="math inline">$\bar{\lambda}$</span>.</p>
            <h2 id="con-multiplicidad">Con multiplicidad</h2>
            <p>En esta sección se presenta el caso en que la ecuación característica</p>
            <p><br /><span class="math display">|<strong>A</strong> − <em>λ</em><strong>I</strong>|=0</span><br /></p>
            <p><span class="math inline"><strong>NO</strong></span> tiene <span class="math inline"><em>n</em></span> raíces distintas, de este modo cuenta con al menos una raíz repetida.</p>
            <p>Un eigenvalor es de multiplicidad <span class="math inline"><em>k</em></span> si es una raíz de multiplicidad <span class="math inline"><em>k</em></span> de la ecuación anterior. Para cada eigenvalor <span class="math inline"><em>λ</em></span>, la ecuación para encontrar cada eigenvector</p>
            <p><br /><span class="math display">(<strong>A</strong> − <em>λ</em><strong>I</strong>)<strong>v</strong> = 0</span><br /></p>
            <p>tiene al menos una solución diferente de cero <span class="math inline"><strong>v</strong></span>, de esta manera existe al menos un eigenvector asociado a <span class="math inline"><em>λ</em></span>.</p>
            <p>De este modo, un eigenvalor de multiplicidad <span class="math inline"><em>k</em> &gt; 1</span> puede cumplir algunas de las dos condiciones siguientes:</p>
            <ul>
            <li><p>Tener <span class="math inline"><em>k</em></span> eigenvectores asociados linealmente independientes.</p></li>
            <li><p>O tener <em>menos</em> de <span class="math inline"><em>k</em></span> eigenvectores asociados linealmente independientes.</p></li>
            </ul>
            <p>En le primer caso se dice que el eigenvalor <em>completo</em> e implica que se puede encontrar un conjunto completo de eigenvectores linealmente independientes necesarios para formar la solución general del sistema homogéneo con coeficientes constantes, en el segundo caso se dice que el eigenvalor es <em>incompleto</em> ya que no se puede encontrar un conjunto completo de <span class="math inline"><em>n</em></span> eigenvectores linealmente independientes, como es necesario para formar la solución general, por lo que se procede de forma distinta a encontrar dos vectores solución linealmente independientes.</p>
            <p>Regresando a los sistemas de <span class="math inline">2 × 2</span>, como se tiene que el eigenvalor <span class="math inline"><em>λ</em></span> es de multiplicidad 2 primero se procede a verificar si es completo o incompleto, eso se hace resolviendo el siguiente de ecuaciones algebraicas con incógnitas <span class="math inline"><em>v</em><sub>1</sub></span> y <span class="math inline"><em>v</em><sub>2</sub></span>, las componentes de <span class="math inline"><strong>v</strong></span>.</p>
            <p>De esta manera, por lo tanto para obtener los valores propios basta resolver la ecuación</p>
            <p><br /><span class="math display">(<strong>A</strong> − <em>λ</em><strong>I</strong>)<strong>v</strong> = 0</span><br /></p>
            <p><br /><span class="math display">$$\left(  \begin{bmatrix}
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
            <br /><span class="math display">$$\left(  \begin{bmatrix}
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
            <br /><span class="math display">$$\begin{bmatrix}
            a-\lambda &amp; b &amp; \\
            c &amp; d-\lambda &amp; \\
            \end{bmatrix}
            \begin{bmatrix}
            v_1\\
            v_2
            \end{bmatrix}
            = 0$$</span><br /></p>
            <p><br /><span class="math display">$$\begin{aligned}
            (a-\lambda)v_1 + bv_2&amp;=0  \\
            cv_1 + (d-\lambda)v_2&amp;=0\end{aligned}$$</span><br /></p>
            <p>La posibilidad de encontrar dos vectores propios linealmente independientes <span class="math inline"><em>v</em><sub>1</sub></span> y <span class="math inline"><em>v</em><sub>2</sub></span>, en este caso se dice que es eigenvalor <span class="math inline"><em>λ</em></span> completo y la solución es queda en la forma</p>
            <p><span class="math inline"><em>Y</em><sub><em>g</em></sub>(<em>t</em>)=<em>C</em><sub>1</sub><em>v</em><sub>1</sub><em>e</em><sup><em>λ</em><em>t</em></sup> + <em>C</em><sub>2</sub><em>v</em><sub>2</sub><em>e</em><sup><em>λ</em><em>t</em></sup></span><br />
            </p>
            <p>En caso de encontrar un vector propio de <strong></strong> <span class="math inline"><em>λ</em></span> y no poder o encontrar otro con el cual sea linealmente independiente, se dice que <span class="math inline"><em>λ</em></span> es incompleto y la solución general se encuentra de la siguiente manera:</p>
            <p>Encontrar un eigenvector <span class="math inline"><em>v</em><sub>1</sub></span> de <strong></strong> <span class="math inline"><em>λ</em></span></p>
            <p>Encontrar un vector <span class="math inline"><em>v</em><sub>2</sub></span> diferente de cero de la ecuación</p>
            <p><span class="math inline">(<em>A</em> − <em>λ</em><em>I</em>)<sup>2</sup><em>v</em><sub>2</sub> = 0</span><br />
            tal que</p>
            <p><span class="math inline">(<em>A</em> − <em>λ</em><em>I</em>)<em>v</em><sub>2</sub> = <em>v</em><sub>1</sub></span><br />
            Fórmense las dos soluciones independientes</p>
            <p><span class="math inline"><em>Y</em><sub>1</sub>(<em>t</em>)=<em>v</em><sub>1</sub><em>e</em><sup><em>λ</em><em>t</em></sup></span><br />
            <span class="math inline"><em>Y</em><sub>2</sub>(<em>t</em>)=(<em>v</em><sub>1</sub><em>t</em> + <em>v</em><sub>2</sub>)<em>e</em><sup><em>λ</em><em>t</em></sup></span><br />
            Y por lo tanto la solución general es</p>
            <p><span class="math inline"><em>Y</em><sub><em>g</em></sub>(<em>t</em>)=<em>C</em><sub>1</sub><em>Y</em><sub>1</sub>(<em>t</em>)+<em>C</em><sub>2</sub><em>Y</em><sub>2</sub>(<em>t</em>)=<em>C</em><sub>1</sub><em>v</em><sub>1</sub><em>e</em><sup><em>λ</em><em>t</em></sup> + <em>C</em><sub>2</sub>(<em>v</em><sub>1</sub><em>t</em> + <em>v</em><sub>2</sub>)<em>e</em><sup><em>λ</em><em>t</em></sup></span><br />
            </p>
            <h1 id="método-de-eigenvalor-para-sistemas-de-ntimes-n">Método de eigenvalor para sistemas de <span class="math inline"><em>n</em> × <em>n</em></span> </h1>
            <p>DE NXN</p>
          </div>
       </div>
   </center>
</body>
</html>