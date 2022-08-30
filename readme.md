<h1>Cálculo IMC</h1>

<h1>🔧 Stack<h1>

<p>Tecnologia Utilizada :</p>

<p>• PHP</p>

<h1>📋 Running</h1>

<p>• Efetuar a instalação do Software XAMPP <p>

<p>• Faça a instalação dos diretórios e arquivos em sua máquina, em seguida copie a pasta do projeto para dentro do local /xampp/htdocs/ </p>

<p>• Inicie o módulo Apache e MySQL no XAMPP <p>

<p>• Para a criação do banco que irá armazenar as informações das querys, será necessário abrir o localhost/phpmyadmin e rodar o seguinte comando: <p>

<p>• CREATE DATABASE IF NOT EXISTS calculo_imc; <p>

<p>• CREATE TABLE usuarios (id int NOT NULL AUTO_INCREMENT,nome varchar(25) COLLATE utf8mb4_general_ci NOT NULL,altura float NOT NULL,peso float NOT NULL,status varchar(10) COLLATE utf8mb4_general_ci NOT NULL,imc float NOT NULL,PRIMARY KEY (id)); <p>

<p>• Por último, na URL de seu navegador, acesse o local onde salvou o arquivo da aplicação, por exemplo: localhost/imc/index.php <p>

<h1>🛠️ Content</h1>

<p>Para deixar a estrutura da página totalmente responsiva e funcional em qualquer dispositivo, foi implementado o Frameword Bootstrap:</p>

<p>• Mobile • Tablet • Web •</p>

<h1>⚙️ Maintenance</h1>

<p>Com a finalidade de deixar a manutenção da aplicação mais fácil, foi pensado em inserir um arquivo apenas com as principais funções que serão executadas na parte de cálculos, armazenando nas variáveis de IMC, PESO e ALTURA (que serão utilizadas ao longo do projeto).</p>

<h1>✒️ Author</h1>

<p>• Elias Nunes de Oliveira</p>