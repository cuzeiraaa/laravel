<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #6a11cb, #2575fc);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .card {
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        width: 320px;
        text-align: center;
    }

    .card h2 {
        margin-bottom: 20px;
        color: #333;
    }

    .input-group {
        position: relative;
        margin-bottom: 20px;
    }

    .input-group input {
        width: 100%;
        padding: 10px;
        border: 2px solid #ddd;
        border-radius: 8px;
        outline: none;
        transition: 0.3s;
    }

    .input-group label {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateY(-50%);
        color: #999;
        font-size: 14px;
        pointer-events: none;
        transition: 0.3s;
        background: #fff;
        padding: 0 5px;
    }

    .input-group input:focus {
        border-color: #2575fc;
    }

    .input-group input:focus + label,
    .input-group input:not(:placeholder-shown) + label {
        top: -8px;
        font-size: 12px;
        color: #2575fc;
    }

    button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 8px;
        background: #2575fc;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        background: #1a5edb;
    }

    .success {
        margin-top: 15px;
        color: green;
        font-weight: bold;
    }
</style>

<div class="card">
    <h2>Cadastro de Aluno</h2>

    <form action="{{ route('aluno.adicionar') }}" method="post">
        @csrf

        <div class="input-group">
            <input type="text" name="nome" id="nome" required placeholder=" ">
            <label for="nome">Nome</label>
        </div>

        <div class="input-group">
            <input type="email" name="email" id="email" required placeholder=" ">
            <label for="email">E-mail</label>
        </div>

        <button type="submit">Salvar</button>

        @isset($sucesso)
            <div class="success">
                {{ $sucesso }}
            </div>
        @endisset
    </form>
</div>