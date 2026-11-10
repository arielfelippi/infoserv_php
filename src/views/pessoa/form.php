<h1><?= escapar($titulo) ?></h1>

<?php renderizarFlashMessages(); ?>

<form method="POST" action="<?= escapar($action) ?>">
    <div>
        <label>Nome</label>
        <input
            type="text"
            name="nome"
            value="<?= escapar($pessoa->getNome()) ?>"
        >
    </div>

    <div>
        <label>E-mail</label>
        <input
            type="text"
            name="email"
            value="<?= escapar($pessoa->getEmail()) ?>"
        >
    </div>

    <div>
        <label>Telefone</label>
        <input
            type="text"
            name="telefone"
            value="<?= escapar($pessoa->getTelefone()) ?>"
        >
    </div>

    <br>

    <button type="submit">Salvar</button>

    <a href="<?= url("/pessoas") ?>">Voltar</a>
</form>
