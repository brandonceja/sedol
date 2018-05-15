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
          <p>A continuación se introduce un método de solución para sistemas de ecuaciones con coeficientes constantes, lineal y homogéneo. Consideremos el sistema de $n$ incógnitas en su forma matricial: </p>
          $$\mathbf{x'}=\mathbf{A}\mathbf{x} $$
          <p>donde $\mathbf{A}$  es una matriz de constantes cuadrada de $n\times n$. Para resolver el sistema es suficiente encontrar $n$ vectores solución linealmente independientes $\mathbf{x}_1, \mathbf{x}_2 ,\dots, \mathbf{x}_n$; la combinación lineal</p>
          $$\mathbf{x}(t) = c_1 \mathbf{x}_1 + c_2 \mathbf{x}_2 + \cdots + c_n \mathbf{x}_n$$
          <p>con coeficientes $c_i$ arbitrarios será entonces una solución general del sistema.</p>
          <p>Para buscar la solución del sistema $\mathbf{x'}=\mathbf{A}\mathbf{x} $ se procede de forma análoga a resolver la ecuación diferencial $x'=ax$ proponiendo la solución $x(t)=ve^{\lambda t}$ donde $v$ y $\lambda$ son constantes a determinar. Si se sustituye esta solución en la ecuación obtenemos lo siguiente:</p>
          \begin{align*}
                         x'&=ax\\
              (ve^{\lambda t})'&=a ve^{\lambda t}\\
             \lambda ve^{\lambda t}&=a ve^{\lambda t}\\
          \end{align*}

          como $e^{\lambda t}\neq 0$ se puede dividir ambos lados entre este términos resultando: 

          \begin{align*}
             \lambda ve^{\lambda t}&=a ve^{\lambda t}\\
                  \lambda v&=a v\\
                \lambda v-a v&=0\\
                (\lambda -a)v&=0
          \end{align*}

          <p>Así, para obtener  $\lambda$ y $v$ se debe resolver $(\lambda -a)v=0$ lo cual se cumple cuando  $(\lambda -a)=0$ o $v=0$. Si $v=0$ obtenemos la solución trivial $x(t)=0$, pero si nos interesa la solución no trivial consideremos $v\neq 0 $, por lo tanto $(\lambda -a)=0$ y entonces $\lambda =a$  de este modo  la solución no trivial  de la ecuación  $x'=ax$  seria $x(t)=ve^{at}$ con $v\neq0$.</p>

          <p>Por analogía al método anterior,es razonable anticipar los vectores solución de la forma:</p>
          $$
           \mathbf{x} (t) =
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
             =\mathbf{v} e^{\lambda t}
           $$
          <p>donde $\lambda, v_1, v_2 ,\dots, v_n$ son constantes apropiadas.</p>
          <p>Ahora sustituyamos en  $\mathbf{x'}=\mathbf{A}\mathbf{x} $ la solución de prueba $\mathbf{x}(t)=\mathbf{v} e^{\lambda t}$, para esto  veamos   primero que $\mathbf{x'}(t)=\lambda \mathbf{v} e^{\lambda t}$:</p>
          $$
          \mathbf{x'} (t) =
          \begin{bmatrix}
          x'_{1}\\
          x'_{2}\\
          \vdots \\
          x'_{n}
          \end{bmatrix} 
          =
          \begin{bmatrix}
          (v_1e^{\lambda t})'\\
          (v_2e^{\lambda t})'\\
          \vdots \\
          (v_1e^{\lambda t})'
          \end{bmatrix}
          =   
          \begin{bmatrix}
           \lambda v_1e^{\lambda t}\\
          \lambda v_2e^{\lambda t}\\
          \vdots \\
          \lambda v_1e^{\lambda t}
          \end{bmatrix}
          =
          \lambda \begin{bmatrix}
          v_1\\
          v_2\\
          \vdots \\
          v_1
          \end{bmatrix}e^{\lambda t}
          =\lambda\mathbf{v} e^{\lambda t}
          $$

          <p>Sustituyendo $\mathbf{x} (t)$  y $\mathbf{x'} (t)$ en $\mathbf{x'}=\mathbf{A}\mathbf{x} $ , el resultado es</p>
          $$\lambda \mathbf{v} e^{\lambda t} = \mathbf{A} \mathbf{v} e^{\lambda t} $$
          <p>Cancelamos el factor escalar diferente de cero $e^{\lambda t}$ para obtener</p>
          \begin{align*}
                    \mathbf{A} \mathbf{v} &= \lambda \mathbf{v}  \\
          \mathbf{A} \mathbf{v} - \lambda \mathbf{v}&=0\\
              (\mathbf{A} - \lambda \mathbf{I} )\mathbf{v}&=0\\
          \end{align*}

          <p>Donde $\mathbf{I}$ es la matriz identidad de  $n \times n$. </p>
          <p>Esto significa que $\mathbf{x}(t)=\mathbf{v} e^{\lambda t}$ será una solución no trivial del sistema siempre que $\mathbf{v}$ sea un vector diferente de cero y $\lambda$ sea una constante tal que la ecuación $(\mathbf{A} - \lambda \mathbf{I} )\mathbf{v}=0$ se cumpla. </p>
          <p>La pregunta ahora es: ¿cómo encontrar $\mathbf{v}$ y $\lambda$?</p>
          <p>Para responder, notemos que dado $\lambda$,  $(\mathbf{A} - \lambda \mathbf{I} )\mathbf{v}=0$ es un sistema de $n$ ecuaciones lineales homogéneas en las incógnitas $v_1, v_2,\dots, v_n$ el cual tiene una solución no trivial <strong>si y sólo si</strong> el determinante de su matriz de coeficientes se anula; esto es</p>
          $$det(\mathbf{A} - \lambda \mathbf{I})=|\mathbf{A}-\lambda \mathbf{I}| = 0$$
          <p>Considerando todo lo anterior,  resolver el sistema $\mathbf{x'}=\mathbf{A}\mathbf{x}$  por el método de valores propios consiste en encontrar un valor de $\lambda$ tal que la ecuación $|\mathbf{A}-\lambda \mathbf{I}| = 0$ se cumpla, y posteriormente resolver la ecuación $(\mathbf{A} - \lambda \mathbf{I})\mathbf{v} = 0$ con este valor de $\lambda$ para obtener $v_1, v_2,\dots, v_n$ y entonces $\mathbf{x}(t)=\mathbf{v} e^{\lambda t}$  será <strong>un</strong> vector solución. El nombre del método proviene de la siguiente definición.</p>
        <a href="tema2-2.php" id="next">&#8250;</a>   
      </div>
   </center>
   <?php 
      include("../arrow.php");
   ?>
   </body>
</html>