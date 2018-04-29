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
            <h2>1.1. Definiciones preliminares</h2>
            <h3>1.1.1. Sistema de primer orden</h3>
            <p>Dado un sistema de $n$ ecuaciones de primer orden tal como</p><span>
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
               \frac{dx_3}{dt}= g_3(t, x_1, x_2, x_3)&amp;=\sin(t)+ x_2- 5x_3^2\end{aligned}$$</span><br /> se denomina sistema de primer orden ya las derivadas que aparecen son a lo mas de primer orden. No hay una ecuación de segundo como $\frac{d^2x_1}{dt^2}= x_1+ x_2+ x_3$, ni  ninguna de orden superior a uno.</p>
            </div>
            <h3>1.1.2. Sistemas lineales de primer orden</h3>
            <p>Cuando cada una de las funciones $g_1, g_2, \dots, g_n$ es lineal sobre variables independientes $x_1, x_2, \dots, x_n$, obtenemos la forma normal de un sistema de primer orden de las ecuaciones lineales:</p>
            $$\begin{aligned}
            \frac{dx_1}{dt}&amp;=a_{11}(t)x_1+a_{12}(t)x_2+\cdots+a_{1n}(t)x_n+f_1(t)\\
            \frac{dx_2}{dt}&amp;=a_{21}(t)x_1+a_{22}(t)x_2+\cdots+a_{2n}(t)x_n+f_2(t)\\
            &amp;\hspace{8em} \vdots \\
            \frac{dx_n}{dt}&amp;=a_{n1}(t)x_1+a_{n2}(t)x_2+\cdots+a_{nn}(t)x_n+f_n(t)\end{aligned}$$</span><br />A un sistema de este tipo se le llama <i>sistema lineal de ecuaciones diferenciales</i>.</p>
            <button id="btn-ej2">EJEMPLO</button>
            <div id="ej2" class="ej">
               <p>A continuación  cada una de las funciones $g_1, g_2, \dots, g_n$ es lineal sobre $x_1, x_2, \dots, x_n$ es decir,  el  máximo grado solo de las $x_i$ es uno. No hay expresiones del tipo $x_2^5$ o $\sin(x_1+x_2)$, las funciones $f_i(t)$ y $a_{ij}(t)$ pueden son no ser lineales.
               </p>
               $$\begin{aligned}
               \frac{dx_1}{dt}&amp;=3x_1+tx_2+5x_3+\exp(t)\\
               \frac{dx_2}{dt}&amp;=x_1+x_2+x_3\\
               \frac{dx_3}{dt}&amp;=\sin(t)x_1+7x_2+x_3+t^3\\\end{aligned}$$</span><br /> Por lo tanto es un sistema lineal de ecuaciones diferenciales. </p>
               <div class="note">
                  <div class="tnote">
                     <p>NOTA</p>
                  </div>
                  <div class="cnote">
                     <p>Asumimos que tanto los coeficientes $a_{ij}(t)$ como las funciones $f_i(t)$ son continuas en un intervalo común $I$.</p>
                  </div>
               </div>
            </div>
            <h3>1.1.3. Sistemas lineales de primer orden homogéneo</h3>
            <p>Cuando las funciones  $f_i(t)=0$ con $i= 1, 2,\dots, n$, se dice que el sistema lineal es homogéneo; de lo contrario se le dice no homogéneo. Es decir un sistema en la siguiente forma es lineal homogéneo.</p>

            $$\begin{aligned}
            \frac{dx_1}{dt}&amp;=a_{11}(t)x_1+a_{12}(t)x_2+\cdots+a_{1n}(t)x_n\\
            \frac{dx_2}{dt}&amp;=a_{21}(t)x_1+a_{22}(t)x_2+\cdots+a_{2n}(t)x_n\\
            &amp;\hspace{8em} \vdots \\
            \frac{dx_n}{dt}&amp;=a_{n1}(t)x_1+a_{n2}(t)x_2+\cdots+a_{nn}(t)x_n\end{aligned}$$</span><br /></p>
            <button id="btn-ej3">EJEMPLO</button>
            <div id="ej3" class="ej">
               <p>Aquí las funciones  $f_i(t)$ (las que no tienen $x_i$) con $i= 1, 2,\dots, n$ son todas cero y el sistema es lineal, por lo tanto se dice que es sistema lineal es homogéneo</p>
                  $$\begin{aligned}
               \frac{dx_1}{dt}&amp;=3x_1+tx_2+5x_3\\
               \frac{dx_2}{dt}&amp;=x_1+x_2+x_3\\
               \frac{dx_3}{dt}&amp;=\sin(t)x_1+7x_2+x_3\\\end{aligned}$$</span><br /></p>
            </div>
            <h3>1.1.4. Sistemas lineales de primer orden con coeficientes constantes</h3>
            <p> Particularmente, si en un sistema homogéneo todas las funciones $a_{ij}(t)$ son constantes $a_{ij}$ reales, se llama <i>Sistemas  lineal homogéneo de primer orden con coeficientes constantes</i> (SEDOL). En este curso trataremos solo este tipo de sistemas de ecuaciones diferenciales, es decir aquellos dados por: </p>
            $$\begin{aligned}
            \frac{dx_1}{dt}&amp;=a_{11}x_1+a_{12}x_2+\cdots+a_{1n}x_n\\
            \frac{dx_2}{dt}&amp;=a_{21}x_1+a_{22}x_2+\cdots+a_{2n}x_n\\
            &amp;\hspace{8em} \vdots \\
            \frac{dx_n}{dt}&amp;=a_{n1}(t)x_1+a_{n2}x_2+\cdots+a_{nn}x_n\end{aligned}$$</span><br /></p>
            <button id="btn-ej4">EJEMPLO</button>
            <div id="ej4" class="ej">
               <p> En el siguiente sistema todas las funciones $a_{ij}(t)$ son constantes $a_{ij}$ reales, se llama  <i>Sistemas  lineal homogéneo de primer orden con coeficientes constantes</i>.</p>
               $$\begin{aligned}
               x'_1&amp;=2x_1+7x_2+8x_3\\
               x'_2&amp;=3x_1+6x_2+10x_3\\
               x'_3&amp;=4x_1+5x_2+\pi x_3\end{aligned}$$</span><br />Un ejemplo de un sistema con dos incógnitas es el siguiente: 
               <br/><span>
               $$\begin{aligned}
               x'_1&amp;=4x_1+x_2\\
               x'_2&amp;=7x_1+3x_2\end{aligned}$$
               </span><br/></p>
               <div class="note">
                  <div class="tnote">
                     <p>NOTA</p>
                  </div>
                  <div class="cnote">
                     <p>Para simplificar la notación, cuando se trabaje  con sistemas de dos incógnitas se hará $x_1=x$ y $x_2=y$, de esta forma el sistema anterior se puede escribir como:</p>
                     \begin{align*}
                     x'&=4x+y\\
                     y'&=7x+3y
                     \end{align*}
                  </div>
               </div>
            </div>
            <a href="tema1-2.php" id="next">Siguiente</a>
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