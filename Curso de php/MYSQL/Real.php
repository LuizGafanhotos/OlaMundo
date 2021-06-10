<html>
<head>
    <title>Mysql</title>
    <style>
        section{
            background: #00e6ff;
            border: 13pt;
            border-style: double;
            border-color: red;
        }
        .lado{
            width: 200px;
            height: 100px;
            margin-left: auto;
        }
    </style>
</head>
<body>
    <section>
        <pre>
            <form name="singup" method="post" action="cadastrado.php">
            <h1>Digite o nome do politico abaixo</h1></br>
                Nome: <input type="text" name="nome" /></br>
                Idade: <input type="number" name="id" min="10" max="20"/></br>
                nascimento: <input type="date" name="nasc"/></br>
                email: <input type="email" name="email"/></br>
                <img src="meme.jpg" class="lado">
                <input type="submit" value="Cadastrar">
            </form>
        </pre>
    </section>
</body>
</html>