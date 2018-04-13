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
          </div>
       </div>
   </center>
   </body>
</html>