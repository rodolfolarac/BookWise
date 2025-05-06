<div class="mt-6 grid grid-cols-2 gap-2">
    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Login</h1>
        <form class="p-4 space-y-4" method="post">
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Email</label>
                <input
                    type="email"
                    class="max-w-[100%] w-full border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 max-w-1/4"
                    name="email">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Senha</label>
                <input
                    type="password"
                    class="max-w-[100%] w-full border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 max-w-1/4"
                    name="senha">
            </div>
            <button type="submit"
                class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border border-2 hover:bg-stone-800 cursor-pointer">
                Logar
            </button>
        </form>
    </div>

    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Registrar</h1>
        <form method="POST" action="/registrar" class="p-4 space-y-4">

            <?php if (isset($mensagem) && strlen($mensagem)): ?>
                <div class="border-green-800 bg-green-900 text-green-400 px-4 py-1 rounded-md border border-2 hover:bg-stone-800 text-sm font-bold">
                    <?= $mensagem ?>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['validacoes']) && sizeof($_SESSION['validacoes']) > 0): ?>
                <div class="border-red-800 bg-red-900 text-red-400 px-4 py-1 rounded-md border border-2 text-sm font-bold">
                    <ul>
                        <li>Deu ruim!</li>
                        <?php foreach ($_SESSION['validacoes'] as $validacao): ?>
                            <li><?= $validacao ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Nome</label>
                <input
                    type="text"
                    class="max-w-[100%] w-full border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 max-w-1/4"
                    name="nome">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Email</label>
                <input
                    type="email"
                    class="max-w-[100%] w-full border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 max-w-1/4"
                    name="email">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Confirme seu email</label>
                <input
                    type="email"
                    class="max-w-[100%] w-full border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 max-w-1/4"
                    name="email_confirmacao">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Senha</label>
                <input
                    type="password"
                    class="max-w-[100%] w-full border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 max-w-1/4"
                    name="senha">
            </div>
            <button type="submit"
                class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border border-2 hover:bg-stone-800 cursor-pointer">
                Registrar
            </button>
            <button type="reset"
                class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border border-2 hover:bg-stone-800 cursor-pointer">
                Cancelar
            </button>
        </form>
    </div>
</div>
